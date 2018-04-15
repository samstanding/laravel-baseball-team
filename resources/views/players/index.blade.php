@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Welcome to Your Team</h1>
        @foreach($players as $player)
         @include('players.players')
    @endforeach
            </div>
        </div>
    </div>
</div>



@endsection