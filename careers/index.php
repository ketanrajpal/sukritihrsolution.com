<?php
ob_start();
$page="careers";
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
</head>
<body>
<?php require_once("../inc/header.php"); ?>

<section class="center">
 
 <p>We are looking for performance oriented, efficient and dynamic professionals to enable us to improve our already superior credentials in the market. If you are the one who is passionate to make good things better and better to best, we have opportunities for you. You are welcome to send us your resume by email in soft form. Please remember to include information about your education, nature and years of work experience, previous and current employers, present & expected emoluments and position/role sought.</p>
 
 <form id="contact-page" method="post" action="contact.php" enctype="multipart/form-data">
  
  <fieldset style="width:33%;">
   <label for="name">Name</label>
   <input type="text" name="name" id="name" required>
  </fieldset>
  
  <fieldset style="width:33%;">
   <label for="email">Email</label>
   <input type="email" name="email" id="email" required>
  </fieldset>
  
  <fieldset style="width:33%;">
   <label for="phone">Phone</label>
   <input type="text" name="phone" id="phone" required>
  </fieldset>
  
  <fieldset style="width:33%;">
   <label for="phone">Resume</label>
   <input type="file" id="Filedata" name="Filedata">
  </fieldset>
  <fieldset style="width:33%;">
   <label for="phone">Highest Qualification</label>
   <input type="text" name="highest-qualification" id="highest-qualification" required>
  </fieldset>
  <fieldset style="width:33%;">
   <label for="phone">Applying For</label>
   <select id="applyfor" name="apply-for">
    
   
   <?php
	require_once("../inc/functions.php");
    $mysqli=connect();
	$sql = "Select wp_posts.ID AS id, wp_posts.post_date as posted_on, wp_posts.post_title as job_title, post_name as slug From wp_posts where post_type='current-openings' and post_status='publish' ORDER by post_date DESC";
	$res = mysqli_query($mysqli,$sql);
	while ($row = mysqli_fetch_array($res))
	{
		?>
        
        <option value="<?php echo $row['job_title']; ?>"><?php echo $row['job_title']; ?></option>        
        
        <?php
	}
	disconnect($mysqli);
	?>
   </select>
  </fieldset>
  <fieldset style="width:100%">
   <label for="message">Address</label>
   <textarea id="address" name="address"></textarea>
  </fieldset>
  <fieldset style="width:100%">
   <label for="message">About yourself</label>
   <textarea id="message" name="message"></textarea>
  </fieldset>
  <div class="clear"></div>
  <input type="submit" value="Submit">
  
 </form>
 
</section>


<?php require_once("../inc/footer.php"); ?>
</body>
</html>
