<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Http\Requests\StoreQuoteRequest;
use App\Http\Requests\UpdateQuoteRequest;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $quote =Quote::all();

        return view('quote.index', ['quotes'=>$quote]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('quote.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuoteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Quote $quote)
    {
        $quote->name = $request->name;
        $quote->mail = $request->mail;
        $quote->phone = $request->phone;
        $quote->service = $request->service;
        $quote->description = $request->description;
        $quote->save();

        return redirect()->back()->with('message', 'test');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $quote = Quote::find($id)->get();
        return view('quote.show', ['quotes'=>$quote]);
    }

    public function valider_quote($id)
    {

        $quote = Quote::find($id);
        $quote->statut = 'Validé';
        $quote->save();
        return redirect()->route('quote.index')->with('status', ' Le devis a été validé et traité avec succès.
        Prière entrer en contact avec le client autres informations complémentaires.');
    }

    public function annuler_quote($id)
    {
        $quote = Quote::find($id);
        $quote->delete();
        return redirect()->route('quote.index')->with('status', 'Opération effectuée avec succès.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function edit(Quote $quote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuoteRequest  $request
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuoteRequest $request, Quote $quote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quote $quote)
    {
        //
    }
}
