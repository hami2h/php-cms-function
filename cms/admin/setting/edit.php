<?php
$result = listsettadmin();
if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    $file = $_FILES['logo'];
    editsettingadmin($data, $file);
}
?>
<h1 class="pageLables">ویرایش سایت</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                ویرایش سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>عنوان سایت</label>
                        <input value="<?php echo $result['title']; ?>" type="text" class="form-control"
                               name="frm[title]"
                               placeholder="عنوان سایت را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label>توضیحات</label>
                        <textarea class="form-control"
                                  name="frm[description]"><?php echo $result['description']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>کلمات کلیدی</label>
                        <input value="<?php echo $result['keywords']; ?>" type="text" class="form-control"
                               name="frm[keywords]"
                               placeholder="کلمات کلیدی را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label>متن کپی رایت</label>
                        <input value="<?php echo $result['copyright']; ?>" type="text" class="form-control"
                               name="frm[copyright]"
                               placeholder="متن کپی رایت را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label>لوگو</label>
                        <input type="file" class="form-control" name="logo"><br>
                        <img src="<?php echo $result['logo']; ?>" width="150">
                    </div>
                    <br>
                    <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>
