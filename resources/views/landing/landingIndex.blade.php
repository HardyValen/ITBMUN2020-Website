@extends("template.main")
<!-- 
 *  CONTENTS 
 * ============================
 * ## 1. <Sidebar Navigation>
 * ## 2. <Navigation Top>
 * ## 3. Hero Section
 *       |_ <#remark>
 * ## 4. Venue Section
 * ## 5. Remark Section
 *       |_ <Secgen ITBMUN 2020>
 *       |_ <Secgen ITBMUN 2019>
 *       |_ <GMUNC>
 * ## 6. Councils Section
 * ## 7. Support Section
 *       |_ <Sponsors>
 *       |_ <Media Partners>
 *       |_ <Other MUN>
-->

@section('title', 'Landing - ITBMUN 2020')

@section('content')
<!-- ## 1. Sidebar Navigation ========= -->
    @include('components.sidebar-main')

<!-- ## END of Sidebar Navigation ========= -->
    
    <main>
<!-- ## 2. Sidebar Navigation ========= -->
        @include('components.navbar-top-main')

<!-- ## END of Sidebar Navigation ========= -->

<!-- ## 3. Main Hero Section ========= -->
        <section class='main-hero' id='hero'>
            <div class="main-hero-container row">
                <div class="col-12"></div>
                <div class="col-md-10 col-lg-8 col-12 main-hero-content">
                    <p class='interlude'>Ommiting the Void:</p>
                    <h1 class='grand-theme'>
                        Bridging the<br>
                        multipolar universe<br>
                        through technology
                    </h1>
                </div>
                <div class="col-md-2 col-lg-4 col-12 scroll-down">
                    <p>
                        <a href="#remark">Learn More&emsp;<i class="fas fa-arrow-down"></i></a>
                    </p>
                </div>
            </div>
        </section>
<!-- ## END of Main Hero Section ========= -->

<!-- ## 4. Main Venue Section ========= -->
    <section class='main-intro'>
        <div class="main-intro-wrapper">
            <h1>
                Save the Date!
            </h1>
            <h2>
                January 31 &ndash; February 2, 2020<br>
                <b>Bandung, Indonesia</b>
            </h2>
            <p>
                ITB MUN once again calls upon you to bridge this multipolar world in which we live in, are you up for the challange, delegate?
            </p>

        </div>
    </section>

    <section class='main-registration'>
        <div class="row">
            <div class="col-md-8 offset-md-2 col-12">
                <h1>
                    REGISTRATION<br>
                    &mdash;
                </h1>
                <div class="main-registration-wrapper">
                    <a href='/registration' class="main-registration-card">
                        <div class="bg-register">
                            <h2>REGISTER&emsp;<br><i class="fas fa-long-arrow-alt-right"></i></h2>
                        </div>
                    </a>
                    <a href='/registration/information' class="main-registration-card">
                        <div class="bg-information">
                            <h2>INFORMATION&emsp;<br><i class="fas fa-long-arrow-alt-right"></i></h2>
                        </div>
                    </a>
                    <a href='/registration/policy' class="main-registration-card">
                        <div class="bg-policy">
                            <h2>POLICIES&emsp;<br><i class="fas fa-long-arrow-alt-right"></i></h2>
                        </div>
                    </a>
                </div>
                </h1>
            </div>
        </div>
    </section>

    <section class='main-venue'>
        <div class="row">
            <div class="col-md-8 offset-md-2 col-12">
                <h1>
                    VENUE<br>
                    &mdash;
                </h1>
                <div class="main-venue-wrapper">
                    <div class="main-venue-image"></div>
                    <div class="main-venue-content">
                        <h2>
                            Courtyard Marriott
                            
                        </h2>
                        <div>
                            <p>Strategically placed in the heart of the city, Courtyard Bandung Dago offers contemporary accommodation in a vibrant travel destination.</p>
                            <p>Jl. Ir. H. Juanda No.33, Tamansari, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40116</p>
                            <a href="/landing/hotel" class='button-white-transparent' target="_blank">More Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- ## END of Main Venue Section ========= -->

