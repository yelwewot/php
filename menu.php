
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu POS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">CortesPOS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="#">Manage</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#">Menu</a>
        </li>
        </ul>
    </div>
    </nav>
  <div class="container">
    <h1>Create Menu</h1><br>

    <form action="add_menu.php" method="post">
      <div class="form-group">
        <label for="menu_name">Menu Name</label>
        <input type="text" class="form-control" id="menu_name" name="menu_name" placeholder="Enter menu name">
      </div>
    <br>
      <div class="form-group">
        <label for="menu_desc">Menu Description</label>
        <textarea class="form-control" id="menu_desc" name="menu_desc" placeholder="Enter menu description"></textarea>
      </div>
    <br>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.5/dist/sweetalert2.all.min.js"></script>
</body>
</html>