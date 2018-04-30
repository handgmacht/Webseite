<?php
if (isset($_POST["submit"])) {
mail('elisabeth.wetchy@gmail.com','Test mail','The mail function is working!');
echo 'Mail sent!';
}
?>
