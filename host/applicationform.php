<?php 
include_once 'header.php'
?>
    
    <div class="form-body">
        <h1 class="pagetitle">Application Form</h1>
        <form action="includes/hostapplication.inc.php" method="post">
            <div class="form-category category-name">
                <p class="input-category">Name</p>
                <input class="input-field first-name-input" type="text" name="firstname" placeholder="first name" required><br>
                <input class="input-field last-name" type="text" name="lastname" placeholder="last name" required><br>
            </div>
            <div class="form-category category-id">
                <p class="input-category">User ID</p>
                <input class="input-field " type="text" name="userID" placeholder="user ID" required>
            </div>
            <hr>
            <div class="form-category category-personal">
                <p class="input-category">Personal Information</p>
                <input class="input-field " type="text" name="idnumber" placeholder="ID/Passport Number"required><br>
                <input class="input-field " type="text" name="nationality" placeholder="Nationality" required> <br>
                <p class="input-sub-category">Date Of Birth</p>
                <input class="input-field " type="date" name="dob" required><br>
                <select class="input-field" name="gender" required>
                    <option disabled="disabled" selected="selected">--Choose Gender Option</option>
                    <option class="input-field">Male</option>
                    <option>Female</option>
                    <option>Non-binary</option>
                    <option>Transgender</option>
                    <option>Intersex</option>
                    <option>I prefer not to say</option>                
                </select><br>
                <input class="input-field " type="email" name="email" placeholder="email" required><br>
                <div class="sub-category">
                    <p class="input-sub-category">Phone Number</p>
                    <input class="input-field area-code-input" type="text" name="areacode" placeholder="+254" required>
                    <input class="input-field phone-number-input" type="text" name="phonenumber"placeholder="712345678" required>
                </div>
            </div>
            <hr>
            <div class="form-category category-kin">
                <p class="input-category">Next of kin information</p>
                <div class="sub-category">
                    <p class="input-sub-category">Name</p>
                    <input class="input-field first-name-input" type="text" name="firstnamekin" placeholder="First Name" required><br>
                    <input class="input-field last-name" type="text" name="lastnamekin" placeholder="Last Name" required>
                </div>
                <input class="input-field " type="email" name="emailkin" placeholder="email" required><br>
                <div class="sub-category">
                    <p class="input-sub-category">Phone Number</p>
                    <input class="input-field area-code-input" type="text" name="areacodekin" placeholder="+254" required>
                    <input class="input-field phone-number-input" type="text" name="phonenumberkin" placeholder="712345678" required>
            </div>
            <hr>
            <div class="form-category category-work">
                <p class="input-category">Work information</p>
                <input class="input-field " type="text" name="occupation" placeholder="Occupation" required><br>
                <input class="input-field " type="text" name="Employer" placeholder="Employer" required><br>
                <input class="input-field " type="email" name="emailemployer" placeholder="Company Email" required><br>
                <div class="sub-category">
                    <p class="input-sub-category">Company Phone Number</p>
                    <input class="input-field area-code-input" type="text" name="areacodeemployer" placeholder="+254" required>
                    <input class="input-field phone-number-input" type="text" name="phonenumberemployer" placeholder="712345678" required>
                </div>
            
            </div>

            <p class="message important-message">Confirm your information before submition.Applications submitted can not be undone.</p><br>
            <button class="form-submit" type="submit" name="submit">Submit Application</button>

        </form>
        <?php
            if (isset($_GET["error"])){
                if($_GET["error"]=="none"){
                echo "<p class='message important-message' > Application submitted successfully</p>";
                }
            }
        
        ?>
    </div>
<?php 
include_once 'footer.php'
?>