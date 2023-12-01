<div class="boxcenter-view">
    <section class="border-b-4 border-[#FF5B1E] pb-2 mt-[3rem]">
        <span class="text-3xl font-bold mr-2 text-[#333]">DANH MỤC</span>
        <span class="text-3xl text-[#ADADAD]">SẢN PHẨM</span>
    </section>
    <div class="mb row body">
        <div class="w-[24%] float-left mr">
            <?php include "../view/boxright.php";?></div>
        </div>
        <div class="w-[74%] float-left demo">
            <div class="row mb">
                <div class="text-[#FF5B1E] text-4xl font-bold w-full text-center mb-5">GIỎ HÀNG</div>
                <div class="row boxcontent border-0 p-0 cart">
                    <?php  
                        viewcart();
                    ?>
                    <br/>
                    <!-- <script>
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
                    </script> -->
                    <!-- <input type="submit" value="Thanh toan" name="thanhtoan"/> -->
                </div>      
            </div>
            <!-- <div class="row mb bill">
                <input type="submit" value="DONG Y DAT HANG"/>
                <a href="index.php?act=delcart"><input type="button" value="XOA GIO HANG"/></a>
            </div> -->
        </div>
    </div>
</div>



