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

<section class="center">
 <ul class="about-1 clear">
  <li class="about-1-left"><div class="rotate-text">Openings</div></li>
  <li class="about-1-right">
  <table class="flat-table flat-table-1" width="100%">
         <thead>
<tr>
          <th>Job Title</td>
          <th>Industry</td>
          <th>Location</td>
          <th>Experience</td>
          <th>Posted on</td>
          <th>Details</td>
         </tr></thead><tbody>


   <?php
	require_once("../inc/functions.php");
    $mysqli=connect();
	$sql = "Select wp_posts.ID AS id, wp_posts.post_date as posted_on, wp_posts.post_title as job_title, post_name as slug From wp_posts where post_type='current-openings' and post_status='publish' ORDER by post_date DESC";
	$res = mysqli_query($mysqli,$sql);
	while ($row = mysqli_fetch_array($res))
	{
		?>
        
        <tr>
          <td><?php echo $row['job_title']; ?></td>
          <td><?php echo getvalue($row['id'],"wpcf-industry"); ?></td>
          <td><?php echo getvalue($row['id'],"wpcf-location"); ?></td>
          <td><?php echo getvalue($row['id'],"wpcf-experience"); ?></td>
          <td><?php echo date("d-M-Y", strtotime($row['posted_on'])); ?></td>
          <td><a href="../current-openings-details/<?php echo $row['slug']; ?>">Apply Now</a></td>
         </tr>
       
        
        <?php
	}
	disconnect($mysqli);
	?>
  </tbody>
 </table>
  </li>
 </ul>
</section>


<?php require_once("../inc/footer.php"); ?>
</body>
</html>
