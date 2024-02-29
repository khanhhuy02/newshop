<div class="container-fluid p-3 mt-2 " style="background-color: #cfeafe ; border-radius: 20px; ">
    <div class="row mt-5">
        <div class="col-12">
            <h4><a href="" class="text-decoration-none m-0 p-0 text-black"><?php echo $whereDetail['name'] ?> </a></h4>
        </div>
        <div class="row">
            <!--------------------- HÌNH ẢNH CHA ------------------->
            <div class="col-6" style="height: 400px;">
                <div class="card">
                    <div class="card-body">
                        <div id="item_produt" class="carousel slide col-12">
                            <div class=" carousel-inner h-100  ">
                                <div class="carousel-item active h-100 ">
                                    <img src="<?php echo $whereDetail['images'] ?>" class="d-block w-100" alt="...">
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#item_produt" data-bs-slide="prev">
                                <span aria-hidden="true" style="color: #000000;width: 40px;"><i class="fa-solid fa-chevron-left fa-2xl" style="color: #00040a;"></i></span>
                                <!-- <span class="visually-hidden"></span> -->
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#item_produt" data-bs-slide="next">
                                <span aria-hidden="true" style="color: #000000;width: 40px;"><i class="fa-solid fa-chevron-right fa-2xl" style="color: #00040a;"></i></span>
                                <!-- <span class="visually-hidden"></span> -->
                            </button>
                        </div>
                    </div>

                </div>
                <!---------------ENH HINH ẢNH CHA ------------>


                <!---------------------- HÌNH ẢNH CON ---------------------->
                <div class="row">
                    <div class="col-2 ">
                        <div class="card ">
                            <div class="card-body">
                                <img src="./../asset/product/iphone-15-pro-black-1.jpg" alt="" class="h-100 w-100">
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card">
                            <div class="card-body">
                                <img src="./../asset/product/iphone-15-pro-black-2.jpg" alt="" class="h-100 w-100">
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card">
                            <div class="card-body">
                                <img src="./../asset/product/iphone-15-pro-black-3.jpg" alt="" class="h-100 w-100">
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card">
                            <div class="card-body">
                                <img src="./../asset/product/iphone-15-pro-black-4.jpg" alt="" class="h-100 w-100">
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card">
                            <div class="card-body">
                                <img src="./../asset/product/iphone-15-pro-black-1.jpg" alt="" class="h-100 w-100">
                            </div>
                        </div>
                    </div>
                </div>
                <!---------------------- end HÌNH ẢNH CON ---------------------->



                <!----------------------số lượng hàng hóa-------------------- -->
                <div class="row">
                    <div class="col-12 ">
                        <div class="card ">
                            <div class="card-body">
                                <table class="table table-hover ">

                                    <tbody>
                                        <tr>
                                            <td style="color: #f50000;">Số lượng</td>
                                            <td>1000</td>
                                        </tr>
                                        <tr>
                                            <td class=" align-middle table-colspan " style="color: #f50000;" rowspan="2">khuyến mãi</td>
                                            <td>Thanh toán qua zalo pay giảm 5%</td>
                                        </tr>

                                        <tr>

                                            <td>Giảm 4% cho các thụ kiện khi mua kèm</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!----------------------end số lượng hàng hóa-------------------- -->

            </div>

            <div class="col-6">
                <div class="card ">
                    <div class="row text-center p-2 m-0">
                        <div class="col-6">
                            <h4 class="m-0 p-0" style="color:#fe0000 ;font-family: Roboto,sans-serif;">
                                <?php echo $whereDetail['price_new'] ?> <span>đ</span>
                            </h4>
                        </div>
                        <div class="col-6">
                            <h4 class="m-0 p-0" style="color:#8a8591fb ;font-family: Roboto,sans-serif;">
                                <del><?php echo $whereDetail['price_new'] ?> <span>đ</span></del>
                            </h4>
                        </div>
                    </div>
                </div>
                <!---------------------- THÔNG SỐ THIẾT BỊ DI ĐỘNG ---------------->
                <div class="card ">
                    <div class="card-header text-center">
                        <h4>Thông Số</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped ">

                            <tbody>
                                <tr>
                                    <td>Màn hình</td>
                                    <td>6.1 inch, OLED, Super Retina XDR, 2556 x 1179 Pixels
                                    </td>
                                </tr>
                                <tr>
                                    <td>Camera sau</td>
                                    <td>48.0 MP + 12.0 MP</td>
                                </tr>
                                <tr>
                                    <td>Camera Selfie</td>
                                    <td>12.0 MP</td>
                                </tr>
                                <tr>
                                    <td>RAM</td>
                                    <td>6 GB</td>
                                </tr>
                                <tr>
                                    <td>RAM</td>
                                    <td>6 GB</td>
                                </tr>
                                <tr>
                                    <td>Bộ nhớ trong</td>
                                    <td>128 GB</td>
                                </tr>
                                <tr>
                                    <td>CPU</td>
                                    <td>Apple A16 Bionic</td>
                                </tr>
                                <tr>
                                    <td>GPU</td>
                                    <td>Apple GPU 5 nhân</td>
                                </tr>
                                <tr>
                                    <td>Dung lượng pin</td>
                                    <td>24 Giờ</td>
                                </tr>
                                <tr>
                                    <td>Thẻ sim </td>
                                    <td>1 - 1 eSIM, 1 Nano SIM</td>
                                </tr>
                                <tr>
                                    <td>Hệ điều hành</td>
                                    <td>iOS 17</td>
                                </tr>
                                <tr>
                                    <td>Xuất xứ </td>
                                    <td>Trung Quốc</td>
                                </tr>
                                <tr>
                                    <td>Thời gian ra mắt</td>
                                    <td>09/2023</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!----------------------END THÔNG SỐ THIẾT BỊ DI ĐỘNG ---------------->


                <!-- thanh toán sản phẩm mua -->

                <div class="row mt-2">
                    <div class="col-12">
                        <div class="d-grid gap-2">
                            <button class="btn border " type="button" style=" background-color: rgb(255, 52, 52); color: #fddcdc; font-size: 1.5rem;">Mua
                                ngay</button>
                        </div>
                    </div>
                    <div class="col-6 mt-2">
                        <div class="d-grid gap-2">
                            <button class="btn border" type="button" style=" background-color: #5900ff; color: #fddcdc; font-size: 1.2rem;">TRẢ
                                GÓP</button>
                        </div>
                    </div>

                    <div class="col-6 mt-2">
                        <div class="d-grid gap-2">
                            <button class="btn border" type="button" style=" background-color:#5900ff; color: #fddcdc; font-size: 1.2rem;">THANH
                                TOÁN THẺ</button>
                        </div>
                    </div>


                </div>

            </div>


        </div>

    </div>


