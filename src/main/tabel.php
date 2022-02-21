
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
          <div class="d-grid gap-2 col-4 mx-auto mt-4 mb-5">
            <a class="btn btn-primary" href='src/main/form.php'>add new row</a>
          </div>