<form method="post" id="baby-clinic-intake-form">
    
    <div class="row">

        <div class="form-group col-xs-6">
            <label>Your Name</label>
            <input type="text" name="your_name" class="form-control" required>
        </div>
        <div class="form-group col-xs-6">
            <label>Child's Name</label>
            <input type="text" name="childs_name" class="form-control" required>
        </div>

        <div class="form-group col-xs-6">
            <label>Your Relationship</label>
            <input type="text" name="your_relationship" class="form-control">
        </div>
        <div class="form-group col-xs-6">
            <label>Child's Date of Birth</label>
            <input type="text" name="childs_dob" class="form-control">
        </div>

        <div class="form-group col-xs-4">
            <label>Address</label>
            <input type="text" name="address" class="form-control">
        </div>
        <div class="form-group col-xs-3">
            <label>City</label>
            <input type="text" name="city" class="form-control">
        </div>
        <div class="form-group col-xs-2">
            <label>State</label>
            <input type="text" name="state" class="form-control">
        </div>
        <div class="form-group col-xs-3">
            <label>ZIP Code</label>
            <input type="text" name="zip" class="form-control">
        </div>

        <div class="form-group col-xs-6">
            <label>Home Phone #</label>
            <input type="text" name="home_phone" class="form-control">
        </div>
        <div class="form-group col-xs-6">
            <label>Name of Child's School</label>
            <input type="text" name="name_of_childs_school" class="form-control">
        </div>

        <div class="form-group col-xs-6">
            <label>Mother's Name</label>
            <input type="text" name="mothers_name" class="form-control">
        </div>
        <div class="form-group col-xs-6">
            <label>Father's Name</label>
            <input type="text" name="fathers_name" class="form-control">
        </div>

        <div class="form-group col-xs-6">
            <label>Mother's Cell Phone #</label>
            <input type="text" name="mothers_cell" class="form-control">
        </div>
        <div class="form-group col-xs-6">
            <label>Father's Cell Phone #</label>
            <input type="text" name="fathers_cell" class="form-control">
        </div>

        <div class="form-group col-xs-12">
            <label>Marital Status (Married, Divorced, Shared Custody?)</label>
            <input type="text" name="marital_status" class="form-control">
        </div>

        <div class="form-group col-xs-10">
            <label>If parent/legal custodian is not available who do you give authority to contact in case of an emergency?</label>
            <input type="text" name="emergency_contact_who" class="form-control">
        </div>
        <div class="form-group col-xs-2">
            <label>Phone #</label>
            <input type="text" name="emergency_contact_phone" class="form-control">
        </div>

        <div class="form-group col-xs-6">
            <label>Does your child have a diagnosis?</label>
            <input type="text" name="what_is_diagnosis" class="form-control">
        </div>
        <div class="form-group col-xs-6">
            <label>What doctor diagnosed your child?</label>
            <input type="text" name="what_doctor_diagnosed_your_child" class="form-control">
        </div>

        <div class="form-group col-sm-12">
            <label>Why are you here? &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="why_are_you_here" value="screening"> Screening (30 min)
                    &nbsp;&nbsp; <input type="checkbox" name="why_are_you_here" value="evaluation"> Evaluation
                    &nbsp;&nbsp; <input type="checkbox" name="why_are_you_here" value="baby_clinic"> Baby Clinic $100
            </label>
        </div>

        <p class="text-primary">If A. Meric O’Grady Speech and Language Pathology LLC is not a provider for your insurance company, a receipt will be provided to you on a monthly basis that can be submitted to your insurance company for reimbursement.</p>

        <div class="form-group col-sm-12">
            <span class="radio-label">Who will be the primary payer for your child’s therapy?</span>
            <div class="radio">
                <label>
                    <input type="radio" name="primary_payer" value="self-pay"> Self-Pay
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="primary_payer" value="baby_clinic_pay"> Baby Clinic $100
                    
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="primary_payer" value="tri-care"> Tri-Care ID#
                    <input type="text" name="tri-care_id">
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="primary_payer" value="united"> United Health Care ID#
                    <input type="text" name="united_id">

                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="primary_payer" value="amerigroup_sunshine_coventry"> Staywell, WellCare, Healthease, or Healthy Kids, Amerigroup, Sunshine, Conventry ID#  
                    <input type="text" name="amerigroup_sunshine_coventry_etc_id">
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="primary_payer" value="medicaid_or_cms"> Medicaid or CMS ID # 
                    <input type="text" name="medicaid_medipass_id">
                </label>
            </div>
        </div>

        <div class="form-group col-xs-6">
            <label>Does your child have another insurance company?</label>
            <input type="text" name="insured_by_other_insurance_company" class="form-control">
        </div>
        <div class="form-group col-xs-3">
            <label>Name</label>
            <input type="text" name="insurance_company_name" class="form-control">
        </div>
        <div class="form-group col-xs-3">
            <label>Member #</label>
            <input type="text" name="insurance_member_number" class="form-control">
        </div>

        <div class="form-group col-sm-12">
            <label>Has your child received a speech and language or feeding evaluation in the last 6 months? &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="received_feeding_eval" value="Yes"> Yes &nbsp;&nbsp; <input type="checkbox" name="received_feeding_eval" value="No"> No
            </label>
        </div>

        <div class="form-group col-xs-12">
            <label>Who referred you to our office?</label>
            <input type="text" name="who_referred_you" class="form-control">
        </div>

        <div class="form-group col-xs-6">
            <label>Primary Physician's Name</label>
            <input type="text" name="primary_physician_name" class="form-control">
        </div>
        <div class="form-group col-xs-6">
            <label>Office Name</label>
            <input type="text" name="primary_phys_office_name" class="form-control">
        </div>

        <div class="form-group col-xs-6">
            <label>Doctor's Phone #</label>
            <input type="text" name="doctor_phone" class="form-control">
        </div>
        <div class="form-group col-xs-6">
            <label>Doctor's Fax #</label>
            <input type="text" name="doctor_fax" class="form-control">
        </div>
    </div>

    <br>

    <div class="col-sm-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    <br><br>

</form>