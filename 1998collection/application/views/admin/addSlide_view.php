<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>thêm slide</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/vendor/bootstrap.js"></script>

	<script type="text/javascript" src="<?php echo base_url(); ?>jqueryupload/js/vendor/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>jqueryupload/js/jquery.fileupload.js"></script>

 	<script type="text/javascript" src="<?php echo base_url(); ?>public/vendor/1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/vendor/fontawesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>public/vendor/1.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 push-sm-3">
				<h3 class="display-4 text-xs-center "> Thêm Mới Slide</h3>
				<form action="slides/addSlide" method="POST" enctype="multipart/form-data">
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Tiêu đề</label>
						<input name="title" type="text" class="form-control" id="title" placeholder="Tiêu đề">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Mô tả slide</label>
						<input name="description" type="text" class="form-control" id="description" placeholder="Mô tả slide">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Link của nút</label>
						<input name="button_link" type="text" class="form-control" id="button_link" placeholder="Link của nút">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Text của nút</label>
						<input name="button_text" type="text" class="form-control" id="button_text" placeholder="Text của nút">
					</fieldset>
					<fieldset class="form-group">
						<label for="image">Upload Ảnh</label>
						<input name="slide_image" type="file" class="form-control" id="slide_image" >
					</fieldset>
					<fieldset class="form-group">
						<input type="submit" class="form-control btn btn-outline-info" id="submit" >
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>