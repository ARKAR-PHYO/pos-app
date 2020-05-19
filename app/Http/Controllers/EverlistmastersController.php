<?php

namespace App\Http\Controllers;

use App\everlistmaster;
use Illuminate\Http\Request;

class EverlistmastersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $everlistmasters = Everlistmaster::get();
        return view('everlists.everlistmasters.everlistmasterlist');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('everlists.everlistmasters._create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\everlistmaster  $everlistmaster
     * @return \Illuminate\Http\Response
     */
    public function show(everlistmaster $everlistmaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\everlistmaster  $everlistmaster
     * @return \Illuminate\Http\Response
     */
    public function edit(everlistmaster $everlistmaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\everlistmaster  $everlistmaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, everlistmaster $everlistmaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\everlistmaster  $everlistmaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(everlistmaster $everlistmaster)
    {
        //
    }
}
