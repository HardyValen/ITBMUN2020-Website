<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- END of Bootstrap CDN -->

    <!-- FontAwesome CDN -->
    <script src="https://kit.fontawesome.com/9ef1e16e2c.js"></script>
    <!-- END of FontAwesome CDN -->

    <!-- Local CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/base.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    <!-- END of Local CSS -->
</head>

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

<body>
<!-- ## 1. Sidebar Navigation ========= -->
    <section class='navigation-sidebar'>
        <div class="navigation-sidebar-header">
            <ul>
                <li>
                    <h1>Navigation</h1>
                </li>
                <li>
                    <i class="fas fa-times fa-2x" onclick="closeNav()"></i>
                </li>
            </ul>
        </div>
        <div class="navigation-sidebar-body">
            <div class="row">
                <div class="col-10 col-sm-8 col-md-6 offset-1 offset-sm-2 offset-md-3">
                    <div class="row">
                        <a href="#" class="navigation-link col-4">
                            <object data='{{URL::asset("assets/navigationIcons/home.svg")}}' type="image/svg+xml"></object>
                            <p>Home</p>
                        </a>
                        <a href="#" class="navigation-link col-4">
                            <object data='{{URL::asset("assets/navigationIcons/councils.svg")}}' type="image/svg+xml"></object>
                            <p>Councils</p>
                        </a>
                        <a href="#" class="navigation-link col-4">
                            <object data='{{URL::asset("assets/navigationIcons/about.svg")}}' type="image/svg+xml"></object>  
                            <p>About</p>
                        </a>
                    </div>
                    <div class="row">
                        <a href="#" class="navigation-link col-4">
                            <object data='{{URL::asset("assets/navigationIcons/articles.svg")}}' type="image/svg+xml"></object>
                            <p>Articles</p>
                        </a>
                        <a href="#" class="navigation-link col-4">
                            <object data='{{URL::asset("assets/navigationIcons/documents.svg")}}' type="image/svg+xml"></object>
                            <p>Documents</p>
                        </a>
                        <a href="#" class="navigation-link col-4">
                            <object data='{{URL::asset("assets/navigationIcons/press.svg")}}' type="image/svg+xml"></object>
                            <p>Press</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- ## END of Sidebar Navigation ========= -->

    <main>
<!-- ## 2. Sidebar Navigation ========= -->
        <nav class='navigation navigation-landing' id='navbar'>
            <ul>
                <li class='navigation-brand'>
                    <img class="navigation-logo" src="{{URL::asset('assets/logo/itbmun2020-logo-white.png')}}">
                </li>
                <ul class='navigation-items'>
                    <li class='navigation-item'><a id='active' href=#>Home</a></li>
                    <li class='navigation-item'><a href=#>About</a></li>
                    <li class='navigation-item'><a href=#>Councils</a></li>
                    <li class='navigation-item'><a href=#>Articles</a></li>
                    <li class='navigation-item'><a href=#>Documents</a></li>
                    <li class='navigation-item'><a href=#>Press</a></li>
                </ul>
                <li class='navigation-burger'>
                    <button class="hamburger" type="button" onclick="openNav()">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </li>
            </ul>
        </nav>
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
                                Nulla semper, libero a ultricies varius, ipsum turpis consequat nibh, bibendum maximus elit nisi blandit est... 
                            </p>
                        </div>
                        <div class='remark-card-footer'>
                            <p>
                                <big><b>Angelica Wiliana</b></big><br>
                                Secretary General ITBMUN 2020
                            </p>
                            <a class='button-white-transparent' href='#'>Read</a>
                        </div>
                    </div>
                    <!-- # END of Secgen ITBMUN 2020 -->

                    <!-- # START Remark from Secgen ITBMUN 2019 -->
                    <div class='remark-card remark-bg-itbmun2019'>
                        <div class='remark-card-summary'>
                            <p>
                                Vivamus fermentum turpis metus. Maecenas efficitur metus condimentum sapien fringilla tempus. Ut ut mollis est...
                            </p>
                        </div>
                        <div class='remark-card-footer'>
                            <p>
                                <big><b>Bjarne Stornstroup</b></big><br>
                                Secretary General ITBMUN 2019
                            </p>
                            <a class='button-white-transparent' href='#'>Read</a>
                        </div>
                    </div>
                    <!-- # END of Secgen ITBMUN 2019 -->

                    <!-- # START Head of GMUNC ITB -->
                    <div class='remark-card remark-bg-gmunc'>
                        <div class='remark-card-summary'>
                            <p>
                            Donec molestie turpis eu tempor pretium. Aliquam tortor quam, fermentum ac fermentum sed..
                            </p>
                        </div>
                        <div class='remark-card-footer'>
                            <p>
                                <big><b>Nelson Mandela</b></big><br>
                                Head of GMUNC ITB
                            </p>
                            <a class='button-white-transparent' href='#'>Read</a>
                        </div>
                    </div>
                    <!-- # END of Head of GMUNC ITB -->
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
        <footer>
            <div class="footer-content">
                <div class="footer-section">
                    <h1>Contacts<br>&mdash;</h1>
                    <div class="row contact-wrapper">
                        <a class="contact-link col-md-2 col-4" href="#">
                            <object data='{{URL::asset("assets/socmedIcons/line.svg")}}' type="image/svg+xml"></object>
                        </a>
                        <a class="contact-link col-md-2 col-4" href="#">
                            <object data='{{URL::asset("assets/socmedIcons/instagram.svg")}}' type="image/svg+xml"></object>
                        </a>
                        <a class="contact-link col-md-2 col-4" href="#">
                            <object data='{{URL::asset("assets/socmedIcons/email.svg")}}' type="image/svg+xml"></object>
                        </a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <p>
                        <big><b>Ganesha Model United Nation Conference</b></big><br>
                        Labtek V, Jl. Ganesha No. 10, Lb. Siliwangi, Coblong, Kota Bandung, Jawa Barat, 40132
                    </p>
                    <p>
                        <b><i class="far fa-copyright"></i>&ensp;ITB Model United Nation 2020</b>
                    </p>
                </div>
                
            </div>
        </footer>
<!-- ## END of Footer Navigation ========= -->

    </main>
</body>

<script src="{{URL::asset('js/nav-scroll.js')}}"></script>
<script>

function openNav() {
    document.querySelector(".navigation-sidebar").style.right = "0%";
}

function closeNav() {
    document.querySelector(".navigation-sidebar").style.right = "-100%";
}

</script>
</html>