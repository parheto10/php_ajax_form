<?php

    include '../params/connect.php';
    $a = 'parheto10';    
    function check_email(){
        GLOBAL $db;
        if(isset($_POST['check_email'])){
            $email = $_POST['check_email'];
            $qs = $db->prepare("SELECT email from users WHERE email= ?");
            $qs->execute(array($email));
            if($qs->rowCount() == 0) { 
                echo json_encode(array('error' => 'email_success'));
            } else {
                echo json_encode(array('error' => 'email_fail', 'message' => 'Désolé, un Utilisateur Avec cet Email Existe Déja !!'));
            }
        }
    }
    check_email();
?>