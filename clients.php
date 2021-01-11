<?php

include 'top.php';

?>
    <div class="container">

        <h1 class="pages-title">Clients</h1>

        <fieldset class="projects pages-sect">
            <legend id="client-legend"><a class="active" onclick="showAll(this)">All</a> - <a onclick="showAcademic(this)">Academic</a> - <a onclick="showClubs(this)">Clubs</a> - <a onclick="showPD(this)">Private Development</a></legend>
            <div class="icon-container">
                <div class="card" id="bpb-client-card">
                    <img src="images/logos/bpb-logo.png" alt="Boston Private Bank Logo" class="client-logos"/>
                </div>
                <div class="card" id="brooks-client-card">
                    <a href="brooks.php">
                        <img src="images/logos/brooks-logo.png" alt="Brooks School Logo" class="client-logos"/>
                    </a>
                </div>
                <div class="card" id="bbn-client-card">
                    <a href="bbnms.php">
                        <img src="images/logos/bbn-logo.png" alt="Buckingham Browne & Nichols Logo" class="client-logos" id="bbn-logo"/>
                    </a>
                </div>
                <div class="card" id="cc-brookline-client-card">
                    <a href="brookline_cc.php">
                        <img src="images/logos/cc-brookline-logo.png" alt="The Country Club at Brookline Logo" class="client-logos" id="cc-brookline-logo"/>
                    </a>
                </div>
                <div class="card" id="myopia-client-card">
                    <a href="myopia_hunt.php">
                        <img src="images/logos/myopia-logo.png" alt="Myopia Hunt Club Logo" class="client-logos" id="bbn-logo"/>
                    </a>
                </div>
                <div class="card" id="pappas-client-card">
                    <a href="macallen.php">
                        <img src="images/logos/pappas-logo.png" alt="Pappas Properties Logo" class="client-logos" id="pappas-logo"/>
                    </a>
                </div>
                <div class="card" id="andover-client-card">
                    <a href="phillips.php">
                        <img src="images/logos/phillips-logo.png" alt="Phillips Academy Andover Logo" class="client-logos"/>
                    </a>
                </div>
                <div class="card" id="pingree-client-card">
                    <a href="pingree.php">
                        <img src="images/logos/pingree-logo.png" alt="Pingree School Logo" class="client-logos"/>
                    </a>
                </div>
            </div>
        </fieldset>
    </div>


<script>

    // Script for displaying categoried clients

    const clientLegend = document.getElementById('client-legend');

    const bpb = document.getElementById('bpb-client-card');
    const brooks = document.getElementById('brooks-client-card');
    const bbn = document.getElementById('bbn-client-card');
    const andover = document.getElementById('andover-client-card');
    const pappas = document.getElementById('pappas-client-card');
    const pingree = document.getElementById('pingree-client-card');
    const myopia = document.getElementById('myopia-client-card');
    const ccb = document.getElementById('cc-brookline-client-card');


    // showAll() shows all cards
    function showAll(a) {

        clearIcons();
        clearLinks();
        a.classList.add("active");

        bpb.style.display = "block";
        brooks.style.display = "block";
        bbn.style.display = "block";
        andover.style.display = "block";
        pappas.style.display = "block";
        pingree.style.display = "block";
        myopia.style.display = "block";
        ccb.style.display = "block";

    }


    // showAdademic() really just hides any card not Academic
    function showAcademic(a) {
        clearIcons();
        clearLinks();
        a.classList.add("active");

        brooks.style.display = "block";
        bbn.style.display = "block";
        andover.style.display = "block";
        pingree.style.display = "block";



    }

    // showClubs() really just hides any card not Clubs
    function showClubs(a) {
        clearIcons();
        clearLinks();
        a.classList.add("active");

        myopia.style.display = "block";
        ccb.style.display = "block";



    }


    function showPD(a) {

        clearIcons();
        clearLinks();
        a.classList.add("active");

        bpb.style.display = "block";
        pappas.style.display = "block";

    }
    
    function clearLinks() {
        clientLegend.querySelector(".active").classList.remove("active");
    }

    function clearIcons() {
        bpb.style.display = "none";
        brooks.style.display = "none";
        bbn.style.display = "none";
        andover.style.display = "none";
        pappas.style.display = "none";
        pingree.style.display = "none";
        myopia.style.display = "none";
        ccb.style.display = "none";
     
    }


</script>

    
<?php

include 'footer.php';

?>