<?php include "process.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Form Sample</title>
	<link rel="stylesheet" href="normalize.css" />
	<link rel="stylesheet" href="mystyle.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
</head>
<body>
    
<?php if (isset($msg)) { echo '<div id="formmessage"><p>', $msg , '</p></div>'; } ?>
<form id="myform" name="theform" class="group" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ?>" method="POST">
		<span id="formerror" class="error"></span>
		<ol>
			<li>
				<label for="myname">Name *</label>
				<input type="text" name="myname" id="myname" title="Please enter your name" autofocus placeholder="Last, First" value="><?php if (isset($myname)) { echo $myname; } ?>" />
				<?php if (isset($err_myname)) { echo $err_myname; } ?>
				<?php if (isset($err_patternmatch)) { echo $err_patternmatch; } ?>
			</li>

			<li>				
			<input type="text" name="mail" id="mail" placeholder="Email Address" autofocus required value="<?php if(isset($email)) {echo $email; } ?>">
		<?php  if (isset($err_email)) {echo $err_email; }?>
		<?Php if (isset($err_pattternemail)) {echo $err_patternemail;}?>	
            </li>
            <li>
		<textarea name="message" id="mymessage" placeholder="Type your Message Here" tabindex="3" autofocus required > <?php if (isset($mymessage)) { echo $mymessage; }  ?></textarea>
			</li>
		</ol>
		<button type="submit" name="action" value="submit">send</button>
</form>
</body>
</html>