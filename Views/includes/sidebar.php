<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li class="<?php strpos('products/index.php',$_SERVER['REQUEST_URI']) ? 'active' : ''; ?>"><a href="../products/index.php"><em class="fa fa-dashboard">&nbsp;</em> Products</a></li>
			<li class="<?php strpos($_SERVER['REQUEST_URI'], 'userList') ? 'active' : ''; ?>"><a href="../admin/userList.php"><em class="fa fa-dashboard">&nbsp;</em> Users</a></li>
			<li class="<?php strpos('products/orders.php',$_SERVER['REQUEST_URI']) ? 'active' : ''; ?>"><a href="../products/orders.php"><em class="fa fa-dashboard">&nbsp;</em>Orders</a></li>
			
			<li><a href="../admin/login.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->