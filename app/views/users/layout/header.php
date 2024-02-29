<header class="d-flex">
    <div class="col-3" style="background-color:#154985;">
        <div class="row">
            <p class="d-inline-flex  ">
                <a class="btn_click-list" data-bs-toggle="collapse" href="#list_sp" role="button" aria-expanded="false" aria-controls="list_sp">Thiết bị công nghệ</a>
            </p>
            <div class="row">
                <div class="col-12 frame-item_item">
                    <ul class="navbar-nav col-12 collapse multi-collapse ps-3" id="list_sp">
                        <?php foreach ($listCategory as $item) : ?>
                            <li class="nav-item col-12 ">
                               <a  href="<?= ROOT_URL . "trangchitiet?alias=" . $item['alias']; ?>"><?= $item['names'] ?></a>
                            </li>
                        <?php endforeach ?>

                    </ul>

                </div>
            </div>
        </div>

        <div class="row ">
            <p class="d-inline-flex  active">
                <a class="btn_click-list" data-bs-toggle="collapse" href="#list_sp1" role="button" aria-expanded="false" aria-controls="list_sp1">Nhà cung cấp </a>
            </p>
            <div class="row  mt-2">
                <div class="col-12 frame-item_item">
                    <ul class="navbar-nav col-12 collapse multi-collapse ps-3" id="list_sp1">
                        <li class="nav-item col-12 ">
                            <a class="nav-link  " href="#">Điện thoại</a>
                        </li>
                        <li class="nav-item col-12  card-body ">
                            <a class="nav-link" href="#">Laptop</a>
                        </li>
                        <li class="nav-item col-12 -body ">
                            <a class="nav-link" href="#">Pc</a>
                        </li>
                        <li class="nav-item col-12  card-body">
                            <a class="nav-link" href="#">máy cũ</a>
                        </li>
                        <li class="nav-item col-12  card-body">
                            <a class="nav-link" href="#">Phụ kiện</a>
                        </li>

                    </ul>

                </div>
            </div>
        </div>


        <div class="row">
            <p class="d-inline-flex  ">
                <a class="btn_click-list" data-bs-toggle="collapse" href="#list_sp2" role="button" aria-expanded="false" aria-controls="list_sp2">Hàng Đặt biêt</a>
            </p>
            <div class="row  mt-2">
                <div class="col-12 frame-item_item">
                    <ul class="navbar-nav col-12 collapse multi-collapse ps-3" id="list_sp2">
                        <li class="nav-item col-12 ">
                            <a class="nav-link  list-group-item list-group-item-action " href="#">Điện
                                thoại</a>
                        </li>
                        <li class="nav-item col-12  card-body ">
                            <a class="nav-link" href="#">Laptop</a>
                        </li>
                        <li class="nav-item col-12 -body ">
                            <a class="nav-link" href="#">Pc</a>
                        </li>
                        <li class="nav-item col-12  card-body">
                            <a class="nav-link" href="#">máy cũ</a>
                        </li>
                        <li class="nav-item col-12  card-body">
                            <a class="nav-link" href="#">Phụ kiện</a>
                        </li>

                    </ul>

                </div>
            </div>
        </div>

    </div>
    <div class="col-9">
        <div id="carouselExample" class="carousel slide col-12" style="height: 400px;">
            <div class=" carousel-inner h-100  ">
                <div class="carousel-item active h-100  ">
                    <img src="./asset/img/ben01.png" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item h-100 ">
                    <img src="./asset/img/ben01.png" class="d-block w-100 h-100 " alt="...">
                </div>
                <div class="carousel-item h-100 ">
                    <img src="./asset/img/ben01.png" class="d-block w-100 h-100 " alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>
        </div>
    </div>

</header>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
