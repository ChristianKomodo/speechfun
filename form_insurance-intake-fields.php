<form method="post" id="insurance-intake-form">
    
    <div class="row clearfix">
        <h3>Patient Information</h3>
        <div class="form-group col-sm-4">
            <label>Patient's Name (Last, First)</label>
            <input type="text" name="child_name" class="form-control" required>
        </div>
        <div class="form-group col-sm-2">
            <label>Age</label>
            <input type="text" name="child_age" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label>Birthdate</label>
            <input type="text" name="child_birthdate" class="form-control">
        </div>
        <div class="form-group col-sm-2">
            <label>Sex</label>
            <input type="text" name="child_gender" class="form-control">
        </div>

        <div class="form-group col-sm-4">
            <label>Mailing Address</label>
            <input type="text" name="address" class="form-control">
        </div>
        <div class="form-group col-sm-2">
            <label>City</label>
            <input type="text" name="city" class="form-control">
        </div>
        <div class="form-group col-sm-1">
            <label>State</label>
            <input type="text" name="state" class="form-control">
        </div>
        <div class="form-group col-sm-2">
            <label>Zip</label>
            <input type="text" name="zip" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>Marital Status</label>
            <input type="text" name="marital_status" class="form-control">
        </div>

        <div class="form-group col-sm-4">
            <label>Primary Diagnosis</label>
            <input type="text" name="primary_diagnosis" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label>Primary Numeric Diagnosis</label>
            <input type="text" name="primary_numeric_diagnosis" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label>Secondary Numeric Diagnosis</label>
            <input type="text" name="secondary_numeric_diagnosis" class="form-control">
        </div>

        <h3>Responsible Party</h3>
        <div class="form-group col-sm-3">
            <label>Name (Last, First)</label>
            <input type="text" name="responsible_party_name" class="form-control">
        </div>
        <div class="form-group col-sm-2">
            <label>Age</label>
            <input type="text" name="responsible_party_age" class="form-control">
        </div>
        <div class="form-group col-sm-2">
            <label>Birthdate</label>
            <input type="text" name="responsible_party_dob" class="form-control">
        </div>
        <div class="form-group col-sm-2">
            <label>Sex</label>
            <input type="text" name="responsible_party_gender" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>Relationship to Patient</label>
            <input type="text" name="relationship_to_patient" class="form-control">
        </div>

        <h3>Referring Provider</h3>
        <div class="form-group col-sm-4">
            <label>Name (Last, First)</label>
            <input type="text" name="referring_provider_name" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label>Phone</label>
            <input type="text" name="referring_provider_phone" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label>Fax</label>
            <input type="text" name="referring_provider_fax" class="form-control">
        </div>

        <h3>Primary Insurance Information</h3>
        <div class="form-group col-sm-4">
            <label>Primary Insurance Company</label>
            <input type="text" name="primary_ins_co" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>Policy Holder Name</label>
            <input type="text" name="primary_ins_policy_holder_name" class="form-control">
        </div>
        <div class="form-group col-sm-2">
            <label>Date of Birth</label>
            <input type="text" name="primary_ins_policy_holder_dob" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>Policy Number</label>
            <input type="text" name="primary_ins_policy_number" class="form-control">
        </div>

        <div class="form-group col-sm-4">
            <label>Insurance Address</label>
            <input type="text" name="primary_ins_address" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>City</label>
            <input type="text" name="primary_ins_city" class="form-control">
        </div>
        <div class="form-group col-sm-1">
            <label>State</label>
            <input type="text" name="primary_ins_state" class="form-control">
        </div>
        <div class="form-group col-sm-2">
            <label>ZIP Code</label>
            <input type="text" name="primary_ins_zip" class="form-control">
        </div>
        <div class="form-group col-sm-2">
            <label>Group #</label>
            <input type="text" name="primary_ins_group_number" class="form-control">
        </div>

        <div class="form-group col-sm-3">
            <label>Phone #</label>
            <input type="text" name="primary_ins_phone" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>Co-Insurance %</label>
            <input type="text" name="primary_ins_co_insurance_percent" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>Co-Pay</label>
            <input type="text" name="primary_ins_co_pay" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>Deductible</label>
            <input type="text" name="primary_ins_deductible" class="form-control">
        </div>
    </div>

    <div class="row clearfix">
        <h3>Secondary Insurance Company</h3>
        <div class="form-group col-sm-3">
            <label>Secondary Insurance Company</label>
            <input type="text" name="secondary_ins_co" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>Policy Holder Name</label>
            <input type="text" name="secondary_ins_policy_holder_name" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>Date of Birth</label>
            <input type="text" name="secondary_ins_policy_holder_dob" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>Policy Number</label>
            <input type="text" name="secondary_ins_policy_number" class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-sm-4">
            <label>Insurance Address</label>
            <input type="text" name="secondary_ins_address" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>City</label>
            <input type="text" name="secondary_ins_city" class="form-control">
        </div>
        <div class="form-group col-sm-1">
            <label>State</label>
            <input type="text" name="secondary_ins_state" class="form-control">
        </div>
        <div class="form-group col-sm-2">
            <label>ZIP Code</label>
            <input type="text" name="secondary_ins_zip" class="form-control">
        </div>
        <div class="form-group col-sm-2">
            <label>Group Number</label>
            <input type="text" name="secondary_ins_group_number" class="form-control">
        </div>

        <div class="form-group col-sm-3">
            <label>Phone #</label>
            <input type="text" name="secondary_ins_phone" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>Co-Insurance %</label>
            <input type="text" name="secondary_ins_co_insurance_percent" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>Co-Pay</label>
            <input type="text" name="secondary_ins_co_pay" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>Deductible</label>
            <input type="text" name="secondary_ins_deductible" class="form-control">
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-sm-12">
            <label>Is your child currently receiving services under his/her insurance? &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="receiving_services_under_insurance" value="Yes"> Yes &nbsp;&nbsp; <input type="checkbox" name="receiving_services_under_insurance" value="No"> No
            </label>
        </div>
    </div>

    <div class="row clearfix">

        <hr>

        <div class="form-group col-sm-8">
            <label>Signature of Insured or Authorized Person (type full name)</label>
            <input type="text" name="signature_of_insured" class="form-control" required>
        </div>
        <div class="form-group col-sm-4">
            <label>Date</label>
            <input type="text" name="date" class="form-control" value="<?php $today = new DateTime; echo $today->format('M d, Y'); ?>" required>
        </div>

        <div class="col-sm-12">
            <p class="text-primary">*** Some of the Healthcare Exchange policies (Obamacare) have more exclusive provider networks than traditional plans. We highly recommend that you check with your insurance to make sure that this provider is in network with your specific plan. This will ensure that you do not get higher bills due to out of network coverage ***</p>
        </div>

        <div class="col-sm-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>

</form>