<?php
if ($_GET['id']) {
    $id = $_GET['id'];
    deletetestimonialadmin($id);
    header('location:dashboard.php?m=testimonial&p=list');
}