<?php
if (isset($_SESSION['username'])&&(isset($_SESSION['level']))){
include"home.php";
}
else{
echo "You Can't Access this page ... ";
}
?>