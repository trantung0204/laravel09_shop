
										<ul class="nav navbar-nav">
											<li class="dl-close"><a href="{{ asset('shop_assets/') }}/#"><span class="icon icon-close"></span>close</a></li>							
											<li class="dropdown dropdown-mega-menu dropdown-two-col">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">Categories</span></a>
												<ul class="dropdown-menu multicolumn two-col" role="menu">
													<li class="dl-back"><a href="{{ asset('shop_assets/') }}/#"><span class="icon icon-chevron_left"></span>back</a></li>	
													@foreach ($categories as $category)
														<li><a href="{{ asset('shop/category') }}{{'/'.$category->slug}}">{{$category->name}}</a></li>
													@endforeach	
												</ul>
											</li>
											<li class="dropdown dropdown-mega-menu dropdown-two-col">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">Brands</span></a>
												<ul class="dropdown-menu multicolumn two-col" role="menu">
													<li class="dl-back"><a href="{{ asset('shop_assets/') }}/#"><span class="icon icon-chevron_left"></span>back</a></li>	
													@foreach ($brands as $brand)
														<li><a href="{{ asset('shop/brand') }}{{'/'.$brand->slug}}">{{$brand->name}}</a></li>
													@endforeach	
												</ul>
											</li>
											<li class=" dropdown-mega-menu dropdown-two-col">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">About Us</span></a>
											</li>
											<li class=" dropdown-mega-menu dropdown-two-col">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">Delivery</span></a>
											</li>
											<li class=" dropdown-mega-menu dropdown-two-col">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">FAQs</span></a>
											</li>
										</ul>