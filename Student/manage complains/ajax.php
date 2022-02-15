<?php
    include ("../../config.php");
    if($_GET['room']=='class')
    {
        $show="CLASS NO:"  ;
       $sqlQuery="SELECT * FROM ROOM WHERE `type`='class'";
		$fireQuery=mysqli_query($conn,$sqlQuery);
    if($fireQuery)
    {
		if(mysqli_num_rows($fireQuery)!=0)
		{
        echo " $show <select name='roomno'  style='margin-left:80px;'>";
        
        while($res = mysqli_fetch_array($fireQuery))
				{
					$id=$res['id'];
					$roomno= $res['roomno'];
            echo "<option value=$roomno> $roomno</option>";
        }
        echo "</select>";
		}
    }
	}
    elseif ($_GET['room']=='lab') 
    {
        $show="LAB NO:"  ;
       $sqlQuery="SELECT * FROM ROOM WHERE `type`='lab'";
		$fireQuery=mysqli_query($conn,$sqlQuery);
    if($fireQuery)
    {
		if(mysqli_num_rows($fireQuery)!=0)
		{
        echo " $show <select name='roomno'  style='margin-left:80px;'>";
        while($res = mysqli_fetch_array($fireQuery))
				{
					$id=$res['id'];
					$roomno= $res['roomno'];
            echo "<option value=$roomno> $roomno</option>";
        }
        echo "</select>";
		}
    }
	}
    elseif ($_GET['room']=='auditorium') 
    {
        $show="AUDITORIU NO:" ;
       $sqlQuery="SELECT * FROM ROOM WHERE `type`='auditorium'";
		$fireQuery=mysqli_query($conn,$sqlQuery);
    if($fireQuery)
    {
		if(mysqli_num_rows($fireQuery)!=0)
		{
        echo " $show <select name='roomno'  style='margin-left:80px;'>";
        while($res = mysqli_fetch_array($fireQuery))
				{
					$id=$res['id'];
					$roomno= $res['roomno'];
            echo "<option value=$roomno> $roomno</option>";
        }
        echo "</select>";
		}
    }
	}
    elseif ($_GET['room']=='lobby') 
    {
        $show="LOBBY:" ;
       $sqlQuery="SELECT * FROM ROOM WHERE `type`='lobby'";
		$fireQuery=mysqli_query($conn,$sqlQuery);
    if($fireQuery)
    {
		if(mysqli_num_rows($fireQuery)!=0)
		{
        echo " $show <select name='roomno'  style='margin-left:80px;'>";
        while($res = mysqli_fetch_array($fireQuery))
				{
					$id=$res['id'];
					$roomno= $res['roomno'];
            echo "<option value=$roomno> $roomno</option>";
        }
        echo "</select>";
		}
    }
	}
?>