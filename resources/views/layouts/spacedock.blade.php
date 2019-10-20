<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('lcars/css/lcars.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app" class="lcars-app-container">

        <!-- HEADER ==================================================== -->

        <div id="header" class="lcars-row header">

        <!-- ELBOW -->
        <div class="lcars-elbow left-bottom header-background" style="padding-bottom:10px"></div>

        <!-- BAR WITH TITLE -->
        <div class="lcars-bar horizontal">
            <div class="lcars-title right" style="color:white;size:12px">
                

                <!-- Authentication Links -->
                <!--
                @guest
                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        
                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        
                    @endif

                @else
                    Welcome  {{ Auth::user()->name }} <span class="caret"></span>                        
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
                !-->
            
            
                
            </div> <!-- .lcars-title right --> 
        </div> <!-- lcars-bar horizontal -->

        <!-- ROUNDED EDGE DECORATED -->
        <div class="lcars-bar horizontal right-end decorated"></div>
        </div> <!-- .header -->

        <!-- SIDE MENU ================================================= -->
        <div id="left-menu" class="lcars-column start-space lcars-u-1">
            <!-- FILLER -->
            <div class="lcars-u-1">
        
                <div class="lcars-bar menu-item menu-logo lcars-text"  onclick="window.location ='/home'">&nbsp;</div>
                
                <div class="lcars-bar menu-item lcars-text" onclick="window.location ='/facebook'">
                SPACKDOCK<br/>
                BIRMINGHAM<br/>
                ON FACEBOOK
                </div>
                   
                <div class="lcars-bar menu-item lcars-text" onclick="window.location ='/messageBoard'">
                SPACEDOCK<br/>
                BIRMINGHAM<br/>
                MESSAGE BOARD
                </div>
                
                <div class="lcars-bar menu-item lcars-text" onclick="window.location ='/zines'">
                'ZINE PDFS'   
                </div>
               
                <div class="lcars-bar menu-item lcars-text" onclick="window.location ='/promenade'">
                PROMENADE  
                </div>
             
                <div class="lcars-bar menu-item lcars-text" onclick="window.location ='/events'">
                EVENTS  
                </div>
                
                <div class="lcars-bar menu-item lcars-text" onclick="window.location ='/starfleet'">
                JOIN<br/>
                STARFLEET<br/>
                INTERNATIONAL
                </div>
              
                <div class="lcars-bar menu-item lcars-text" onclick="window.location ='/other'">
                OTHER<br/>
                LINKS
                </div>
                
            </div>
        </div> <!-- .left-menu -->

        <div id="footer" class="lcars-row ">
        <!-- ELBOW -->
        <div class="lcars-elbow left-top lcars-tan-bg"></div>
        <!-- BAR -->
        <div class="lcars-bar horizontal both-divider bottom"></div>
        <!-- ROUNDED EDGE -->
        <div class="lcars-bar horizontal right-end left-divider bottom"></div>
        </div>    
    
    

        <main id="container">
            @yield('content')
        </main> <!-- #content -->
    </div> <!-- .lcars--app-container -->
</body>
</html>
