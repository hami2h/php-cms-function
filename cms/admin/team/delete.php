<?php
if ($_GET['id']) {
    $id = $_GET['id'];
    deleteteamadmin($id);
    header('location:dashboard.php?m=team&p=list');
}