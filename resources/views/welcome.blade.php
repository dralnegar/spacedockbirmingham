<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Spacedock Birmingham</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Fonts -->
        <link href="/lcars/css/lcars.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>

            html, body { background: black }
            p, h1, h2, h3 
            {
                margin-top: 1em;
            }
            /*
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            */

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #FFFFFF;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .lcarsElementDiv 
            {   
                border-left: .75rem solid #FC6;
                border-right: .75rem solid #FC6;
                padding:2%;
        
            }
            
            a:link, a:visited { color: white; }
            a:hover, a:active {  color: hotpink; cursor: pointer; }

            .centered
            {
                text-align:center;
            }
}

        </style>
    </head>
    <body>
        <div class="lcars-app-container">
            
            <!-- HEADER ==================================================== -->

            <div id="header" class="lcars-row header">

                <!-- ELBOW -->
                <div class="lcars-elbow left-bottom lcars-tan-bg"></div>

                <!-- BAR WITH TITLE -->
                <div class="lcars-bar horizontal">
                    <div class="lcars-title right" style="color:white">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div> <!-- .top-right links -->
                    @endif    
                    </div> <!-- .lcars-title right --> 
                </div> <!-- lcars-bar horizontal -->

                <!-- ROUNDED EDGE DECORATED -->
                <div class="lcars-bar horizontal right-end decorated"></div>
            </div> <!-- .header -->
      
            <!-- SIDE MENU ================================================= -->
            <div id="left-menu" class="lcars-column start-space lcars-u-1">
                <!-- FILLER -->
                <div class="lcars-bar lcars-u-1"></div>
            </div> <!-- .left-menu -->

            <div id="footer" class="lcars-row ">
                <!-- ELBOW -->
                <div class="lcars-elbow left-top lcars-tan-bg"></div>
                <!-- BAR -->
                <div class="lcars-bar horizontal both-divider bottom"></div>
                <!-- ROUNDED EDGE -->
                <div class="lcars-bar horizontal right-end left-divider bottom"></div>
            </div>

            <!-- MAIN CONTAINER -->
		<div id="container">
			<!-- COLUMN LAYOUT -->
			<div class="lcars-column lcars-u-12">
                <div class="lcars-row">
                    <div class="lcars-u-3">
                        <div class="lcars-bracket top hollow"></div>
                        <div class="lcarsElementDiv">
                            <a href="https://www.facebook.com/spacedockbirmingham" target="blank">
                                <img src="/img/spacedock_birmingham_logo.jpg" alt="Spacedock Birmingham" style="width:100%"/>        
                            </a>
                        </div>
                    
                        <div class="lcars-bracket bottom hollow centered">
                            <a href="https://www.facebook.com/spacedockbirmingham" target="blank">Spacedock Birmingham</a>
                        </div>
                    </div>

                    <div class="lcars-u-3">
                        <div class="lcars-bracket top hollow"></div>
                        <div class="lcarsElementDiv">
                            <a href="https://www.facebook.com/svenof9" target="blank">
                                <img src="/img/sven_in_uniform.jpg" alt="Sven in Uniform" style="width:100%"/>        
                            </a>
                        </div>
                    
                        <div class="lcars-bracket bottom hollow centered"><a href="https://www.facebook.com/svenof9" target="blank">Sven In Uniform</a></div>
                    </div>
                    
                    <div class="lcars-u-3">
                        <div class="lcars-bracket top hollow"></div>
                        <div class="lcarsElementDiv">
                            <a href="https://www.facebook.com/david.zabi" target="blank">    
                                <img src="/img/david_in_uniform.jpg" alt="David in Uniform" style="width:100%"/>        
                            </a>
                        </div>
                        
                        <div class="lcars-bracket bottom hollow centered"><a href="https://www.facebook.com/david.zabi" target="blank">David In Uniform</a></div>
                    </div>
                </div>  <!-- .lcars-row -->
            </div> <!-- #content -->
        </div> <!-- .lcars--app-container -->
    </body>
</html>
