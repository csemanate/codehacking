@extends('layouts.admin')

@section('content')

    @if(Session::has('deleted_party_type'))
        <p class="bg-danger">{{session('deleted_party_type')}}</p>
    @elseif(Session::has('created_party_type'))
        <p class="bg-success">{{session('created_party_type')}}</p>
    @elseif(Session::has('updated_party_type'))
        <p class="bg-success">{{session('updated_party_type')}}</p>
    @endif

    <h1>Party Types</h1>
    <a href="{{route('admin.party_types.create')}}">Add</a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Description</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>
        @if($party_types)
            @foreach($party_types as $party_type)
                <tr>
                    <td>{{$party_type->id}}</td>
                    <td><a href="{{route('admin.party_types.edit',$party_type->id)}}">{{$party_type->description}}</a></td>
                    <td>{{$party_type->created_at->diffForhumans()}}</td>
                    <td>{{$party_type->updated_at->diffForhumans()}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@endsection