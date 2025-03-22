<?php
require 'model/configs.php';
require 'model/BaseModel.php';
require 'model/PostModel.php';

$bai_viet = new PostModel();
$danh_muc_id = !empty($_GET['danh_muc_id'])? $_GET['danh_muc_id'] : 1;
$danh_sach_bai_viet = [];
$total = 0;
$current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
switch ($danh_muc_id) {
    case 1:
        $danh_sach_bai_viet = $bai_viet->layBaiVietBaoTangLichSu();
        $total = $bai_viet->demBaiVietBaoTangLichSu();
        break;
    case 2:
        break;
    case 3:
        break;
}

$page = ceil($total/6);//2 trang demo
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
    <div class="container mt-3">
      <div class="row">
        <div class="col-12 text-center fs-1 fw-bold">Danh sách bài viết</div>
      </div>
      <div class="row mt-3  flex-md-row flex-column-reverse">
        <div class="col-12 col-md-9 border-end list_post">
          <?php foreach($danh_sach_bai_viet as $ds): ?>
          <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0" style="min-height: 250px;">
              <div class="col-md-4">
                <img src="../Phan02/public/imgs/baotang1.jfif" class="img-fluid h-100 rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $ds['tieu_de']?></h5>
                  <p class="card-text"><?php echo $ds['mo_ta_ngan']?></p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  <p class="card-text d-flex flex-row"><p class="mx-2"><?php echo $ds['luot_thich'] ?><i class="fa-solid fa-thumbs-up fa-2xs"></i></p>
                                    <p class="mx-2"><?php echo $ds['luot_xem'] ?><i class="fa-solid fa-eye fa-2xs"></i></p></p>
                  <a href="trang_chitiet.php?id=<?php echo $ds['id']?>">Xem chi tiết</a>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="col-12 col-md-3 d-flex flex-md-column">
          <input type="checkbox" name="chckDM" id="chkDM1" hidden>
          <label class="border rounded mb-3 p-2 label_chk" for="chkDM1">Bảo tàng di tích lịch sử</label>
          <input type="checkbox" name="chckDM" id="chkDM2" hidden>
          <label class="border rounded mb-3 p-2 label_chk" for="chkDM2">Địa điểm ven sông</label>
          <input type="checkbox" name="chckDM" id="chkDM3" hidden>
          <label class="border rounded mb-3 p-2 label_chk" for="chkDM3">Công trình giao thông</label>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-9 d-flex">
          <?php for ($index = 1; $index <= $page; $index++): ?>
            <button class="mx-2"><a href="trang_danh_muc.php?page=<?php echo $index ?>"><?php echo $index ?></a></button>
          <?php endfor;?>
        </div>
      </div>
    </div>
    <footer class="mt-5 w-100 border rounded-bottom container-fluid">
        <div class="row">
            <img class="col-6 " src="..../Phan02/public/imgs/logo_thanh_doan.png" alt="">
            <div class="col-6">
                <div class="row text-light">
                    <div class="col-12">Bản quyền: Thành Đoàn TP.HCM, thông tin liên hệ Thành Đoàn TP.HCM</div>
                    <div class="col-12">Địa chỉ: Số 1 Phạm Ngọc Thạch, Quận 1, TP HCM </div>
                    <div class="col-12">Email: thanhdoan@tphcm.gov.vn</div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>