<?php
if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    $file = $_FILES['file'];
    addpost($data,$file);
}
?>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                افزودن نوشته جدید به سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>عنوان نوشته</label>
                        <input type="text" class="form-control" name="frm[title]" placeholder="نام را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label>آدرس نوشته</label>
                        <input type="text" class="form-control" name="frm[slug]" placeholder="آدرس را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label>متن نوشته</label>
                        <textarea name="frm[text]" class="form-control" id="editor"></textarea>
                        <script>
                            CKEDITOR.replace( 'editor' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label>تصویر نوشته</label>
                        <input type="file" class="form-control" name="file">
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
