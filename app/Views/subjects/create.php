<?= $this->extend('templates/admin_template') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header subject-bg">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="title-h1">Subjects Panel</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
          <li class="breadcrumb-item active">Subjects</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 col-sm-12">
        <div class="card card-primary">
          <div class="card-header bg-gradient-cyan">
            <h3 class="card-title">Add a Subject</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="post" action="<?= base_url('subjects/save') ?>" enctype="multipart/form-data">
            <div class="card-body">
              <p>Fill the name to add a new subject to the system</p>

              <div class="form-group">
                <label for="subjectName">Subject Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="subjectName" name="subjectName" placeholder="Subject Name">
              </div>
              <div class="row justify-content-md-end text-danger">* required field</div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <div class="row justify-content-between">
                <div class="col-auto mr-auto">
                  <button type="submit" class="btn btn-primary toastrDefaultInfo">Submit</button>
                </div>
                <div class=" col-auto">
                  <a href="<?= base_url('subjects/index') ?>" class="btn btn-info">Return</a>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
<?= $this->endSection() ?>