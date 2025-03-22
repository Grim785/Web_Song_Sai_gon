
<?php
require '../model/configs.php';
require '../model/BaseModel.php';
require '../model/PostModel.php';

class TaiBaiViet extends PostModel
{
}

$taiBaiViet = new TaiBaiViet();
$bai_viet = [];
if (!empty($_GET['danh_muc_id'])) {

    switch ($_GET['danh_muc_id']) {
        case 1:
            $bai_viet = $taiBaiViet->lay3BaiVietBaoTangLichSu();
            break;
        case 2:
            break;
        case 3:
            break;
    }
}
echo json_encode($bai_viet);
