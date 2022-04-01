<?php 
include ("../header.php"); 
?>
	<div class="main-containt">

		<h1 class="admin-heading"> Manage User </h1>
		
		<?php
		include ("../../config.php");
		$sql = "SELECT * FROM userdata ORDER BY id DESC";
		$result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
		$results_per_page = 10;
		$number_of_results = mysqli_num_rows($result);

		$number_of_pages = ceil($number_of_results/$results_per_page);

		// if (isset($_GET['page'])) {
		// 	$page = $_GET['page'];
		// } else {
		// 	$page = 1;
		// }

		$this_page_first_result = ($page-1)*$results_per_page;

		/*
		$page_limit = 10;

		if(isset($_GET['page'])){
			$page = $_GET['page'];
		}else{
			$page = 1;
		}
		$offset = ($page - 1) * $page_limit;

		*/
		
		$sql="SELECT * FROM userdata ORDER BY id DESC LIMIT " . $this_page_first_result . ',' .  $results_per_page;
		$result1 = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
	
		if(mysqli_num_rows($result1)> 0){
		?>	
		
		<a href="add.php" style="float: right; margin-right: 175px;" class="btn btn-outline-secondary"> Add </a>
		<table class=" table-responsive table table-hover table table-sm" style=" margin: 70px 150px; width: 70%;">
		  <thead>
		  <tr>
		      <th scope="col">Name</th>	
		      <th scope="col">User Id</th>
		      <th scope="col">User Type</th>
		      <th scope="col"> Action </th>
		    </tr>
		  </thead>
		  <tbody>

		  <?php
			while($row=mysqli_fetch_assoc($result1)){
			?>
		    <tr>	      
		      <td><?php echo $row['name']; ?></td>   
			  <td><?php echo $row['email']; ?></td>
		      <td><?php echo $row['user_type']; ?></td></td>
		      <td><a href='edit.php?id=<?php echo $row['id']; ?>' style="text-decoration: none;"> Edit </a> 
			   <a href='delete-inline.php?id=<?php echo $row['id']; ?>'  style="text-decoration: none; color:red;" onclick= "return confirm('Are you sure you want to delete this USER ?');"> Remove </a> </td>
		    </tr>

			<?php }
			echo '<div class="fixed-bottom">';
			echo '<ul  class= "pagination justify-content-center" >'; 
			echo '<ul class= "pagination pagination-lg">';	
			
			for ($i=1;$i<=$number_of_pages;$i++) {
				if( $i ==  $page){
					$active = "active";
				}else{
					$active = ""; 
				}
				echo '<li class="'.$active.'"><a class="page-link" href="index.php?page=' . $i . '">' . $i. ' </a>';
			  }
			    
			 echo  '</ul>';
			 echo  '</ul>';
			echo '</div>';

			?>

		  </tbody>
		</table>
			<?php } ?>
	</div>

</div>