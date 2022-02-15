<?php 
include ("../header.php"); 
include ("../../config.php");
?>

	<div class="main-containt">

		<h1 class="admin-heading"> Manage Problems </h1>

		<a href="add.php" style="float: right; margin-right: 90px; margin-top: -20px;" class="btn btn-outline-secondary"> Add </a>

		<table class="table" style="margin: 40px 100px; width: 900px;">
		  <thead>
		    <tr>
		      <th scope="col">Problems</th>
		      <th scope="col"> Action </th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php
		  $result = mysqli_query($conn,"SELECT * FROM problem");
		  $results_per_page = 10;

		  $number_of_results = mysqli_num_rows($result);

		  $number_of_pages = ceil($number_of_results/$results_per_page);
		  if(!isset($_GET['page'])){
			$page = 1;
		  }else{
			  $page = $_GET['page'];
		  }
		  $this_page_first_result = ($page-1)*$results_per_page;

				$sql = 'SELECT * FROM problem LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
				
				$result1 = mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($result1)){
				echo "<tr>";
				echo "<td>".$row['problem']."</td>";
				echo "<td><a href=\"edit.php?id=$row[id]\" style=\"text-decoration: none;\">Edit</a> | <a href=\"delete.php?id=$row[id]\" style=\"text-decoration: none; color:red;\" onClick=\"return confirm('Are you sure you want to delete this Problem?')\"> Delete </a></td>";
				
				"</tr>";
					}		
				echo '<div class="fixed-bottom">';
				echo '<ul  class= "pagination justify-content-center" >'; 
			    echo '<ul class= "pagination pagination-lg">';
				for ($page=1;$page<=$number_of_pages;$page++) {
					echo '<a class="page-link"href="manage problems.php?page=' . $page . '">' . $page. '</a>';
				  }
				  
				echo  '</ul>';
				echo  '</ul>';
				echo '</div>';
				?>
			
		  </tbody>
		</table>

	</div>

</div>

