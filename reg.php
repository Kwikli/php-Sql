<?php
include 'connect.php';
include 'data_base_sql.php';
$reg_errMsg = '';
//$_POST['login'] = '';
//$_POST['email'] = '';
//$_POST['reg_passwrd1'] = '';
//$_POST['reg_passwrd2'] = '';
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $admin = 0;
        $login = trim($_POST['login']);
        $email = trim($_POST['email']);
        $pass1 = trim($_POST['reg_passwrd1']);
        $pass2 = trim($_POST['reg_passwrd2']);

        if($login === '' or $email === '' or $pass1 === ''  or $pass2 === '' ){
            $reg_errMsg = '<b style="color: #ff0000;">'.'Fill all the blank! '.'</b>';
        }else{
            if (mb_strlen($login,'UTF8') < 2){
                $reg_errMsg = $reg_errMsg . '<b style="color: #ff0000;">' . " Login should be more than 2 letters!".'</b><br>';
        }
            if ($pass1 !== $pass2){
                $reg_errMsg = $reg_errMsg . '<b style="color: #ff0000;">' . " Type equal passwords! ".'</b><br>';
        } 
            //$existence = selectOne('user_data', ['user_email' => $email]);
            //if ($existence['user_email'] === $email){
             //   $reg_errMsg = $reg_errMsg. '<b style="color: #ff0000;">' . " This email already registred!".'</b><br>';
            //exit(); 
        //}
        }
        
        if(empty($reg_errMsg)){
                $pass = password_hash($pass1, PASSWORD_DEFAULT);
                $post = [
                    'admin_id' => $admin,
                    'user_login' => $login,
                    'user_email' => $email,
                    'user_password' => $pass
            ];
            
            $id = insert('user_data', $post);
            $user = selectOne('user_data', ['user_id' => $id] );

            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['user_login'] = $user['user_login'];
            $_SESSION['admin_id'] = $user['admin_id'];

            //tt($_SESSION);
            //header('location: index.php');
            //$reg_errMsg = '<b style="color: #16c900;">' .'User successfully registered! '.'</b><br>';

            }         
    }else{
        $login = '';
        $email = '';
        $pass1 = '';
        $pass2 = '';
    }   
?>