function slug(title)
{
    var slug;
 
    //Lấy text từ thẻ input title 
 
    //Đổi chữ hoa thành chữ thường
    slug = title.toLowerCase();
 
    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    //document.getElementById('slug').value = slug;
    return slug;
}

	$(function () {
		var url=$('#product-table').attr('data-url');
	    var productTable = $('#product-table').DataTable({
	        processing: true,
	        serverSide: true,
	        ajax: url,
	        columns: [
	            { data: 'id', name: 'products.id' },
	            { data: 'image_link', name: 'image_link' },
	            { data: 'code', name: 'products.code' },
	            { data: 'name', name: 'products.name' },
	            { data: 'origin_price', name: 'products.origin_price' },
	            { data: 'sale_price', name: 'products.sale_price' },
	            { data: 'brand_name', name: 'products.brand_id' },
	            { data: 'category_name', name: 'products.category_id' },
	            { data: 'created_at', name: 'products.created_at' },
	            { data: 'action', name: 'action' }
	        ]
	    });
		/*$('.btn-info').click(function () {
			$('#show').modal('show');
		})*/
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$('#add-new').on('submit',function (e) {
			e.preventDefault();
			var url = $(this).attr('data-url');
			console.log(url);
			$.ajax({
				type: 'post',
				url: url,
				data: {
					name: $('#name').val(),
					slug: slug($('#name').val()),
				},
				success: function (response) {
					console.log("dfdf");
					$('#add').modal('hide');
					toastr.success('Thành công!');
					productTable.ajax.reload();
				},
				error: function (error) {
					
				}
			})
		});

		$('#edit-form').on('submit',function (e) {
			e.preventDefault();
			var url=$('#edit-submit').attr('data-url');
			var id=$('#edit-submit').data('id');
			$.ajax({
				type: 'put',
				url: url,
				data: {
					name: $('#edit_name').val(),
					slug: slug($('#edit_name').val()),
					code: $('#edit_code').val(),
					description: $('#edit_description').val(),
					content: CKEDITOR.instances.editor_edit_content.getData(),
					brand_id: $('#edit_brand_id').val(),
					category_id: $('#edit_category_id').val(),
					origin_price: $('#edit_origin_price').val(),
					sale_price: $('#edit_sale_price').val(),
				},
				success: function (response) {
					//console.log(response);
					$('#edit').modal('hide');
					
					productTable.ajax.reload();
					//$('#product-price-'+id).text(response.data.price+" $");
					toastr.success('Đã lưu thay đổi');
					//toastr.success('Thành công!');
					//$('#table-body').append('<tr><td>'+response.id+'</td><td>'+response.name+'</td> <td>'+response.price+' $</td> <td>'+response.created_at+'</td> <td>'+response.updated_at+'</td> <td> <button type="button" class="btn btn-xs btn-info" data-id="'+response.id+'">Show</button> <button type="button" class="btn btn-xs btn-warning" data-toggle="modal" href="#edit-'+response.id+'">Edit</button>  </td> </tr>');
				},
				error: function (error) {
					
				}
			})
		});

		$(document).on('click','.btn-info',function () {
			$('#show').modal('show');
			var url=$(this).data('url');
			console.log(url);
			$.ajax({
				type: 'get',
				url: url,

				success: function (response) {
					$("#detail-table-body").empty();
					// response.forEach(function (item, index) {
					// 	//alert('ok');
					// 	var status = (item.status == 1) ? "public" : "private";
					// 	$('#detail-table-body').append('<tr><td>'+(index+1)+'</td><td>'+item.title+'</td><td>'+status+'</td><td>'+item.created_at+'</td><td>'+item.updated_at+'</td></tr>');
					// })
					$('#product_name').text(response.name);
					$('#product_description').text(response.description);
					$('#product_origin_price').text(new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'VND' }).format(response.origin_price) );
					$('#product_sale_price').text(new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'VND' }).format(response.sale_price) );
					$('#product_content').html(response.content);
				},
				error: function (error) {
				}
			})
		})
		
		$(document).on('click','.btn-warning',function () {
			$('#edit').modal('show');
			var url=$(this).data('url');
			//alert(id);
			$.ajax({
				type: 'get',
				url: url,

				success: function (response) {
					$('#edit_name').val(response.name);
					$('#edit_code').val(response.code);
					$('#edit_description').val(response.description);
					$('#edit_sale_price').val(response.sale_price);
					$('#edit_origin_price').val(response.origin_price);
					$('#edit_brand_id').val(response.brand_id);
					$('#edit_category_id').val(response.category_id);
					CKEDITOR.instances.editor_edit_content.setData(response.content);
					//$('#edit-submit').data("id", response.id);
					$('#edit-submit').attr("data-url", "/admin/products/"+response.id);
					$('#edit-submit').attr("data-id",response.id);
				},
				error: function (error) {
					
				}
			})
		})

		$(document).on('click','.btn-detail',function () {
			$('#detail').modal('show');
			var url=$(this).attr('data-url');

			console.log(url);

			var productDetailTable = $('#product-detail-table').DataTable({
		        processing: true,
		        serverSide: true,
		        ajax: url,
		        "destroy": true,
		        columns: [
		            { data: 'id', name: 'id' },
		            { data: 'product_id', name: 'product_details.product_id' },
		            { data: 'product_name', name: 'product_details.product_name' },
		            { data: 'size_name', name: 'product_details.size_name' },
		            { data: 'color_name', name: 'product_details.color_name' },
		            { data: 'quantity', name: 'product_details.quantity' },
		            { data: 'action', name: 'action' }
		        ]
		    });

			//alert(id);
			// $.ajax({
			// 	type: 'get',
			// 	url: url,

			// 	success: function (response) {;
			// 		CKEDITOR.instances.editor_edit_content.setData(response.content);
			// 		//$('#edit-submit').data("id", response.id);
			// 		$('#edit-submit').attr("data-url", "/admin/products/"+response.id);
			// 		$('#edit-submit').attr("data-id",response.id);
			// 	},
			// 	error: function (error) {
					
			// 	}
			// })
		})

		$(document).on('click','.btn-danger',function () {
            swal({
				  title: "Are you sure?",
				  text: "Once deleted, you will not be able to recover this category!",
				  icon: "warning",
				  buttons: true,
				  dangerMode: true,
				})
				.then((willDelete) => {
				  if (willDelete) {
				    swal("Poof! Your category has been deleted!", {
				      icon: "success",
				    });
					//var id=$(this).data('id');
					var url=$(this).attr('data-url');
					console.log(url);
					$.ajax({
						type: 'delete',
						url: url,

						success: function (response) {
							//console.log(response);
							toastr.error('Đã xóa sản phẩm');
							productTable.ajax.reload();
						},
						error: function (error) {
							
						}
					})
				  } else {
				    swal("Your imaginary file is safe!");
				  }
				});
		})
	});
