<?php

//include header file
include('include/header.php');

?>


<div class="container-fluid header-img">
    <div class="row">
        <div class="col-md-6 offset-md-3">

            <div class="header">
                <h1 class="text-center">Donate the blood, save the life</h1>
                <p class="text-center">Donate the blood to help the others.</p>
            </div>


            <h1 class="text-center">Search The Donors</h1>
            <hr class="white-bar text-center">

            <form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
                <div class="form-group text-center justify-content-center">

                    <select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default"
                        required>
                        <option value="">-- Select --</option>
                        <option value="Ahmedabad">Ahmedabad</option>
                        <option value="Amreli">Amreli</option>
                        <option value="Anand">Anand</option>
                        <option value="Aravalli">Aravalli</option>
                        <option value="Banaskantha">Banaskantha</option>
                        <option value="Bharuch">Bharuch</option>
                        <option value="Bhavnagar">Bhavnagar</option>
                        <option value="Botad">Botad</option>
                        <option value="Chhota Udepur">Chhota Udepur</option>
                        <option value="Dahod">Dahod</option>
                        <option value="Dangs">Dangs</option>
                        <option value="Devbhoomi Dwarka">Devbhoomi Dwarka</option>
                        <option value="Gandhinagar">Gandhinagar</option>
                        <option value="Gir Somnath">Gir Somnath</option>
                        <option value="Godhra">Godhra</option>
                        <option value="Jamnagar">Jamnagar</option>
                        <option value="Junagadh">Junagadh</option>
                        <option value="Kachchh">Kachchh</option>
                        <option value="Mahinagar">Mahinagar</option>
                        <option value="Mehsana">Mehsana</option>
                        <option value="Morbi">Morbi</option>
                        <option value="Nadiad">Nadiad</option>
                        <option value="Navsari">Navsari</option>
                        <option value="Patan">Patan</option>
                        <option value="Porbandar">Porbandar</option>
                        <option value="Rajkot">Rajkot</option>
                        <option value="Rajpipla">Rajpipla</option>
                        <option value="Sabarkantha(Himmatnagar)">Sabarkantha(Himmatnagar)</option>
                        <option value="Surat">Surat</option>
                        <option value="Surendranagar">Surendranagar</option>
                        <option value="Vadodara">Vadodara</option>
                        <option value="Valsad">Valsad</option>
                    </select>
                </div>
                <div class="form-group center-aligned">
                    <select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;"
                        class="form-control demo-default text-center margin10px">

                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>

                    </select>
                </div>
                <div class="form-group center-aligned">
                    <button type=" submit" class=" btn btn-lg btn-danger">Search</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- header ends -->

<!-- donate section -->
<div class="container-fluid red-background">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center" style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
            <hr class="white-bar">
            <p class="text-center pera-text">
                Online Blood Donation, New step towards Digital India
            </p>
            <a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
        </div>
    </div>
</div>
<!-- end doante section -->


<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <h3 class="text-center red">General Guidelines for Blood Donation
                </h3>
                <img src="img/img1.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
                <p class="text-center">
                <ul>1. Be in good general health and feeling well. </ul>
                <ul>2. Maintaining your iron level is an important part of being a healthy donor. We encourage you to
                    learn
                    more about iron and donating blood</ul>
                <ul>3. Be at least 17 years old in most states (16 years old with parental consent in some states).</ul>
                <ul>4. Weigh at least 110 lbs. Additional height and weight requirements apply for donors 18 years old
                    and
                    younger and all high school student donors.</ul>
                <ul>5. Male donors+ must be at least 17 years old in most states, at least 5'1" tall and weigh at least
                    130
                    lbs</ul>
                <ul>6. Female donors+ must be at least 19 years old, at least 5'5" tall and weigh at least 150 lbs</ul>
                <ul>7. Have not donated blood in the last 56 days.</ul>

                </p>
            </div>
        </div>


        <div class="col">
            <div class="card">
                <h3 class="text-center red">Following conditions are not allowed to donate blood
                    anyime:</h3>
                <img src="img/img2.png" alt="Our Mission" class="img img-responsive" width="168" height="168">
                <p class="text-center">

                <ul>1. Cancer</ul>
                <ul>2. Cardiac disease</ul>
                <ul>3. Sever lung disease</ul>
                <ul>4. Hepatitis B and C</ul>
                <ul>5. HIV infection, AIDS or Sexually Transmitted Diseases (STD)</ul>
                <ul>6. High risk occupation (e.g. prostitution)</ul>
                <ul>7. Unexplained weight loss of more than 5 kg over 6 months</ul>
                <ul>8. Chronic alcoholism</ul>
                <ul>9. Other conditions or disease stated in the Guide to Medical Assessment of Blood Donors.</ul>

                </p>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <h3 class="text-center red">Save Life</h3>
                <img src="img/img3.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
                <p class="text-center">

                <ul>1. Giving blood is a quick and enriching way to give back to your community.</ul>
                <ul>2. By donating blood, you can help families who have been in accidents or experienced trauma,
                    mothers
                    experiencing labor complications, fathers having heart surgery, children undergoing chemotherapy
                    treatments, premature babies trying to breathe with tiny lungs, or grandparents suffering from
                    severe anemia.</ul>
                <ul>3. In as little as few minutes, you can become someones unnamed, unknown, but all-important hero.
                    Saving a life is noble work that starts very simply and easily.</ul>

                </p>
            </div>
        </div>

    </div>
</div>

<!-- end aboutus section -->


<?php
//include footer file
include('include/footer.php');
?>