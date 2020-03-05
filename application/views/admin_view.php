<div class="container">
  <form class="form-signin" action="application/controllers/controller_admin.php"  method="POST">
    <h2>Вход</h2>
    <?php if(isset($sm)){ ?><div class="alert alert-success" role="alert"> <?php echo $sm; ?> </div> <?php } ?>
    <?php if(isset($fs)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fs; ?> </div> <?php } ?>
    <input type="text" name="login" class="form-control" placeholder="Login" ><br>
    <input type="password" name="password" class="form-control" placeholder="Password" ><br>
    <button name="submitlogin" class="btn btn-lg btn-primary btn-block" type="sumbit">Вход</button>
    <!-- <a name="submitlogin" href="main_view.php" class="btn btn-lg btn-primary btn-block">Вход</a> -->
  </form>
</div>
