<?= $this->extend('templates/admin_template') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header course-bg">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="title-h1">Add Grades</h1>
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
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 col-sm-12">
        <div class="card card-primary">
          <div class="card-header bg-gradient-blue">
            <h3 class="card-title">Edit Grades</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="post" action="<?= base_url('courses/update/' . $course['course_id']) ?>" enctype="multipart/form-data">
            <div class="card-body">
              <p>Modify or correct the grades of the current student and the subject</p>
              <div class="form-group">
                <label for="studentName">Student Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="disabledStudentName" name="disabledStudentName" placeholder="" value="<?= $student['student_name'] ?>" disabled>
                <input type="hidden" class="form-control" id="studentName" name="studentName" placeholder="" value="<?= $student['student_id'] ?>">
              </div>
              <!-- /.form-group -->



              <div class="form-group">
                <label for="subjectName">Subject Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="disabledSubjectName" name="disabledSubjectName" placeholder="" value="<?= $subject['subject_name'] ?>" disabled>
                <input type="hidden" class="form-control" id="subjectName" name="subjectName" placeholder="" value="<?= $subject['subject_id'] ?>">
              </div>

              <div class="form-group">
                <label for="partial1">Partial 1 Grade</label>
                <input type="text" class="form-control" id="partial1" name="partial1" placeholder="" value="<?= $course['partial_grade1'] ?>">
              </div>
              <div class="form-group">
                <label for="partial2">Partial 2 Grade</label>
                <input type="text" class="form-control" id="partial2" name="partial2" placeholder="" value="<?= $course['partial_grade2'] ?>">
              </div>
              <div class="form-group">
                <label for="partial3">Partial 3 Grade</label>
                <input type="text" class="form-control" id="partial3" name="partial3" placeholder="" value="<?= $course['partial_grade3'] ?>">
              </div>
              <div class="form-group">
                <label for="partial4">Partial 4 Grade</label>
                <input type="text" class="form-control" id="partial4" name="partial4" placeholder="" value="<?= $course['partial_grade4'] ?>">
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
                  <a href="<?= base_url('courses') ?>" class="btn btn-info">Return</a>
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