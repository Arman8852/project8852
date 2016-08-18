<!DOCTYPE html>
 <head>
 
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">  
</head>



<body>
<div class="conatainer">
@foreach($topics as $topic)

 @if($topic->forum_id>0)
 @if($topic->user_id>0) 
<a href="user/userstory/{{$topic->id}}">{{$topic->title}}</a>
<h2>By</h2>
<a href="user/{{$topic->user->id}}">{{$topic->user->name}}</a>


@foreach($topic->images as $image)
@if($image->image !='')
<a href="download/{{$image->image}}"><img src="/uploads/topics/{{$image->image}}" style="border-radius:50%;margin-right:2000px;width:100px;height:100px"></a>
@endif
@endforeach

<p>in</p>
<a href="user/{{$topic->forum->id}}">{{$topic->forum->title}}</a><hr/>
<hr/>
@endif
@endif
@endforeach
{{$topics->links()}}

</div>
@if(Auth::check())


                {{Auth::user()->name}}||
                
                 {{Form::open(array('url'=>'gettopics','files'=>true))}}
                    <div class="form-group">
                    
                         <div class="col-lg-3">
                             <input type="text" name="title" class="form-control"/>
                         </div>
                </div>
</br/>
                   {{Form::textarea('detail')}}<br/>
                  

                  

                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>  
                    <input type="submit"/>
                   {{ Form::select('forum', $forums) }}
                    
                    
                     
                         
                             
                 
           {{Form::close()}}

          
                @endif
</body>
</html>