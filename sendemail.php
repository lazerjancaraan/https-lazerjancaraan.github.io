 <?php
        
        require 'phpmailer/PHPMailerAutoload.php';
        if(isset($_POST['send']))
        {
                // $email = $_POST['email'];
                // $password = $_POST['password'];
                $from_id = $_POST['fromid'];
                $message = $_POST['message'];
                $subject = $_POST['subject'];
                $mail = new PHPMailer;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;
                $mail->SMTPSecure = 'tls';
                $mail->SMTPAuth = true;
                $mail->Username = 'anonymoushacker0018@gmail.com';
                $mail->Password = 'hacker2018';
                // Add a recipient
                $mail->setFrom($from_id);
                $mail->addAddress('anonymoushacker0018@gmail.com');
                $mail->addReplyTo($from_id);
                $mail->addCC('lazerjan11@gmail.com');
                $mail->Subject = $subject;
                $mail->msgHTML($message);
                if (!$mail->send()) {
                $error = "Mailer Error: " . $mail->ErrorInfo;
                ?><script>alert('<?php echo $error ?>');</script><?php
                }
                else {
                // echo '<script>alert("Message sent!");</script>';
                header("Location: https://lazerjancaraan.github.io/success.php");
                }
        }
        ?>