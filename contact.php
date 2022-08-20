

<?php
error_reporting(0);
if(isset($_POST['submit']))
{
	
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers.= 'From:'.$email. "\n" .
                               'Content-Transfer-Encoding: 8bit'."\n".
                               'X-Mailer: PHP/' . phpversion();
                    $headers .= "X-Priority: 3\n";
	

	
# To Email Address 
$to = "antonygeore2711@gmail.com"; 
# Message Subject 
$emailsubject="Enquire Form Details"; 
//$msg .= "Content-Type: multipart/alternative".$eol; 



$msg="<table bgcolor='#ffffff' style='border:0px solid #fa790e; font-family:Times New Roman; width:650px; height:250px' cellspacing='10'>
            <tr bgcolor='#fa790e;'><td colspan='2' style='padding:5px;color:#ffffff; text-transform:uppercase; font-weight:bold; height:50px; font-size:20px; '>Enquire Form </td></tr>
		
			<tr><td style='color:#fa790e;font-weight:bold;'>NAME:</td><td  style='font-weight:bold;'>".$name."</td></tr>
			<tr><td style='color:#fa790e;font-weight:bold;'>EMAIL:</td><td  style='font-weight:bold;'>".$email."</td></tr>
			<tr><td style='color:#fa790e;font-weight:bold;'>MOBILE NUMBER:</td><td  style='font-weight:bold;'>".$phone."</td></tr>
			</table>";   
			
			
		
   mail($to,$emailsubject, $msg, $headers); 
 

}

?>


<html>
<body>
	<script type = "text/javascript">
	
	window.open("thank-you.html","_self");
	</script>
</body>
</html>