</div>


<div class="container-fluid">
    <div class="row border p-3 card" style="background-color: #fffafa;">
        <div class="row">
            <div class="col-12 mb-2">
                <h3>Đánh Giá sản phẩm</h3>
            </div>
            <div class="col-4 text-center">
                <p>Đánh Giá Trung Bình</p>
                <h1 style="color: red;">4/5</h1>
                <ul class="list_star m-0 p-0" style="list-style: none;">
                    <li class="nav-item"><i class="fa-solid fa-star" style="color: #f0e000;"></i></li>
                    <li class="nav-item"><i class="fa-solid fa-star" style="color: #f0e000;"></i></li>
                    <li class="nav-item"><i class="fa-solid fa-star" style="color: #f0e000;"></i></li>
                    <li class="nav-item"><i class="fa-solid fa-star" style="color: #f0e000;"></i></li>
                    <li class="nav-item"><i class="fa-solid fa-star" style="color: #000000;"></i></li>
                </ul>
            </div>
            <div class="col-4">

                <div class="thanh_pt"><span>5 </span><span><i class="fa-solid fa-star me-1" style="color: #f0e000;"></i></span>
                    <div class="tinh_pt ">
                        <div class="tinh_pt-01"></div>
                    </div><span class="pt"> 80%</span>
                </div>

                <div class="thanh_pt"><span>4 </span><span><i class="fa-solid fa-star me-1" style="color: #f0e000;"></i></span>
                    <div class="tinh_pt">
                        <div class="tinh_pt-02"></div>
                    </div> <span class="pt"> 50%</span>
                </div>
                <div class="thanh_pt"><span>3 </span><span><i class="fa-solid fa-star me-1" style="color: #f0e000;"></i></span>
                    <div class="tinh_pt">
                        <div class="tinh_pt-03"></div>
                    </div><span class="pt"> 40%</span>
                </div>

                <div class="thanh_pt"><span>2 </span><span><i class="fa-solid fa-star me-1" style="color: #f0e000;"></i></span>
                    <div class="tinh_pt">
                        <div class="tinh_pt-04"></div>
                    </div><span class="pt"> 0%</span>
                </div>
                <div class="thanh_pt"><span>1 </span><span><i class="fa-solid fa-star me-1" style="color: #f0e000;"></i></span>
                    <div class="tinh_pt">
                        <div class="tinh_pt-05"></div>
                    </div><span class="pt"> 0%</span>
                </div>



            </div>
            <div class="col-4 d-flex justify-content-center" style="align-items: center;">
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#senComment">Gửi bình luận</button>

            </div>
        </div>
    </div>

