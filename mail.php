<?php
	if(filter_has_var(INPUT_POST,'submit')){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		if(!empty($email) && !empty($name) && !empty($message)){
			redirect("location:")
		} else {
			$msg= "Please fill in fields";

		}
		// $config = [
		//     'dbname' => 'hng',
		//     'pass' => '@hng.intern1',
		//     'username' => 'intern',
		//     'host' => 'localhost'
		// ];

  //
	//     $dsn 		= 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
	//     $con 		= new PDO($dsn, $config['username'], $config['pass']);
	//     $result = $con->query('SELECT * FROM password');
	//     $data 	= $result->fetch();
	//     $password = $data['password'];
	// 		$to 			= $_POST['email'];
	//     $subject = $_POST['subject'];
	//     $body 	= $_POST['body'];
  //     $to2 		= 'azegaf@gmail.com';
	// 	header("location: ./sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=".$to,$to2);
	// }else{
	// 	header("location: index.html");
	}
?>
