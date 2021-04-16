<?php
        session_start();
        //require_once 'signup.php';
	if(isset($_POST['submit'])){

                // $useername = $useremail = $pass = '';

                $data_array = [];
                $userfiles = 'files/data.json';

                $username      = $_POST['username'];
                $useremail     = $_POST['email'];
                $pass          = $_POST['pass'];
                $password      = MD5($pass);
                
                $file_content = file_get_contents($userfiles);
                $data_array = json_decode($file_content, true);

                $data_arr = [

                        'username' => $username,
                        'useremail' => $useremail,
                        'password' => $password,
                        
                ];
                //we already have data in the array
                //we then push the current data into the array 
                array_push($data_array, $data_arr);
                $file_json = json_encode($data_array);

                $file_open = fopen($userfiles, 'w');
                fwrite($file_open, $file_json);
                fclose($file_open);

                $_SESSION['username'] = $username;
                $_SESSION['email'] = $useremail;

                //Redirect
                header('location: index.php');
                

    
	}



?>

<?php
                // $myfile = fopen("$jsonfile", "w") or die("Unable to open file!");
                // $myfile = fopen("$jsonfile", "r") or die("Unable to open file!");

                // echo fgets($myfile);

                // fclose($myfile);
                // header("Location: login.php");
?>