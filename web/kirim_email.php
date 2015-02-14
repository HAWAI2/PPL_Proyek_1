<?php

$email = "indam.muhammad@gmail.com";
$subject = $_GET['subject'];
$msg = wordwrap($_GET['content'],70);

mail($email, $subject, $msg);

?>