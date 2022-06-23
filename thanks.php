<?php

$user_last_name = $_POST['user_last_name'];
$user_first_name = $_POST['user_first_name'];
$subject = $_POST['subject'];
$user_email = $_POST['user_email'];
$user_tel = $_POST['user_tel'];
$message = $_POST['message'];

echo 'Merci ', $user_last_name, ' ', $user_first_name, ' de nous avoir contacté à propos de ', $subject,'.<br><br>Un de nos conseiller vous contactera soit à l’adresse ', $user_email, ' ou par téléphone au ', $user_tel, ' dans les plus brefs délais pour traiter votre demande :', $message;

?>
