<!-- HEADER -->
<?php 	include 'header.php'; ?>

<div class="container">
<div class="garistengah"></div>
<div class="row">
  <div class="col-md-6">
  	<h3>INPUT</h3>
  	<textarea id="input" name="input" class="form-control vertical" rows="15"></textarea><br>
  	<button id="btnproses" type="button" class="btn btn-primary btn-block">PROSES</button>
  </div>
  <div class="col-md-6">
  	<h3>OUTPUT</h3>
  	<div id="output"></div>
  	<!-- <textarea id="output" name="output" class="form-control vertical" rows="5"></textarea> -->
  </div>
</div>
  
</div>

<!-- Footer -->
<?php 	include 'footer.php'; ?>



<script>
$(document).ready(function(){
  $("#output").keydown(false);
  $('[data-toggle="tooltip"]').tooltip();   
});

  $('#btnproses').on('click', function () {
            
          url = "ajax/proses.php";
          var data=new FormData();
          var input     = document.getElementById("input").value;
          data.append('input',input);

      
           
          
          $.ajax({
            url : url,
            type : "POST",
            data : data,
            processData: false, 
            contentType: false,
            success : function(data){
              
              $("#output").html(data);
            },
            error : function(){
                $("#output").html('Something Error !');
            }        
          });
          return false;
      });
</script>

</body>
</html>