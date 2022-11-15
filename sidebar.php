<?php 
    if(!isset($_SESSION)){
        session_start();
    }
?>
 <!--Main Navigation-->
 <header>
    <!-- Sidebar -->
    <nav
        id="sidebarMenu"
        class="collapse d-lg-block sidebar collapse bg-white"
        >
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a
                href="index.php"
                class="list-group-item list-group-item-action py-2 ripple"
                aria-current="true"
                >
                <i class="fas fa-tachometer-alt fa-fw me-3"></i
                    ><span>dashboard</span>
                </a>
                <a
                href="profil.php?id=<?php echo $_SESSION['id'];?>"
                class="list-group-item list-group-item-action py-2 ripple"
                >
                <i class="fas fa-chart-area fa-fw me-3"></i
                    ><span>profile</span>
                </a>
                <a
                href="users.php?id=<?php echo $_SESSION['id'];?>"
                class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-users fa-fw me-3"></i><span>Users</span></a
                >
                <a
                href="instruments.php?id=<?php echo $_SESSION['id'];?>"
                class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-users fa-fw me-3"></i><span>Instruments</span></a
                >
            </div>
        </div>
    </nav>
    <!-- Sidebar -->