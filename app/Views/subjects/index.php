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
    <div class="row d-flex justify-content-center">
      <div class="col-lg-10 col-sm-12">
        <div class="card card-table">
          <div class="card-header bg-gradient-cyan">
            <h3 class="card-title">Subject List</h3>
          </div>
          <!-- /.card-header -->

          <div class="card-body table-responsive p-0">
            <table id="subjectsTable" class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Subject Name</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>

                <?php foreach ($subjects as $subject) : ?>

                  <tr>
                    <td><?= $subject['subject_id'] ?></td>
                    <td><?= $subject['subject_name'] ?></td>
                    <td>
                      <a href="<?= base_url('subjects/edit/' . $subject['subject_id']) ?>" alt="Edit" class="btn btn-info" type="button"><i class="fas fa-edit"></i></a>
                      <a href="<?= base_url('subjects/delete/' . $subject['subject_id']) ?>" alt="Delete" class="btn btn-danger" type="button"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>

                <?php endforeach; ?>

              </tbody>

            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <a href="<?= base_url('subjects/create') ?>" class="btn btn-primary" type="button"><i class="fa fa-plus"> </i> Add Subject</a>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
<?= $this->endSection() ?>