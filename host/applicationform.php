<?php 
include_once 'header.php'
?>
    <div class="form-title"><h1>Application Form</h1></div>
    <div class="form-body">
        <form action="includes/hostapplication.inc.php" method="post">
            <div class="form-category category-name">
                <p class="input-category">Name</p>
                <input class="input-field first-name-input" type="text" name="firstname">
                <label class="input-label first-name-label">First Name</label>
                <input class="input-field last-name" type="text" name="lastname">
                <label class="input-label last-name-label">last Name</label>
            </div>
            <div class="form-category category-personal">
                <p class="input-category">Personal Information</p>
                <input class="input-field " type="text" name="idnumber">
                <label class="input-label ">ID/Passport Number</label><br>
                <input class="input-field " type="text" name="nationality">
                <label class="input-label ">Nationality</label><br>
                <input class="input-field " type="date" name="dob">
                <label class="input-label ">Date Of Birth</label><br>
                <select class="input-option-field" name="gender">
                    <option disabled="disabled" selected="selected">--Choose Gender Option</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Non-binary</option>
                    <option>Transgender</option>
                    <option>Intersex</option>
                    <option>I prefer not to say</option>                
                </select>
                <label class="input-label ">Gender</label><br>
                <input class="input-field " type="email" name="email">
                <label class="input-label ">Email Address</label><br>
                <div class="sub-category">
                    <p class="input-sub-category">Phone Number</p>
                    <input class="input-field area-code-input" type="text" name="areacode">
                    <label class="input-label area-code-label">Area Code</label>
                    <input class="input-field phone-number-input" type="text" name="phonenumber">
                    <label class="input-label phone-number-label">Phone Number</label>
                </div>
            </div>
            <div class="form-category category-kin">
                <p class="input-category">Next of kin information</p>
                <div class="sub-category">
                    <p class="input-sub-category">Name</p>
                    <input class="input-field first-name-input" type="text" name="firstnamekin">
                    <label class="input-label first-name-label">First Name</label>
                    <input class="input-field last-name" type="text" name="lastnamekin">
                    <label class="input-label last-name-label">last Name</label>
                </div>
                <input class="input-field " type="email" name="emailkin">
                <label class="input-label ">Email Address</label><br>
                <div class="sub-category">
                    <p class="input-sub-category">Phone Number</p>
                    <input class="input-field area-code-input" type="text" name="areacodekin">
                    <label class="input-label area-code-label">Area Code</label>
                    <input class="input-field phone-number-input" type="text" name="phonenumberkin">
                    <label class="input-label phone-number-label">Phone Number</label>
                </div>
            </div>
            <div class="form-category category-work">
                <p class="sub-category">Work information</p>
                <input class="input-field " type="text" name="occupation">
                <label class="input-label ">Occupation</label><br>
                <input class="input-field " type="text" name="Employer">
                <label class="input-label ">Company/Employer</label><br>
                <input class="input-field " type="email" name="emailemployer">
                <label class="input-label ">Company Email Address</label><br>
                <div class="sub-category">
                    <p class="input-sub-category">Company Phone Number</p>
                    <input class="input-field area-code-input" type="text" name="areacodeemployer">
                    <label class="input-label area-code-label">Area Code</label>
                    <input class="input-field phone-number-input" type="text" name="phonenumberemployer">
                    <label class="input-label phone-number-label">Phone Number</label>
                </div>
            
            </div>

            <p class="message important-message">Confirm your information before submition.Applications submitted can not be undone.</p><br>
            <button class="form-submit" type="submit" name="submit">Submit Application</button>

        
        
        </form>
    
    </div>
<?php 
include_once 'footer.php'
?>