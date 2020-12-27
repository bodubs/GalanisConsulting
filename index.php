
<?php

include 'top.php';

?>
    
    <section class="showcase">
        <div class="slider">
            <div class="slide current">
                <div class="content">
                    <h3>MacAllen Building, South Boston MA</h3>
                    <p>The project involved the construction of a new 15 story, 354,000 sf structural steel residential building that will contain 143 apartments...</p>
                    <a href="macallen.php" class="see-more-btn">See More<i class="fas fa-chevron-right"></i></a>

                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <h3>Snyder Athletic Center, Andover MA</h3>
                    <p>Completed in 2017, the multi-sport field house facility holds a LEED Platinum designation...</p>
                    <a href="snyder.php"class="see-more-btn">See More<i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <h3>Bulfinch Hall, Andover MA</h3>
                    <p>The historic building's most recent restaurantion was 1,400 SF addition with a "green roof"...</p>
                    <a href="bulfinch.php" class="see-more-btn">See More<i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <h3>Anover Inn, Andover MA</h3>
                    <p>Listed on the National Register of Historic Inns and a campus icon since 1930, the inn is known regionally and nationally...</p>
                    <a href="andover_inn.php" class="see-more-btn">See More<i class="fas fa-chevron-right"></i></a>

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
            <button class="nav-dot" onclick="currentSlide(4)"></button>
        </div>

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

        <div id="awards-wrapper" class="container">

            <h1>Proud recipient of multiple awards from the following organizations</h1>
            <div class="icon-container">
                <div>
                    <img src="images/logos/leed.png" alt="" class="award-img">
                </div>

                <div>
                    <img src="images/logos/abc-logo.png" alt="" class="award-img">
                </div>
                <div>
                    <img src="images/logos/rm-award.gif" alt="" class="award-img">
                </div>
                <div>
                    <img src="images/logos/asu.png" alt="" class="award-img">
                </div>

                <div>
                    <img src="images/logos/cmaa.png" alt="" class="award-img">
                </div>

                <div>
                    <img src="images/logos/asla.png" alt="" class="award-img">
                </div>


            </div>
            <a href="awards.php" class="view-awards-btn">View Awards</a>

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