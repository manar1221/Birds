<!DOCTYPE html>
<html lang="en">
   <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <meta name="viewport" content="initial-scale=1, maximum-scale=1">

      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

      <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

      <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

      <link rel="stylesheet" href="{{asset('css/all.min.css')}}">

      <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">

      <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

      <link rel="icon" type="image/x-icon" href="{{asset('images/760921.png')}}">
    <title> العشة </title>

      <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">

      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
      <link rel="stylesoeet" href="{{asset('css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   @livewireStyles
 </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        @auth
                            <ul>
                                <li><a href="/">الرئيسية</a></li>
                                <li><a href="{{route('shop')}}">المتجر</a></li>
                                <li><a href="{{route('admin.product.add')}}">اضف حيوانك</a></li>
                                <li><a href="{{ROUTE('admin.categories')}}" class="link">الفئات</a></li>
                                <li><a href="{{route('admin.products')}}" class="link">حسابي</a></li>
                                <li><a href="#here">التواصل</a></li>

                                <li><a href="#here">
                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                        <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();" class="coption-btn text-decoration-none">logout</a>
                                    </form>
                                </a></li>

                            </ul>
                        @endif
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="index.html"><img src="{{asset('images/760921.png')}}"></a></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="/">الرئيسية</a>
                     <a href="{{route('shop')}}">المتجر</a>
                     <a href="addproduct.html">اضاف حيوانك</a>
                     <a href="{{ROUTE('admin.categories')}}" class="link">الفئات</a>
                     <a href="{{route('admin.products')}}" class="link">حسابي</a>
                     <a href="#here">التواصل</a>
                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="{{asset('images/toggle-icon.png')}}"></span>

                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">

                     </div>
                  </div>
                  <div class="header_box">
                     <div class="lang_box ">

                        <div class="dropdown-menu ">

                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
         <!-- header section end -->
         <!-- banner section start -->
         <div class="banner_section layout_padding pb-3 pt-0">
            <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">تسوق هنا <br>كل ما تحتاجه من طيور</h1>
                              <div class="buynow_bt"><a href="#main_slider">تسوق</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">تسوق هنا <br>جميع انواع الحيوانات</h1>
                              <div class="buynow_bt"><a href="#main_slider">تسوق</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">تسوق هنا <br>موقعك المفضل من هذا النوع</h1>
                              <div class="buynow_bt"><a href="#main_slider">تسوق</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- banner bg main end -->

      {{$slot}}

      <!-- footer section start -->
      <div class="footer_section layout_padding" id="here">
         <div class="container">
            <div class="footer_logo"><a href="/"><img src="{{asset('images/760921.png')}}"></a></div>
            <div class="input_bt">

            </div>
            <div class="footer_menu">
               <ul>
                  <li><a href="#">help links</a></li>
                  <li><a href="#">help links</a></li>
                  <li><a href="#">help links</a></li>
                  <li><a href="#">help links</a></li>
                  <li><a href="#">help links</a></li>
               </ul>
            </div>
            <div class="location_main">رقم للمساعدة : <a href="#">01121998183</a></div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2024 All Rights Reserved. Design by <a href="#">tasmem company</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('js/custom.js')}}"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }

         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
      @livewireScripts
   </body>
</html>
