<?php
require 'model/configs.php';
require 'model/BaseModel.php';
require 'model/PostModel.php';

$bai_viet = new PostModel();
$bai_viet_bao_tang = $bai_viet->lay3BaiVietBaoTangLichSu();
$bai_viet_cong_trinh = $bai_viet->layBaiVietCacCongTrinhGiaoThong();
$bai_viet_ven_song = $bai_viet->layBaiVietDiaDiemVanSong();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nguyễn Văn An - 22002070 - Sông Sài Gòn,con sông thành phố tôi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./public/css/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b3b3d8ed41.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="d-flex justify-content-around  align-items-center">
        <a href="trang_chitiet.php"><img class="logo_header border rounded-circle" src="./public/imgs/UBND_TP_HCM.png" alt=""></a>
        <h1>Hội thi Học sinh, sinh viên giỏi nghề</h1>
    </header>
    <nav class="home_nav">
        <ul class=" justify-content-start h-100 mb-0 d-flex ">
            <li class="h-100 mx-2 d-flex"><a class="d-flex text-light align-items-center h-100 text-decoration-none fs-5 fw-bold px-2" href="trangchu.php">Trang chủ</a></li>
            <li class="h-100 mx-2 d-flex"><a class="d-flex text-light align-items-center h-100 text-decoration-none fs-5 fw-bold px-2" href="tranggioithieu.php">Giới thiệu</a></li>
            <li class="h-100 mx-2 d-flex"><a class="d-flex text-light align-items-center h-100 text-decoration-none fs-5 fw-bold px-2" href="trang_danh_muc.php">Bài viết</a></li>
            <li class="h-100 mx-2 d-flex"><a class="d-flex text-light align-items-center h-100 text-decoration-none fs-5 fw-bold px-2" href="">Liên hệ</a></li>
        </ul>
    </nav>
    <article class="container home_container">
        <section class="home_content my-3 row mx-md-5 my-3 border rounded-3">
            <div class="col-md-3 col-12 p-0 border rounded" style="overflow: hidden;max-height: 200px;"><img class="d-block w-100 home_content_img border rounded" src="public/imgs/song_saigon.jfif" alt=""></div>
            <div class="col-md-9 col-12">
                <div class="row h-auto" style="min-height:100%;">
                    <div class="col-12 bg-warning border rounded text-light fw-bold">Sông Sài Gòn - con sông thành phố tôi</div>
                    <div class="col-12 h-50">Mô tả</div>
                    <div class="col-12 text-end"><a class="more" href="tranggioithieu.php">Xem thêm</a></div>
                </div>
            </div>
        </section>
        <section class="home_content_1 my-3 row mx-md-5 my-3 border rounded">
            <div class="col-12 bg-warning border rounded text-light fw-bold">Bảo tàng, di tích lịch sử</div>
            <div class="col-12 d-flex h-50 w-100 p-2">
                <div class="row row-cols-sm-3 row-cols-1 g-2 w-100 ds_bai_viet_bao_tang h-auto">
                    <?php foreach($bai_viet_bao_tang as $bv):?>
                    <div class="col bai_viet_bao_tang">
                        <div class="card h-100" style="width: 100%;">
                            <div class="img_box rounded-top">
                                <img src="./public/imgs/baotang1.jfif" class="card-img-top home_content_img border rounded-top" alt="...">
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between">
                              <h5 class="card-title tieu_de"><?php echo $bv['tieu_de'] ?></h5>
                              <p class="card-text"><?php echo $bv['mo_ta_ngan'] ?></p>
                              <div class="d-flex justify-content-between">
                                <div class="d-flex justify-content-between">
                                    <p class="mx-2"><?php echo $bv['luot_thich'] ?><i class="fa-solid fa-thumbs-up fa-2xs"></i></p>
                                    <p class="mx-2"><?php echo $bv['luot_xem'] ?><i class="fa-solid fa-eye fa-2xs"></i></p>
                                </div>
                                <a href="trang_chitiet.php?id=<?php echo $bv['id'] ?>" class="more text-end">Xem thêm</a>
                              </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <p class="col-12 bg-primary border rounded-bottom text-light text-center py-1 more tai_them_bai_viet">Tải thêm</p>
        </section>
        <section class="home_content_1 my-3 row mx-md-5 my-3 border rounded">
            <div class="col-12 bg-warning border rounded text-light fw-bold">Địa điểm ven sông</div>
            <div class="col-12 d-flex h-50 w-100 p-2">
                <div class="row row-cols-sm-3 row-cols-1 g-2 w-100">
                    <div class="col">
                        <div class="card h-100" style="width: 100%;">
                            <div class="img_box rounded-top">
                                <img src="./public/imgs/vensong1.jfif" class="card-img-top home_content_img border rounded-top" alt="...">
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between">
                              <h5 class="card-title">Ven sông 1</h5>
                              <p class="card-text">Mô tả</p>
                              <a href="trang_chitiet.php" class="more text-end">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 100%;">
                            <div class="img_box rounded-top">
                                <img src="./public/imgs/vensong2.jfif" class="card-img-top home_content_img border rounded-top" alt="...">
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between">
                              <h5 class="card-title">Ven sông 2</h5>
                              <p class="card-text">Mô tả</p>
                              <a href="trang_chitiet.php" class="more text-end">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card  h-100" style="width: 100%;">
                            <div class="img_box rounded-top">
                                <img src="./public/imgs/vensong3.jfif" class="card-img-top home_content_img border rounded-top" alt="...">
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between">
                              <h5 class="card-title">Ven sông 3</h5>
                              <p class="card-text">Mô tả</p>
                              <a href="trang_chitiet.php" class="more text-end">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="trang_chitiet.php" class="col-12 bg-primary border rounded-bottom text-light text-center py-1 more">Tải thêm</a>
        </section>
        <section class="home_content_1 my-3 row mx-md-5 my-3 border rounded">
            <div class="col-12 bg-warning border rounded text-light fw-bold">Các công trình giao thông</div>
            <div class="col-12 d-flex h-50 w-100 p-2">
                <div class="row row-cols-sm-3 row-cols-1 g-2 w-100">
                    <div class="col">
                        <div class="card h-100" style="width: 100%;">
                            <div class="img_box rounded-top">
                                <img src="./public/imgs/giaothong1.jfif" class="card-img-top home_content_img border rounded-top" alt="...">
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between">
                              <h5 class="card-title">Giao thông 1</h5>
                              <p class="card-text">Mô tả</p>
                              <a href="trang_chitiet.php" class="more text-end">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="width: 100%;">
                            <div class="img_box rounded-top">
                                <img src="./public/imgs/giaothong2.jfif" class="card-img-top home_content_img border rounded-top" alt="...">
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between">
                              <h5 class="card-title">Giao thông 2</h5>
                              <p class="card-text">Mô tả</p>
                              <a href="trang_chitiet.php" class="more text-end">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card  h-100" style="width: 100%;">
                            <div class="img_box rounded-top">
                                <img src="./public/imgs/giaothong3.jfif" class="card-img-top home_content_img border rounded-top" alt="...">
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between">
                              <h5 class="card-title">Giao thông 3</h5>
                              <p class="card-text">Mô tả</p>
                              <a href="trang_chitiet.php" class="more text-end">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="trang_chitiet.php" class="col-12 bg-primary border rounded-bottom text-light text-center py-1 more">Tải thêm</a>
        </section>
    </article>
    <footer class="mt-5 w-100 border rounded-bottom container-fluid">
        <div class="row">
            <img class="col-6 " src="/Phan01/public/imgs/thanh doan tphcm.png" alt="">
            <div class="col-6">
                <div class="row text-light">
                    <div class="col-12">Bản quyền: Thành Đoàn TP.HCM, thông tin liên hệ Thành Đoàn TP.HCM</div>
                    <div class="col-12">Địa chỉ: Số 1 Phạm Ngọc Thạch, Quận 1, TP HCM </div>
                    <div class="col-12">Email: thanhdoan@tphcm.gov.vn</div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        $(document).ready(function() {
            $(".tai_them_bai_viet").click(function(){
                link_url='api/tai_bai_viet.php?danh_muc_id=1'
                $.ajax({url:link_url, success: function(result){
                    var data=jQuery.parseJSON(result);
                    $.each(data,function(index,value){
                        $new_row=`<div class="col bai_viet_bao_tang">
                                        <div class="card h-100" style="width: 100%;">
                                            <div class="img_box rounded-top">
                                                <img src="./public/imgs/baotang1.jfif" class="card-img-top home_content_img border rounded-top" alt="...">
                                            </div>
                                            <div class="card-body d-flex flex-column justify-content-between">
                                                <h5 class="card-title">${value.tieu_de}</h5>
                                                <p class="card-text">${value.mo_ta_ngan}</p>
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mx-2">${value.luot_thich}<i class="fa-solid fa-thumbs-up fa-2xs"></i></p>
                                                        <p class="mx-2">${value.luot_xem}<i class="fa-solid fa-eye fa-2xs"></i></p>
                                                    </div>
                                                    <a href="trang_chitiet.php?id=${value.id}" class="more text-end">Xem thêm</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>`

                        $('.ds_bai_viet_bao_tang').append($new_row);
                    })
                }})
            })
        })
    </script>
</body>
</html>

