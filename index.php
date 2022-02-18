<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class=" container  row justify-content-center">
        <?php require_once 'process.php'; ?>
        <?php 
          if (isset($_SESSION['message'])): ?>
          <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
              <?php 
              echo $_SESSION['message'];
              unset($_SESSION['message']); 
              ?>
          </div>
          <?php endif  ?>

  <?php 
       $mysqli = new mysqli('localhost', 'root', 'mypass123','crud') or die(mysqli_error($mysqli)); 
       $result = $mysqli->query("SELECT * FROM data")    or die(mysqli->error);
      //  pre_r($result->fetch_assoc());

       ?>
       <?php 
      //  function pre_r($array) {
      //    echo '<pre>';
      //    print_r($array);
      //    echo '</pre>';
      //  }

  ?>
       <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">name</th>
              <th scope="col">city</th>
              <th scope="col" colspan="2">action</th>
            </tr>
          </thead>      
           <tbody>
          <?php 
          while ($row = $result->fetch_assoc()): ?>
   
            <tr>
              <th scope="row">1</th>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['location']; ?></td>
              <td>
                <a href="index.php?edit=<?php echo $row['id']; ?>"
                class="btn btn-info"> Edit</a>
                <a href="process.php?delete=<?php echo $row['id']; ?>"
                class="btn btn-danger">Delte</a>
             
              </td>
            </tr>   
           <?php 
           endwhile
           ?>
          </tbody>
    
        </table>
        <FORM action="process.php" method="post">
          <input type="hidden" name="id" value="<?php echo $id; ?>" >
          <div class="form-group">
          <label for="">name</label>
          <input type="text" name="name" class="form-control" placeholder="Enter your name here" 
          value="<?php echo $name; ?>"  >
          </div>
          <div class="form-group">     
          <label for="">loction</label>
          <input type="text"  name="location"  class="form-control" placeholder=" Enter your location" 
          value="<?php echo $location; ?>">
          </div>
          <div class="form-group">
           <?php if ($update == true): ?>

          <button type="submit" class="btn btn-info" name="update"  >update</button>
          <?php else: ?>
        <button type="submit" class="btn btn-primary" name="save" >save</button>
          <?php endif; ?>

          </div>
        </FORM>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>