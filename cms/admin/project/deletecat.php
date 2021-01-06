<?php
if ($_GET['id']) {
    $id = $_GET['id'];
    deleteprojectcatadmin($id);
    header('location:dashboard.php?m=project&p=listcat');
}