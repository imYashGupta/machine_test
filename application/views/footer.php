
<!-- jQuery -->
        <script src="<?php echo site_url(); ?>assets/js/jquery-3.2.1.min.js"></script>        
        <script src="<?php echo site_url(); ?>assets/js/bootstrap.min.js"></script>		
		<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		
		
		<script>
			function getnotification(dt="")
			{
				if(dt !=""){ var st = dt.split("/").reverse().join("-");}
				else {var st="";}
				$.ajax({
				   url: '<?php echo base_url('api/item/') ?>'+st,
				   type: 'GET',
				   dataType: 'json',
				   success: function(res) {
					//var data = jQuery.parseJSON(res);
					var finaldata = ''; 
					var total =0;
					for (var i = 0; i < res.length; i++)
					{
						  var value = res[i];
						  var total = parseInt(total)+ parseInt(value.pcount);
						  finaldata = finaldata + '<p>'+value.partner_name+'-'+value.pcount+'</p>';
					}
					$("#resut").html(finaldata);
					$("#total").html("<p><b>Total number of request served :</b> "+total+"</p>");
					 
				   },
				   error: function (res) {
						console.log('An error occurred.');
						console.log(res);
					},
				});	
			}
			
			$(function () {
                $('#datetimepicker2').datepicker({
                    locale: 'ru',
					dateFormat: 'dd/mm/yy'
                });
            });
			</script>
    </body>
</html>