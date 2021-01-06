<?php
if ($_GET['id']) {
    $id = $_GET['id'];
    $result = selectteamadmin($id);
}
if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    $file = $_FILES['file'];
    editteamadmin($data, $id, $file);
}
?>
<h1 class="pageLables">ویرایش سرویس</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                افزودن عضو جدید به سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>نام عضو</label>
                        <input value="<?php echo $result['name']; ?>" type="text" class="form-control" name="frm[name]">
                    </div>
                    <div class="form-group">
                        <label>سمت عضو</label>
                        <input value="<?php echo $result['pos']; ?>" type="text" class="form-control" name="frm[pos]"
                               placeholder="سمت را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label>تصویر عضو</label>
                        <input type="file" class="form-control" name="file">
                        <img src="<?php echo $result['pic']; ?>" width="100">
                    </div>
                    <div class="form-group">
                        <label>لینک لینکدین</label>
                        <input value="<?php echo $result['link']; ?>" type="text" class="form-control" name="frm[link]"
                               placeholder="عنوان منو را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label>لینک اینستاگرام</label>
                        <input value="<?php echo $result['insta']; ?>" type="text" class="form-control"
                               name="frm[insta]" placeholder="عنوان منو را وارد کنید">
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
                    <div class="form-group">
                        <label>ترتیب</label>
                        <input value="<?php echo $result['sort']; ?>" type="text" class="form-control" name="frm[sort]"
                               placeholder="ترتیب نمایش">
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>
