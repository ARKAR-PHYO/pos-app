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
    
    //  public function __construct()
    //  {
    //      return $this->middleware('auth');
    //  }

    public function index()
    {
        $everlistmasters = Everlistmaster::with('user', 'everlisttype')->get();
        return view('everlists.everlistmasters.everlistmasterlist', compact('everlistmasters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $everlistmaster = Everlistmaster::with('user', 'everlisttype')->get();

        return view('everlists.everlistmasters._create', compact('everlistmaster'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEverlistmasterRequest $request)
    {
        // dd($request);
        $request->user()->everlistmasters()->create($request);
        return redirect()->route('everlistmasters.index')->with('success', "Your Everlist Master Has Been Created!!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\everlistmaster  $everlistmaster
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $everlistmaster = Everlisttypemaster::findOrFail($id);
        // return view('everlists.everlistmasters.show', compact('everlistmaster'));
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
