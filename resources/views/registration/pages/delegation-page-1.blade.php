<div class="form-page" id="form-delegation-page-1">
    <div class="registration-form-wrapper">
        
        <div class='registration-form-header delegation'>
            <h1>DELEGATION</h1>
        </div>
        
        <h2 class='mb-5'>Delegation Info<br>&mdash;</h2>
        
        <div class="registration-row">
            <div class="registration-col r-col-12">
                <input type="text" class="form-input-delegation" name="headDelegate" id="headDelegate" placeholder=' ' required/>
                <label class="text-label" for="headDelegate">Head Delegate Name</label>
                <p class="registration-info">
                    <span class='info'>This will be the name printed on your certificate as well.</span>
                    <span class='required'><i class="fas fa-exclamation-circle"></i>&ensp;Required</span>
                </p>
                <p class="registration-alert"></p>
            </div>
        </div>

        <div class="registration-row">
            <div class="registration-col r-col-12">
                <input type="text" class="form-input-delegation" name="institution" id="institution" placeholder=' ' required/>
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
                <input type="text" class="form-input-delegation" name="contactNumber" id="contactNumber" placeholder=' ' required/>
                <label class="text-label" for="contactNumber">Contact Number</label>
                <p class="registration-info">
                    <span class='info'></span>
                    <span class='required'><i class="fas fa-exclamation-circle"></i>&ensp;Required</span>
                </p>
                <p class="registration-alert"></p>
            </div>
            <div class="registration-col r-col-6">
                <input type="text" class="form-input-delegation" name="lineId" id="lineId" placeholder=' ' required/>
                <label class="text-label" for="lineId">Head Delegate Line ID</label>
                <p class="registration-info">
                    <span class='info'>(National ID/ Passport Number)</span>
                    <span class='required'></span>
                </p>
                <p class="registration-alert"></p>
            </div>
        </div>

        <div class="registration-row mt-5">
            <div class="registration-col r-col-12 nav-button-wrapper">
                <a onclick="backtoMain()" class="button-white-transparent" href="#hero">Previous</a>
                <a onclick="showPage('#form-delegation-page-2')" class="button-white-transparent" href="#hero">Next</a>
            </div>
        </div>

    </div>
</div>