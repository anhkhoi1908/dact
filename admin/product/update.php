<?php

if(is_array($sanpham)&&count($sanpham)> 0){
    extract($sanpham);
    $idupdate=$id;
}

$hinhpath="../upload/".$img;
    if(is_file($hinhpath)) {
        $hinh='<img src="'.$hinhpath.'" class="h-[6.25rem]" />';
    } else {
        $hinh="no photo";
    }

?>

<div class="row flex flex-col justify-center items-center mt-[4rem]">
        <div class="row frmtitle w-1/2">
            <h1>CẬP NHẬT SẢN PHẨM</h1>
        </div>
        <div class="row frmcontent w-1/2">
            <form action="adminController.php?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="row mb10 text-end">
                <select name="iddm" class="border-all p-2 outline-none">
                    <option value="<?=$iddm?>" selected>Tất cả</option>
                    <?php
                        foreach($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            if($iddm==$id) echo '<option value="'.$id.'" selected>'.$name.'</option>';
                            else echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>
                </select>
                </div>
                <div class="row mb10 mt-8">
                    Tên sản phẩm<br>
                    <input type="text" name="tensp" value="<?=$tensp?>"/>
                </div>
                <div class="row mb10">
                    Giá<br>
                    <input type="text" name="giasp" value="<?=$price?>"/>
                </div>
                <div>
                    <div>
                        <div class="row mb10 w-1/4">
                            Hình ảnh<br>
                            <input type="file" name="hinh"/>
                            <?=$hinh?>
                        </div>
                        <div class="row mb10">
                            Mô tả<br>
                            <textarea name="mota" id="" class="border-all w-full h-full outline-none p-2"><?=$mota?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row mb10 mt-8">  
                    <input type="hidden" name="id" value="<?=$idupdate?>"/>
                    <input type="submit" name="capnhat" value="CẬP NHẬT"/>
                    <input type="reset" value="NHẬP LẠI"/>
                    <a href="adminController.php?act=listproduct"><input type="button" value="DANH SÁCH"/></a>
                </div>
                <?php
                if(isset($thongbao) && ($thongbao!=="")) {
                    echo $thongbao;
                }
                ?>
            </form>
        </div>
    </div>