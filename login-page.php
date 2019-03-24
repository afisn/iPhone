<?php 
		include 'koneksi.php';
		session_start();
			
		$email = $_POST["email"];
		$pwd = $_POST["passwd"];
		
		
		
		$query = mysqli_query($con, "SELECT nama FROM tb_user WHERE email='$email' AND password='$pwd'");
	
		$cek = mysqli_num_rows($query);
 
			if($cek > 0){
				$_SESSION['email'] = $email;
				$_SESSION['status'] = "login";
				echo '<script>alert("Selamat datang!")</script>';  
				echo '<script>window.location="index.php"</script>'; 
				header("location:http://localhost/iphone/index.php");
			}else{
				echo '<script>alert("Username & Password Salah")</script>';  
				echo '<script>window.location="index.php"</script>'; 
				header("location:index.php?pesan=gagal");
			}
	   
?>