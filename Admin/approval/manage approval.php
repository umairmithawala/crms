<?php 
include ("../header.php"); 
?>
	<div class="main-containt">

		<h1 class="admin-heading"> Manage Approval </h1>

		<?php 

			include ("../../config.php");
			$result = mysqli_query($conn, "SELECT * FROM complain where `type`='admin'");
			$results_per_page = 10;
			$number_of_results = mysqli_num_rows($result);
			
			$number_of_pages = ceil($number_of_results/$results_per_page);
			
			if (!isset($_GET['page'])) {
			$page = 1;
			} else {
			$page = $_GET['page'];
			}
			
			$this_page_first_result = ($page-1)*$results_per_page;




			$sql = "SELECT * FROM approvaldata ORDER BY id DESC LIMIT " . $this_page_first_result . ',' .  $results_per_page;	
			$result1 = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
			if(mysqli_num_rows($result1)> 0){
		?>

		<table class=" table-responsive table table-hover table table-sm" style=" margin: 50px 150px; width: 70%;">
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
			<td>
			  <?php echo $row['name']; ?></td>
			  <td><?php echo $row['email']; ?></td>
		      <td><?php echo $row['user_type']; ?></td>

		      <td><a href='approve.php?id=<?php echo $row['id']; ?>' style="text-decoration: none;"> Approve</a> |
			   <a href='reject.php?id=<?php echo $row['id']; ?>' style="text-decoration: none; color:red;" onclick="return confirm('Are you sure you want to reject this User?');"> Reject </a> </td>
		    </tr>
			<?php 
					echo '<div class="fixed-bottom">';
					echo '<ul  class= "pagination justify-content-center" >'; 
					echo '<ul class= "pagination pagination-lg">';	
				for ($page=1;$page<=$number_of_pages;$page++) {
				
				echo '<a class="page-link" href="manage approval.php?page=' . $page . '">' . $page. ' </a>';
			}
			echo  '</ul>';
			echo  '</ul>';
			echo '</div>';
		
		} 
		
		?>

		  </tbody>
		</table>
				<?php } ?>
	</div>

</div>

