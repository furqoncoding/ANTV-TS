<html>

<head>
	<style type="text/css">
		#myInput {
		  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
		  background-position: 10px 12px; /* Position the search icon */
		  background-repeat: no-repeat; /* Do not repeat the icon image */
		  width: 100%; /* Full-width */
		  font-size: 16px; /* Increase font-size */
		  padding: 12px 20px 12px 40px; /* Add some padding */
		  border: 1px solid #ddd; /* Add a grey border */
		  margin-bottom: 12px; /* Add some space below the input */
		}

		#myTable {
		  border-collapse: collapse; /* Collapse borders */
		  width: 100%; /* Full-width */
		  border: 1px solid #ddd; /* Add a grey border */
		  font-size: 18px; /* Increase font-size */
		}

		#myTable th, #myTable td {
		  text-align: left; /* Left-align text */
		  padding: 12px; /* Add padding */
		}

		#myTable tr {
		  /* Add a bottom border to all table rows */
		  border-bottom: 1px solid #ddd;
		}

		#myTable tr.header, #myTable tr:hover {
		  /* Add a grey background color to the table header and on hover */
		  background-color: #f1f1f1;
		}


		.th {
			font-size: 10px;
		}
		.td {
			font-size: 10px;
		}
	</style>
</head>



<body style="background-image: linear-gradient(to right, #B22222 8%, #DC143C 38%, #B22222 100%);">

	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
	<table id="myTable">
		<thead>
			<tr>
				<th><center><label>Nomor Media Order</label></center></th>
				<th><center><label>Nomor Paket</label></center></th>
				<th><center><label>PLANNED</label></center></th>
				<th><center><label>Agency</label></center></th>
				<th><center><label>Advertiser Product</label></center></th>
				<th><center><label>Periode</label></center></th>
				<th><center><label>Budget Deals</label></center></th>
				<th><center><label>Net Deals</label></center></th>
				<th><center><label>Eps</label></center></th>
				<th><center><label>Type Paket</label></center></th>
				<th><center><label>Program</label></center></th>
				<th><center><label>Status Deals</label></center></th>
			</tr>
		</thead>
		<tbody>

			@foreach($data['ts_sponsor_deals'] as $key => $data)
			    <tr>
			      <td><center><label>{{$data->no_media_order}}</label></center></td>
			      <td><center><label>{{$data->no_paket}}</label></center></td>
			      <td>
			      	<center><label>{{$data->planned_name}}</label></center>
			      	<br>
			      	<center><h5>{{$data->planned_email}}</h5></center>
			      </td>
			      <td><center><label>{{$data->agency}}</label></center></td>
			      <td><center><label>{{$data->advertiser_product}}</label></center></td>
			      <td>
			      	<center>
			      		<label>
			      		{{$data->start_periode}} - {{$data->end_periode}}
			      		</label>
			      	</center>
			      </td>
			      <td>
			      	<center>
			      		<label>
			      		{{$data->budget_deals}}
			      		</label>
			      	</center>
			      	<br>
			      	<center><h5>{{$data->ket_budget_deals}}</h5></center>
			      </td>
			      <td><center><label>{{$data->net_deals_per_eps}}</label></center></td>
			      <td><center><label>{{$data->eps}}</label></center></td>
			      <td><center><label>{{$data->type_paket}}</label></center></td>
			      <td><center><label>{{$data->program}}</label></center></td>
			      <td><center><label>{{$data->status_deals}}</label></center></td>
			    </tr>
			@endforeach
			
		</tbody>
	</table>



</body>
</html>