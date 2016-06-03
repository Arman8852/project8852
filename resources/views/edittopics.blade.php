{{Form::model($topic,['method'=>'PATCH','route'=>['topic.update', $topic->id],'files'=>true])}}

{{Form::text('title')}}
{{Form::textarea('detail')}}
{{ Form::select('forum_id', $forums) }}
<input type="file" name="image"/>
<input type="submit">
{{Form::close()}}