<?php 
include ("../header.php"); 
?>

<div class="main-containt">

		<h1 class="lab-heading-solved"> Manage Solved Complains </h1>

		<table class="table" style="margin: 50px 0px; width: 100%;">
		  <thead>
		    <tr>
		     
		      <th scope="col">User Id</th>
		      <th scope="col">Problems</th>
		      <th scope="col">Class</th>
		      <th scope="col"> Room No </th>
		      <th scope="col"> Description </th>
		      <th scope="col"> Action </th>
		    </tr>
		  </thead>
		  <tbody>
			<?php 
			
			include ("../../config.php");
			$result = mysqli_query($conn, "SELECT * FROM solved where `type`='admin'");
			$results_per_page = 10;
			$number_of_results = mysqli_num_rows($result);
			
			$number_of_pages = ceil($number_of_results/$results_per_page);
			
			if (!isset($_GET['page'])) {
			  $page = 1;
			} else {
			  $page = $_GET['page'];
			}
			
			$this_page_first_result = ($page-1)*$results_per_page;
			
			$sql="SELECT * FROM solved where `type`='admin' LIMIT " . $this_page_first_result . ',' .  $results_per_page;
			$result1 = mysqli_query($conn, $sql);
			while($res = mysqli_fetch_array($result1)) { 
		 
		    echo "<tr>";
		      echo "<td>".$res['userid']."</td>";
		      echo "<td>".$res['problem']."</td>";
		      echo "<td>".$res['room']."</td>";
			  echo "<td>".$res['roomno']."</td>";
		      echo "<td>".$res['description']."</td>";
			  
		      echo "<td><a href=\"delete.php?id=$res[id]\"  style=\"color:red; onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		    #  <td> <a href="" style="text-decoration: none;"> Delete </a> </td>
		   echo "</tr>";
		}
					echo '<div class="fixed-bottom">';
					echo '<ul  class= "pagination justify-content-center" >'; 
					echo '<ul class= "pagination pagination-lg">';	
				for ($page=1;$page<=$number_of_pages;$page++) {
				
				echo '<a class="page-link" href="manage solved complains.php?page=' . $page . '">' . $page. ' </a>';
			}
			echo  '</ul>';
			echo  '</ul>';
			echo '</div>';
		   ?>

		  </tbody>
		</table>

	</div>

</div>