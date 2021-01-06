<?php
if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    addprojectcat($data);
}
?>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                افزودن دسته بندی پروژه جدید به سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" action="" >
                    <div class="form-group">
                        <label>نام دسته بندی پروژه</label>
                        <input type="text" class="form-control" name="frm[name]" placeholder="نام را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label>نامک</label>
                        <input type="text" class="form-control" name="frm[slug]" placeholder="web">
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
                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
