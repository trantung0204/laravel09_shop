
								<div class="cart link-inline">
									<div class="dropdown text-right">
										<a class="dropdown-toggle">
										<span class="icon icon-shopping_basket"></span>
										<span class="badge badge--cart" id="count_cart">{{$countCarts}}</span>
										</a>
										<div class="dropdown-menu dropdown-menu--xs-full slide-from-top" role="menu">
											<div class="container">
												<div class="cart__top">Recently added item(s)</div>
												<a href="{{ asset('shop_assets/') }}/#" class="icon icon-close cart__close"><span>CLOSE</span></a>
												<ul id="cart_container">
													@foreach ($carts as $item)
														<li class="cart__item">
															<div class="cart__item__image pull-left"><a href="#"><img src="{{ url(\Storage::url($item->options->image)) }}" alt=""/></a></div>
															<div class="cart__item__control">
																<div class="cart__item__delete"><a  class="icon icon-delete" data-url-reload-cart="{{ route('shop.getCart') }}" data-url="{{ route('shop.delItem',$item->rowId) }}"><span>Delete</span></a></div>
																<div class="cart__item__edit"><a  class="icon icon-edit" data-url-reload-cart="{{ route('shop.getCart') }}" data-url="{{ route('shop.editItem',$item->rowId) }}" data-rowId="{{ $item->rowId}}"><span>Edit</span></a></div>
															</div>
															<div class="cart__item__info">
																<div class="cart__item__info__title">
																	<h2><a href="#">{{$item->name}}</a></h2>
																</div>
																<div class="cart__item__info__price"><span class="info-label">Price:</span><span>${{$item->price}}</span></div>
																<div class="cart__item__info__qty"><span class="info-label">Qty:</span><input type="text" class="input--ys item_qty_{{$item->rowId}}" value='{{$item->qty}}' /></div>
																<div class="cart__item__info__details">
																	<div class='multitooltip'>
																		<a href="{{ asset('shop_assets/') }}/#">Details</a>
																		<div class="tip on-bottom">
																			<span><strong>Color:</strong> {{$item->options->color}}</span>
																			<span><strong>Size:</strong> {{$item->options->size}}</span>
																			<span><strong>Product Code:</strong> {{$item->options->productCode}}</span>
																		</div>
																	</div>
																</div>
															</div>
														</li>
													@endforeach
												</ul>
												<div class="cart__bottom">
													<div class="cart__total">Cart subtotal: <span> ${{$subtotalCarts}}</span></div>
													<a href="{{ route('shop.checkOut') }}" class="btn btn--ys btn-checkout">Checkout <span class="icon icon--flippedX icon-reply"></span></a>
													{{-- <a href="{{ asset('shop_assets/') }}/#" class="btn btn--ys"><span class="icon icon-shopping_basket"></span> View Cart</a> --}}
												</div>
											</div>
										</div>
									</div>
								</div>