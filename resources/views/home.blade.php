<html>

<head>
    <style>
        .panel_login {
            margin: auto;
            margin-top: 28px;
            width: 50%;
            height: 40%;
            background-color: white;
            border-radius: 18px;
        }
        .button_login {
            margin: auto;
            margin-top: 88px;
            width: 95%;
            height: 20%;
            background-color: white;
            border-width: 0px;
            border-radius: 18px;
            margin-left: 13px;
            border-color: white;
            color: white;
            background-image: linear-gradient(to right, #8B0000 8%, #FF8C00 68%, #FFD700 100%);

            margin-left:auto;
            margin-right:auto;
            display:block;
        }
    </style>
</head>

<body style="background-image: linear-gradient(to top, #F5FFFA 8%, #9932CC 68%, #8A2BE2 100%);">



    <div class="panel_login">

        <form class="form-horizontal" method="POST" action="{{ route('home.store') }}">
            @csrf  
            @method('POST')


                        <div>
                            
                            <div class="col-md-6" style="width: 100%; margin-top: 28px;">
                                <input placeholder="email" id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                            </div>
                        </div>

                        <div>
                 
                            <div class="col-md-6" style="width: 100%; margin-top: 10px;">
                                <input placeholder="password" id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>

                        

                        <div style="padding-top: 68px;">
                                <button type="submit" class="button_login">
                                    Login
                                </button>
                        </div>

        </form>
        
    </div>

@endif

@if( session('auth') != "")
     <div class=" font-weight-bold mb-2 mt-2 text-primary text-center text-uppercase mb-1">
        {{ session('auth')->token }}

        <form class="form-horizontal" method="POST" action="{{ route('home.store') }}">
            @csrf  
            @method('POST')

            <button type="submit" class="button_login">
                Logout
            </button>
        </form>
     </div>
@endif







</body>

</html