<?php
session_start();
error_reporting(1);
include('includes/config.php');
if (strlen($_SESSION['userlogin']) == 0 && !isset($_GET["cid"])) {
    header('location:index.php');
} else {
    $cid = $_GET["cid"];
    $sql = "DELETE FROM `tblcontactdata` WHERE `id` = $cid";

    if ($dbh->query($sql)) {
        header('location:all-contacts.php?deleted=1');
    } else {
        header('location:all-contacts.php?deleted=0');
    }
}
?>