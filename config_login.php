<?php

session_start();

// require_once 'config_signup.php';

if(isset($_POST)){

    $userfiles = 'files/data.json';

    //$useremail =  $pass = '';

    $useremail = $_POST['email'];
    $pass = MD5($_POST['pass']);

    $check = file_get_contents($userfiles);
    $data_array = json_decode($check, true);

        // var_dump($data_array);pass
    $i = 0;
    foreach($data_array[$i] as $data){
        if($useremail == $data['useremail'] && $pass == $data['password']){
            
            break;
            header("location: index.php");
            }else{
                echo "Login Successful";
                break;
            }
           $i++;
    }




        // for($i=0; $i<count($data_array); $i++){
        //    print_r($data_array[$i]['useremail']);
        //    echo '<br><br><br>';
        //    echo $useremail.'post';
        //    echo '<br><br><br>';
        
        //         // if($useremail == $data_array[$i]['useremail']){

        //         //     break;
        //         //     header("location: index.php");
        //         // }
        //         // else{
        //         //     continue;
        //         // }
        // }

            
        

}


?>