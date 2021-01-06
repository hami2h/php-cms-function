<?php
if ($_GET['id']) {
    $id = $_GET['id'];
    deletepageadmin($id);
    header('location:dashboard.php?m=page&p=list');
}