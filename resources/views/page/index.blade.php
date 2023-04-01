<html>

<head>

    <title>TS TS</title>
    <link rel="icon" href="{{url('/antv.png')}}" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <style type="text/css">
        .body{
          background-repeat: no-repeat;
          background-size: cover;
        }

        .form {
          position: relative;
          z-index: 1;
          background: white;
          max-width: 360px;
          margin: 0 auto 100px;
          padding: 45px;
          text-align: center;
          border-radius: 10px;
          box-shadow: 14px 15px 10px 10px rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
          
        }
        .form input {
          font-family: FontAwesome, "Roboto", sans-serif;
          outline: 0;
          background: #f2f2f2;
          width: 100%;
          border: 0;
          margin: 0 0 15px;
          padding: 15px;
          box-sizing: border-box;
          font-size: 14px;
          border-radius:10px;
          
        }
        .form button {
          font-family: "Titillium Web", sans-serif;
          font-size: 14px;
          font-weight: bold;
          letter-spacing: .1em;
          outline: 0;
          background: #17a589;
          width: 100%;
          border: 0;
          border-radius:30px;
          margin: 0px 0px 8px;
          padding: 15px;
          color: #FFFFFF;
          -webkit-transition: all 0.3 ease;
          transition: all 0.3 ease;
          cursor: pointer;
          transition: all 0.2s;

        }
        .form button:hover,.form button:focus {
          background: #148f77;
           box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
          transform: translateY(-8px);
        }
        .form button:active {
          transform: translateY(2px);
          box-shadow: 0 2.5px 5px rgba(94, 72, 72, 0.2);
        }

        .login-page {
          width: 360px;
          padding: 8% 0 0;
          margin: auto;
        }
    </style>





























    <script type="text/javascript">
        var button = document.getElementById('slide');
        button.onclick = function () {
            var container = document.getElementById('container');
            sideScroll(container,'right',25,100,10);
        };

        var back = document.getElementById('slideBack');
        back.onclick = function () {
            var container = document.getElementById('container');
            sideScroll(container,'left',25,100,10);
        };

        function sideScroll(element,direction,speed,distance,step){
            scrollAmount = 0;
            var slideTimer = setInterval(function(){
                if(direction == 'left'){
                    element.scrollLeft -= step;
                } else {
                    element.scrollLeft += step;
                }
                scrollAmount += step;
                if(scrollAmount >= distance){
                    window.clearInterval(slideTimer);
                }
            }, speed);
        }
    </script>
    <style>

        .textinp {
            border-radius: 8px;
            border-color: #DCDCDC;
            width: 90%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        .textinp:focus {
            border-radius: 8px;
            width: 90%;
            padding: 12px 20px;
            margin: 8px 0;
            box-shadow: 0 0 20px #2654f3;
        }


        /* width */
        ::-webkit-scrollbar {
          width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
          background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
          background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
          background: #555;
        }


        .earth {
          position: absolute;
          margin-left: 60%;
          margin-top: 5%;
          top: 0;
          bottom: 0;
          left: 0;
          right: 0;
          width: 500px;
          height: 500px;
          background-image: url('/peta.png');
          border-radius: 50%;
          background-size: cover;
          box-shadow: -10px -10px 25px 1px #000 inset, 0 0 20px 2px #1e29d9;
          animation: spin 30s linear alternate infinite;
        }

        .earth_beranda {
          position: absolute;
          
          top: 0;
          bottom: 0;
          left: 0;
          right: 0;
          width: 230px;
          height: 230px;
          background-image: url('/peta.png');
          border-radius: 50%;
          background-size: cover;
          box-shadow: -20px -20px 50px 2px #000 inset, 0 0 20px 2px transparent;
          animation: spin 30s linear alternate infinite;

          display: block;
          margin-left: 1%;
          margin-right: auto;
          margin-top: auto;
          margin-bottom: 3.8%;


        }

        @keyframes spin {
            100%{background-position: 100%;}
        }

        .panel_login_image {
            margin-top: 3%;
        }


        .panel_login {
            margin: auto;
            margin-top: 3%;
            width: 35%;
            height: 246px;
            border-radius: 0px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 13px;
            background-color: white;
        }
        





        .panel_slide {
            margin: auto;
            margin-top: 38px;
            width: 62%;
            height: 40%;
            border-radius: 88px;
        }
        .panel_logo {
            margin: auto;
            margin-top: 38px;
            width: 62%;
            height: 20%;
            padding: 10px;
            border-radius: 8px;
        }
        .container_login {
            margin: auto;
            width: 82%;
            height: 8%;
            border-radius: 8px;
        }


        .button-menu {
            height: 8%;
            margin-left: 8px;
            border-color: transparent;
            background-color: transparent;
            cursor: pointer;
        }



        .button_login {
            margin: auto;
            margin-top: 18px;
            width: 90%;
            height: 23%;
            background-color: white;
            border-width: 0px;
            border-radius: 8px;
            border-color: white;
            color: white;
            background-image: linear-gradient(to right, #4054b4 8%, #4054b4 38%, #4054b4 100%);

            margin-left: auto;
            margin-right: auto;

            text-transform: uppercase;
            cursor: pointer; 
        }
        .button_login:active {
            margin: auto;
            margin-top: 18px;
            width: 90%;
            height: 20%;
            background-color: white;
            border-width: 0px;
            border-radius: 8px;
            border-color: white;
            color: white;
            background-image: linear-gradient(to right, #1e29d9 8%, #2654f3 38%, #1e29d9 100%);

            margin-left: auto;
            margin-right: auto;

            text-transform: uppercase;
            cursor: pointer; 
        }

        .button_sendemail {
            margin: auto;
            margin-top: 18px;
            width: 90%;
            height: 8%;
            background-color: white;
            border-width: 0px;
            border-radius: 8px;
            border-color: white;
            color: white;
            background-image: linear-gradient(to right, #bc74f5 8%, #6440f6 38%, #1e29d9 100%);

            margin-left: auto;
            margin-right: auto;

            text-transform: uppercase;
            cursor: pointer; 
        }
        .button_sendemail:active {
            margin: auto;
            margin-top: 18px;
            width: 90%;
            height: 8%;
            background-color: white;
            border-width: 0px;
            border-radius: 8px;
            border-color: white;
            color: white;
            background-image: linear-gradient(to right, #1e29d9 8%, #2654f3 38%, #1e29d9 100%);

            margin-left: auto;
            margin-right: auto;

            text-transform: uppercase;
            cursor: pointer; 
        }


        .button_sendemaildua {
            margin: auto;
            margin-top: 18px;
            width: 90%;
            height: 8%;
            background-color: transparent;
            border-width: 0px;
            border-radius: 8px;
            border-color: white;
            color: white;

            margin-left: auto;
            margin-right: auto;

            text-transform: uppercase;
            cursor: pointer; 
        }
        .button_sendemaildua:active {
            margin: auto;
            margin-top: 18px;
            width: 90%;
            height: 8%;
            background-color: transparent;
            border-width: 0px;
            border-radius: 8px;
            border-color: white;
            color: white;

            margin-left: auto;
            margin-right: auto;

            text-transform: uppercase;
            cursor: pointer; 
        }

        .button_logout {
            margin: auto;
            margin-top: 9%;
            width: 68%;
            height: 60%;
            background-color: transparent;
            border-width: 0px;
            border-radius: 8px;
/*            border-color: white;*/
            color: white;
/*            background-image: linear-gradient(to right, #c40b2b 8%, #cc2732 38%, #c40b2b 100%);*/
            border-bottom-right-radius: 65px;

            text-transform: uppercase;
            cursor: pointer; 
        }
        .button_logout:active {
            margin: auto;
            margin-top: 9%;
            width: 68%;
            height: 60%;
            background-color: white;
            border-width: 0px;
            border-radius: 8px;
/*            margin-left: 93%;*/
            border-color: white;
            color: white;
            background-image: linear-gradient(to right, #4054c9 8%, #4054c9 38%, #4054c9 100%);
            border-bottom-right-radius: 65px;

            text-transform: uppercase;
            cursor: pointer; 
        }
        .button_konfirmasi_blast {
            margin: auto;
            margin-top: 0px;
            width: 50%;
            height: 100%;
            background-color: white;
            border-width: 0px;
            border-radius: 118px;
            margin-left: 8%;
            border-color: white;
            color: white;
            background-image: linear-gradient(to right, #4682B4 8%, #6A5ACD 38%, #800080 100%);

            text-transform: uppercase;
            cursor: pointer; 
        }
        .button_konfirmasi_blast:active {
            margin: auto;
            margin-top: 0px;
            width: 50%;
            height: 100%;
            background-color: white;
            border-width: 0px;
            border-radius: 118px;
            margin-left: 8%;
            border-color: white;
            color: white;
            background-image: linear-gradient(to right, #800080 8%, #4682B4 38%, #4682B4 100%);

            text-transform: uppercase;
            cursor: pointer; 
        }
        


        .button_menu {
            margin: auto;
            margin-top: 8px;
            width: 90%;
            height: 6%;
            border-width: 0px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-color: white;
            color: black;
            text-align: left;
            border-bottom-right-radius: 18px;

            cursor: pointer; 
        }
        .button_menu:active {
            margin: auto;
            margin-top: 8px;
            width: 90%;
            height: 6%;
            border-width: 0px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-color: white;
            color: black;
            background-image: linear-gradient(to right, transparent 100%);
            text-align: left;
            border-bottom-right-radius: 18px;

            cursor: pointer; 
        }
        .button_menu_ok {
            margin: auto;
            margin-top: 8px;
            width: 90%;
            height: 6%;
            background-color: white;
            border-width: 0px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-color: white;
            color: black;
            background-image: linear-gradient(to right, transparent 8%, transparent 38%, #edc0c6 100%);
            text-align: left;
            border-bottom-right-radius: 18px;
            text-shadow: 1px 1px 0px #fff;
        }
        .button_menu_hide {
            background-color: transparent;
            border-color: transparent;
            height: 80%;
            cursor: pointer; 
        }
        .button_menu_hide:active {
/*            background-color: transparent;*/
            border-color: transparent;
            height: 80%;
            background-image: linear-gradient(to right, #4054c9 8%, #4054c9 38%, #4054c9 100%);
            cursor: pointer; 
        }















        .button_hide {
            margin: auto;
            margin-top: 8px;
            width: 90%;
            height: 6%;
            border-width: 0px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-color: transparent;
            background-color: transparent;
            color: black;
            text-align: left;
            border-bottom-right-radius: 18px;

            cursor: pointer; 
        }
        .button_hide:active {
            margin: auto;
            margin-top: 8px;
            width: 90%;
            height: 6%;
            border-width: 0px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-color: white;
            color: black;
            text-align: left;
            border-bottom-right-radius: 18px;

            cursor: pointer; 
        }
        .button_hide_ok {
            margin: auto;
            margin-top: 8px;
            width: 90%;
            height: 6%;
            background-color: transparent;
            border-width: 0px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-color: transparent;
            color: black;
            text-align: left;
            border-bottom-right-radius: 18px;
            text-shadow: 1px 1px 0px #fff;
        }





        .parent {
            display: flex;
            flex-direction:row;
        }
        .parent_menu {
            display: flex;
            flex-direction:row;
            width: 100%;
            height: 83%;
        }




        .center {
          display: block;
          margin-left: auto;
          margin-right: auto;
        }


        .dashboard {
            padding-top: 1%;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .logologin {
            margin-left: 18%;
            margin-top: 20%;
        }

    </style>













    <style type="text/css">
        *{
          margin: 0;
          padding: 0;
          list-style: none;
          text-decoration: none;
          box-sizing: border-box;
          font-family: "Roboto", sans-serif;
        }

        /*body{
          background: #fff;
        }*/

        .wrapper .header{
          z-index: 1;
          background: #22242A;
          position: fixed;
          width: calc(100% - 0%);
          height: 70px;
          display: flex;
          top: 0;
        }

        .wrapper .header .header-menu{
          width: calc(100% - 0%);
          height: 100%;
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 0 20px;
        }

        .wrapper .header .header-menu .title{
          color: #fff;
          font-size: 25px;
          text-transform: uppercase;
          font-weight: 900;
        }

        .wrapper .header .header-menu .title span{
          color: #4CCEE8;
        }

        .wrapper .header .header-menu .sidebar-btn{
          color: #fff;
          position: absolute;
          margin-left: 240px;
          font-size: 22px;
          font-weight: 900;
          cursor: pointer;
          transition: 0.3s;
          transition-property: color;
        }

        .wrapper .header .header-menu .sidebar-btn:hover{
          color: #4CCEE8;
        }

        .wrapper .header .header-menu ul{
          display: flex;
        }

        .wrapper .header .header-menu ul li a{
          background: #fff;
          color: #000;
          display: block;
          margin: 0 10px;
          font-size: 18px;
          width: 34px;
          height: 34px;
          line-height: 35px;
          text-align: center;
          border-radius: 50%;
          transition: 0.3s;
          transition-property: background, color;
        }

        .wrapper .header .header-menu ul li a:hover{
          background: #4CCEE8;
          color: #fff;
        }

        .wrapper .sidebar{
          z-index: 1;
          background: #2F323A;
          position: fixed;
          top: 70px;
          width: 250px;
          height: calc(100% - 9%);
          transition: 0.3s;
          transition-property: width;
          overflow-y: auto;
        }

        .wrapper .sidebar .sidebar-menu{
          overflow: hidden;
        }

        .wrapper .sidebar .sidebar-menu .profile img{
          margin: 20px 0;
          width: 100px;
          height: 100px;
          border-radius: 50%;
        }

        .wrapper .sidebar .sidebar-menu .profile p{
          color: #bbb;
          font-weight: 700;
          margin-bottom: 10px;
        }

        .wrapper .sidebar .sidebar-menu .item{
          width: 250px;
          overflow: hidden;
        }

        .wrapper .sidebar .sidebar-menu .item .menu-btn{
          display: block;
          color: #fff;
          position: relative;
          padding: 25px 20px;
          transition: 0.3s;
          transition-property: color;
        }

        .wrapper .sidebar .sidebar-menu .item .menu-btn:hover{
          color: #4CCEE8;
        }

        .wrapper .sidebar .sidebar-menu .item .menu-btn i{
          margin-right: 20px;
        }

        .wrapper .sidebar .sidebar-menu .item .menu-btn .drop-down{
          float: right;
          font-size: 12px;
          margin-top: 3px;
        }

        .wrapper .sidebar .sidebar-menu .item .sub-menu{
          background: #3498DB;
          overflow: hidden;
          max-height: 0;
          transition: 0.3s;
          transition-property: background, max-height;
        }

        .wrapper .sidebar .sidebar-menu .item .sub-menu a{
          display: block;
          position: relative;
          color: #fff;
          white-space: nowrap;
          font-size: 15px;
          padding: 20px;
          transition: 0.3s;
          transition-property: background;
        }

        .wrapper .sidebar .sidebar-menu .item .sub-menu a:hover{
          background: #55B1F0;
        }

        .wrapper .sidebar .sidebar-menu .item .sub-menu a:not(last-child){
          border-bottom: 1px solid #8FC5E9;
        }

        .wrapper .sidebar .sidebar-menu .item .sub-menu i{
          padding-right: 20px;
          font-size: 10px;
        }

        .wrapper .sidebar .sidebar-menu .item:target .sub-menu{
          max-height: 500px;
        }

        .wrapper .main-container{
          width: (100% - 250px);
          margin-top: 70px;
          margin-left: 250px;
          padding: 15px;
          background: url(background.jpg)no-repeat;
          background-size: cover;
          height: 100vh;
          transition: 0.3s;
        }

        .wrapper.collapse .sidebar{
          width: 70px;
        }

        .wrapper.collapse .sidebar .profile img,
        .wrapper.collapse .sidebar .profile p,
        .wrapper.collapse .sidebar a span{
          display: none;
        }

        .wrapper.collapse .sidebar .sidebar-menu .item .menu-btn{
          font-size: 23px;
        }

        .wrapper.collapse .sidebar .sidebar-menu .item .sub-menu i{
          font-size: 18px;
          padding-left: 3px;
        }

        .wrapper.collapse .main-container{
          width: calc(100% - 70px);
          margin-left: 70px;
        }

        .wrapper .main-container .card{
          background: #fff;
          padding: 15px;
          margin-bottom: 10px;
          font-size: 14px;
        }
    </style>












    <style type="text/css">
        .o-page-loader {
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 1;
            transition: opacity .5s;
            background-image: linear-gradient(to left, #6c0834 8%, #740c2f 38%, #5c0a24 100%);
            z-index: 999;
        }

        .o-page-loader--content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
        }

        .o-page-loader--spinner {
            width: 140px;
            height: 140px;
            border-radius: 3px;
            background-color: rgb(255,255,255);
            margin: 20px auto;
            animation: rotate-plane 1.2s infinite ease-in-out;
            -webkit-animation: rotate-plane 1.2s infinite ease-in-out;
        }

        .o-page-loader--message {
            color: rgb(255,255,255);
            font-weight: bold;
            font-size: 18px;
            font-family: 'Arial', sans-serif;
        }

        /* --------------------------------------------------------------------------- */
        /* Animation - Loading Spinner
        /* --------------------------------------------------------------------------- */

        @-webkit-keyframes rotate-plane {
            0% {
                -webkit-transform: perspective(120px)
            }
            50% {
                -webkit-transform: perspective(120px) rotateY(180deg)
            }
            100% {
                -webkit-transform: perspective(120px) rotateY(180deg) rotateX(180deg)
            }
        }

        @keyframes rotate-plane {
            0% {
                transform: perspective(120px) rotateX(0deg) rotateY(0deg);
                -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg)
            }
            50% {
                transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
                -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg)
            }
            100% {
                transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
                -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
            }
        }
    </style>






    
    
</head>



@if( session('auth') == "")
<body style="background-image: linear-gradient(to left, #6c0834 8%, #740c2f 38%, #5c0a24 100%);overflow: visible;overflow-x: hidden;">

    <div class="o-page-loader">
        <div class="o-page-loader--content">
            <div class="o-page-loader--spinner"></div>
            <div class="o-page-loader--message">
                <!-- <span>BLAST</span> -->
            </div>
        </div>
    </div>

    <main>

            <div class="parent">
                <div class="container_login">
                    <div class="panel_login_image">
                        <center>
                            <img src="{{url('/logologo.png')}}" alt="Image" width="178" height="68"/>
                        </center>

                    </div>


                    <div class="login-page">

                        <div class="form">
                
                            <form  method="POST" action="{{action('PageController@req_login')}}">
                            {{ csrf_field() }}
                              <input type="email" name="email" placeholder="&#xf007;  Email" class="textinp"/>

                              <input type="password" name="password" id="password" placeholder="&#xf023;  password" class="textinp"/>

                              <br>
                              <br>

                              <i class="fas fa-eye" id="eye" onclick="show()"></i>  
                              <i class="fas fa-eye-slash" id="eye_close" style="display: none;" onclick="show()"></i>
                              
                              
                              <button style="margin-top: 10px;background-image: linear-gradient(to right, #4054b4 8%, #4054b4 38%, #4054b4 100%);">  LOGIN
                              </button>
                            </form>

                        </div>
                    </div>

                    <script>
                      function show(){
                      var eye = document.getElementById("eye");
                      var eye_close = document.getElementById("eye_close");
                      var pass = document.getElementById("password");

                      if(pass.type === "password"){
                        pass.type = "text";
                        eye.style.display = 'none';
                        eye_close.style.display = 'block'
                      }
                      else{
                        pass.type = "password";
                        eye.style.display = 'block';
                        eye_close.style.display = 'none'

                      }
                      }

                    </script>

                    <label style="margin-top: -38px;color: white;text-align:center;display:block;font-size: 13px;">© 2006-2023 PT. Cakrawala Andalas Televisi. Developed by IT Application - Information Technology Department.</label>
                                        

                    <!-- <div class="panel_logo">
                        <img src="{{url('/logoblast.png')}}" alt="Image" width="60" height="35"/>
                    </div> -->
                </div>
            </div>

    </main>

    <!-- Javascript -->
    <script type="application/javascript">
        (function(loader) {

          window.addEventListener('beforeunload', function(e) {
            activateLoader();
          });

          window.addEventListener('load', function(e) {
            deactivateLoader();
          });

          function activateLoader() {
            loader.style.display = 'block';
            loader.style.opacity = 1;
          }

          function deactivateLoader() {
            /**
             * ensures that the loading animation plays for at least a second to give the
             * appearance of seamless loading on pages that execute and load extremely
             * quickly (i.e., intranet pages)
             */
            setTimeout(function() {
              deactivate();
            }, 1000);

            function deactivate() {
              loader.style.opacity = 0;
              loader.addEventListener('transitionend', function() {
                loader.style.display = 'none';
              }, false);
            }
          }

        })(document.querySelector('.o-page-loader'));
    </script>

</body>
@endif

@if( session('auth') != "")
<body style="background-image: linear-gradient(to right, #fcfcfc 8%, #f4f7f9 38%, #fcfcfc 100%);overflow: visible;overflow-x: hidden;">

        <!--wrapper start-->
        <div class="wrapper">
            <!--header menu start-->
            <div class="header">
                <div class="header-menu">
                    <div class="title">
                        <center>
                            <img class="dashboard" src="{{url('/logologo.png')}}" alt="Image" width="88" height="38"/>
                        </center>
                    </div>
                    
                    <ul>
                        <li>


                            <form action="{{action('PageController@prog_logout')}}" method="POST">
                                {{ csrf_field() }}
                                <button type="submit" style="width: 30px;height: 30px;border-radius: 23px;">
                                    <i class="fas fa-power-off"></i>
                                </button>
                            </form>


                        </li>
                    </ul>
                </div>
            </div>
            <!--header menu end-->
            <!--sidebar start-->
            <div class="sidebar">
                <div class="sidebar-menu">
                    
                <form action="{{action('PageController@changemenu')}}" method="POST">
                {{ csrf_field() }}

                    <li class="item" id="profile">
                        <a href="#profile" class="menu-btn">
                            <i class="fas fa-address-card" style="font-size: 18px;"></i><span>SPONSOR <i class="fas fa-chevron-down drop-down" style="font-size: 12px;"></i></span>
                        </a>
                        <div class="sub-menu">
                            <button type="submit" name="menu" value="INPUTPLANNED" class="button-menu">
                                <i class="fas fa-address-card" style="font-size: 12px;"></i>
                                <span>INPUT PLANNED</span>
                            </button>

                            <button type="submit" name="menu" value="UPDATEPROGRESSDEAL" class="button-menu">
                                <i class="fas fa-address-card" style="font-size: 12px;"></i>
                                <span>UPDATE PROGRESS DEAL</span>
                            </button>

                            <button type="submit" name="menu" value="UPDATEPROGRESSORDER" class="button-menu">
                                <i class="fas fa-address-card" style="font-size: 12px;"></i>
                                <span>UPDATE PROGRESS ORDER</span>
                            </button>

                            
                            <a href="#" style="background-color: black;">
                                <i class="fas fa-chevron-up drop-up" style="margin-left: 90%;font-size: 12px;"></i>
                            </a>
                        </div>
                    </li>
                    
                </form>
                </div>
            </div>
            <!--sidebar end-->
            <!--main container start-->
            <div class="main-container">
                <div class="card">
                    @include('page.menu', array( 'pages' => $data['menu'] ))
                </div>
            </div>
            <!--main container end-->
        </div>
        <!--wrapper end-->

        <!-- <script type="text/javascript">
        $(document).ready(function(){
            // alert('tessssss');
            $(".sidebar-btn").click(function(){
                alert('tes');
                $(".wrapper").toggleClass("collapse");
            });
        });
        </script> -->


</body>
@endif








</html>