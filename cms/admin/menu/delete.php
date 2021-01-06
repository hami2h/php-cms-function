<?php
if ($_GET['id']) {
    $id = $_GET['id'];
    deletemenuadmin($id);
    header('location:dashboard.php?m=menu&p=list');
}