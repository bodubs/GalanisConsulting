<?php

include 'top.php';

?>

<div class="projects-detail-container">

	<h2>Phillips Academy William H. Brown Boat House</h2>
	<h3>Andover, Massachusetts</h3><br>

	<p><strong>Client</strong><br>
		Phillips Academy Andover</p><br>

	<p><strong>Project Value</strong><br>
		$6.5 million</p><br>

	<p><strong>Completion</strong><br>
		2012</p><br>

	<p><strong>General Contractor</strong><br>
		Windover Construction</p><br>

	<p><strong>Architect</strong><br>
		Architectural Resources Cambridge</p><br>

	<div class="project-carousel-container">
		<div class="project-carousel">
			<div class="project-nav-arrow" id="arrow-left"><</div>
			<div class="project-slide fade">
				<img src="images/projects/boat_house.jpg" alt="">
			</div>
			<div class="project-slide fade">
				<img src="images/projects/boat-house2.jpg" alt="">
			</div>
			<div class="project-slide fade">
				<img src="images/projects/boat-house3.jpg" alt="">
			</div>
			<div class="project-slide fade">
				<img src="images/projects/boat-house4.jpg" alt="">
			</div>
			<div class="project-nav-arrow" id="arrow-right">></div>
		</div>

		<div class="thumbnail-track">
			<div class="thumbnail">
				<img src="images/projects/boat_house.jpg" alt="">
			</div>
			<div class="thumbnail">
				<img src="images/projects/boat-house2.jpg" alt="">
			</div>
			<div class="thumbnail">
				<img src="images/projects/boat-house3.jpg" alt="">
			</div>
			<div class="thumbnail">
				<img src="images/projects/boat-house4.jpg" alt="">
			</div>
		</div>

	</div>



<p>In 2010 Galanis Consulting assisted Phillips Academy in the purchasing of 5.8 acres of property along the banks of the Merrimack River in Methuen. The site at 620 Lowell Street served as the former General GMC truck dealership housing over 100 vehicles on the property.<br><br>The Academy refurbished the site for use by its varsity and instructional crew programs. The William H. Brown Boathouse was created by renovating an existing, prefabricated metal building dating from the 1970s. The building was transformed to its new use with a handful of modest upgrades to the existing structure, including new metal panel siding, an epoxy roof, and new oversized glass openings to maximize natural light coming into the building. The double-height great room forms the hub of activity on race-day events, with new glazed openings along its northern and eastern sides providing spectators with the opportunity to watch the races from indoors. A new boat launch area and docks were added along the Merrimac River.<br><br>Permitting was extensive with coordination conducted with the Army Corps of Engineers; Methuen Conservation Commission; Mass DEP; EPA; Massachusetts Fisheries Division.</p>


</div>



<script>


	var slideIndex = 1;
	showSlides(slideIndex);
	updateThumbnails();

	function showSlides(n){
		var i;
		const slides = document.getElementsByClassName("project-slide");
		if (n > slides.length) {slideIndex = 1}
		if (n < 1) {slideIndex = slides.length}
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}

		slides[slideIndex-1].style.display = "block";
	}

	function updateThumbnails(){
		const thumbnails = document.getElementsByClassName("thumbnail");

		for (var i = 0; i < thumbnails.length; i++){
			if(thumbnails[i].classList.contains("selected")){
				console.log("This is selected");
				thumbnails[i].classList.remove("selected");
			}
		}

		thumbnails[slideIndex-1].classList.add("selected");




	}

	document.getElementById("arrow-left").addEventListener("click", e =>{
		showSlides(slideIndex += -1);
		updateThumbnails();
	})

	document.getElementById("arrow-right").addEventListener("click", e =>{
		showSlides(slideIndex += 1);
		updateThumbnails();
	})
</script>


<?php

include 'footer.php';

?>