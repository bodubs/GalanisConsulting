
<?php include('top.php'); ?>

<section class="contact">
    <div class="form-container">
        <h1>Contact Us</h1>
        <form method="post" action="">
                <p>
                    <label>Name*</label>
                    <input type="text" name="name" class="form-input" value="">
                </p>
                <p>
                    <label>Email Address*</label>
                    <input type="text" name="email" class="form-input" value="">
                </p>
                <p>
                    <label>Phone Number</label>
                        <input type="text" name="phone" class="form-input" value="">
                    </label>
                </p>
                <p class="full">
                    <label>Message</label>
                    <textarea type="text" rows="5" name="message" class="form-input"
                    ></textarea>
                </p>
                <p class="full">
                    <button type="submit" name="submit" class="submit-btn">Submit</button>
                 </p>
            </form>

    </div>

</section>
