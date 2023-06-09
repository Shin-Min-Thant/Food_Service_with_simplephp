
<div class="nav">
    <div class="container sticky-top ">
        <nav class="navbar navbar-expand-lg shadow bg-body p-3 mb-5 intro">
            <a href="index.php" class="nav-link navbar-brand ladona">Ladona
               <br> <span class="shop">Food shopping</span></a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="justify-content-end collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown">
                        <a href="" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" ><span>Food</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="burger.php" class="nav-link">Burgur</a></li>
                            <div class="dropdown-divider"></div>

                            <li class="dropdown-item"><a href="chcken.php" class="nav-link">Chicken</a></li>
                            <div class="dropdown-divider"></div>

                            <li class="dropdown-item"><a href="pasta.php" class="nav-link">Pasta</a></li>
                            <div class="dropdown-divider"></div>

                            <li class="dropdown-item"><a href="pizza.php" class="nav-link">Pizza</a></li>
                            <div class="dropdown-divider"></div>

                            <li class="dropdown-item"><a href="sushi.php" class="nav-link">Sushi</a></li>
                            <div class="dropdown-divider"></div>

                            <li class="dropdown-item"><a href="dessert.php" class="nav-link">Dessert</a></li>
                            <div class="dropdown-divider"></div>
                            
                        </ul>
                    </li>
                    <li class="nav-item"><a href="Customer.php" class="nav-link">Customer Review</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
                    <li class="nav-item dropdown">
                        <a href="" class="dropdown-toggle nav-link" data-bs-toggle="dropdown"><span>
                         <?php
                         if(isset($_SESSION['name'])){
                            echo $_SESSION['name'];
                        }else{
                            echo 'Register';
                        }
                         ?>
                        </span></a>
                        <ul class="dropdown-menu">
                        <?php
                         if(isset($_SESSION['name'])){
                            echo "<li class='dropdown-item'><a href='logout.php' class='nav-link'>Logout</a></li>
                            <div class='dropdown-divider'></div>
                            <li class='dropdown-item'><a href='profile.php' class='nav-link'>Edit Profile</a></li>
                            <div class='dropdown-divider'></div>";
                        }else{
                            echo "<li class='dropdown-item'><a href='signup.php' class='nav-link'>Sign Up</a></li>
                            <div class='dropdown-divider'></div>
                            <li class='dropdown-item'><a href='login.php' class='nav-link'>Log In</a></li>
                            <div class='dropdown-divider'></div>";
                        }
                         ?>
                            
                            
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    
    </div>
   </div>
