<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="panel/assets/images/favicon.png" >
        <!--Page title-->
        <title>Log in</title>
        <!--bootstrap-->
        <link rel="stylesheet" href="{{asset('public/panel/assets/css/bootstrap.min.css')}}">
        <!--font awesome-->
        <link rel="stylesheet" href="{{asset('public/panel/assets/css/all.css')}}">
        <!-- metis menu -->
        <link rel="stylesheet" href="{{asset('public/panel/assets/plugins/metismenu-3.0.4/assets/css/metisMenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/panel/assets/plugins/metismenu-3.0.4/assets/css/mm-vertical-hover.css')}}">
        <!-- chart -->
   
        <!-- <link rel="stylesheet" href="assets/plugins/chartjs-bar-chart/chart.css"> -->
        <!--Custom CSS-->
        <link rel="stylesheet" href="{{ asset('public/panel/assets/css/style.css')}}
        ">
               <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css"> 


      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



  <!-- Animate.css -->
  <link rel="stylesheet" href="{{asset('public/panel/css/animate.css')}}">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="{{asset('public/panel/css/icomoon.css')}}">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="{{asset('public/panel/css/bootstrap.css')}}">

  <!-- Flexslider  -->
  <link rel="stylesheet" href="{{asset('public/panel/css/flexslider.css')}}">

  <!-- Theme style  -->
  <link rel="stylesheet" href="{{asset('public/panel/css/style.css')}}">

  <!-- Modernizr JS -->
  <script src="{{asset('public/panel/js/modernizr-2.6.2.min.js')}}"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->


@stack('css')





    </head>
    <body id="page-top">
        <!-- preloader -->
        <div class="preloader">
            <img src="{{asset('public/panel/assets/images/preloader.gif')}}" alt="">
        </div>
        <!-- wrapper -->
       
         @guest
  


         @php
         $category = DB::table('categories')->get();
      @endphp


<style>

    
  .dropdown-submenu {
      position: relative;
      
  }
  
  .dropdown-submenu>.dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: -6px;
      margin-left: -1px;
      -webkit-border-radius: 0 6px 6px 6px;
      -moz-border-radius: 0 6px 6px;
      border-radius: 0 6px 6px 6px;
  }
  
  .dropdown-submenu:hover>.dropdown-menu {
      display: block;
      
  }
  
  .dropdown-submenu>a:after {
      display: block;
      content: " ";
      float: right;
      width: 0;
      height: 0;
      border-color: transparent;
      border-style: solid;
      border-width: 5px 0 5px 5px;
      border-left-color: #ccc;
      margin-top: 5px;
      margin-right: -10px;
  }
  
  .dropdown-submenu:hover>a:after {
      border-left-color:black;

  }
  
  .dropdown-submenu.pull-left {
      float: none;
  }
  
  .dropdown-submenu.pull-left>.dropdown-menu {
      left: -100%;
      margin-left: 10px;
      -webkit-border-radius: 6px 0 6px 6px;
      -moz-border-radius: 6px 0 6px 6px;
      border-radius: 6px 0 6px 6px;
  }
  </style>
   
         <nav class="fh5co-nav" role="navigation">
          <!-- <div class="top-menu"> -->
            <div class="container">
              <div class="row">
                <div class="col-xs-12 text-center logo-wrap">
                  <div id="fh5co-logo"><a href="index.html">Jannath's FoodCart<span></span></a></div>
                </div>
                <div class="col-xs-12 text-center menu-1 menu-wrap">
                  <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="menu.html">Menu</a></li>
                    <li class="has-dropdown">

                      <a href="gallery.html">Food Categories</a>
          
                      <ul class="dropdown">
                         @foreach($category as $cat)
                        <li><a href="#">{{$cat->category_name}}</a>

                          

                        </li>
                       @endforeach
                      </ul>
                    </li>


                    <li><a href="about.html">About</a></li>
                    <li><a href="{{ route('login') }}">Log in</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>

                    <li><a href="contact.html">Contact</a></li>

                   <li>
                   
      </li>
                    
                  </ul>

                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      CategoriesWithSubcategory
                    </button>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" style="background-color:red;">
                        @foreach($category as $cat)
                        <li class="dropdown-submenu">
                          <a  class="dropdown-item" tabindex="-1" href="#">{{ $cat->category_name }}</a>
                          @php
                          $subcategory = DB::table('subcategories')->where('category_id',$cat->id)->get();
                            @endphp
                        
                          <ul class="dropdown-menu" style="margin-left:150px; background-color:red;color:black;">
                            @foreach($subcategory as $row)
                            <li class="dropdown-item"><a tabindex="-1" href="#">{{ $row->subcategory_name }}</a></li>
                            @endforeach
                        </ul>
                        </li>
                        @endforeach
                      </ul>
                </div>
                
                </div>
              </div>
              
            </div>
          <!-- </div> -->

        </nav>
      <br><br><br><br><br><br><br>
         @else
           
         <li>

            <a href="{{ route('user.logout') }}"><span><i class="fas fa-unlock-alt"></i></span> Logout</a>

         </li>


         


  



