<?php
if ($_GET['id']) {
    $id = $_GET['id'];
    $result = selectallmenuadmin($id);
}
if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    editmenuadmin($data, $id);
}
?>
<h1 class="pageLables">ویرایش منو</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                ویرایش منو
            </header>
            <div class="panel-body">
                <form role="form" method="post" action="">
                    <div class="form-group">
                        <label>عنوان منو</label>
                        <input value="<?php echo $result['title']; ?>" type="text" class="form-control"
                               name="frm[title]"
                               placeholder="عنوان منو را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label>آدرس</label>
                        <input value="<?php echo $result['url']; ?>" type="text" class="form-control" name="frm[url]"
                               placeholder="آدرس منو">
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
                    <div class="form-group">
                        <label>سرگروه</label>
                        <select class="form-control input-lg m-bot15" name="frm[parent]">
                            <option value="0">سرگروه</option>
                            <?php
                            $sargoroh = selectmenuadmin();
                            foreach ($sargoroh as $sar) {
                                echo "<option ";
                                if ($result['chid'] == $sar['id']) {
                                    echo " selected ";
                                }
                                echo " value='$sar[id]'>$sar[title]</option> ";
                            }
                            ?>
                        </select>
                    </div>

                    <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>
