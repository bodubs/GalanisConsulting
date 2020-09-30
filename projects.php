<?php

include 'top.php';

?>
    <div class="container">

        <h1 class="pages-title">Projects Gallery</h1>

        <fieldset class="projects pages-sect">
            <legend><a onclick="showAll()" id="all-proj-tab">All</a> - <a onclick="showAcademic()" id="academic-proj-tab">Academic</a> - <a onclick="showClubs()" id="club-proj-tab">Clubs</a> - <a onclick="showPrivDev()" id="pd-proj-tab">Private Development</a></legend>
            <div class="card-container">
                <div class="card" id="andover-inn-proj-card">
                    <a href="andover_inn.php">
                        <div class="content-container">
                            <img src="images/projects/andover_inn.jpg" alt="Andover Inn" class="projects-img"/>
                            <div class="view-project-middle">
                                <div class="view-project-text">View Project</div>
                            </div>
                        </div>
                        <div class="proj-img-text-div">
                            <p>Andover Inn</p>
                            <p>Phillips Academy</p>
                        </div>
                    </a>
                </div>
                <div class="card" id="andover-commons-proj-card">
                    <a href="andover_commons.php">
                        <div class="content-container">
                            <img src="images/projects/andover_commons.jpg" alt="Phillips Academy Commons" class="projects-img"/>
                            <div class="view-project-middle">
                                <div class="view-project-text">View Project</div>
                            </div>
                        </div>
                        <div class="proj-img-text-div">
                            <p>Andover Commons</p>
                            <p>Phillips Academy</p>
                        </div>
                    </a>
                </div>
                <div class="card" id="andover-boat-house-proj-card">
                    <a href="andover_boat_house.php">
                        <div class="content-container">
                            <img src="images/projects/boat_house.jpg" alt="Phillips Academy Boat House" class="projects-img"/>
                            <div class="view-project-middle">
                                <div class="view-project-text">View Project</div>
                            </div>
                        </div>
                        <div class="proj-img-text-div">
                            <p>Boat House</p>
                            <p>Phillips Academy</p>
                        </div>
                    </a>
                </div>
                <div class="card" id="bulfinch-proj-card">
                    <a href="bulfinch.php">
                        <div class="content-container">
                            <img src="images/projects/Bulfinch1.JPG" alt="Phillips Academy Bulfinch Hall" class="projects-img"/>
                            <div class="view-project-middle">
                                <div class="view-project-text">View Project</div>
                            </div>
                        </div>
                        <div class="proj-img-text-div">
                            <p>Bulfinch Hall</p>
                            <p>Phillips Academy</p>
                        </div>
                    </a>
                </div>
                <div class="card" id="owh-library-proj-card">
                    <a href="owh_library.php">
                        <div class="content-container">
                            <img src="images/projects/owh_library.jpg" alt="Phillips Academy Oliver Wendell Holmes Library" class="projects-img"/>
                            <div class="view-project-middle">
                                <div class="view-project-text">View Project</div>
                            </div>
                        </div>
                        <div class="proj-img-text-div">
                            <p>Oliver Wendell Holmes Library</p>
                            <p>Phillips Academy</p>
                        </div>
                    </a>
                </div>
                <div class="card" id="snyder-proj-card">
                    <a href="snyder.php">
                        <div class="content-container">
                            <img src="images/projects/snyder_center.jpg" alt="Phillips Academy Snyder Athletic Center" class="projects-img"/>
                            <div class="view-project-middle">
                                <div class="view-project-text">View Project</div>
                            </div>
                        </div>
                        <div class="proj-img-text-div">
                            <p>Snyder Athletic Center</p>
                            <p>Phillips Academy</p>
                        </div>
                    </a>
                </div>
                <div class="card" id="ashburn-chapel-proj-card">
                    <a href="ashburn_chapel.php">
                        <div class="content-container">
                            <img src="images/projects/brooks_chapel_sketch.jpg" alt="Brooks School Ashburn Chapel" class="projects-img"/>
                            <div class="view-project-middle">
                                <div class="view-project-text">View Project</div>
                            </div>
                        </div>
                        <div class="proj-img-text-div">
                            <p>Ashburn Chapel</p>
                            <p>Brooks School</p>
                        </div>
                    </a>
                </div>
            </div>
        </fieldset>
    </div>

