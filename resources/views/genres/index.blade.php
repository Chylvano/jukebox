@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($genres as $genre)
            <div class="col-sm-3 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$genre->name}}</h5>
                        <a href="{{ url('genre/showSongsByGenre/' . $genre->id ) }}" class="btn btn-info">see all {{$genre->name}} songs</a>
                    </div>
                </div>
                <br>  
            </div>
        @endforeach
    </div>
</div>
@endsection