<ul class="nav nav-list">
    <li class="active">
        <a href="<?= base_url('dashboard'); ?>">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Dashboard </span>
        </a>
        <b class="arrow"></b>
    </li>

    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text">
                DELIVERY | INFO
            </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>
        <b class="arrow"></b>

        <ul class="submenu">

            <li class="">
                <!-- added routes -->
                <a href="<?= base_url('view_delivery'); ?>">
                    <i class="menu-icon fa fa-eye pink"></i>
                    Manage Delivery
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text">
                MERCHANT | INFO
            </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>
        <b class="arrow"></b>

        <ul class="submenu">

            <li class="">
                <!-- added routes -->
                <a href="<?= base_url('view_merchant'); ?>">
                    <i class="menu-icon fa fa-eye pink"></i>
                    Manage Merchant
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>

</ul><!-- /.nav-list -->