<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background: url('outdoor.png') no-repeat center center fixed;
        background-size: cover;
        color: #ffffff;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }
      .content-container {
        background-color: rgba(61, 67, 73, 0.9);
        padding: 20px;
        border-radius: 10px;
        max-width: 1200px;
        margin: 20px auto;
        color: #f8f9fa;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
      }
      .navbar-container {
        max-width: 1200px;
        margin: 20px auto; 
        border-radius: 10px; 
        overflow: hidden;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
      }
      .navbar {
        background-color: rgba(52, 58, 64, 0.85) !important;
        border-radius: 0; 
      }
      .navbar-brand, .nav-link {
        color: #ffffff !important;
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
    </style>
</head>
<div class="navbar-container">
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
                      <a class="nav-link" href="ceos.php">CEOs</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="dealers.php">Dealers</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="about.php">About Us</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
</div>
