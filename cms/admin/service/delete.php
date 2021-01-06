<?php
if ($_GET['id']) {
    $id = $_GET['id'];
    deleteserviceadmin($id);
    header('location:dashboard.php?m=service&p=list');
}