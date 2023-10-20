<?php
$servername="locahhost";
$user="root";
$password="";
$DATABASE_NAME="campus";
$conn=new mysql($servername,$user,$password,$DATABASE_NAME);
if($con->connect_error){
    echo mysql_fatal_error();
}
else{
    echo"connection successful";
}
function mysql_fatal_error(){
    echo<<<_END
    _END
}
?>