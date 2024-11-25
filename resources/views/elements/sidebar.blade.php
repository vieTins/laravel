					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordion"><!--category-productsr-->
							@foreach($category as $key => $cate)
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a href="{{URL::to('/danh-muc-san-pham/'.$cate->slug_category_product)}}">
												{{$cate->category_name}}
											</a>
										</h4>
									</div>
								</div>
							@endforeach
						</div>
						<!--/category-products-->
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									@foreach($brand as $key => $brand)
										<li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_slug)}}"> <span class="pull-right">(50)</span>{{$brand->brand_name}}</a></li>
									@endforeach
								</ul>					
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="{{asset('frontend/images/home/shipping.jpg')}}" alt="" />
						</div><!--/shipping-->
					
					</div>