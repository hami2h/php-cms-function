<?php
if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    $file = $_FILES['file'];
    addproject($data, $file);
}
?>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                افزودن پروژه جدید به سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>نام پروژه</label>
                        <input type="text" class="form-control" name="frm[title]" placeholder="نام را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label>توضیح مختصر پروژه</label>
                        <input type="text" class="form-control" name="frm[description]" placeholder="سمت را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label>تصویر پروژه</label>
                        <input type="file" class="form-control" name="file">
                    </div>
                    <div class="form-group">
                        <label>لینک</label>
                        <input type="text" class="form-control" name="frm[link]" placeholder="عنوان منو را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label>دسته بندی</label>
                        <select class="form-control" name="frm[filter]">
                            <?php
                            $projectcats = selectallprojectcat();
                            foreach ($projectcats as $projectcat):
                                ?>
                                <option value="<?php echo $projectcat['slug']; ?>"><?php echo $projectcat['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
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
