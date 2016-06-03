<table style="border=1px">
<tr>
<td>Forum Title</td>
<td>Forum Details</td>
<td>Topics</td>
<td>Action</td>
</tr>
@foreach($forums as $forum)

<tr>

<td>{{$forum->title}}</td>
<td>{{$forum->detail}}
<td><a href='{{$forum->id}}/topics'>Topics</a></td>
<td>
<a href='forum/{{$forum->id}}/edit'>Edit</a>
<a href='forum/{{$forum->id}}'>View</a>



</td>
</tr>
@endforeach
</table>