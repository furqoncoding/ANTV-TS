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
            background-color: white;
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
	<div class="search-box">
        <input type="text" placeholder="search" onkeyup="gosearch(this)">
    </div>
    <table>
    	@foreach($data['ts_sponsor_deals'] as $key => $data)
	        <tr class="table-row" data-search="<?php echo $data->status_deals.$data->no_media_order.$data->no_paket.$data->planned_name.$data->planned_email.$data->sales_name.$data->sales_email; ?>">
	            <td>
	            	<center>
			      		<label>
			      			{{$data->status_deals}}
			      		</label>
			      	</center>
	            </td>
	            <td><center><label>{{$data->no_media_order}}</label></center></td>
	            <td><center><label>{{$data->no_paket}}</label></center></td>
	            <td>
	            	<br>
	            	<center><label>{{$data->planned_name}}</label></center>
			      	<br>
			      	<center><h5>{{$data->planned_email}}</h5></center>
			      	<br>
	            </td>
	            <td>
	            	<br>
	            	<center><label>{{$data->sales_name}}</label></center>
			      	<br>
			      	<center><h5>{{$data->sales_email}}</h5></center>
			      	<br>
	            </td>
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
    <br>>

	



</body>
</html>