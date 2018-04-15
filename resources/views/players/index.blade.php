@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Welcome to Your Team</h1>
        <table class="table">
<thead>
<th> First Name</th>
<th> Last Name </th>
<th> Position </th>
<th> Activated? </th>
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