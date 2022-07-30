<form method="post" id="baby-clinic-intake-form">
    
    <div class="row">
        <h3>Child Information</h3>
        <div class="form-group col-sm-6">
            <label>Child's Name</label>
            <input type="text" name="child_name" class="form-control" required>
        </div>
        <div class="form-group col-sm-2">
            <label>Age</label>
            <input type="text" name="child_age" class="form-control" required>
        </div>
        <div class="form-group col-sm-4">
            <label>Birthdate</label>
            <input type="text" name="child_birthdate" class="form-control">
        </div>

        <div class="form-group col-sm-6">
            <label>Address</label>
            <input type="text" name="address" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label>City</label>
            <input type="text" name="city" class="form-control">
        </div>
        <div class="form-group col-sm-2">
            <label>State</label>
            <input type="text" name="state" class="form-control">
        </div>

        <div class="form-group col-sm-6">
            <label>Home Phone</label>
            <input type="text" name="home_phone" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label>Work Phone</label>
            <input type="text" name="work_phone" class="form-control">
        </div>
        <div class="form-group col-sm-2">
            <label>Mobile Phone</label>
            <input type="text" name="mobile_phone" class="form-control">
        </div>

        <div class="form-group col-sm-6">
            <label>Referred By</label>
            <input type="text" name="referred_by" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label>Child's Doctor</label>
            <input type="text" name="childs_doctor" class="form-control">
        </div>

        <div class="form-group col-sm-6">
            <label>Lactation Consultant</label>
            <input type="text" name="lactation_consultant" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label>Facility</label>
            <input type="text" name="lactation_consultant_facility" class="form-control">
        </div>

        <div class="form-group col-sm-12">
            <span class="radio-label">Do we have permission to contact your lactation consultant?</span>
            <label class="radio-inline">
                <input type="radio" name="permission_contact_lactation_consultant" value="yes"> Yes
            </label>
            <label class="radio-inline">
                <input type="radio" name="permission_contact_lactation_consultant" value="no"> No
            </label>
        </div>

        <h3>Family Information</h3>
        <div class="form-group col-sm-3">
            <label>Mother's Name</label>
            <input type="text" name="mothers_name" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>Mother's Occupation</label>
            <input type="text" name="mothers_occupation" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>Father's Name</label>
            <input type="text" name="fathers_name" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>Father's Occupation</label>
            <input type="text" name="fathers_occupation" class="form-control">
        </div>

        <div class="form-group col-sm-6">
            <label>Caregiver(s)</label>
            <input type="text" name="caregiver" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label>Relation</label>
            <input type="text" name="caregiver_relation" class="form-control">
        </div>

        <h3>Birth history</h3>
        <div class="form-group col-sm-3">
            <label>Length of Pregnancy</label>
            <input type="text" name="length_of_pregnancy" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>Birth Weight</label>
            <input type="text" name="birth_weight" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label>Complications During Birth?</label>
            <input type="text" name="complications" class="form-control">
        </div>

        <div class="form-group col-sm-12">
            <label>Please explain any difficulties experienced during pregnancy</label>
            <input type="text" name="complications_explain" class="form-control">
        </div>

        <div class="form-group col-sm-3">
            <label>Sucking Difficulties?</label>
            <input type="text" name="sucking_difficulties" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>Feeding Difficulties?</label>
            <input type="text" name="feeding_difficulties" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>Reflux?</label>
            <input type="text" name="reflux" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>Lack of Oxygen?</label>
            <input type="text" name="lack_of_oxygen" class="form-control">
        </div>

        <div class="form-group col-sm-4">
            <label>Breathing Difficulties?</label>
            <input type="text" name="breathing_difficulties" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label>Head Injuries?</label>
            <input type="text" name="head_injuries" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label>Fetal Monitor Use?</label>
            <input type="text" name="fetal_monitor" class="form-control">
        </div>

        <div class="form-group col-sm-12">
            <label>What are your main concerns?</label>
            <input type="text" name="main_concerns" class="form-control">
        </div>

        <div class="form-group col-sm-12">
            <label>Do you have any concerns about lip or tongue-tie? &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="lip_tongue_tied" value="lip"> Lip &nbsp;&nbsp; <input type="checkbox" name="lip_tongue_tied" value="tongue"> Tongue &nbsp;&nbsp; <input type="checkbox" name="lip_tongue_tied" value="neither"> N/A
            </label>
        </div>

        <div class="form-group col-sm-12">
            <label>Has your baby had a frenectomy? &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="frenectomy" value="Yes"> Yes &nbsp;&nbsp; <input type="checkbox" name="frenectomy" value="No"> No
            </label>
        </div>

        <div class="form-group col-sm-12">
            <label>Were improvements in feedings observed after frenectomy? &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="after_frenectomy" value="Yes"> Yes &nbsp;&nbsp; <input type="checkbox" name="after_frenectomy" value="No"> No
            </label>
        </div>

        <div class="form-group col-sm-12">
            <label>Are you currently breast or bottle-feeding? &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="breast_bottle_feeding" value="Yes"> Yes &nbsp;&nbsp; <input type="checkbox" name="breast_bottle_feeding" value="No"> No
            </label>
        </div>

        <div class="form-group col-sm-12">
            <label>Are you pumping or supplementing with formula? &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="breast_bottle_feeding" value="Yes"> Yes &nbsp;&nbsp; <input type="checkbox" name="breast_bottle_feeding" value="No"> No
            </label>
        </div>

        <div class="form-group col-sm-6">
            <label>How much?</label>
            <input type="text" name="how_much" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label>How often?</label>
            <input type="text" name="how_often" class="form-control">
        </div>

        <p>When feeding, how many ounces are transferred and how long does it take?</p>
        <div class="form-group col-sm-3">
            <label>Ounces Via Breast in</label>
            <input type="text" name="ounces_via_breast" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>How Many Minutes</label>
            <input type="text" name="breast_how_many_minutes" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>Ounces Via Bottle in</label>
            <input type="text" name="ounces_via_bottle" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>How Many Minutes</label>
            <input type="text" name="bottle_how_many_minutes" class="form-control">
        </div>

        <div class="form-group col-sm-6">
            <label>On average, how many ounces are consumed each day?</label>
            <input type="text" name="oz_each_day" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label>In what position is your baby fed?</label>
            <input type="text" name="position_fed" class="form-control">
        </div>

        <div class="form-group col-sm-12">
            <label>Are you experiencing any soreness during feeding? &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="soreness_during_feeding" value="Yes"> Yes &nbsp;&nbsp; <input type="checkbox" name="soreness_during_feeding" value="No"> No
            </label>
        </div>

        <div class="form-group col-sm-12">
            <label>Are you experiencing any bleeding or cracked nipples from feeding? &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="bleeding_cracked_nipples_during_feeding" value="Yes"> Yes &nbsp;&nbsp; <input type="checkbox" name="bleeding_cracked_nipples_during_feeding" value="No"> No
            </label>
        </div>

        <div class="form-group col-sm-12">
            <label>Are you using a nipple shield? &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="using_nipple_shield" value="Yes"> Yes &nbsp;&nbsp; <input type="checkbox" name="using_nipple_shield" value="No"> No
            </label>
        </div>
        
        <div class="form-group col-sm-12">
            <label>Are you experiencing any latching issues? &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="any_lactation_issues" value="Yes"> Yes &nbsp;&nbsp; <input type="checkbox" name="any_lactation_issues" value="No"> No
            </label>
        </div>

        <div class="form-group col-sm-12">
            <label>If yes, when are issues present? &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="when_are_issues_present" value="breast"> Breast &nbsp;&nbsp; <input type="checkbox" name="when_are_issues_present" value="bottle"> Bottle
            </label>
        </div>

        <div class="form-group col-sm-12">
            <label>Does your baby fall asleep during feedings? &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="fall_asleep_during_feedings" value="Yes"> Yes &nbsp;&nbsp; <input type="checkbox" name="fall_asleep_during_feedings" value="No"> No
            </label>
        </div>

        <div class="form-group col-sm-12">
            <label>Does your baby wake up hungry shortly after feedings? &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="wake_up_hungry_after_feedings" value="Yes"> Yes &nbsp;&nbsp; <input type="checkbox" name="wake_up_hungry_after_feedings" value="No"> No
            </label>
        </div>

        <div class="form-group col-sm-12">
            <label>Does your baby cry to eat? &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="cry_to_eat" value="Yes"> Yes &nbsp;&nbsp; <input type="checkbox" name="cry_to_eat" value="No"> No
            </label>
        </div>

        <div class="form-group col-sm-12">
            <label>Do you notice your baby&#39;s jaw quivering during or following feeding? &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="jaw_quivering" value="Yes"> Yes &nbsp;&nbsp; <input type="checkbox" name="jaw_quivering" value="No"> No
            </label>
        </div>

        <div class="form-group col-sm-12">
            <label>Are you noticing any spillage during feeding? &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="spillage_during_feeding" value="Yes"> Yes &nbsp;&nbsp; <input type="checkbox" name="spillage_during_feeding" value="No"> No
            </label>
        </div>

        <div class="form-group col-sm-12">
            <label>Please list any food allergies your baby may have:</label>
            <input type="text" name="list_allergies" class="form-control">
        </div>

        <div class="form-group col-sm-12">
            <label>Please list any food allergies the baby's mother may have:</label>
            <input type="text" name="mom_list_allergies" class="form-control">
        </div>

        <div class="form-group col-sm-12">
            <label>Please describe if your baby has experienced any Reflux and how often:</label>
            <input type="text" name="describe_reflux" class="form-control">
        </div>

        <div class="form-group col-sm-12">
            <label>Does your baby seem fussy or uncomfortable following feedings?  If so, describe:</label>
            <input type="text" name="fussy_or_uncomfortable_after_feeding" class="form-control">
        </div>

        <div class="form-group col-sm-12">
            <label>Is your baby coughing or choking during feeding?  How often?</label>
            <input type="text" name="coughing_during_feeding" class="form-control">
        </div>

        <div class="form-group col-sm-6">
            <label>On average, how many wet diapers per day?</label>
            <input type="text" name="wet_diapers" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label>On average, how many dirty/bowel diapers per day?</label>
            <input type="text" name="dirty_diapers" class="form-control">
        </div>

        <h3>Medical History</h3>
        <div class="form-group col-sm-12">
            <span class="radio-label">How would you describe your infant’s current health status?</span>
            <label class="radio-inline">
                <input type="radio" name="health_status" value="good"> Good
            </label>
            <label class="radio-inline">
                <input type="radio" name="health_status" value="fair"> Fair
            </label>
            </label>
            <label class="radio-inline">
                <input type="radio" name="health_status" value="poor"> Poor
            </label>
        </div>

        <p>Please list any illnesses and/or injuries with associated fevers, after effects, and the age of occurrence:</p>

        <div class="form-group col-sm-12">
            <label>Any operations?  Please describe:</label>
            <input type="text" name="operations" class="form-control">
        </div>

        <div class="form-group col-sm-6">
            <label>Ear infections?</label>
            <input type="text" name="ear_infections" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label>Frequent colds?</label>
            <input type="text" name="frequent_colds" class="form-control">
        </div>

        <div class="form-group col-sm-6">
            <label>Bronchitis or respiratory infections?</label>
            <input type="text" name="bronchitis_or_respitory" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label>Pneumonia?</label>
            <input type="text" name="pneumonia" class="form-control">
        </div>

        <div class="form-group col-sm-12">
            <label>Other illnesses? Please describe:</label>
            <input type="text" name="other_illnesses" class="form-control">
        </div>

        <div class="form-group col-sm-12">
            <label>Is your baby on any medications?  Please list:</label>
            <input type="text" name="list_meds" class="form-control">
        </div>

        <div class="form-group col-sm-12">
            <label>Please explain your concerns about your infant’s feeding habits and/or physical development:</label>
            <input type="text" name="explain_feeding_habit_concerns" class="form-control">
        </div>

        <div class="form-group col-sm-12">
            <label>Please state in your own words what difficulties your infant has during feedings:</label>
            <input type="text" name="own_words_what_feeding_difficulties" class="form-control">
        </div>

        <div class="form-group col-sm-6">
            <label>Has child had a hearing evaluation?</label>
            <input type="text" name="had_a_hearing_evaluation" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label>When?</label>
            <input type="text" name="hearing_eval_when" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label>Where?</label>
            <input type="text" name="hearing_eval_where" class="form-control">
        </div>
        <div class="form-group col-sm-12">
            <label>Results</label>
            <input type="text" name="hearing_eval_results" class="form-control">
        </div>

        <div class="form-group col-sm-12">
            <label>May we use your infant’s information for research and/or other study purposes? &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="use_info_for_study_purposes" value="Yes"> Yes &nbsp;&nbsp; <input type="checkbox" name="use_info_for_study_purposes" value="No"> No
            </label>
        </div>

        <div class="form-group col-sm-12">
            <label class="text-primary">Note: <span style="font-weight:normal;">The Baby Clinic is a $100 fee paid via cash or check. We do not accept credit cards.</span></label>
            <hr>
        </div>


        <div class="form-group col-sm-4">
            <label>Completed By (Your Name)</label>
            <input type="text" name="your_name" class="form-control" required>
        </div>
        <div class="form-group col-sm-3">
            <label>Email Address</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group col-sm-3">
            <label>Relationship to Child</label>
            <input type="text" name="relationship_to_child" class="form-control" required>
        </div>
        <div class="form-group col-sm-2">
            <label>Date</label>
            <input type="text" name="date" class="form-control" value="<?php $today = new DateTime; echo $today->format('M d, Y'); ?>">
        </div>

        <div class="col-sm-12">
            <br>
            <button type="submit" class="btn btn-primary">Submit Form</button>
        </div>
    </div>

</form>