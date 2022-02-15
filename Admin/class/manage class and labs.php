<?php include ("../header.php"); 
include ("../../config.php");
?>

	<div class="main-containt">

		<h1 class="admin-heading"> Manage Class and Laboratory </h1>

		<a href="add.php" style="float: right; margin-right: 175px;" class="btn btn-outline-secondary"> Add </a>

		<table class="table" style="margin: 50px 150px; width: 70%;">
		  <thead>
		    <tr>
		      <th scope="col">Type</th>
		      <th scope="col">Room No</th>
		      <th scope="col"> Action </th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php 
		  	$results = mysqli_query($conn, "SELECT * FROM room ORDER BY `type` DESC");
			$results_per_page = 10;
			$number_of_result = mysqli_num_rows($results);
			$number_of_pages = ceil($number_of_result /$results_per_page );
							
				if (!isset($_GET['page'])) {
					$page = 1;
				} else {
					$page = $_GET['page'];
				}
				$this_page_first_result = ($page-1)*$results_per_page;

		 	$sql = 'SELECT * FROM room ORDER BY `type` DESC LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
			 $result1 = mysqli_query($conn,$sql); 
		 	 while($row = mysqli_fetch_array($result1)){
				echo "<tr>";
					echo "<td>".$row['type']."</td>";
					echo "<td>".$row['roomno']."</td>";
					// echo "<td> <a href="" style="text-decoration: none;"> Edit </a> | <a href="" style="text-decoration: none;"> Delete </a> </td>";
					echo "<td><a   href=\"edit.php?id=$row[id]\">Edit</a> | <a  href=\"delete.php?id=$row[id]\"  style=\"color:red; onClick=\"return confirm('Are you sure you want to delete Type And Room No?')\">Delete</a></td>";
				echo "</tr>";
			  }
			  echo '<div class="fixed-bottom">';
			  echo '<ul  class= "pagination justify-content-center" >'; 
			 echo '<ul class= "pagination pagination-lg">';	
			  for ($page=1;$page<=$number_of_pages;$page++) {

				echo '<a  class="page-link" href="manage class and labs.php?page=' . $page . '">' . $page. ' </a>';
			}
			echo  '</ul>';
			 echo  '</ul>';
			echo '</div>';
		    ?>
		  </tbody>
		</table>

	</div>

</div>

