<?php 
		include 'koneksi.php';
		
		$name = $_POST["name"];
		$email = $_POST["email"];
		$pwd = $_POST["pwd"];
		$address = $_POST["address"];
		
		if (empty($name)) { 
			array_push($errors, "Password is required"); 
		}
		if (empty($email)) { 
			array_push($errors, "Email is required"); 
		}
		if (empty($pwd)) { 
			array_push($errors, "Password is required"); 
		}
		
		$query ="INSERT INTO tb_user (`nama`,`email`,`password`,`address`)
                VALUES ('$name', '$email', '$pwd', '$address')"; 

         $eksekusi = ($query);

         if (mysqli_query($con, $eksekusi)) {		
				
				echo "<script type=\"text/javascript\">".
        				"alert('success');".
					"</script>";
				echo '<script>window.location="index.php"</script>'; 
				// header('Location: http://localhost/iphone/index.php');
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($con);
			} 

?>
