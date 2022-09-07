<?php
include("header.php"); 


if(isset($_POST['save']))
{

	$name 	  	= $_POST['name'];
	$email 	  	= $_POST['email'];
	$subject 		= $_POST['subject'];
	$message    = $_POST['message'];

	// TODO:: Change Email Address Here to get Email from Contact Form
    $to = "masudsikdar85@gmail.com";

    $message = "
<html>
<head>
<title>Contact form Mail for Alumni</title>
</head>
<body>
<p>You have got a mail</p>
<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Subject</th>
<th>Message</th>
</tr>
<tr>
<td>$name</td>
<td>$email</td>
<td>$subject</td>
<td>$message</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    mail($to,$subject,$message,$headers);
	
	$sql =  "INSERT into contact ( name, 	email, subject, message) values ('$name', '$email', '$subject', '$message')";
	
	
	$result = $conn->query($sql);
	
	if($result == 1)
	
    {
        echo '<h3> <span style="color:green"><strong><center>Your message has been sent. Thank you!</center></strong></span> </h3>
        ';
    }
    else
    {
      echo '<h3> <span style="color:black"><strong><center>Something Went Wrong! Try Again...</center></strong></span> </h3>
      ';
    }

    
}
?>

    <section id="content" style="padding-top:0px; ">
    <div class="container">
        <div class="row">
          <div class="span12">
          <h3> <span class="highlight"><strong><center>GET IN TOUCH</center></strong></span> </h3>

            <form action="contact.php" method="post" role="form" class="contactForm">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>

              <div class="row">
                <div class="span4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                  <div class="validation"></div>
                </div>
                <div class="span4 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required />
                  <div class="validation"></div>
                </div>
                <div class="span4 form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required />
                  <div class="validation"></div>
                </div>
                <div class="span12 margintop10 form-group">
                  <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                  <div class="validation"></div>
                  <p class="text-center">
                    <button class="btn btn-large btn-theme margintop10" type="submit" name="save">Send message</button>
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section id="bottom">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <div id="twitter-wrapper">
                <div id="twitter">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

<?php
include("footer.php");
?>