<?php

namespace App\Http\Controllers;

use App\Models\Appoinement;
use App\Http\Requests\StoreAppoinementRequest;
use App\Http\Requests\UpdateAppoinementRequest;
use Illuminate\Http\Request;

class AppoinementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$garages=garage::all();

        $appointements = null;
        if (auth()->user()->profile == 2) {
            $appointements = Appoinement::all();
        } else {
            //$appointements = Appoinement::where('user_id', auth()->user()->id);
        }
        return view('appointements.index', ['rdv' => $appointements]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('appointements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAppoinementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Appoinement $appoinement)
    {

        $appoinement->firstname = $request->firstname;
        $appoinement->lastname = $request->lastname;
        $appoinement->mail = $request->mail;
        $appoinement->phone = $request->phone;
        $appoinement->mark = $request->mark;
        $appoinement->model = $request->model;
        $appoinement->phone = $request->phone;
        $appoinement->annee = $request->annee;
        $appoinement->offrespecial = $request->offrespecial;
        $appoinement->attendre = $request->attendre;
        $appoinement->emplacement = $request->emplacement;
        $appoinement->premier_choix = $request->premier_choix;
        $appoinement->premier_heure = $request->premier_heure;
        $appoinement->deux_choix = $request->deux_choix;
        $appoinement->deux_heure = $request->deux_heure;
        $appoinement->agree = $request->agree;
        $appoinement->description = $request->description;
        $appoinement->save();
        return redirect()->back()->with('status', 'ça marche');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\appoinement  $appoinement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $appointement = Appoinement::find($id)->get();

        return view('appointements.show', ['appointements' => $appointement]);
    }
    public function valider_appointement($id)
    {

        $depannage = Appoinement::find($id);
        $depannage->statut = 'Validé';
        $depannage->save();
        return redirect()->route('appointement.index')->with('status', ' Le rendez-vous a été validé avec succès.
        Prière entrer en contact avec le client pour la confirmation.');
    }

    public function annuler_appointement($id)
    {

        $depannage = Appoinement::find($id);
        $depannage->delete();
        return redirect()->route('appointement.index')->with('status', 'Opération effectuée avec succès. ');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appoinement  $appoinement
     * @return \Illuminate\Http\Response
     */
    public function edit(Appoinement $appoinement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAppoinementRequest  $request
     * @param  \App\Models\Appoinement  $appoinement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAppoinementRequest $request, Appoinement $appoinement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appoinement  $appoinement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appoinement $appoinement)
    {
        //
    }
}
