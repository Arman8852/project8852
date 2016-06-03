{{Form::model($forum,['method'=>'PATCH','route'=>['forum.update', $forum->id]])}}
{{Form::text('title')}}
{{Form::textarea('detail')}}

<button type="submit">Edit</button>


{{Form::close()}}