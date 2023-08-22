<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--SEO DETAIL BEGINS-->
    <title>{{ isset($meta_title) ? $meta_title : 'SEC Nepal' }}</title>
    <meta name="description" content="{{ isset($meta_description) ? $meta_description : '' }}">
    <meta property="og:site_name" content="{{ $siteSetting->title }}" />
    <meta property="og:image" content="{{ isset($fb_image) ? $fb_image : '' }}" />
    <meta property="og:image:secure_url" content="{{ isset($fb_image) ? $fb_image : '' }}" />
    <meta property="og:title" content="{{ isset($fb_title) ? $fb_title : '' }}" />
    <meta property="og:description" content="{{ isset($fb_description) ? $fb_description : '' }}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="{{ url('') }}" />
    <meta name="twitter:description" content="{{ isset($twitter_description) ? $twitter_description : '' }}" />
    <meta property="twitter:image" content="{{ isset($twitter_image) ? $twitter_image : '' }}" />
    <meta property="twitter:title" content="{{ isset($twitter_title) ? $twitter_title : '' }}" />
    <!--SEO DETAIL ENDS-->

    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('Frontend/assets/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('Frontend/assets/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('Frontend/assets/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('Frontend/assets/images/favicons/site.webmanifest') }}" />

    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Frontend/assets/vendors/fontawesome/css/all.min.css') }}">
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- jquery-ui css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Frontend/assets/vendors/jquery-ui/jquery-ui.min.css') }}">
    {{-- Css --}}
    <link rel="stylesheet" href="{{ asset('Frontend/assets/custom.css') }}">

<body>
    {{-- .......... Header ........... --}}
    <section>
        <div class="header-cont custom-cont">
            <img class="logo-img" src="{{ $siteSetting ? $siteSetting->primary_logo : '/' }}" alt="LOGO">
            <ul>
                <li>Home</li>
                <li>About</li>
                <li>Blog</li>
                <li>Vacancy</li>
            </ul>
            <div>
                Contact Us <i class="fas fa-arrow-right"></i>
            </div>
            <div class="burger-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </section>
    {{-- .......... Header ........... --}}

    @yield('body')

    {{-- --------- Footer ------------ --}}
    <section>
        <div class="footer-cont custom-cont">
            <div>
                <div class="logo-cont">
                    <img class="logo-img" src="{{ $siteSetting ? $siteSetting->primary_logo : '/' }}" alt="">
                </div>
                <p>Uplift is a cheerful, no-nonsense Webflow Template for fast-growing businesses and startups.</p>
            </div>
            <div class="foot-menu">
                <div>
                    <ul>
                        <li><b>Home</b></li>
                        <li>Home</li>
                        <li>Home</li>
                        <li>Home</li>
                        <li>Home</li>
                    </ul>
                </div>

                <div>

                    <ul>
                        <li><b>Home</b></li>
                        <li>Home</li>
                        <li>Home</li>
                        <li>Home</li>
                        <li>Home</li>
                    </ul>
                </div>

                <div>

                    <ul>
                        <li><b>Home</b></li>
                        <li>Home</li>
                        <li>Home</li>
                        <li>Home</li>
                        <li>Home</li>
                    </ul>
                </div>
                
            </div>
        </div>
    </section>
    {{-- ----------------------------- --}}

    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!--js-->
    <script src="{{ asset('Frontend/assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/additional/jquery.lazy.min.js') }}" defer></script>
    <!--unknown purpose-->
    <script src="{{ asset('Frontend/assets/vendors/jquery-appear/jquery.appear.min.js') }}" defer></script>

    @yield('ajax-script')


</body>

</html>
