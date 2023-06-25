<?php   
    $db_name = 'mysql:host=localhost;dbname=shop_db';
    $db_user = 'root';
    $db_password = '';

    $conn = new PDO($db_name, $db_user, $db_password);

    if ($conn) {
        echo "connected";
        # code...
    }
    function unique_id(){
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charLength = strlen($chars);
        $randomString = '';
        for ($i=0; $i < 20; $i++) { 
            $randomString.=$chars[mt.round(0, $charLength -1 )];
        }
        return $randomString;
    }
?>