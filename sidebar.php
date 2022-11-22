<?php 
    if(!isset($_SESSION["user_name"])){
        header("location: login.php");
		exit;
    }
?>

<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
            <a href="index.php" class="list-group-item list-group-item-action py-2 ripple" aria-current="true" >
                <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>dashboard</span>
            </a>
            <a href="profil.php" class="list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-user fa-fw me-3"></i><span>profile</span>
            </a>
            <a href="instruments.php" class="list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-guitar fa-fw me-3"></i><span>Instruments</span>
            </a>
            <a href="category.php" class="list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-wrench fa-fw me-3"></i><span>Category</span>
            </a>
            <a href="logout.php" class="list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-sign-out-alt me-3"></i><span>LogOut</span>
            </a>
        </div>
    </div>
</nav>