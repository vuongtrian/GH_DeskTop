
  <body class="goto-here">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="admin.php">ADMIN HoaQuaFresh</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="admin.php?ctrller=product" class="nav-link">Quản lý sản phẩm</a></li>
	          <li class="nav-item"><a href="admin.php?ctrller=order" class="nav-link">Quản lý đơn hàng</a></li>
			  <?php
          if(isset($_SESSION["admin"]))
          {
			echo '<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" style="color: #82ae46;"id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$_SESSION["admin"].'</a>
			<div class="dropdown-menu" style="margin-top: 0px;"aria-labelledby="dropdown04">
				<a class="dropdown-item" style="color: red;" href="admin.php?ctrller=user&act=logout">Đăng xuất</a>
				<a class="dropdown-item" href="admin.php?ctrller=user&act=changepassword">Đổi mật khẩu</a> 
			</div>
		  </li>'; 
          }
           
        ?>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->