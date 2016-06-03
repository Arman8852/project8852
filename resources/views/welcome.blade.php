<?php include "/Assests_PHP/JS.php";?>
<?php include "/Assests_PHP/CSS.php";?>


                <div class="title">Facebook</div>
                @if(Auth::check())


                {{Auth::user()->name}}||
                {{Auth::user()->facebook_id}}||
                 {{Form::open(array('url'=>'gettopics'))}}

                 {{Form::close()}}

                 <a href="logout"><button type="button"  class="btn btn-primary">Log Out</button></a>
                 
                 <a href="gettopics"><button type="button"  class="btn btn-primary">Submit Article</button></a>
                 <a href="showmystory"><button type="button"  class="btn btn-primary">আমার গল্প</button></a>

                @endif

                @if(!Auth::check())
                    
                    <a href="login"><button type="button"  class="btn btn-primary">Log In</button></a>||
                     <a href="login/facebook"><button type="button"  class="btn btn-primary">Facebook</button></a>
                 @endif
                 <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-574ff1c7c6d166c6"></script>

                