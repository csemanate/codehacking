<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartyTypesRequest;
use App\Party_Type;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class AdminPartyTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $party_types = Party_Type::all();
        return view('admin.party_types.index', compact('party_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.party_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartyTypesRequest $request)
    {
        //Takes all the values of the request from the create page
        $input = $request->all();
        Party_Type::create($input);
//        $flash_type_create = 'created_party_type';
//        $flash_message_create = 'The Party Type has been created.';
        Session::flash('created_party_type', 'The Party Type has been created.');

        return redirect('/admin/party_types/');
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
        $party_type = Party_Type::findOrFail($id);
        return view('admin.party_types.edit', compact('party_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PartyTypesRequest $request, $id)
    {
        //
        $input = $request->all();
        $party_type = Party_Type::findOrFail($id);
        $party_type->update($input);
        Session::flash('updated_party_type', 'The Party Type has been updated.');
        return redirect('/admin/party_types');
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
        $party_type = Party_Type::findOrFail($id);
        $party_type->delete();
        Session::flash('deleted_party_type', 'The Party Type has been deleted.');
        return redirect ('/admin/party_types');
    }
}
