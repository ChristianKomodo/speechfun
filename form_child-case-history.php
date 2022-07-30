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
                $mothers_name = substr(strip_tags($_POST['mothers_name']), 0, 255);
                $mothers_occupation = substr(strip_tags($_POST['mothers_occupation']), 0, 255);
                $fathers_name = substr(strip_tags($_POST['fathers_name']), 0, 255);
                $fathers_occupation = substr(strip_tags($_POST['fathers_occupation']), 0, 255);
                $length_of_preg = substr(strip_tags($_POST['length_of_preg']), 0, 255);
                $birth_weight = substr(strip_tags($_POST['birth_weight']), 0, 255);
                $complications = substr(strip_tags($_POST['complications']), 0, 255);
                $explain_difficulties_during_pregnancy = substr(strip_tags($_POST['explain_difficulties_during_pregnancy']), 0, 255);
                $sucking_difficulties = substr(strip_tags($_POST['sucking_difficulties']), 0, 255);
                $feeding_difficulties = substr(strip_tags($_POST['feeding_difficulties']), 0, 255);
                $reflux = substr(strip_tags($_POST['reflux']), 0, 255);
                $lack_of_oxygen = substr(strip_tags($_POST['lack_of_oxygen']), 0, 255);
                $breathing_difficulties = substr(strip_tags($_POST['breathing_difficulties']), 0, 255);
                $head_injuries = substr(strip_tags($_POST['head_injuries']), 0, 255);
                $fetal_monitor = substr(strip_tags($_POST['fetal_monitor']), 0, 255);
                $turn_over = substr(strip_tags($_POST['turn_over']), 0, 255);
                $sit_up = substr(strip_tags($_POST['sit_up']), 0, 255);
                $crawl = substr(strip_tags($_POST['crawl']), 0, 255);
                $walk_alone = substr(strip_tags($_POST['walk_alone']), 0, 255);
                $babble = substr(strip_tags($_POST['babble']), 0, 255);
                $first_words = substr(strip_tags($_POST['first_words']), 0, 255);
                $combine_words = substr(strip_tags($_POST['combine_words']), 0, 255);
                $sentences = substr(strip_tags($_POST['sentences']), 0, 255);
                $toilet_trained = substr(strip_tags($_POST['toilet_trained']), 0, 255);
                $feed_self = substr(strip_tags($_POST['feed_self']), 0, 255);
                $dress_self = substr(strip_tags($_POST['dress_self']), 0, 255);
                $right_or_left_handed = substr(strip_tags($_POST['right_or_left_handed']), 0, 255);
                $age_of_handedness = substr(strip_tags($_POST['age_of_handedness']), 0, 255);
                $sucking_difficulties_at_birth = substr(strip_tags($_POST['sucking_difficulties_at_birth']), 0, 255);
                $fall_asleep_during_feeding = substr(strip_tags($_POST['fall_asleep_during_feeding']), 0, 255);
                $lactation_consultant = substr(strip_tags($_POST['lactation_consultant']), 0, 255);
                $difficulty_latching = substr(strip_tags($_POST['difficulty_latching']), 0, 255);
                $latching_difficulty_during_bottle = substr(strip_tags($_POST['latching_difficulty_during_bottle']), 0, 255);
                $did_sucking_diff_resolve_2_months = substr(strip_tags($_POST['did_sucking_diff_resolve_2_months']), 0, 255);
                $oral_motor_therapy = substr(strip_tags($_POST['oral_motor_therapy']), 0, 255);
                $describe_feeding_difficulties = substr(strip_tags($_POST['describe_feeding_difficulties']), 0, 255);
                $stage_1 = substr(strip_tags($_POST['stage_1']), 0, 255);
                $stage_2 = substr(strip_tags($_POST['stage_2']), 0, 255);
                $stage_3 = substr(strip_tags($_POST['stage_3']), 0, 255);
                $finger_foods = substr(strip_tags($_POST['finger_foods']), 0, 255);
                $table_foods = substr(strip_tags($_POST['table_foods']), 0, 255);
                $same_meal_rest_of_family = substr(strip_tags($_POST['same_meal_rest_of_family']), 0, 255);
                $picky_eater = substr(strip_tags($_POST['picky_eater']), 0, 255);
                $parents_picky_eater = substr(strip_tags($_POST['parents_picky_eater']), 0, 255);
                $cough_gag_mealtime = substr(strip_tags($_POST['cough_gag_mealtime']), 0, 255);
                $nose_drip_mealtime = substr(strip_tags($_POST['nose_drip_mealtime']), 0, 255);
                $tolerate_toothbrush = substr(strip_tags($_POST['tolerate_toothbrush']), 0, 255);
                $food_allergies = substr(strip_tags($_POST['food_allergies']), 0, 255);
                $no_tolerate_soft = substr(strip_tags($_POST['no_tolerate_soft']), 0, 255);
                $no_tolerate_chewy = substr(strip_tags($_POST['no_tolerate_chewy']), 0, 255);
                $no_tolerate_meats = substr(strip_tags($_POST['no_tolerate_meats']), 0, 255);
                $no_tolerate_vegetables = substr(strip_tags($_POST['no_tolerate_vegetables']), 0, 255);
                $no_tolerate_combined = substr(strip_tags($_POST['no_tolerate_combined']), 0, 255);
                $preference_crunchy = substr(strip_tags($_POST['preference_crunchy']), 0, 255);
                $preference_salty = substr(strip_tags($_POST['preference_salty']), 0, 255);
                $preference_soft = substr(strip_tags($_POST['preference_soft']), 0, 255);
                $preference_cold = substr(strip_tags($_POST['preference_cold']), 0, 255);
                $on_meds = substr(strip_tags($_POST['on_meds']), 0, 255);
                $name_meds = substr(strip_tags($_POST['name_meds']), 0, 255);
                $why_meds = substr(strip_tags($_POST['why_meds']), 0, 255);
                $health_status = substr(strip_tags($_POST['health_status']), 0, 255);
                $operations = substr(strip_tags($_POST['operations']), 0, 255);
                $ear_infection = substr(strip_tags($_POST['ear_infection']), 0, 255);
                $how_many = substr(strip_tags($_POST['how_many']), 0, 255);
                $how_treated = substr(strip_tags($_POST['how_treated']), 0, 255);
                $frequent_colds = substr(strip_tags($_POST['frequent_colds']), 0, 255);
                $frequent_bronchitis = substr(strip_tags($_POST['frequent_bronchitis']), 0, 255);
                $pneumonia = substr(strip_tags($_POST['pneumonia']), 0, 255);
                $other = substr(strip_tags($_POST['other']), 0, 255);
                $hearing_evaluated = substr(strip_tags($_POST['hearing_evaluated']), 0, 255);
                $hearing_evaluated_when = substr(strip_tags($_POST['hearing_evaluated_when']), 0, 255);
                $hearing_evaluated_where = substr(strip_tags($_POST['hearing_evaluated_where']), 0, 255);
                $hearing_evaluated_results = substr(strip_tags($_POST['hearing_evaluated_results']), 0, 255);
                $vision_evaulated = substr(strip_tags($_POST['vision_evaulated']), 0, 255);
                $vision_evaulated_when = substr(strip_tags($_POST['vision_evaulated_when']), 0, 255);
                $vision_evaulated_where = substr(strip_tags($_POST['vision_evaulated_where']), 0, 255);
                $vision_evaulated_results = substr(strip_tags($_POST['vision_evaulated_results']), 0, 255);
                $childs_interests = substr(strip_tags($_POST['childs_interests']), 0, 255);
                $primary_language = substr(strip_tags($_POST['primary_language']), 0, 255);
                $other_languages = substr(strip_tags($_POST['other_languages']), 0, 255);
                $parents_understand = substr(strip_tags($_POST['parents_understand']), 0, 255);
                $playmates_understand = substr(strip_tags($_POST['playmates_understand']), 0, 255);
                $teachers_understand = substr(strip_tags($_POST['teachers_understand']), 0, 255);
                $relatives_understand = substr(strip_tags($_POST['relatives_understand']), 0, 255);
                $neighbors_understand = substr(strip_tags($_POST['neighbors_understand']), 0, 255);
                $difficulties_first_noted = substr(strip_tags($_POST['difficulties_first_noted']), 0, 255);
                $difficulties_noted_by_whom = substr(strip_tags($_POST['difficulties_noted_by_whom']), 0, 255);
                $present_speech_difficulties = substr(strip_tags($_POST['present_speech_difficulties']), 0, 255);
                $explain_concern = substr(strip_tags($_POST['explain_concern']), 0, 255);
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
                $mail->Subject = 'SpeechFun.org Child Case History Form: ' . $your_name;
                $mail->msgHTML('
                    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head></head><body><style></style>
                    <h2 style="color:#fa6900">Child Case History Form</h2>
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
        <h2>Child Case History Form</h2>

        <div class="well">

            <p>Please fill in as many fields as possible.</p>

            <?php include 'form_child-case-history_fields.php' ?>

        </div>

    <?php } ?>

    <?php include 'inc/footer.php'; ?>

</body>

</html>