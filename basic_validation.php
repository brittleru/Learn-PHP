<?php
$validation_error = "";
$user_url = "";
$form_message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $user_url = $_POST["url"];
  if (!filter_var($user_url, FILTER_VALIDATE_URL)) {
    $validation_error = "* This is an invalid URL.";
    $form_message = "Please retry and submit your form again.";
  }
  else {
    $form_message = "Thank you for your submission.";
  }
}
?>

<form method="post" action="">
Your Favorite Website: 
<br>
<input type="text" name="url" value="<?php echo $user_url;?>">
<span class="error"><?= $validation_error;?></span>
<br>
<input type="submit" value="Submit">
</form>
<p> <?= $form_message;?> </p> 
    