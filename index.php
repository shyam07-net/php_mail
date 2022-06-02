<?php
 $message = "<html><head>
    <title>VPS Sales</title>
    <style>
    h3,h2,h5{
       font-family: 'Roboto', sans-serif;
    }
    </style>
    </head>
     <body>
    
    
    </br>
     <h3>Dear Customer, </h3>
    <h3 style='color:black'>
    hello 
    <h3><br>
   
    <h3>Regards</h3>
    <h3>LG <h3>
   
    </body>";
        include('smtp/PHPMailerAutoload.php');
        $mail=new PHPMailer(true);
        // $mail->isSMTP();
        // $mail->Host="smtp.gmail.com";
        // $mail->Port=587;
        $mail->SMTPSecure="tls";
        $mail->SMTPAuth=true;
        $mail->Username="wiseowl24.net@gmail.com";
        $mail->Password="Wiseowl24";
        $mail->SetFrom("wiseowl24.net@gmail.com");
        $mail->addAddress($p_email1);
        $mail->IsHTML(true);
        $mail->Subject="this is subject";
        $mail->Body=$message;
        $mail->SMTPOptions=array('ssl'=>array(
        'verify_peer'=>false,
        'verify_peer_name'=>false,
        'allow_self_signed'=>false
        ));
        $mail->send();   
        echo '<script type="text/javascript">alert("Your form is submited"); window.location.href = "nextpage.html";</script>';  
?>