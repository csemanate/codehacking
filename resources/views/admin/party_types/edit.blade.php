@extends('layouts.admin')

@section('content')

    <h1>Edit Party Type</h1>

    <div class="row">

        <div class="col-sm-9">

            {!! Form::model($party_type, ['method'=>'PATCH', 'action'=>['AdminPartyTypesController@update', $party_type->id],'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('description', 'Description:') !!}
                {!! Form::text('description', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Update', ['class'=>'btn btn-primary col-sm-6']) !!}
            </div>

            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPartyTypesController@destroy', $party_type->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Delete', ['class'=>'btn btn-danger col-sm-6']) !!}
            </div>

            {!! Form::close() !!}

        </div>

    </div>

    <div class="row">
        @include('includes.form_error')
    </div>

@endsection