<?php 
	include"process.php";
?>
<!doctype html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="normalize.css" />
	<link rel="stylesheet" href="mystyle.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
</head>  




<?php if (isset($msg)) { echo '<div id="formmessage"><p>', $msg , '</p></div>'; } ?>
<form id="myform" name="theform" class="group" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<span id="formerror" class="error"></span>
            <fieldset>
				<input type="text" name="myname" id="myname" title="Please enter your name" autofocus placeholder="Last, First" value="<?php if (isset($myname)) { echo $myname; } ?>" />
				<?php if (isset($err_myname)) { echo $err_myname; } ?>
				<?php if (isset($err_patternmatch)) { echo $err_patternmatch; } ?>

			</fieldset>
            <fieldest>

                	<input type="text" name="email" id="email" placeholder="Email Address" autofocus required value="<?php if(isset($email)) {echo $email; } ?>">
		<?php  if (isset($err_email)) {echo $err_email; }?>
		<?Php if (isset($err_pattternemail)) {echo $err_patternemail;}?>
            </fieldest>
			
				<div class="grouphead">Request Type</div>
				<div >
			<fieldset class="request">
						<input type="radio" name="requesttype" value="question" id="questionitem" <?php if ((isset($requesttype)) && ($requesttype==='question')) { echo "checked"; } ?>/>
						<label for="questionitem">Event Photos</label>
					</fieldset>
					<fieldset class="request">
						<input type="radio" name="requesttype" value="comment" id="commentitem" <?php if ((isset($requesttype)) && ($requesttype === 'comment')) { echo "checked"; } ?> />
						<label for="commentitem">Group Photos</label>
				</fieldset>
				<fieldset class="request">
						<input type="radio" name="requesttype" value="suggestion" id="suggestionitem" <?php if ((isset($requesttype)) && ($requesttype === 'suggestion')) { echo "checked"; } ?> />
						<label for="suggestiontem">Personel Photos</label>
				</fieldset>
				
			<fieldset class=comment>
				<!--<label for="mycomments">Comment: (For faster responses, please enter your phone number.)</label>-->
				<textarea name="mycomments" id="mycomments"><?php if (isset($mycomments)) { echo $mycomments; } ?></textarea>
		</fieldset>
		<fieldset>
		<button type="submit" name="action" value="submit">Send</button>
		</fieldset>
</form>
