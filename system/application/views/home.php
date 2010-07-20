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
		<p>Page rendered in {elapsed_time} seconds</p>
	</body>
</html>