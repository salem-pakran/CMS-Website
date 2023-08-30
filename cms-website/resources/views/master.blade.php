<!DOCTYPE html>
<html lang="en"> <!--<html lang="en" dir="rtl">-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Vision HTML CSS Template</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet" /> <!-- https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans -->
    <link href="{{asset('/theme/css/all.min.css')}}" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="{{asset('/theme/slick/slick.css')}}" rel="stylesheet" /> <!-- https://kenwheeler.github.io/slick/ -->
    <link href="{{asset('/theme/slick/slick-theme.css')}}" rel="stylesheet" />
    <link href="{{asset('/theme/css/bootstrap.min.css')}}" rel="stylesheet" /> <!-- https://getbootstrap.com -->
    <link href="{{asset('/theme/css/templatemo-new-vision.css')}}" rel="stylesheet" />

    <link href="{{asset('/Web_Learners (1)/dist/style.css')}}" rel="stylesheet" /> <!-- footer/ -->

<!--تبع assets-->


    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/style.css')}}">    <!--تبع النتجات-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/color-01.css')}}"><!--تبع النتجات-->

<!--
New Vision Template>
https://templatemo.com/tm-542-new-vision
-->
<style type="text/css">
    .f-active{
  color: #000;
    border-bottom: 5px solid #09F;
    border-left: none;
}
</style>
@stack('style')

</head>
<body>

    <!-- Page Header -->
    <div class="container-fluid"  style="background:rgb(16, 17, 17)">
        @include('header')
        @yield('content')
    </div>

    <script src="{{asset('/theme/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('/theme/slick/slick.min.js')}}"></script>
    <script src="{{asset('/theme/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/theme/js/templatemo-script.js')}}"></script>
    <script>
        jQuery(document).ready(function(){
            var pgurl = window.location.href;

            jQuery(".navbar-collapse ul li a").each(function(){
                if(jQuery(this).attr("href") == pgurl){
                    jQuery(this).addClass("f-active");
                }
            });

        });


    </script>

    <script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
    <script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script><script  src="./script.js"></script>
    <script src="{{asset('/Web_Learners (1)/dist/script.js')}}"></script>


    @stack('footer-scripts')
</body>
</html>
