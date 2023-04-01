<html>


<head>
	
</head>



<body style="background-image: linear-gradient(to right, #B22222 8%, #DC143C 38%, #B22222 100%);">
<?php 

        $value = session('auth');
        if(gettype($value) == 'object')
        {
            $access_token = session('auth')->token;
            $string = base64_decode($access_token);
            $convert1 = substr($string,27);
            $variable = substr($convert1, 0, strpos($convert1, "}"));
            $convert_variable = $variable . "}";
            $my_array_data = json_decode($convert_variable, TRUE);
        }
        if(gettype($value) == 'array')
        {
            $access_token = $value['token'];
            $string = base64_decode($access_token);
            $convert1 = substr($string,27);
            $variable = substr($convert1, 0, strpos($convert1, "}"));
            $convert_variable = $variable . "}";
            $my_array_data = json_decode($convert_variable, TRUE);
        }


        
        

?>




@if($pages == "INPUTPLANNED")
    <h3>INPUT PLANNED</h3>
    <br>
    <br>
    @include('page.INPUTPLANNED')
@endif
@if($pages == "UPDATEPROGRESSDEAL")
    <h3>UPDATE PROGRESS DEAL</h3>
@endif
@if($pages == "UPDATEPROGRESSORDER")
    <h3>UPDATE PROGRESS ORDER</h3>
@endif





















</body>
</html>