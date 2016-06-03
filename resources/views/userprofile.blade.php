<h1>{{$user->name}}</h1><br/>

<h3>has</h3>

@foreach($user->topics as $topic)

<a href="userstory/{{$topic->id}}">{{$topic->title}}<a>

@endforeach