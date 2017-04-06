<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Register User!</h3>
  </div>
  <div class="panel-body">
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
          <label for="">User name</label>
          <input type="text" name= "name" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="text" name= "email" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="text" name= "password" class="form-control">
        </div>

        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        <a class="btn btn-danger" href="<?php echo ROOT_PATH ?>shares">Cancel</a>
      </form>
  </div>
</div>
