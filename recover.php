<?php
include 'core/init.php';
// CHECK
logged_in_redirect();
?>
<!DOCTYPE html>
<html lang="en" class="no-js"> <!--<![endif]-->
    <?php include 'includes/headtoheaderforgot.php'; ?><!--/head-->
	<?php include_once("includes/googleanalyticstracking.php") ?>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
<?php
?>
<h1>Username Recovery</h1>
<?php
if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
?>
	<p class="textmode">Thank's we've sent your username to your mailbox.</p>
<?php
} else {
	$mode_allowed = array('username');
	if (isset($_GET['mode']) === true && in_array($_GET['mode'], $mode_allowed) === true) {
		if (isset($_POST['email']) === true && empty($_POST['email']) === false) {
			if (email_exists($_POST['email']) === true) {
				recover($_GET['mode'], $_POST['email']);
				echo '<meta http-equiv="refresh" content="0; URL=recover?success">';
				exit();
			} else {
				echo '<p>Oops, we could\'t find that email address</p>';
			}
		}
	?>
		<form action="" method="post">
					<p> 
                        <label for="email" class="email" data-icon="e" > Please enter your registered email address </label>
                        <input id="email" name="email" required="required" type="text" placeholder="Email Address"/>
                    </p>
				</li>
				<p class="recover buttons"> 
                    <input type="submit" value="Recover" /> 
				</p>
			</form>
	<?php
	} else {
		header('Location: loggedin');
		exit();
	}
}
?>