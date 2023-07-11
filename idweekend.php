<!-- HEADER -->

<?php
  include_once('includes/header.php');
  require_once('conn.php');
?>

  <!-- CONTENT START -->


  <section class="mb-5">
    <div class="container mt-5">
      <div class="row">

        <div class="col-12 text-center ">
          <div class="alert alert-primary" role="alert">

            <div class="row">
              <div class="col-12 p-5">
                <h1>Data SaCode Weekend's</h1>
              </div>
            </div>

          </div>
        </div>

      </div>

      <div class="row p-3">
      
      <?php foreach($weekends as $idweekend) : ?>

        <div class="col-md-4 m-3">
          <div class="card" style="width: 18rem;">
            <img src="img/<?=$idweekend['foto']; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"> <?php echo $idweekend['topik']; ?> </h5>
                  <p class="card-text"> <?=$idweekend['tanggal']?> </p>
                  <p class="card-text"> <?=$idweekend['jam']?> </p>
                  <p class="card-text"> <?=$idweekend['narasumber']?> </p>
                  <p class="card-text"> <?=$idweekend['pekerjaan']?> </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>

      <?php endforeach ?>

      </div>
  </section>


  <!-- CONTENT END -->


<?php 
  include_once('includes/footer.php');
?>
