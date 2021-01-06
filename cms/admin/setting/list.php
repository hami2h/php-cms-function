<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                تنظیمات سایت

            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th>عنوان سایت</th>
                    <th>لوگو</th>
                    <th>متن کپی رایت</th>
                    <th>کلمات کلیدی</th>
                    <th>توضیحات</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $list = listsettadmin();

                ?>
                <tr>
                    <td><?php echo $list['title']; ?></td>
                    <td><img src="<?php echo $list['logo']; ?>" width="200"></td>
                    <td><?php echo $list['copyright']; ?></td>
                    <td><?php echo $list['keywords']; ?></td>
                    <td><?php echo $list['description']; ?></td>
                    <td>
                        <a href="dashboard.php?m=setting&p=edit">
                            <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </section>
    </div>
</div>