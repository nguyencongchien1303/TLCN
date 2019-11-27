<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<title> Example </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="<?php echo base_url(); ?>public/vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>public/vendor/1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/vendor/fontawesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>public/vendor/1.css">
</head>
<body>
	<div class="container">
 		<div class="text-xs-center">
 			<h3 class="display-3">Sửa Sản Phẩm</h3>
 		</div>
 	</div>
 			<form action="<?= base_url() ?>index.php/addProduct/updateProduct" method="post" enctype="multipart/form-data" >
 				<?php foreach ($mangketqua as $value): ?>
 					
 				
 				<div class="form-group row">
	 				<label for="image" class="col-sm-2 form-control-label text-xs-left">Ảnh Sản Phẩm</label>
	 				<div class="col-sm-10">
	 					<div class="row">
	 						<div class="col-sm-6">
	 							<img src="<?= $value['image'] ?>" alt="" class="img-fuild test">
	 						</div>
	 					</div>
	 					<input type="hidden" name="id" value="<?= $value['id'] ?>">
	 					<input type="hidden" name="image2" value="<?= $value['image'] ?>">
	 					<input name="imageProduct" type="file" class="form-control" id="imageProduct" placeholder="Upload image">
	 				</div>
				</div>
				<div class="form-group row">
	 				<label for="name" class="col-sm-2 form-control-label text-xs-left">Tên Sản Phẩm</label>
	 				<div class="col-sm-10">
	 					<input name="name" type="text" class="form-control" id="name" placeholder="Tên sản phẩm" value="<?= $value['name'] ?>">
	 				</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-4">
						<div class="row">
							<label for="price" class="col-sm-4 form-control-label text-xs-center">Giá Sản Phẩm</label>
			 				<div class="col-sm-8">
			 					<input name="price" type="text" class="form-control" id="price" placeholder="Giá sản phẩm" value="<?= $value['price'] ?>">
			 				</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<label for="priceDiscount" class="col-sm-4 form-control-label text-xs-center">Giá Sản Phẩm Đã Giảm</label>
			 				<div class="col-sm-8">
			 					<input name="priceDiscount" type="text" class="form-control" id="priceDiscount" placeholder="Giá sản phẩm Đã Giảm" value="<?= $value['priceDiscount'] ?>">
			 				</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<label for="amount" class="col-sm-4 form-control-label text-xs-center">Số Lượng Sản Phẩm</label>
			 				<div class="col-sm-8">
			 					<input name="amount" type="text" class="form-control" id="amount" placeholder="Số Lượng Sản Phẩm" value="<?= $value['amount'] ?>"> 
			 				</div>
						</div>
					</div>
				</div>

				<?php endforeach ?>

	 			<div class="form-group row text-xs-center">
	 				<div class="col-sm-offset-2 col-sm-10">
	 					<button type="submit" class="btn btn-outline-success">Lưu</button>
					</div>
 				</div>

 			</form>
</body>
</html>