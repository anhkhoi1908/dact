<div class="row">
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <form action="adminController.php?act=listproduct" method="post" class="my-8 text-end px-0">
                <input type="text" name="kyw" class="!px-4" placeholder="Nhập tên sản phẩm cần tìm..."/>
                <select name="iddm" class="border-all p-2 rounded-md mt-4 outline-none">
                    <option value="<?=$iddm?>" selected>Tất cả</option>
                    <?php
                        foreach($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>
                </select>
                <input type="submit" name="listok" value="Search"/>
            </form>
            <div class="frmtitle !mt-0">
                DANH SÁCH SẢN PHẨM
            </div>
            <div class="row frmcontent px-0">
                <div class="row mb10 text-end px-0">
                <!-- <input type="button" value="Chon tat ca"/>
                <input type="button" value="Bo chon tat ca"/>
                <input type="button" value="Xoa cac muc da chon"/> -->
                    <a href="adminController.php?act=addsp" class="px-0"><input type="button" value="Thêm" class="!bg-[#FF5B1E] 
                    !text-white 
                    hover:!bg-[#333] !border-0 cursor-pointer !py-2 !px-8"/></a>
                </div> 
                <table>
                    <tr>
                        <!-- <th></th> -->
                        <th>MÃ SP</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th class="!w-[30%]">MÔ TẢ</th>
                        <th>HÌNH ẢNH</th>
                        <th class="!w-[15%]">GIÁ</th>
                        <th>LƯỢT XEM</th>
                        <th></th>
                    </tr>
                    <?php
                        foreach($listsanpham as $sanpham) {
                            extract($sanpham);
                            $suasp='adminController.php?act=suasp&id='.$id;
                            $xoasp='adminController.php?act=xoasp&id='.$id;
                            $hinhpath="../upload/".$img;
                            if(is_file($hinhpath)) {
                                $hinh='<div class="flex justify-center"><img src="'.$hinhpath.'" class="h-[6.25rem]" /></div>';
                            } else {
                                $hinh="no photo";
                            }
                            echo '<tr>
                                    <td>'.$id.'</td>
                                    <td>'.$tensp.'</td>
                                    <td class="!text-start">'.$mota.'</td>
                                    <td>'.$hinh.'</td>
                                    <td>'.number_format($price).' VNĐ</td>
                                    <td>'.$luotxem.'</td>
                                    <td class="!w-[10%]"><a href="'.$suasp.'"><i class="fa-solid fa-pen mb-4"></i></a> <a href="'.$xoasp.'"><i class="fa-solid fa-trash"></i></a></td>
                                </tr>';
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>