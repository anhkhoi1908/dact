<div class="boxcenter-view">
    <section class="border-b-4 border-[#FF5B1E] pb-2 mt-[3rem]">
        <span class="text-3xl font-bold mr-2 text-[#333]">DANH MỤC</span>
        <span class="text-3xl text-[#ADADAD]">SẢN PHẨM</span>
    </section>
    <div class="mb row body">
        <div class="w-[24%] float-left mr">
            <?php include "boxright.php";?></div>
        </div>
        <div class="w-[74%] float-left demo">
            <div class="row mb">    
                <?php
                    extract($onesp);
                ?>
                <div class="text-[#FF5B1E] text-4xl font-bold w-full text-center mb-5"><?=$tensp?></div>
                <div class="row boxcontent border-all bg-white">
                <?php   
                    $img=$img_path.$img;
                    echo '<div class="spct">
                            <div class="flex justify-center text-center"><img class="img-spct w-1/2 h-1/2" src="'.$img.'"/></div>
                            <p>'.$mota.'</p><br/>
                            <h2 class="text-[2rem] font-bold">'.number_format($price).' VNĐ</h2>
                        </div>';
                    echo '<div class="row btnaddtocart inline-block text-end">
                    <form action="userController.php?act=addtocart" method="post">
                        <input type="hidden" name="id" value="'.$id.'"/>    
                        <input type="hidden" name="tensp" value="'.$tensp.'"/>
                        <input type="hidden" name="price" value="'.$price.'"/>
                        <input type="hidden" name="img" value="'.$img.'"/>
                        <div class="flex items-center justify-end">
                            <span class="minus-btn cursor-pointer" onclick="handleMinus()">
                                <i class="fa-solid fa-minus"></i>
                            </span>
                            <input type="text" name="soluong" value="1" min=1 max=50 id="amount" class="border-all w-10 
                            text-center mx-4 p-2"/><br/>
                            <span class="plus-btn cursor-pointer" onclick="handlePlus()">
                                <i class="fa-solid fa-plus"></i>
                            </span>
                        </div>
                        <input type="submit" name="addtocart" value="Thêm vào giỏ hàng" class="!bg-[#FF5B1E] text-white py-6 px-10 font-bold mt-4 rounded-md"/>
                    </form>
                </div>';
                ?>
                </div>
            </div>
            <script>
                let amountElement =document.getElementById('amount');
                let amount = amountElement.value;
                
                const render = (amount) => {
                    amountElement.value = amount;
                }

                const handlePlus = () => {
                    amount ++;
                    render(amount);
                }

                const handleMinus = () => {
                    if (amount > 1) {
                        amount --;
                    }
                    render(amount);
                }

                amountElement.addEventListener('input', () => {
                    let amount = amountElement.value;
                    amount = parseInt(amount);
                    amount = (isNaN(amount) || amount == 0) ? 1 : amount ;
                    render(amount);
                    console.log(amount);
                })
            </script>
            

            <div class="row mb">
            <section class="border-b-4 border-[#FF5B1E] pb-2 my-[3rem] w-full">
                <span class="text-3xl font-bold mr-2 text-[#333]">SẢN PHẨM</span>
                <span class="text-3xl text-[#ADADAD]">CÙNG LOẠI</span>
            </section>
                <div class="row flex flex-wrap justify-between">
                    <?php
                        if(!empty($sp_cung_loai)) {
                            foreach($sp_cung_loai as $item) {
                                extract($item);
                                $linkspcl="userController.php?act=product_detail&idsp=".$id;
                                $img=$img_path.$img;
                                echo '<li class="list-none bg-white w-[31%] border-all rounded-md mb-[2rem] min-h-[9.375rem] text-center
                                hover:scale-110 hover:shadow-[0.4rem_0.4rem_0.5rem_0.4rem_rgba(0,0,0,0.3)] duration-300">
                                        <a class="block" href="'.$linkspcl.'">
                                            <div class="row flex flex-col justify-center items-center img">
                                                <img class="" src="'.$img.'" alt=""/>
                                                <span class="font-bold text-xl text-[#FF5B1E] my-4">'.$tensp.'</span>
                                            </div>
                                        </a>
                                    </li>';
                            }
                        } else {
                            echo 'Đang cập nhật...';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

