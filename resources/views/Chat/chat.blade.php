<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
 <link rel="stylesheet" href="/Chat/chat.css"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<?php include "/Assests_PHP/JS.php";?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.4.6/socket.io.min.js"></script>




<div class="container text-center">
    <div class="row">
        
        <div class="round hollow text-center">
        <a href="#" id="show"><span class="glyphicon glyphicon-comment"></span> Chat </a>
        </div>
        
      
   </div>     
       
</div>


<div class="popup-box chat-popup" class="form-control" id="qnimate">
 <div>             
<button class="btn btn-danger form-control" id="hide">X</button>

</div>
<div class="popup-messages-footer">
            {{Form::open(array('url'=>"sendmessage",'id'=>"chat"))}}
                        <input type="text" placeholder="Type..." class="form-control input-sm" id="message" name="message" >
                        <input type="submit" class="btn btn-primary form-control" value="send">
                        <input type="hidden" value="{{Auth::user()->name}}" name="user">
                         <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                    {{Form::close()}}
            
            </div>



  


            
            
           


<div class="popup-messages" id="messages">
            
           <div class ="direct-chat-messages">       
            
          
                      
                    
                    
                    <div class="chat-box-single-line">
                                <abbr class="timestamp"></abbr>
                    </div>
             
                       
                   <div class="direct-chat-info clearfix">
                      
                      </div>
                       
                       
                        <div class="owndata" id="owndata"></div>
                      <div id="typing"></div>
                  </div>
                  </div>
                  </div>
                  

 <audio id="chatsound" preload="auto">
   <source src="Sound/chat.mp3"></source>
</audio>             
  <p>{{Auth::user()->name}}</p>                
</body>
                  
     <script>
   $(function(){

$('#chat').on('submit',function(e){
    $.ajaxSetup({
        header:$('meta[name="_token"]').attr('content')
    })
    e.preventDefault(e);

        $.ajax({

        type:"POST",
        url:'/sendmessage',
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

        var audio = $("#chatsound")[0];
        
        socket.on('message:App\\Events\\ChatEvent', function (data) {
       if({{Auth::user()->id}}==data.id){
             
        $( "#owndata" ).append( "<p>"+data.user+"</p>" );
           $( "#owndata" ).append( "<p>"+data.chatdata+"</p>" );
          
          $("#qnimate").show(500);
           

   }


       if({{Auth::user()->id}}!=data.id){
             
        $( "#owndata" ).append( "<p>"+data.user+"</p>" );
           $( "#owndata" ).append( "<p>"+data.chatdata+"</p>");
          
           $("#qnimate").show(500);
            
           audio.play();
            

           
           }
$("#messages").animate({ scrollTop: $('#messages').height()}, 500);


 
});


socket.on('message:App\\Events\\KeydownEvent', function (data) {
       if({{Auth::user()->id}}!=data.id){
         
      $('#typing').append("<p>"+data.name+ " is Typing" +"</p>");

        
   }

});


socket.on('message:App\\Events\\KeyupEvent', function (data) {
       
         
      document.getElementById('typing').innerHTML="";

        
   

});









      
    </script>

<script>

$("#hide").click(function(){
  $("#qnimate").hide(500);

   });

$("#show").click(function(){
  $("#qnimate").show(500);

   });

</script>

<script>
  

$('#message').on('keydown',function(e){
  
 
    
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


 $.ajax({

        type:"POST",
        url:'/typo',
        data:$(this).serialize(),
        dataType: 'json',
        success: function(data){
            
        },
        error: function(data){

        }
    })

   });   
</script> 


<script>
  

$('#message').on('keyup',function(e){
  
 
    
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


 $.ajax({

        type:"POST",
        url:'/keyup',
        data:$(this).serialize(),
        dataType: 'json',
        success: function(data){
            document.getElementById('typing').innerHTML="";
            
        },
        error: function(data){

        }
    })

   });   
</script> 











</html>


