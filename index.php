
<?php

include 'top.php';

?>
    
    <section class="showcase">
        <div class="slider">
            <div class="slide current">
                <div class="content">
                    <h1>Snyder Athletic Center</h1>
                    <p>Phillips Academy Andover</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, maiores quis voluptate error minima facilis.</p>
                    <a href=""class="see-more-btn">See More<i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <h1>Slide Two</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, maiores quis voluptate error minima facilis.</p>
                    <a class="see-more-btn">See More<i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <h1>Slide Three</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, maiores quis voluptate error minima facilis.</p>
                    <a class="see-more-btn">See More<i class="fas fa-chevron-right"></i></a>

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

    <section class="mantra">
        <h1>Safe. Sustainable. Innovative.</h1>
        
    </section>

    <section class="attributes">
            <div class="atr-wrapper">
                <div class="atr-container">
                    <p>In Business Since</p><br>
                    <h1>1999</h1>
                </div>
                <div class="atr-container">
                    <p>Over</p><br>
                    <h1>$400 Million</h1><br>
                    <p>in Project Management</p>
                </div>
            </div>
 

    </section>

    <section class="awards-home">

        <div id="awards-wrapper">

            <h1>Multi-Award-Winning</h1>
            <div class="icon-container">
                <div class="card">
                    <img src="images/logos/leed.png" alt="" class="client-logos">
                </div>
                <div class="card">
                    <img src="images/logos/asuap.png" alt="" class="client-logos">
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


    </script>

</body>
</html>