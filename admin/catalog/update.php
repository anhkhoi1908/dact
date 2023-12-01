<?php

if(is_array($dm)) {
    extract($dm);
}

?>

<div class="row flex flex-col justify-center items-center mt-[4rem]">
        <div class="row frmtitle w-1/2">
            <h1>CẬP NHẬT DANH MỤC</h1>
        </div>
        <div class="row frmcontent w-1/2">
            <form action="adminController.php?act=updatedm" method="post">
                <div class="row mb10">
                    Mã loại<br>
                    <input type="text" name="maloai" disabled/>
                </div>
                <div class="row mb10">
                    Tên loại<br>
                    <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name;?>"/>
                </div>
                <div class="row mb10 mt-8">
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>"/>
                    <input type="submit" name="capnhat" value="CẬP NHẬT"/>
                    <!-- <input type="reset" value="NHẬP LẠI"/> -->
                    <a href="adminController.php?act=listcatalog"><input type="button" value="DANH SÁCH"/></a>
                </div>
                <?php
                if(isset($thongbao) && ($thongbao!=="")) {
                    echo $thongbao;
                }
                ?>
            </form>
        </div>
    </div>