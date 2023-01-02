<style>
  section {
    background-image: url(./assets/img/SNU_library.jpg);
    height: 90vh;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
 <section class="d-flex align-items-center">
    <div class="container">
      <?php if(!(isset($_SESSION['login_username']) and $_SESSION['login_user_type']==1)): ?>
      	<center><button class="btn btn-info btn-lg" type="button" id="book_now">Book Now</button></center>
      <?php endif; ?>
    </div>
  </section>
  <script>
  	$('#book_now').click(function(){
      uni_modal('Find Schedule','book_filter.php')
  })
  </script>