<?php

session_start();

	if(isset($_POST['submit'])){
		
		include 'dbh.inc.php';
		
		$uid = $_POST['uid'];
		$pwd = $_POST['pwd'];
		
		//Error handlers
		if (empty($uid) || empty($pwd)){
			header("Location: ../index.php?login=empty");
				exit();
		} 
		else {
			$sql = "SELECT * FROM users WHERE user_uid='$uid'";
			$result = mysqli_query($conn,$sql);
			$resultCheck = mysqli_num_rows($result);
			
			if($resultCheck < 1) {
				header("Location: ../index.php?login=errorNone");
				exit();
			}
			else {
				if($row = mysqli_fetch_assoc($result)){
					//echo $row['user_uid'];
					
					$checkMatch = $pwd == $row['user_pwd'];
					if(!($checkMatch)){
						header("Location: ../index.php?login=errorNoMatch");
						exit();	
					}elseif (($checkMatch) == true){
						//Log in the user
						$_SESSION['u_id'] = $row['user_id'];
						$_SESSION['u_first'] = $row['user_first'];
						$_SESSION['u_uid'] = $row['user_uid'];
						$_SESSION['u_topic'] = $row['user_topic'];
						
						header("Location: ../main.php?login=success");
						exit();
					}
				}
			}
		}
	}
	
	else{
		header("Location: ../index.php?login=error");
		exit();	
	}
	


?>