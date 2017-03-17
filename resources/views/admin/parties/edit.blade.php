@extends('layouts.admin')

@section('content')

    <h1>Edit Party</h1>

    <div class="row">

        <div class="col-sm-9">

            {!! Form::model($party, ['method'=>'PATCH', 'action'=>['AdminPartiesController@update', $party->id],'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('party_type_id', 'Party Type:') !!}
                {!! Form::select('party_type_id', $party_types, null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('organization_name', 'Organization Name:') !!}
                {!! Form::text('organization_name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('current_last_name', 'Last Name:') !!}
                {!! Form::text('current_last_name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('mothers_maiden_name', 'Mother\'s Maiden Name:') !!}
                {!! Form::text('mothers_maiden_name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('current_first_name', 'First Name:') !!}
                {!! Form::text('current_first_name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('current_middle_name', 'Middle Name:') !!}
                {!! Form::text('current_middle_name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('marital_status', 'Marital Status:') !!}
                {!! Form::text('marital_status', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('current_personal_title', 'Personal Title:') !!}
                {!! Form::text('current_personal_title', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('current_suffix', 'Suffix:') !!}
                {!! Form::text('current_suffix', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('current_nickname', 'Nickname:') !!}
                {!! Form::text('current_nickname', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('gender', 'Gender:') !!}
                {!! Form::text('gender', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('birth_date', 'Birth Date:') !!}
                {!! Form::date('birth_date', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('height', 'Height:') !!}
                {!! Form::text('height', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('weight', 'Weight:') !!}
                {!! Form::text('weight', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('social_security_number', 'SSN:') !!}
                {!! Form::text('social_security_number', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('comments', 'Comments:') !!}
                {!! Form::text('comments', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Update', ['class'=>'btn btn-primary col-sm-6']) !!}
            </div>

            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPartiesController@destroy', $party->id]]) !!}

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