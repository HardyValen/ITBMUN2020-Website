@extends("template.main")

@section('title', 'Registration - ITBMUN 2020')

@section('content')

<!-- ## 1. Sidebar Navigation ========= -->
@include('components.sidebar-main')

<!-- ## END of Sidebar Navigation ========= -->
    
<main>

<!-- ## 2. Sidebar Navigation ========= -->
    @include('components.navbar-top-main')
        
<!-- ## END of Sidebar Navigation ========= -->

<!-- ## 3. Council Hero Section ========= -->
    <section class='registration-hero' id='hero'>
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <h1>Registration</h1>
            </div>
        </div>
    </section>

    <section class="registration-body">
        <div class="registration-wrapper">
            <div class="registration-card-wrapper">
                <div class='registration-form__delegate-choice delegate'>
                    <h2>INDIVIDUAL DELEGATE</h2>
                </div>
                <div class='registration-form__delegate-choice delegation'>
                    <h2>DELEGATION</h2>
                </div>
            </div>

            <div class="registration-form-wrapper mt-5">
                <h1>DELEGATE FORM</h1>
                <div class="registration-row">
                    <div class="registration-col r-col-12">
                        <input type="text" name="fullName" id="fullName" placeholder=' ' required/>
                        <label for="fullName">Full Name</label>
                    </div>
                </div>
                <div class="registration-row">
                    <div class="registration-col r-col-12">
                        <input type="email" name="email" id="email" placeholder=' ' required/>
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="registration-row">
                    <div class="registration-col r-col-12">
                        <input type="text" name="institution" id="institution" placeholder=' ' required/>
                        <label for="institution">Institution</label>
                    </div>
                </div>
                <div class="registration-row">
                    <div class='registration-col r-col-6'>
                        <input type="text" name="nationality" id="nationality" placeholder=' ' required/>
                        <label for="nationality">Nationality</label>
                    </div>
                    <div class='registration-col r-col-6'>
                        <input type="text" name="accomodation" id="accomodation" placeholder=' ' required/>
                        <label for="accomodation">Accomodation</label>
                    </div>
                </div>
                <div class="registration-row">
                    <div class='registration-col r-col-6'>
                        <input type="text" name="idNumber" id="idNumber" placeholder=' ' required/>
                        <label for="idNumber">ID Number</label>
                    </div>
                    <div class='registration-col r-col-6'>
                        <input type="text" name="gender" id="gender" placeholder=' ' required/>
                        <label for="gender">Gender</label>
                    </div>
                </div>
                <div class="registration-row">
                    <div class='registration-col r-col-6'>
                        <input type="text" name="contactNumber" id="contactNumber" placeholder=' ' required/>
                        <label for="contactNumber">Contact Number</label>
                    </div>
                    <div class='registration-col r-col-6'>
                        <input type="text" name="lineId" id="lineId" placeholder=' '/>
                        <label for="lineId">Line ID</label>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- ## END of Sidebar Navigation ========= -->

<!-- ## 4. Footer Navigation ========= -->
        @include('components.footer-main')
<!-- ## END of Footer Navigation ========= -->

</main>
@endsection

@section('script')
    <script src="{{URL::asset('js/nav-scroll.js')}}"></script>
    <script src="{{URL::asset('js/navigation.js')}}"></script>
    <script>

    </script>
@endsection