<?php
if ($_GET['id']) {
    $id = $_GET['id'];
    deleteprojectadmin($id);
    header('location:dashboard.php?m=project&p=list');
}