@endguest


    @yield('content')


        


      <!-- jQuery -->
<script src="{{asset('public/panel/js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('public/panel/js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('public/panel/js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('public/panel/js/jquery.waypoints.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('public/panel/js/jquery.stellar.min.js')}}"></script>
<!-- Flexslider -->
<script src="{{asset('public/panel/js/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('public/panel/js/zoomerang.js')}}"></script>
<!-- Main -->
<script src="{{asset('public/panel/js/main.js')}}"></script>

<script>
    Zoomerang
  .config({
    maxHeight: 600,
    maxWidth: 900,
    bgColor: '#000',
    bgOpacity: .85
  })
  .listen('[data-trigger="zoomerang"]')
</script>


        <!-- jquery -->
        {{-- <script src="{{asset('public/panel/assets/js/jquery.min.js')}}"></script> --}}
        <!-- popper Min Js -->
        <script src="{{asset('public/panel/assets/js/popper.min.js')}}"></script>
        <!-- Bootstrap Min Js -->
        <script src="{{asset('public/panel/assets/js/bootstrap.min.js')}}"></script>
        <!-- Fontawesome-->
        <script src="{{asset('public/panel/assets/js/all.min.js')}}"></script>
        <!-- metis menu -->
        <script src="{{asset('public/panel/assets/plugins/metismenu-3.0.4/assets/js/metismenu.js')}}"></script>
        <script src="{{asset('public/panel/assets/plugins/metismenu-3.0.4/assets/js/mm-vertical-hover.js')}}"></script>
        <!-- nice scroll bar -->
        <script src="{{asset('public/panel/assets/plugins/scrollbar/jquery.nicescroll.min.js')}}"></script>
        <script src="{{asset('public/panel/assets/plugins/scrollbar/scroll.active.js')}}"></script>
        <!-- counter -->
        <script src="{{asset('public/panel/assets/plugins/counter/js/counter.js')}}"></script>
        <!-- chart -->
   <script src="{{ asset('public/panel/assets/plugins/chartjs-bar-chart/Chart.min.js')}}"></script>
        <script src="{{asset('public/panel/assets/plugins/chartjs-bar-chart/chart.js')}}"></script>
        <!-- pie chart -->
        <script src="{{asset('public/panel/assets/plugins/pie_chart/chart.loader.js')}}"></script>
        <script src="{{asset('public/panel/assets/plugins/pie_chart/pie.active.js')}}"></script>
 
 
        <!-- Main js -->
        <script src="{{asset('public/panel/assets/js/main.js')}}"></script>

    
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



 <script>
          @if(Session::has('message'))
          var type = "{{ Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
              toastr.info(" {{ Session::get('message')}}");
              break;

              case 'success':
              toastr.success(" {{ Session::get('message')}}");
              break;

              case 'warning':
              toastr.warning(" {{ Session::get('message')}}");
              break;

              case 'error':
              toastr.error(" {{ Session::get('message')}}");
              break;
          }
          
          @endif


    </script>
     





     
     @stack('js')


    </body>
</html>