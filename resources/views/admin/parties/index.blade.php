@extends('layouts.admin')

@section('content')

    @if(Session::has('deleted_party'))
        <p class="bg-danger">{{session('deleted_party')}}</p>
    @elseif(Session::has('created_party'))
        <p class="bg-success">{{session('created_party')}}</p>
    @elseif(Session::has('updated_party'))
        <p class="bg-success">{{session('updated_party')}}</p>
    @endif

    <h1>Parties</h1>
    <a href="{{route('admin.parties.create')}}">Add</a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Type</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        @if($parties)

            @foreach($parties as $party)
                <tr>
                    <td>{{$party->id}}</td>
                    <td><a href="{{route('admin.parties.edit', $party->id)}}">{{$party->party_type->description == 'Persona' ? $party->current_last_name . " " . $party->current_first_name : $party->organization_name}}</a></td>
                    <td>{{$party->party_type->description}}</td>
                    <td>{{$party->created_at->diffForHumans()}}</td>
                    <td>{{$party->updated_at->diffForHumans()}}</td>

                </tr>
            @endforeach

        @endif
        </tbody>
    </table>

@endsection