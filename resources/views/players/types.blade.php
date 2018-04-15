@extends('layouts.app')

@section('content')
<ul>
@foreach ($types as $type)

<li> <a href ="/types/{{$type->id}}"> {{$type->type}}
</a>
 </li>
@endforeach
</ul>

@endsection