<?php
if ($_GET['id']) {
    $id = $_GET['id'];
    $result = selectpostadmin($id);
}
if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    $file = $_FILES['file'];
    editpostadmin($data, $id, $file);
}
?>
<h1 class="pageLables">ویرایش سرویس</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                افزودن نوشته جدید به سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>نام نوشته</label>
                        <input value="<?php echo $result['title']; ?>" type="text" class="form-control" name="frm[title]">
                    </div>
                    <div class="form-group">
                        <label>سمت نوشته</label>
                        <input value="<?php echo $result['slug']; ?>" type="text" class="form-control" name="frm[slug]"
                               placeholder="سمت را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label>تصویر نوشته</label>
                        <input type="file" class="form-control" name="file">
                        <img src="<?php echo $result['pic']; ?>" width="100">
                    </div>
                    <div class="form-group">
                        <label>متن نوشته</label>
                        <textarea name="frm[text]" class="form-control" id="editor"><?php echo $result['text']; ?></textarea>
                        <script>
                            CKEDITOR.replace( 'editor' );
                        </script>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]"
                                   value="1" <?php if ($result['status'] == 1) echo 'checked'; ?>>
                            فعال
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]"
                                   value="0" <?php if ($result['status'] == 0) echo 'checked'; ?>>
                            غیر فعال
                        </label>
                    </div>
                     <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>
