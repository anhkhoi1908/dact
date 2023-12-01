<?php

function insert_account($fullname,$user_name,$pass,$email,$address,$tel) {
    $sql="insert into user(fullname,user_name,pass,email,address,tel) values('".$fullname."','".$user_name."', '".$pass."', '".$email."', '".$address."', '".$tel."')";
    pdo_execute($sql);
}

function delete_account($id) {
    $sql="delete from user where id=".$id;
    pdo_execute($sql);
}

function checkuser($user_name,$pass) {
    $sql= "select * from user where user_name='".$user_name."' AND pass='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
    // $conn=connectdb();
    // $stmt=$conn->prepare("select * from user where user_name='".$user_name."' AND pass='".$pass."'");
    // $stmt->execute();
    // $result=$stmt->setFetchMode(PDO::FETCH_ASSOC);
    // $kq=$stmt->fetchAll();
    // return $kq[0]["role"];
}

function checkemail($email) {
    $sql= "select * from user where email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}

function loadall_account() {
    $sql="select * from user order by id desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}

function update_account($email,$address,$tel,$id,$fullname) {
    // $conn=connectdb();
    $sql="update user set email='".$email."', address='".$address."', tel='".$tel."', fullname='".$fullname."' where id=".$id;
    // $conn->exec($sql);
    pdo_execute($sql);

    // try {
    //     pdo_execute($sql);
    // }
    // catch(PDOException $e) {
    //     echo "".$e->getMessage();
    // }
}

function update_pass($pass,$id) {
    $sql="update user set pass='".$pass."' where id=".$id;
    pdo_execute($sql);
}


?>