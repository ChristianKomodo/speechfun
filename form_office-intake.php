<!DOCTYPE html>
<html lang="en">

<?php include 'inc/head.php'; ?>

<body>

	<div class="container">

    <?php include 'inc/header.php'; ?>

    <?php
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;
        require 'vendor/autoload.php';

        if ($_POST) {
            $mail = new PHPMailer(false);                              // Passing `true` enables exceptions
            try {
                // Prepare the fields
                $child_age = substr(strip_tags($_POST['child_age']), 0, 255);
                $child_name = substr(strip_tags($_POST['child_name']), 0, 255);
                $your_name = substr(strip_tags($_POST['your_name']), 0, 255);
                $childs_name = substr(strip_tags($_POST['childs_name']), 0, 255);
                $your_relationship = substr(strip_tags($_POST['your_relationship']), 0, 255);
                $childs_dob = substr(strip_tags($_POST['childs_dob']), 0, 255);
                $address = substr(strip_tags($_POST['address']), 0, 255);
                $city = substr(strip_tags($_POST['city']), 0, 255);
                $state = substr(strip_tags($_POST['state']), 0, 255);
                $zip = substr(strip_tags($_POST['zip']), 0, 255);
                $who_referred_you = substr(strip_tags($_POST['who_referred_you']), 0, 255);
                $home_phone = substr(strip_tags($_POST['home_phone']), 0, 255);
                $name_of_childs_school = substr(strip_tags($_POST['name_of_childs_school']), 0, 255);
                $mothers_name = substr(strip_tags($_POST['mothers_name']), 0, 255);
                $fathers_name = substr(strip_tags($_POST['fathers_name']), 0, 255);
                $mothers_cell = substr(strip_tags($_POST['mothers_cell']), 0, 255);
                $fathers_cell = substr(strip_tags($_POST['fathers_cell']), 0, 255);
                $marital_status = substr(strip_tags($_POST['marital_status']), 0, 255);
                $emergency_contact_who = substr(strip_tags($_POST['emergency_contact_who']), 0, 255);
                $emergency_contact_phone = substr(strip_tags($_POST['emergency_contact_phone']), 0, 255);
                $what_is_diagnosis = substr(strip_tags($_POST['what_is_diagnosis']), 0, 255);
                $what_doctor_diagnosed_your_child = substr(strip_tags($_POST['what_doctor_diagnosed_your_child']), 0, 255);
                $why_are_you_here = substr(strip_tags($_POST['why_are_you_here']), 0, 255);
                $primary_payer = substr(strip_tags($_POST['primary_payer']), 0, 255);
                $tri = substr(strip_tags($_POST['tri']), 0, 255);
                $united_id = substr(strip_tags($_POST['united_id']), 0, 255);
                $amerigroup_sunshine_coventry_etc_id = substr(strip_tags($_POST['amerigroup_sunshine_coventry_etc_id']), 0, 255);
                $medicaid_medipass_id = substr(strip_tags($_POST['medicaid_medipass_id']), 0, 255);
                $insured_by_other_insurance_company = substr(strip_tags($_POST['insured_by_other_insurance_company']), 0, 255);
                $insurance_company_name = substr(strip_tags($_POST['insurance_company_name']), 0, 255);
                $insurance_member_number = substr(strip_tags($_POST['insurance_member_number']), 0, 255);
                $received_feeding_eval = substr(strip_tags($_POST['received_feeding_eval']), 0, 255);
                $who_referred_you = substr(strip_tags($_POST['who_referred_you']), 0, 255);
                $primary_physician_name = substr(strip_tags($_POST['primary_physician_name']), 0, 255);
                $primary_phys_office_name = substr(strip_tags($_POST['primary_phys_office_name']), 0, 255);
                $doctor_phone = substr(strip_tags($_POST['doctor_phone']), 0, 255);
                $doctor_fax = substr(strip_tags($_POST['doctor_fax']), 0, 255);

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
                // $mail->addBCC('geekfabulous@gmail.com', 'Admin Christian BCC');

                // Build the email response HTML
                $someHTML = '';
                foreach($_POST as $key => $value) {
                    // $someHTML .= '<p><strong>' . $key . '</strong>: ' . $value;
                    $someHTML .= '<p>' . ucwords(str_replace("_"," ",$key)) . ': <strong style="color:#fa6900">' . $value . '</strong></p>';
                }
                
                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'SpeechFun.org Office Intake Form: ' . $your_name;
                $mail->msgHTML('
                    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head></head><body><style></style>
                    <h2 style="color:#fa6900">Office Intake Form</h2>
                    <h3 style="color:#fa6900">Form Response</h3>
                    <hr>
                    ' . $someHTML . '
                    </body></html>
                ');

                $mail->send();
                include ('contact-success.php');
            } catch (Exception $e) {
                include ('contact-fail.php');
                // echo 'Message could not be sent.';
                // echo 'Mailer Error: ' . $mail->ErrorInfo;
            }
        } else {
    ?>

        <br>
        <h2>Office Intake Form</h2>

        <div class="well">

            <p>Please fill in as many fields as possible.</p>

            <?php include 'form_office-intake-fields.php' ?>

        </div>

    <?php } ?>

    <?php include 'inc/footer.php'; ?>

</body>

</html>