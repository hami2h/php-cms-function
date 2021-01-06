<?php
if ($_GET['id']) {
    $id = $_GET['id'];
    deletepostadmin($id);
    header('location:dashboard.php?m=post&p=list');
}