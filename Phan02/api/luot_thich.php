<?php
require '../model/configs.php';
require '../model/BaseModel.php';
require '../model/PostModel.php';

class LuotThich extends PostModel
{
    public function updateLuotThich($id) {
        $random = rand(1,10);
        $sql = 'UPDATE `bai_viet` SET `luot_thich` = luot_thich + ' . $random . ' WHERE `bai_viet`.`id` = ' . $id;
        $this->query($sql);

        $sql = 'SELECT luot_thich FROM bai_viet WHERE id = '.$id;
        $bai_viet = $this->select($sql);
        return $bai_viet;
    }
}

$luotThich = new LuotThich();
if (!empty($_GET['id'])) {
    $bai_viet = $luotThich->updateLuotThich($_GET['id']);
}
echo json_encode($bai_viet[0]['luot_thich']);