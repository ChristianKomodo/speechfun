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
            $mail = new PHPMailer(false);   // Passing `true` enables exceptions
            try {
                // Prepare the fields
                $child_name = substr(strip_tags($_POST['child_name']), 0, 255);
                $child_age = substr(strip_tags($_POST['child_age']), 0, 255);
                $child_birthdate = substr(strip_tags($_POST['child_birthdate']), 0, 255);
                $child_gender = substr(strip_tags($_POST['child_gender']), 0, 255);
                $address = substr(strip_tags($_POST['address']), 0, 255);
                $city = substr(strip_tags($_POST['city']), 0, 255);
                $state = substr(strip_tags($_POST['state']), 0, 255);
                $zip = substr(strip_tags($_POST['zip']), 0, 255);
                $marital_status = substr(strip_tags($_POST['marital_status']), 0, 255);
                $primary_diagnosis = substr(strip_tags($_POST['primary_diagnosis']), 0, 255);
                $primary_numeric_diagnosis = substr(strip_tags($_POST['primary_numeric_diagnosis']), 0, 255);
                $secondary_numeric_diagnosis = substr(strip_tags($_POST['secondary_numeric_diagnosis']), 0, 255);
                $responsible_party_name = substr(strip_tags($_POST['responsible_party_name']), 0, 255);
                $responsible_party_age = substr(strip_tags($_POST['responsible_party_age']), 0, 255);
                $responsible_party_dob = substr(strip_tags($_POST['responsible_party_dob']), 0, 255);
                $responsible_party_gender = substr(strip_tags($_POST['responsible_party_gender']), 0, 255);
                $relationship_to_patient = substr(strip_tags($_POST['relationship_to_patient']), 0, 255);
                $referring_provider_name = substr(strip_tags($_POST['referring_provider_name']), 0, 255);
                $referring_provider_phone = substr(strip_tags($_POST['referring_provider_phone']), 0, 255);
                $referring_provider_fax = substr(strip_tags($_POST['referring_provider_fax']), 0, 255);
                $primary_ins_co = substr(strip_tags($_POST['primary_ins_co']), 0, 255);
                $primary_ins_policy_holder_name = substr(strip_tags($_POST['primary_ins_policy_holder_name']), 0, 255);
                $primary_ins_policy_holder_dob = substr(strip_tags($_POST['primary_ins_policy_holder_dob']), 0, 255);
                $primary_ins_policy_number = substr(strip_tags($_POST['primary_ins_policy_number']), 0, 255);
                $primary_ins_address = substr(strip_tags($_POST['primary_ins_address']), 0, 255);
                $primary_ins_city = substr(strip_tags($_POST['primary_ins_city']), 0, 255);
                $primary_ins_state = substr(strip_tags($_POST['primary_ins_state']), 0, 255);
                $primary_ins_zip = substr(strip_tags($_POST['primary_ins_zip']), 0, 255);
                $primary_ins_group_number = substr(strip_tags($_POST['primary_ins_group_number']), 0, 255);
                $primary_ins_phone = substr(strip_tags($_POST['primary_ins_phone']), 0, 255);
                $primary_ins_co_insurance_percent = substr(strip_tags($_POST['primary_ins_co_insurance_percent']), 0, 255);
                $primary_ins_co_pay = substr(strip_tags($_POST['primary_ins_co_pay']), 0, 255);
                $primary_ins_deductible = substr(strip_tags($_POST['primary_ins_deductible']), 0, 255);
                $secondary_ins_co = substr(strip_tags($_POST['secondary_ins_co']), 0, 255);
                $secondary_ins_policy_holder_name = substr(strip_tags($_POST['secondary_ins_policy_holder_name']), 0, 255);
                $secondary_ins_policy_holder_dob = substr(strip_tags($_POST['secondary_ins_policy_holder_dob']), 0, 255);
                $secondary_ins_policy_number = substr(strip_tags($_POST['secondary_ins_policy_number']), 0, 255);
                $secondary_ins_address = substr(strip_tags($_POST['secondary_ins_address']), 0, 255);
                $secondary_ins_city = substr(strip_tags($_POST['secondary_ins_city']), 0, 255);
                $secondary_ins_state = substr(strip_tags($_POST['secondary_ins_state']), 0, 255);
                $secondary_ins_zip = substr(strip_tags($_POST['secondary_ins_zip']), 0, 255);
                $secondary_ins_group_number = substr(strip_tags($_POST['secondary_ins_group_number']), 0, 255);
                $secondary_ins_phone = substr(strip_tags($_POST['secondary_ins_phone']), 0, 255);
                $secondary_ins_co_insurance_percent = substr(strip_tags($_POST['secondary_ins_co_insurance_percent']), 0, 255);
                $secondary_ins_co_pay = substr(strip_tags($_POST['secondary_ins_co_pay']), 0, 255);
                $secondary_ins_deductible = substr(strip_tags($_POST['secondary_ins_deductible']), 0, 255);
                $receiving_services_under_insurance = substr(strip_tags($_POST['receiving_services_under_insurance']), 0, 255);
                $receiving_services_under_insurance = substr(strip_tags($_POST['receiving_services_under_insurance']), 0, 255);
                $signature_of_insured = substr(strip_tags($_POST['signature_of_insured']), 0, 255);
                $date = substr(strip_tags($_POST['date']), 0, 255);

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
                $mail->addCC('campbell.o@yahoo.com');
                $mail->addCC('kdhstewart@gmail.com');
                $mail->addCC('jamiemospeech@gmail.com');
                $mail->addCC('slpbrittanymonroy@gmail.com');
                $mail->addBCC('geekfabulous@gmail.com', 'Admin Christian BCC');

                // Build the email response HTML
                $someHTML = '';
                foreach($_POST as $key => $value) {
                    // $someHTML .= '<p><strong>' . $key . '</strong>: ' . $value;
                    $someHTML .= '<p>' . ucwords(str_replace("_"," ",$key)) . ': <strong style="color:#fa6900">' . $value . '</strong></p>';
                }
                
                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'SpeechFun.org Insurance Intake Form: ' . $your_name;
                $mail->msgHTML('
                    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head></head><body><style></style>
                    <h2 style="color:#fa6900">Insurance Intake Form</h2>
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
        <h2>Insurance Intake Form</h2>

        <div class="well">

            <p>Please fill in as many fields as possible.</p>

            <?php include 'form_insurance-intake-fields.php' ?>

        </div>

    <?php } ?>

    <?php include 'inc/footer.php'; ?>

</body>

</html>