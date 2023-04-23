<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Developer Jobs - Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<img src="header.png" alt="Developer Jobs" />
<img src="developer.jpeg" alt="Developer Jobs" />
<h3>Developer Jobs - Registration</h3>

<?php
  if (isset($_POST['submit'])) 
  {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $job = $_POST['job'];
    $resume = $_POST['resume'];
    $output_form = 'no';

    if (empty($first_name)) 
	{
      // $first_name is blank
      echo '<p class="error">You forgot to enter your first name.</p>';
      $output_form = 'yes';
    }

    if (empty($last_name)) 
	{
      // $last_name is blank
      echo '<p class="error">You forgot to enter your last name.</p>';
      $output_form = 'yes';
    }

    if (empty($email)) 
	{
      // $email is blank
      echo '<p class="error">You forgot to enter your email address.</p>';
      $output_form = 'yes';
    }
	
	if (!preg_match('/[a-zA-Z0-9][a-zA-Z0-9\._\-&!?=#]*@/', $email)) 
	{
		// $email is invalid because LocalName is bad
		echo '<p class="error">Your email address is invalid.</p>';
		$output_form = 'yes';
	}
	
	else 
	{ 
		// Strip out everything but the domain from the email
		$domain = preg_replace('/[a-zA-Z0-9][a-zA-Z0-9\._\-&!?=#]*@/', '', $email);
		// Now check if $domain is registered (with the Domain Name System)
		if (!checkdnsrr($domain)) 
		{
			echo '<p class="error">Your email address is invalid.</p>';
			$output_form = 'yes';
		}
	}
	
    if(empty($phone)) 
	{
      // $phone is blank
      echo '<p class="error">You forgot to enter your phone number.</p>';
      $output_form = 'yes';
    }

	if(!preg_match('/^\(?[2-9]\d{2}\)?[-\s]\d{3}-\d{4}$/',$phone)) 
	{
        // $phone is not valid
        echo '<p class="error">Invalid phone number.</p>';
        $output_form = 'yes';
	}
  
    if(empty($job)) 
	{
      // $job is blank
      echo '<p class="error">You forgot to enter your desired job.</p>';
      $output_form = 'yes';
    }

    if(empty($resume)) 
	{
      // $resume is blank
      echo '<p class="error">You forgot to enter your resume.</p>';
      $output_form = 'yes';
    }
  }
  else 
  {
    $output_form = 'yes';
  }

  if ($output_form == 'yes') 
  {
    $first_name = ''; $last_name = ''; $email = ''; $phone = '';  $job = ''; $resume = '';
?>

      <p>Register with Developer Jobs, and post your resume.</p>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
    <span class="row">
        <label for="firstname">First Name:</label>
        <input id="firstname" name="firstname" type="text" value="<?php echo $first_name; ?>"/>
    </span>
	
    <span class="row">
        <label for="lastname">Last Name:</label>
        <input id="lastname" name="lastname" type="text" value="<?php echo $last_name; ?>"/>
    </span>
	
    <span class="row">
        <label for="email">Email:</label>
        <input id="email" name="email" type="text" value="<?php echo $email; ?>"/>
    </span>
	
    <span class="row">
        <label for="phone">Phone:</label>
        <input id="phone" name="phone" type="text" value="<?php echo $phone; ?>"/>
    </span>
	
    <span class="row">
        <label for="job">Desired Job:</label>
        <input id="job" name="job" type="text" value="<?php echo $job; ?>"/>
    </span>

    <span class="row">
        <label for="resume">Paste your resume here:</label>
        <textarea id="resume" name="resume" rows="4" cols="40"><?php echo $resume; ?></textarea>
    </span>
	
    <span class="row">
        <input type="submit" name="submit" value="Submit" />
    </span>
</form>

<?php
  }
  else if ($output_form == 'no') 
  {
    echo '<p>' . $first_name . ' ' . $last_name . ', thanks for registering with Developer Jobs!</p>';
	$pattern = '/[\(\)\-\s]/';
    $replacement = '';
    $new_phone = preg_replace($pattern, $replacement, $phone);
    echo '<p><strong>Your phone number has been registered as ' . $new_phone .'.</strong></p>';

	$pattern = '/@[a-zA-Z0-9][a-zA-Z0-9\._\-&!?=#]*/';
	$replacement = '';
	$email_name = preg_replace($pattern, $replacement, $email);
	echo '<p><strong>Your email has been registered as ' . $email_name . '@' . $domain . '.</strong></p>';
  }
  
?>

<?php      // Insert the page footer
  require_once('footer.php');
?>


</body>
</html>
