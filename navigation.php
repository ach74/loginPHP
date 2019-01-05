<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <div <?php echo $page_title == "Index" ? "class='active'" : ""; ?>>
            <a class="navbar-brand" href="<?php echo $home_url; ?>">Home</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class = "navbar-nav mr-auto">
                <li class = "nav-item">
                    <a class = "nav-link" href = "#">Contacto</a>
                </li>
                <?php
                if (isset($_SESSION['type'])) {
                    ?>
                    <li class = "nav-item">
                        <a class = "nav-link" href = "#">Ver comunidades</a>
                    </li>
                    <?php
                } 
                ?>

            </ul>
            <form class="form-inline my-2 my-md-0">
                <?php
                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true && isset($_SESSION['type'])) {
                    ?>
                    <div class="nav-item dropdown" <?php echo $page_title == "Edit Profile" ? "class='active'" : ""; ?>>
                        <a class="nav-link dropdown-toggle text-white" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['name']; ?></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown07">
                            <div <?php echo $page_title == "Login" ? "class='active'" : ""; ?>>
                                <a class="dropdown-item" href="<?php echo $home_url; ?>logout.php">Logouts</a>
                            </div>
                        </div>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Perfil</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown07">
                            <div <?php echo $page_title == "Login" ? "class='active'" : ""; ?>>
                                <a class="dropdown-item" href="<?php echo $home_url; ?>login.php">Log In</a>
                            </div>
                            <div <?php echo $page_title == "Register" ? "class='active'" : ""; ?>>
                                <a class="dropdown-item" href="<?php echo $home_url; ?>register.php">Register</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </form>
        </div>
    </div>
</nav>