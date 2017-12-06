<?php $summary = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      News/Events
      <small>
        <a href="events" class="btn btn-success headerButton" title="Add new News/Events">
          <i class="fa fa-plus"> <span>Add new</span> </i>
        </a>
      </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">News/Events</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
      <?php include ADMIN_SITEMAP."inc/notification.php"; ?>

      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>Summary</th>
            <th>Shown at front?</th>
            <th>Date</th>
            <th class="action">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=1; $selectAllData = $eventsAllData->selectData();
          foreach ($selectAllData as $key => $value) { ?>
          <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $value->title; ?></td>
            <td><?php echo ucfirst(html_entity_decode(substr($value->summary, 0, 200))."... <br> Click on edit to read more!!"); ?></td>
            <td><?php echo ($value->front == 1)? 'This is shown at front' : 'This is not shown at front'; ?></td>
            <td><?php echo $value->event_date; ?></td>
            <td class="action">
              <a href="events?id=<?php echo $value->id; ?>&type=<?php echo substr(sha1("view-".$value->id), 9, 9); ?>" class="btn btn-success actionBtn" title="Edit Event!"> <i class="fa fa-pencil"></i> </a>
              <a href="#" class="btn btn-danger actionBtn" title="Delete Event!"> <i class="fa fa-trash"></i> </a>
            </td>
          </tr>
            <?php  } ?>
        </tbody>
      </table>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
