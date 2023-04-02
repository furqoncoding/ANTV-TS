<html>

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table{
            width: 100%;
        }
        tr{
            width: 100%;
        }
        td{
            background-color: #F8F8FF;
            text-align: center;
        }
        .search-box{
            background-color: black;
            padding: 10px;
        }
        input{
            padding: 7px 15px;
            border: 1px solid #00000022;
            border-radius: 5px;
        }
    </style>
</head>



<body style="background-image: linear-gradient(to right, #B22222 8%, #DC143C 38%, #B22222 100%);">
	<?php

	?>
	<div class="search-box">
        <input type="text" placeholder="search" onkeyup="gosearch(this)">
    </div>
    <table>
    	@foreach($data['ts_sponsor'] as $key => $ts_sponsor)
		        <tr class="table-row" data-search="<?php echo $data->no_paket.$data->planned_name.$data->planned_email.$data->agency.$data->advertiser_product; ?>">
		            <td>
		            	<br>
		            	<center><label>PLANNED</label></center>
		            	<br>
		            	<center><label>{{$ts_sponsor->planned_name}}</label></center>
				      	<center><h5 style="margin-top: 9px;">{{$ts_sponsor->planned_email}}</h5></center>
				      	<br>
		            </td>
		            <td><center><label>{{$ts_sponsor->no_paket}}</label></center></td>
		            <td><center><label>{{$ts_sponsor->agency}}</label></center></td>
		            <td><center><label>{{$ts_sponsor->advertiser_product}}</label></center></td>
		        </tr>
        @endforeach
    </table>
    <div id="searchCode"></div>
    <script>
        function gosearch(e){
            if(e.value==""){
                // Clear search
                document.getElementById("searchCode").innerHTML="";
            }
            else{
                document.getElementById("searchCode").innerHTML="<style>.table-row{display:none;}.table-row[data-search*='" + e.value + "']{display:table-row;}</style>";
            }
        }
    </script>

    <br>
    <br>

	



</body>
</html>