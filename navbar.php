<?php 
    if(!isset($_SESSION["user_name"]) || !isset($_SESSION['id'])){
		header("location: login.php");
		exit;
	}
?>

<nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-fluid nav_bar">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
            aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <a class="navbar-brand" href="#">
            <div class="text-danger h3 logo">
                Store<small class="text-muted"> musique</small> 
            </div>
        </a>
        <!-- Search form -->
        <!-- <div class="input-group w-50 ms-5">
            <div class="form-outline">
                <input id="search-input" type="search" id="form1" class="form-control" />
                <label class="form-label" for="form1">Search</label>
            </div>
            <button id="search-button" type="button" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>
        </div> -->
        <!-- notification -->
        <ul class="navbar-nav ms-auto d-flex flex-row align-items-center">
            <li class="nav-item dropdown">
                <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button"  data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bell"></i>
                    <span class="badge rounded-pill badge-notification bg-danger">1</span>
                </a>
            </li>
            <!-- user -->
            <?php 
            $id = $_SESSION['id'];
            $user = infoUser($id)
            ?>
            <li class="nav-item dropdown">
                <a href="profil.php" class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center position-relative" id="navbarDropdownMenuLink">
                    <div class="d-inline-flex position-relative">
                        <img class="rounded-4 shadow-4 imgNavbar" src="./assets/user/<?php echo $user['image']?>" alt="Avatar" style="width: 30px; ">
                    </div>
                    <div class="name p-2">
                        <?php echo $user['nom']." ".$user['prenom']?>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</nav>
