<?php

include 'top.php';

?>



<h1 class="pages-title">Awards & Recognition</h1>

<div class="container">


<section class="awards page-sect">




        <div class="awards-container">
            <div class="award">
                <div class="award-info">
                    <div class="name-container">
                        <h2>Phillips Academy Snyder Center</h2>
                        <h3>2018</h3>
                    </div>
                    <ul class="awards-list">
                        <li><p>
                            US Green Building Council LEED-NC, Level Platinum
                        </p></li> 
                    </ul>

                </div>
                <div class="award-image">
                    <img src="images/logos/leed.png" alt="" class="client-logos">
                </div>


            </div>

            <div class="award">
                <div class="award-info">
                    <div class="name-container">
                        <h2>Buckingham Browne & Nichols Middle School Project</h2>
                        <h3>2016</h3>
                    </div>

                    <ul class="awards-list">
                        <li><p>
                        Outstanding design award from American School and University Magazine
                        </p></li> 
                    </ul>
                </div>

                <div class="award-image">
                </div>

            </div>

            <div class="award">
                <div class="name-container">
                    <h2>Pingree School Athletic Complex</h2>
                    <h3>2015</h3>
                </div>

                <ul class="awards-list">
                    <li><p>2015 Excellence in Construction Merit and Safety Award for Pre-Engineered Building category 
                        by the Associated Builders and Contractors of Massachusetts
                    </p></li> 
                </ul>
            </div>
            <div class="award">
                <div class="name-container">
                    <h2>Paresky Commons | Phillips Academy Andover</h2>
                    <h3>2010</h3>
                </div>
                <ul class="awards-list">
                    <li><p>
                    LEED Silver Certification – US Green Building Council December 2010
                    </p></li> 
                    <li><p>
                    Energy and Water Conservation Green Thread Program- Aramark 2010
                    </p></li> 
                    <li><p>
                    Facility Design Project of the year, Honorable Mention- Food Service Equipment & Supply 2010
                    </p></li> 
                    <li><p>
                    Foodservice Equipment & Supplies Project of the Month, June 2009
                    </p></li> 
                    <li><p>
                    2011 Preservation Massachusetts Award ( Paul E. Tsongas Award recipient) for Restoration and Green/Sustainable/LEED Certified
                    </p></li> 
                    <li><p>
                    2013 William D. Smith Memorial Award for design that integrates accessibility with historic preservation presented by Massachusetts Architectural Access Board
                    </p></li> 

                </ul>
            </div>
            <div class="award">
                <div class="name-container">
                    <h2>The Macallen Building | Boston, MA</h2>
                    <h3>2007</h3>
                </div>
                <ul class="awards-list">
                    <li><p>
                    The International Facility Management Association award for best Sustainable Design Award, 2007
                    </p></li> 
                    <li><p>
                    AIA Housing Awards-2008 Multifamily Housing Award
                    </p></li> 
                    <li><p>
                    Recipient AIA Committee on The Environment (COTE) Award Top Ten Award 2008
                    </p></li> 
                    <li><p>
                    2008 Residential Architect Design Award (rada) - Grand Level
                    </p></li> 
                    <li><p>
                    2008 AIA Green Building Award
                    </p></li> 
                    <li><p>
                    Construction Management Association of America 2008 Private Project of the Year, $50 Million to $100 Million category
                    </p></li> 
                    <li><p>
                    American Society of Landscape Architects General Design Category 2009 Honor Award
                    </p></li> 
                    <li><p>
                    Green Roofs for Healthy Cities “Awards of Excellence 2009-Intensive Residential”
                    </p></li> 
                    <li><p>
                    2008 Preservation Achievement Award presented by the Boston Preservation Alliance
                    </p></li> 
                    <li><p>
                    2008 Best Housing Award presented by Residential Architectural Magazine
                    </p></li>
                    <li><p>
                    ACEC Massachusetts 2008 Engineering Excellence Award
                    </p></li> 
                    <li><p>
                    2009 ASLA Professional Award- General Design Category
                    </p></li> 
                    <li><p>
                    2009 Green Roofs for Healthy Cities Award of Excellence - Intensive Residential Category
                    </p></li>

                </ul>
            </div>
            <div class="award">
                <div class="name-container">
                    <h2>Pingree School Academic Building | Hamilton, MA</h2>
                    <h3>2005</h3>
                </div>
                <ul class="awards-list">
                    <li><p>
                    The Outstanding Designs award for Common Areas from American School & University, 2005
                    </p></li> 
                    <li><p>
                    The 2005 Excellence in Construction Merit Award by the Associated Builders and Contractors of Massachusetts
                    </p></li> 
                    <li><p>
                    Accessible Design Honorable Mention Award from the Massachusetts Architectural Access Board and Boston Society of Architects
                    </p></li> 


                </ul>
            </div>
            <div class="award">
                <div class="name-container">
                    <h2>The Belmont Hill School Athletic Complex</h2>
                    <h3>2002</h3>
                </div>
                <ul class="awards-list">
                    <li><p>
                    2002 Specialized Citation, Architectural Portfolio, American School & University
                    </p></li> 
                    <li><p>
                    2003 New Construction Awards Program, Specialty Spaces, Building Magazine
                    </p></li> 
                    <li><p>
                    2003 Innovative Architecture & Design, Recreation Management
                    </p></li> 
                </ul>
            </div>
            <div class="award">
                <div class="name-container">
                    <h2>Gateway Complex | White Plains, NY</h2>
                    <h3>1985</h3>
                </div>
                <ul class="awards-list">
                    <li><p>
                    1985 Honor Award in Engineering Excellence, American Consulting Engineers Council
                    </p></li> 
                    <li><p>
                    featured in the July 18, 1985 issue of Engineering News Record
                    </p></li> 
                </ul>
            </div>
        </div>
        <button class="scroll-btn"><i class="fas fa-chevron-up"></i></button>
    </section>
</div>

 <script>
     const scrollBtn = document.querySelector(".scroll-btn");

     window.onscroll = function() {scrollFunction()};

     function scrollFunction() {
         if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
             scrollBtn.style.display = "block";
         } else {
             scrollBtn.style.display = "none";
         }
     }

     scrollBtn.addEventListener("click", e => {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
     })
 </script>

<?php

include 'footer.php';

?>