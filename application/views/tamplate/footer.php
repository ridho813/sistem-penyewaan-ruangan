  
  
 
 
 <!-- end dashboard inner -->
 </div>
   </div>
   </div>
 
 <!-- footer -->
  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2022. All rights reserved.<br><br>
                           Distributed By: Ridho ws</a>
                        </p>
                     </div>
                  </div>

     
          
   <!-- Script untuk memilih hari yang sudah terlewatkan -->
				  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://momentjs.com/downloads/moment.min.js"></script>
    <script src="https://momentjs.com/downloads/moment-timezone-with-data-10-year-range.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#telepon").on("input", function(){

            if($(this).val()[0] == "0"){

                    $(this).val("");
            }

            });

        });

        $(document).ready(function(){
            var d = new Date().toISOString();
            d = moment.tz(d, "Asia/Jakarta").format();
            var minDate = d.substring(0, 11) + "00:00";
            console.log(minDate);

            $(".datetimepicker").attr({
                "value" : minDate,
                "min" : minDate,
            });
        });
    </script>
     <!-- End memilih hari yang sudah terlewatkan-->
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
      <script src="<?= base_url()?>assets/js/popper.min.js"></script>
      <script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="<?= base_url()?>assets/js/animate.js"></script>
      <!-- select country -->
      <script src="<?= base_url()?>assets/js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="<?= base_url()?>assets/js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="<?= base_url()?>assets/js/Chart.min.js"></script>
      <script src="<?= base_url()?>assets/js/Chart.bundle.min.js"></script>
      <script src="<?= base_url()?>assets/js/utils.js"></script>
      <script src="<?= base_url()?>assets/js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="<?= base_url()?>assets/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="<?= base_url()?>assets/js/custom.js"></script>
      <script src="<?= base_url()?>assets/js/chart_custom_style1.js"></script>

   </body>
</html>
