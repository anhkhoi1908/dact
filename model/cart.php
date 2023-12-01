<?php

function viewcart() {
    global $img_path_spadd;
    // global $img_path_spadd;
    if(isset($_SESSION["mycart"])&&(count($_SESSION['mycart'])>0)) {
        echo '<table class="border-all bg-white w-full mb-5"><tr>
            <th class="border-all text-center p-4">STT</th>
            <th class="border-all text-center p-4 !w-[20%]">Tên sản phẩm</th>
            <th class="border-all text-center p-4">Hình ảnh</th>
            <th class="border-all text-center p-4">Đơn giá</th>
            <th class="border-all text-center p-4 !w-[5%]">Số lượng</th>
            <th class="border-all text-center p-4">Thành tiền</th>
        </tr>';
        $i=0;
        $tong=0;
        foreach($_SESSION["mycart"] as $item) {
            $ttien=$item[3] * $item[4];
            $hinh=$img_path_spadd.$item[2];
            $tong+=$ttien;
            $id=$item[0];
            $linksp="userController.php?act=product_detail&idsp=".$id;
            echo '<tr>
                    <td class="border-all text-center">'.($i+1).'</td>
                    <td class="border-all text-center"><a href="'.$linksp.'" class="hover:text-[#FF5B1E]">'.$item[1].'</a></td>
                    <td class="border-all"><div class="flex justify-center">
                        <a href="'.$linksp.'"><img src="'.$hinh.'" class="h-[6.25rem]"/></a></div>
                    </td>
                    <td class="border-all text-center">'.number_format($item[3]).' VNĐ</td>
                    <td class="border-all text-center"><span>'.$item[4].'</span></td>
                    <td class="border-all text-center">'.number_format($ttien).' VNĐ</td>  
                    <td class="border-all text-center px-4"><a href="userController.php?act=delcart&i='.$i.'" 
                    class="hover:text-[#FF5B1E]"><i class="fa-solid fa-trash"></i></a></td>  
                </tr>';
            $i++;   
        }
        echo '<tr><td colspan="5" class="italic underline text-end pr-2 py-4 font-bold">Tổng tiền:</td><td class="text-center 
                    font-bold">'.number_format($tong).' VNĐ</td><td>
            </td></tr>';
        echo '</table>';
        echo '<div class="flex justify-center w-full">
                <a class="hover:text-[#FF5B1E] mr-4 bg-[#FF5B1E] text-white p-3 rounded-md" href="userController.php">Tiếp tục mua hàng</a> 
                <a class="hover:text-[#FF5B1E] mr-4 bg-[#FF5B1E] text-white p-3 rounded-md" href="userController.php?act=buying">Đặt hàng</a>
                <a class="hover:text-[#FF5B1E] mr-4 bg-[#FF5B1E] text-white p-3 rounded-md" href="userController.php?act=delcart">Xóa giỏ hàng</a>
              </div>';
    } else {
        echo 'Giỏ hàng trống!';
    }
}

function show_detail_bill() {
    global $img_path_spadd; 
    if(isset($_SESSION['iddh'])&&($_SESSION['iddh']>0)) {
        $getshowcart=getshowcart($_SESSION['iddh']);
        if(isset($getshowcart)&&(count($getshowcart)>0)) {
            echo '<table class="border-all bg-white w-full mb-5"><tr>
                <th class="border-all text-center p-4">STT</th>
                <th class="border-all text-center p-4 !w-[20%]">Tên sản phẩm</th>
                <th class="border-all text-center p-4">Hình ảnh</th>
                <th class="border-all text-center p-4">Đơn giá</th>
                <th class="border-all text-center p-4 !w-[5%]">Số lượng</th>
                <th class="border-all text-center p-4">Thành tiền</th>      
            </tr>';
            $i=0;
            $tong=0;
            foreach($getshowcart as $item) {
                $ttien=$item['soluong'] * $item['dongia'];
                $hinh=$img_path_spadd.$item['img'];
                $tong+=$ttien;
                $id=$item[0];
                $linksp="userController.php?act=product_detail&idsp=".$id;
                echo '<tr>
                        <td class="border-all text-center">'.($i+1).'</td>
                        <td class="border-all text-center"><a href="'.$linksp.'" class="hover:text-[#FF5B1E]">'.$item['tensp'].'</a></td>
                        <td class="border-all"><div class="flex justify-center">
                            <a href="'.$linksp.'"><img src="'.$hinh.'" class="h-[6.25rem]"/></a></div>
                        </td>
                        <td class="border-all text-center">'.number_format($item['dongia']).' VNĐ</td>
                        <td class="border-all text-center"><span>'.$item['soluong'].'</span></td>
                        <td class="border-all text-center">'.number_format($ttien).' VNĐ</td>  
                        <td class="border-all text-center px-4"><a href="userController.php?act=delcart&i='.$i.'" 
                        class="hover:text-[#FF5B1E]"><i class="fa-solid fa-trash"></i></a></td>  
                    </tr>';
                $i++;   
            }
            echo '<tr><td colspan="5" class="italic underline text-end pr-2 py-4 font-bold">Tổng tiền:</td><td class="text-center 
                        font-bold">'.number_format($tong).' VNĐ</td><td>
                </td></tr>';
            echo '</table>';
        }
    } else {
        echo 'Gio hang trong !';
    }
}

function taodonhang($madh,$tongdonhang,$fullname,$iduser,$address,$email,$tel,$pttt,$ngaydathang) {
    $conn=connectdb();
    $sql="insert into donhang(madh,tongdonhang,fullname,iduser,address,email,tel,pttt,ngaydathang) values('".$madh."', '".$tongdonhang."', '".$fullname."', '".$iduser."', '".$address."', '".$email."', '".$tel."', '".$pttt."', '".$ngaydathang."')";
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    return $last_id;    
}

function addtocart($iddh,$idpro,$tensp,$img,$dongia,$soluong,$iduser) {
    $conn=connectdb();  
    $sql="insert into chitiet_donhang(iddh,idpro,tensp,img,dongia,soluong,iduser) values('".$iddh."','".$idpro."','".$tensp."','".$img."','".$dongia."','".$soluong."','".$iduser."')";
    $conn->exec($sql);
}

function getorderinfo($iddh) {
    $conn=connectdb();
    $stmt=$conn->prepare("select * from donhang where id=".$iddh); 
    $stmt->execute();
    $result=$stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

function getshowcart($iddh) {
    $conn=connectdb();
    $stmt=$conn->prepare("select * from chitiet_donhang where iddh=".$iddh); 
    $stmt->execute();
    $result=$stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

function loadall_donhang($iduser) {
    $sql="select * from donhang where iduser=".$iduser;
    $listdonhang=pdo_query($sql);
    return $listdonhang;
}

function loadone_bill($id) {
    $sql= 'select * from donhang where id='.$id;
    $bill=pdo_query_one($sql);
    return $bill;
}

function loadall_cart($iduser) {
    $sql="select * from chitiet_donhang where iduser=".$iduser;
    $listbill=pdo_query($sql);
    return $listbill;
}

function loadall_statistic() {
    $sql="select danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice,  max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
    $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddm where 1";
    $sql.=" order by danhmuc.id desc";
    $liststatistic=pdo_query($sql);
    return $liststatistic;
}

?>
