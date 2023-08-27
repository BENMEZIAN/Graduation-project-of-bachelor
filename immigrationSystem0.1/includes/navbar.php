<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/canada.png" alt="" width="30" height="24" class="d-inline-block align-text-top"/>
                <b>Canada Immigration Guide for Algerians</b>
                <img src="images/Flag_of_Algeria.png" alt="" width="30" height="24" class="d-inline-block align-text-top"/>
            </a>
            <ul class="navbar-nav ms-auto" style="margin:1%;">
                <li class="nav-item">
                    <a class="nav-link" href="about.php" style="color:white;">About us</a>
                </li>
            </ul>
            <?php if(!isLoggedIn()): ?>
                <div class="d-grid gap-2 d-md-block">
                    <a role="button" class="btn btn-light me-md-2" href="register.php">register</a>
                    <a role="button" class="btn btn-light" href="login.php">login</a>
                </div>
            <?php else: ?>
                <div class="d-grid gap-2 d-md-block">
                    <a role="button" class="btn btn-light me-md-2" href="logout.php">logout</a>
                </div>
            <?php endif; ?>
            
        </div>
        
    </nav>
    

</header>