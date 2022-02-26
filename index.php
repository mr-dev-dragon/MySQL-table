
<?php include 'src/incloudes.php'; ?>
<body>
  <header >
      <?php include 'src/navbar.php'; ?>
  </header>
  <main class="container" >
    <section >
      <?php include 'src/main/tabel.php'; ?>
    </section>
        <section class="d-grid gap-2 col-4 mb-5 mx-auto" >

           <?php if ($addbtn == true): ?>
            
            <form method='post'class='d-grid gap-2 col-12 mb-5 mx-auto' >
          <button  type="submit" method='post' class="btn btn-info" name="addbtn">add  new employee</button>
          </form>
          <?php else: ?>
                  <?php include 'src/main/form.php'; ?>
          <?php endif ; ?>

    </section>
  </main>
  <footer>
    <?php include 'src/footer.php'; ?>
  </footer>

</body>
</html>