<?php
if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    addservice($data);
}
?>
<h1 class="pageLables">افزودن سرویس جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                افزودن سرویس جدید به سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" action="">
                    <div class="form-group">
                        <label>عنوان سرویس</label>
                        <input type="text" class="form-control" name="frm[title]" placeholder="عنوان منو را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label>توضیحات</label>
                        <textarea name="frm[description]" placeholder="توضیحات" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>لینک سرویس</label>
                        <input type="text" class="form-control" name="frm[url]" placeholder="عنوان منو را وارد کنید">
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
