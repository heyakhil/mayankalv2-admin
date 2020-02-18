<?php error_reporting(0);  ?>
<header class="app-header"><a class="app-header__logo" href="index.html">Mayankal</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!--Notification Menu-->

        <?php  
            session_start();
            $user = $_SESSION['user']; 
        ?>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <li><a class="dropdown-item" href="profile.php"><i class="fa fa-user fa-lg"></i>Profile</a></li>
            
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?php echo strtoupper($user); ?></p>
          <p class="app-sidebar__user-designation">Founder & CEO</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item" href="orders.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Orders</span></a></li>


        <li><a class="app-menu__item" href="withdraw.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Withdraw Request</span></a></li>
        <li><a class="app-menu__item" href="WritePost.php"><i class='fa fa-edit' style='font-size:24px'></i><span class="app-menu__label">&nbsp;&nbsp;&nbsp;WritePost</span></a></li>
        
        <li><a class="app-menu__item" href="profile.php"><i class="fa fa-user fa-lg"></i><span class="app-menu__label">&nbsp;&nbsp;&nbsp;Profile</span></a></li>

       
        <li><a class="app-menu__item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i><span class="app-menu__label">&nbsp;&nbsp;&nbsp;logout</span></a></li>

      </ul>
    </aside>