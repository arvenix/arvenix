<!DOCTYPE html>
<html>

<head>
  <link href="<?= baseUrl() ?>assets/modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="author" content="Ridintek Industri">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Arvenix Manager</title>
</head>

<body>
  <main>
    <nav class="navbar navbar-dark navbar-expand-sm bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Arvenix</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav me-auto mb-2 mb-sm-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Apps</a>
              <ul class="dropdown-menu dropdown-menu-dark shadow">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item active" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <form role="search">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
          </form>
        </div>
      </div>
    </nav>
  </main>
  <script src="<?= baseUrl() ?>assets/modules/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>