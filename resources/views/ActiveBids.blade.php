@include('Layout.Header')
<section class="nftmax-adashboard nftmax-show">
				<div class="container">
					<div class="row">	
						<div class="col-lg-9 col-12 nftmax-main__column">
							<div class="nftmax-body">
								<!-- Dashboard Inner -->
								<div class="nftmax-dsinner">
								
									<!-- FunFacts -->
									<div class="nftmax-funfact mg-top-40">
										<!-- NFTMax Single -->
										<div class="nftmax-funfact__single">
											<div class="nftmax-funfact__icon">
												<img class="nftmax-funfact__img" src="assets/img/funfact-icon.png" alt="#">
											</div>
											<div class="nftmax-funfact__content">
												<h3 class="nftmax-funfact__title"><b class="number">{{$Artworks['artworkNo']}}</b><span>K</span></h3>
												<p class="nftmax-funfact__text">Artworks</p>
											</div>
										</div>
										<!-- End NFTMax Single -->
										<!-- NFTMax Single -->
										<div class="nftmax-funfact__single">
											<div class="nftmax-funfact__icon">
												<img class="nftmax-funfact__img nftmax-funfact__img--v2" src="assets/img/funfact-icon-2.png" alt="#">
											</div>
											<div class="nftmax-funfact__content">
												<h3 class="nftmax-funfact__title"><b class="number">{{$Artworks['activeArtwirk']}}</b><span>K</span></h3>
												<p class="nftmax-funfact__text">Artworks</p>
											</div>
										</div>
										<!-- End NFTMax Single -->
										<!-- NFTMax Single -->
										<div class="nftmax-funfact__single">
											<div class="nftmax-funfact__icon">
												<img class="nftmax-funfact__img  nftmax-funfact__img--v3" src="assets/img/funfact-icon-3.png" alt="#">
											</div>
											<div class="nftmax-funfact__content">
												<h3 class="nftmax-funfact__title"><b class="number">{{$Artworks['current_bids']}}</b><span>K</span></h3>
												<p class="nftmax-funfact__text">Artworks</p>
											</div>
										</div>
										<!-- End NFTMax Single -->
										<!-- NFTMax Single -->
										<div class="nftmax-funfact__single nftmax-funfact__single--v4">
											<div class="nftmax-funfact__icon">
												<img class="nftmax-funfact__img nftmax-funfact__img--v4" src="assets/img/funfact-icon-4.png" alt="#">
											</div>
											<div class="nftmax-funfact__content">
												<h3 class="nftmax-funfact__title"><b class="number">{{$Artworks['close_artwork']}}</b><span>K</span></h3>
												<p class="nftmax-funfact__text">Artworks</p>
											</div>
										</div>
										<!-- End NFTMax Single -->
									</div>
									<!-- End FunFacts -->
								
									<!-- Dashboard Slider -->
									<div class="dashboard-banner dashboard-banner__active-bids  mg-top-40">
										<div class="row">
											<div class="col-12">
												<div class="dashboard-banner__main">
													<div class="dashboard-banner__column dashboard-banner__column--two order-top">
														<div class="dashboard-banner__single-slider  order-top">
															<img src="{{ asset($ActiveBids['bids_image']) }}" alt="#">
														</div>
													</div>
													<div class="dashboard-banner__column dashboard-banner__column--one">
														<!-- Dashboard Content -->
														<div class="dashboard-banner__content">
															<h2 class="dashboard-banner__title">{{ $ActiveBids['name'] }}</h2>
															<p class="dashboard-banner__text">ID : {{ $ActiveBids['id'] }}</p>
														</div>	
														
														<div class="nftmax-header__author nftmax-header__author-two ">
															<div class="nftmax-header__author-img"><img src="{{ asset($ActiveBids['user_image']) }}" alt="#"></div>
															<div class="nftmax-header__author-content ">
																<h4 class="nftmax-header__author-title nftmax-header__author-title--two">{{ $ActiveBids['user'] }}</h4>
																<p class="nftmax-header__author-text nftmax-header__author-text--two"><a href="#">{{ $ActiveBids['user_name'] }}</a></p>
															</div>
														</div>
														
														<div class="dashboard-banner__bids">
															<div class="dashboard-banner__bid">
																<!-- Single Bid -->
																<div class="dashboard-banner__group">
																	<p class="dashboard-banner__group-small">Current Bid</p>
																	<h3 class="dashboard-banner__group-title">{{ $ActiveBids['current_bids'] }} ETH</h3>
																	<p class="dashboard-banner__group-small">{{ $ActiveBids['usd_rate'] }} <span>USD</span></p>
																</div>
																<!-- End Single Bid -->
																<div class="dashboard-banner__middle-border"></div>
																<!-- Single Bid -->
																<div class="dashboard-banner__group">
																	<p class="dashboard-banner__group-small">Remaing Time</p>
																	<h3 class="dashboard-banner__group-title" data-countdown="{{ $ActiveBids['count_down_from'] }}"></h3>
																	<p class="dashboard-banner__group-small nftmax-timing"><span>Hrs</span> <span>Min</span> <span>Sec</span></p>
																</div>
																<!-- End Single Bid -->
															</div>
														</div>
														
														<!-- Dashboard Banner Button -->
														<div class="dashboard-banner__button">
															<div class="dashboard-banner__single-btn">
																<a class="dashboard-banner__heart"><i class="fa-solid fa-heart"></i></a>
															</div>
															<div class="dashboard-banner__single-btn">
																<a class="dashboard-banner__btn"><a href="{{url('/active-bids')}}" class="nftmax-btn nftmax-btn__secondary radius">Place a Bid</a></a>
															</div>
															<div class="dashboard-banner__single-btn">
																<a class="dashboard-banner__btn"><a href="{{url('/market-place')}}" class="nftmax-btn trs-white">View Atwork</a></a>
															</div>
														</div>
														<!-- End Dashboard Banner Button -->
													</div>
												</div>
											</div>
										</div>
									</div>	
									<!-- End Dashboard Slider -->
									
									<div class="trending-action mg-top-40">
										<h2 class="trending-action__heading mg-btm-20">All Bids</h2>
										<div class="row nftmax-gap-sq30 trending-action__actives">
										@foreach($AllBids as $AllBids)
											<div class="col-xxl-3 col-lg-3 col-md-6 col-12">
												<!-- Treadning Single -->	
												<div class="trending-action__single">
													<!-- Trending Head -->
													<div class="trending-action__head">
														<div class="trending-action__button">
															<a class="trending-action__btn heart-icon"><i class="fa-solid fa-heart"></i></a>
															<a class="trending-action__btn"><i class="fa-solid fa-ellipsis-vertical"></i></a>
														</div>
														<img src="{{ asset($AllBids['0']) }}" alt="#">
													</div>
													<!-- Trending Body -->
													<div class="trending-action__body">
														<div class="trending-action__author-meta">
															<div class="trending-action__author-img"><img src="{{ asset($AllBids['1']) }}" alt="#"></div>
															<p class="trending-action__author-name">Owned by <a href="profile.html">{{ $AllBids['2'] }}</a></p>
														</div>
														<h2 class="trending-action__title"><a href="{{url('/active-bids')}}">{{ $AllBids['3'] }}</a></h2>
														<div class="dashboard-banner__bid dashboard-banner__bid-v2">
															<!-- Single Bid -->
															<div class="dashboard-banner__group dashboard-banner__group-v2">
																<p class="dashboard-banner__group-small">Current Bid</p>
																<h3 class="dashboard-banner__group-title">{{ $AllBids['4'] }} ETH</h3>
															</div>
															<!-- End Single Bid -->
															<div class="dashboard-banner__middle-border"></div>
															<!-- Single Bid -->
															<div class="dashboard-banner__group dashboard-banner__group-v2">
																<p class="dashboard-banner__group-small">Remaing Time</p>
																<h3 class="dashboard-banner__group-title" id="CountDown" data-countdown="{{ $AllBids['7'] }}"></h3>
															</div>
															<!-- End Single Bid -->
														</div>
													</div>
													<div class="dashboard-banner__button trending-action__bottom">
														<a href="{{url('/active-bids')}}" class="nftmax-btn nftmax-btn__secondary radius">Place a Bid</a>
														<a href="{{url('/market-place')}}" class="nftmax-btn trs-white">View Atwork</a>
													</div>
												</div>
												<!-- End Treadning Single -->
											</div>
											@endforeach
										</div>
										<div class="row">
											<div class="col-12">
												<div class="nftmax-view__all"><a href="#" class="nftmax-btn trs-white bl-color">View Atwork</a></div>
											</div>
										</div>
									</div>
									<!-- End Welcome CTA -->
									
									<div class="nftmax-table mg-top-40">
										<div class="nftmax-table__heading">
											<h3 class="nftmax-table__title mb-0">All NFTS Update <span class="nftmax-table__badge">{{count($AllNFTSUpdate)}}</span></h3>
											<ul  class="nav nav-tabs  nftmax-dropdown__list" id="nav-tab" role="tablist">
												<li class="nav-item dropdown ">
													<a class="nftmax-sidebar_btn nftmax-heading__tabs nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">All Categories <span class="nftmax-table__arrow--icon"><svg width="13" height="6" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.7" d="M12.4124 0.247421C12.3327 0.169022 12.2379 0.106794 12.1335 0.0643287C12.0291 0.0218632 11.917 0 11.8039 0C11.6908 0 11.5787 0.0218632 11.4743 0.0643287C11.3699 0.106794 11.2751 0.169022 11.1954 0.247421L7.27012 4.07837C7.19045 4.15677 7.09566 4.219 6.99122 4.26146C6.88678 4.30393 6.77476 4.32579 6.66162 4.32579C6.54848 4.32579 6.43646 4.30393 6.33202 4.26146C6.22758 4.219 6.13279 4.15677 6.05312 4.07837L2.12785 0.247421C2.04818 0.169022 1.95338 0.106794 1.84895 0.0643287C1.74451 0.0218632 1.63249 0 1.51935 0C1.40621 0 1.29419 0.0218632 1.18975 0.0643287C1.08531 0.106794 0.990517 0.169022 0.910844 0.247421C0.751218 0.404141 0.661621 0.616141 0.661621 0.837119C0.661621 1.0581 0.751218 1.2701 0.910844 1.42682L4.84468 5.26613C5.32677 5.73605 5.98027 6 6.66162 6C7.34297 6 7.99647 5.73605 8.47856 5.26613L12.4124 1.42682C12.572 1.2701 12.6616 1.0581 12.6616 0.837119C12.6616 0.616141 12.572 0.404141 12.4124 0.247421Z" fill="#374557" fill-opacity="0.6"></path></svg></span></a>
													<ul class="dropdown-menu nftmax-sidebar_dropdown">
														<a class="dropdown-item list-group-item" data-bs-toggle="tab" data-bs-target="#table_1" role="tab">Categories V1</a>
														<a class="dropdown-item list-group-item" data-bs-toggle="tab" data-bs-target="#table_2" role="tab">Categories V2</a>
														<a class="dropdown-item list-group-item"  data-bs-toggle="tab" data-bs-target="#table_3" role="tab">Categories V3</a>
													</ul>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade show active" id="table_1" role="tabpanel" aria-labelledby="table_1">
												<!-- NFTMax Table -->
												<table id="nftmax-table__main" class="nftmax-table__main nftmax-table__main-v1">
													<!-- NFTMax Table Head -->
													<thead class="nftmax-table__head">
														<tr>
															<th class="nftmax-table__column-1 nftmax-table__h1">All Products</th>
															<th class="nftmax-table__column-2 nftmax-table__h2">Value</th>
															<th class="nftmax-table__column-3 nftmax-table__h3">USD</th>
															<th class="nftmax-table__column-4 nftmax-table__h4">24H%</th>
															<th class="nftmax-table__column-5 nftmax-table__h5">Bids</th>
															<th class="nftmax-table__column-6 nftmax-table__h6">Time</th>
															<th class="nftmax-table__column-7 nftmax-table__h7">Status</th>
														</tr>
													</thead>
													<!-- NFTMax Table Body -->
													<tbody class="nftmax-table__body">
														@foreach($AllNFTSUpdate as $AllNFTSUpdate)
														<tr>
															<td class="nftmax-table__column-1 nftmax-table__data-1">
																<div class="nftmax-table__product">
																	<div class="nftmax-table__product-img">
																		<img src="{{ asset($AllNFTSUpdate['0']) }}" alt="#">
																	</div>
																	<div class="nftmax-table__product-content">
																		<h4 class="nftmax-table__product-title">{{ $AllNFTSUpdate['1'] }}</h4>
																		<p class="nftmax-table__product-desc">Owned by  <a href="#">{{ $AllNFTSUpdate['2'] }}</a></p>
																	</div>
																</div>
															</td>
															<td class="nftmax-table__column-2 nftmax-table__data-2">
																<div class="nftmax-table__amount nftmax-table__text-one">
																	<img src="assets/img/eth-icon.png" alt="#"><span class="nftmax-table__text">{{ $AllNFTSUpdate['3'] }} ETH</span>
																</div>
															</td>
															<td class="nftmax-table__column-3 nftmax-table__data-3">
																<div class="nftmax-table__amount nftmax-table__text-two">
																	<img src="assets/img/usd-icon.png" alt="#"><span class="nftmax-table__text">{{ $AllNFTSUpdate['4'] }} $</span>
																</div>
															</td>
															<td class="nftmax-table__column-4 nftmax-table__data-4">
																<p class="nftmax-table__text nftmax-table__up-down nftmax-rcolor">{{ $AllNFTSUpdate['5'] }}</p>
															</td>
															<td class="nftmax-table__column-5 nftmax-table__data-5">
																<p class="nftmax-table__text nftmax-table__bid-text">{{ $AllNFTSUpdate['6'] }}</p>
															</td>
															<td class="nftmax-table__column-6 nftmax-table__data-6">
																<p class="nftmax-table__text nftmax-table__time">{{ $AllNFTSUpdate['7'] }}</p>
															</td>
															@if($AllNFTSUpdate['8'] == 1)
															<td class="nftmax-table__column-7 nftmax-table__data-7">
																<div class="nftmax-table__status nftmax-sbcolor">Active</div>
															</td>
															@else
															<td class="nftmax-table__column-7 nftmax-table__data-7">
																<div class="nftmax-table__status nftmax-gbcolor">Completed</div>
															</td>
															@endif
														</tr>
													@endforeach
													</tbody>
													<!-- End NFTMax Table Body -->
												</table>
												<!-- End NFTMax Table -->
											</div>
											<div class="tab-pane fade" id="table_2" role="tabpanel" aria-labelledby="table_1">
												<!-- NFTMax Table -->
												<table id="nftmax-table__main" class="nftmax-table__main nftmax-table__main-v1">
													<!-- NFTMax Table Head -->
													<thead class="nftmax-table__head">
														<tr>
															<th class="nftmax-table__column-1 nftmax-table__h1">All Products</th>
															<th class="nftmax-table__column-2 nftmax-table__h2">Value</th>
															<th class="nftmax-table__column-3 nftmax-table__h3">USD</th>
															<th class="nftmax-table__column-4 nftmax-table__h4">24H%</th>
															<th class="nftmax-table__column-5 nftmax-table__h5">Bids</th>
															<th class="nftmax-table__column-6 nftmax-table__h6">Time</th>
															<th class="nftmax-table__column-7 nftmax-table__h7">Status</th>
														</tr>
													</thead>
													<!-- NFTMax Table Body -->
													<tbody class="nftmax-table__body">
                                                    @foreach($AllNFTSUpdateV2 as $user)
														<tr>
															<td class="nftmax-table__column-1 nftmax-table__data-1">
																<div class="nftmax-table__product">
																	<div class="nftmax-table__product-img">
																		<img src="{{asset($user['0'])}}" alt="#">
																	</div>
																	<div class="nftmax-table__product-content">
																		<h4 class="nftmax-table__product-title">{{ $user['1'] }}</h4>
																		<p class="nftmax-table__product-desc">Owned by  <a href="#">{{ $user['2'] }}</a></p>
																	</div>
																</div>
															</td>
															<td class="nftmax-table__column-2 nftmax-table__data-2">
																<div class="nftmax-table__amount nftmax-table__text-one">
																	<img src="assets/img/eth-icon.png" alt="#"><span class="nftmax-table__text">{{ $user['3'] }}</span>
																</div>
															</td>
															<td class="nftmax-table__column-3 nftmax-table__data-3">
																<div class="nftmax-table__amount nftmax-table__text-two">
																	<img src="assets/img/usd-icon.png" alt="#"><span class="nftmax-table__text">{{ $user['4'] }}$</span>
																</div>
															</td>
															<td class="nftmax-table__column-4 nftmax-table__data-4">
																<p class="nftmax-table__text nftmax-table__up-down nftmax-rcolor">{{ $user['5'] }}</p>
															</td>
															<td class="nftmax-table__column-5 nftmax-table__data-5">
																<p class="nftmax-table__text nftmax-table__bid-text">{{ $user['6'] }}</p>
															</td>
															<td class="nftmax-table__column-6 nftmax-table__data-6">
																<p class="nftmax-table__text nftmax-table__time">{{ $user['7'] }}</p>
															</td>
                                                            @if($user['8']==1)
                                                                <td class="nftmax-table__column-7 nftmax-table__data-7">
																<div class="nftmax-table__status nftmax-sbcolor">Active</div>
															    </td>
                                                            @else
                                                            <td class="nftmax-table__column-7 nftmax-table__data-7">
																<div class="nftmax-table__status nftmax-gbcolor">Completed</div>
															</td>
                                                            @endif
														</tr>
                                                        @endforeach
													</tbody>
													<!-- End NFTMax Table Body -->
												</table>
												<!-- End NFTMax Table -->
											</div>
											<div class="tab-pane fade" id="table_3" role="tabpanel" aria-labelledby="table_1">
												<!-- NFTMax Table -->
												<table id="nftmax-table__main" class="nftmax-table__main nftmax-table__main-v1">
													<!-- NFTMax Table Head -->
													<thead class="nftmax-table__head">
														<tr>
															<th class="nftmax-table__column-1 nftmax-table__h1">All Products</th>
															<th class="nftmax-table__column-2 nftmax-table__h2">Value</th>
															<th class="nftmax-table__column-3 nftmax-table__h3">USD</th>
															<th class="nftmax-table__column-4 nftmax-table__h4">24H%</th>
															<th class="nftmax-table__column-5 nftmax-table__h5">Bids</th>
															<th class="nftmax-table__column-6 nftmax-table__h6">Time</th>
															<th class="nftmax-table__column-7 nftmax-table__h7">Status</th>
														</tr>
													</thead>
													<!-- NFTMax Table Body -->
													<tbody class="nftmax-table__body">
                                                    @foreach($AllNFTSUpdateV3 as $user)
														<tr>
															<td class="nftmax-table__column-1 nftmax-table__data-1">
																<div class="nftmax-table__product">
																	<div class="nftmax-table__product-img">
																		<img src="{{asset($user['0'])}}" alt="#">
																	</div>
																	<div class="nftmax-table__product-content">
																		<h4 class="nftmax-table__product-title">{{ $user['1'] }}</h4>
																		<p class="nftmax-table__product-desc">Owned by  <a href="#">{{ $user['2'] }}</a></p>
																	</div>
																</div>
															</td>
															<td class="nftmax-table__column-2 nftmax-table__data-2">
																<div class="nftmax-table__amount nftmax-table__text-one">
																	<img src="assets/img/eth-icon.png" alt="#"><span class="nftmax-table__text">{{ $user['3'] }}</span>
																</div>
															</td>
															<td class="nftmax-table__column-3 nftmax-table__data-3">
																<div class="nftmax-table__amount nftmax-table__text-two">
																	<img src="assets/img/usd-icon.png" alt="#"><span class="nftmax-table__text">{{ $user['4'] }}$</span>
																</div>
															</td>
															<td class="nftmax-table__column-4 nftmax-table__data-4">
																<p class="nftmax-table__text nftmax-table__up-down nftmax-rcolor">{{ $user['5'] }}</p>
															</td>
															<td class="nftmax-table__column-5 nftmax-table__data-5">
																<p class="nftmax-table__text nftmax-table__bid-text">{{ $user['6'] }}</p>
															</td>
															<td class="nftmax-table__column-6 nftmax-table__data-6">
																<p class="nftmax-table__text nftmax-table__time">{{ $user['7'] }}</p>
															</td>
                                                            @if($user['8']==1)
                                                                <td class="nftmax-table__column-7 nftmax-table__data-7">
																<div class="nftmax-table__status nftmax-sbcolor">Active</div>
															    </td>
                                                            @else
                                                            <td class="nftmax-table__column-7 nftmax-table__data-7">
																<div class="nftmax-table__status nftmax-gbcolor">Completed</div>
															</td>
                                                            @endif
														</tr>
                                                        @endforeach
													</tbody>
													<!-- End NFTMax Table Body -->
												</table>
												<!-- End NFTMax Table -->
											</div>
										</div>
									</div>
								</div>
								<!-- End Dashboard Inner -->
							</div>
						</div>
@include('Layout.RightSidebar')
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