<?php echo doctype('html5'); ?>
<html>
	<head>
		<title>Welcome to CodeIgniter</title>

		<script type="text/javascript"
		 src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript">
		  $(document).ready(function() {
			$('p').dblclick(function() {
				$(this).hide();
				
				$('<input>')
					.attr('type','text')
					.val($(this).text())
					.insertAfter(this)
					.dblclick(function() {					
						$.post('index.php/home/update', {'content': $(this).val()}, function() {
							console.log("Update returned successfully.");
						});
					
						$('p')
							.text($(this).val())
							.show();
						$(this).remove();
					});
			});
		  });
		</script>
	</head>
	<body>
		<h1>Welcome to CodeIgniter!</h1>
		<p><?php echo $content; ?></p>
	</body>
</html>


















