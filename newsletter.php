<?php
$errMsg = '';
$successMsg = '';
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
         $email = trim($_POST['email']);

         if($email === ''){
            $errMsg = "Fill the blank!";
         }else{
            $post = [
                'email' => $email
            ];
            $existence = selectOne('newsletter', ['email' => $email]);
            if ($existence['email'] === $email){
               // $successMsg ="This email already registred!";
               $successMsg='';
            }else{
                insert('newsletter', $post);
            $successMsg = "Blank filled successfully";
            } 
         }
    }else{
        $email = '';
    }
?>