<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
				<link rel="stylesheet" type="text/css" href="wiki.css">
        <title>Wiki</title>
    </head>
    <body>
			<?php

			if (file_exists('wiki.txt')) {
					$content = file_get_contents('wiki.txt');
			} else {
					$content = '(no content)';
			}

			if (isset($_GET['content'])) {
					$content = $_GET['content'];
					file_put_contents('wiki.txt', $content);
			}

			$safe_content = htmlentities($content);

			?>

			<form class="hidden" action="wiki.php">
    		<textarea name="content" rows="8" cols="80">
					<?php echo $safe_content; ?>
				</textarea>
    		<input type="submit" value="Save">
			</form>

				<?php $safe_content = htmlentities($content); ?>
			<div id="content">
    		<?php echo $safe_content; ?>
			</div>

			<script type="text/javascript">
			$('#content').click(function() {
			$('form').removeClass('hidden');
			$('#content').addClass('hidden');
			});
			</script>

    </body>
</html>
