<?php
if ($_GET['id']) {
    $id = $_GET['id'];
    deletepropertyadmin($id);
    header('location:dashboard.php?m=property&p=list');
}