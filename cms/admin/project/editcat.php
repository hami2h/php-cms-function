<?php
if ($_GET['id']) {
    $id = $_GET['id'];
    $result = selectprojectcatadmin($id);
}
if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    editprojectcatadmin($data, $id);
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
                <form role="form" method="post" action="">
                    <div class="form-group">
                        <label>نام دسته بندی</label>
                        <input value="<?php echo $result['name']; ?>" type="text" class="form-control"
                               name="frm[name]">
                    </div>
                    <div class="form-group">
                        <label>سمت نامک</label>
                        <input value="<?php echo $result['slug']; ?>" type="text" class="form-control"
                               name="frm[slug]"
                               placeholder="سمت را وارد کنید">
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
