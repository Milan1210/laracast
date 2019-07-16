<?php

namespace App\Http\Controllers;

use App\Taskset;
use Illuminate\Http\Request;

class TasksetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasksets = Taskset::all();
        return view('taskset.index')->with('tasksets',$tasksets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('taskset.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Taskset::create([
            'title'=>$request->title,]);
            return redirect()->route('taskset.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Taskset  $taskset
     * @return \Illuminate\Http\Response
     */
    public function show(Taskset $taskset)
    {
        return view('taskset.show')->with('taskset',$taskset);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Taskset  $taskset
     * @return \Illuminate\Http\Response
     */
    public function edit(Taskset $taskset)
    {
        return view('taskset.edit',compact('taskset'));
        return $taskset;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Taskset  $taskset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Taskset $taskset)
    {
        $taskset->update($request->all());

        return redirect()->route('taskset.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Taskset  $taskset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Taskset $taskset)
    {
        $taskset->delete();
        return redirect()->route('taskset.index');
    }
}
