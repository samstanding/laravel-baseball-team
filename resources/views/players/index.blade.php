@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Welcome to Your Team</h1>
        <table class="table">
<thead>
<th>  Name </th>
<th> Position </th>
<th> Status </th>
</thead>
<tbody>
@foreach($players as $player)
         @include('players.players')
    @endforeach
    </tbody>
</table>
        
            </div>
    </div>
</div>



@endsection