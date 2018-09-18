<div id="header-two-outer">
<header id="header-two" class="clear"> <a href="../"><img src="../img/logo.png" id="logo"></a> 
  <!--<ul id="social">
   <li><a href=""><img src="img/social/facebook.png"></a></li>
   <li><a href=""><img src="img/social/googleplus.png"></a></li>
   <li><a href=""><img src="img/social/linkedin.png"></a></li>
   <li><a href=""><img src="img/social/twitter.png"></a></li>
  </ul>-->
  <nav>
    <ul>
      <li><a href="../" <?php if($page=="index"){?> class="current" <?php } ?>>Home</a></li>
      <li><a href="../about-us" <?php if($page=="about-us"){?> class="current" <?php } ?>>About us</a></li>
      <li class="trigger">
       <a href="../services" <?php if($page=="services" || $page=="international-recruitment-services" || $page=="leadership-hiring" || $page=="training-and-development"){?> class="current" <?php } ?>>Services</a>
       <ul class="submenu">
        <li><a href="../leadership-hiring">Leadership Hiring</a></li>
        <li><a href="../international-recruitment-services">International Recruitment Services</a></li>
        <li><a href="../training-and-development">Training & Development</a></li>
        <li><a href="../overseas-manpower-hiring">Overseas Manpower Hiring</a></li>
       </ul>
      </li>
      <li><a href="../verticals" <?php if($page=="verticals"){?> class="current" <?php } ?>>Verticals</a></li>
      <li><a href="../current-openings" <?php if($page=="current-openings"){?> class="current" <?php } ?>>Current Openings</a></li>
      <li><a href="../careers" <?php if($page=="careers"){?> class="current" <?php } ?>>Careers</a></li>
      <li><a href="../contact" <?php if($page=="contact"){?> class="current" <?php } ?>>Contact</a></li>
    </ul>
  </nav>
  <script>$(".trigger").hover(function(){$(this).children(".submenu").stop().slideToggle("slow");});</script>
</header>
</div>

<?php if($page=="index"){ ?>
<section>
  <ul id="bxslider">
    <li><img src="../img/slide-1.jpg" title="<h1>Committed to transform our promise to reality</h1><h2>From inception to completion – we inspire individuals and organizations to work more effectively and efficiently, and create greater choice in the domain of work, for the benefit of all concerned.</h2>"></li>
    <li><img src="../img/slide-3.jpg" title="<h1>Why spend time on looking for experts</h1><h2>We are here-we provide companies with flexible HR solutions to help them weather peaks and troughs in demand, thereby maintaining and increasing their competitiveness.</h2>"></li>
    <li><img src="../img/slide-4.jpg" title="<h1>We promise to deliver superior client value</h1><h2>We follow strict timelines, highest reliability, best price value, high ethical standards.</h2>"></li>
    <li><img src="../img/slide-2.jpg" title="<h1>We are experienced to handle it all</h1><h2>Having worked for about 65 fortune 500 companies, we've placed individuals in India, Singapore, Malaysia, UAE and South Africa.</h2>"></li>
  </ul>
</section>
<script>
  $('#bxslider').bxSlider({auto:true, captions: true, speed:1000, pause: 10000});
 </script>
 <?php }else{ ?>
 
 	<section id="header-image">
     <img src="../img/<?php echo $page; ?>.jpg" style="width:100%;">
     <article id="image-tag">
      <?php if($page=="about-us"){ ?><h1>Shaping the workforce of tomorrow. Deploying them across the globe today</h1>
      <?php } ?>
      <?php if($page=="services"){ ?><h1> Working with talent</h1>
      <h2>We recruit and inspire the best to ensure that our customers recruit and engage with the best</h2>
      <?php } ?>
      <?php if($page=="careers"){ ?><h1>Our promise is simple – we’re dedicated to your success.</h1>
      <?php } ?>
     </article>
    </section>
 
 <?php } ?>
 
 
 <ul id="social">
  <li><a href="http://www.facebook.com/sukritihrsolutions"><img src="../img/social/facebook.png" /></a></li>
  <li><a href="https://plus.google.com/u/0/111319282711683945387/posts"><img src="../img/social/googleplus.png" /></a></li>
  <li><a href="https://www.linkedin.com/profile/view?id=180560824&trk=spm_pic"><img src="../img/social/linkedin.png" /></a></li>
  <li><a href="https://twitter.com/SukritiHR"><img src="../img/social/twitter.png" /></a></li>
 </ul>
