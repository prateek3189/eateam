<?php
    include_once("../config/config.php");

    include_once(CONTROLLER_PATH."dbmanager.php");

    $action = isset($_POST['action']) ? $_POST['action'] : '';

    switch($action) {
        case 'login':
            $username = isset($_POST['username']) ? $_POST['username'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';

            $select = "*";
            $table = "iz_user";
            $where = "username = '".$username."' AND password = '".md5($password)."' AND is_active = 1";
            $data = $db->select($select, $table, $where);
            if(count($data)) {
                $_SESSION['login'] = 1;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                @header('location:'.FOLDER_PATH_HTTP.'index.php');
                die;
            } else {
                $_SESSION['messages_failure'] = "Username or Password may be incorrect";
                @header('location:'.FOLDER_PATH_HTTP.'login.php');
                die;
            }

        break;
    }
?>
