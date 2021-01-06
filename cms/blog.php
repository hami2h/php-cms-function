<?php
include_once 'header.php';
$row = selectallposts();


?>
<section id="page">
    <div class="container-fluid">
        <div class="col-lg-8 mb-5 mb-lg-0">
            <?php
            $connect = config();

            //define total number of results you want per page
            $results_per_page = 1;

            //find the total number of results stored in the database
            $query = "select * from post_tbl";
            $result = mysqli_query($connect, $query);
            $number_of_result = mysqli_num_rows($result);

            //determine the total number of pages available
            $number_of_page = ceil($number_of_result / $results_per_page);

            //determine which page number visitor is currently on
            if (!isset ($_GET['page'])) {
                $page = 1;
            } else {
                $page = $_GET['page'];
            }

            //determine the sql LIMIT starting number for the results on the displaying page
            $page_first_result = ($page - 1) * $results_per_page;

            //retrieve the selected results from database
            $query = "SELECT * FROM post_tbl LIMIT " . $page_first_result . ',' . $results_per_page;
            $result = mysqli_query($connect, $query);

            //display the retrieved result on the webpage
            while ($row = mysqli_fetch_array($result)) {
                $value[] = $row;
            }


            ?>
            <?php
            foreach ($value as $val):
                ?>
                <div class="blogbox">
                    <div class="blog_img"><img style="width: 200px;" src="<?php echo $val['pic']; ?>"></div>
                    <div>
                        <h4 style="text-align: right;color: #004a99"><?php echo $val['title']; ?></h4>
                    </div>
                    <div>
                        <p style="text-align: right;color: #000"><?php echo strip_tags(substr($val['text'], 0, 500)); ?></p>
                    </div>
                    <div>
                        <a href="<?php echo '/post.php?id=' . $val['id']; ?>"
                           style="text-align: left !important; color: #004a99;">ادامه
                            مطلب</a>
                        <span><?php echo $val['date']; ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
            <nav class="blog-pagination justify-content-center d-flex">
                <ul class="pagination">

                        <?php
                        //display the link of the pages in URL
                        for ($page = 1; $page <= $number_of_page; $page++) {
                            echo "<li class='page-item'>";
                            echo '<a class="page-link" href = "blog.php?page=' . $page . '">' . $page . ' </a>';
                            echo "</li>";
                        }
                        ?>


                </ul>
            </nav>
        </div>
        <div class="col-lg-4" style="float: right;">
            right
        </div>
    </div>
</section>
<?php
include_once 'footer.php';
?>
