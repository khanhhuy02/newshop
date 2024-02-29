<nav class="navbar navbar-expand-lg  m-0 p-0 sticky-top" data-bs-theme="dark" style="background-color: #5d05ff; height: 90px;">
    <div class="container-fluid ">
        <a class="navbar-brand" href="/newshop/"><span class="text-info">New</span>shop.vn</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu_home">
                <li class="nav-item">
                    <a class="nav-link active " aria-current="page" href="/newshop/"><i class="fa-solid fa-house"></i>
                        Trang chủ</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-question"></i> Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-phone"></i> Liên hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-exclamation"></i> Góp ý</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hỏi đáp</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-regular fa-newspaper"></i> Tin tức</a>
                </li>

            </ul>

            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#"> <span><i class="fa-solid fa-cart-arrow-down"></i></span>
                        20000.đ</a>
                </li>
                <li>
                    <?php if (isset($_SESSION['names'])) 
                    
                    echo 
                    $_SESSION['names']; 
                    ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT_URL . "dangnhap" ?>">Đăng nhập</a>
                </li>



            </ul>

        </div>
    </div>
</nav>