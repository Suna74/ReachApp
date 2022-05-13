<?= $this->extend('templates/admin_template') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header student-bg">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="title-h1">Students Panel</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
          <li class="breadcrumb-item active">Students</li>
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
          <div class="card-header bg-gradient-purple">
            <h3 class="card-title">Add a Student</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="post" action="<?= base_url('students/save') ?>" enctype="multipart/form-data">
            <div class="card-body">
              <p>Fill the form to add a new student</p>

              <div class="form-group">
                <div class="row">
                  <label for="studentName">Name <span class="text-danger">*</span></label>
                </div>

                <input type="text" class="form-control" id="studentName" name="studentName" placeholder="Student Name">
              </div>

              <div class="form-group">
                <label for="firstLastname">First Last Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="firstLastname" name="firstLastname" placeholder="Student First Last Name">
              </div>

              <div class="form-group">
                <label for="secondLastname">Second Last Name</label>
                <input type="text" class="form-control" id="secondLastname" name="secondLastname" placeholder="Student Second Last Name">
              </div>

              <div class="form-group">
                <label for="studentEmail">Email <span class="text-danger">*</span></label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-at"></i></span>
                  </div>
                  <input type="email" class="form-control" id="studentEmail" name="studentEmail" placeholder="Student Email">
                </div>
              </div>

              <div class="form-group">
                <label for="studentPhone">Phone <span class="text-danger">*</span></label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  </div>
                  <input type="text" class="form-control" id="studentPhone" name="studentPhone" maxlength="10" placeholder="000-000-0000">
                </div>
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
                  <a href="<?= base_url('students') ?>" class="btn btn-info">Return</a>
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