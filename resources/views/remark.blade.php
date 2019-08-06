@extends("template.main")

@section('title', 'Remark - ITBMUN 2020')

@section('content')

<!-- ## 1. Sidebar Navigation ========= -->
@include('components.sidebar-main')

<!-- ## END of Sidebar Navigation ========= -->
    
<main>

<!-- ## 2. Sidebar Navigation ========= -->
    @include('components.navbar-top-main')
        
<!-- ## END of Sidebar Navigation ========= -->

<!-- ## 3. Council Hero Section ========= -->
    <section class='remark-hero' id='hero'>
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <h1>Remarks</h1>
            </div>
        </div>
    </section>

    <section class="remark-body">
        <div class="row">
            <div class="col-12 offset-md-2 col-md-8">
                <nav class="remark-nav">
                    <ul>
                        <li id="secgen2020-nav"><a href="#secgen2020">Secgen 2020</a></li>
                        <li id="secgen2019-nav"><a href="#secgen2019">Secgen 2019</a></li>
                        <li id="gmunc-nav"><a href="#gmunc-advisor">GMUNC Advisor</a></li>
                    </ul>
                </nav>
                <div class="remark-wrapper">
                    <div class="remark-content" id="secgen2020">Section One</div>
                    <div class="remark-content" id="secgen2019">Section Two</div>
                    <div class="remark-content" id="gmunc-advisor">Section Three</div>
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

    <script src="{{URL::asset('js/remark/nav-active.js')}}"></script>

    @if($getString == "secgen2020")
    <script>
        document.querySelector("#secgen2020-nav").classList.add("is-active");
        document.querySelector("#secgen2020").classList.add("is-active");
    </script>
    @else
        @if($getString == "secgen2019")
        <script>
            document.querySelector("#secgen2019-nav").classList.add("is-active");
            document.querySelector("#secgen2019").classList.add("is-active");
        </script>
        @else
        <script>
            document.querySelector("#gmunc-nav").classList.add("is-active");
            document.querySelector("#gmunc-advisor").classList.add("is-active");
        </script>
        @endif
    @endif

@endsection