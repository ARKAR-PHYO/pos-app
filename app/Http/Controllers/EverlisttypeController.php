<?php

namespace App\Http\Controllers;

use App\Everlisttype;
use Illuminate\Http\Request;
use App\Http\Requests\CreateEverlisttypeRequest;

class EverlisttypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }
    public function index()
    {
        $everlisttypes = Everlisttype::with('user')->paginate(5);
        return view('everlists.everlisttype' , compact('everlisttypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $everlisttypes = new Everlisttype();

        return view('everlists.create', compact('everlisttypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEverlisttypeRequest $request)
    {
        $request->user()->everlisttypes()->create($request->only('everlisttypenames'));
        return redirect()->route('everlisttype.index')->with('success', "Your EverList Type has been CREATED!!!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Everlisttype  $everlisttype
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        return view('everlists.show' , ['everlisttypes' => Everlisttype::FindOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Everlisttype  $everlisttype
     * @return \Illuminate\Http\Response
     */
    public function edit(Everlisttype $everlisttypes)
    {
        return view('everlists.edit', compact(['everlisttypes' => new Everlisttype()]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Everlisttype  $everlisttype
     * @return \Illuminate\Http\Response
     */
    public function update(CreateEverlisttypeRequest $request, Everlisttype $everlisttypes)
    {
        $everlisttypes->update($request->only('everlisttypenames'));
        return redirect()->route('everlisttype.index')->with('success', "Your EverList Type has been UPDATED!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Everlisttype  $everlisttype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Everlisttype $everlisttypes)
    {
        $everlisttypes->delete();
        return redirect()->route('everlisttype.index')->with('success', "Your Everlist Type has been DELETED!!");
    }
}
