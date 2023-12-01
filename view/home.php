<div id="carouselExampleIndicators" class="carousel slide banner w-full text-center min-h-[25rem]" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
    </ol>
    <div class="carousel-inner h-100">
      <div class="carousel-item h-100 active">
        <img class="d-block w-100 h-100" src="../view/imgs/Banner8.jpg" alt="First slide">
      </div>
      <div class="carousel-item h-100">
        <img class="d-block w-100 h-100" src="../view/imgs/Banner9.jpg" alt="Second slide">
      </div>
      <!-- <div class="carousel-item h-100">
        <img class="d-block w-100 h-100" src="../view/imgs/Banner7.jpg" alt="Third slide">
      </div> -->
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<div class="boxcenter-view">
    <section class="border-b-4 border-[#FF5B1E] pb-2 mt-[3rem]">
        <span class="text-3xl font-bold mr-2 text-[#333]">DANH MỤC</span>
        <span class="text-3xl text-[#ADADAD]">SẢN PHẨM</span>
    </section>

    <div class="body row">
        <div class="w-[24%] float-left mr">
            <?php include "boxright.php"?></div>
        </div>
        <div class="w-[74%] float-left demo">
            <div class="row flex flex-wrap justify-between">
                <?php
                    if(isset($_SESSION["nguoidung"])) {
                        extract($_SESSION["nguoidung"]);
                        foreach($spnew as $sp) {
                            extract($sp);
                            $hinh=$img_path.$img;
                            $linksp="userController.php?act=product_detail&idsp=".$id;
                            echo '<div class="w-[31%] border-all rounded-md mb-[2rem] min-h-[9.375rem] text-center 
                            hover:scale-110 hover:shadow-[0.4rem_0.4rem_0.5rem_0.4rem_rgba(0,0,0,0.3)] duration-300 bg-white">
                                    <a class="block" href="'.$linksp.'">
                                        <div class="row flex flex-col justify-center items-center img">
                                            <img src="'.$hinh.'"/>
                                            <h3 class="font-bold text-xl text-[#FF5B1E] my-4">'.$tensp.'</h3>
                                        </div>
                                    </a>
                                </div>';
                        }
                    } else {
                        foreach($spnew as $sp) {
                            extract($sp);
                            $hinh=$img_path.$img;
                            $linksp="userController.php?act=sign_up";
                            echo '<div class="w-[31%] border-all rounded-md mb-[2rem] min-h-[9.375rem] text-center
                            hover:scale-110 hover:shadow-[0.4rem_0.4rem_0.5rem_0.4rem_rgba(0,0,0,0.3)] duration-300 bg-white">
                                    <a class="block cursor-pointer" data-toggle="modal" data-target="#exampleModalCenter">
                                        <div class="row flex flex-col justify-center items-center img">
                                            <img src="'.$hinh.'"/>
                                            <h3 class="font-bold text-xl text-[#FF5B1E] my-4">'.$tensp.'</h3>
                                        </div>
                                    </a>
                                </div>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
<div>