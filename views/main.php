<html>
	<head>
		<title>Shares</title>
		<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">

	</head>
	<body>
<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Shareboard</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo ROOT_URL ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL ?>shares">Shares</a>
          </li>
          
        </ul>
         <ul class="navbar-nav mr-auto navbar-right">
         <?php if (!isset($_SESSION['is_logged_in'])): ?>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo ROOT_URL ?>users/login">Login <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL ?>users/register">Register</a>
          </li>
          <?php else : ?>
             <li class="nav-item active">
              <a class="nav-link" href="<?php echo ROOT_URL ?>">Welcome <?php echo $_SESSION['user_data']['name']; ?><span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL ?>users/logout">Logout</a>
          </li>
          <?php endif;?>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div class="container">
		 <div class="starter-template">
      <?php Messages::display(); ?>
			 <?php require ($view);?>

		</div>

    </div><!-- /.container -->
	</body>
</html>