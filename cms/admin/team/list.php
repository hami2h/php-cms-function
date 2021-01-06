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
                    <th>سمت</th>
                    <th>اینستا</th>
                    <th>لینکدین</th>
                    <th>عکس</th>
                    <th>ترتیب</th>
                    <th>وضعیت</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $listmenu = listteamadmin();
                foreach ($listmenu as $list):
                    ?>
                    <tr>
                        <td><?php echo $list['name']; ?></td>
                        <td><?php echo $list['pos']; ?></td>
                        <td><?php echo $list['insta']; ?></td>
                        <td><?php echo $list['link']; ?></td>
                        <td><img src="<?php echo $list['pic']; ?>" width="100px"></td>
                        <td><?php echo $list['sort']; ?></td>
                        <td><?php
                            if ($list['status'] == 1) {
                                echo "فعال";
                            } else {
                                echo "غیر فعال";
                            }
                            ?></td>
                        <td>
                            <a href="dashboard.php?m=team&p=edit&id=<?php echo $list['id']; ?>">
                                <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                            </a>
                            <a href="dashboard.php?m=team&p=delete&id=<?php echo $list['id']; ?>">
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