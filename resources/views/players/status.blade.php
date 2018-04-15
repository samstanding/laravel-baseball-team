@extends('layouts.app')

@section('content')

<h1>Players with the type of {{$type->type}}</h1>

<ul class="list-group">
@foreach ($type->players as $player)

<li class="list-group-item">
{{$player->first_name}} {{$player->last_name}} 
<button>Move to Next Stage</button>
<li>

@endforeach
</ul>

@endsection