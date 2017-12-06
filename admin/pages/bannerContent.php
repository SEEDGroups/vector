<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=vac10evlzh1ylmepy70qr1q28wkygjzqa36g98uakma5l2jc"></script>
<?php ?>
<?php $act="update"; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo $centerName; ?>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Banners</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content container-fluid">
      <?php include ADMIN_SITEMAP."inc/notification.php"; ?>
        <?php $bannerDatas = $banner->getAllBanner(); $y=1; $z=1;?>
        <table class="table table-bordered table-striped table-hover" id="bannerList">
            <tbody>
              <tr>
              <?php foreach($bannerDatas as $key=>$value){ ?>

              <td class="action" style="background: url('<?php echo upload_file_url.$value->file_title; ?>') no-repeat; width: 300px; height: 300px; background-size: contain; background-position: center center;">
                <a href="#" class="btn btn-success actionBtnPic" title="Edit" data-toggle="modal" data-target="#myModal<?php echo $y; $y++;?>" style="border-radius: 50%;"> <i class="fa fa-pencil"></i> </a>
                <a href="#" class="btn btn-default actionBtnPic" title="Edit" data-toggle="modal" data-target="#myModalUpload<?php echo $z; $z++;?>" style="border-radius: 25%;"> Change Pic </a>
              </td>

              <?php
            }
          ?>
          </tr>
            </tbody>
          </table>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal -->
<?php $i=1; foreach ($bannerDatas as $key=>$value): ?>
  <div class="modal fade" id="myModal<?php echo $i; $i++;?>" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="padding: 2rem 0;">Update Image Info</h4>
        </div>
        <div class="modal-body">
          <form class="form form-horizontal" action="controller/banner" method="post">
            <div class="form-group">
              <label class="col-md-2 control-label">Title</label>
              <div class="col-md-10">
                <input type="text" name="btitle" class="form-control" id="title" value="<?php echo $value->btitle; ?>">
                <input type="hidden" name="id" id="id" value="<?php echo $value->id; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Summary: </label>
              <div class="col-md-10">
               <textarea class="form-control" rows="5" id="bsummary" name="bsummary" style="resize: vertical;"><?php echo $value->bsummary;?></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-md-10">
                <button type="submit" class="btn btn-success"><?php echo ucfirst($act); ?></button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- Modal -->
<?php endforeach; ?>

<?php $j=1; foreach ($bannerDatas as $key=>$value): ?>
  <div class="modal fade" id="myModalUpload<?php echo $j; $j++;?>" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="padding: 2rem 0;">Upload New Picture</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3">
              <form class="form form-horizontal" action="controller/banner" method="post">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Change with</label>
                    <div class="col-sm-10">
                      <input type = "file" name="images" id="file-upload" accept="image/*">
                    </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-md-10">
                    <button type="submit" class="btn btn-success"><?php echo ucfirst($act); ?></button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-9">
              <img id="blah" src="#" alt="your image" class="img img-responsive" />
            </div>
          </div>
          

        </div>
      </div>

    </div>
  </div>
  <!-- Modal -->
<?php endforeach; ?>

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
