<?php
  if(isset($_GET['action'])){
    $success="Email Berhasil Terkirim";
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container mt-3">
          <div class="row">
              <div class="col-4">
                  <h2>Send Email</h2>
                  <?php if(isset($success)): ?>
                  <div class="alert alert-primary" role="alert">
                  <?php echo $success ?>
                  </div>
                  <?php endif ;?>

                  <form action="index.php" method="POST">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">First Name</label>
                      <input type="text" name="nameOne" required class="form-control" id="exampleFormControlInput1" >
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Last Name</label>
                        <input type="text" name="nameTwo" required class="form-control" id="exampleFormControlInput1" >
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" name="email" required class="form-control" id="exampleFormControlInput1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Critic</label>
                      <textarea class="form-control" name="kritik" required id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <input type="submit" name="submitc" value="send" class="btn btn-primary mt-3">
                  </form>
              </div>
          </div>
      </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>