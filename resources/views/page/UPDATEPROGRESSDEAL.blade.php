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

				<th><center><label>Details</label></center></th>
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
			      <td>
			      	<label>{{$data->agency}}</label>
			      	<label>{{$data->advertiser_product}}</label>
			      	
			      		<label>
			      		{{$data->start_periode}} - {{$data->end_periode}}
			      		</label>
			      	
			      		<label>
			      		{{$data->budget_deals}}
			      		</label>
			      	
			      	<br>
			      	<h5>{{$data->ket_budget_deals}}</h5>
			      	<label>{{$data->net_deals_per_eps}}</label>
			      	<label>{{$data->eps}}</label>
			      	<label>{{$data->type_paket}}</label>
			      	<label>{{$data->program}}</label>
			      	<label>{{$data->status_deals}}</label>
			      </td>
			 
			    </tr>
			@endforeach
			
		</tbody>
	</table>



</body>
</html>