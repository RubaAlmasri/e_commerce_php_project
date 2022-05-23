<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #010038;">
    <div class="container-fluid" style="color: white;">
        <a class="navbar-brand" style="color: white" href="homepage.php">
            <img src="../User/images/logo.png" alt="logo" id="logo" style="width: 20%; height: 20%;">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="background-color: white;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="homepage.php" style="color: white">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="!" style="color: white">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="!" tabindex="-1" aria-disabled="true" style="color: white">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contact_us/contact.php" tabindex="-1" aria-disabled="true" style="color: white">Contact us</a>
                </li>
            </ul>

            <div>
                <?php
                if (!isset($_SESSION['id'])) {
                    echo "<div class=col-md-2 pr-1 d-flex topper align-items-center text-lg-right>
						      <a href=loginpage.php style='color:white;' ;><botton>Login|</botton></a>
					          <a href=reg.php class=gold style='color:white;' ><botton>|Register</botton></a></div>";
                } else {
                    echo "<div class=col-md-2 pr-1 d-flex topper align-items-center text-lg-right>
						    <h6 class=welcome> Welcome $_SESSION[username]</div>
				   <div class=col-md-1 pr-5 d-flex topper align-items-center text-lg-right>
					   <a class=gold href=../User/info.php style='color:white;'>Account</a>
				   </div>
				   <div class=col-md-1 pr-5 d-flex topper align-items-center text-lg-right>
					   <a class=gold href=logout.php style='color:white;'>Logout</a>
				   </div>";
                } ?>
            </div>

        </div>
    </div>
</nav>
<!-- Navbar ends -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
</script>