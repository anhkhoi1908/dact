<div class="row flex flex-col justify-center items-center mt-[4rem]">
        <div class="row frmtitle w-1/2">
            <h1>THÊM MỚI SẢN PHẨM</h1>
        </div>
        <div class="row frmcontent w-1/2">
            <form action="adminController.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class="row mb10 text-end">
                    <select name="iddm" class="border-all p-2 outline-none">
                    <option value="<?=$iddm?>" selected>Tất cả</option>
                        <?php
                        foreach($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="row mb10 mt-8">
                    Tên sản phẩm<br>
                    <input type="text" name="tensp"/>
                </div>
                <div class="row mb10">
                    Giá<br>
                    <input type="text" name="giasp"/>
                </div>
                <div class="row mb10">
                    Hình ảnh<br>
                    <input type="file" name="hinh"/>
                </div>
                <div class="row mb10">
                    Mô tả<br>
                    <textarea name="mota" id="" class="w-full h-full p-2 border-all outline-none"></textarea>
                </div>
                <div class="row mb10 mt-8">
                    <input type="submit" name="themmoi" value="THÊM MỚI"/>
                    <input type="reset" value="NHẬP LẠI"/>
                    <a href="adminController.php?act=listproduct"><input type="button" value="DANH SÁCH"/></a>
                </div>
                <h2 class="thanhcong">
                <?php
                    if(isset($thanhcong) && ($thanhcong!="")) {
                        echo $thanhcong;
                    } 
                ?>
                </h2>
            </form>
        </div>
    </div>