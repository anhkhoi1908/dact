<?php

session_start();
$idpro=$_REQUEST['idpro'];
include('../../model/pdo.php');
include('../../model/comment.php');

$dsbl=loadall_comment($idpro);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/Syle.css">
    <style>
        .binhluan table {
            width: 90%;
            margin-left: 5%;
        }

        .binhluan table td:nth-child(1) {
            width: 50%;
        }

        .binhluan table td:nth-child(2) {
            /* width: 20%;   */
            font-style: italic;
            font-weight: bold;
        }

        .binhluan table td:nth-child(3) {
            width: 30%;
            font-style: italic;

        }
    </style>
</head>
<body>

<div class="row mb">
            <div class="boxtitle">BÌNH LUẬN</div>
            <div class="boxcontent binhluan border-b-0">
                    <table>
                    <?php
                        // echo "Noi dung binh luan: ".$idpro;
                        foreach($dsbl as $bl) {
                            extract($bl);
                            echo "<tr><td>$noidung</td>";
                            echo "<td>$user_name, </td>";
                            echo "<td>$ngaybinhluan</td></tr>";
                        }
                    ?>
                    </table>
           
            </div>
            <div class="binhluanform text-center border-all border-t-0">
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="py-4 border-t">
                    <input type="hidden" name="idpro" value="<?=$idpro?>"/>
                    <input class="w-4/5 py-2 px-8 rounded-3xl outline-none bg-[#eee]" type="text" name="noidung" placeholder="Nhập bình luận..."/>
                    <input class="text-white bg-[#CDA274] p-2 rounded-md cursor-pointer" type="submit" name="guibinhluan" value="Gửi"/>   
                </form>
            </div>
            <?php
                if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])) {
                    $noidung=$_POST['noidung'];
                    $iduser=$_SESSION['nguoidung']['id'];
                    $idpro=$_POST['idpro'];
                    $ngaybinhluan=date('h:i:sa d/m/Y');
                    $user_name=$_SESSION['nguoidung']['user_name'];
                    insert_comment($noidung,$iduser,$idpro,$ngaybinhluan,$user_name);
                    header("Location: ".$_SERVER['HTTP_REFERER']);
                }
            
            ?>
        </div>
</body>
</html>