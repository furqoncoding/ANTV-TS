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
            background-color: coral;
            text-align: center;
        }
        .search-box{
            background-color: cornflowerblue;
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
        <input type="text" placeholder="دنبال چی میگردی؟" onkeyup="gosearch(this)">
    </div>
    <table>
        <tr class="table-row" data-search="علی فاضلی 09123456789">
            <td>1</td>
            <td>علی فاضلی</td>
            <td>09123456789</td>
        </tr>
        <tr class="table-row" data-search="علی حاضری 09254789658">
            <td>2</td>
            <td>علی حاضری</td>
            <td>09254789658</td>
        </tr>
        <tr class="table-row" data-search="محمد جمالی 09363547485">
            <td>3</td>
            <td>محمد جمالی</td>
            <td>09363547485</td>
        </tr>
        <tr class="table-row" data-search="حسین ولیزاده 09164786597">
            <td>4</td>
            <td>حسین ولیزاده</td>
            <td>09164786597</td>
        </tr>
        <tr class="table-row" data-search="قاسم ترابی 09147852369">
            <td>5</td>
            <td>قاسم ترابی</td>
            <td>09147852369</td>
        </tr>
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
    
	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
	<table id="myTable">
		<thead>
			<tr>
				<th><center><label>Status</label></center></th>
				<th><center><label>Nomor Media Order</label></center></th>
				<th><center><label>Nomor Paket</label></center></th>
				<th><center><label>PLANNED</label></center></th>
				<th><center><label>SALES</label></center></th>
			</tr>
		</thead>
		<tbody>

			@foreach($data['ts_sponsor_deals'] as $key => $data)
			    <tr>
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
			      	<center><label>{{$data->planned_name}}</label></center>
			      	<br>
			      	<center><h5>{{$data->planned_email}}</h5></center>
			      </td>
			      <td>
			      	<center><label>{{$data->sales_name}}</label></center>
			      	<br>
			      	<center><h5>{{$data->sales_email}}</h5></center>
			      </td>
			    </tr>
			@endforeach
			
		</tbody>
	</table>



</body>
</html>