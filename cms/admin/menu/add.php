<?php
if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    addmenu($data);
}
?>
<h1 class="pageLables">افزودن منو جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                افزودن منو جدید به سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" action="">
                    <div class="form-group">
                        <label>عنوان منو</label>
                        <input type="text" class="form-control" name="frm[title]" placeholder="عنوان منو را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label>آدرس</label>
                        <input type="text" class="form-control" name="frm[url]" placeholder="آدرس منو">
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
                    <div class="form-group">
                        <label>سرگروه</label>
                        <select class="form-control input-lg m-bot15" name="frm[parent]">
                            <option value="0">سرگروه</option>
                            <?php
                            $result = selectmenuadmin();
                            while ($rows = mysqli_fetch_assoc($result)) {
                                echo "<option value='$rows[id]'>$rows[title]</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
