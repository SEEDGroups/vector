<?php $current_page = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="assets/images/avatar/profile_pic.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $name; ?></p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">HEADER</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="disabled"><a href="#"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
      <li class="aboutVector"><a href="aboutVector"><i class="fa fa-home"></i> <span>About Vector</span></a></li>
      <li class="<?php echo (($current_page == 'events') || ($current_page=="list_events"))? 'active' : '';?>"><a href="list_events"><i class="fa fa-calendar-check-o "></i> <span>News/Events</span></a></li>
      <li class="<?php echo ($current_page == '')? 'active' : '';?>"><a href="#"><i class="fa fa-newspaper-o"></i> <span>Resumes</span></a></li>
      <li class="<?php echo ($current_page == '')? 'active' : '';?>"><a href="#"><i class="fa fa-info"></i> <span>Enquiry</span></a></li>

      <li class="treeview <?php echo (($current_page == 'services'))? 'active' : ''; ?>">
        <a href="#"><i class="fa fa-link"></i> <span>Our Services</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li class="<?php echo ($current_page == 'services?id=1&type='.substr(sha1('view-1'), 9,9))? 'active' : '';?>"><a href="services?id=1&type=<?php echo substr(sha1("view-1"), 9,9); ?>"> <span>Software</span> </a></li>
          <li class="<?php echo ($current_page == 'services?id=2&type='.substr(sha1('view-2'), 9,9))? 'active' : '';?>"><a href="services?id=2&type=<?php echo substr(sha1("view-2"), 9,9); ?>"> <span>Energy</span></a></li>
          <li class="<?php echo ($current_page == 'services?id=3&type='.substr(sha1('view-3'), 9,9))? 'active' : '';?>"><a href="services?id=3&type=<?php echo substr(sha1("view-3"), 9,9); ?>"> <span>Institute</span></a></li>
          <li class="<?php echo ($current_page == 'services?id=4&type='.substr(sha1('view-4'), 9,9))? 'active' : '';?>"><a href="services?id=4&type=<?php echo substr(sha1("view-4"), 9,9); ?>"> <span>Avation</span></a></li>
          <li class="<?php echo ($current_page == 'services?id=5&type='.substr(sha1('view-5'), 9,9))? 'active' : '';?>"><a href="services?id=5&type=<?php echo substr(sha1("view-5"), 9,9); ?>"> <span>Civil</span></a></li>
          <li class="<?php echo ($current_page == 'services?id=6&type='.substr(sha1('view-6'), 9,9))? 'active' : '';?>"><a href="services?id=6&type=<?php echo substr(sha1("view-6"), 9,9); ?>"> <span>Telecome</span></a></li>
        </ul>
      </li>
      </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
