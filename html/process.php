<?php ob_start();


    if(isset($_POST['submit'])) {

        $to = "barryyeboah96@gmail.com";
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $txt = $_POST['message'];
        $headers = "From: " .$email . "\r\n" . "CC: skyeboah017@st.ug.edu.gh";


        mail($to,$subject,$txt,$headers);

        header("Location: contact.html");

        
        }






?>