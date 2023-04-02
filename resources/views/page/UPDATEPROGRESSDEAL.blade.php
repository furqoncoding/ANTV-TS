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
	</style>
</head>



<body style="background-image: linear-gradient(to right, #B22222 8%, #DC143C 38%, #B22222 100%);">

	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
	<table id="myTable">
		<thead>
			<tr>
				<th><center>Nomor Media Order</center></th>
				<th><center>Nomor Paket</center></th>
				<th><center>PLANNED</center></th>
				<th><center>Agency</center></th>
				<th><center>Advertiser Product</center></th>
				<th><center>Periode</center></th>
				<th><center>Budget Deals</center></th>
				<th><center>Net Deals</center></th>
				<th><center>Eps</center></th>
				<th><center>Type Paket</center></th>
				<th><center>Program</center></th>
				<th><center>Status Deals</center></th>
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
			      <td>
			      	<center>
			      		{{$data->start_periode}} - {{$data->end_periode}}
			      	</center>
			      </td>
			      <td>
			      	<center>
			      		{{$data->budget_deals}}
			      	</center>
			      	<br>
			      	<center><h5>{{$data->ket_budget_deals}}</h5></center>
			      </td>
			      <td><center>{{$data->net_deals_per_eps}}</center></td>
			      <td><center>{{$data->eps}}</center></td>
			      <td><center>{{$data->type_paket}}</center></td>
			      <td><center>{{$data->program}}</center></td>
			      <td><center>{{$data->status_deals}}</center></td>
			    </tr>
			@endforeach
			
		</tbody>
	</table>



</body>
</html>