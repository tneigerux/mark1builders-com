<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
	<head> 
		<title>Mark One Builders &amp; Home Improvement - Contractors Serving Fairfield County, Connecticut</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<meta http-equiv="Content-Language" content="en-us" />
		
		<meta http-equiv="imagetoolbar" content="no" />
		<meta name="MSSmartTagsPreventParsing" content="true" />
		
		<meta name="description" content="Established in 1976, Mark 1 Builders and Home Improvement has been building and remodeling homes in the Fairfield County area for more than 30 years. We also specialize in custom woodworking, stone work, and masonry. So no matter what your home improvement needs, Mark 1 Builders has it covered.Mark Iwaszkiewicz founded Mark 1 Builders and Home Improvement in 1976, after having worked for a few years as a sub-contractor in the Fairfield County area. Thanks to many satisfied customers, a majority of his work has come from referrals and has allowed him to build up his business the old fashioned way. He has more than 30 years of experience and a reputation for the highest quality of workmanship.If it's professionalism, reliability, affordability, experience and meticulous attention to detail you're looking for, then look no further. Call or email Mark 1 Builders and Home Improvement for a free, in-home consultation." />
		<meta name="keywords" content="fairfield county connecticut home improvment builders additions remodel remodeling contractors kitchens bathrooms roofing siding construction windows doors masonry woodwork stonework" />
		
		<meta name="author" content="Ted Neiger" />
		
		<link rel="icon" href="images/favicon.png" type="image/x-icon" />
		
		<style type="text/css" media="all">			
			@import 'css/style.css';
			@import 'css/dyngal.css';
		</style>
	</head>
	<body>
		<div id="page-container">
			<div id="brand">
				<a title="Come home." class="nav" href="index.html"><img alt="Mark I Builders Logo" class="logo" src="images/logo.png" /></a>
				<table class="contactlinks" border="0">
					<tr>
						<td class="icon"><img src="images/phone_icon.png" alt="Phone Icon" /></td>
						<td class="info">(203) 378-0410</td>
						<td class="icon"><a href="#"><img src="images/email_icon.png" alt="Email Icon" /></a></td>
						<td class="info"><a href="#">email Mark I</a></td>
					</tr>
				</table>
			</div>
			<div id="navigation">
				<dl class="nav">
						<dt><span title="Our Home Page"><a class="nav" href="index.html">home</a></span></dt>
						<dt><span title="The Work We Do"><a class="nav" href="services.html">services</a></span></dt>
						<dt><span title="About Us"><a class="nav" href="about.html">about</a></span></dt>
						<dt><span title="What Our Customers Are Saying...."><a class="nav" href="our_customers.html">testimonials</a></span></dt>
						<dt><span title="Photos of Our Work"><a class="nav" href="projects/gallery.php">projects</a></span></dt>
						<dt><span title="Send Us a Message....">contact</span></dt>
				</dl>
			</div>
			<div id="pagebanner">
				<div id="grad">
					<img class="bannerart" src="./images/milau001.jpg" alt="Completed Job"  width="530" height="113" />
					<h1>Contact Us</h1>
				</div>
			</div>
			<div id="content">
				<div id="navtree">
					<img class="iconb" alt="paper pencil icon" src="images/paperpencil_48.png" width="48" height="48" /><br /><br />
					<p>For more information or a free quote, send us a message and we will contact you.</p>
					<p>Please provide a phone number if you prefer a phone call.</p>
					<p>As a potential customer we will not share your email address with anyone.</p>
				</div>
				<div id="form">
							<?php
				function spamcheck($field)
				{
				//eregi() performs a case insensitive regular expression match
				if(eregi("to:",$field) || eregi("cc:",$field)) 
					{
				    return TRUE;
					}
				else
				    {
				    return FALSE;
				    }
				}
				
				if (isset($_REQUEST['email']))
					{
					//check if the email address is invalid
					$mailcheck = spamcheck($_REQUEST['email']);
					if ($mailcheck==TRUE)
						{
						echo "Invalid input";
						}
					else
						{ 
						//send email
					    $email = $_REQUEST['email'] ; 
					    $subject = $_REQUEST['subject'] ;
					    $message = $_REQUEST['message'] ;
					    mail("no-reply@mark1builders.com", "Subject: $subject",
					    $message, "From: $email" );
					    echo "
						<div>
							<img class='icon' src='images/accepted_48.png' width='48' height='48' /> 
							<h2>Thank you for your message.</h2>
							<h2>Someone will contact you shortly.</h2>
						</div>
						</div>";
						}
					}
				else
					//if "email" is not filled out, display the form
					{
					echo "
					<form method='post' action='contact_us.php'>
						<div>
							<h2>Your Email Address:</h2>
							<input size='18' name='email' type='text' /><p>name@example.com<br />(e.g. mark@yahoo.com)</p>
						</div>
						<div>
							<h2>Subject:</h2>
							<input size='18' name='subject' type='text' />
						</div>
						<div class='large'>
							<textarea name='message' rows='8' cols='29'>
							</textarea>
							<input class='button' type='submit' value='send' />
						</div>
					</form>
				</div>";
					}

			?>				
			</div>			
			<div id="base"></div>
			<div id="footer_t"></div>
			<div id="footer">
				<table class="services"> 
					<tr><td>New Construction</td><td>Framing</td><td>Living and Dining Rooms</td></tr>
					<tr><td>New Homes</td><td>Demolition</td><td>Family Rooms</td></tr>
					<tr><td>Siding</td><td>Masonary and Stone Work</td><td>Sunrooms</td></tr>
					<tr><td>Windows and Doors</td><td>Kitchens</td><td>Garages</td></tr>
					<tr><td>Roofing</td><td>Renovations and Repairs</td><td>Additions</td></tr>
					<tr><td>Excavating</td><td>Bathrooms</td><td>Decks, Porches,</td></tr>
					<tr><td>Foundations</td><td>Basements</td><td>Porticoes &amp; Patios</td></tr>
				</table>
			</div>
			<div id="footer_b"></div>			
				<p class="footertext">Copyright &copy; 2008 Mark I Builders &amp; Home Improvement. CT License #553976&nbsp;<a href="privacy_policy.html">Privacy Policy</a> | <a href="terms_of_use.html">Terms of Use</a> | <a href="#">Site Map</a></p>				
		</div>			
	</body>
</html>
