<?php

function insert_product($tensp,$giasp,$hinh,$mota,$iddm) {
    $sql="insert into sanpham(tensp,price,img,mota,iddm) values('$tensp', '$giasp', '$hinh', '$mota', '$iddm')";
    pdo_execute($sql);
}

function delete_product($id) {
    $sql="delete from sanpham where id=".$id;
    pdo_execute($sql);
}

function loadall_product($kyw="",$iddm=0) {
    $sql="select * from sanpham where 1";
    if($kyw!="") {
        $sql.=" and tensp like '%".$kyw."%'";
    }
    if($iddm>0) {
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function loadall_product_home() {
    $sql="select * from sanpham where 1 order by id desc limit 0,15"; 
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function loadall_product_top10() {
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,10"; 
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function loadone_product($id) {
    $sql= 'select * from sanpham where id='.$id;
    $sp=pdo_query_one($sql);
    return $sp;
}

function load_name_catalog($iddm) {
    if($iddm>0) {
        $sql= 'select * from danhmuc where id='.$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return ""; 
    }
}

function load_product_semcatalog($id,$iddm) {
    $sql= "select * from sanpham where iddm=".$iddm." AND id <> ".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function update_product($id,$iddm,$tensp,$giasp,$mota,$hinh) {
    if($hinh!="") {
        $sql="update sanpham set iddm='".$iddm."', tensp='".$tensp."', price='".$giasp."', mota='".$mota."', img='".$hinh."' where id=".$id;
        pdo_execute($sql);

    } else {
        $sql="update sanpham set iddm='".$iddm."', tensp='".$tensp."', price='".$giasp."', mota='".$mota."' where id=".$id;
        pdo_execute($sql);
    }
    // try {
    //     pdo_execute($sql);
    // }
    // catch(PDOException $e) {
    //     echo "".$e->getMessage();
    // }
}
?>