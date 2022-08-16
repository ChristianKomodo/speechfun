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
                $child_age = substr(strip_tags($_POST['child_age']), 0, 255);
                $child_name = substr(strip_tags($_POST['child_name']), 0, 255);
                $child_birthdate = substr(strip_tags($_POST['child_birthdate']), 0, 255);
                $address = substr(strip_tags($_POST['address']), 0, 255);
                $city = substr(strip_tags($_POST['city']), 0, 255);
                $state = substr(strip_tags($_POST['state']), 0, 255);
                $home_phone = substr(strip_tags($_POST['home_phone']), 0, 255);
                $work_phone = substr(strip_tags($_POST['work_phone']), 0, 255);
                $mobile_phone = substr(strip_tags($_POST['mobile_phone']), 0, 255);
                $referred_by = substr(strip_tags($_POST['referred_by']), 0, 255);
                $childs_doctor = substr(strip_tags($_POST['childs_doctor']), 0, 255);
                $lactation_consultant = substr(strip_tags($_POST['lactation_consultant']), 0, 255);
                $lactation_consultant_facility = substr(strip_tags($_POST['lactation_consultant_facility']), 0, 255);
                $permission_contact_lactation_consultant = substr(strip_tags($_POST['permission_contact_lac']), 0, 255);
                $mothers_name = substr(strip_tags($_POST['mothers_name']), 0, 255);
                $mothers_occupation = substr(strip_tags($_POST['mothers_occupation']), 0, 255);
                $fathers_name = substr(strip_tags($_POST['fathers_name']), 0, 255);
                $fathers_occupation = substr(strip_tags($_POST['fathers_occupation']), 0, 255);
                $caregiver = substr(strip_tags($_POST['caregiver']), 0, 255);
                $caregiver_relation = substr(strip_tags($_POST['caregiver_relation']), 0, 255);
                $length_of_pregnancy = substr(strip_tags($_POST['length_of_pregnancy']), 0, 255);
                $birth_weight = substr(strip_tags($_POST['birth_weight']), 0, 255);
                $complications = substr(strip_tags($_POST['complications']), 0, 255);
                $complications_explain = substr(strip_tags($_POST['complications_explain']), 0, 255);
                $sucking_difficulties = substr(strip_tags($_POST['sucking_difficulties']), 0, 255);
                $feeding_difficulties = substr(strip_tags($_POST['feeding_difficulties']), 0, 255);
                $reflux = substr(strip_tags($_POST['reflux']), 0, 255);
                $lack_of_oxygen = substr(strip_tags($_POST['lack_of_oxygen']), 0, 255);
                $breathing_difficulties = substr(strip_tags($_POST['breathing_difficulties']), 0, 255);
                $head_injuries = substr(strip_tags($_POST['head_injuries']), 0, 255);
                $fetal_monitor = substr(strip_tags($_POST['fetal_monitor']), 0, 255);
                $main_concerns = substr(strip_tags($_POST['main_concerns']), 0, 255);
                $lip_tongue_tied = substr(strip_tags($_POST['lip_tongue_tied']), 0, 255);
                $frenectomy = substr(strip_tags($_POST['frenectomy']), 0, 255);
                $after_frenectomy = substr(strip_tags($_POST['after_frenectomy']), 0, 255);
                $after_frenectomy = substr(strip_tags($_POST['after_frenectomy']), 0, 255);
                $breast_bottle_feeding = substr(strip_tags($_POST['breast_bottle_feeding']), 0, 255);
                $how_much = substr(strip_tags($_POST['how_much']), 0, 255);
                $how_often = substr(strip_tags($_POST['how_often']), 0, 255);
                $ounces_via_breast = substr(strip_tags($_POST['ounces_via_breast']), 0, 255);
                $breast_how_many_minutes = substr(strip_tags($_POST['breast_how_many_minutes']), 0, 255);
                $ounces_via_bottle = substr(strip_tags($_POST['ounces_via_bottle']), 0, 255);
                $bottle_how_many_minutes = substr(strip_tags($_POST['bottle_how_many_minutes']), 0, 255);
                $oz_each_day = substr(strip_tags($_POST['oz_each_day']), 0, 255);
                $position_fed = substr(strip_tags($_POST['position_fed']), 0, 255);
                $soreness_during_feeding = substr(strip_tags($_POST['soreness_during_feeding']), 0, 255);
                $bleeding_cracked_nipples_during_feeding = substr(strip_tags($_POST['bleeding_cracked_nipples_during_feeding']), 0, 255);
                $using_nipple_shield = substr(strip_tags($_POST['using_nipple_shield']), 0, 255);
                $any_lactation_issues = substr(strip_tags($_POST['any_lactation_issues']), 0, 255);
                $when_are_issues_present = substr(strip_tags($_POST['when_are_issues_present']), 0, 255);
                $fall_asleep_during_feedings = substr(strip_tags($_POST['fall_asleep_during_feedings']), 0, 255);
                $wake_up_hungry_after_feedings = substr(strip_tags($_POST['wake_up_hungry_after_feedings']), 0, 255);
                $cry_to_eat = substr(strip_tags($_POST['cry_to_eat']), 0, 255);
                $jaw_quivering = substr(strip_tags($_POST['jaw_quivering']), 0, 255);
                $spillage_during_feeding = substr(strip_tags($_POST['spillage_during_feeding']), 0, 255);
                $list_allergies = substr(strip_tags($_POST['list_allergies']), 0, 255);
                $mom_list_allergies = substr(strip_tags($_POST['mom_list_allergies']), 0, 255);
                $describe_reflux = substr(strip_tags($_POST['describe_reflux']), 0, 255);
                $fussy_or_uncomfortable_after_feeding = substr(strip_tags($_POST['fussy_or_uncomfortable_after_feeding']), 0, 255);
                $coughing_during_feeding = substr(strip_tags($_POST['coughing_during_feeding']), 0, 255);
                $wet_diapers = substr(strip_tags($_POST['wet_diapers']), 0, 255);
                $dirty_diapers = substr(strip_tags($_POST['dirty_diapers']), 0, 255);
                $health_status = substr(strip_tags($_POST['health_status']), 0, 255);
                $operations = substr(strip_tags($_POST['operations']), 0, 255);
                $ear_infections = substr(strip_tags($_POST['ear_infections']), 0, 255);
                $frequent_colds = substr(strip_tags($_POST['frequent_colds']), 0, 255);
                $bronchitis_or_respitory = substr(strip_tags($_POST['bronchitis_or_respitory']), 0, 255);
                $pneumonia = substr(strip_tags($_POST['pneumonia']), 0, 255);
                $other_illnesses = substr(strip_tags($_POST['other_illnesses']), 0, 255);
                $list_meds = substr(strip_tags($_POST['list_meds']), 0, 255);
                $explain_feeding_habit_concerns = substr(strip_tags($_POST['explain_feeding_habit_concerns']), 0, 255);
                $own_words_what_feeding_difficulties = substr(strip_tags($_POST['own_words_what_feeding_difficulties']), 0, 255);
                $had_a_hearing_evaluation = substr(strip_tags($_POST['had_a_hearing_evaluation']), 0, 255);
                $hearing_eval_when = substr(strip_tags($_POST['hearing_eval_when']), 0, 255);
                $hearing_eval_where = substr(strip_tags($_POST['hearing_eval_where']), 0, 255);
                $hearing_eval_results = substr(strip_tags($_POST['hearing_eval_results']), 0, 255);
                $use_info_for_study_purposes = substr(strip_tags($_POST['use_info_for_study_purposes']), 0, 255);
                $your_name = substr(strip_tags($_POST['your_name']), 0, 255);
                $email = substr(strip_tags($_POST['email']), 0, 255);
                $relationship_to_child = substr(strip_tags($_POST['relationship_to_child']), 0, 255);
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
                $mail->Subject = 'SpeechFun.org Baby Clinic Intake Form: ' . $your_name;
                $mail->msgHTML('
                    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head></head><body><style></style>
                    <h2 style="color:#fa6900">Baby Clinic Intake Form</h2>
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
        <h2>Baby Clinic Intake Form</h2>

        <div class="well">

            <p>Please fill in as many fields as possible.</p>

            <?php include 'form_baby-clinic-intake-fields.php' ?>

        </div>

    <?php } ?>

    <?php include 'inc/footer.php'; ?>

</body>

</html>