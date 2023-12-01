<div class="row">
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <div class="frmtitle !mt-0">
                DANH SÁCH THỐNG KÊ
            </div>
            <table>
                <tr>
                    <th>MÃ DANH MỤC</th>
                    <th>TÊN DANH MỤC</th>
                    <th>SỐ LƯỢNG</th>
                    <!-- <th>HÌNH ẢNH</th> -->
                    <th>CAO NHẤT</th>
                    <th>THẤP NHẤT</th>
                    <th>TRUNG BÌNH</th>
                </tr>
                <?php
                    foreach($liststatistic as $item) {
                        extract($item);
                        // $suasp='index.php?act=suasp&id='.$id;
                        // $xoasp='index.php?act=xoasp&id='.$id;
                        // $hinhpath="../upload/".$img;
                        // if(is_file($hinhpath)) {
                        //     $hinh='<div class="flex justify-center"><img src="'.$hinhpath.'" class="h-[6.25rem]" /></div>';
                        // } else {
                        //     $hinh="no photo";
                        // }
                        echo '<tr>
                                <td>'.$madm.'</td>
                                <td>'.$tendm.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$maxprice.'</td>
                                <td>'.$minprice.'</td>
                                <td>'.$avgprice.'</td>
                            </tr>';
                    }
                ?>
            </table>
        </div>
    </div>
</div>