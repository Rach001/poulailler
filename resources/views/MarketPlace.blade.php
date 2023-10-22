@include('Layout.Header')
<!-- NFTmax Dashboard -->
<section class="nftmax-adashboard nftmax-show">
				<div class="container">
					<div class="row">	
						<div class="col-lg-9 col-12 nftmax-main__column">
							<div class="nftmax-body">
								<!-- Dashboard Inner -->
								<div class="nftmax-dsinner">
								
									<!-- Welcome CTA -->
									<div class="welcome-cta mg-top-40">
										<div class="welcome-cta__heading">
											<h2 class="welcome-cta__title">Create your own NFT and extraordinary get lot of Sell..</h2>
											<p class="welcome-cta__text">Buy and sell NFTs from the world’s top artists</p>
										</div>
										<div class="welcome-cta__button">
											<a href="{{url('/upload-product')}}" class="nftmax-btn nftmax-btn__bordered bg radius">Upload Products</a>
											<a href="{{url('/market-place')}}" class="nftmax-btn trs-white bl-color">View Art Work</a>
										</div>
									</div>
									<!-- End Welcome CTA -->
									
									<!-- Marketplace Bar -->
									<div class="nftmax-marketplace__bar mg-top-50 mg-btm-40">
										<div class="nftmax-marketplace__bar-inner">
											<!-- Marketplace Tab List -->
											<div class="list-group nftmax-marketplace__bar-list" id="list-tab" role="tablist">
												<a class="list-group-item active" data-bs-toggle="list" href="#id1" role="tab">Explore</a>
												<a class="list-group-item" data-bs-toggle="list" href="#id2" role="tab">Featured  Artist</a>
												<a class="list-group-item" data-bs-toggle="list" href="#id3" role="tab">Open Market</a>
												<a class="list-group-item" data-bs-toggle="list" href="#id4" role="tab">Partner Shops</a>
												<a class="list-group-item" data-bs-toggle="list" href="#id5" role="tab">Game Assets</a>
											</div>
											<!-- End Marketplace Tab List -->
											
											<div class="nftmax-marketplace__bar-right">
												<div class="nftmax-marketplace__bar-one">
													<form class="nftmax-marketplace__bar-search" action="#">
														<button class="search-btn" type="submit"><img src="assets/img/search.png" alt="#"></button>
														<input name="s" value="" type="text" placeholder="Search items, collections...">
													</form>
												</div>
											</div>
										</div>
									</div>
								
									<!-- Welcome CTA -->
									<div class="trending-action">
										<div class="row">
											<div class="col-12">
												<div class="tab-content" id="nav-tabContent">
													<!-- Single Tab -->
													<div class="tab-pane fade show active" id="id1" role="tabpanel" aria-labelledby="nav-home-tab">
														<div class="row nftmax-gap-sq30">
															@foreach($Explore as $Explore)
															<div class="col-lg-4 col-md-6 col-12">
																<!-- Marketplace Single Item -->
																<div class="trending-action__single trending-action__single--v2">
																	<div class="nftmax-trendmeta">
																		<div class="nftmax-trendmeta__main">
																			<div class="nftmax-trendmeta__author">
																				<div class="nftmax-trendmeta__img">
																					<img src="{{ asset($Explore['0']) }}" alt="#">
																				</div>
																				<div class="nftmax-trendmeta__content">
																					<span class="nftmax-trendmeta__small">Owned by</span>
																					<h4 class="nftmax-trendmeta__title">{{ $Explore['1'] }}</h4> 
																				</div>
																			</div>
																			<div class="nftmax-trendmeta__author">
																				<div class="nftmax-trendmeta__content">
																					<span class="nftmax-trendmeta__small">Create by</span>
																					<h4 class="nftmax-trendmeta__title">{{ $Explore['2'] }}</h4> 
																				</div>
																				<div class="nftmax-trendmeta__img">
																					<img src="{{ asset($Explore['3']) }}" alt="#">
																				</div>
																			</div>
																		</div>
																	</div>
																	<!-- Trending Head -->
																	<div class="trending-action__head">
																		@if($Explore['4'] == 1)
																		<div class="trending-action__badge"><span>Active</span></div>
																		@else
																		<div class="trending-action__badge"><span>close</span></div>
																		@endif
																		<div class="trending-action__button v2">
																			<a class="trending-action__btn heart-icon"><i class="fa-solid fa-heart"></i></a>
																			<a class="trending-action__btn"><i class="fa-solid fa-ellipsis-vertical"></i></a>
																		</div>
																		<img src="{{ asset($Explore['5']) }}" alt="#">
																	</div>
																	<!-- Trending Body -->
																	<div class="trending-action__body trending-marketplace__body">
																		<h2 class="trending-action__title"><a href="{{url('/market-place')}}">{{ $Explore['6'] }}</a></h2>
																		<div class="nftmax-currency">
																			<div class="nftmax-currency__main">
																				<div class="nftmax-currency__icon"><img src="{{ asset($Explore['7']) }}" alt="#"></div>
																				<div class="nftmax-currency__content">
																					<h4 class="nftmax-currency__content-title">{{ $Explore['8'] }} ETH </h4>
																					<p class="nftmax-currency__content-sub">(773.69  USD)</p>
																				</div>
																			</div>
																			<a href="{{url('/market-place')}}" class="nftmax-btn nftmax-btn__secondary radius">On Sale</a>
																		</div>
																	</div>
																</div>
																<!-- End Marketplace Item -->
															</div>
															@endforeach
														</div>
													</div>
													<div class="tab-pane fade" id="id2" role="tabpanel" aria-labelledby="nav-home-tab">
														<div class="row nftmax-gap-sq30">
														@foreach($FeaturedArtist as $FeaturedArtist)
															<div class="col-lg-4 col-md-6 col-12">
																<!-- Marketplace Single Item -->
																<div class="trending-action__single trending-action__single--v2">
																	<div class="nftmax-trendmeta">
																		<div class="nftmax-trendmeta__main">
																			<div class="nftmax-trendmeta__author">
																				<div class="nftmax-trendmeta__img">
																					<img src="{{ asset($FeaturedArtist['0']) }}" alt="#">
																				</div>
																				<div class="nftmax-trendmeta__content">
																					<span class="nftmax-trendmeta__small">Owned by</span>
																					<h4 class="nftmax-trendmeta__title">{{ $FeaturedArtist['1'] }}</h4> 
																				</div>
																			</div>
																			<div class="nftmax-trendmeta__author">
																				<div class="nftmax-trendmeta__content">
																					<span class="nftmax-trendmeta__small">Create by</span>
																					<h4 class="nftmax-trendmeta__title">{{ $FeaturedArtist['2'] }}</h4> 
																				</div>
																				<div class="nftmax-trendmeta__img">
																					<img src="{{ asset($FeaturedArtist['3']) }}" alt="#">
																				</div>
																			</div>
																		</div>
																	</div>
																	<!-- Trending Head -->
																	<div class="trending-action__head">
																		@if($FeaturedArtist['4'] == 1)
																		<div class="trending-action__badge"><span>Active</span></div>
																		@else
																		<div class="trending-action__badge"><span>close</span></div>
																		@endif
																		<div class="trending-action__button v2">
																			<a class="trending-action__btn heart-icon"><i class="fa-solid fa-heart"></i></a>
																			<a class="trending-action__btn"><i class="fa-solid fa-ellipsis-vertical"></i></a>
																		</div>
																		<img src="{{ asset($FeaturedArtist['5']) }}" alt="#">
																	</div>
																	<!-- Trending Body -->
																	<div class="trending-action__body trending-marketplace__body">
																		<h2 class="trending-action__title"><a href="{{url('/market-place')}}">{{ $FeaturedArtist['6'] }}</a></h2>
																		<div class="nftmax-currency">
																			<div class="nftmax-currency__main">
																				<div class="nftmax-currency__icon"><img src="{{ asset($Explore['7']) }}" alt="#"></div>
																				<div class="nftmax-currency__content">
																					<h4 class="nftmax-currency__content-title">{{ $FeaturedArtist['8'] }} ETH </h4>
																					<p class="nftmax-currency__content-sub">(773.69  USD)</p>
																				</div>
																			</div>
																			<a href="#" class="nftmax-btn nftmax-btn__secondary radius">On Sale</a>
																		</div>
																	</div>
																</div>
																<!-- End Marketplace Item -->
															</div>
															@endforeach
														</div>
													</div>
													<div class="tab-pane fade" id="id3" role="tabpanel" aria-labelledby="nav-home-tab">
														<div class="row nftmax-gap-sq30">
														@foreach($OpenMarket as $OpenMarket)
															<div class="col-lg-4 col-md-6 col-12">
																<!-- Marketplace Single Item -->
																<div class="trending-action__single trending-action__single--v2">
																	<div class="nftmax-trendmeta">
																		<div class="nftmax-trendmeta__main">
																			<div class="nftmax-trendmeta__author">
																				<div class="nftmax-trendmeta__img">
																					<img src="{{ asset($OpenMarket['0']) }}" alt="#">
																				</div>
																				<div class="nftmax-trendmeta__content">
																					<span class="nftmax-trendmeta__small">Owned by</span>
																					<h4 class="nftmax-trendmeta__title">{{ $OpenMarket['1'] }}</h4> 
																				</div>
																			</div>
																			<div class="nftmax-trendmeta__author">
																				<div class="nftmax-trendmeta__content">
																					<span class="nftmax-trendmeta__small">Create by</span>
																					<h4 class="nftmax-trendmeta__title">{{ $OpenMarket['2'] }}</h4> 
																				</div>
																				<div class="nftmax-trendmeta__img">
																					<img src="{{ asset($OpenMarket['3']) }}" alt="#">
																				</div>
																			</div>
																		</div>
																	</div>
																	<!-- Trending Head -->
																	<div class="trending-action__head">
																		@if($OpenMarket['4'] == 1)
																		<div class="trending-action__badge"><span>Active</span></div>
																		@else
																		<div class="trending-action__badge"><span>close</span></div>
																		@endif
																		<div class="trending-action__button v2">
																			<a class="trending-action__btn heart-icon"><i class="fa-solid fa-heart"></i></a>
																			<a class="trending-action__btn"><i class="fa-solid fa-ellipsis-vertical"></i></a>
																		</div>
																		<img src="{{ asset($OpenMarket['5']) }}" alt="#">
																	</div>
																	<!-- Trending Body -->
																	<div class="trending-action__body trending-marketplace__body">
																		<h2 class="trending-action__title"><a href="marketplace-details.html">{{ $FeaturedArtist['6'] }}</a></h2>
																		<div class="nftmax-currency">
																			<div class="nftmax-currency__main">
																				<div class="nftmax-currency__icon"><img src="{{ asset($OpenMarket['7']) }}" alt="#"></div>
																				<div class="nftmax-currency__content">
																					<h4 class="nftmax-currency__content-title">{{ $OpenMarket['8'] }} ETH </h4>
																					<p class="nftmax-currency__content-sub">(773.69  USD)</p>
																				</div>
																			</div>
																			<a href="#" class="nftmax-btn nftmax-btn__secondary radius">On Sale</a>
																		</div>
																	</div>
																</div>
																<!-- End Marketplace Item -->
															</div>
															@endforeach
														</div>
													</div>
													<div class="tab-pane fade" id="id4" role="tabpanel" aria-labelledby="nav-home-tab">
														<div class="row nftmax-gap-sq30">
														@foreach($PartnerShops as $PartnerShops)
															<div class="col-lg-4 col-md-6 col-12">
																<!-- Marketplace Single Item -->
																<div class="trending-action__single trending-action__single--v2">
																	<div class="nftmax-trendmeta">
																		<div class="nftmax-trendmeta__main">
																			<div class="nftmax-trendmeta__author">
																				<div class="nftmax-trendmeta__img">
																					<img src="{{ asset($PartnerShops['0']) }}" alt="#">
																				</div>
																				<div class="nftmax-trendmeta__content">
																					<span class="nftmax-trendmeta__small">Owned by</span>
																					<h4 class="nftmax-trendmeta__title">{{ $PartnerShops['1'] }}</h4> 
																				</div>
																			</div>
																			<div class="nftmax-trendmeta__author">
																				<div class="nftmax-trendmeta__content">
																					<span class="nftmax-trendmeta__small">Create by</span>
																					<h4 class="nftmax-trendmeta__title">{{ $PartnerShops['2'] }}</h4> 
																				</div>
																				<div class="nftmax-trendmeta__img">
																					<img src="{{ asset($PartnerShops['3']) }}" alt="#">
																				</div>
																			</div>
																		</div>
																	</div>
																	<!-- Trending Head -->
																	<div class="trending-action__head">
																		@if($PartnerShops['4'] == 1)
																		<div class="trending-action__badge"><span>Active</span></div>
																		@else
																		<div class="trending-action__badge"><span>close</span></div>
																		@endif
																		<div class="trending-action__button v2">
																			<a class="trending-action__btn heart-icon"><i class="fa-solid fa-heart"></i></a>
																			<a class="trending-action__btn"><i class="fa-solid fa-ellipsis-vertical"></i></a>
																		</div>
																		<img src="{{ asset($PartnerShops['5']) }}" alt="#">
																	</div>
																	<!-- Trending Body -->
																	<div class="trending-action__body trending-marketplace__body">
																		<h2 class="trending-action__title"><a href="{{url('/market-place')}}">{{ $PartnerShops['6'] }}</a></h2>
																		<div class="nftmax-currency">
																			<div class="nftmax-currency__main">
																				<div class="nftmax-currency__icon"><img src="{{ asset($Explore['7']) }}" alt="#"></div>
																				<div class="nftmax-currency__content">
																					<h4 class="nftmax-currency__content-title">{{ $PartnerShops['8'] }} ETH </h4>
																					<p class="nftmax-currency__content-sub">(773.69  USD)</p>
																				</div>
																			</div>
																			<a href="#" class="nftmax-btn nftmax-btn__secondary radius">On Sale</a>
																		</div>
																	</div>
																</div>
																<!-- End Marketplace Item -->
															</div>
															@endforeach
														</div>
													</div>
													<div class="tab-pane fade" id="id5" role="tabpanel" aria-labelledby="nav-home-tab">
														<div class="row nftmax-gap-sq30">
														@foreach($GameAssets as $GameAssets)
															<div class="col-lg-4 col-md-6 col-12">
																<!-- Marketplace Single Item -->
																<div class="trending-action__single trending-action__single--v2">
																	<div class="nftmax-trendmeta">
																		<div class="nftmax-trendmeta__main">
																			<div class="nftmax-trendmeta__author">
																				<div class="nftmax-trendmeta__img">
																					<img src="{{ asset($GameAssets['0']) }}" alt="#">
																				</div>
																				<div class="nftmax-trendmeta__content">
																					<span class="nftmax-trendmeta__small">Owned by</span>
																					<h4 class="nftmax-trendmeta__title">{{ $GameAssets['1'] }}</h4> 
																				</div>
																			</div>
																			<div class="nftmax-trendmeta__author">
																				<div class="nftmax-trendmeta__content">
																					<span class="nftmax-trendmeta__small">Create by</span>
																					<h4 class="nftmax-trendmeta__title">{{ $GameAssets['2'] }}</h4> 
																				</div>
																				<div class="nftmax-trendmeta__img">
																					<img src="{{ asset($GameAssets['3']) }}" alt="#">
																				</div>
																			</div>
																		</div>
																	</div>
																	<!-- Trending Head -->
																	<div class="trending-action__head">
																		@if($GameAssets['4'] == 1)
																		<div class="trending-action__badge"><span>Active</span></div>
																		@else
																		<div class="trending-action__badge"><span>close</span></div>
																		@endif
																		<div class="trending-action__button v2">
																			<a class="trending-action__btn heart-icon"><i class="fa-solid fa-heart"></i></a>
																			<a class="trending-action__btn"><i class="fa-solid fa-ellipsis-vertical"></i></a>
																		</div>
																		<img src="{{ asset($GameAssets['5']) }}" alt="#">
																	</div>
																	<!-- Trending Body -->
																	<div class="trending-action__body trending-marketplace__body">
																		<h2 class="trending-action__title"><a href="{{url('/market-place')}}">{{ $FeaturedArtist['6'] }}</a></h2>
																		<div class="nftmax-currency">
																			<div class="nftmax-currency__main">
																				<div class="nftmax-currency__icon"><img src="{{ asset($GameAssets['7']) }}" alt="#"></div>
																				<div class="nftmax-currency__content">
																					<h4 class="nftmax-currency__content-title">{{ $GameAssets['8'] }} ETH </h4>
																					<p class="nftmax-currency__content-sub">(773.69  USD)</p>
																				</div>
																			</div>
																			<a href="#" class="nftmax-btn nftmax-btn__secondary radius">On Sale</a>
																		</div>
																	</div>
																</div>
																<!-- End Marketplace Item -->
															</div>
															@endforeach
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End Welcome CTA -->
								</div>
								<!-- End Dashboard Inner -->
							</div>
						</div>
