<?php 

function insert_comment($noidung,$iduser,$idpro,$ngaybinhluan,$user_name) {
    $sql="insert into binhluan(noidung,iduser,idpro,ngaybinhluan,user_name) values('".$noidung."','".$iduser."','".$idpro."','".$ngaybinhluan."','".$user_name."')";
    pdo_execute($sql);
}

function loadall_comment($idpro) {
    $sql="select * from binhluan where 1";
    if($idpro>0) $sql.=" AND idpro='".$idpro."'";
    $sql.=" order by id desc";
    $listbinhluan=pdo_query($sql);
    return $listbinhluan;
}

function delete_comment($id) {
    $sql="delete from binhluan where id=".$id;
    pdo_execute($sql);
}
?>