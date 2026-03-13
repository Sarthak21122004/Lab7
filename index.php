<?php
  $pageTitle = 'Animals';
  require_once 'includes/header.php';
?>

    <!-- Animal cards -->
    <div class="row justify-content-center g-5">

      <!-- Penguin -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="animal-card">
          <a href="/Lab7/php/behavior.php?animal=penguins" class="text-decoration-none">
            <div class="animal-img-wrapper">
              <img src="/Lab7/penguins.jpg" class="animal-img" alt="Penguins" />
            </div>
            <h5 class="animal-title mt-3">Penguins</h5>
          </a>
        </div>
      </div>

      <!-- Puppies -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="animal-card">
          <a href="/Lab7/php/behavior.php?animal=puppies" class="text-decoration-none">
            <div class="animal-img-wrapper">
              <img src="/Lab7/puppies.webp" class="animal-img" alt="Puppies" />
            </div>
            <h5 class="animal-title mt-3">Puppies</h5>
          </a>
        </div>
      </div>

      <!-- Cat -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="animal-card">
          <a href="/Lab7/php/behavior.php?animal=cat" class="text-decoration-none">
            <div class="animal-img-wrapper">
              <img src="/Lab7/Cat.jpg" class="animal-img" alt="Cat" />
            </div>
            <h5 class="animal-title mt-3">Cat</h5>
          </a>
        </div>
      </div>

    </div>

<?php require_once 'includes/footer.php'; ?>
