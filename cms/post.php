<?php
include_once 'header.php';
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $result = selectpostuser($id);
} else {
    $result = "404";
}
?>
<section id="page">
    <div class="container-fluid">
        <h1><?php echo $result['title']; ?></h1>
        <br>
        <br>
        <?php echo $result['text']; ?>
        <br>
        <br>
        <img src="<?php echo $result['pic']; ?>" width="600" height="400">
    </div>
</section>
<?php
include_once 'footer.php';
?>
