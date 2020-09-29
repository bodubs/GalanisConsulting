<?php

include 'top.php';

?>
    <div class="container">

        <h1 class="pages-title">Clients</h1>

        <fieldset class="projects">
            <legend><a onclick="showAll()">All</a> - <a onclick="showAcademic()">Academic</a> - <a onclick="showClubs()">Clubs</a> - Private Development</legend>
            <div class="card-container">
                <div class="card" id="brooks-client-card">
                    <a href="brooks.php">
                        <img src="images/logos/brooks-logo.png" alt="Brooks School Logo" class="client-logos"/>
                    </a>
                </div>
                <div class="card" id="bbn-client-card">
                    <a href="andover_inn.php">
                        <img src="images/logos/bbn-logo.png" alt="Buckingham Browne & Nichols Logo" class="client-logos" id="bbn-logo"/>
                    </a>
                </div>
                <div class="card" id="cc-brookline-client-card">
                    <a href="andover_inn.php">
                        <img src="images/logos/cc-brookline-logo.png" alt="The Country Club at Brookline Logo" class="client-logos" id="cc-brookline-logo"/>
                    </a>
                </div>
                <div class="card" id="myopia-client-card">
                    <a href="andover_inn.php">
                        <img src="images/logos/myopia-logo.png" alt="Myopia Hunt Club Logo" class="client-logos" id="bbn-logo"/>
                    </a>
                </div>
                <div class="card" id="andover-client-card">
                    <a href="phillips.php">
                        <img src="images/logos/phillips-logo.png" alt="Phillips Academy Andover Logo" class="client-logos"/>
                    </a>
                </div>
                <div class="card" id="pingree-client-card">
                    <a href="andover_inn.php">
                        <img src="images/logos/pingree-logo.png" alt="Pingree School Logo" class="client-logos"/>
                    </a>
                </div>
            </div>
        </fieldset>
    </div>


<script>

    // Script for displaying categoried clients


    // showAll() shows all cards
    function showAll() {

        document.getElementById('brooks-client-card').style.display = "block";
        document.getElementById('bbn-client-card').style.display = "block";
        document.getElementById('andover-client-card').style.display = "block";
        document.getElementById('pingree-client-card').style.display = "block";
        document.getElementById('myopia-client-card').style.display = "block";

    }


    // showAdademic() really just hides any card not Academic
    function showAcademic() {

        document.getElementById('myopia-client-card').style.display = "none";

    }

    // showClubs() really just hides any card not Clubs
    function showClubs() {

        document.getElementById('brooks-client-card').style.display = "none";
        document.getElementById('bbn-client-card').style.display = "none";
        document.getElementById('andover-client-card').style.display = "none";
        document.getElementById('pingree-client-card').style.display = "none";

    }

</script>

    
<?php

include 'footer.php';

?>