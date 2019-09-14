@extends("template.main")

@section('title', 'Registration - ITBMUN 2020')

@section('content')

<!-- ## 1. Sidebar Navigation ========= -->
@include('components.sidebar-main')

<!-- ## END of Sidebar Navigation ========= -->
    
<main onbeforeunload="alert('you sure?')">

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

    <section class="registration-body" id='body'>
        <div class="registration-wrapper">

            <div class="form-page is-active registration-card-wrapper" id='form-landing'>
                <a class='registration-form__delegate-choice delegate' onclick="showPage('#form-individual-page-1')" href="#hero">
                    <h2>INDIVIDUAL DELEGATE</h2>
                </a>
                <a class='registration-form__delegate-choice delegation' onclick="showPage('#form-delegation-page-1')" href="#hero">
                    <h2>DELEGATION</h2>
                </a>
            </div>

            <form action="/registration/individual-delegate" method="post" style="width: 100%;">
            @csrf
                @include('registration.pages.individual-page-1')
                @include('registration.pages.individual-page-2')
                @include('registration.pages.individual-page-3')
                @include('registration.pages.individual-page-4')
            </form>

            <form action="/registration/delegations" method="post" style="width: 100%;">
            @csrf
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
                                    <span class='info'></span>
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
                                    <span class='info'></span>
                                    <span class='required'><i class="fas fa-exclamation-circle"></i>&ensp;Required</span>
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

                <div class="form-page" id="form-delegation-page-2">
                    <div class="registration-form-wrapper">
                        
                        <div class='registration-form-header delegation'>
                            <h1>DELEGATION</h1>
                        </div>
                        
                        <div class="registration-row">
                            <div class="registration-col" style='min-width: 100%'>
                                <h2 class='mb-5'>Delegates<br>&mdash;</h2>
                                <p>Choose how many delegates in your delegation</p>

                                <div class="registration-card-wrapper">
                                    <a class='registration-form__delegate-choice delegation-choice-5' onclick='setDelegates(5)' href="#hero">
                                        <h2>&#x25cf;&ensp;Five Delegates</h2>
                                    </a>
                                    <a class='registration-form__delegate-choice delegation-choice-8' onclick='setDelegates(8)' href="#hero">
                                        <h2>&#x25cf;&ensp;Eight Delegates</h2>
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="registration-row mt-5">
                            <div class="registration-col r-col-12 nav-button-wrapper">
                                <a onclick="back()" class="button-white-transparent" href="#hero">Previous</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="form-page" id='form-delegation-page-3'>
                    <div class="registration-form-wrapper">
                        <div class='registration-form-header delegation'>
                            <h1>DELEGATION</h1>
                        </div>
                        <div class="form-tab-wrapper"></div>
                        <div class="registration-row mt-5">
                            <div class="registration-col r-col-12 nav-button-wrapper">
                                <a class="button-white-transparent" onclick="backToSetDelegates()">Previous</a>
                                <a class="button-white-transparent" onclick="summaryDelegation('#form-delegation-page-4')">Next</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-page" id="form-delegation-page-4">
                    <div class="registration-form-wrapper" style="width: 100%; flex-direction: row;">
                        <div class='registration-form-header delegation'>
                            <h1>DELEGATION</h1>
                        </div>

                        <h2 class='mb-5'>Form Summary<br>&mdash;</h2>

                        <div class="summary-delegation mb-5"></div>

                        <div class="registration-row">
                            <div class="registration-col r-col-12 nav-button-wrapper">
                                <a class="button-white-transparent" onclick='back()'>Back</a>
                                <input type="submit" value="Send Data" class="button-white-transparent" />
                            </div>
                        </div>
                    </div>
                </div>
                
            </form>
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

    <script src="{{URL::asset('js/registration/dictionary.js')}}"></script>
    <script src="{{URL::asset('js/registration/pageController.js')}}"></script>
    <script src="{{URL::asset('js/registration/tabController.js')}}"></script>

    <script>
        window.onbeforeunload = function (){
            return "";
        };
    </script>
@endsection