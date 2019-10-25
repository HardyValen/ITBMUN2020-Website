@extends("template.main")

@section('title', 'Registration Policy - ITBMUN 2020')

@section('content')

<!-- ## 1. Sidebar Navigation ========= -->
@include('components.sidebar-main')

<!-- ## END of Sidebar Navigation ========= -->
    
<main>

<!-- ## 2. Sidebar Navigation ========= -->
    @include('components.navbar-top-main')
        
<!-- ## END of Sidebar Navigation ========= -->

<!-- ## 3. Council Hero Section ========= -->
    <section class='registration-policy' id='hero'>
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <h1>Registration Policy</h1>
            </div>
        </div>
    </section>

    <section class="registration-body" id='body'>
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <iframe src="https://drive.google.com/file/d/1_gZ1UqaqHwKJYBUPHtkatmQymDwxWo_N/preview" width="100%" height="480"></iframe>
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

    <script src="{{URL::asset('js/registration/dictionary.js')}}"></script>
    <script src="{{URL::asset('js/registration/pageController.js')}}"></script>
    <script src="{{URL::asset('js/registration/tabController.js')}}"></script>
    <script src="{{URL::asset('js/registration/validation.js')}}"></script>
@endsection