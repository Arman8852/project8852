
<head>
	<title>Your Website Title</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
	<meta property="og:url"           content="http://localhost:8000" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="{{$detail->title}}" />
	<meta property="og:description"   content="{{$detail->detail}}" />
	<meta property="og:image"         content="http://localhost:8000/uploads/topics/57500c5785c17model.PNG"/>
</head>



<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6&appId=221415091584047";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<h1>{{$detail->title}}</h1><br/>
<h2>{{$detail->detail}}</h2>
<div class="fb-share-button" data-href="http://localhost:8000/{{$detail->id}}" data-layout="button_count" data-mobile-iframe="true"></div>