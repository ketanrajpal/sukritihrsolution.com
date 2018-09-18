<?php
ob_start();
$page="current-openings";
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<?php require_once("../inc/head.php"); ?>
<?php require_once("../inc/meta.php"); ?>
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>
<body>
<?php require_once("../inc/header.php"); ?>
<style>
 strong
 {
	 color:#3886df;
 }
</style>
<section class="center">
 <ul class="about-1 clear">
  <li class="about-1-left"><div class="rotate-text">Opening</div></li>
  <li class="about-1-right job-description">
  


   <?php
	require_once("../inc/functions.php");
    $mysqli=connect();
	$sql = "Select wp_posts.ID AS id, wp_posts.post_date as posted_on, wp_posts.post_title as job_title, post_name as slug From wp_posts where post_type='current-openings' and post_status='publish' and post_name='".$_GET["slug"]."'";
	$res = mysqli_query($mysqli,$sql);
	while ($row = mysqli_fetch_array($res))
	{
		?>
        
        
        <h2><?php echo $row['job_title']; ?></h2>
        
        <a href="../careers" class="button right">Apply Now</a>
        <!-- SMARTADDON BEGIN -->
<script type="text/javascript">
(function() {
var s=document.createElement('script');s.type='text/javascript';s.async = true;
s.src='http://s1.smartaddon.com/share_addon.js';
var j =document.getElementsByTagName('script')[0];j.parentNode.insertBefore(s,j);
})();
</script>

<div id="sa_share_bar">
<a id="sa_share_facebook" layout="icon" url="http://www.sukritihrsolutions.com/" size="24"></a>
<a id="sa_share_twitter" layout="icon" url="http://www.sukritihrsolutions.com/" size="24"></a>
<a id="sa_share_googleplus" layout="icon" url="http://www.sukritihrsolutions.com/" size="24"></a>
<a id="sa_share_email" layout="icon" url="http://www.sukritihrsolutions.com/" size="24"></a>
<a id="sa_share_share" layout="icon" url="http://www.sukritihrsolutions.com/" size="24"></a>
<a id="sa_share_linkedin" layout="icon" url="http://www.sukritihrsolutions.com/" size="24"></a>
</div>
<!-- SMARTADDON END --><br><br>
        <p>
         <strong>Industry: </strong><?php echo getvalue($row['id'],"wpcf-industry"); ?> | <strong>Posted on: </strong><?php echo date("d-M-Y", strtotime($row['posted_on'])); ?><br><br>
         <strong>Location: </strong><?php echo getvalue($row['id'],"wpcf-location"); ?><br>
         <strong>Functional Area: </strong><?php echo getvalue($row['id'],"wpcf-functional-area"); ?><br>
         <strong>Role: </strong><?php echo getvalue($row['id'],"wpcf-role"); ?><br>
         <strong>Reporting to: </strong><?php echo getvalue($row['id'],"wpcf-reporting-to"); ?><br>
         <strong>Key Skills: </strong><?php echo getvalue($row['id'],"wpcf-key-skills"); ?><br><br>
         <strong>Experience: </strong><?php echo getvalue($row['id'],"wpcf-experience"); ?>
         <br><br>
         <strong>Job Description</strong>
        </p>
        <?php echo getvalue($row['id'],"wpcf-job-description"); ?>
        
        <br><p><strong>Qualifications</strong>: <?php echo getvalue($row['id'],"wpcf-qualification"); ?></p>
        <br><p><strong>Employer Details</strong>: <?php echo getvalue($row['id'],"wpcf-employer-detail"); ?></p>
        
        <?php
	}
	disconnect($mysqli);
	?>
    <br><Br><Br><br>
    <a href="../careers" class="button">Apply Now</a>

  </li>
 </ul>
</section>


<?php require_once("../inc/footer.php"); ?>
</body>
</html>
