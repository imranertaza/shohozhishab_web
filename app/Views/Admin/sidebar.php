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
                <p><?php echo newSession()->name; ?></p>
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


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

