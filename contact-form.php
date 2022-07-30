<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    if ($_POST) {

        $extra = substr(strip_tags($_POST['extra']), 0, 255);

        // Spam check
        if ($extra !== "5") {
            echo '<div class="well">
            <h3>There was a problem sending the form.</h3>
            <br>
            <p>You did not enter the correct number in the box at the bottom of the contact form.  Please go back and enter the correct number.  This is a precaution against spam and other attacks and we apologize for the inconvenience.</p>
            <p>If you continue to encounter this issue, please call us at 407-761-0561 so we can assist personally.</p>
            </div>';
            return;
        }

        $mail = new PHPMailer(true);   // Passing `true` enables exceptions
        try {
            // Prepare the fields
            $your_name = substr(strip_tags($_POST['your_name']), 0, 255);
            $your_email = substr(strip_tags($_POST['your_email']), 0, 255);
            $your_message = substr(strip_tags($_POST['your_message']), 0, 255);

            // Server settings - updated March 28, 2021
            // $mail->SMTPDebug  = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = 'gator4006.hostgator.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'admin@speechfun.org';
            $mail->Password   = 'm3r!c$$1te!';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            // Recipients
            $mail->setFrom('admin@speechfun.org', 'Speechfun.org Response Form');
            $mail->addAddress('cirema@aol.com', 'Meric');
            $mail->addReplyTo('admin@speechfun.org', 'Speechfun.org Response Form');
            $mail->addCC('h.gunter16@yahoo.com');
			$mail->addCC('tahnee.wilderSLP@gmail.com');
            $mail->addCC('kdhstewart@gmail.com');
            $mail->addBCC('geekfabulous@gmail.com', 'Admin Christian BCC');

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Speechfun Website Response from ' . $your_name;
            $mail->msgHTML('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head></head><body><style></style>
            <h1 style="color:#fa6900">SpeechFun.org Contact Form Response</h1>
            <p>Name: <strong style="color:#fa6900">'.$your_name.'</strong></p>
            <p>Email: <strong style="color:#fa6900">'.$your_email.'</strong></p>
            <p>Message: <strong style="color:#fa6900">'.$your_message.'</strong></p>
            </body></html>');

            $mail->send();
            include ('contact-success.php');
        } catch (Exception $e) {
            include ('contact-fail.php');
            // echo 'Message could not be sent.';
            // echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    } else {
?>

    <div class="well">
        <h3>Send us a message and we will be in contact shortly.</h3>
        <br>
        <form method="post" id="contact-form" class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-3 control-label">Your Name</label>
                <div class="col-sm-6"><input name="your_name" type="text" class="form-control" required></div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Email Address</label>
                <div class="col-sm-6"><input name="your_email" type="email" class="form-control" required></div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Message</label>
                <div class="col-sm-6"><textarea name="your_message" class="form-control" required rows="5"></textarea></div>
            </div>
            <p>To prevent spam, please type the number five into the box below:</p>
            <div class="form-group">
                <label class="col-sm-7 control-label">Enter the number five here</label>
                <div class="col-sm-2"><input name="extra" type="number" class="form-control" required></div>
            </div>
            <div class="form-group">
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary pull-right">Send!</button>
                </div>
            </div>
        </form>
        <small>Mail version 2.24</small>
    </div>

<?php } ?>