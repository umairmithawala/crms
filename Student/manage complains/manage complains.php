<?php 
include ("../header.php");
include ("../../config.php");
if(isset($_SESSION['userEmails'])){

	$email=$_SESSION['userEmails'];
}
?>

	<div class="#">

		<h1 class="admin-heading"> Manage Complains </h1>

		<table class="table" style="margin: 50px 350px; width: 70%;">
		  <thead>
		    <tr>
		      
		      <th scope="col"> Problem </th>
		      <th scope="col">Problem Room No</th>
		      <th scope="col"> Description </th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php 
		  
				include ("../../config.php");
				$result = mysqli_query($conn, "SELECT * FROM complain where `userid`='$email'");
				$results_per_page = 10;
				$number_of_results = mysqli_num_rows($result);

				$number_of_pages = ceil($number_of_results/$results_per_page);

				if (!isset($_GET['page'])) {
				$page = 1;
				} else {
				$page = $_GET['page'];
				}

				$this_page_first_result = ($page-1)*$results_per_page;

						$sql="SELECT * FROM complain where `userid`='$email' LIMIT " . $this_page_first_result . ',' .  $results_per_page;
						$result1 = mysqli_query($conn, $sql);
						while($res = mysqli_fetch_array($result1)) { 

						echo "<tr>";
						echo "<td>".$res['problem']."</td>";
						echo "<td>".$res['room']." ".$res['roomno']."</td>";
						echo "<td>".$res['description']."</td>";
						//<td><a href="../manage complains/edit.php" style="text-decoration: none;"> Edit </a> </td>
						//<td><a href="../manage complains/edit.php" style="text-decoration: none;"> Delete </a> </td>
						echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete this Complain?')\">Delete</a></td>";							
						echo "</tr>";
						}	  
						echo '<div class="fixed-bottom">';
						echo '<ul  class= "pagination justify-content-center" >'; 
						echo '<ul class= "pagination pagination-lg">';		
					for ($page=1;$page<=$number_of_pages;$page++) {
						echo '<a  class="page-link"  href="manage complains.php?page=' . $page . '">' . $page. ' </a>';
					}
					echo  '</ul>';
					echo  '</ul>';
				   echo '</div>';
		  ?>
		  </tbody>
		</table>

	</div>
</div>