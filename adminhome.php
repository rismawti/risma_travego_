<head>
    <link href="style.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@0;1&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
        div{
            font-family: 'Josefin Sans', sans-serif;
        }
    </style>
</head>
<?php
include "bot.php";
include "config.php";

?>
    <div class="konten">
        <input type="checkbox" id="nav-toggle" />
    <div class="sidebar bg-dark text-white">
            <div class="sidebar-brand">
                <h2><img src="assets/salence" alt="" width="30px"><span>salence</span></h2>
                </div>
                <div class="sidebar-menu text">
                    <li class="item">
                    <a href="index" class="menu-btn"><span>DASHBOARD</span> </a>
                </li>
                <div class="accordion accordion-flush bg-dark" id="accordionFlushExample">
                <div class="accordion-item bg-dark">
                    <h2 class="accordion-header">
                    <button style="font-family: 'Josefin Sans', sans-serif; text-transform: uppercase;" class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        ticket
                    </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <a href="adminhome.php?halaman=add-ticket" style="text-decoration: none; font-family: 'Josefin Sans', sans-serif;" class="text-white">add more ticket</a>
                        <a href="#" style="text-decoration: none; font-family: 'Josefin Sans', sans-serif;" class="text-white"></a>
                    </div>
                    </div>
                </div>
                <div class="accordion-item bg-dark">
                    <h2 class="accordion-header" id="flush-headingTwo">
                    <button style="font-family: 'Josefin Sans', sans-serif; text-transform: uppercase;" class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        user
                    </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        admin and user
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-dark">
                                <a href="pekerja.php" style="text-decoration: none; font-family: 'Josefin Sans', sans-serif;" class="text-white">admin</a>
                            </div>
                            <div class="accordion-body bg-dark">
                                <a href="user.php" style="text-decoration: none; font-family: 'Josefin Sans', sans-serif;" class="text-white">user</a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="accordion-item bg-dark">
                    <h2 class="accordion-header" id="flush-headingThree">
                    <button style="font-family: 'Josefin Sans', sans-serif; text-transform: uppercase;" class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        order
                    </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <a href="#" style="text-decoration: none; font-family: 'Josefin Sans', sans-serif;" class="text-white"></a>
                    </div>
                    </div>
                </div>
                </div>
                </div>
        </div>
            <div class="maint-content">
                <header class="bg-dark">
                    <h2>
                        <label for="nav-toggle">
                            <span class="las la-bars"></span>
                        </label>
                        DASHBOARD <br>
                    </h2>
                    <div style="text-decoration: none; color:white;">
                    <img src="assets/notif" alt="" class="ml-5">
                    <a href="profile" style="text-decoration: none; color: white;"><img href="profile" src="assets/voxakuma" alt="" width="28px" style="border-radius: 50px; margin-bottom: 10px;">&nbsp;&nbsp;&nbsp;Vox Akuma</a>
                    <form class="d-flex">
                        <input id="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-warning" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg></button>
                     </form>
                    </div>
                </header>


            <div class="ktn text-white"  id="body" style="margin: 2%; margin-top: 11%;">
                <?php
                    if(isset($_GET['halaman'])){
                        $page = $_GET['halaman'];

                        swicth($page) {
                            case 'add_ticket':
                                include "ticket.php";
                                break;
                            case 'admin':
                                include "pekerja.php";
                                break;
                            case 'user':
                                include "user.php";
                                break;
                            case 'add-new-field':
                                include "add.php";
                                break;
                            case 'select-pertype':
                                include "coba2.php";
                                break;
                            case 'pemesanan':
                                include "coba2.php";
                                break;
                        }
                    }else{
                        include "login.php";
                    }
                ?>
            </div>  
            </div>
        </div>
    </div>
    </div>