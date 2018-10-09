<?PHP
$con = new mysqli('127.0.0.1','root','toor','mysql');
$sql = "select * from user limit 3";
if(!$con)
    die("connect error:".mysqli_connect_error());
$rs = $con->query($sql);
$c = array();
while($r = $rs->fetch_row()){
    print_R($r);
}
$con->close();
?>