<script>

    // **************** Script for displaying categoried projects *********************** //

    var activeTabColor = "#5f5b17";


    // showAll() shows all cards
    function showAll() {

        // Display: Block on Academic
        document.getElementById('andover-inn-proj-card').style.display = "block";
        document.getElementById('andover-commons-proj-card').style.display = "block";
        document.getElementById('andover-boat-house-proj-card').style.display = "block";
        document.getElementById('bulfinch-proj-card').style.display = "block";
        document.getElementById('owh-library-proj-card').style.display = "block";
        document.getElementById('snyder-proj-card').style.display = "block";
        document.getElementById('ashburn-chapel-proj-card').style.display = "block";

        // Change tab color
        document.getElementById('all-proj-tab').style.color = activeTabColor;
        document.getElementById('academic-proj-tab').style.color = "black";
        document.getElementById('club-proj-tab').style.color = "black";
        document.getElementById('pd-proj-tab').style.color = "black";

    }


    // showAdademic() really just hides any card not Academic
    function showAcademic() {

        // Hide all Clubs
        

        // Hide all Private Development

        // Display: Block on Academic
        document.getElementById('andover-inn-proj-card').style.display = "block";
        document.getElementById('andover-commons-proj-card').style.display = "block";
        document.getElementById('andover-boat-house-proj-card').style.display = "block";
        document.getElementById('bulfinch-proj-card').style.display = "block";
        document.getElementById('owh-library-proj-card').style.display = "block";
        document.getElementById('snyder-proj-card').style.display = "block";
        document.getElementById('ashburn-chapel-proj-card').style.display = "block";

        // Change tab color
        document.getElementById('all-proj-tab').style.color = "black";
        document.getElementById('academic-proj-tab').style.color = activeTabColor;
        document.getElementById('club-proj-tab').style.color = "black";
        document.getElementById('pd-proj-tab').style.color = "black";

    }

    // showClubs() really just hides any card not Clubs
    function showClubs() {

        // Hide all Academic
        document.getElementById('andover-inn-proj-card').style.display = "none";
        document.getElementById('andover-commons-proj-card').style.display = "none";
        document.getElementById('andover-boat-house-proj-card').style.display = "none";
        document.getElementById('bulfinch-proj-card').style.display = "none";
        document.getElementById('owh-library-proj-card').style.display = "none";
        document.getElementById('snyder-proj-card').style.display = "none";
        document.getElementById('ashburn-chapel-proj-card').style.display = "none";

        // Hide all Private Development

        // Change tab color
        document.getElementById('all-proj-tab').style.color = "black";
        document.getElementById('academic-proj-tab').style.color = "black";
        document.getElementById('club-proj-tab').style.color = activeTabColor;
        document.getElementById('pd-proj-tab').style.color = "black";

    }

    // showPrivDev() really just hides any card not Private Development
    function showPrivDev() {

        // Hide all Academic
        document.getElementById('andover-inn-proj-card').style.display = "none";
        document.getElementById('andover-commons-proj-card').style.display = "none";
        document.getElementById('andover-boat-house-proj-card').style.display = "none";
        document.getElementById('bulfinch-proj-card').style.display = "none";
        document.getElementById('owh-library-proj-card').style.display = "none";
        document.getElementById('snyder-proj-card').style.display = "none";
        document.getElementById('ashburn-chapel-proj-card').style.display = "none";

        // Hide all Clubs

        // Change tab color
        document.getElementById('all-proj-tab').style.color = "black";
        document.getElementById('academic-proj-tab').style.color = "black";
        document.getElementById('club-proj-tab').style.color = "black";
        document.getElementById('pd-proj-tab').style.color = activeTabColor;

    }

</script>

    
<?php

include 'footer.php';

?>