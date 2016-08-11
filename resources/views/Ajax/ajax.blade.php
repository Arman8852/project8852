<body>



<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<?php include "/Assests_PHP/JS.php";?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.4.6/socket.io.min.js"></script>

 {{Form::open(array('url'=>"ajax",'id'=>"ajax"))}}
    

                        <input type="text" name="message" >
                        <input type="submit" value="send">
                        <input type="hidden" value="{{Auth::user()->name}}" name="user">
                    {{Form::close()}}



  

<script>
   $(function(){

$('#ajax').on('submit',function(e){
    $.ajaxSetup({
        header:$('meta[name="_token"]').attr('content')
    })
    e.preventDefault(e);

        $.ajax({

        type:"POST",
        url:'/ajax',
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