<!-- <li> {{$player->first_name}} {{$player->last_name}} {{$player->position}}</li> -->
<tr>
<td> <a href = "/players/{{$player->id}}">{{$player->first_name}} 
 {{$player->last_name}} </a> </td>
<td> {{$player->position}} </td>
<td>{{$player->type}} </td>
</tr>