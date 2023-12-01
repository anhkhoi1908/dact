<?php

function insert_catalog($tenloai) {
    $sql="insert into danhmuc(name) values('$tenloai')";
    pdo_execute($sql);
}

function delete_catalog($id) {
    $sql="delete from danhmuc where id=".$id;
    pdo_execute($sql);
}

function loadall_catalog() {
    $sql="select * from danhmuc order by id desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}

function loadone_catalog($id) {
    $sql= 'select * from danhmuc where id='.$id;
    $dm=pdo_query_one($sql);
    return $dm;
}

function update_catalog($id,$tenloai) {
    $sql="update danhmuc set name='".$tenloai."' where id=".$id;
    pdo_execute($sql);
}
?>