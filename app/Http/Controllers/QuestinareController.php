<?php

namespace App\Http\Controllers;

use App\Questinare;
use Illuminate\Http\Request;

class QuestinareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questinare = Questinare::latest()->get(); //ovaj kod redja quesinare iteme po datumu od zadnjeg kreiranog do prvog
        return view('questinare.index',compact('questinare'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questinare.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'content'=>'required',
        ]);
        Questinare::create([
            'title'=>$request->title,
            'content'=>$request->content,
        ]);

        return redirect(Route('questinare'));

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Questinare  $questinare
     * @return \Illuminate\Http\Response
     */
    public function show(Questinare $questinare)
    {
        // $questinare = Questinare::find($id);
        return view('questinare.show',compact('questinare'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Questinare  $questinare
     * @return \Illuminate\Http\Response
     */
    public function edit(Questinare $questinare)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Questinare  $questinare
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Questinare $questinare)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Questinare  $questinare
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questinare $questinare)
    {
        //
    }
}
