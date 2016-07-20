<!DOCTYPE html>
<html lang="en">
  <head>
<title>Recaptcha</title>
<script src='https://www.google.com/recaptcha/api.js'  async defer></script>
  
  </head>
 
  <body>
 
    <!-- <form action="" method="post" action> -->
	<form class="form"  onsubmit="return validateform();">
      <label for="name">Name:</label>
      <input name="name" required><br />
      <label for="email">Email:</label>
      <input name="email" type="email" required><br />
      <div class="g-recaptcha" id="rcaptcha" data-sitekey="6Lf_VSQTAAAAACDv0KUwEo4mdVgnoGDbQ9nemOH9"></div>
      <input id="btnenviar" type="submit" value="Submit" />
			<br /><div id="valida_recaptcha"></div>
    </form>
	
    <!--js-->
	<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
 
 
	<script type="text/javascript">

		function validateform(){
			var captcha_response = grecaptcha.getResponse();
			if(captcha_response.length == 0)
			{
				$( "#valida_recaptcha" ).text('Por favor valide que no sea un Robot!');
				return false;
			}
			else
			{
				return true;
			}
		}
	
    $(document).ready(function(){
		/*
		var url_web = "http://localhost/jhonrich/";
		//console.log('captcha response: ' + grecaptcha.getResponse());
        $(' #btnenviar ').on('click', function(){
		
			$.ajax({
				url: url_web + 'valida_captcha.php',
				type:'POST',
				data:{valor : 'validar'},
				success:function(result) 
				{
					$( "#valida_recaptcha" ).text(result);
					//return true;
				},
				error: function(jqXHR, textStatus, error)
				{
				  alert( "Error: " + jqXHR.responseText);
				}
			  });
			//return false;
		});
		*/
    });    
    </script>
 
  </body>
</html>