<?php
			if (isset($_POST['submit'])){
				include_once 'dbh.inc.php';
				
				$first = $_POST['first'];
				$uid = $_POST['uid'];
				$topic = $_POST['topic'];
				$pwd = $_POST['pwd'];
				
				if(empty($first) || empty($uid) || empty($topic) || empty($pwd)){
					header("Location: ../RegForm.php?signup=empty");
					exit();
				}
				else {
					if(!preg_match("/^[a-zA-Z]*$/",$first)){
						header("Location: ../RegForm.php?signup=invalid");
						exit();
					}
					else{
						$sql = "SELECT * FROM users WHERE user_uid='$uid'";
						$result = mysqli_query($conn,$sql);
						$resultCheck = mysqli_num_rows($result);
						
						if($resultCheck > 0){
							header("Location: ../RegForm.php?signup=usertaken");
							exit();
						}
						else{
							$sql = "INSERT INTO users (user_first, user_uid, user_topic, user_pwd)
							VALUES ('$first', '$uid', '$topic', '$pwd');";	
							mysqli_query($conn, $sql);
							
							header("Location: ../index.php?login=success");
							exit();
						}
					}
					
				}
			}
			else {
				header("Location: ../RegForm.php");
				exit();
			}
			
			
			
		?>