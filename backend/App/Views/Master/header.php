<!-- BEGIN HEADER -->
<body class="page-header-fixed page-quick-sidebar-over-content ">
<div class="page-header -i navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="Home">
                <ion-icon class="logo-image-btl" name="musical-notes-outline"></ion-icon>
                <a class="navbar-brand" href="/Home">Guitar-H2D</a>
            </a>
            <div class="menu-toggler sidebar-toggler hide">
            </div>
        </div>
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-bell"></i>
                        <span class="badge badge-default">
					<?= count($data['Donhang']) ?>
					 </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3><span class="bold">Có thông báo mới đơn hàng mới</span></h3>
                        </li>

                        <li>
                            <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                <?php foreach ($data['Donhang'] as $donhang) : ?>
                                <li>
                                    <a href="Xulydonhang/viewInfor/<?= $donhang->id ?>">
                                        <span class="time"><?= explode(" ", $donhang->ngay )[0] ?></span>
                                        <span class="details">
									<span class="label label-sm label-icon label-warning">
									<i class="fa fa-bell-o"></i>
									</span>
									<?= $donhang->ghichu ?> </span>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>

                    </ul>
                </li>

                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle" src="/backend/Public/image/user.png"/>
                        <span class="username username-hide-on-mobile">
					<?php echo  $_SESSION['username'] ?> </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="ChangePass">
                                <i class="icon-lock"></i> Changes Passeword </a>
                        </li>
                        <li>
                            <a href="User/logout">
                                <i class="icon-key"></i> Log Out </a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown dropdown-quick-sidebar-toggler">
                    <a href="User/logout" class="dropdown-toggle">
                        <i class="icon-logout"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END HEADER -->