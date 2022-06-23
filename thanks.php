<?php

$user_last_name = $_POST['user_last_name'];
$user_first_name = $_POST['user_first_name'];
$subject = $_POST['subject'];
$user_email = filter_var($_POST['user_email'], FILTER_SANITIZE_EMAIL);
$user_tel = $_POST['user_tel'];
$message = $_POST['message'];
$err = '';

if (empty($user_last_name)) {
    $err .= "Last name is required. ";
}
if (empty($user_first_name)) {
    $err .= "First name is required. ";
}
if (empty($user_email)) {
    $err .= "Email is required. ";
} elseif (filter_var($user_email, FILTER_VALIDATE_EMAIL) === false) {
    $err .= "Email is not valid. ";
}
if (empty($user_tel)) {
    $err .= "Telephone is required. ";
}
if (empty($message)) {
    $err .= "Message is required. ";
}

if (empty($err)) {
    echo 'Merci ', $user_last_name, ' ', $user_first_name, ' de nous avoir contacté à propos de ', $subject,'.<br><br>Un de nos conseiller vous contactera soit à l’adresse ', $user_email, ' ou par téléphone au ', $user_tel, ' dans les plus brefs délais pour traiter votre demande :', $message;
} else {
    echo $err;
}

?>
