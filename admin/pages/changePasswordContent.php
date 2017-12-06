<?php $act="update"; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Change Password
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Change Password</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
      <?php include ADMIN_SITEMAP."inc/notification.php"; ?>

      <form class="form-horizontal" action="controller/changePassword" method="post">
        <div class="form-group">
          <label class="col-md-2 control-label">Username: </label>
          <div class="col-md-6">
            <input type="text" required class="form-control" name="username">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">Old Password: </label>
          <div class="col-md-6">
            <input type="password" required class="form-control" name="oldPassword">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">New Password: </label>
          <div class="col-md-6">
            <input type="password" required class="form-control" name="newPassword">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">Confirm Password: </label>
          <div class="col-md-6">
            <input type="password" required class="form-control" name="confirmPassword">
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-md-6">
            <button type="submit" class="btn btn-success"><?php echo ucfirst($act); ?></button>
          </div>
        </div>
      </form>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
