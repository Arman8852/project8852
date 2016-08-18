<!DOCTYPE html>
<html>
<head>
    <title></title>
   <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
 

<input type="text" id="chatdata" >
            


<?php include "/Assests_PHP/JS.php";?>
</body>
<script>
  
//changes code layout by andalib for correction
$('#chatdata').on('keydown',function(e){
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
            console.log(data);
        },
        error: function(data){

        }
    })




   });   
</script> 
</html>



              
              