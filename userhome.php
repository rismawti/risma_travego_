<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Julee&family=Montserrat:wght@500&family=Shadows+Into+Light&display=swap');
        .is-hidden {
            display: none;
        }
    </style>
</head>

<?php
include "nav.php";
include "bot.php";
include "config.php";

$data = $konek->query("SELECT username, email, no_tlp, alamat FROM users");
if($data){
    header("location:userhomeaction.php");
}else{
    header("location:userhome.php?pesan=gagal");
}
?>
<br>
<br>
<br>

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
    
    <div class="floatingcontent" style="margin-top: 10px; position: relative; margin-bottom: 8%;">
        <div class="row">
            <div class="col"></div>
            <div class="col-8 rounded h6-4 opacity-50 bg-dark" style="background-color:black; ">
            <form action="addticket.php" method="post">
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
                            <?php
                            include "config.php";
                            if(isset($_POST['submit']))
                            {
                            // Counting No fo skilss
                            $count = count($_POST["skill"]);
                            //Getting post values
                            $skill=$_POST["skill"];	
                            if($count > 1)
                            {
                                for($i=0; $i<$count; $i++)
                                {
                                    if(trim($_POST["skill"][$i] != ''))
                                    {
                                    $sql =mysqli_query($konek,"INSERT INTO tblskills(skill) VALUES('$skill[$i]')");
                                    }
                                }
                            echo "<script>alert('Skills inserted successfully');</script>";
                            }
                            else
                            {
                            echo "<script>alert('Please enter skill');</script>";
                            }
                            }
                            ?>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <div class="container">
                                    <h2 align="center">Dynamically Add or Remove input fields in PHP with JQuery</h2><br />
                                    <div class="form-group">
                                <form name="add_name" id="add_name" method="post">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field">
                                    <tr>
                                    <td><input type="text" name="skill[]" placeholder="Enter your Skill" class="form-control name_list" /></td>
                                    <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                                    </tr>
                                    </table>
                                    <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
                                    </div>
                                </form>
                                </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
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
        </div>
    </div>
</div>  
<script>
const elToggle  = document.querySelector("#toggle");
const elContent = document.querySelector("#content");

elToggle.addEventListener("click", function() {
  elContent.classList.toggle("is-hidden");
});
</script>

<script>
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
	i++;
	$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="skill[]" placeholder="Enter your Skill" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
$(document).on('click', '.btn_remove', function(){
var button_id = $(this).attr("id"); 
$('#row'+button_id+'').remove();
	});
});
</script>

