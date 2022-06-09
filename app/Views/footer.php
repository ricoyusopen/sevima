

 <!-- Popper.js first, then Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    
//$(document).ready(function() {
   
    function comment() {
       
      $.ajax({
          url : "<?php echo base_url('comment/getComment')?>",
          type: "GET",
          dataType   : "JSON",
          success: function(data)  {
              console.log(data);
              var html = '';
              var i;
              for(i=0; i<data.length; i++){
                
                  html+=  '<div class="d-flex mt-4" id="list-komentar">' +                   
                            '<span class="glyphicon glyphicon-user"></span>'+                     
                          '<div>'+
                                '<h5 class="fw-bold"> '+
                                'Rico' +
                                '<small class="text-muted">'+
                                    'on February 19, 2021' +
                                '</small>'+
                                '</h5>' +
                                '<p>' + 
                                'Mantap infonya' + 
                                '</p> '+
                                '<span class="glyphicon glyphicon-thumbs-up" style="cursor:pointer;"><span class="badge" style="color:black;">5</span></span> '+
                                    '<button class="btn btn-secondary" type="button" style="margin-left:20px;"> '+
                                        'Komentar '+
                                '<span class="badge">'+1+ '</span>'+
                                '</button>    '+                    
                                '</span> <br>'+                            
                                '<div class="d-flex mt-4">'+
                                '<span class="glyphicon glyphicon-user"></span> '+
                                    '<div> <h5 class="fw-bold">' +
                                        'Axsel' +
                                        '<small class="text-muted">on February 19, 2021</small>'+
                                        '</h5>' +
                                        '<p>'+
                                        'Ah masa sih '+
                                       ' </p>' +
                                        '<span class="glyphicon glyphicon-thumbs-up" style="cursor:pointer;"><span class="badge" style="color:black;">0</span></span> '+
                                        '<button class="btn btn-secondary" type="button" style="margin-left:20px;"> Komentar <span class="badge">0</span>'+
                                    '</div>'+
                               ' </div>'+                            
                            '</div>'+                        
                        '</div>';
              }
              $('.list-komentar').html(html);
          }

      });
    }
  comment();
//});
</script>
</body>
</html>