<?php

namespace App\Http\Controllers;

use App\Models\garage;
use App\Http\Requests\StoregarageRequest;
use App\Http\Requests\UpdategarageRequest;
use App\Models\Depannage;
use App\Models\User;
use Illuminate\Http\Request;

class GarageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $garages = garage::all();

        return view('garage.index', ["garages" => $garages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('garage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoregarageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, garage $garage)
    {
        $garage->garage = $request->garage;
        $garage->gerant = $request->gerant;
        $garage->mail = $request->mail;
        $garage->adresse = $request->adresse;
        $garage->postal = $request->postal;
        $garage->phone = $request->phone;
        $garage->ville = $request->ville;
        $garage->lat = $request->lat;
        $garage->lng = $request->lng;
        $garage->user_id = auth()->user()->id;
        $garage->description = $request->description;
        $garage->save();
        return redirect()->route('dashboard')->with('status', 'Garage ajouter avec succès');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\garage  $garage
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $garages = garage::where('id', $id)->get();
        $depannages= Depannage::where('user_id', auth()->user()->id)->get();

        $depannages_all=Depannage::where('garage', $id)->get();

        //dd($depannages_all);
        return view('garage.show', ['garages' => $garages,'depannages'=>$depannages, 'depannages_all'=>$depannages_all]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\garage  $garage
     * @return \Illuminate\Http\Response
     */
    public function edit( $garage)
    {
        //
        $gar = garage::find($garage);

        $user=User::find($gar->user_id);

        $gar->is_garage = true ;
        $user->profile=3;
        $gar->save();
        $user->save();
        $garages = garage::all();
        return view('garage.index', ["garages" => $garages])->with('status', 'Demande enrôlement soumise avec succès');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategarageRequest  $request
     * @param  \App\Models\garage  $garage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdategarageRequest $request, garage $garage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\garage  $garage
     * @return \Illuminate\Http\Response
     */
    public function destroy(garage $garage)
    {
        //

    }
}
