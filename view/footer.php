</div>
</div>
</div>
<div class="row bg-[#333] text-white p-[1.2rem] flex justify-center w-full">
    © 2021 Dave Chesson. All rights reserved.
</div>


<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 2000); 
    }

</script>


</body>
</html>

