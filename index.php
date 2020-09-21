
<?php

include 'top.php';

?>
    
    <section class="showcase">
        <div class="slider">
            <div class="slide current">
                <div class="content">
                    <h1>Slide One</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, maiores quis voluptate error minima facilis.</p>
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <h1>Slide Two</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, maiores quis voluptate error minima facilis.</p>
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <h1>Slide Three</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, maiores quis voluptate error minima facilis.</p>
                </div>
            </div>
        </div>
        <div class="buttons">
            <button id="prev-btn" onclick="moveSlides(-1)"><i class="fas fa-arrow-left"></i></button>
            <button id="next-btn" onclick="moveSlides(+1)"><i class="fas fa-arrow-right"></i></button>
        </div>
        <div class="slider-nav">
            <button class="nav-dot current" onclick="currentSlide(1)"></button>
            <button class="nav-dot" onclick="currentSlide(2)"></button>
            <button class="nav-dot" onclick="currentSlide(3)"></button>
        </div>

    </section>

    <section class="white-space">
        
    </section>

    <section class="attributes">
        <div class="container">
            <div class="atr-wrapper">
                <div class="atr-container">
                    <h1>$400 million</h1>
                </div>
                <div class="atr-container">
                    <h1>Coolest architecture</h1>
                </div>
                <div class="atr-container">
                    <h1>Idk a lot of money</h1>
                </div>
            </div>
 
        </div>

    </section>

    <?php include('footer.php'); ?>

    <script>

        const slides = document.querySelectorAll(".slide");
        const nextBtn = document.querySelector("#next-btn");
        const prevBtn = document.querySelector("#prev-btn");
        const navDots = document.querySelectorAll(".nav-dot");

        var slideIndex = 1;

        showSlides(slideIndex);

        

        function showSlides(n) {
            var i;
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].classList.remove("current");
            }

            for (i = 0; i < navDots.length; i++) {
                navDots[i].classList.remove("current");
            }

            slides[slideIndex-1].classList.add("current");
            navDots[slideIndex-1].classList.add("current");
        }

        function moveSlides(n) {
            showSlides(slideIndex += n);
        }
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        /*   
        const nextSlide = () => {
            const currentSlide = document.querySelector(".slide.current");
            currentSlide.classList.remove("current");

            if(currentSlide.nextElementSibling){
                currentSlide.nextElementSibling.classList.add("current");
            } else {
                slides[0].classList.add("current")
            }
        }

        const prevSlide = () => {
            const currentSlide = document.querySelector(".slide.current");
            currentSlide.classList.remove("current");

            if(currentSlide.previousElementSibling){
                currentSlide.previousElementSibling.classList.add("current");
            } else {
                slides[slides.length - 1].classList.add("current")
            }
        }

        const nextDot = () => {
            const currentDot = document.querySelector(".nav-dot.current");
            currentDot.classList.remove("current");

            if(currentDot.nextElementSibling) {
                currentDot.nextElementSibling.classList.add("current");
            } else {
                navDots[0].classList.add("current");
            }
        }

        const prevDot = () => {
            const currentDot = document.querySelector(".nav-dot.current");
            currentDot.classList.remove("current");

            if(currentDot.previousElementSibling) {
                currentDot.previousElementSibling.classList.add("current");
            } else {
                navDots[navDots.length - 1].classList.add("current");
            }
        }


        nextBtn.addEventListener("click", e => {
            nextSlide();
            nextDot();
        })
        prevBtn.addEventListener("click", e => {
            prevSlide();
            prevDot();
        })

        for(var i = 0; i < navDots.length; i++){
            navDots[i].addEventListener("click", e => {
                s
            })
        }

        */

    </script>

</body>
</html>