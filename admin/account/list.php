<div class="row mt-[4rem]">
    <div class="row frmtitle flex justify-center">
        DANH SÁCH TÀI KHOẢN
    </div>
    <div class="row frmcontent mt-8">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th>MÃ TK</th>
                    <th>TÊN ĐĂNG NHẬP</th>
                    <th class="!w-[15%]">MẬT KHẨU</th>
                    <th>EMAIL</th>
                    <th>ĐỊA CHỈ</th>
                    <th>ĐIỆN THOẠI</th>
                    <th>VAI TRÒ</th>
                    <th class="!w-[5%]"></th>
                </tr>
                <?php
                    foreach($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        $suatk='adminController.php?act=suatk&id='.$id;
                        $xoatk='adminController.php?act=xoatk&id='.$id;   
                        echo '<tr>
                                <td>'.$id.'</td>
                                <td>'.$user_name.'</td>
                                <td>'.$pass.'</td>
                                <td>'.$email.'</td>
                                <td>'.$address.'</td>
                                <td>'.$tel.'</td>
                                <td>'.$role.'</td>
                                <td class="!w-[5%]"><a href="'.$suatk.'"><i class="fa-solid fa-pen mb-4"></i></a> <a href="'.$xoatk.'"><i class="fa-solid fa-trash"></i></a></td>
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