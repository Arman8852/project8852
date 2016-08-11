<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<?php include "/Assests_PHP/JS.php";?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.4.6/socket.io.min.js"></script>
<body>
 <div id="messages" ></div>

 

<script>
        
        var socket = io.connect('http://localhost:3000');
        
        socket.on('message:App\\Events\\ChatEvent', function (data) {
        
             
        $( "#messages" ).append( "<p>"+data.user+"</p>" );
           $( "#messages" ).append( "<p>"+data.chatdata+"</p>" );
    
          });
    </script>
{{Form::open(array('url'=>"sendmessage",'id'=>"chat"))}}
                        <input type="text" name="message" >
                        <input type="submit" value="send">
                        <input type="hidden" value="{{Auth::user()->name}}" name="user">
                    {{Form::close()}}



  

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





</body> 
















                 