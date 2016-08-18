
<body>



<h1>{{$comment->title}}</h1>
<p>{{$comment->detail}}</p>
<p>{{$comment->id}}</p>
<div id="messages" ></div>

 









    
 {{Form::open(array('url'=>"remark/".$comment->id,'id'=>"ajax"))}}
    

                        <input type="text" name="message" >
                        <input type="submit" value="send">
                        <input type="hidden" value="{{Auth::user()->name}}" name="user">
                        <input type="hidden" value="{{$comment->id}}" name="id">
                    {{Form::close()}}


<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


<?php include "/Assests_PHP/JS.php";?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.4.6/socket.io.min.js"></script>



  

<script>
   $(function(){

$('#ajax').on('submit',function(e){
    $.ajaxSetup({
        header:$('meta[name="_token"]').attr('content')
    })
    e.preventDefault(e);

        $.ajax({

        type:"POST",
        url:'/remark/{{$comment->id}}',
        data:$(this).serialize(),
        dataType: 'json',
        success: function(data){
            console.log(data);
        },
        error: function(data){

        }
    })
    });
});

</script>


<script>
        
        var socket = io.connect('http://localhost:3000');
        var id={{$comment->id}};
        socket.on('message:App\\Events\\CommentEvent', function (data) {
        
             if({{$comment->id}}==data.id){
        
           $( "#messages" ).append( "<p>"+data.remarkdata+"</p>" );
    

    }
     else{

      

     }

          });
    </script>







</body>