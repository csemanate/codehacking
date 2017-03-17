@extends('layouts.admin')

@section('content')

    <h1>Create Party Type</h1>

    <div class="row">

        {!! Form::open(['method'=>'POST', 'action'=>'AdminPartyTypesController@store', 'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::text('description', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>

    <div class="row">
        @include('includes.form_error')
    </div>

@endsection
