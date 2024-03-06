<?php 
// include_once("db_connect.php");
include("../../../conn.php");

include("getbyOpp.php");
include("header.php"); 

$idGit = $_GET['id_alluserOpp'];
echo $idGit;

?>
<title>phpzag.com : Demo Export Data to Excel with PHP and MySQL</title>
<?php include('container.php');?>
<div class="container">	
	<!-- <h2>Export Data to Excel with PHP and MySQL</h2> -->
	<div class="well-sm col-sm-12">
		<div class="btn-group pull-right">	
			<form action="" method="post" enctype="multipart/form-data" accept-charset="UTF-8"> 					
				<button type="submit" id="export_data" name='export_data' value="Export to excel" class="btn btn-info">Export to excel</button>
			</form>
		</div>
	</div>				  
	<table id="" class="table table-striped table-bordered">
		<tr>
			<th>Opportunities</th>
			<th>Usre Apply</th>
			<th>Email</th>	
			<th>Phone</th>
		</tr>
		<tbody>
			<?php foreach($developer_records as $developer) { ?>
			   <tr>
			   <td><?php echo $developer ['OpportunitiesApply']; ?></td>
			   <td><?php echo $developer ['UsreNameApply']; ?></td>
			   <td><?php echo $developer ['UsreEmailApply']; ?></td>   
			   <td><?php echo $developer ['phone']; ?></td>
			   </tr>
			<?php } ?>
		</tbody>
    </table>	
	<!-- <div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="http://www.phpzag.com/export-data-to-excel-with-php-and-mysql/">Back to Tutorial</a>		
	</div> -->
</div>
<?php include('footer.php');?>




