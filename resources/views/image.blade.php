<script  src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>  
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css"> 
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>


{{Form::open(array('url'=>'upload/'.$image->id,'files'=>true,'class'=>'dropzone','id'=>'addImages'))}}                       
    


{{Form::close()}}

Completion Of Article:
<div class="progress">
<div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;">
<span>50%</span>
</div>
</div>


<a href="gettopics">See Yours</a>
<h1>{{$user->name}}</h1>

   





