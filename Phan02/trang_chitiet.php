<?php
require 'model/configs.php';
require 'model/BaseModel.php';
require 'model/PostModel.php';

$bai_viet = new PostModel();
$id = !empty($_GET['id']) ? $_GET['id'] : 1;
$chi_tiet = $bai_viet->xemChiTiet($id);
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
        <a href=""><img class="logo_header border rounded-circle" src="./public/imgs/UBND_TP_HCM.png" alt=""></a>
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
    <div class="container">
        <div class="row">
            <img src="../Phan01/public/imgs/baotang1.jfif" class="img-fluid" style="max-height:500px" alt="">
        </div>
        <div class="row text-center">
            <p class="fs-1 fw-bold"><?php echo $chi_tiet['tieu_de'] ?></p>
        </div>
        <div class="row">
            <p>
                <?php echo $chi_tiet['noi_dung'] ?>
            </p>
        </div>
        <hr>
        <div class="row like">
            <div class="col-md-1 col-4 bg-primary px-2 py-1 rounded text-light d-flex align-items-center m-0">
                <i class="fa-solid fa-thumbs-up fa-bounce "></i><p class="ms-2 m-0 likenumber">Thích <?php echo $chi_tiet['luot_thich'] ?></p>
            </div>
        </div>
        
    </div>
    <footer class="mt-5 w-100 border rounded-bottom container-fluid">
        <div class="row">
            <img class="col-6 " src="../Phan01/public/imgs/logo_thanh_doan.png" alt="">
            <div class="col-6">
                <div class="row text-light">
                    <div class="col-12">Bản quyền: Thành Đoàn TP.HCM, thông tin liên hệ Thành Đoàn TP.HCM</div>
                    <div class="col-12">Địa chỉ: Số 1 Phạm Ngọc Thạch, Quận 1, TP HCM </div>
                    <div class="col-12">Email: thanhdoan@tphcm.gov.vn</div>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript">
            $(document).ready(function(){
                $('.like').click(function(){
                    link_url = '../Phan02/api/luot_thich.php?id=<?php echo $chi_tiet['id'] ?>'
                    $.ajax({url: link_url, success: function(result){
                            var data = jQuery.parseJSON(result);
                            console.log(data);
                           $('.likenumber').text("Thích "+data);
                        }});
                });
            });
        </script>
</body>
</html>