<?
function myConnect() {
    require_once 'config.php';
    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    mysqli_query($con,"SET NAMES 'utf8'");

    return $con;


}

?>
