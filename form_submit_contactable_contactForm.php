<?php
if(isset($_POST) && !empty($_POST)) {
	$command = $_POST['command'];
	switch($command) {
		case 'contactable-contactForm' :


			$Name = $_POST['name'];
			$Email = $_POST['email'];	
			$dropdown = $_POST['dropdown'];	
			$Comments = $_POST['message'];

		    //$to = "krish@togglehead.in";
			
			$to = "doggiiedogworld@gmail.com";
			$to.=",saanya@togglehead.in";
			
			$subject = "Email From Doggiie Dog World Website - Quick Enquiry";

			 $message = '<center><strong><div style="font-size:22px; color:#000000;">Doggiie Dog World Website Contact Form</strong></div><br><br>
		<div style="color:#000000;"><table border=1 cellspacing="0" cellpadding="10">
		
		<tr>
            <td colspan="2"><strong>Contact Form Details:</strong></td>
        </tr>
        <tr>
            <td>Name:</td>
            <td>'.$Name.' </td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>'.$Email.' </td>
        </tr>
        <tr>
            <td>Service Type:</td>
            <td>'.$dropdown.' </td>
        </tr>
        <tr>
            <td>Message:</td>
            <td>'.$Comments.' </td>
        </tr>
		
</table></div></center>

';
			 
			 

			
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html;\n\tcharset=\"iso-8859-1\"\r\n";
			$headers .= "info@doggiiedogworld.com". "\r\n";
			//$headers .= "doggiietoggle@p3plcpnl0086.prod.phx3.secureserver.net";

			
			if(mail($to, $subject, $message, $headers)) {
				$result = array('status'=>'success', 'message'=>"<div style='float:left; width:100%;'><p align='center' style='margin-top: 40px;color: white; line-height:20px;'><br />Thank you for your enquiry.<br>You will be hearing from us shortly.<br /><br /></p></div>");
				error_reporting(E_ALL);
				ini_set('display_errors', '1');
				echo json_encode($result);
			} else {
				$result = array('status'=>'error', 'message'=>"<p align='center' class='error'><br /><br />Please try again!</p>");
				echo json_encode($result);
			}

	}

} else {
	echo "Sorry! Please try again!";
}

?>