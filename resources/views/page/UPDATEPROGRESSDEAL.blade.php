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
        th{
            width: 100%;
            background-color: black;
            color: white;
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

        .button_detail {
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
        .button_detail:active {
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
    </style>
</head>



<body style="background-image: linear-gradient(to right, #B22222 8%, #DC143C 38%, #B22222 100%);">
	<?php
		$ts_sponsor_deals = json_decode(json_encode($data['ts_sponsor_deals']), true);
		$ts_sponsor = json_decode(json_encode($data['ts_sponsor']), true);
		
		$filtered_array_ts_sponsor_deals = array_filter($ts_sponsor_deals, function($element) {
			return $element['id_sponsor'] == 1;
		});
	?>
	<div class="search-box">
        <input type="text" placeholder="search" onkeyup="gosearch(this)">
    </div>
    <table>
    	<thead>
			<tr>
				<th><h5 style="margin-right: 8px;margin-left: 8px;">PLANNED</h5></th>
				<th><h5 style="margin-right: 8px;margin-left: 8px;">Nomor Paket</h5></th>
				<th><h5 style="margin-right: 8px;margin-left: 8px;">Nomor Media Order</h5></th>
				<th><h5 style="margin-right: 8px;margin-left: 8px;">Agency</h5></th>
				<th><h5 style="margin-right: 8px;margin-left: 8px;">Advertiser Product</h5></th>
				<th><h5 style="margin-right: 8px;margin-left: 8px;">SALES</h5></th>
				<th style="background-color: grey;"><h5 style="margin-right: 8px;margin-left: 8px;">Action</h5></th>
			</tr>
		</thead>
    	<tbody>
    	@foreach($data['ts_sponsor'] as $key => $data)
		    <tr class="table-row" data-search="<?php echo $data->no_paket.$data->planned_name.$data->planned_email.$data->agency.$data->advertiser_product.$data->no_media_order; ?>">
		        <td>
		            <br>
		            <center><label>PLANNED</label></center>
		            <br>
		            <center><label>{{$data->planned_name}}</label></center>
				    <center><h5 style="margin-top: 9px;">{{$data->planned_email}}</h5></center>
				    <br>
		        </td>
		        <td><center><label>{{$data->no_paket}}</label></center></td>
		        <td><center><label>{{$data->no_media_order}}</label></center></td>
		        <td><center><label>{{$data->agency}}</label></center></td>
		        <td><center><label>{{$data->advertiser_product}}</label></center></td>
		        <td>
		        <?php
		        $counter = 0;
			    if( $counter == 0 ) 
		        {
		        ?>

		            <?php
		        		foreach($ts_sponsor_deals as $index => $activ)
		        		{
		        	?>
				        <?php	
				           	if($activ['id_sponsor'] == $data->id) 
				            {
				        ?>
			            	<br>
				            <center><label>SALES</label></center>
				        	<br>
				        	<center><label>{{$activ['sales_name']}}</label></center>
					      	<center><h5 style="margin-top: 9px;">{{$activ['sales_email']}}</h5></center>
					      	<br>
			            <?php
			            	}
			            ?>

				            
				    <?php
				    	}
			        ?>

			    <?php
			    }
			    $counter = $counter + 1;
				?>
		        </td>
		        <td style="background-color: #D3D3D3;">
		        <?php
		        $counter = 0;
			    if( $counter == 0 ) 
		        {
		        ?>

		            <?php
		        		foreach($ts_sponsor_deals as $index => $activ)
		        		{
		        	?>
				        <?php	
				           	if($activ['id_sponsor'] == $data->id) 
				            {
				        ?>
			            	<br>
				            <center>
				            	<form class="form-horizontal" method='POST' action="{{action('PageController@detail_deal', [ 
				            	'planned_id'=>$data->planned_id,
				            	'planned_name'=>$data->planned_name,
				            	'planned_email'=>$data->planned_email,
				            	'no_paket'=>$data->no_paket,
				            	'no_media_order'=>$data->no_media_order,
				            	'agency'=>$data->agency,
				            	'advertiser_product'=>$data->advertiser_product,

				            	'update_date'=>$activ['update_date'],
				            	'sales_id'=>$activ['sales_id'],
				            	'sales_name'=>$activ['sales_name'],
				            	'sales_email'=>$activ['sales_email'],
				            	'start_periode'=>$activ['start_periode'],
				            	'end_periode'=>$activ['end_periode'],
				            	'budget_deals'=>$activ['budget_deals'],
				            	'ket_budget_deals'=>$activ['ket_budget_deals'],
				            	'net_deals_per_eps'=>$activ['net_deals_per_eps'],
				            	'eps'=>$activ['eps'],
				            	'type_paket'=>$activ['type_paket'],

				            	'program'=>$activ['program'],
				            	'status_deals'=>$activ['status_deals'] 
				            	])}}" enctype="multipart/form-data">
		                        {{ csrf_field() }}

		                            <button type="submit" class="button_detail">
		                                <img src="{{url('/detail.png')}}" alt="Image" width="25" height="25"/>
		                            </button>
		                        </form>
				            </center>
					      	<br>
			            <?php
			            	}
			            ?>

				            
				    <?php
				    	}
			        ?>

			    <?php
			    }
			    $counter = $counter + 1;
				?>
		        </td>
		            
		    </tr>
    	@endforeach
    	</tbody>
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