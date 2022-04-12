<?php

//include header file
include('include/header.php');

?>

<style>
.size {
    padding: 80px 0px;
}

img {
    width: 210px;
    height: 210px;
}

h2 {
    color: #e74c3c;
}

.white {
    background-color: white;
}

p {
    font-size: 18px;
}

.right {
    float: right;
}

h1 {
    color: white;
}

.size {
    min-height: 0px;
    padding: 60px 0 40px 0;

}
</style>
<div class="container-fluid red-background size">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="text-center">About Us</h1>
            <hr class="white-bar">
        </div>
    </div>
</div>
<div class="container-fluid size">

    <div class="container">
        <div class="row">
            <div class="col-md-6"><img src="img/Yatharth.png" alt="Yatharth Chauhan"
                    class="rounded float-left img-fluid">
            </div>
            <div class="col-md-6">
                <h2 class="text-center">Yatharth Chauhan</h2>
                <hr class="red-bar">
                <center>
                    <p>
                    <div class="text-center">
                        Full Stack Developer
                        <br>
                        Student at Charotar University of Science and Technology
                        </p>
                </center>
            </div>
            <div class="pt-8 flex border-t border-gray-200 w-40 mx-auto text-gray-500 items-center justify-between">
            </div>
        </div>
    </div>
</div>

<!-- <div class="bg-white dark:bg-gray-800 rounded-lg shadow px-8 py-4 pt-24">
        <div class="text-center">
            <p class="text-2xl text-gray-800 dark:text-white">
                Dev Halvawala
            </p>
            <p class="text-xl text-gray-500 dark:text-gray-200 font-light">
                Frontend Developer
            </p>
            <p class="text-md text-gray-500 w-60 dark:text-gray-400 mx-auto py-4 font-light">
                Dev     Halvawala, born February 15, student at Charotar University of Science and Technology.
            </p>
        </div>
        <div class="pt-8 flex border-t border-gray-200 w-40 mx-auto text-gray-500 items-center justify-between"> -->

<div class="container-fluid white size">
    <div class="container ">
        <div class="container">
            <div class="row ">
                <div class="col-md-6">
                    <h2 class="text-center">Raj Chauhan</h2>
                    <hr class="red-bar">
                    <center>
                        <p>
                        <div class="text-center">
                            Frontend Developer
                            <br>
                            Student at Charotar University of Science and Technology
                            </p>
                    </center>
                </div>
                <div><img src="img/Raj.png" alt="Our Vission" class="rounded img-fluid float-right">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid size">
    <div class="container">
        <div class="row">
            <div class="col-md-6"><img src="img/Deep.png" alt="Our Vission" class="rounded float-left img-fluid">
            </div>
            <div class="col-md-6">
                <h2 class="text-center">Deep Dhaduk</h2>
                <hr class="red-bar">
                <center>
                    <p>
                    <div class="text-center">
                        Backend Developer
                        <br>
                        Student at Charotar University of Science and Technology
                        </p>
                </center>
            </div>
        </div>
    </div>
</div>
<?php

//include footer file
include('include/footer.php');

?>