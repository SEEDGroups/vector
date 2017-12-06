<?php include('class/services.php'); $servicesData = new Services();
if(isset($_GET) && !empty($_GET)){
  $id = sanitize($_GET['id']);
  $confirmType = substr(sha1("view-".$id), 9, 9);
  if($confirmType == $_GET['type']){
    $getData = $servicesData->selectData($id);
    if($getData){
      $act = "update";
    }else{
      $_SESSION['info'] = "Service doesn't exists or already deleted!";
      @header('location: ./');
      exit;
    }
  }else{
    $_SESSION['error'] = "Invalid Request!";
    @header('location: ./');
    exit;
  }
}
?>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=vac10evlzh1ylmepy70qr1q28wkygjzqa36g98uakma5l2jc"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo $getData[0]->title; ?>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li>Services</li>
      <li class="active"><?php echo $getData[0]->title; ?></li>

    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
      <?php include ADMIN_SITEMAP."inc/notification.php"; ?>

      <form class="form-horizontal" action="controller/services" method="post">
        <div class="form-group">
          <label class="col-md-2 control-label">Summary</label>
          <div class="col-md-6">
            <textarea name="summary" class="form-control"><?php echo $getData[0]->summary; ?></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">Description</label>
          <div class="col-md-6">
            <textarea name="description" class="form-control"><?php echo $getData[0]->description; ?></textarea>
          </div>
        </div>

        <input type="hidden" name="id" value="<?php echo $getData[0]->id; ?>">

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
<script>
         tinymce.init({
            selector: 'textarea',
            height: 300,
            theme: 'modern',
             plugins: [
                 'codesample imagetools',
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code help'
  ],
  toolbar: 'insert | undo redo |  styleselect | bold italic forecolor backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help | fontsizeselect ',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
         });
      </script>
