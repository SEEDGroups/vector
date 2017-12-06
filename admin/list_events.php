<?php include "inc/header.php"; include('class/event.php'); $eventsAllData = new Event();?>
<link rel="stylesheet" href="<?php echo datatables_css; ?>dataTables.bootstrap4.min.css">
<div class="wrapper">
<?php include ADMIN_SITEMAP."inc/topMenu.php"; ?>
<?php include ADMIN_SITEMAP."inc/sidebar.php"; ?>
<?php include ADMIN_SITEMAP."pages/listEventsContent.php"; ?>
<?php include ADMIN_SITEMAP."inc/footer.php"; ?>
<script src="<?php echo datatables_js; ?>jquery.dataTables.min.js" charset="utf-8"></script>
<script src="<?php echo datatables_js; ?>dataTables.bootstrap4.min.js" charset="utf-8"></script>
<script type="text/javascript">
  $('table').dataTable();
</script>
