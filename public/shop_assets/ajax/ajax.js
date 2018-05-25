$(function () {
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$(document).on('click','.btn-quickview',function () {
		//e.preventdefault();
		$('#quickViewModal').modal('show');
		var url=$(this).attr('data-url');
		console.log(url);
		$.ajax({
			type: 'get',
			url: url,

			success: function (response) {
				//console.log(response);
				$("#product_color").empty();
				$("#product_size").empty();
				//console.log(response.data.product.code);
				$('#product_code').text(response.data.product.code);
				$('#product_name').text(response.data.product.name);
				$('#product_description').text(response.data.product.description);
				$('#product_origin_price').html(response.data.product.origin_price);
				var src=response.data.image;
				src = src.replace("public", "http://tungdeptrai.vn/storage");

				$('#product_image').attr('src',src);
				//console.log(response.data.colors);
				//var colors=response.data.sizes;
				response.data.colors.map(function(color, index){
					$('#product_color').append('<li><a class="btn-choose-color" data-url="http://tungdeptrai.vn/shop/getImageByColor/'+response.data.product.id+'/'+color.color_id+'"><span class="swatch-label"><div style="width:40px;height:40px;box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.15);background:'+color.color_code+'"></div></span></a></li>');
				});
				response.data.sizes.map(function(size, index){
					$('#product_size').append('<li><a href="#">'+size.size_number+'</a></li> ');
				});
				$('#product_size').append('');
				$('#product_sale_price').text('$'+response.data.product.sale_price);
			},
			error: function (error) {
			}
		})
	})
	$(document).on('click','.btn-choose-color',function (e) {
		//e.preventdefault();
		var url=$(this).attr('data-url');
		console.log(url);
		$.ajax({
			type: 'get',
			url: url,

			success: function (response) {
				var src= response.data;
				src= src.toString() 
				src= src.replace("public", "http://tungdeptrai.vn/storage");
				console.log(src);
				$('#product_image').attr('src',src);
			},
			error: function (error) {
			}
		})
	})
	
	$(document).on('click','.btn-choose-size',function () {
		//e.preventdefault();
		var url=$(this).attr('data-url');
		$('#btn-add-to-cart').attr('color-id',$(this).attr('data-color'));
		$('#btn-add-to-cart').attr('size-id','');
		$('#btn-add-to-cart').css("display","none");
		console.log(url);
		$.ajax({
			type: 'get',
			url: url,

			success: function (response) {
				// $(this).find("span").find("div").css("border", "3px solid gray");
				$(this).css("border", "3px solid gray");
				console.log(response);
				$('#choosen_product_size').html("");
				response.data.map(function(size, index){
					$('#choosen_product_size').append('<li><a class="btn-choose-detail" data-size="'+size.size_id+'">'+size.size_number+'</a></li> ');
				});
			},
			error: function (error) {
			}
		})
	})

	$(document).on('click','.btn-choose-detail',function () {
		//e.preventdefault();
		$(this).css("border", "3px solid gray");
		$('#btn-add-to-cart').attr('size-id',$(this).attr('data-size'));
		$('#btn-add-to-cart').css("display","block");
	})

	$(document).on('click','#btn-add-to-cart',function () {
		//e.preventdefault();
		var url=$(this).attr('data-url');
		var url_reload_cart=$(this).attr('data-url-reload-cart');
		console.log(url);
		// var data['productCode']=$('#main_product_code').val();
		// var data['colorId']=$('#btn-add-to-cart').attr('color-id');
		$.ajax({
			type: 'post',
			url: url,
			data: {
				product_code: $('#main_product_code').text(),
				color_id: $(this).attr('color-id'),
				size_id: $(this).attr('size-id'),
				quantity: $('#main-product-quantity').val(),
			},	
			success: function (response) {
				toastr.success('Product already in cart!');
				$.ajax({
					type: 'get',
					url: url_reload_cart,
					success: function (response) {
						$('#cart_container').html("");
						console.log(response);
						response.map(function(item, index){
							var image = item.options.image;
							image=image.replace("public", "http://tungdeptrai.vn/storage");
							$('#cart_container').append('<li class="cart__item"><div class="cart__item__image pull-left"><a href="#"><img src="'+image+'"/></a></div><div class="cart__item__control"><div class="cart__item__delete"><a href="#" class="icon icon-delete"><span>Delete</span></a></div><div class="cart__item__edit"><a href="#" class="icon icon-edit"><span>Edit</span></a></div></div><div class="cart__item__info"><div class="cart__item__info__title"><h2><a href="#">'+item.name+'</a></h2></div><div class="cart__item__info__price"><span class="info-label">Price:</span><span>$'+item.price+'</span></div><div class="cart__item__info__qty"><span class="info-label">Qty:</span><input type="text" class="input--ys" value="'+item.qty+'"/></div><div class="cart__item__info__details"><div class="multitooltip"><a href="#">Details</a><div class="tip on-bottom"><span><strong>Color:</strong> '+item.options.color+'</span><span><strong>Size:</strong> '+item.options.size+'</span><span><strong>Product Code:</strong> '+item.options.productCode+'</span></div></div></div></div></li>');
						});
					},
					error: function (error) {
					}
				})
			},
			error: function (error) {
			}
		})
	})
});