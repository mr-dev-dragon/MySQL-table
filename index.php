<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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
       $mysqli = new mysqli('localhost', 'root', 'mypass123','ahmed') or die(mysqli_error($mysqli)); 
       $result = $mysqli->query("SELECT * FROM employees") or die(mysqli->error);
       ?>
       <table class="table table-striped table-hover">
          <thead>
              <tr>
                <th scope="col">#</th>
                  <th scope="col">first name</th>
                    <th scope="col">last name</th>
                      <th scope="col">date of birth</th>
                        <th scope="col">department</th>
                          <th scope="col">salary</th>
                            <th scope="col">function</th>
                              <th scope="col">photo</th>
                                <th scope="col" colspan="2">action</th>
              </tr>
           </thead>      
           <tbody>
          <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <th scope="row"><?php echo $row['id']; ?></th>
                  <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                      <td><?php echo $row['date_of_birth']; ?></td>
                        <td><?php echo $row['department']; ?></td>
                          <td><?php echo $row['salary']; ?>$</td>
                            <td><?php echo $row['function']; ?></td>
                              <td>
                                <img src="<?php echo $row['photo']; ?>" alt="this is a employees photo" width=35px" height="35px" style = "border-radius:50% ;"></td>
                                  <td>
                                    <a href="index.php?edit=<?php echo $row['id']; ?>"
                                      class="btn btn-info"> Edit</a>
                                        <a href="process.php?delete=<?php echo $row['id']; ?>"
                                          class="btn btn-danger">Delte</a>
                                            </td>
            </tr>
            <?php endwhile?>
          </tbody>
        </table>


        <FORM action="process.php" method="post">
          <input type="hidden" name="id" value="<?php echo $id; ?>">

          <div class="form-group">
          <label for="1a"> first name</label>
          <input type="text" name="first-name"  id="1a" class="form-control" placeholder="Enter your  first name here" 
          value="<?php echo $first_name; ?>" >
          </div>

          <div class="form-group">
          <label for="2a">last name</label>
          <input type="text" name="last-name"  id="2a" class="form-control" placeholder="enter your last name here" 
          value="<?php echo $last_name; ?>"  >
          </div>
          
          

          
          <div class="form-group">
          <label for="3a">date of birth</label>
          <input type="date" name="date-of-birth" id="3a"  class="form-control" placeholder="enter your birth date" 
          value="<?php echo $date_of_birth; ?>"  >
          </div>
          

          <div class="form-group">
          <label for="4a">department</label>
          <input type="text" name="department"  id="4a" class="form-control" placeholder="enter your department" 
          value="<?php echo $department; ?>"  >
          </div>
          

          <div class="form-group">
          <label for="5a">salary</label>
          <input type="number" name="salary"  id="5a"class="form-control" placeholder="Enter your salary"  
          value="<?php echo $salary; ?>"  >
          </div>
          

          <div class="form-group">
          <label for="6a">function</label>
          <input type="text" name="function"  id="6a" class="form-control" placeholder="Enter your function " 
          value="<?php echo $f_unction; ?>"  >
          </div>
          

          <div class="form-group">
          <label for="7a">photo</label>
          <input type="url"  name="photo"  id="7a" class="form-control" placeholder="chose your photo" 
          value="<?php echo $photo; ?>"  >
          </div>

          
          <div class="form-group">
           <?php if ($update == true): ?>
          <button type="submit" id="" class="btn btn-info" name="update"  >update</button>
          <?php else: ?>
          <button type="submit"  id="" class="btn btn-primary" name="save" >save</button>
          <?php endif; ?>
          </div>

        </FORM>
    <button>add</button>
        
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>