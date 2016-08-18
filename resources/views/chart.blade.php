<?php include "/Js/js.php";?>
<?php include "/Assests_PHP/JS.php";?>


<div style="height:500px;width:500px">
<canvas id="myChart" width="10px" height="10px"></canvas>
</div>
<script>
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: {!!json_encode($worker)!!},
        datasets: [{
            
            data:{!!json_encode($sallery)!!},
			  
           
            
        }]
    },
    
});

</script>



{{Form::open(array('url'=>"chart",'id'=>"chart"))}}
                        <input type="text" name="worker" >
                        <input type="number" name="sallery" >
                        <input type="submit" value="send">
                        
                    {{Form::close()}}

<script>
   $(function(){

$('#chart').on('submit',function(e){
    $.ajaxSetup({
        header:$('meta[name="_token"]').attr('content')
    })
    e.preventDefault(e);

        $.ajax({

        type:"POST",
        url:'/chart',
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






