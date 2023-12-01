<?php

function loadall_bill() {
    $sql="select * from donhang order by id desc";
    $listbill=pdo_query($sql);
    return $listbill;
}

function delete_bill($id) {
    $sql="delete from donhang where id=".$id;
    pdo_execute($sql);
}

function delete_bill_from_detail($id) {
    $sql="delete from chitiet_donhang where iddh=".$id;
    pdo_execute($sql);
}

function detail_bill($id) {
    $sql="select * from chitiet_donhang, donhang where donhang.id=chitiet_donhang.iddh and chitiet_donhang.iddh=".$id;
    $detail_bill=pdo_query($sql);
    return $detail_bill;
}

function detail_ordered($id) {
    $sql="select * from chitiet_donhang, donhang where donhang.id=chitiet_donhang.iddh and chitiet_donhang.iddh=".$id;
    $detail_ordered=pdo_query($sql);
    return $detail_ordered;
}

// function detail_ordered($id) {
//     $sql="select * from giohang, user where user.id=giohang.iduser and giohang.iduser=".$id;
//     $detail_ordered=pdo_query($sql);
//     return $detail_ordered;
// }
?>
