

<?php

session_start();
$id = $_POST['std_id'];
$_SESSION["edit_btn_id"] = $id;

include '../connection.php';
if($con)
{
    $query = "UPDATE last_button SET last_button_id='adm-mod-l-edit-on-btn' order by id desc limit 1";
    mysqli_query( $con , $query );
}


?>