<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Animals'; ?></title>

  <!-- Compiled Bootstrap CSS -->
  <link rel="stylesheet" href="/Lab7/css/bootstrap.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="/Lab7/css/style.css" />
</head>
<body>

  <div class="container py-5">
    <!-- Header with title and theme toggle -->
    <div class="d-flex justify-content-between align-items-center mb-5">
      <h1 class="fw-bold">
        <a href="/Lab7/index.php" class="text-decoration-none" style="color: inherit;">Animals</a>
      </h1>

      <div class="btn-group" role="group">
        <button type="button" class="btn btn-outline-secondary theme-btn active" data-theme="dark">Dark</button>
        <button type="button" class="btn btn-outline-secondary theme-btn" data-theme="light">Light</button>
      </div>
    </div>

    <!-- Search bar + category pills -->
    <div class="row g-4 mb-5 align-items-center">
      <div class="col-md-5">
        <input
          type="search"
          class="form-control form-control-lg"
          placeholder="Search Animals"
        />
      </div>

      <div class="col-md-7">
        <?php
          $currentPage = basename($_SERVER['PHP_SELF']);
          $isBehavior  = ($currentPage === 'behavior.php');
        ?>
        <ul class="nav nav-pills justify-content-start justify-content-md-end flex-wrap gap-2">
          <li class="nav-item"><a class="nav-link" href="/Lab7/index.php">Adaptations</a></li>
          <li class="nav-item"><a class="nav-link <?php echo $isBehavior ? 'active' : ''; ?>" href="/Lab7/php/behavior.php">Behavior</a></li>
          <li class="nav-item"><a class="nav-link" href="/Lab7/index.php">Conservation</a></li>
          <li class="nav-item"><a class="nav-link" href="/Lab7/index.php">Diversity</a></li>
        </ul>
      </div>
    </div>