@include('layout.RightSidebar')
@include('Layout.Footer')   
<script>
			
			const ctx_side_two = document.getElementById('myChart_Side_One').getContext('2d');
			const myChart_Side_One = new Chart(ctx_side_two, {
				type: 'doughnut',
				
				data: {
					labels: [
						'Total Sold',
						'Total Cancel',
						'Total Cancel',
						'Total Planding'
					  ],
					  datasets: [{
						label: 'My First Dataset',
						data: [16, 16, 16, 30],
						backgroundColor: [
						  '#5356FB',
						  '#F539F8',
						  '#FFC210',
						  '#E3E4FE'
						],
						hoverOffset: 2,
						borderWidth: 0,
					  }]
				},
				
				 options: {
				 
					responsive: true,
					plugins: {
					  legend: {
						position: 'top',
						display: false,
					  },
					  title: {
						display: false,
						text: 'Sell History'
					  }
					}
				}
				
			});
			
			const ctx_side_three = document.getElementById('myChart_Side_Two').getContext('2d');
			const myChart_Side_Two = new Chart(ctx_side_three, {
				type: 'line',
				
				data: {
					labels: ['12:00 AM', '04:00 AM', '08:00 AM'],
					datasets: [{
						label: 'Visitor',
						data: [40, 90, 10],
						backgroundColor: '#D8D8FE',
						borderColor:'#5356FB',
						pointRadius: 3,
						pointBackgroundColor: '#5356FB',
						pointBorderColor: '#5356FB',
						borderWidth:4,
						tension: 0.9,
						fill:true,
						fillColor:'#fff',
						
					}]
				},
				
				 options: {
					responsive: true,
					scales: {
						x:{
							grid:{
								display:false,
								drawBorder: false,
							},
							
						},
						y:{
							grid:{
								display:false,
								drawBorder: false,
							},
							ticks:{
								display:false
							}
						},
					},
					
					plugins: {
					  legend: {
						position: 'top',
						display: false,
					  },
					  title: {
						display: false,
						text: 'Visitor: 2k'
					  }
					}
				}
			});
		</script>                     