
        <FORM  action="process.php" method="post">
          <input type="hidden" name="id" value="<?php echo $id; ?>">

          <div class="input-group">
            <span class="input-group-text">
              <i class="bi bi-person-circle"></i>
            </span>
          <input type="text" name="first-name"  id="1a" class="form-control" placeholder="Enter first name" 
          value="<?php echo $first_name; ?>" >
      
            <span class="input-group-text">
              <i class="bi bi-arrow-counterclockwise"></i>
            </span>
           </div>
          <div class="input-group">
           <span class="input-group-text">
              <i class="bi bi-file-earmark-person-fill"></i>
            </span>
          <input type="text" name="last-name"  id="2a" class="form-control" placeholder="enter your last name here" 
          value="<?php echo $last_name; ?>"  >
            <span class="input-group-text">
              <i class="bi bi-arrow-counterclockwise"></i>
            </span>
          </div>
          
          

          
          <div class="input-group">
            <span class="input-group-text">
              <i class="bi bi-calendar-date-fill"></i>
            </span>
          <input type="date" name="date-of-birth" id="3a"  class="form-control" placeholder="enter your birth date" 
          value="<?php echo $date_of_birth; ?>"  >
          <span class="input-group-text">
              <i class="bi bi-arrow-counterclockwise"></i>
            </span>
          </div>
          

          <div class="input-group">
          <span class="input-group-text">
              <i class="bi bi-card-checklist"></i>
            </span>
          <input type="text" name="department"  id="4a" class="form-control" placeholder="enter your department" 
          value="<?php echo $department; ?>"  >
          <span class="input-group-text">
              <i class="bi bi-arrow-counterclockwise"></i>
            </span>
          </div>
          

          <div class="input-group">
          <span class="input-group-text">
              <i class="bi bi-cash-coin"></i>
            </span>
          <input type="number" name="salary"  id="5a"class="form-control" placeholder="Enter your salary"  
          value="<?php echo $salary; ?>"  >
          <span class="input-group-text">
              <i class="bi bi-arrow-counterclockwise"></i>
            </span>
          </div>
          

          <div class="input-group">
          <span class="input-group-text">
              <i class="bi bi-stars"></i>
            </span>
          <input style="width: 10px;" type="text" name="function"  id="6a" class="form-control" placeholder="Enter your function " 
          value="<?php echo $f_unction; ?>"  >
          <span class="input-group-text">
              <i class="bi bi-arrow-counterclockwise"></i>
            </span>
          </div>
          

          <div class="input-group">
          <span class="input-group-text">
              <i class="bi bi-image"></i>
          </span>
          <input type="url"  name="photo"  id="7a" class="form-control" placeholder=" your photo URL" 
          value="<?php echo $photo; ?>"  >
          <span class="input-group-text">
              <i class="bi bi-arrow-counterclockwise"></i>
            </span>
          </div>
          <div class="mb-5 mt-4 text-center">
           
            <script>
              function pro(){
                let timerInterval
                  Swal.fire({
                    title: 'Auto close alert!',
                    html: 'I will close in <b></b> milliseconds.',
                    timer: 1000,
                    timerProgressBar: true,
                    didOpen: () => {
                      Swal.showLoading()
                      const b = Swal.getHtmlContainer().querySelector('b')
                      timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft()
                      }, 100)
                    },
                    willClose: () => {
                      clearInterval(timerInterval)
                    }
                  }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {
                      console.log('I was closed by the timer')
                    }
                  })
              }
            </script>


      <?php if ($update == true): ?>
        
          <button onclick="pro();" style="width:200px" type="submit" id="" class="btn btn-info" name="update"  >update</button>
          <?php else: ?>
          <button onclick="pro();" style="width:200px" type="submit"  id="" class="btn btn-secondary" name="save" >save</button>
          <?php endif ; ?>
          </div>

        </FORM>
   
