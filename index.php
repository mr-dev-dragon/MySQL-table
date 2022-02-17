<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
</head>
<body>
  <?php require_once 'process.php'; ?>
  <div class="  row justify-content-center">
  <FORM action="process.php" method="post">
    <div class="form-group">
    <label for="">name</label>
    <input type="text" name="name" class="form-control" value="Enter your name" >
    </div>
    <div class="form-group">     
    <label for="">loction</label>
    <input type="text"  name="location"  class="form-control"value="Enter your location">
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-primary" name="save" id="save">save</button>
    </div>
  </FORM>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>