<?php
        require_once 'signup.php';
	if(isset($_POST['submit'])){

                // $username = $useremail = $pass = '';

                //         $data_array = [];
                        
                        // require_once 'files/data.json';

                        $username      = $_POST['username'];
                        $useremail     = $_POST['useremail'];
                        $pass          = $_POST['pass'];
                        $password      = MD5($pass);
                        
                        // $data_array = file_get_contents($userfiles);
                        // $mydata = json_decode($data_array, true);

                        $data_array = [

                                'username' => $username,
                                'useremail' => $useremail,
                                'password' => $password,
                               
                        ];



                                echo $username;
                                file_put_contents('files/'. $data_array['username'] . ".txt", $data_array);
                        // $data_array[]= $result;

                        // $jsonfile = json_encode($data_array);
                        // file_put_contents($jsonfile, $userfiles);
                                

                        //  file_put_contents('data.json', $result);
                        //         header("Location: login.php");
    
	}



?>

<?php
                // $myfile = fopen("$jsonfile", "w") or die("Unable to open file!");
                // $myfile = fopen("$jsonfile", "r") or die("Unable to open file!");

                // echo fgets($myfile);

                // fclose($myfile);
                // header("Location: login.php");
?>