</div>



<!-- Bình luận sản phẩm-->
<div class="modal fade" id="senComment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">BÌNH LUẬN</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

 


            <form class="row g-3 needs-validation" action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">


                    <div class="col-md-12">
                        <label for="validationCustomUsername" class="form-label">Tên</label>
                        <input name="names" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    </div>

                    <input name="id_user" type="hidden" class="form-control" value="<?php echo $_SESSION['id']?>">
                    <input name="id_product" type="hidden" class="form-control" value="<?=$whereDetail['id']?>">

                    <div class="col-md-12">
                        <label for="validationCustomUsername" class="form-label">Nội Dung</label>
                        <textarea name="content" id="" cols="60" rows="6"></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- <button type="submit" name="luu" class="btn btn-primary">Save changes</button> -->
                    <button type="submit" name="luu">Tạo danh mục</button>

                </div>
            </form>
            
        </div>
    </div>
</div>




<div class="container-fluid">
    <div class="row border p-3 card" style="background-color: #e7e7e7;">
        <!-- khánh hàng bình luân -->
        <?php 
         
        foreach ( $evaluates as $evaluate):?>
        <div class="col-12">
            <div class="d-flex">
                <div class="" style="width: 50px; height: 50px; border-radius: 50%;">
                    <img src="/../asset/img/user.png" class=" w-100 h-100 rounded-circle" alt="...">
                </div>
                <div class="row">
                    <span class="mx-2"><?=  $evaluate['names'] ?></span>
                    <ul class="d-flex mx-3 p-0" style="list-style: none;">
                        <li class="nav-item"><i class="fa-solid fa-star" style="color: #f0e000;"></i></li>
                        <li class="nav-item"><i class="fa-solid fa-star" style="color: #f0e000;"></i></li>
                        <li class="nav-item"><i class="fa-solid fa-star" style="color: #f0e000;"></i></li>
                        <li class="nav-item"><i class="fa-solid fa-star" style="color: #f0e000;"></i></li>
                        <li class="nav-item"><i class="fa-solid fa-star" style="color: #000000;"></i></li>
                    </ul>
                </div>
            </div>

            <div class="col-11 mx-5 px-2" style="height: 100px;">
                <p><?=  $evaluate['content'] ?></p>
                <div class="d-flex m-0 p-0">
                    <p>3 ngày </p>
                    <span class="mx-2"><a href="" class=" text-decoration-none"><i class="fa-regular fa-thumbs-up" style="color: #256be4;"></i> (2)</a></span>
                    <span class="mx-1"><a href="" class=" text-decoration-none">trả lời</a></span>
                </div>
            </div>
        </div>
       <?php endforeach ?>
        <!-- enh khánh hàng bình luân -->


    </div>
