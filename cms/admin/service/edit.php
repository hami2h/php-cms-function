<?php
if ($_GET['id']) {
    $id = $_GET['id'];
    $result = selecserviceadmin($id);
}
if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    editserviceadmin($data, $id);
}
?>
<h1 class="pageLables">ویرایش سرویس</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                ویرایش سرویس
            </header>
            <div class="panel-body">
                <form role="form" method="post" action="">
                    <div class="form-group">
                        <label>عنوان سرویس</label>
                        <input value="<?php echo $result['title']; ?>" type="text" class="form-control"
                               name="frm[title]"
                               placeholder="عنوان سرویس را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label>توضیحات</label>
                        <textarea class="form-control"
                                  name="frm[description]"><?php echo $result['description']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>لینک سرویس</label>
                        <input value="<?php echo $result['url']; ?>"  type="text" class="form-control" name="frm[url]" placeholder="عنوان منو را وارد کنید">
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]" value="1"
                                <?php
                                if ($result['status'] == 1) {
                                    echo "checked";
                                }
                                ?>
                            >
                            فعال
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input <?php
                            if ($result['status'] == 0) {
                                echo "checked";
                            }
                            ?> type="radio" name="frm[status]" value="0">
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
