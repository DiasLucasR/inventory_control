<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NavBar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
                      Products
                    </button>
                    <div class="dropdown-menu  bg-dark">
                      <a class="dropdown-item text-light" href="#">Add</a>
                      <a class="dropdown-item text-light" href="#">Modify</a>
                      <a class="dropdown-item text-light" href="#">Delete</a>
                    </div>
                  </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
                      Categories
                    </button>
                    <div class="dropdown-menu  bg-dark">
                      <a class="dropdown-item text-light" href="#">Add</a>
                      <a class="dropdown-item text-light" href="#">Delete</a>
                    </div>
                  </div>
            </li>
        </ul>
    </nav>

</body>

</html>
