<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\garage;
use GuzzleHttp\Client;
use App\Models\Depannage;
use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreDepannageRequest;
use App\Http\Requests\UpdateDepannageRequest;
use App\Models\Appoinement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class DepannageController extends Controller
{
    public function addressIp()
    {
        $url = 'https://api4.ipify.org/?format=json';
        $response = file_get_contents($url);
        $newsData = json_decode($response, true);
        return $newsData['ip'];

    }
    public function getUserLocation()
    {
        return view('depannage.getlocation');
    }
    public function saveUserLocation(Request $request)
    {
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');

        // You can now use $latitude and $longitude in your controller logic

        // For example, you can return a JSON response with the location data
        return response()->json([
            'latitude' => $latitude,
            'longitude' => $longitude,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*  function calculateDistance($lat1, $lon1, $lat2, $lon2) {
        $earthRadius = 6371; // Earth's radius in kilometers

        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);

        $a = sin($dLat / 2) * sin($dLat / 2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon / 2) * sin($dLon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        $distance = $earthRadius * $c; // Distance in kilometers

        return $distance;
    } */

    public function findNearbyStations($userLatitude, $userLongitude, $radiusMeters = 1000)
    {
        $garages = garage::selectRaw(
            "id,
            garage,
            phone,
            adresse,
            description,
            lat,
            lng,
            (6371 * acos(cos(radians($userLatitude)) * cos(radians(lat))
            * cos(radians(lng) - radians($userLongitude))
            + sin(radians($userLatitude)) * sin(radians(lat)))) AS distance"
        )
        ->where('is_garage',1)
        ->having('distance', '>=', $radiusMeters) // Convert meters to kilometers
        ->orderBy('distance')
        ->get();

        return $garages;
    }



    public function depannage(){
        $all_depannage = DB::table('depannages')
        ->join('garages', 'garages.id', '=', 'depannages.garage')
        ->where('depannages.user_id', auth()->user()->id)
        ->select('depannages.*', 'depannages.phone', 'garages.garage')
        ->get();

        return view('depannage.show',['depannages'=>$all_depannage] );
    } /**/

    public function dashboard_customer(){

        $all_depannage = DB::table('depannages')
        ->join('garages', 'garages.id', '=', 'depannages.garage')
        ->select('depannages.*', 'depannages.phone', 'garages.garage')
        ->where('depannages.user_id', auth()->user()->id)
        ->where('depannages.status','<>', 'Fini')
        ->where('depannages.status','<>', 'Refuser')
        ->whereNull('depannages.deleted_at')
        ->get();

        $depannageCount = Depannage::where('id',  auth()->user()->id)->count();
        $rdv = Appoinement::where('id',  auth()->user()->id)->count();

        return view('client.dashboard',['rdv'=>$rdv,
         'depannageCount'=>$depannageCount, 'depannages'=>$all_depannage] );
    }




    public function depannage_customer(){



        $all_depannage = DB::table('depannages')
        ->join('garages', 'garages.id', '=', 'depannages.garage')
        ->select('depannages.*', 'garages.phone', 'garages.garage')
        ->where('depannages.user_id', auth()->user()->id)
        ->where('depannages.status', 'Fini')
        ->get();
        return view('client.parcours',[
          'depannages'=>$all_depannage] );

    }

     public function search(Request $request )
     {
        $date = $request->date;
       $query= DB::table('depannages')
        ->join('garages', 'garages.id', '=', 'depannages.garage')
        ->select('depannages.*', 'garages.phone', 'garages.garage')
        ->where('depannages.user_id', auth()->user()->id)
        ->where('depannages.status', 'Fini');

        // Check if garage is provided
        if ($request->garage) {
            $query->where('garages.garage', 'like', '%'.$request->garage.'%');
        }

        // Check if date is provided
        if ($request->date) {
            $query->whereRaw('DATE(depannages.created_at) = ?', [$request->date]);
        }
         $all_depannage = $query->get();
           // dd($all_depannage);
        return view('client.parcours',[
          'depannages'=>$all_depannage, 'garage'=>$request->garage, 'date'=>$request->date] );

    }

     public function dashboard( )
     {
         //
         //$garages=garage::all();
         $all_depannage =null;
         $depannageCount=null;
         $users = User::where('id','<>',  auth()->user()->id)->get();
         $garages = garage::where('is_garage',1)->count();

         $userCount = User::where('id','<>',  auth()->user()->id)->count();
         $depannageCount = Depannage::all()->count();
         $rdv = null;

                $all_depannage = DB::table('depannages')
                ->join('garages', 'garages.id', '=', 'depannages.garage')

                ->select('depannages.*', 'garages.phone', 'garages.garage')
            ->whereNull('depannages.deleted_at')

                ->get();

                $rdv = Appoinement::all()->count();


         return view('dashboard',['users'=>$users, 'userCount'=>$userCount,'rdv'=>$rdv,
          'garageCount'=>$garages, 'depannageCount'=>$depannageCount, 'depannages'=>$all_depannage] );
     }

     //All for garage
     public function dashboard_garage( )
     {

         //
         //$garages=garage::all();
         $all_depannage =null;
         $depannageCount=null;
         $users = User::where('id','<>',  auth()->user()->id)->get();
         $garages = garage::where('id','<>',  auth()->user()->id)->count();
         $userCount = User::all()->count();
        /**/  //$depannageCount = Depannage::where('garage',  auth()->user()->id)->count();

        $depannageCount = DB::table('depannages')
                         ->join('garages', 'garages.id', '=', 'depannages.garage')
                         ->where('garages.user_id', auth()->user()->id)
                         ->whereNull('depannages.deleted_at')
                         ->count();
        $all_depannage = DB::table('depannages')
            ->join('garages', 'garages.id', '=', 'depannages.garage')
            ->select('depannages.*', 'garages.phone', 'garages.garage')
            ->where('garages.user_id', auth()->user()->id)
            ->whereNull('depannages.deleted_at')
            ->get();

        $rdv = Appoinement::where('id',  auth()->user()->id)->count();

        return view('dashboard',['users'=>$users, 'userCount'=>$userCount,'rdv'=>$rdv,
        'garageCount'=>$garages, 'depannageCount'=>$depannageCount, 'depannages'=>$all_depannage] );
     }

     public function pricing (Request $request, $id){

        $depannage = Depannage::find($id);
        $depannage->price = $request->price;
        $depannage->status = 'Soumis';
        $depannage->save();
        return redirect()->back()->with('success','');


     }

     public function valider ($id){

        $depannage = Depannage::find($id);
        $depannage->status = 'Valider';
        $depannage->save();
        return redirect()->back()->with('success','');


     }
     public function refuser ($id){

        $depannage = Depannage::find($id);
        $depannage->status = 'Refuser';
        $depannage->save();
        return redirect()->back()->with('success','');


     }
     public function annuler ($id){

        $depannage = Depannage::find($id);
        $depannage->delete();
        return redirect()->back()->with('success','');


     }

     public function valider_depannage ($id){

        $depannage = Depannage::find($id);
        $depannage->status = 'Fini';
        $depannage->save();
        return redirect()->back()->with('success','');


     }

     //end garage

     public function index(Request $request)
    {
       //Recuperer l'adresse IP lors de la mise en ligne
       $url = 'https://api4.ipify.org/?format=json';
       $response = file_get_contents($url);
       $newsData = json_decode($response, true);

       $ip = $newsData['ip'];

       //récupération longitude et latitude
       //$url='http://api.ipstack.com/'.$ip.'?access_key=fd9dd729be08b63f9e7f192109af9dcd';
       $url='https://api.ipgeolocation.io/ipgeo?apiKey=77ae8ef9200743859074dc159c3381ba&ip='.$ip;
       $response=file_get_contents($url);
       $data = json_decode($response, true);
       $userLatitude = $data['latitude'];
       $userLongitude = $data['longitude'];
       $flag = $data['country_flag'];

       $garageAll = $this->findNearbyStations($userLatitude, $userLongitude, 0);
       $newArray_near = [];
       $newArray_away = [];

   /* dd($garageAll); */
   foreach ($garageAll as $row) {
       if ($row->distance <4 )  {
           $newArray_near[] = $row;
       }else{
        $newArray_away[] = $row;

       }
   }
   return view('depannage.index', ['nears'=> $newArray_near, 'away'=> $newArray_away, "flag"=>$flag])->with('results', 'Visitons');





    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function command($id)
    {
        $garages=garage::where('id',$id)->get();
        return view('depannage.command', ['garages'=>$garages]);

    }
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDepannageRequest  $request
     * @return \Illuminate\Http\Response
     */



     public function store(Request $request, Depannage $depannage )
    {


        $ip = $this->addressIp();
        $depannage->name = $request->name;
        $depannage->prenom = $request->prenom;
        $depannage->mail = $request->mail;
        $depannage->phone = $request->phone;
        $depannage->garage = $request->garage;
        $depannage->ip = $ip;
        $depannage->user_id = auth()->user()->id;
        $depannage->description = $request->description;
        $depannage->save();
        return redirect()->route('depannage.index')->with('message', "we succeded");
    }

    /*
    *
     * Display the specified resource.
     * @param  \App\Models\Depannage  $depannage
     * @return \Illuminate\Http\Response
     */
    public function show( $depannage)
    {
        //

        //Find other garage near to customer
       /*  $ip=$this->addressIp();
        $url='https://api.ipgeolocation.io/ipgeo?apiKey=77ae8ef9200743859074dc159c3381ba&ip='.$ip;
        $response=file_get_contents($url);
        $data = json_decode($response, true);
        $userLatitude = $data['latitude'];
        $userLongitude = $data['longitude'];
        $flag = $data['country_flag'];
        $garageAll = $this->findNearbyStations($userLatitude, $userLongitude, 0);
        $newArray_near = [];

        foreach ($garageAll as $row) {
            if ($row->distance <4 )  {
                $newArray_near[] = $row;
            }
        }

        $details = DB::table('depannages')
        ->join('garages', 'garages.id', '=', 'depannages.garage')
        ->select('depannages.*', 'garages.phone', 'garages.garage')
        ->where('depannages.id', $depannage)
        ->get();

        foreach ($details as $detail) {
            $depannageId = $detail->id;
        }
 */
        $depannages = DB::table('depannages')
        ->join('garages', 'garages.id', '=', 'depannages.garage')
        ->select('depannages.*', 'garages.phone', 'garages.garage')
        ->whereNull('depannages.deleted_at')
        ->where('garages.user_id', auth()->user()->id)
        ->get();
        return view ('depannage.edit',['depannages'=>$depannages] );

    }

    //Click with ajax
    public function detail_depannage($id){

        $item = DB::table('depannages')
        ->join('garages', 'garages.id', '=', 'depannages.garage')
        ->where('depannages.id', $id)
        ->select('depannages.*', 'depannages.phone', 'garages.garage')
        ->get();

        if (!$item) {
            return response()->json(['error' => 'Item not found'], 404);
        }
        return view('detail_depannage',['depannages'=>$item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Depannage  $depannage
     * @return \Illuminate\Http\Response
     */
    public function edit(Depannage $depannage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDepannageRequest  $request
     * @param  \App\Models\Depannage  $depannage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDepannageRequest $request, Depannage $depannage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Depannage  $depannage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Depannage $depannage)
    {
        //
    }

    public function redirect ( ){

        switch (auth()->user()->profile) {
            case '1':
                return $this->dashboard_customer();

            case '3':
                return $this->dashboard_garage();
            case '2':
                # code...
                return $this->dashboard();

        }
    }
}
