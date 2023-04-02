<html>

<head>
	<style type="text/css">
		.button_resend {
            margin: auto;
            width: 98%;
            height: 98%;
            background-color: white;
            border-width: 0px;
            border-radius: 18px;
            border-color: white;
            color: white;
            background-image: linear-gradient(to right, #4169E1 8%, #48D1CC 38%, #4169E1 100%);

            cursor: pointer; 
        }
        .button_resend:active {
            margin: auto;
            width: 98%;
            height: 98%;
            background-color: white;
            border-width: 0px;
            border-radius: 18px;
            border-color: white;
            color: white;
            background-image: linear-gradient(to right, #48D1CC 8%, #4169E1 38%, #48D1CC 100%);

            cursor: pointer; 
        }
        .button_remove {
            margin: auto;
            width: 98%;
            height: 98%;
            background-color: white;
            border-width: 0px;
            border-radius: 18px;
            border-color: white;
            margin-top: -28px;
            margin-bottom: 28px;
            color: white;
            background-image: linear-gradient(to right, #FA8072 8%, #FF4500 38%, #FF0000 100%);

            cursor: pointer; 
        }
        .button_remove:active {
            margin: auto;
            width: 98%;
            height: 98%;
            background-color: white;
            border-width: 0px;
            border-radius: 18px;
            border-color: white;
            margin-top: -28px;
            margin-bottom: 28px;
            color: white;
            background-image: linear-gradient(to right, #FF4500 8%, #FF0000 38%, #FF4500 100%);

            cursor: pointer; 
        }
		h1{
		  font-family: sans-serif;
		}
		 
		table {
		  font-family: Arial, Helvetica, sans-serif;
		  color: #666;
		  text-shadow: 1px 1px 0px #fff;
		  background: #eaebec;
		  border: #ccc 1px solid;
		}
		 
		table th {
		  padding: 15px 35px;
		  border-left:1px solid #e0e0e0;
		  border-bottom: 1px solid #e0e0e0;
		  background: #ededed;
		}
		 
		table th:first-child{  
		  border-left:none;  
		}
		 
		table tr {
		  text-align: center;
		  padding-left: 20px;
		}
		 
		table td:first-child {
		  text-align: left;
		  padding-left: 20px;
		  border-left: 0;
		}
		 
		table td {
		  padding: 15px 35px;
		  border-top: 1px solid #ffffff;
		  border-bottom: 1px solid #e0e0e0;
		  border-left: 1px solid #e0e0e0;
		  background: #fafafa;
		  background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
		  background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
		}
		 
		table tr:last-child td {
		  border-bottom: 0;
		}
		 
		table tr:last-child td:first-child {
		  -moz-border-radius-bottomleft: 3px;
		  -webkit-border-bottom-left-radius: 3px;
		  border-bottom-left-radius: 3px;
		}
		 
		table tr:last-child td:last-child {
		  -moz-border-radius-bottomright: 3px;
		  -webkit-border-bottom-right-radius: 3px;
		  border-bottom-right-radius: 3px;
		}
		 
		table tr:hover td {
		  background: #f2f2f2;
		  background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
		  background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
		}
	</style>
</head>



<body style="background-image: linear-gradient(to right, #B22222 8%, #DC143C 38%, #B22222 100%);">

	<table cellspacing='0'>
		<thead>
			<tr>
				<th><center>Nomor Media Order</center></th>
				<th><center>Nomor Paket</center></th>
				<th><center>PLANNED</center></th>
				<th><center>Agency</center></th>
				<th><center>Advertiser Product</center></th>
			</tr>
		</thead>
		<tbody>

			@foreach($data['ts_sponsor_deals'] as $key => $data)
			    <tr>
			      <td><center>{{$data->no_media_order}}</center></td>
			      <td><center>{{$data->no_paket}}</center></td>
			      <td>
			      	<center>{{$data->planned_name}}</center>
			      	<br>
			      	<center><h5>{{$data->planned_email}}</h5></center>
			      </td>
			      <td><center>{{$data->agency}}</center></td>
			      <td><center>{{$data->advertiser_product}}</center></td>
			    </tr>
			@endforeach
			
		</tbody>
	</table>



</body>
</html>