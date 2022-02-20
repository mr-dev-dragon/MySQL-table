
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