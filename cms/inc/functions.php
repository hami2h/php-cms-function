<?php
ob_start();
function config()
{
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cms";
    try {
        $connect = mysqli_connect($server, $username, $password, $dbname);
    } catch (Exception $e) {
        echo "Error in DB Connect" . $e->getMessage();
    }
    mysqli_query($connect, "SET NAMES 'UTF8'");
    mysqli_query($connect, "set character set utf-8");
    return $connect;
}

function sanitize($data)
{
    $san = trim($data);
    $san1 = htmlentities($san);
    $san2 = strip_tags($san1);
    $san3 = htmlspecialchars($san2);
    return $san3;
}

// Start Menu Func
function addmenu($data)
{
    $connect = config();
    $title = sanitize($data['title']);
    $url = sanitize($data['url']);
    $parent = sanitize($data['parent']);
    $status = sanitize($data['status']);
    $sort = sanitize($data['sort']);
    $sql = "insert into menu_tbl (title,url,chid,status,sort) values ('$title','$url','$parent','$status','$sort')";
    mysqli_query($connect, $sql);
    if (mysqli_affected_rows($connect) > 0) {
        echo "<span style='color:green;'>منو با موفقیت اضافه شد</span>";
    } else {
        echo "<span style='color:red;'>خطا در افزودن منو</span>";
    }
}

function selectmenuadmin()
{
    $connect = config();
    $sql = "select * from menu_tbl where chid=0";
    $result = mysqli_query($connect, $sql);
    while ($res = mysqli_fetch_assoc($result)) {
        $rows[] = $res;
    }
    return $rows;

}

function listmenuadmin()
{
    $connect = config();
    $sql = "select * from menu_tbl";
    $result = mysqli_query($connect, $sql);
    return $result;
}

function selectparentmenu($chid)
{
    $connect = config();
    $sql = "select * from menu_tbl where id=$chid";
    $result = mysqli_query($connect, $sql);
    $result = mysqli_fetch_assoc($result);
    return $result;
}

function deletemenuadmin($id)
{
    $connect = config();
    $sql = "delete from menu_tbl where id=$id";
    mysqli_query($connect, $sql);
}

function selectallmenuadmin($id)
{
    $connect = config();
    $sql = "select * from menu_tbl where id=$id";
    $result = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res;
}

function editmenuadmin($data, $id)
{
    $connect = config();
    $title = sanitize($data['title']);
    $url = sanitize($data['url']);
    $parent = sanitize($data['parent']);
    $status = sanitize($data['status']);
    $sort = sanitize($data['sort']);
    $sql = "UPDATE `menu_tbl` SET `title` = '$title', `url` = '$url', `sort` = '$sort', `status` = '$status', `chid` = '$parent' WHERE `menu_tbl`.`id` = $id;
";
    mysqli_query($connect, $sql);

    if ($connect) {
        echo "<span style='color:green;'>منو با ویرایش اضافه شد</span>";
    } else {
        echo "<span style='color:red;'>خطا در ویرایش منو</span>";
    }
}


function listmenuuser()
{
    $connect = config();
    $sql = "select * from menu_tbl where status='1' and chid='0' order by sort desc";
    $result = mysqli_query($connect, $sql);
    while ($rows = mysqli_fetch_assoc($result)) {
        $row[] = $rows;
    }
    return $row;
}

function listsubmenuuser($id)
{
    $connect = config();
    $sql = "select * from menu_tbl where status='1' and chid='$id' order by sort desc";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($rows = mysqli_fetch_assoc($result)) {
            $row[] = $rows;
        }
        return $row;
    }
}

// End Menu Func
/***********************************************/
// Start Services Func
function addservice($data)
{
    $connect = config();
    $title = sanitize($data['title']);
    $description = sanitize($data['description']);
    $status = sanitize($data['status']);
    $sort = sanitize($data['sort']);
    $url = sanitize($data['url']);
    $sql = "INSERT INTO `service_tbl` (`title`, `description`, `status`, `sort`, `url`) VALUES ('$title', '$description', '$status', '$sort', '$url');";
    mysqli_query($connect, $sql);
    if (mysqli_affected_rows($connect) > 0) {
        echo "<span style='color:green;'>سرویس با موفقیت اضافه شد</span>";
    } else {
        echo "<span style='color:red;'>سرویس در افزودن منو</span>";
    }
}

