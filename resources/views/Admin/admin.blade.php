

@foreach($topics as $topic)
<p>{{$topic->id}}</p>
<h1>{{$topic->title}}</h1>

{{Form::open(['method'=>'DELETE','route'=>['topic.destroy', $topic->id]])}}


<input type="submit" value="Delete">


{{Form::close()}}



@foreach($topic->images as $image)
@if($image->image !='')
<img src="/uploads/topics/{{$image->image}}" style="border-radius:50%;margin-right:2000px;width:100px;height:100px">




{{Form::open(array('url'=>'deleteimage/'.$image->image,'files'=>true))}}

<input type="submit" value="Delete Image">


{{Form::close()}}
@endif

@endforeach

@endforeach