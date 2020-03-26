<?php 
  include('connect.php');
  session_start();
  if(!isset($_SESSION['name'])){
    header('location:../index.php');
    
  }
?>
    <header class="app-header"><a class="app-header__logo" href="https://mayankal.ml">Mayankal</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!--Notification Menu-->
        <?php  $user = $_SESSION['name'];?>       
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="#"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="../assets/logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
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

        <li><a class="app-menu__item" id="dashboard" href="../admin/index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Users</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" id="users" href="../admin/userreported.php"><i class="icon fa fa-circle-o"></i> User Reported</a></li>
            <li><a class="treeview-item" id="emtou" href="../admin/email_to_user.php" rel="noopener"><i class="icon fa fa-circle-o"></i> Email To User</a></li>
            <li><a class="treeview-item" id="feed" href="../admin/feedback.php"><i class="icon fa fa-circle-o"></i> FeedBack</a></li>
            <li><a class="treeview-item" id="weinf" href="../admin/web_info.php"><i class="icon fa fa-circle-o"></i> Web Info</a></li>
            <li><a class="treeview-item" id="sendn" href="../admin/send_notification.php"><i class="icon fa fa-circle-o"></i>Send Notification</a></li>
          </ul>
        </li>

        <li><a class="app-menu__item" id="withdraw" href="withdraw.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Withdraw Request</span></a></li>

        <li class="treeview" id="expand"><a class="app-menu__item" id="author" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Authors</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" id="addauth" href="../admin/addAuthor.php"><i class="icon fa fa-circle-o"></i> Add Authors</a></li>
            <li><a class="treeview-item" id="order" href="../admin/orders.php"><i class="icon fa fa-circle-o"></i> Orders</a></li>
            <li><a class="treeview-item" id="complete" href="../admin/order_completed.php"><i class="icon fa fa-circle-o"></i> Completed</a></li>
            <li><a class="treeview-item" id="sendem" href="../admin/email_to_author.php"><i class="icon fa fa-circle-o"></i> Send Email</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Admin</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" id="createadmin" href="../admin/create_admin.php"><i class="icon fa fa-circle-o"></i> Create Admin</a></li>
            <li><a class="treeview-item" id="earning" href="our_earning.php"><i class="icon fa fa-circle-o"></i>Our Earning</a></li>
          </ul>
        </li>
      </ul>
    </aside>

<script type="text/javascript">
   var url = window.location.href;
   var newurl =url.split("/");
   var count = newurl.length;

switch (newurl[count-1]) {
  case "index.php":
    document.getElementById('dashboard').classList.add("active");
    break;
  case "withdraw.php":
    document.getElementById('withdraw').classList.add("active");
    break;
  case "addAuthor.php":
    document.getElementById('addauth').classList.add("active");
    document.getElementById('expand').classList.toggle("is-expanded");
    break;
  case "withdraw.php":
    document.getElementById('withdraw').classList.add("active");
    break;
  default:
    window.open("https://www.mayankal.ml/error404.php");
    break;
  }

</script>