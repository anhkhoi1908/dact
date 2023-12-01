<div class="row mt-[4rem]">
    <div class="row frmtitle flex justify-center">
        ĐƠN HÀNG CHI TIẾT
    </div>
    <div class="row frmcontent my-8">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th class="!w-[10%]">ID</th>
                    <th class="!w-[15%]">MÃ ĐƠN</th>
                    <th class="!w-[10%]">STT</th>
                    <th class="!w-[15%]">TÊN SẢN PHẨM</th> 
                    <th class="!w-[15%]">ĐƠN GIÁ</th> 
                    <th>SỐ LƯỢNG</th> 
                    <th class="!w-[30%]">THÀNH TIỀN</th> 
                </tr>   
                <?php
                    $i=0;
                    foreach($detail_bill as $item) {
                        $i++;
                        $ttien=$item['dongia']*$item['soluong'];
                        extract($item);
                        echo '<tr>
                        <td>'.$item['iddh'].'</td>
                               <td>'.$item['madh'].'</td>
                               <td>'.$i.'</td>
                               <td>'.$item['tensp'].'</td>
                               <td>'.number_format($item['dongia']).' VNĐ</td>
                               <td>'.$item['soluong'].'</td>
                               <td>'.number_format($ttien).' VNĐ</td>
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
    <?php
        echo '
            <div class="frmtitle text-[#FF5B1E]">Tổng hóa đơn: '.number_format($tongdonhang).' VNĐ</div>
        ';
    ?>
</div>