
<footer>
        <div class="container">
            <div class="footer-wrapper d-flex">
                <div class="footer-about">
                    <h4>FreeWebsiteCode</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales ultrices est sit amet
                        malesuada. Donec malesuada elementum sem, vel interdum urna fringilla quis.
                    </p>
                </div>
                <div class="footer-col">
                    <h5>Useful links</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">services</a></li>
                        <li><a href="#">Get Application</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">terms & Conditions</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>Contact Us</h5>
                    <ul>
                        <li><a href="#">+92 123211</a></li>
                        <li><a href="service@freewebsitecode.com">Email</a></li>
                        <li><a href="#">Cashback</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>Social media </h5>
                    <ul>
                        <li><a href="https://facebook.com/freewebsitecode/">facebook</a></li>
                        <li><a href="https://freewebsitecode.com/">twitter</a></li>
                        <li><a href="https://freewebsitecode.com/">instagram</a></li>
                        <li><a href="#">Youtube</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright &copy; 2021 <a href="https://freewebsitecode.com/">Free Website Code</a> All rights reserved</p>
                <br><br>
            </div>
        </div>
    </footer>
 
 <script>
 	$('.datepicker').datepicker({
 		format:"yyyy-mm-dd"
 	})
 	 window.start_load = function(){
    $('body').prepend('<di id="preloader2"></di>')
  }
  window.end_load = function(){
    $('#preloader2').fadeOut('fast', function() {
        $(this).remove();
      })
  }

 	window.uni_modal = function($title = '' , $url=''){
    start_load()
    $.ajax({
        url:$url,
        error:err=>{
            console.log()
            alert("An error occured")
        },
        success:function(resp){
            if(resp){
                $('#uni_modal .modal-title').html($title)
                $('#uni_modal .modal-body').html(resp)
                $('#uni_modal').modal('show')
                end_load()
            }
        }
    })
}
  window.uni_modal_right = function($title = '' , $url=''){
    start_load()
    $.ajax({
        url:$url,
        error:err=>{
            console.log()
            alert("An error occured")
        },
        success:function(resp){
            if(resp){
                $('#uni_modal_right .modal-title').html($title)
                $('#uni_modal_right .modal-body').html(resp)
                $('#uni_modal_right').modal('show')
                end_load()
            }
        }
    })
}
window.alert_toast= function($msg = 'TEST',$bg = 'success'){
      $('#alert_toast').removeClass('bg-success')
      $('#alert_toast').removeClass('bg-danger')
      $('#alert_toast').removeClass('bg-info')
      $('#alert_toast').removeClass('bg-warning')

    if($bg == 'success')
      $('#alert_toast').addClass('bg-success')
    if($bg == 'danger')
      $('#alert_toast').addClass('bg-danger')
    if($bg == 'info')
      $('#alert_toast').addClass('bg-info')
    if($bg == 'warning')
      $('#alert_toast').addClass('bg-warning')
    $('#alert_toast .toast-body').html($msg)
    $('#alert_toast').toast({delay:3000}).toast('show');
  }
  window.load_cart = function(){
    $.ajax({
      url:'admin/ajax.php?action=get_cart_count',
      success:function(resp){
        if(resp > -1){
          resp = resp > 0 ? resp : 0;
          $('.item_count').html(resp)
        }
      }
    })
  }
  $('#login_now').click(function(){
    uni_modal("LOGIN",'login.php')
  })
  $(document).ready(function(){
    load_cart()
  })
 </script>
 <!-- Bootstrap core JS-->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>