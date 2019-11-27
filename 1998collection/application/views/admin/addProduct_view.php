<!DOCTYPE html>
<html lang="en"><head>
	<title> PRODUCT </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="<?php echo base_url(); ?>public/vendor/bootstrap.js"></script>

	<script type="text/javascript" src="<?php echo base_url(); ?>jqueryupload/js/vendor/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>jqueryupload/js/jquery.fileupload.js"></script>

 	<script type="text/javascript" src="<?php echo base_url(); ?>public/vendor/1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/vendor/fontawesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>public/vendor/1.css">
</head>
<body >
 	<div class="container">
 		<div class="text-xs-center">
 			<h3 class="display-3">Danh Sách Sản Phẩm</h3>
 		</div>
 	</div>
 	<div class="container">
 		<div class="row">
 			<div class="card-deck-wrapper">
 				<div class="card-deck">
				
				<?php foreach ($mangketqua as $value): ?>
	 				<div class="card">
	 					<img class="card-img-top img-fluid" src="<?= $value['image'] ?>" alt="Card image cap" >
	 					<div class="card-block">
	 						<h4 class="card-title nameProduct">Name: <?= $value['name'] ?></h4>
	 						<p class="card-text priceProduct">Price: <?= $value['price'] ?>$</p>
	 						<p class="card-text priceProductDiscount">PriceDisount: <?= $value['priceDiscount'] ?>$</p>
	 						<p class="card-text amountProduct">Amount: <?= $value['amount'] ?> Cái</p>
	 						<p class="card-text productCategory">Product Category: <?= $value['category'] ?> </p>
	 						<!-- <p class="card-text"><small class="text-muted">last update 3 mins ago</small></p> -->
	 					</div>

	 					<p class="card-text editns">
	 						<small><a href="<?= base_url() ?>admin/addProduct/edit_product/<?= $value['id'] ?>" class="btn btn-warning btn-xs"> Sửa nội dung <i class="fas fa-pencil-alt"></i></a></small>
	 						<small><a href="<?= base_url() ?>admin/addProduct/remove_product/<?= $value['id'] ?>" class="btn btn-outline-danger btn-xs"> Xóa nội dung <i class="fas fa-trash"></i></a></small>
	 					</p>
	 				</div>
				<?php endforeach ?>
				</div>
 			</div>
 		</div>
	<div class="container">
 		<div class="text-xs-center">
 			<h3 class="display-3">Thêm Sản Phẩm</h3>
 		</div>
 	</div>
 			<!-- <form action="<?= base_url() ?>admin/addProduct/add_product" method="post" enctype="multipart/form-data" > -->
 				<div class="form-group row">
	 				<label for="image" class="col-sm-2 form-control-label text-xs-left">Ảnh Sản Phẩm</label>
	 				<div class="col-sm-10">
	 					<input name="files[]" type="file" class="form-control" id="imageProduct" placeholder="Upload image">
	 				</div>
				</div>
				<div class="form-group row">
	 				<label for="name" class="col-sm-2 form-control-label text-xs-left">Tên Sản Phẩm</label>
	 				<div class="col-sm-10">
	 					<input name="name" type="text" class="form-control" id="name" placeholder="Tên sản phẩm">
	 				</div>
				</div>
				<div class="form-group row">
	 				<label for="name" class="col-sm-2 form-control-label text-xs-left">Loại Sản Phẩm</label>
	 				<div class="col-sm-10">
	 					<input name="category" type="text" class="form-control" id="category" placeholder="Loại sản phẩm: FreeSize, Quần, Áo,...">
	 				</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-4">
						<div class="row">
							<label for="price" class="col-sm-4 form-control-label text-xs-center">Giá Sản Phẩm</label>
			 				<div class="col-sm-8">
			 					<input name="price" type="text" class="form-control" id="price" placeholder="Giá sản phẩm">
			 				</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<label for="priceDiscount" class="col-sm-4 form-control-label text-xs-center">Giá Sản Phẩm Đã Giảm</label>
			 				<div class="col-sm-8">
			 					<input name="priceDiscount" type="text" class="form-control" id="priceDiscount" placeholder="Giá sản phẩm Đã Giảm">
			 				</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<label for="amount" class="col-sm-4 form-control-label text-xs-center">Số Lượng Sản Phẩm</label>
			 				<div class="col-sm-8">
			 					<input name="amount" type="text" class="form-control" id="amount" placeholder="Số Lượng Sản Phẩm">
			 				</div>
						</div>
					</div>
				</div>


	 			<div class="form-group row text-xs-center">
	 				<div class="col-sm-offset-2 col-sm-10">
	 					<button type="submit" class="btn btn-outline-success nutxulyAjax">Thêm Mới</button>
					</div>
 				</div>

 			<!-- </form> -->
 	</div>
 	<script>
		
		duongdan = '<?php echo base_url() ?>';

		$('#imageProduct').fileupload({
			url: duongdan + 'admin/addProduct/uploadfile',
			dataType:'json',
			done: function (e, data) {
				$.each(data.result.files, function(index, file) {
					console.log(file.url)
					tenfile = file.url ;
					
				});
			}

		})

 		$('.nutxulyAjax').click(function(event) {
 			// body...
 			$.ajax({
 				url: 'add_product_ajax',
 				type: 'POST',
 				dataType: 'json',
 				data: {
 					name: $('#name').val(),
 					price: $('#price').val(),
 					priceDiscount: $('#priceDiscount').val(),
 					amount: $('#amount').val(),
 					image: tenfile,
 					category: $('#category').val()
 				},
 				
 			})

 			.done(function() {
 				console.log("success");
 			})
 			.fail(function() {
 				console.log("error");
 			})
 			.always(function() {
 				console.log("complete");
 				noidung = '<div class="card">';
 				noidung += '	<img class="card-img-top img-fluid" src="'+tenfile+'" >';
 				noidung += '<div class="card-block">';
 				noidung += '<h4 class="card-title nameProduct">Name: '+$('#name').val()+'</h4>';
 				noidung += '<p class="card-text priceProduct">Price: '+$('#price').val()+'$</p>';
 				noidung += '<p class="card-text priceProductDiscount">PriceDisount: '+$('#priceDiscount').val()+'$</p>';
 				noidung += '<p class="card-text amountProduct">Amount: '+$('#amount').val()+' Cái</p>';
 				noidung += '<p class="card-text productCategory">Product Category: '+$('#category').val()+' </p>';
 				// noidung += '<p class="card-text"><small class="text-muted">last update 3 mins ago</small></p>';
 				noidung += '</div>';

 				noidung += '<p class="card-text editns">';
 				noidung += '<small><a href="<?= base_url() ?>admin/addProduct/edit_product/<?= $value['id'] ?>" class="btn btn-warning btn-xs"> Sửa nội dung <i class="fas fa-pencil-alt"></i></a></small>';
 				noidung += '<small><a href="<?= base_url() ?>admin/addProduct/remove_product/<?= $value['id'] ?>" class="btn btn-outline-danger btn-xs"> Xóa nội dung <i class="fas fa-trash"></i></a></small>';
 				noidung += '</p>';
 				noidung += '</div>';
 				$('.card-deck').append(noidung);
 				//reset nội dung về rỗng
 				$('#name').val('');
 				$('#price').val('');
 				$('#priceDiscount').val('');
 				$('#amount').val('');
 				$('#category').val('');
 			});
 			
 		})

 	</script>
</body>
</html>