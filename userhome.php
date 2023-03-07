<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Julee&family=Montserrat:wght@500&family=Shadows+Into+Light&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Mynerve&display=swap');
        .is-hidden {
            display: none;
        }
    </style>
</head>

<?php
include "nav.php";
include "bot.php";
include "config.php";



?>
<br>
<br>
<br>
<?php

?>
<div class="ushiro">
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="undraw_stranded_traveler_pdbw.svg" width="500" alt="">
            </div>
            <div class="col">
                <h1 style="text-shadow: 3px 3px 3px #a0a5ad; margin-top: 8%;">TIME TO TRAVEL</h1>
                <h6 style="font-family: 'Julee', cursive;
                font-family: 'Montserrat', sans-serif;
                font-family: 'Shadows Into Light', cursive; font-size: 25px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur recusandae eos repellat omnis molestiae mollitia illum inventore nisi eveniet sint in ducimus suscipit, officia similique officiis magni a, esse molestias! </h6>
            </div>
        </div>
    </div>
    
    <div class="floatingcontent" style="margin-top: 10px; ">
        <div class="row bg-light" style=" margin-top: 12%;">
            <div class="col"></div>
            <div class="col-8 rounded h6-4 opacity-50 bg-dark" style="background-color:black; position: relative; margin-top: -8%;">
            <form action="userhomeaction.php" method="post">
                <div class="row p-4">
                        <div class="col-6 text-white">
                            <div class="row">
                                <div class="col-6 text-white">
                                    <h3>Dari<img src="icons8-airplane-take-off-30.png" width="30" alt=""> </h3>
                                    <div class="mb-3" style="width: 150px;">
                                        <select class="form-select" aria-label="Default select example" name="dari">
                                        <option value="jakarta">jakarta</option>
                                        <option value="bandung">bandung</option>
                                        <option value="aceh">aceh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h3>Menuju <img src="icons8-airplane-landing-30.png" width="30" alt=""></h3>
                                    <div class="mb-3" style="width: 150px;">
                                        <select class="form-select" aria-label="Default select example" name="menuju">
                                        <option value="bali">bali</option>
                                        <option value="kalut">kalut</option>
                                        <option value="jepang">jepang</option>
                                        <option value="australia">australia</option>
                                        <option value="new zealand">new zealand</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-6 text-white">
                            <h4 class="mt-2">passenger <img src="icons8-passenger-64.png" width="40" alt=""></h4>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            click for input more passenger
                            </button>

                            <!-- Modal -->
                            <div class="modal fade overflow-auto mt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog bg-dark">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                <div class="modal-body">
                                <div class="container cnt_1">
                                    <div class="content">
                                        <select name="type_pasenger[]" class="form-select" aria-label="Default select example">
                                            <option value="dewasa">dewasa</option>
                                            <option value="remaja">remaja</option>
                                            <option value="anak_anak">Anak-anak</option> 
                                        </select>
                                        <div class="row d-flex justify-content-center">
                                            <input class="col-5" style="margin: 5px;" type='text' placeholder="name" name='name[]'>
                                            <input class="col-5" style="margin: 5px;" type='text' placeholder="age" name='age[]'>
                                            <input class="col-5" style="margin: 5px;" type='text' placeholder="address" name='address[]'>
                                            <input class="col-5" style="margin: 5px;" type='text' placeholder="ticket" name='tiket[]'>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn btn-primary" id="add3">Add</div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-6 text-white">
                            <div class="row">
                            <div class="col-4 m-1">
                                <h6 class="text-center">Tanggal Pergi</h6>
                                <button  type="button" class="btn btn-dark">
                                <input type="date" name="tanggal_pergi">
                                </button>
                        </div>
                        <div class="col-5 text-white m-1">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="toggle">
                                <small class="form-check-small" for="flexSwitchCheckDefault">pulang pergi?</small>
                            </div>
                            <button type="button" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Tooltip on bottom">
                            <input id="content" class="is-hidden" type="date" name="tanggal_pulang">
                            <h6 class="text-center">Tanggal Pulang</h6>
                            </button>
                        </div>
                            </div>
                        </div>
                        <div class="col-6 text-white">
                            <h5>Kelas Penerbangan</h5>
                        <div class="mb-3" style="width: 350px;">
                                <select class="form-select" aria-label="Default select example" name="kelas_penerbangan">
                                <option value="economy">economy</option>
                                <option value="premium economy">premium economy</option>
                                <option value="vip">vip</option>
                                </select>
                            </div>  
                        </div> 
                    <button class="btn btn-primary justify-content-end" name="search" style="width: 180px;">see an avalable ticket</button>
                    </div>
                    <div class="col">
                        
                    </div>
                
                </div>
            </form>
            <div class="col">
                
            </div>
            <div class="row">
                <div class="col">

                </div>
                <div class="col-7 mt-5 rounded bg-light d-flex  justify-content-center" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); position: relative;">
                    <div class="p-5 text-center" id="about" style=" font-family: 'Mynerve', cursive; font-weight: 600; font-size: 20px;">
                        <h3>ABOUT US</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate rem quae reprehenderit velit sapiente iusto odit illum quia dolore molestiae earum, harum eligendi corporis. Natus, nam? Cumque quis culpa pariatur.</p>
                    </div>
                    
                </div>
                <div class="col">

                </div>
        </div>
        <svg style=" margin-top: -15%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#cccce0" fill-opacity="1" d="M0,288L24,282.7C48,277,96,267,144,240C192,213,240,171,288,181.3C336,192,384,256,432,282.7C480,309,528,299,576,282.7C624,267,672,245,720,208C768,171,816,117,864,90.7C912,64,960,64,1008,90.7C1056,117,1104,171,1152,165.3C1200,160,1248,96,1296,74.7C1344,53,1392,75,1416,85.3L1440,96L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>
        </div>
        
    </div>
    
</div>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
    const elToggle  = document.querySelector("#toggle");
    const elContent = document.querySelector("#content");

    elToggle.addEventListener("click", function() {
    elContent.classList.toggle("is-hidden");
    });
</script>

<script>
$(document).ready(function() {
    var removeButton = "<button id='remove'>Remove</button>";
    $('#add3').click(function() {
        $('div.cnt_1:last').after($('div.cnt_1:first').clone());
        $('div.cnt_1:last').append(removeButton);

    });
    $('#remove').live('click', function() {
        $(this).closest('div.cnt_1').remove();
    });
});
</script>
