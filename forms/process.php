<?php
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):

	if (isset($_POST['myname'])) { $myname = $_POST['myname']; }
    if(isset($_POST['email'])){ $email = $_POST['email']; }
     

	if (isset($_POST['mycomments'])) {
			$mycomments = filter_var($_POST['mycomments'], FILTER_SANITIZE_STRING ); 
	}
	if (isset($_POST['requesttype'])) { $requesttype = $_POST['requesttype']; }

	$formerrors = false;

	if ($myname === '') :
		$err_myname = '<div class="error">Sorry, your name is a required field</div>';
		$formerrors = true;
	endif; // input field empty

	if ( !(preg_match('/[A-Za-z]+, [A-Za-z]+/', $myname)) ) :
		$err_patternmatch = '<div class="error">Sorry, the name must be in the format: Last, First</div>';
		$formerrors = true;
	endif; // pattern doesn't match
     if ($email ==='') :
        	$err_email = '<div class="error">Sorry, your email is a required field</div>';
        			$formerrors = true;
	endif; // input field empty

    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  $formdata = array (
    'myname' => $myname,
    'email' => $email,
    'mycomments' => $mycomments,    
    'requesttype' => $requesttype
  );

	if (!($formerrors)) :
		$to				= 	"mclouigene@mcdeveloper.tech";
		$subject	=		"From $myname -- Signup Page";
		$txt = "You have receied an e-mail from " .$email.".\n\n".$mycomments;
		$message	=		$mycomments;

		if (mail($to, $subject, $txt, $message)):
			$msg = "Thanks for filling out our form";
			header("location: http://test.mcdeveloper.tech/MCDad");
			exit;
		else:
			$msg = "Problem sending the message";
		endif; // mail form data

	endif; // check for form errors

endif; //form submitted
?>
