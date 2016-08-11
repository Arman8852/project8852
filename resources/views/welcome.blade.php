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

  }

});



</script>


   
     
                @if(Auth::check())
                 <div style="margin:100px;">
                <div class="row">
                <div class="col-md-6 col-md-offset-4">
                <h1 style="color:White;font-size:100px;padding-right:50px;">{{Auth::user()->name}}</h1>
                
                 <div style="padding-left:100px">

                 <a href="logout"><button type="button"  class="btn btn-primary">Log Out</button></a>
                 
                 <a href="gettopics"><button type="button"  class="btn btn-primary">Submit Article</button></a>
                 <a href="showmystory"><button type="button"  class="btn btn-primary">আমার গল্প</button></a>

                   </div>
                </div>

                  </div>
                     </div>
                @endif


                 </div>
                @if(!Auth::check())
                <div style="margin:100px;">
                <div class="row">
                <div class="col-md-6 col-md-offset-4">
                 <div style="padding-left:100px">
                    <h1 style="color:White;font-size:100px;padding-right:50px;">Welcome</h1>
                    <a href="login"><button type="button"  class="btn btn-primary">Log In</button></a>||
                     <a href="login/facebook"><button type="button"  class="btn btn-primary">Facebook</button></a>
                    <a href="allstory"><button type="button"  class="btn btn-primary">All Story</button></a>
                   </div>
                   </div>
                   </div>
                     </div>
                 @endif
                 <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-574ff1c7c6d166c6"></script>

                



                