<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel" style="min-height: 65px;">
            <div class="pull-left image">
                <img src="<?php echo base_url() ?>/admin/uploads/schools/users_1591685336.jpg" class="img-circle"
                     alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo newSession()->nameAd; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <?php //$role_id = newSession()->role;?>


            <li class="Active">

                <?php
                //echo add_main_ajax_based_menu_with_permission('Dashboard', '/Admin/Dashboard', $role_id, 'fa fa-dashboard', '/Admin/DashboardAjax');
                ?>
                <a href="<?php echo base_url('Admin/Dashboard') ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cart-plus"></i>
                    <span>Order</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo base_url('Admin/Order') ?>">
                            <i class=" fa fa-tasks"></i> <span>List</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span>Invoice</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo base_url('Admin/Invoice') ?>">
                            <i class=" fa fa-tasks"></i> <span>List</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-comments"></i>
                    <span>Subscribe</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo base_url('Admin/Subscribe') ?>">
                            <i class=" fa fa-tasks"></i> <span>List</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span>Packages</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo base_url('Admin/Package') ?>">
                            <i class=" fa fa-tasks"></i> <span>List</span>
                        </a>
                    </li>
                </ul>
            </li>

<!--            <li class="treeview">-->
<!--                <a href="--><?php //echo base_url('Admin/Payment') ?><!--">-->
<!--                    <i class="fa fa-money"></i> <span>Payment</span>-->
<!--                </a>-->
<!--            </li>-->
            <li>
                <a href="<?php echo base_url('Admin/Shops') ?>">
                    <i class="fa fa-home"></i> <span>Shops</span>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url('Admin/Notice') ?>">
                    <i class="fa fa-list"></i> <span>Notice</span>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url('Admin/General_settings') ?>">
                    <i class="fa fa-gear"></i> <span>General settings</span>
                </a>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

