<div class="row">
    <div class="row frmtitle">
        DANH SÁCH BÌNH LUẬN
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th>ID</th>
                    <th>NGÀY BÌNH LUẬN</th>
                    <th class="!w-[15%]">USER_NAME</th>
                    <th class="!w-[10%]">IDUSER</th>
                    <th>IDPRO</th>
                    <th class="!w-[30%]">NỘI DUNG BÌNH LUẬN</th>
                    <th></th>
                </tr>
                <?php
                    foreach($listbinhluan as $binhluan) {
                        extract($binhluan);
                        $xoabl='index.php?act=xoabl&id='.$id;   
                        echo '<tr>
                                <td>'.$id.'</td>
                                <td>'.$ngaybinhluan.'</td> 
                                <td>'.$user_name.'</td>
                                <td>'.$iduser.'</td>
                                <td>'.$idpro.'</td>
                                <td>'.$noidung.'</td>
                                <td></a> <a href="'.$xoabl.'"><input type="button" value="Xóa"/></a></td>
                            </tr>';
                    }
                ?>
            </table>
        </div>
        <!-- <div class="row mb10">
            <input type="button" value="Chon tat ca"/>
            <input type="button" value="Bo chon tat ca"/>
            <input type="button" value="Xoa cac muc da chon"/>
            <a href="index.php?act=adddm"><input type="button" value="Nhap them"/></a>
        </div> -->
    </div>
</div>