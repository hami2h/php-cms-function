<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست منوها

            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th>عنوان</th>
                    <th>توضیحات</th>
                    <th>لینک</th>
                    <th>ترتیب</th>
                    <th>وضعیت</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $listmenu = listpropertyadmin();
                foreach ($listmenu as $list):
                    ?>
                    <tr>
                        <td><?php echo $list['title']; ?></td>
                        <td><?php echo $list['description']; ?></td>
                        <td><?php echo $list['url']; ?></td>
                        <td><?php echo $list['sort']; ?></td>
                        <td><?php
                            if ($list['status'] == 1) {
                                echo "فعال";
                            } else {
                                echo "غیر فعال";
                            }
                            ?></td>
                        <td>
                            <a href="dashboard.php?m=property&p=edit&id=<?php echo $list['id']; ?>">
                                <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                            </a>
                            <a href="dashboard.php?m=property&p=delete&id=<?php echo $list['id']; ?>">
                                <button class="btn btn-danger btn-xs"><i
                                            class="icon-trash "></i></button>
                            </a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
                </tbody>
            </table>
        </section>
    </div>
</div>