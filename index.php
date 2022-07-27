<?php 
// GET JSON FILE
$str = file_get_contents('data.json');
$json = json_decode($str, true);
// echo '<pre>' . print_r($json, true) . '</pre>';

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>

 	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
 	
 </head>
 <body>
 	<table id="example2" class="table table-bordered text-nowrap border-bottom">
        <thead>
 		<tr><td>ID</td>
 		<td>ADDRESS</td>
 		<td>PARENT_ADDRESS</td>
 		<td>POOLS</td>
 		<td>DEEP CHILDREN</td></tr></thead>
 		<?php 
 		foreach ($json as $key => $value) {
	// code...
	echo "
	<tr>
	<td>".$key."</td>
	<td>".$value['address']."</td>
	<td>".$value['parent_address']."</td>
	<td>".sizeof($value['pools'])."</td>
	<td><a href='deeparray.php?id=".$key."'>".sizeof($value['deep_childrens'])."</td>
	</tr>
	";
}
 		 ?>
 	</table>
 
 </body>
  	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 <script type="text/javascript" src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript">
 	$(document).ready( function () {
    $('#example2').DataTable();
} );
 </script>
 </html>