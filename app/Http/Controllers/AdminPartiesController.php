<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartiesRequest;
use App\Party;
use App\Party_Type;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class AdminPartiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Shows all the parties
        $parties = Party::all();
        return view('admin.parties.index', compact('parties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $party_types=Party_Type::OrderBy('description')->pluck('description', 'id')->all();
        return view('admin.parties.create',compact('party_types'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartiesRequest $request)
    {
        //Takes all the values of the request from the create page
        $input = $request->all();
        Party::create($input);
        Session::flash('created_party', 'The Party has been created.');

        return redirect('/admin/parties/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $party_types=Party_Type::OrderBy('description')->pluck('description', 'id')->all();
        $party = Party::findOrFail($id);
        return view('admin.parties.edit', compact('party','party_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PartiesRequest $request, $id)
    {
        //
        $input = $request->all();
        $party = Party::findOrFail($id);
        $party->update($input);
        Session::flash('updated_party', 'The Party has been updated.');
        return redirect('/admin/parties');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $party = Party::findOrFail($id);
        $party->delete();
        Session::flash('deleted_party', 'The Party has been deleted.');
        return redirect ('/admin/parties');
    }
}