<!-- ## 5. Main Remark Section ========= -->
        <section class='main-remark' id='remark'>
            <div class="row">
                <div class="col-md-8 col-12 offset-md-2">
                    <h1>REMARKS<br>&mdash;</h1>

                    <!-- # START Remark from Secgen ITBMUN 2020 -->
                    <div class='remark-card remark-bg-itbmun2020'>
                        <div class='remark-card-summary'>
                            <p>
                            Our goal this year is to preserve the culture of bridging science and social studies through technology-based events and highly relatable conference topics...
                            </p>
                        </div>
                        <div class='remark-card-footer'>
                            <p>
                                <big><b>Angelica Wiliana</b></big><br>
                                Secretary General of ITBMUN 2020
                            </p>
                            <a class='button-white-transparent' href="/remark/secgen2020">Read</a>
                        </div>
                    </div>
                    <!-- # END of Secgen ITBMUN 2020 -->

                    <!-- # START Remark from Secgen GMUNC -->
                    <div class='remark-card remark-bg-gmunc'>
                        <div class='remark-card-summary'>
                            <p>
                                ITB MUN is a project initiated 4 years ago fueled by a dream to deliver a MUN with the best quality we can deliver... 
                            </p>
                        </div>
                        <div class='remark-card-footer'>
                            <p>
                                <big><b>Hanif Alfada</b></big><br>
                                Secretary General of GMUNC
                            </p>
                            <a class='button-white-transparent' href='/remark/secgenGMUNC'>Read</a>
                        </div>
                    </div>
                    <!-- # END of Secgen Secgen GMUNC -->
                </div>
            </div>
        </section>
<!-- ## END of Main Remark Section ========= -->

<!-- ## 6. Main Councils Section ========= -->
        <section class="main-councils">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-12">
                    <h1>
                        COUNCILS<br>
                        &mdash;
                    </h1>
                    <div class="main-councils-wrapper">
                        <a class="council" href='/councils/WHA'>
                            <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/WHA-white.png')}}">
                            <p>WHA</p>
                        </a>
                        <a class="council" href='/councils/UNEP'>
                            <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/UNEP-white-notext.png')}}">
                            <p>UNEP</p>
                        </a>
                        <a class="council" href='/councils/DISEC'>
                            <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/DISEC-white-text.png')}}">
                            <p>DISEC</p>
                        </a>
                        <a class="council" href='/councils/UNESCO'>
                            <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/UNESCO-white.png')}}">
                            <p>UNESCO</p>
                        </a>
                        <a class="council" href='/councils/CRISIS'>
                            <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/CRISIS-white.png')}}">
                            <p>CRISIS</p>
                        </a>
                        <a class="council" href='/councils/UNSC'>
                            <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/UNSC-white-text.png')}}">
                            <p>UNSC</p>
                        </a>
                        <a class="council" href='/councils/UNCA'>
                            <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/UNCA-white-notext.png')}}">
                            <p style='text-align:center'>UNCA PRESS</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
<!-- ## END of Main Councils Section ========= -->

<!-- ## 7. Main Supports Section =========  
        <section class='main-supports'>
            <div class="row">
                <div class="col-md-8 offset-md-2 col-12">
                    <h1>
                        SUPPORTS<br>
                        &mdash;
                    </h1>
                        <div class="main-supports-wrapper">
                            <a href='#' class="main-support-card">
                                <div class="bg-sponsors">
                                    <h2>SPONSORS&emsp;<br><i class="fas fa-long-arrow-alt-right"></i></h2>
                                </div>
                            </a>
                            <a href='#' class="main-support-card bg-medpar">
                                <div class="bg-medpar">
                                    <h2>MEDIA PARTNERS&emsp;<br><i class="fas fa-long-arrow-alt-right"></i></h2>
                                </div>
                            </a>
                            <a href='#' class="main-support-card bg-others">
                                <div class="bg-others">
                                    <h2>OTHER MUN&emsp;<br><i class="fas fa-long-arrow-alt-right"></i></h2>
                                </div>
                            </a>
                        </div>
                    </h1>
                </div>
            </div>
        </section>
     ## END of Main Supports Section ========= -->

<!-- ## 8. Footer Navigation ========= -->
        @include('components.footer-main')
<!-- ## END of Footer Navigation ========= -->

    </main>

@endsection

@section('script')
<script src="{{URL::asset('js/nav-scroll.js')}}"></script>
<script src="{{URL::asset('js/navigation.js')}}"></script>
@endsection
