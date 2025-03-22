
<?php


class PostModel extends BaseModel {

    // Lay 3 bai viet bao tang lich su
    public function lay3BaiVietBaoTangLichSu() {
        $sql = 'SELECT * FROM bai_viet WHERE danh_muc_id = 1';
        $post = $this->select($sql);

        $random = array_rand($post, 3);

        $bai_viet_random = [];
        $bai_viet_random[0] = $post[$random[0]];
        $bai_viet_random[1] = $post[$random[1]];
        $bai_viet_random[2] = $post[$random[2]];
        return $bai_viet_random;
    }

    // Lay bai viet bao tang lich su
    public function layBaiVietBaoTangLichSu() {
        $page = !empty($_GET['page']) ? $_GET['page'] : 1;
        $from =  6 * ($page - 1);
        $to =$from + 6;


        $sql = 'SELECT * FROM bai_viet WHERE danh_muc_id = 1 LIMIT ' . $from . ', 6';
        $post = $this->select($sql);

        return $post;
    }
    // Dem bai viet bao tang lich su
    public function demBaiVietBaoTangLichSu() {

        $sql = 'SELECT * FROM bai_viet WHERE danh_muc_id = 1';
        $post = $this->select($sql);
        return count($post);
    }

    // Lay bai viet cac cong trinh giao thong
    public function layBaiVietCacCongTrinhGiaoThong() {
        $sql = 'SELECT * FROM bai_viet WHERE danh_muc_id = 2 ';
        $post = $this->select($sql);

        return $post;
    }

    // Lay bai viet dia diem van song
    public function layBaiVietDiaDiemVanSong() {
        $sql = 'SELECT * FROM bai_viet WHERE danh_muc_id = 3';
        $post = $this->select($sql);

        return $post;
    }

    public function xemChiTiet($id) {
        $sql = 'SELECT * FROM bai_viet WHERE id = ' . $id;
        $post = $this->select($sql);

        if (!empty($post)) {
            return $post[0];
        }
    }
}
