<head>
    <link href="style.css" rel="stylesheet">
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
                <li class="item" id="add_ticket">
                    <a href="ticketaction.php" class="menu-btn">
                        <span>add_ticket <i
                                class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div class="sub-menu text-center">
                        <a href="NFT"><span>NFT</span></a>
                        <a href="sport"><span>Sport item</span></a>
                        <a href="plant"><span>plants</span></a>
                        <a href="makenew" class="button btn-primary" width="30px" style="border-radius: 50px;">make new +</a>
                    </div>
                </li>
                <li class="item" id="customer">
                    <a href="#customer" class="menu-btn">
                        <i class="fa-solid fa-users"></i><span>customer <i class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div class="sub-menu text-center">
                        <a href="customer"><span>New & Old</span></a>
                    </div>
                </li>
                <li class="item" id="orders">
                    <a href="#orders" class="menu-btn">
                        <img src="assets/Order" alt="" width="27px"><span>orders <i
                                class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div class="sub-menu text-center">
                        <a href="order"><span>origin of the order</span></a>
                        <a href="orderquantity"><span>order quantity</span></a>
                        <a href="refunded"><span>refunded</span></a>
                    </div>
                </li>
                <li class="item" id="checkout">
                    <a href="#checkout" class="menu-btn">
                        <img src="assets/Checkout" alt="" width="27px"><span>checkout <i
                                class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div class="sub-menu text-center">
                        <a href="amount and comment"><span>amount and comment</span></a>
                    </div>
                </li>
                <li class="item" id="settings">
                    <a href="#settings" class="menu-btn">
                        <i class="fas fa-gears"></i><span>settings <i class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div class="sub-menu text-center">
                        <a href="help"><span>help</span></a>
                        <a href="contact us"><span>contact us</span></a>
                        <a href="logout"><span><img src="assets/logout" alt=""> log out</span></a>
                    </div>
                </li>
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
        <form action="actionfile.php" method="post" enctype="multipart/form-data">
            <label for="name">name :</label>
            <input type="text" name="nama" id="nama" required value=""><br>
            <label for="image">image :</label>
            <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" values=""><br>
            <button type="submit" name="submit">submit</button>
        </form>
    </div>  
            </div>
        </div>
    </div>
    </div>