<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DACT</title>
    <link rel="stylesheet" href="../view/css/Style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>
<body>
    <section class="bg-[#FF5B1E] py-2">
        <marquee class="text-white">Chào mừng bạn đến với AnKoiStore!!! Chúc bạn có những phút giây mua sắm thật thoải mái.</marquee>
    </section>

    <div id="header" class="w-full flex bg-[#333] items-center justify-center">
        <div class="nav w-[80%] flex justify-between items-center py-[1.4rem]">
            <div>
                <a href="userController.php">
                    <div class="flex items-center">
                        <div class="mr-4"><img src="../view/imgs/Logo.svg"/></div>
                        <span class="text-4xl font-bold text-white">AnKoi</span>
                    </div>
                </a>
            </div>
            <div class="menu inline-block rounded-xl w-4/5">
                <?php
                    if(isset($_SESSION["nguoidung"])) {
                        extract($_SESSION["nguoidung"]);
                    ?>
                        <ul class="flex items-center justify-between">
                            <div class="searchbox mx-4 w-[70%] relative">
                                <form action="userController.php?act=product" method="post">
                                    <input class="px-[1rem] py-[0.5rem] bg-white rounded-md outline-none w-full" type="text" 
                                    name="kyw" placeholder="Tìm kiếm sản phẩm..."/>
                                    <button type="submit" name="listok" class="bg-[#FF5B1E] inline-block py-1 px-3 rounded-md 
                                    absolute right-1 top-1">
                                        <i class="text-white fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </form>
                            </div> 
                            <div class="flex items-center">
                                <li class="px-2"><a href="userController.php?act=ordered"><i class="fa-solid fa-bag-shopping text-2xl 
                                !text-[#FF5B1E] hover:text-[#CDA274] hover:text-[1.8rem]"></i></a></li>
                                <li class="px-2"><a href="userController.php?act=viewcart"><i class="fa-solid fa-cart-shopping text-2xl 
                                !text-[#FF5B1E] hover:text-[#CDA274] hover:text-[1.8rem]"></i></a></li>
                                <!-- <li class=""><a href="userController.php?act=logout">Đăng xuất</a></li> -->
                                <span class="nav-item dropdown text-white">
                                    <a class="nav-link dropdown-toggle pr-0 hover:text-[#FF5B1E]" href="#" id="navbarDropdownMenuLink" 
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Xin chào <?=$user_name?>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <?php if($role==1) {?>
                                          <a class="dropdown-item !text-[teal] list-none" 
                                            href="adminController.php?act=listcatalog">Quản lý</a>
                                        <?php }?>
                                      <a class="dropdown-item !text-[teal] list-none"
                                        href="userController.php?act=change_pass">Đổi mật khẩu</a>
                                      <a class="dropdown-item !text-[teal] list-none"
                                        href="userController.php?act=forget_pass">Quên mật khẩu</a>
                                      <a class="dropdown-item !text-[teal] list-none"
                                        href="userController.php?act=edit_account">Cập nhật thông tin</a>
                                      <a class="dropdown-item !text-[teal] list-none"
                                        data-toggle="modal" href="#exampleModalCenter">Chuyển tài khoản</a>
                                      <a class="dropdown-item !text-[teal] list-none"
                                        href="userController.php?act=logout">Đăng xuất</a>
                                    </div>
                                </span>
                            </div> 
                        </ul>   
                        <?php
                    } else {
                        ?>
                    <ul class="flex items-center justify-between">
                        <div class="searchbox mx-4 w-[70%] relative">
                            <form action="userController.php?act=product" method="post">
                                <input class="px-[1rem] py-[0.5rem] bg-white rounded-md outline-none w-full" type="text" 
                                name="kyw" placeholder="Tìm kiếm sản phẩm..."/>
                                <button type="submit" name="listok" class="bg-[#FF5B1E] inline-block py-1 px-3 rounded-md 
                                absolute right-1 top-1">
                                    <i class="text-white fa-solid fa-magnifying-glass"></i>
                                </button>
                            </form>
                        </div> 
                        <div class="flex items-center">
                            <span class="text-white mr-2"><a href="userController.php?act=sign_up" 
                                class="hover:text-[#FF5B1E]">Đăng ký</a></span>
                            <li class="nav-item">
                                <button type="button" class="btn btn-modal" data-toggle="modal" 
                                    data-target="#exampleModalCenter">Đăng nhập</button>
                            </li>
                        </div> 
                    </ul>   
                <?php }?>
            </div>
        </div>
    </div>

    <section id="">
      <div class="container-fluid bg-light p-3" id="header_sub">
        <p class="slogan text-center font-italic font-bold text-dark">NỘI THẤT CAO CẤP, MÓN QUÀ CHO NGÔI NHÀ CỦA BẠN!</p>
      </div>
    </section>
    <script>
        const sloganElement = document.querySelector('.slogan')
        setInterval(() => {
            sloganElement.classList.toggle('!text-[#FF5B1E]')
        }, 500);
    </script>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" 
      aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header bg-[#333] relative flex justify-center">
              <h5 class="modal-title text-white text-2xl font-bold text-[#FF5B1E]" id="exampleModalLongTitle">Đăng nhập</h5>
              <button type="button" class="close p-3 m-0 absolute top-0 right-0" data-dismiss="modal" aria-label="Close">
                <span class="text-white" aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="userController.php?act=login" method="post">
                <div class="modal-body">
                  <label for="">Tên đăng nhập</label>
                  <input type="text" class="py-2 px-3 w-100 rounded mb-2" name="user_name"/>
                  <label for="">Mật khẩu</label>
                  <input type="password" class="py-2 px-3 w-100 rounded mb-2" name="pass"/>
                  <input type="checkbox" id="remember"/>
                  <label for="remember">Ghi nhớ tài khoản</label>
                </div>
                <div class="modal-footer justify-content-center border-0">
                    <input type="submit" name="login" class="btn btn-login text-white" value="Đăng nhập"></input>
                </div>
            </form>
              <!-- <div class="form-radio d-flex justify-content-around mt-4"> -->
            <!-- </div> -->
            <div class="inline-block text-center list-none my-[1.5rem]">
                <li class="inline-block"><a class="text-[teal] list-none hover:text-[red]" href="userController.php?act=forget_pass">
                    Quên mật khẩu</a></li><br>
                <li class="inline-block"><a class="text-[teal] list-none hover:text-[red]" href="userController.php?act=sign_up">
                    Đăng ký thành viên</a></li>
            </div>
        </div>
      </div>
    </div>
    
    
    
