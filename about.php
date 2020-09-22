
<?php include('top.php'); ?>

<h1 class="pages-title">About</h1>

<section id="about-llc">
    <div class="container">
        <div class="about-llc-container">
            <p>Started in 1999, Galanis Consulting LLC has provided over $400 million in project managment services to a variety of clients in the greater Boston area</p>
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="bio-container">
            <img id="yani" src="images/yani.jpg" alt="John Galanis Portrait">
            <p>John Galanis has more than 37 years experience in the project planning and construction 
                management of academic, historic, institutional, commercial, industrial, casino, hotel, 
                and residential structures working directly for building owners and institutions. 
                His various supervisory positions from "hands on" supervision of field staff to the role 
                of Project Manager have allowed him to provide cost effective analysis and value to a 
                wide variety of projects. In the past 13 years Galanis Consulting has managed over $220 
                million in construction projects working firectly for owners.
            </p>
        </div>
    </div>
</section>

<section class="early-work">
    <div class="container">
        <div class="early-work-container">
            <h1>Earlier Work</h1>

            <div id="early-work-grid">

                <div class="early-work-card" onclick="showDetails(1)">
                    <p><strong>Project Manager</strong></p>
                    <p>Lend Lease</p>
                    <p>1995-1998</p>
                    <p>Boston, MA</p>
                </div>

                <div class="early-work-card" onclick="showDetails(2)">
                    <p><strong>Project Manager</strong></p>
                    <p>Pappas Properties</p>
                    <p>1987-1995</p>
                    <p>Boston, MA</p>
                </div>

                <div class="early-work-card" onclick="showDetails(3)">
                    <p><strong>Project Engineer</strong></p>
                    <p>Pappas Properties</p>
                    <p>1984-1987</p>
                    <p>Boston, MA</p>
                </div>

                <div class="early-work-card" onclick="showDetails(4)">
                    <p><strong>Field Engineer</strong></p>
                    <p>Perini Corporation</p>
                    <p>1982-1984</p>
                    <p>Atlantic City, NJ</p>
                </div>

            </div>

            <div id="lend-lease" style="display:none;">
                <br><p>Projects Include:</p><br>
                <p>Roxbury DWD, Nantucket C.O. structural renovations, Natick DWD, Somerville broad band, Foxboro Hot Slide, Braintree mega center, and various office renovation projects at 185 Franklin Street, 245 State Street and 125 High Street in Boston, Massachusetts.</p>
            </div>

            <div id="pappas-pm" style="display:none;">
                <br><p>Projects Include:</p><br>
                <p>“National Historic Landmark” as listed by the United States Department of Interior with approximately 23,000sf designed by architect Alexander Parris.</p>
            </div>

            <div id="pappas-pe" style="display:none;">
                <br><p>Projects Include:</p><br>
                <p>Superintendent for a 500,000 SF office and retail building. Cast-in-place concrete/post tensioned structure. Total value $50 million.</p>
            </div>

            <div id="perini" style="display:none;">
                <br><p>Projects Include:</p><br>
                <p>Trump Plaza Hotel/Casino-Perini Corporation: Atlantic City, NJ Field engineer for a thirty-four story hotel, casino, pool, theater, and 250 car underground garage. 1,100,000 SF, $120 million value</p>
            </div>

        </div>
    </div>
</section>

<section id="education">
    <div class="container">
        
        <h1>Education</h1>

        <div id="edu-div">
            <div>
                <p><strong>Tufts University</strong></p>
                <p>Bachelor of Science in Civil Engineering</p>
                <p>1978-1982</p>
            </div>
            <div>
                <img src="images/logos/tufts-logo.png" alt="Tufts Logo" id="tufts-logo" />
            </div>
        </div>
    </div>
</section>

<script>

    function showDetails(n) {

        document.getElementById('lend-lease').style.display = "none";
        document.getElementById('pappas-pm').style.display = "none";
        document.getElementById('pappas-pe').style.display = "none";
        document.getElementById('perini').style.display = "none";

        if (n == 1) {
            document.getElementById('lend-lease').style.display = "block";
        } else if (n == 2) {
            document.getElementById('pappas-pm').style.display = "block";
        } else if (n == 3) {
            document.getElementById('pappas-pe').style.display = "block";
        } else if (n == 4) {
            document.getElementById('perini').style.display = "block";
        }
    }

</script>


<?php include('footer.php'); ?>