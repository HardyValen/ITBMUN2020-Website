<!-- Extends registrationLanding.blade.php -->

<div class="form-page" id="form-individual-page-1">
    <div class="registration-form-wrapper">
        
        <div class='registration-form-header individual-delegate'>
            <h1>INDIVIDUAL DELEGATE</h1>
        </div>
        
        <h2 class='mb-5'>Personal Identity<br>&mdash;</h2>
        
        <div class="registration-row">
            <div class="registration-col r-col-12">
                <input type="text" class="form-input" name="fullName" id="fullName" placeholder=' ' required/>
                <label class="text-label" for="fullName">Full Name</label>
                <p class="registration-info">
                        <span class='info'></span>
                        <span class='required'><i class="fas fa-exclamation-circle"></i>&ensp;Required</span>
                </p>
                <p class="registration-alert"></p>
            </div>
        </div>

        <div class="registration-row">
            <div class="registration-col r-col-12">
                <input type="text" class="form-input" name="institution" id="institution" placeholder=' ' required/>
                <label class="text-label" for="institution">Institution</label>
                <p class="registration-info">
                        <span class='info'></span>
                        <span class='required'><i class="fas fa-exclamation-circle"></i>&ensp;Required</span>
                </p>
                <p class="registration-alert"></p>
            </div>
        </div>

        <div class="registration-row">
            <div class="registration-col r-col-6">
                <input type="text" class="form-input" name="nationality" id="nationality" placeholder=' ' required/>
                <label class="text-label" for="nationality">Nationality</label>
                <p class="registration-info">
                        <span class='info'></span>
                        <span class='required'><i class="fas fa-exclamation-circle"></i>&ensp;Required</span>
                </p>
                <p class="registration-alert"></p>
            </div>
            <div class="registration-col r-col-6">
                <input type="text" class="form-input" name="idNumber" id="idNumber" placeholder=' ' required/>
                <label class="text-label" for="idNumber">ID Number</label>
                <p class="registration-info">
                        <span class='info'></span>
                        <span class='required'><i class="fas fa-exclamation-circle"></i>&ensp;Required</span>
                </p>
                <p class="registration-alert"></p>
            </div>
        </div>

        <div class="registration-row">
            <div class="registration-col r-col-6">
                <div class="registration-radio-wrapper">
                    <p class='radio-header'>Gender</p>
                    <label>
                        <span class='radio-description'>Male</span>
                        <input type="radio" name="gender" value="Male" checked>
                        <span class='radio-button'></span>
                    </label>
                    <label>
                        <span class='radio-description'>Female</span>
                        <input type="radio" name="gender" value="Female">
                        <span class='radio-button'></span>
                    </label>
                    <label>
                        <span class='radio-description'>Others</span>
                        <input type="radio" name="gender" value="Others">
                        <span class='radio-button'></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="registration-row mt-5">
            <div class="registration-col r-col-12 nav-button-wrapper">
                <a onclick="backtoMain()" class="button-white-transparent" href="#hero">Previous</a>
                <a onclick="showPage('#form-individual-page-2')" class="button-white-transparent" href="#hero">Next</a>
            </div>
        </div>

    </div>
</div>