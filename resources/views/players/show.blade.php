@extends('layouts.app')

@section ('content')
<table class="table">
<thead>
<th>  Name </th>
<th> Position </th>
<th> Status </th>
<th> Activate </th>
<th> Deactivate </th>
<th> Confirm </th>
</thead>
<tbody>
<tr>
<td> {{$player->first_name}} {{$player->last_name}} </td>
<td> {{$player->position}} </td>
<td>{{$player->type}} </td>
<td> <button> Activate </button> </td>
<td> <button> Deactivate </button> </td>
<td> <button> Confirm </button> </td>
    </tbody>
</table>
        


@endsection