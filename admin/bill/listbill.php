<div class="row mt-[4rem]">
    <div class="row frmtitle flex justify-center">
        DANH SÁCH ĐƠN HÀNG
    </div>
    <div class="row frmcontent mt-8">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th>ID</th>
                    <th>MÃ ĐƠN</th>
                    <th class="!w-[20%]">KHÁCH HÀNG</th> 
                    <!-- <th class="!w-[20%]">NGÀY ĐẶT</th> 
                    <th>TỔNG</th>  -->
                    <th class="!w-[20%]">ĐỊA CHỈ</th> 
                    <th>SĐT</th> 
                    <th>EMAIL</th> 
                    <th>PTTT</th> 
                    <th class="!w-[20%]">QUẢN LÝ</th>
                    <th class="!w-[5%]"></th>
                </tr>   
                <?php
                    foreach($listbill as $bill) {
                        extract($bill);
                        $suabill='adminController.php?act=suabill&id='.$id;
                        $xoabill='adminController.php?act=xoabill&id='.$id;   
                        $detail_bill='adminController.php?act=detail_bill&id='.$id;
                        echo '<tr>
                                <td>'.$id.'</td>
                                <td>'.$madh.'</td>
                                <td>'.$fullname.'</td>
                                <td>'.$address.'</td>
                                <td>'.$tel.'</td>
                                <td>'.$email.'</td>
                                <td>'.$pttt.'</td>
                                <td><a href="'.$detail_bill.'" class="!underline text-[#FF5B1E]">Chi Tiết</a></td>
                                <td class="!w-[10%]"> <a href="'.$xoabill.'"><i class="fa-solid fa-trash"></i></a></td>
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