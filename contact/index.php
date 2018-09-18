<?php
ob_start();
$page="contact";
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
<section id="contact" class="clear">

 <article>
  
   <h1>Contact us</h1>
   <p><strong>We take pride in listening, And reaching out.</strong><br><br>Feel free to contact us — with questions, to connect, to discuss any issues you may have, or to express your views of the marketplace. We would like to play a role in your firm as you look to the future. All contact is kept in the strictest confidence.<br><br>Please complete the following preliminary information request form so that we can process your search initiation request as efficiently as possible. Complete all fields requested, as each field provides us with critical information to accurately direct your search to the appropriate consultant.</p>
   
   <form id="contact-page" method="post" action="https://www.krpl.in/mailer/">
  
  <fieldset>
   <label for="name">Name</label>
   <input type="text" name="name" id="name" required>
  </fieldset>
  
  <fieldset>
   <label for="email">Email</label>
   <input type="email" name="email" id="email" required>
  </fieldset>
  
  <fieldset>
   <label for="phone">Phone</label>
   <input type="text" name="phone" id="phone" required>
  </fieldset>
  
  <fieldset>
   <label for="phone">City</label>
   <input type="text" name="city" id="city" required>
  </fieldset>
  
  <fieldset style="width:100%">
   <label for="message">Message</label>
   <textarea id="message" name="message"></textarea>
  </fieldset>
  <div class="clear"></div>
 <input type="hidden" id="send_url" name="send_url" value="sukritihrsolutions.com">
 <input type="hidden" id="redirect_url" name="redirect_url" value="http://www.sukritihrsolutions.com">
 <input type="hidden" id="send_email" name="send_email" value="hr@sukritihrsolutions.com">
 <input type="hidden" id="send_name" name="send_name" value="HR">
  <input type="submit" value="Submit">
  
 </form>
   
  
  </article>

 <article>                                

<h2>Reach us at</h2>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14017.80345498693!2d77.253619!3d28.556221!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7e6e454f901ec8ed!2sSUKRITI+HR+SOLUTIONS!5e0!3m2!1sen!2sin!4v1411409804081" width="100%" height="300" frameborder="0" style="border:0"></iframe>
<br><br>
<p>
 <strong>Head Office</strong><br> 
 55 Okhla Industrial Area<br> 
Phase - I<br> 
Near Hotel Crown Plaza<br> 
New Delhi - 65<br> <br>

<strong>New Delhi:</strong><br> 
C-49, <br> 
Guru Ravidas Marg, <br> 
Kalkaji, <br> 
New Delhi 110019 <br> <br> 

</p>



                            </article>
  
 </section>
<?php require_once("../inc/footer.php"); ?>
</body>
</html>
