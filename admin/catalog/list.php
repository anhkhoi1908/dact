<div class="row mt-[4rem]">
    <div class="frmtitle">
        DANH SÁCH DANH MỤC
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <div class="row mb10 text-end px-0">
            <!-- <input type="button" value="Chon tat ca"/>
            <input type="button" value="Bo chon tat ca"/>
            <input type="button" value="Xoa cac muc da chon"/> -->
                <a href="adminController.php?act=adddm" class="px-0"><input type="button" value="Thêm" class="!bg-[#FF5B1E] !text-white 
                hover:!bg-[#333] !border-0 cursor-pointer !py-2 !px-8"/></a>
            </div> 
            <table>
                <tr class="!bg-[#333] !text-white">
                    <!-- <th></th> -->
                    <th>MÃ DANH MỤC</th>
                    <th>TÊN DANH MỤC</th>   
                    <th></th>
                </tr>
                <?php
                    foreach($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadm='adminController.php?act=suadm&id='.$id;
                        $xoadm='adminController.php?act=xoadm&id='.$id;
                        echo '<tr>
                                <td class="text-center">'.$id.'</td>
                                <td class="text-center">'.$name.'</td>
                                <td class="!w-[10%]"><a href="'.$suadm.'"><i class="fa-solid fa-pen mr-4"></i></a> <a href="'.$xoadm.'"><i class="fa-solid fa-trash"></i></a></td>
                            </tr>';
                    }
                ?>
            </table>
        </div>
    </div>
</div>