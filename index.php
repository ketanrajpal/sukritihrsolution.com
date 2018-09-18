<?php
ob_start();
$page="index";
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<?php require_once("inc/head.php"); ?>
<?php require_once("inc/meta.php"); ?>
<script>$(document).ready(function () {
    $("body").queryLoader2({
        barColor: "#a7ce38",
        backgroundColor: "#FFF",
        percentage: false,
        barHeight: 1,
        completeAnimation: "grow"
    });
});</script>
</head>
<body>
<?php require_once("inc/header.php"); ?>

<section id="home-about-tab" class="clear">
  <article>
    <div>
      <h1>About Sukriti HR Solutions</h1>
      <span class="heading-border"></span>
      <p>Sukriti is the brainchild of the alumni of some of the most prestigious Institutes of India – MIT, IIM, and IMT – to name a few. <strong>Sukriti HR Solutions is a leading Management Consultancy for India, Middle East, Africa, Singapore, GCC & other parts of the world</strong>.<br><br><strong>At Sukriti, we take pride in the fact that we are a people centric organization, and that we put the satisfaction of our clients before anything else. Our dedication towards work and the faith of our clients are our biggest assets</strong>. We offer Human Resource support through Recruitment Consulting and Process Outsourcing, Training and  Development and  Other Online Services as well.<br><br>We operate globally in the field of manpower supply, training and development, business development activities and HR consulting. The quality screening of resumes and pre-screening interviews taken by our management team,  are an integral part of our process which helps us provide quality manpower to our clients.<br><br>Apart from recruitment services, we also provide training programs based on the individual needs to help improve your workforce and make them more efficient so that they deliver the best to your organization.<br><br>Our business development services include strategic consultancy, idea execution, administration support etc. We execute your idea at the most cost effective prices with the maximum advantage to you.<br><br>
      Our Motto is to &ldquo;<strong>MAKING ORGANISATIONS EXTRAORDINARY THROUGH OUTSTANDING  PEOPLE SUPPORT</strong>&rdquo;.</p>
      <a href="">Read More</a> </div>
  </article>
  <article>
    <h1>Latest News</h1>
    <ul id="home-news">
    
    <?php
	require_once("inc/functions.php");
    $mysqli=connect();
	$sql = "SELECT * FROM wp_posts where post_status='publish' and post_type='latest-news' ORDER by post_date DESC LIMIT 5";
	$res = mysqli_query($mysqli,$sql);
	while ($row = mysqli_fetch_array($res))
	{
		?><li><?php echo $row['post_title']; ?></li><?php
	}
	disconnect($mysqli);
	?>
      
    </ul>
     </article>
</section>
<section id="testi">
  <h1><span class="fa fa-users"></span>Testimonials</h1>
  <div id="roller">
    <blockquote>&ldquo; Sukriti approach toward our profile was exceptionally well on target, we had a urgent requirement & we are pleased to tell they provides satisfactory work in lead time given by us. I would certainly recommend them for anyone looking for a recruiter in the Infra / Construction Industry.&rdquo;
      <h2>&mdash; Head of HR for a Infrastructure firm</h2>
    </blockquote>
    <blockquote>&ldquo;Great going Sukriti HR. I have given them three mandates of which they have placed three successful candidates- very professional and efficient. Good luck!!&rdquo;
      <h2>&mdash; Executive Director of Premium Retail Group in India</h2>
    </blockquote>
    <blockquote>&ldquo;Sukiriti is a profession company with talented recruiters which understand our requirement & executed well on time. We completed our first hire in January 2012 since then we have been associated with all technical hiring’s&rdquo;
      <h2>&mdash; Managing Director, Head of Projects, Leading EPC Company </h2>
    </blockquote>
    <blockquote>&ldquo;Sukriti Approach is positive toward their work, I wish them lot of success & looking forward for future recruitment for our company, All the best to Sukriti Team &rdquo;
      <h2>&mdash; Head of Corporate Division in FMCG company</h2>
    </blockquote>
    <blockquote>&ldquo;The consultant I worked with at Sukriti was a pleasure to work with and a valuable part of my build out in Delhi. I realize how hard it is in this market to recruit and to get qualified candidates closed. He demonstrates a mature, positive attitude, yet he is thorough in his approach to introducing candidates.&rdquo;
      <h2>&mdash; HR Head of Pharma Industry</h2>
    </blockquote>
    <blockquote>&ldquo;Sukriti came to meet me as a consultant but was highly impressed with their expertise in our domain. Their ability of approaching the candidates & settling for win win situation for us was impressive. Wishing you all the best in your endeavors.&rdquo;
      <h2>&mdash; Managing Director of a Engineering company</h2>
    </blockquote>
  </div>
  <script>
  $(document).ready(function() {
  $('#roller').quovolver();
});
 </script> 
</section>
<section id="home-services-tab" class="clear">
  <ul class="clear">
    <li>
      <div>
        <h1>Services</h1>
        <p>We are here to provide you with best possible services that are: Process oriented, Client Focused, Experienced Staff, To ensure a fair competition. <br><br>We have with us extensive experience in utilizing our expertise as well as professional recruitment principles to find best possible placement solutions for our clients.</p>
      </div>
    </li>
    <li>
      <a href="../leadership-hiring"><div><center><span class="fa fa-globe"></span></center><h2>Leadership Hiring</h2></div></a>
    </li>
    <li>
      <a href="../international-recruitment-services"><div><center><span class="fa fa-lightbulb-o"></span></center><h2>International Recruitment Services</h2></div></a>
    </li>
    <li>
      <a href="../training-and-development"><div><center><span class="fa fa-cogs"></span></center><h2>Training & Development</h2></div></a>
    </li>
    <li>
      <a href="../overseas-manpower-hiring"><div><center><span class="fa fa-briefcase"></span></center><h2>Overseas Manpower Hiring</h2></div></a>
    </li>
  </ul>
</section>
<?php require_once("inc/footer.php"); ?>
</body>
</html>
