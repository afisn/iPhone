<?php 
		include 'koneksi.php';
		
		$name = $_POST["nama"];
		$email = $_POST["email"];
		$tipe = $_POST["tipe"];
		
		$query ="INSERT INTO tb_polling (`nama`,`address`,`tipe_iphone`)
                VALUES ('$name', '$email', '$tipe')"; 

         $eksekusi = ($query);

         if (mysqli_query($con, $eksekusi)) {		
				// header('Location: http://localhost/iphone/index.php');
				echo '<script>alert("Terima kasih sudah isi")</script>';
				echo '<script>window.location="index.php"</script>';  
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($con);
			} 

?>
