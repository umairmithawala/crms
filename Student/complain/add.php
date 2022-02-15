<?php
	include ("../../config.php");
	class complain{
		function add($conn){
			$conn=$conn;
			if(isset($_POST ['add']))
			{
				$userid=$_POST['userid'];
				$type=$_POST['type'];
				$problemid=$_POST['problem'];
				$room=$_POST['room'];
				$roomno=$_POST['roomno'];
				$description=$_POST['description'];
	
				$result = mysqli_query($conn,"SELECT * FROM problem where `id`='$problemid'");
					while($res = mysqli_fetch_array($result))
					{
						$problem = $res['problem'];
						break;
					}
		
		$test=mysqli_query($conn,"SELECT * FROM `complain` WHERE `userid`='$userid' AND `type`='$type' AND `room`='$room' AND `roomno`='$roomno' AND `problem`='$problem' AND `description`='$description'");
		if(mysqli_num_rows($test)!=0)
		{
			echo "<script>window.alert('Data insertion failed Data Already Present');</script>";
			echo "<script>window.location.href='complain.php'</script>";
		}
		else
			{
			$sqlQuery="INSERT INTO complain (userid,type,room,roomno,problem,description) VALUES ('$userid','$type','$room','$roomno','$problem','$description')";
			$fireQuery=mysqli_query($conn,$sqlQuery);
			if($fireQuery)
			{
			echo "<script>window.alert('Data insert successfully');</script>";
			echo "<script>window.location.href='complain.php'</script>";
			}
		else
			{
			echo "<script>window.alert('Data insertion failed');</script>";
			echo "<script>window.location.href='complain.php'</script>";
			}
			}
	}
}
}
$complain=new complain();
$complain->add($conn);
?>