</div>

<div class="container-fluid p-0 ">
    <div class="card">
        <div class="card-body">
            <div class="col-12">
                <h5>Sản Phẩm liên Quan</h5>
            </div>

            <div class="row">

                <div class="col-2">
                    <div class="card">
                        <div class="card-body" style="height: 342px;">
                            <div class="d-flex justify-content-between p-3">
                            </div>
                            <img src="../asset/product/638283976760946791_realme-c51-dd.webp" class="card-img-top w-100 h-50" alt="Laptop">
                            <div class="card-body">
                                <div class="text-center mb-3 price_sp">
                                    <a href="">
                                        <p class="mb-0">realme c51 </p>
                                    </a>
                                    <a href="">
                                        <p class="mb-0">230000</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-2">
                    <div class="card">
                        <div class="card-body" style="height: 342px;">
                            <div class="d-flex justify-content-between p-3">
                            </div>
                            <img src="../asset/product/638283976760946791_realme-c51-dd.webp" class="card-img-top w-100 h-50" alt="Laptop">
                            <div class="card-body">
                                <div class="text-center mb-3 price_sp">
                                    <a href="">
                                        <p class="mb-0">realme c51 </p>
                                    </a>
                                    <a href="">
                                        <p class="mb-0">230000</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-2">
                    <div class="card">
                        <div class="card-body" style="height: 342px;">
                            <div class="d-flex justify-content-between p-3">
                            </div>
                            <img src="../asset/product/638283976760946791_realme-c51-dd.webp" class="card-img-top w-100 h-50" alt="Laptop">
                            <div class="card-body">
                                <div class="text-center mb-3 price_sp">
                                    <a href="">
                                        <p class="mb-0">realme c51</p>
                                    </a>
                                    <a href="">
                                        <p class="mb-0">230000</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-2">
                    <div class="card">
                        <div class="card-body" style="height: 342px;">
                            <div class="d-flex justify-content-between p-3">
                            </div>
                            <img src="../asset/product/638283976760946791_realme-c51-dd.webp" class="card-img-top w-100 h-50" alt="Laptop">
                            <div class="card-body">
                                <div class="text-center mb-3 price_sp">
                                    <a href="">
                                        <p class="mb-0">realme c51 </p>
                                    </a>
                                    <a href="">
                                        <p class="mb-0">230000</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-2">
                    <div class="card">
                        <div class="card-body" style="height: 342px;">
                            <div class="d-flex justify-content-between p-3">
                            </div>
                            <img src="../asset/product/638283976760946791_realme-c51-dd.webp" class="card-img-top w-100 h-50" alt="Laptop">
                            <div class="card-body">
                                <div class="text-center mb-3 price_sp">
                                    <a href="">
                                        <p class="mb-0">realme c51 </p>
                                    </a>
                                    <a href="">
                                        <p class="mb-0">230000</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-2">
                    <div class="card">
                        <div class="card-body" style="height: 342px;">
                            <div class="d-flex justify-content-between p-3">
                            </div>
                            <img src="../asset/product/638283976760946791_realme-c51-dd.webp" class="card-img-top w-100 h-50" alt="Laptop">
                            <div class="card-body">
                                <div class="text-center mb-3 price_sp">
                                    <a href="">
                                        <p class="mb-0">realme c51 </p>
                                    </a>
                                    <a href="">
                                        <p class="mb-0">230000</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>





</div>