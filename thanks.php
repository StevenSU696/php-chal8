<?php
$lastname = $_POST['user_lastname'];
$firstname = $_POST['user_firstname'];
$email = $_POST['user_email'];
$phone = $_POST['user_phone'];
$topic = $_POST['user_topic'];
$message = $_POST['user_message'];

echo 'Merci ' . $firstname . ' ' . $lastname . ' de nous avoir contacté à propos de ' . $topic . '<br>
Un de nos conseiller vous contactera soit à l’adresse ' . $email . ' ou par téléphone au ' . $phone . ' dans les plus brefs délais pour traiter votre demande :<br>'
    . $message;
