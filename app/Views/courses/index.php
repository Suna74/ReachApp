<?= $this->extend('templates/admin_template') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header course-bg">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="title-h1">Courses Panel</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
          <li class="breadcrumb-item active">Courses</li>
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
          <div class="card-header bg-gradient-blue">
            <h3 class="card-title">Courses List</h3>
          </div>
          <!-- /.card-header -->

          <div class="card-body table-responsive p-0">
            <table id="coursesTable" class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Student ID</th>
                  <th>Subject ID</th>
                  <th>Partial 1 Grade</th>
                  <th>Partial 2 Grade</th>
                  <th>Partial 3 Grade</th>
                  <th>Partial 4 Grade</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>

                <?php foreach ($courses as $course) : ?>

                  <tr>
                    <td><?= $course['course_id'] ?></td>
                    <td><?= $course['student_id'] ?></td>
                    <td><?= $course['subject_id'] ?></td>
                    <td><?= $course['partial_grade1'] ?></td>
                    <td><?= $course['partial_grade2'] ?></td>
                    <td><?= $course['partial_grade3'] ?></td>
                    <td><?= $course['partial_grade4'] ?></td>
                    <td>
                      <a href="<?= base_url('courses/edit/' . $course['course_id']) ?>" alt="Edit" class="btn btn-info" type="button"><i class="fas fa-edit"></i></a>
                      <a href="<?= base_url('courses/delete/' . $course['course_id']) ?>" alt="Delete" class="btn btn-danger" type="button"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>

                <?php endforeach; ?>

              </tbody>

            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <a href="<?= base_url('courses/create') ?>" class="btn btn-primary" type="button"><i class="fa fa-plus"> </i> Add Grades</a>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
<?= $this->endSection() ?>