<!DOCTYPE html>
<html lang="en">
    
  
<!-- Mirrored from ithemeslab.com/theme/riana/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Dec 2015 08:41:27 GMT -->

        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>Rikkho</title>
        <meta name="description" content="">
        <meta name="author" content="iThemesLab">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">




<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<?php include "/Assests_PHP/JS.php";?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.4.6/socket.io.min.js"></script>





<?php include "/Assests_PHP/JS.php";?>
<?php include "/Assests_blog_php/CSS.php";?>

        <div id="preloader"></div>
        <div class="body-inner">


        <!-- top header start -->
    
                
        <!-- top header end -->

        <header class="header" id="header" role="banner">
            <!-- navigation start -->
            <div class="navbar">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index-2.html">
                             <img class="img-responsive" src="Assests_blog/images/logo.png" alt="">
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                   
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </div>
        </header>
        <!-- header end -->

        <!-- navhelper start -->
         <section id="nav-helper" class="nav-helper bg-image" style="background:url('Assests_blog/images/all/masshead-1.jpg') no-repeat 50% 50%;">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="page-head">
                            <i class="fa fa-joomla"></i>
                            <h2>Blog</h2>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>







<section id="main-content" class="main-content pad-60">
            <div class="container">
                <div class="row">
                    <!-- page content start -->
                    <div class="col-md-8">

                        <div id="primary" class="content-area">
                            <main id="main" class="site-main" role="main">
                             @foreach($topics as $topic)
                             @if($topic->id>0)
                                <article id="{{$topic->id}}" class="post-class">

                                    <header class="entry-header">
                                        <div class="post-thumbnail">
                                             @foreach($topic->images as $image)
                                          @if($image->image !='')
                                <a href="download/{{$image->image}}"><img src="/uploads/topics/{{$image->image}}" style="height:100px;"></a>
                                        @endif
                                         @endforeach
                                            <div class="thumb-hover">
                                                <div class="thumb-icon">
                                                    <a href="comment/{{$topic->id}}"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="article-title"><a href="comment/{{$topic->id}}">{{$topic->title}}</a></h2>
                                    </header> <!-- /.entry-header -->

                                    <div class="entry-meta">
                                        <span class="date">
                                            <i class="fa fa-clock-o"></i> {{$topic->created_at}}
                                        </span> <!--/.date-->
                                        <span class="author">
                                            <i class="fa fa-user"></i>
                                            <a href="#">{{$topic->user->name}}</a>
                                        </span> <!--/.author-->
                                        <span class="category">
                                            <i class="fa fa-file"></i> Blog
                                        </span> <!--/.category-->
                                        <span class="tags">
                                            <i class="fa fa-user"></i>
                                           
                                            <a href="#">Elderly</a>
                                        </span> <!--/.category-->

                                          <span class="tags">
                                            
                                           <?php
                                              
                                              $zero=count($topic->likes);
                                               if($zero==1){
                                                    
                                               $zero=0;
                                               }

                                               elseif($zero>0){
                                                $zero=$zero-1;
                                               }                      
                                              
                                            ?>
                                            
                                            
                                             
                                              
                                              
                                              





 <div id="like/{{$topic->id}}">{{$zero}}</div>
 
{{Form::open(array('url'=>"postlike/".$topic->id,'id'=>"like_".$topic->id))}}
 <input type="hidden"  value="1" name="like"> 
 <input type="hidden"  value="{{$topic->id}}" name="topic">                                            
 <input type="hidden" value="{{Auth::user()->id}}" name="user">
 <input type="submit" class="btn btn-info" value="like" id="disable/{{$topic->id}}">
    {{Form::close()}}
    
                         
                                           
                                           
                  
                                             
                                        </span> 

                                           



<span class="comments">


</span>

    
<script>
   

   $(function(){

$('#like_{{$topic->id}}').on('submit',function(e){
    $.ajaxSetup({
        header:$('meta[name="_token"]').attr('content')
    })
    e.preventDefault(e);

        $.ajax({

        type:"POST",
        url:'/postlike/{{$topic->id}}',
        data:$(this).serialize(),
        dataType: 'json',
        success: function(data){
    
      document.getElementById('disable/'+data[1]).type="hidden";
       
      
        console.log(data[0]);
        },
        error: function(data){

        }
    })
    });
});

</script>


    
    
 

   


<script>
        
        var socket = io.connect('http://localhost:3000');
        
        socket.on('message:App\\Events\\LikeEvent', function (data) {
        
             
        document.getElementById('like/'+data.id).innerHTML=data.count;
          
    
          });
    </script>







@foreach($topic->likes as $like)
                                             
    @if(Auth::user()->id==$like->parson_id)
                                               
        <script>

        document.getElementById('disable/{{$topic->id}}').type="hidden";

        </script>
                                            
      @endif
             



                                              
        @endforeach 










@endif

@endforeach

{{$topics->links()}}




