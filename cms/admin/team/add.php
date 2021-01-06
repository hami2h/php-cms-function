<?php
if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    $file = $_FILES['file'];
    addteam($data,$file);
}
?>
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
                        <input type="text" class="form-control" name="frm[name]" placeholder="نام را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label>سمت عضو</label>
                        <input type="text" class="form-control" name="frm[pos]" placeholder="سمت را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label>تصویر عضو</label>
                        <input type="file" class="form-control" name="file">
                    </div>
                    <div class="form-group">
                        <label>لینک لینکدین</label>
                        <input type="text" class="form-control" name="frm[link]" placeholder="عنوان منو را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label>لینک اینستاگرام</label>
                        <input type="text" class="form-control" name="frm[insta]" placeholder="عنوان منو را وارد کنید">
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]" value="1" checked>
                            فعال

                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]" value="0" checked>
                            غیر فعال

                        </label>
                    </div>
                    <div class="form-group">
                        <label>ترتیب</label>
                        <input type="text" class="form-control" name="frm[sort]" placeholder="ترتیب نمایش">
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
