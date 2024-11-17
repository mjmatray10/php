<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$pageTitle?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .navbar {
        background-color: #343a40;
      }
      .navbar-brand, .nav-link {
        color: #ffffff;
        font-weight: 500;
        transition: color 0.3s ease;
      }
      .nav-link:hover, .nav-link.active {
        color: #ffc107;
      }
      .navbar-toggler {
        border-color: #ffffff;
      }
      .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(255,255,255,0.7)' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
      }
      .container-fluid {
        max-width: 1200px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Fishing Gear</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="brands.php">Brands</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bc.php">Baitcast Reels</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="spinning.php">Spinning Reels</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-vkFHwyxEd+fNItuOe6fEpGpdfH1A1Zgq3RRD+x4+2l6Cqf5rAxfjqPEH/hdbIWLn" crossorigin="anonymous"></script>
  </body>
</html>
