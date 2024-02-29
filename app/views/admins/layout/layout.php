<?php
include_once "header.php";
?>

<!-- MENU HOME BÊN TRÁI -->
<?php
include_once "menuHome.php";
?>
<!--END MENU HOME BÊN TRÁI  -->
<section class="main_content dashboard_part large_header_bg">
    <!-- MENU HOME BÊN PHẢI TRÊN  -->

    <?php
    include_once "menuRight.php";
    ?>
    <!-- MENU HOME BÊN PHẢI TRÊN  -->
    <div class="main_content_iner overly_inner ">
        <!-- nôi đung bài viết  -->
        <?php
        // include_once "conten.php";
        ?>
         <?php include "$viewnoidung" ?>
        <!-- end nội dung bài viết -->

    </div>

    <?php

    include_once "footer.php";

    ?>


