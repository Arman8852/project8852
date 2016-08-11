<?php include "/Assests_PHP/JS.php";?>
<?php include "/Assests_PHP/CSS.php";?>


<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css"> 
<table class="table table-striped table bordered table-responsive">

<tr class="info">
<td>Title</td>
<td>Detail</td>
<td>Action</td>

</tr>



@foreach($user->topics as $topic)

<tr>
<td>{{$topic->title}}</td>
<td>{{$topic->detail}}</td>
<td><a href="topic/{{$topic->id}}/edit"><button type="button"  class="btn btn-primary">Edit</button></a></td>
</tr>


@endforeach