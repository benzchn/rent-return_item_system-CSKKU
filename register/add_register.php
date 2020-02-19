<?php
	session_start();
	include_once('../config/dbconnect.php');

	if(isset($_POST['submit'])){
		$sqlget = "SELECT * FROM `users_personal` ";
        $result1 = $conn->query($sqlget);
                       $userid = $_POST['user_id'];
                       $email = $_POST['email'];

                       $checkEqual = FALSE;

                       while($row1 = $result1->fetch_assoc()) {

                        $userid1 = $row1['user_id'];
                        $email1 = $row1['email'];
                    if ("$userid" == "$userid1" || "$email" == "$email1"){
                        $checkEqual = true;
                         break;
                        }
                    }
                    if($checkEqual){
						// $_SESSION['error'] = 'ข้อมูลซ้ำ กรุณากรอกใหม่ !';
						echo "<script>if(confirm('ข้อมูลซ้ำ กรุณากรอกใหม่ !!')){document.location.href='register.php'};</script>";
                        // echo '<script> alert("ข้อมูลซ้ำ กรุณากรอกใหม่ !!!")</script>';
                   }else if(!$checkEqual){

						$userid = $_POST['user_id'];
						$password = $_POST['password'];
						$fullname = $_POST['fullname'];
						$colyear = $_POST['col_year'];
						$phone = $_POST['phone'];
						$email = $_POST['email'];
						$department = $_POST['department'];
						$role = $_POST['role'];
                        

                        
						$sql = "INSERT INTO users_personal (user_id, password, fullname, col_year, phone, email, department, role) VALUES ('$userid', '$password', '$fullname', '$colyear', '$phone', '$email', '$department', '$role')";
						if($conn->query($sql)){
							echo "<script>if(confirm('ลงทะเบียนสำเร็จ !!')){document.location.href='../login.php'};</script>";
							
							// echo '<script> alert("ลงทะเบียนสำเร็จ !!!")</script>';
							// header('location: ../index.php');
						}else{
							$_SESSION['error'] = 'Something went wrong while adding';
							echo "<script>if(confirm('ลงทะเบียนไม่สำเร็จ กรุณากรอกใหม่ !!')){document.location.href='register.php'};</script>";
							
						}
		}else{
		$_SESSION['error'] = 'Fill up add form first';
	}
}
	// header('location: ../index.php');
?>