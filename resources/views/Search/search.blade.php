<?php include "/Assests_PHP/JS.php";?>
<?php include "/Assests_PHP/CSS.php";?>

<script src="https://code.jquery.com/ui/1.12.0-beta.1/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" type="text/css">
<div class="row">
<div class="col-md-6 col-md-offset-3">
<section class="panel panel-default">
<header class="panel-heading">
{!!Form::open(array('url'=>'selecteduser'))!!}
<input type="text" name="name" id="searchname" class="form-control" placeholder="search user"/>
{!! Form::submit('Submit',['class' =>'btn btn-primary form-control' ]) !!}

{!!Form::close()!!}
</header>
</div>
</section>
</div>
</div>
<script type="text/javascript">
$('#searchname').autocomplete({
  source:'{!!URL::route('autocomplete')!!}',
   minlength:1,
  autoFocus:true,
  select:function(e,ui){

  	console.log(ui);
  }

});



</script>