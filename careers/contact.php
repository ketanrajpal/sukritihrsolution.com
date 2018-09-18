<?php
$con=mysql_connect('localhost', 'sukritih_user', '[HzB)a~*,!Vu');
mysql_select_db("sukritih_database",$con);
$sql = "Insert into lcm_contacts (firstName, Email, Phone, leadType, leadSource,dateAdded,dateModified,lastModifiedBy,assignedTo,lStatus,customField,customField2,customField3,Address)VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."',1,2,NOW(),NOW(),1,1,2,'".$_POST['highest-qualification']."','".$_POST['apply-for']."','".$_POST['message']."','".$_POST['address']."')";
mysql_query($sql);
$filename=md5(date("F j, Y, g:i a")).$_FILES['Filedata']['name'];
move_uploaded_file($_FILES['Filedata'] ['tmp_name'], "../uploads/".$filename);
$id=mysql_insert_id();
$link="http://www.sukritihrsolutions.com/uploads/".$filename;
$sql="insert into lcm_leadNotes (leadID,Note,creator,dateAdded)VALUES('".$id."','".$link."','1','NOW()')";
mysql_query($sql);
mysql_close($con);
header("Location: ../index.php");
?>