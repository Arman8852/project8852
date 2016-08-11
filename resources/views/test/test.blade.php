<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from ithemeslab.com/theme/riana/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Dec 2015 08:41:27 GMT -->
<head>
        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>Riana - Responsive Html5 Charity Theme</title>
        <meta name="description" content="">
        <meta name="author" content="iThemesLab">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Favicons -->
        <link rel="shortcut icon" href="Assests_blog/favicon/favicon.ico">
        <link rel="apple-touch-icon" href="Assests_blog/favicon/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="Assests_blog/favicon/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="Assests_blog/favicon/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="144x144" href="Assests_blog/favicon/apple-touch-icon-144x144.png">

        <!-- CSS-->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="/Assests_blog/css/bootstrap.min.css">
        <!-- FontAwesome -->
        <link rel="stylesheet" href="/Assests_blog/css/font-awesome.min.css">
        <!-- Animation -->
        <link rel="stylesheet" href="/Assests_blog/css/animate.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="/Assests_blog/css/jquery.fancybox.css">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="/Assests_blog/css/owl.carousel.css">
        <!-- Owl theme -->
        <link rel="stylesheet" href="/Assests_blog/css/owl.theme.default.css">
        <!-- Tooltipster -->
        <link rel="stylesheet" href="/Assests_blog/css/tooltipster.css">
        <!-- Text Rotator -->
        <link rel="stylesheet" href="/Assests_blog/css/morphext.css">

        <!-- Theme styles-->
        <link rel="stylesheet" href="/Assests_blog/css/style.css">

        <!-- Preset Style-->
        <link rel="stylesheet" href="/Assests_blog/css/red.css">

        <!-- Responsive styles-->
        <link rel="stylesheet" href="/Assests_blog/css/responsive.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
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
                    <div class="col-md-7">
                        <ol class="breadcrumb ">
                            <li><a href="/">Home</a></li>
                            <li class="active"><span>Blog</span></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- navhelper end -->
        
        <section id="main-content" class="main-content pad-60">
            <div class="container">
                <div class="row">
                    <!-- page content start -->
                    <div class="col-md-8">

                        <div id="primary" class="content-area">
                            <main id="main" class="site-main" role="main">
                             @foreach($topics as $topic)
                                <article id="post-1" class="post-class">

                                    <header class="entry-header">
                                        <div class="post-thumbnail">
                                             <img src="Assests_blog/images/blog/1.jpg" alt="blog-post">
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
                                        <span class="comments">
                                            <i class="fa fa-comment-o"></i>
                                            <a href="#">0 Comments</a>
                                        </span> <!--/.category-->

                                    </div> <!-- /.entry-meta -->

                                    <div class="entry-content">
                                        <p>{{$topic->detail}}</p>
                                    </div> <!-- /.entry-content -->

                                    <footer class="entry-footer">
                                        <a class="btn btn-primary" href="blog-single.html">Read more... <i class="fa fa-angle-right"></i></a>
                                    </footer> <!-- /.entry-footer -->

                                </article> <!--//post1-->
                                @endforeach
                                
                                   

                        <!-- pagination start -->
                        

        <!-- Javascript Files -->
        <!-- initialize jQuery Library -->
        <script type="text/javascript" src="Assests_blog/js/jquery.js"></script>
        <!-- Bootstrap jQuery -->
        <script type="text/javascript" src="Assests_blog/js/bootstrap.min.js"></script>
        <!-- jQuery easing -->
        <script type="text/javascript" src="Assests_blog/js/jquery.easing.1.3.js"></script>
        <!-- jQuery appear -->
        <script type="text/javascript" src="Assests_blog/js/jquery.appear.js"></script>
        <!-- Owl Carousel -->
        <script type="text/javascript" src="Assests_blog/js/owl.carousel.js"></script>
        <!-- jQuery Count To -->
        <script type="text/javascript" src="Assests_blog/js/jquery.countTo.js"></script>
        <!-- jQuery Countdown -->
        <script type="text/javascript" src="Assests_blog/js/countdown-timer.js"></script>
        <!-- jQuery Twitter -->
        <script type="text/javascript" src="Assests_blog/js/tweetie.js"></script>
        <!-- jQuery Accordion -->
        <script type="text/javascript" src="Assests_blog/js/jquery.accordion.js"></script>
        <!-- jQuery Isotope -->
        <script type="text/javascript" src="Assests_blog/js/isotope.js"></script>
        <!-- jQuery Fitvids -->
        <script type="text/javascript" src="Assests_blog/js/jquery.fitvids.js"></script>
        <!-- jQuery Fancybox Gallery -->
        <script type="text/javascript" src="Assests_blog/js/jquery.fancybox.pack.js"></script>
        <!-- jQuery Accordion -->
        <script type="text/javascript" src="Assests_blog/js/jquery.accordion.js"></script>
        <!-- jQuery easy pie chart -->
        <script type="text/javascript" src="Assests_blog/js/jquery.easypiechart.min.js"></script>
        <!-- jQuery tooltipster -->
        <script type="text/javascript" src="Assests_blog/js/jquery.tooltipster.min.js"></script>
        <!-- jQuery text rotator -->
        <script type="text/javascript" src="Assests_blog/js/morphext.min.js"></script>
        <!-- jQuery SmoothScroll -->
        <script type="text/javascript" src="Assests_blog/js/SmoothScroll.js"></script>

        <!-- Template custom -->
        <script type="text/javascript" src="Assests_blog/js/script.js"></script>
        </div>
    <script type="text/javascript">
/* <![CDATA[ */
(function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&a.indexOf("/cdn-cgi/l/email-protection") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf("/cdn-cgi/l/email-protection");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
/* ]]> */
</script>
</body>

<!-- Mirrored from ithemeslab.com/theme/riana/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Dec 2015 08:42:06 GMT -->
</html>