function listserviceadmin()
{
    $connect = config();
    $sql = "select * from service_tbl";
    $result = mysqli_query($connect, $sql);
    return $result;
}

function deleteserviceadmin($id)
{
    $connect = config();
    $sql = "delete from service_tbl where id=$id";
    mysqli_query($connect, $sql);
}

function selecserviceadmin($id)
{
    $connect = config();
    $sql = "select * from service_tbl where id=$id";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function editserviceadmin($data, $id)
{
    $connect = config();
    $title = sanitize($data['title']);
    $description = sanitize($data['description']);
    $status = sanitize($data['status']);
    $sort = sanitize($data['sort']);
    $url = sanitize($data['url']);
    $sql = "UPDATE `service_tbl` SET `title` = '$title', `description` = '$description', `sort` = '$sort', `status` = '$status', `url` = '$url' WHERE `service_tbl`.`id` = $id;
";
    mysqli_query($connect, $sql);
    if ($connect) {
        echo "<span style='color:green;'>منو با ویرایش اضافه شد</span>";
    } else {
        echo "<span style='color:red;'>خطا در ویرایش منو</span>";
    }
}

function selectallservice()
{
    $connect = config();
    $sql = "select * from service_tbl where `status` =1 order by `sort` asc";
    $result = mysqli_query($connect, $sql);
    while ($rows = mysqli_fetch_assoc($result)) {
        $row[] = $rows;
    }
    return $row;
}

// End Services Func
/***********************************************/
// Start Services Func
function addproperty($data)
{
    $connect = config();
    $title = sanitize($data['title']);
    $description = sanitize($data['description']);
    $status = sanitize($data['status']);
    $sort = sanitize($data['sort']);
    $url = sanitize($data['url']);
    $sql = "INSERT INTO `property_tbl` (`title`, `description`, `status`, `sort`, `url`) VALUES ('$title', '$description', '$status', '$sort', '$url');";
    mysqli_query($connect, $sql);
    if (mysqli_affected_rows($connect) > 0) {
        echo "<span style='color:green;'>ویژگی با موفقیت اضافه شد</span>";
    } else {
        echo "<span style='color:red;'>خطا در افزودن ویژگی</span>";
    }
}

function listpropertyadmin()
{
    $connect = config();
    $sql = "select * from property_tbl";
    $result = mysqli_query($connect, $sql);
    return $result;
}

function deletepropertyadmin($id)
{
    $connect = config();
    $sql = "delete from property_tbl where id=$id";
    mysqli_query($connect, $sql);
}

function selecpropertyadmin($id)
{
    $connect = config();
    $sql = "select * from property_tbl where id=$id";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function editpropertyadmin($data, $id)
{
    $connect = config();
    $title = sanitize($data['title']);
    $description = sanitize($data['description']);
    $status = sanitize($data['status']);
    $sort = sanitize($data['sort']);
    $url = sanitize($data['url']);
    $sql = "UPDATE `property_tbl` SET `title` = '$title', `description` = '$description', `sort` = '$sort', `status` = '$status', `url` = '$url' WHERE `property_tbl`.`id` = $id;
";
    mysqli_query($connect, $sql);
    if ($connect) {
        echo "<span style='color:green;'>منو با ویرایش اضافه شد</span>";
    } else {
        echo "<span style='color:red;'>خطا در ویرایش منو</span>";
    }
}

function selectallproperty()
{
    $connect = config();
    $sql = "select * from property_tbl where `status` =1 order by `sort` asc";
    $result = mysqli_query($connect, $sql);
    while ($rows = mysqli_fetch_assoc($result)) {
        $row[] = $rows;
    }
    return $row;
}

// End Property Func
/***********************************************/
// Upload Function
function upload($file)
{
    if (!$file['size'] == 0) {
        $name = explode('.', $file['name']);
        $ext = end($name);
        $newname = uniqid() . rand(0, 2000) . "." . $ext;
        $from = $file['tmp_name'];
        $to = "../img/pic/" . $newname;
        move_uploaded_file($from, $to);
        return $to;
    } else {
        //echo "Error To Upload";
    }
}

// Upload Function
/***********************************************/
// Start Team Func
function addteam($data, $file)
{
    $connect = config();
    $name = sanitize($data['name']);
    $pos = sanitize($data['pos']);
    $status = sanitize($data['status']);
    $sort = sanitize($data['sort']);
    $insta = sanitize($data['insta']);
    $link = sanitize($data['link']);
    $pic = upload($file);
    $sql = "INSERT INTO `team_tbl` (`name`, `pos`, `status`, `sort`, `insta`, `link`, `pic`) VALUES ('$name', '$pos', '$status', '$sort', '$insta', '$link', '$pic');";
    mysqli_query($connect, $sql);
    if (mysqli_affected_rows($connect) > 0) {
        echo "<span style='color:green;'>عضو با موفقیت اضافه شد</span>";
    } else {
        echo "<span style='color:red;'>خطا در افزودن عضو</span>";
    }
}

function listteamadmin()
{
    $connect = config();
    $sql = "select * from team_tbl";
    $result = mysqli_query($connect, $sql);
    return $result;
}

function selectteamadmin($id)
{
    $connect = config();
    $sql = "select * from team_tbl where id=$id";
    $result = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res;
}

function selectpicteamadmin($id)
{
    $connect = config();
    $sql = "select * from team_tbl where id=$id";
    $result = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($result);
    unlink($res['pic']);
}

function deleteteamadmin($id)
{
    $connect = config();
    selectpicteamadmin($id);
    $sql = "delete from team_tbl where id=$id";
    mysqli_query($connect, $sql);
}

function editteamadmin($data, $id, $file)
{
    $connect = config();
    $name = sanitize($data['name']);
    $pos = sanitize($data['pos']);
    $status = sanitize($data['status']);
    $sort = sanitize($data['sort']);
    $insta = sanitize($data['insta']);
    $link = sanitize($data['link']);
    $pic = upload($file);
    if (!empty($pic)) {
        $img = $pic;
    } else {
        $oldimg = selectteamadmin($id);
        $img = $oldimg['pic'];
    }
    $sql = "UPDATE `team_tbl` SET `name` = '$name', `pos` = '$pos', `sort` = '$sort', `status` = '$status', `link` = '$link', `insta` = '$insta' , `pic` = '$img' WHERE `team_tbl`.`id` = $id;
";
    mysqli_query($connect, $sql);
    if ($connect) {
        echo "<span style='color:green;'>عضو با ویرایش اضافه شد</span>";
    } else {
        echo "<span style='color:red;'>خطا در ویرایش عضو</span>";
    }
}

function selectallteam()
{
    $connect = config();
    $sql = "select * from team_tbl where `status` =1 order by `sort` asc";
    $result = mysqli_query($connect, $sql);
    while ($rows = mysqli_fetch_assoc($result)) {
        $row[] = $rows;
    }
    return $row;
}

// End Team Func
/***********************************************/
// Start Project Func
function addproject($data, $file)
{
    $connect = config();
    $title = sanitize($data['title']);
    $description = sanitize($data['description']);
    $status = sanitize($data['status']);
    $sort = sanitize($data['sort']);
    $filter = sanitize($data['filter']);
    $link = sanitize($data['link']);
    $pic = upload($file);
    $sql = "INSERT INTO `project_tbl` (`title`, `description`, `status`, `sort`, `filter`, `link`, `pic`) VALUES ('$title', '$description', '$status', '$sort', '$filter', '$link', '$pic');";
    mysqli_query($connect, $sql);
    if (mysqli_affected_rows($connect) > 0) {
        echo "<span style='color:green;'>پروژه با موفقیت اضافه شد</span>";
    } else {
        echo "<span style='color:red;'>خطا در افزودن پروژه</span>";
    }
}

function listprojectadmin()
{
    $connect = config();
    $sql = "select * from project_tbl";
    $result = mysqli_query($connect, $sql);
    return $result;
}

function selectpicprojectadmin($id)
{
    $connect = config();
    $sql = "select * from project_tbl where id=$id";
    $result = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($result);
    unlink($res['pic']);
}

function deleteprojectadmin($id)
{
    $connect = config();
    selectpicprojectadmin($id);
    $sql = "delete from project_tbl where id=$id";
    mysqli_query($connect, $sql);
}

function selectprojectadmin($id)
{
    $connect = config();
    $sql = "select * from project_tbl where id=$id";
    $result = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res;
}

function editprojectadmin($data, $id, $file)
{
    $connect = config();
    $title = sanitize($data['title']);
    $description = sanitize($data['description']);
    $status = sanitize($data['status']);
    $sort = sanitize($data['sort']);
    $filter = sanitize($data['filter']);
    $link = sanitize($data['link']);
    $pic = upload($file);
    if (!empty($pic)) {
        $img = $pic;
    } else {
        $oldimg = selectprojectadmin($id);
        $img = $oldimg['pic'];
    }
    $sql = "UPDATE `project_tbl` SET `title` = '$title', `description` = '$description', `sort` = '$sort', `status` = '$status', `link` = '$link', `filter` = '$filter' , `pic` = '$img' WHERE `project_tbl`.`id` = $id;
";
    mysqli_query($connect, $sql);
    if ($connect) {
        echo "<span style='color:green;'>پروژه با ویرایش اضافه شد</span>";
    } else {
        echo "<span style='color:red;'>خطا در ویرایش پروژه</span>";
    }
}

function selectallproject()
{
    $connect = config();
    $sql = "select * from project_tbl where `status` =1 order by `sort` asc";
    $result = mysqli_query($connect, $sql);
    while ($rows = mysqli_fetch_assoc($result)) {
        $row[] = $rows;
    }
    return $row;
}

// End Project Func
/***********************************************/
// Start Project Cat Func
function addprojectcat($data)
{
    $connect = config();
    $name = sanitize($data['name']);
    $slug = sanitize($data['slug']);
    $status = sanitize($data['status']);
    $sql = "INSERT INTO `project_cat_tbl` (`name`, `status`, `slug`) VALUES ('$name', '$status', '$slug');";
    mysqli_query($connect, $sql);
    if (mysqli_affected_rows($connect) > 0) {
        echo "<span style='color:green;'>دسته بندی با موفقیت اضافه شد</span>";
    } else {
        echo "<span style='color:red;'>خطا در افزودن دسته بندی</span>";
    }
}

function listprojectcatadmin()
{
    $connect = config();
    $sql = "select * from project_cat_tbl";
    $result = mysqli_query($connect, $sql);
    return $result;
}

function deleteprojectcatadmin($id)
{
    $connect = config();
    $sql = "delete from project_cat_tbl where id=$id";
    mysqli_query($connect, $sql);
}

function selectprojectcatadmin($id)
{
    $connect = config();
    $sql = "select * from project_cat_tbl where id=$id";
    $result = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res;
}

function editprojectcatadmin($data, $id)
{
    $connect = config();
    $name = sanitize($data['name']);
    $slug = sanitize($data['slug']);
    $status = sanitize($data['status']);
    $sql = "UPDATE `project_cat_tbl` SET `name` = '$name', `slug` = '$slug', `status` = '$status' WHERE `project_cat_tbl`.`id` = $id;
";
    mysqli_query($connect, $sql);
    if ($connect) {
        echo "<span style='color:green;'>منو با ویرایش اضافه شد</span>";
    } else {
        echo "<span style='color:red;'>خطا در ویرایش منو</span>";
    }
}

function selectallprojectcat()
{
    $connect = config();
    $sql = "SELECT * FROM `project_cat_tbl` WHERE `status` = '1'";
    $result = mysqli_query($connect, $sql);
    while ($rows = mysqli_fetch_assoc($result)) {
        $row[] = $rows;
    }
    return $row;
}

// End Project Cat Func
/***********************************************/
// Start Testimonial Func
function addtestimonial($data, $file)
{
    $connect = config();
    $name = sanitize($data['name']);
    $pos = sanitize($data['pos']);
    $status = sanitize($data['status']);
    $sort = sanitize($data['sort']);
    $about = sanitize($data['about']);
    $pic = upload($file);
    $sql = "INSERT INTO `testimonial_tbl` (`name`, `pos`, `status`, `sort`, `about`, `pic`) VALUES ('$name', '$pos', '$status', '$sort', '$about', '$pic');";
    mysqli_query($connect, $sql);
    if (mysqli_affected_rows($connect) > 0) {
        echo "<span style='color:green;'>عضو با موفقیت اضافه شد</span>";
    } else {
        echo "<span style='color:red;'>خطا در افزودن عضو</span>";
    }
}

function listtestimonialadmin()
{
    $connect = config();
    $sql = "select * from testimonial_tbl";
    $result = mysqli_query($connect, $sql);
    return $result;
}

function selecttestimonialadmin($id)
{
    $connect = config();
    $sql = "select * from testimonial_tbl where id=$id";
    $result = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res;
}

function selectpictestimonialadmin($id)
{
    $connect = config();
    $sql = "select * from testimonial_tbl where id=$id";
    $result = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($result);
    unlink($res['pic']);
}

function deletetestimonialadmin($id)
{
    $connect = config();
    selectpictestimonialadmin($id);
    $sql = "delete from testimonial_tbl where id=$id";
    mysqli_query($connect, $sql);
}

function edittestimonialadmin($data, $id, $file)
{
    $connect = config();
    $name = sanitize($data['name']);
    $pos = sanitize($data['pos']);
    $status = sanitize($data['status']);
    $sort = sanitize($data['sort']);
    $about = sanitize($data['about']);
    $pic = upload($file);
    if (!empty($pic)) {
        $img = $pic;
    } else {
        $oldimg = selecttestimonialadmin($id);
        $img = $oldimg['pic'];
    }
    $sql = "UPDATE `testimonial_tbl` SET `name` = '$name', `pos` = '$pos', `sort` = '$sort', `status` = '$status', `about` = '$about', `pic` = '$img' WHERE `testimonial_tbl`.`id` = $id;
";
    mysqli_query($connect, $sql);
    if ($connect) {
        echo "<span style='color:green;'>عضو با ویرایش اضافه شد</span>";
    } else {
        echo "<span style='color:red;'>خطا در ویرایش عضو</span>";
    }
}

function selectalltestimonial()
{
    $connect = config();
    $sql = "select * from testimonial_tbl where `status` =1 order by `sort` asc";
    $result = mysqli_query($connect, $sql);
    while ($rows = mysqli_fetch_assoc($result)) {
        $row[] = $rows;
    }
    return $row;
}

// End Testimonial Func
/***********************************************/
// Start Page Func
function addpage($data, $file)
{
    $connect = config();
    $title = sanitize($data['title']);
    $text = $data['text'];
    $status = sanitize($data['status']);
    $slug = sanitize($data['slug']);
    $pic = upload($file);
    $sql = "INSERT INTO `page_tbl` (`title`, `text`, `status`, `slug`, `pic`) VALUES ('$title', '$text', '$status', '$slug', '$pic');";
    mysqli_query($connect, $sql);
    if (mysqli_affected_rows($connect) > 0) {
        echo "<span style='color:green;'>صفحه با موفقیت اضافه شد</span>";
    } else {
        echo "<span style='color:red;'>خطا در افزودن صفحه</span>";
    }
}

function listpageadmin()
{
    $connect = config();
    $sql = "select * from page_tbl";
    $result = mysqli_query($connect, $sql);
    return $result;
}

function selectpageadmin($id)
{
    $connect = config();
    $sql = "select * from page_tbl where id=$id";
    $result = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res;
}

function selectpicpageadmin($id)
{
    $connect = config();
    $sql = "select * from page_tbl where id=$id";
    $result = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($result);
    unlink($res['pic']);
}

function deletepageadmin($id)
{
    $connect = config();
    selectpicpageadmin($id);
    $sql = "delete from page_tbl where id=$id";
    mysqli_query($connect, $sql);
}

function editpageaadmin($data, $id, $file)
{
    $connect = config();
    $title = sanitize($data['title']);
    $text = $data['text'];
    $status = sanitize($data['status']);
    $slug = sanitize($data['slug']);
    $pic = upload($file);
    if (!empty($pic)) {
        $img = $pic;
    } else {
        $oldimg = selectpageadmin($id);
        $img = $oldimg['pic'];
    }
    $sql = "UPDATE `page_tbl` SET `title` = '$title', `text` = '$text', `slug` = '$slug', `status` = '$status', `pic` = '$img' WHERE `page_tbl`.`id` = $id;
";
    mysqli_query($connect, $sql);
    if ($connect) {
        echo "<span style='color:green;'>صفحه با ویرایش اضافه شد</span>";
    } else {
        echo "<span style='color:red;'>خطا در ویرایش صفحه</span>";
    }
}

function selectpageuser($id)
{
    $connect = config();
    $sql = "select * from page_tbl where id='$id'";
    $result = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res;
}

// End Page Func
/***********************************************/
// Start Site Setting Func
function listsettadmin()
{
    $connect = config();
    $sql = "select * from setting_tbl";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function editsettingadmin($data, $file)
{
    $connect = config();
    $title = sanitize($data['title']);
    $description = sanitize($data['description']);
    $keywords = sanitize($data['keywords']);
    $copyright = sanitize($data['copyright']);
    $pic = upload($file);
    if (!empty($pic)) {
        $img = $pic;
    } else {
        $oldimg = listsettadmin();
        $img = $oldimg['logo'];
    }
    $sql = "UPDATE `setting_tbl` SET `logo` = '$img', `copyright` = '$copyright', `keywords` = '$keywords', `description` = '$description', `title` = '$title' WHERE `setting_tbl`.`id` = 1;";
    mysqli_query($connect, $sql);
    if ($connect) {
        echo "<span style='color:green;'>تنظیمات با موفقیت ویرایش شد</span>";
    } else {
        echo "<span style='color:red;'>خطا در ویرایش تنظیمات</span>";
    }
}

// End Site Setting Func
/***********************************************/
// Start Post Func
function addpost($data, $file)
{
    $connect = config();
    $title = sanitize($data['title']);
    $text = $data['text'];
    $status = sanitize($data['status']);
    $slug = sanitize($data['slug']);
    $pic = upload($file);
    $date = date("Y/m/d");
    $sql = "INSERT INTO `post_tbl` (`title`, `text`, `status`, `slug`, `pic`,`date`) VALUES ('$title', '$text', '$status', '$slug', '$pic','$date');";
    mysqli_query($connect, $sql);
    if (mysqli_affected_rows($connect) > 0) {
        echo "<span style='color:green;'>نوشته با موفقیت اضافه شد</span>";
    } else {
        echo "<span style='color:red;'>خطا در افزودن نوشته</span>";
    }
}

function listpostadmin()
{
    $connect = config();
    $sql = "select * from post_tbl";
    $result = mysqli_query($connect, $sql);
    return $result;
}

function selectpostadmin($id)
{
    $connect = config();
    $sql = "select * from post_tbl where id=$id";
    $result = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res;
}

function selectpicpostadmin($id)
{
    $connect = config();
    $sql = "select * from post_tbl where id=$id";
    $result = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($result);
    unlink($res['pic']);
}

function deletepostadmin($id)
{
    $connect = config();
    selectpicpostadmin($id);
    $sql = "delete from post_tbl where id=$id";
    mysqli_query($connect, $sql);
}

function editpostadmin($data, $id, $file)
{
    $connect = config();
    $title = sanitize($data['title']);
    $text = $data['text'];
    $status = sanitize($data['status']);
    $slug = sanitize($data['slug']);
    $pic = upload($file);
    $date = date("Y/m/d");
    if (!empty($pic)) {
        $img = $pic;
    } else {
        $oldimg = selectpostadmin($id);
        $img = $oldimg['pic'];
    }
    $sql = "UPDATE `post_tbl` SET `title` = '$title', `text` = '$text', `slug` = '$slug', `status` = '$status', `pic` = '$img',`date` = '$date' WHERE `post_tbl`.`id` = $id;
";
    mysqli_query($connect, $sql);
    if ($connect) {
        echo "<span style='color:green;'>نوشته با ویرایش اضافه شد</span>";
    } else {
        echo "<span style='color:red;'>خطا در ویرایش نوشته</span>";
    }
}

function selectpostuser($id)
{
    $connect = config();
    $sql = "select * from post_tbl where id='$id'";
    $result = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res;
}

// End Post Func
/***********************************************/
// Start Blog Func
function selectallposts()
{
    $connect = config();
    $sql = "select * from post_tbl";
    $result = mysqli_query($connect, $sql);
    while ($rows = mysqli_fetch_assoc($result)) {
        $row[] = $rows;
    }
    return $row;
}