@extends("template.main")
<!-- 
 *  CONTENTS 
 * ============================
 * ## 1. <Sidebar Navigation>
 * ## 2. <Navigation Top>
 * ## 3. Hero Section
 *       |_ <#remark> 
 * ## 4. Remark Section
 *       |_ <Secgen ITBMUN 2020>
 *       |_ <Secgen ITBMUN 2019>
 *       |_ <GMUNC>
 * ## 5. Venue Section
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

<!-- ## 4. Main Remark Section ========= -->
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

<!-- ## 5. Main Venue Section ========= -->
        <section class='main-venue'>
            <div class="row">
                <div class="col-md-8 offset-md-2 col-12">
                    <h1>
                        DATE & VENUE<br>
                        &mdash;
                    </h1>
                    <div class="main-venue-wrapper">
                        <div class="main-venue-image"></div>
                        <div class="main-venue-content">
                            <h2>
                                Month XX-XX, 2019<br>
                                Building Name, City<br>
                                <b>Indonesia</b>
                            </h2>
                            <p>
                                Nulla semper, libero a ultricies varius, ipsum turpis consequat nibh, bibendum maximus elit nisi blandit est 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- ## END of Main Venue Section ========= -->

<!-- ## 6. Main Councils Section ========= -->
        <section class="main-councils">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-12">
                    <h1>
                        COUNCILS<br>
                        &mdash;
                    </h1>
                    <div class="main-councils-wrapper">
                        <div class="row">
                            <a class="council col-4" href='#'>
                                <img src="{{URL::asset('assets/councilLogos/Edited/White/WHA-white.png')}}">
                                <p>WHA</p>
                            </a>
                            <a class="council col-4" href='#'>
                                <img src="{{URL::asset('assets/councilLogos/Edited/White/UNEP-white-notext.png')}}">
                                <p>UNEP</p>
                            </a>
                            <a class="council col-4" href='#'>
                                <img src="{{URL::asset('assets/councilLogos/Edited/White/DISEC-white-text.png')}}">
                                <p>DISEC</p>
                            </a>
                        </div>
                        <div class="row">
                            <a class="council col-4" href='#'>
                                <img src="{{URL::asset('assets/councilLogos/Edited/White/UNESCO-white.png')}}">
                                <p>UNESCO</p>
                            </a>
                            <a class="council col-4" href='#'>
                                <img src="{{URL::asset('assets/councilLogos/Edited/White/CRISIS-white.png')}}">
                                <p>CRISIS</p>
                            </a>
                            <a class="council col-4" href='#'>
                                <img src="{{URL::asset('assets/councilLogos/Edited/White/UNSC-white-text.png')}}">
                                <p>UNSC</p>
                            </a>
                        </div>
                        <div class="row">
                            <a class="council col-4 offset-4" href='#'>
                                <img src="{{URL::asset('assets/councilLogos/Edited/White/UNCA-white-notext.png')}}">
                                <p style='text-align:center'>UNCA<br>PRESS</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- ## END of Main Councils Section ========= -->

<!-- ## 7. Main Supports Section ========= -->
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
<!-- ## END of Main Supports Section ========= -->

<!-- ## 8. Footer Navigation ========= -->
        @include('components.footer-main')
<!-- ## END of Footer Navigation ========= -->

    </main>

@endsection

@section('script')
<script src="{{URL::asset('js/nav-scroll.js')}}"></script>
<script src="{{URL::asset('js/navigation.js')}}"></script>
@endsection