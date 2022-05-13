<?= $this->extend('templates/admin_template') ?>
<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div>
<?= $this->section('content') ?>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/dist/img/Slider1.jpg" class="d-block w-100" alt="Classroom">
      <div class="carousel-caption d-none d-md-block">
        <h3>Welcome teacher</h3>
        <p>Start managin your classroom with this friendly application!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/dist/img/Slider2.jpg" class="d-block w-100" alt="School Counseling and students">
      <div class="carousel-caption d-none d-md-block">
        <h3>School Counseling</h3>
        <p>Please report any issue with your students to the school counsel and admnistration</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/dist/img/Slider3.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h3>School Calendar</h3>
        <p>Don't forget to check the calendary regularly to not miss future events and meetings with tutors</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
<section class="content">
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <div class="col-lg-3 col-12">
        <div class="small-box bg-blue">
          <div class="inner">
            <h3><?= count($courses) ?></h3>

            <p>Active Classrooms</p>
          </div>
          <div class="icon">
            <i class="fa fa-table"></i>
          </div>
          <a href="<?= site_url('courses') ?>" class="small-box-footer">View More <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-12">
        <div class="small-box bg-purple">
          <div class="inner">
            <h3><?= count($students) ?></h3>

            <p>Students</p>
          </div>
          <div class="icon">
            <i class="fa fa-graduation-cap"></i>
          </div>
          <a href="<?= site_url('students') ?>" class="small-box-footer">View More <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-12">
        <div class="small-box bg-cyan">
          <div class="inner">
            <h3><?= count($subjects) ?></h3>

            <p>Subjects</p>
          </div>
          <div class="icon">
            <i class="fa fa-book"></i>
          </div>
          <a href="<?= site_url('subjects') ?>" class="small-box-footer">View More <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection() ?>