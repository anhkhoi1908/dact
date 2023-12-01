<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../view/css/Style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- <div id="header" class=""> -->
        <!-- <div class="nav w-[80%] flex justify-between items-center py-[1.4rem]">
            <div class="">
                <a href="adminController.php"><span class="text-[2rem] text-white font-bold">Admin</span></a>
            </div>
            <div class="menu inline-block rounded-xl">
                <ul class="flex items-center">
                    <li><a href="adminController.php?act=listcatalog">Danh mục</a></li>
                    <li><a href="adminController.php?act=listproduct">Sản phẩm</a></li>
                    <li><a href="adminController.php?act=listaccount">Tài khoản</a></li>
                    <li><a href="adminController.php?act=listbill">Đơn hàng</a></li>
                    <li><a href="adminController.php?act=statistic">Thống kê</a></li>
                    <li><a href="userController.php">Thoát</a></li>
                </ul>
            </div>
        </div> -->
 
            <!-- <div class="row">
                <div class="d-flex flex-column justify-content-between col-auto bg-dark min-vh-100">
                    <div class="mt-4">
                        <a href="adminController.php" class="text-white text-decoration-none d-flex align-items-center justify-center"
                        role="button">
                            <span class="fs-5 text-white font-bold">Admin</span>
                        </a>
                        <hr class="text-white mt-2"/>
                        <ul class="nav nav-pills flex-column !mt-6 mt-sm-0" id="menu">
                            <li class="nav-item mb-2">
                                <a href="adminController.php" class="nav-link hover:bg-[#FF5B1E] duration-100" aria-current="page">
                                    <i class="text-white fa-solid fa-house"></i>
                                    <span class="ms-2 text-white">Trang chủ</span>
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="adminController.php?act=listcatalog" class="nav-link hover:bg-[#FF5B1E]" aria-current="page">
                                    <i class="text-white fa-solid fa-rectangle-list"></i>
                                    <span class="ms-2 text-white">Danh mục</span>
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="adminController.php?act=listproduct" class="nav-link hover:bg-[#FF5B1E]" aria-current="page">
                                    <i class="text-white fa-solid fa-boxes-stacked"></i>
                                    <span class="ms-2 text-white">Sản phẩm</span>
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="adminController.php?act=listbill" class="nav-link hover:bg-[#FF5B1E]" aria-current="page">
                                    <i class="text-white fa-solid fa-cart-shopping"></i>
                                    <span class="ms-2 text-white">Đơn hàng</span>
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="adminController.php?act=listaccount" class="nav-link hover:bg-[#FF5B1E]" aria-current="page">
                                    <i class="text-white fa-solid fa-users"></i>
                                    <span class="ms-2 text-white">Tài khoản</span>
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="userController.php" class="nav-link hover:bg-[#FF5B1E]" aria-current="page">
                                    <i class="text-white fa-solid fa-right-from-bracket"></i>
                                    <span class="ms-2 text-white">Thoát</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            <div> -->   
        <!-- </div> -->
        <!-- </div> -->
        <div id="header sidebar">
            <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-48 h-screen transition-transform -translate-x-full 
            sm:translate-x-0" aria-label="Sidebar">
                <div class="h-full px-3 py-4 overflow-y-auto bg-[#333]">
                   <h2 class="text-[#FF5B1E] font-bold text-3xl text-center">Admin</h2>
                   <hr class="text-white mt-2">
                   <ul class="space-y-2 font-medium mt-4">
                      <li>
                         <a href="adminController.php?act=listcatalog" class="flex items-center p-2 text-gray-900 rounded-lg 
                         dark:text-white hover:bg-[#FF5B1E] duration-100 dark:hover:bg-gray-700 group">
                            <i class="text-white fa-solid fa-rectangle-list"></i>
                            <span class="flex-1 ms-3 text-white whitespace-nowrap">Danh mục</span>
                         </a>
                      </li>
                      <li>
                         <a href="adminController.php?act=listproduct" class="flex items-center p-2 text-gray-900 rounded-lg 
                         dark:text-white hover:bg-[#FF5B1E] duration-100 dark:hover:bg-gray-700 group">
                            <i class="text-white fa-solid fa-boxes-stacked"></i>
                            <span class="flex-1 ms-3 text-white whitespace-nowrap">Sản phẩm</span>
            
                         </a>
                      </li>
                      <li>
                         <a href="adminController.php?act=listbill" class="flex items-center p-2 text-gray-900 rounded-lg 
                         dark:text-white hover:bg-[#FF5B1E] duration-100 dark:hover:bg-gray-700 group">
                            <i class="text-white fa-solid fa-cart-shopping"></i>
                            <span class="flex-1 ms-3 text-white whitespace-nowrap">Đơn hàng</span>
                         </a>
                      </li>
                      <li>
                         <a href="adminController.php?act=listaccount" class="flex items-center p-2 text-gray-900 rounded-lg 
                         dark:text-white hover:bg-[#FF5B1E] duration-100 dark:hover:bg-gray-700 group">
                            <i class="text-white fa-solid fa-users"></i>
                            <span class="flex-1 ms-3 text-white whitespace-nowrap">Tài khoản</span>
                         </a>
                      </li>
                      <li>
                         <a href="userController.php" class="flex items-center p-2 text-gray-900 rounded-lg 
                         dark:text-white hover:bg-[#FF5B1E] duration-100 dark:hover:bg-gray-700 group">
                            <i class="text-white fa-solid fa-right-from-bracket"></i>
                            <span class="flex-1 ms-3 text-white whitespace-nowrap">Thoát</span>
                         </a>
                      </li>
              
                   </ul>
                </div>
            </aside>
        </div>
        
        
        <div class="boxcenter text-center absolute right-0">

