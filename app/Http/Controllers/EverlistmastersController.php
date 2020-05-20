<?php

namespace App\Http\Controllers;

use App\everlistmaster;
use App\everlisttype;
use Illuminate\Http\Request;
use App\Http\Requests\CreateEverlistmasterRequest;

class EverlistmastersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('everlists.masters.everlistmasterlist', ['master' => Everlistmaster::with('user')->paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('everlists.masters._create', ['everlistmaster' => new Everlistmaster(), 'everlisttype' => Everlisttype::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEverlistmasterRequest $request)
    {
        $type = new Everlisttype();
        // dd($request);
        $request->user()->everlistmasters()->create($request->all() + ['user_id' => \Auth::id(), 'everlisttype_id' => $request->type]);
        return redirect()->route('everlistmasters.index')->with('success', "Your Everlist Master has been CREATED!!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\everlistmaster  $everlistmaster
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('everlists.masters._show', ['everlistmaster' => Everlistmaster::findOrFail($id)]);
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
