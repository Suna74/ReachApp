<?= $this->extend('templates/admin_template') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header student-bg">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="title-h1">Student Panel</h1>
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
    <div class="row d-flex justify-content-center card-table">
      <div class="col-lg-10 col-sm-12">
        <div class="card card-table">
          <div class="card-header bg-gradient-purple">
            <h3 class="card-title">Student List</h3>
          </div>
          <!-- /.card-header -->

          <div class="card-body table-responsive p-0">
            <table id="studentsTable" class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>First Last Name</th>
                  <th>Second Last Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>

                <?php foreach ($students as $student) : ?>

                  <tr>
                    <td><?= $student['student_id'] ?></td>
                    <td><?= $student['student_name'] ?></td>
                    <td><?= $student['student_first_last_name'] ?></td>
                    <td><?= $student['student_second_last_name'] ?></td>
                    <td><?= $student['student_email'] ?></td>
                    <td><?= $student['student_phone'] ?></td>

                    <td class="justify-content-center">
                      <a href="<?= base_url('students/edit/' . $student['student_id']) ?>" alt="Edit" class="btn btn-info" type="button"><i class="fas fa-edit"></i></a>
                      <a href="<?= base_url('students/delete/' . $student['student_id']) ?>" alt="Delete" class="btn btn-danger" type="button"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>

                <?php endforeach; ?>

              </tbody>

            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <a href="<?= base_url('students/create') ?>" class="btn btn-primary" type="button"><i class="fa fa-plus"> </i> Add Student</a>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
<?= $this->endSection() ?>