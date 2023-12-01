<div class="row mt-[4rem] flex flex-col justify-center items-center">
        <div class="row frmtitle">
            <h1>THÊM MỚI DANH MỤC</h1>
        </div>
        <div class="row frmcontent w-1/2">
            <form action="adminController.php?act=adddm" method="post">
                <div class="row mb10">
                    Mã danh mục<br>
                    <input type="text" name="maloai" disabled/>
                </div>
                <div class="row mb10">
                    Tên danh mục<br>
                    <input type="text" name="tenloai"/>
                </div>
                <div class="row mb10 mt-8">
                    <input type="submit" name="themmoi" value="THÊM MỚI"/>
                    <input type="reset" value="NHẬP LẠI"/>
                    <a href="adminController.php?act=listcatalog"><input type="button" value="DANH SÁCH"/></a>
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