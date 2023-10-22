@include('Layout.Header')
			<!-- NFTmax Dashboard -->
			<section class="nftmax-adashboard nftmax-show">
				<div class="container">
					<div class="row">	
						<div class="col-lg-9 col-12 nftmax-main__column">
							<div class="nftmax-body">
								<!-- Dashboard Inner -->
								<div class="nftmax-dsinner">
									<!-- Dashboard Slider -->
									<div class="nftmax-wallet__dashboard">
										
										<div class="row nftmax-gap-30">
											<div class="col-lg-3 col-md-6 col-12">
												<div class="nftmax-history mg-top-40">
													<div class="nftmax-history__main">
														<div class="nftmax-history__content">
															<div class="nftmax-history__icon nftmax-history__icon-one"><img src="assets/img/history-icon-1.png" alt="#"></div>
															<div class="nftmax-history__text">
																<h4 class="nftmax-history__number"><span class="number">{{$HistoryData['Total_sell']}}</span></h4>
																<p class="nftmax-history__text">Total Sells</p>
																<p class="nftmax-history__amount">+324.75 (11.5%)</p>
															</div>
														</div>
														<div class="nftmax-history__canvas">
															<div class="charts-main__one">
																<canvas id="myChart_history_one"></canvas>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-md-6 col-12">
												<div class="nftmax-history mg-top-40">
													<div class="nftmax-history__main">
														<div class="nftmax-history__content">
															<div class="nftmax-history__icon nftmax-history__icon-two"><img src="assets/img/history-icon-2.png" alt="#"></div>
															<div class="nftmax-history__text">
																<h4 class="nftmax-history__number"><span class="number">{{$HistoryData['Active_Customer']}}</span>k+</h4>
																<p class="nftmax-history__text">Active Customer</p>
																<p class="nftmax-history__amount">+324.75 (11.5%)</p>
															</div>
														</div>
														<div class="nftmax-history__canvas">
															<div class="charts-main__one">
																<canvas id="myChart_history_two"></canvas>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-md-6 col-12">
												<div class="nftmax-history mg-top-40">
													<div class="nftmax-history__main">
														<div class="nftmax-history__content">
															<div class="nftmax-history__icon nftmax-history__icon-three"><img src="assets/img/history-icon-3.png" alt="#"></div>
															<div class="nftmax-history__text">
																<h4 class="nftmax-history__number"><span class="number">{{$HistoryData['Total_product']}}</span></h4>
																<p class="nftmax-history__text">Total Prodcuts</p>
																<p class="nftmax-history__amount">+324.75 (11.5%)</p>
															</div>
														</div>
														<div class="nftmax-history__canvas">
															<div class="charts-main__one">
																<canvas id="myChart_history_three"></canvas>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-md-6 col-12">
												<div class="nftmax-history mg-top-40">
													<div class="nftmax-history__main">
														<div class="nftmax-history__content">
															<div class="nftmax-history__icon nftmax-history__icon-four"><img src="assets/img/history-icon-4.png" alt="#"></div>
															<div class="nftmax-history__text">
																<h4 class="nftmax-history__number"><span class="number">{{$HistoryData['CloseOffer']}}</span></h4>
																<p class="nftmax-history__text">Close Offer</p>
																<p class="nftmax-history__amount nftmax-history__amount-debit">-324.75 (11.5%)</p>
															</div>
														</div>
														<div class="nftmax-history__canvas">
															<div class="charts-main__one">
																<canvas id="myChart_history_four"></canvas>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-12">
												<!-- Charts One -->
												<div class="charts-main  mg-top-30">
													<div class="charts-main__heading">
														<h4 class="charts-main__title">Market History</h4>
														<div class="charts-main__middle">
															<div class="charts-main__middle-single">
																<p class="charts-main__middle-text">Vistors</p>
															</div>
															<div class="charts-main__middle-single">
																<p class="charts-main__middle-text nftmax-total__sales">Sells</p>
															</div>
														</div>
														<div class="nftmax-chart__dropdown">
															<ul class="nav nav-tabs nftmax-dropdown__list" id="nav-tab" role="tablist">
																<li class="nav-item dropdown">
																	<a class="nftmax-sidebar_btn nftmax-heading__tabs nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Last 15 days <i class="fa-solid fa-angle-down"></i></a>
																	<ul class="dropdown-menu nftmax-sidebar_dropdown">
																		<a class="list-group-item" data-bs-toggle="list" data-bs-target="#m_history" role="tab">Last 15 Days</a>
																		<a class="list-group-item" data-bs-toggle="list" data-bs-target="#m_history_7days" role="tab">Last 7 Days</a>
																		<a class="list-group-item"  data-bs-toggle="list" data-bs-target="#m_history_30days" role="tab">Last 30 Days</a>
																	</ul>
																</li>
															</ul>
														</div>
													</div>
													<div class="charts-main__three">
														<div class="tab-content" id="nav-tabContent">
															<div class="tab-pane fade show active" id="m_history" role="tabpanel" aria-labelledby="nav-home-tab">
																<canvas id="myChart_market_history"></canvas>
															</div>
															<div class="tab-pane fade" id="m_history_7days" role="tabpanel" aria-labelledby="nav-home-tab">
																<canvas id="myChart_market_history_7days"></canvas>
															</div>
															<div class="tab-pane fade" id="m_history_30days" role="tabpanel" aria-labelledby="nav-home-tab">
																<canvas id="myChart_market_history_30days"></canvas>
															</div>
														</div>
													</div>
												</div>
												<!-- End Charts One -->
											</div>
										</div>
										
										<div class="row nftmax-gap-30">
											<div class="col-lg-6 col-md-6 col-12 nftmax-sixth-one">
												<!-- Charts One -->
												<div class="charts-main charts-home-one mg-top-40">
													<div class="charts-main__heading">
														<h4 class="charts-main__title">Sell History</h4>
														<div class="charts-main__middle">
															<div class="charts-main__middle-single">
																<p class="charts-main__middle-text">Avg: Sell Price</p>
															</div>
															<div class="charts-main__middle-single">
																<p class="charts-main__middle-text nftmax-total__sales">Total Sell</p>
															</div>
														</div>
														
														<div class="nftmax-chart__dropdown">
															<span class="nftmax-current">Current Week</span>
														</div>
													</div>
													<div class="charts-main__one">
														<div class="tab-content" id="nav-tabContent">
															<div class="tab-pane fade show active" id="chart__sell" role="tabpanel" aria-labelledby="chart__sell">
																<canvas id="myChart_one"></canvas>
															</div>
															<div class="tab-pane fade" id="chart__sell" role="tabpanel" aria-labelledby="chart__sell">
																<canvas id="myChart_one"></canvas>
															</div>
														</div>
													</div>
												</div>
												<!-- End Charts One -->
											</div>
											<div class="col-lg-6 col-md-6 col-12 nftmax-sixth-two">
												<!-- Charts Two -->
												<div class="charts-main charts-home-one mg-top-40">
													<div class="charts-main__heading">
														<h4 class="charts-main__title">Market Visitor</h4>
														<div class="nftmax-chart__dropdown">
															<ul  class="nav nav-tabs nftmax-dropdown__list" id="nav-tab" role="tablist">
																<li class="nav-item dropdown">
																	<a class="nftmax-sidebar_btn nftmax-heading__tabs nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Last 30 days <svg width="13" height="6" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.7" d="M12.4124 0.247421C12.3327 0.169022 12.2379 0.106794 12.1335 0.0643287C12.0291 0.0218632 11.917 0 11.8039 0C11.6908 0 11.5787 0.0218632 11.4743 0.0643287C11.3699 0.106794 11.2751 0.169022 11.1954 0.247421L7.27012 4.07837C7.19045 4.15677 7.09566 4.219 6.99122 4.26146C6.88678 4.30393 6.77476 4.32579 6.66162 4.32579C6.54848 4.32579 6.43646 4.30393 6.33202 4.26146C6.22758 4.219 6.13279 4.15677 6.05312 4.07837L2.12785 0.247421C2.04818 0.169022 1.95338 0.106794 1.84895 0.0643287C1.74451 0.0218632 1.63249 0 1.51935 0C1.40621 0 1.29419 0.0218632 1.18975 0.0643287C1.08531 0.106794 0.990517 0.169022 0.910844 0.247421C0.751218 0.404141 0.661621 0.616141 0.661621 0.837119C0.661621 1.0581 0.751218 1.2701 0.910844 1.42682L4.84468 5.26613C5.32677 5.73605 5.98027 6 6.66162 6C7.34297 6 7.99647 5.73605 8.47856 5.26613L12.4124 1.42682C12.572 1.2701 12.6616 1.0581 12.6616 0.837119C12.6616 0.616141 12.572 0.404141 12.4124 0.247421Z" fill="#374557" fill-opacity="0.6"></path></svg></a>
																	<ul class="dropdown-menu nftmax-sidebar_dropdown">
																		<a class="list-group-item" data-bs-toggle="list" data-bs-target="#chart__visitor" role="tab">Last 15 Days</a>
																		<a class="list-group-item" data-bs-toggle="list" data-bs-target="#chart__visitor_7days" role="tab">Last 7 Days</a>
																		<a class="list-group-item"  data-bs-toggle="list" data-bs-target="#chart__visitor_30days" role="tab">Last Month</a>
																	</ul>
																</li>
															</ul>
														</div>
													</div>
													<div class="charts-main__one">
														<div class="tab-content" id="nav-tabContent">
															<div class="tab-pane fade show active" id="chart__visitor" role="tabpanel" aria-labelledby="chart__visitor">
																<canvas id="myChart_two"></canvas>
															</div>
															<div class="tab-pane fade" id="chart__visitor_7days" role="tabpanel" aria-labelledby="chart__visitor">
																<canvas id="myChart_two_7days"></canvas>
															</div>
															<div class="tab-pane fade" id="chart__visitor_30days" role="tabpanel" aria-labelledby="chart__visitor">
																<canvas id="myChart_two_30days"></canvas>
															</div>
														</div>
													</div>
												</div>
												<!-- End Charts Two -->
											</div>
										</div>
										
										<div class="row">
											<div class="col-12">
												<div class="nftmax-table mg-top-40">
													<div class="nftmax-table__heading">
														<h3 class="nftmax-table__title mb-0">All NFTS Update <span class="nftmax-table__badge">435</span></h3>
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
																@foreach($AllNFTSUpdate as $user)
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
										</div>
									</div>	
									<!-- End Dashboard Slider -->
									
								</div>
								<!-- End Dashboard Inner -->
							</div>
						</div>

						
<!-- Right Sidebar -->			
 @include('Layout.RightSidebar')						

<!-- Footer -->
@include('Layout.Footer')

		<script>
		
			const ctx_history_one = document.getElementById('myChart_history_one').getContext('2d');
			var date = @json($Total_sell[0]);
			var visitors = @json($Total_sell[1]);
			const myChart_history_one = new Chart(ctx_history_one, {
				type: 'line',
				data: {
					labels: date,
					datasets: [{
						label: 'Visitor',
						data: visitors,
						borderColor:'#5356FB',
						tension: 0.5,
						borderWidth:4,
						pointRadius: 5,
						pointBackgroundColor: '#5356FB',
						pointBorderColor: '#d5dff54f',
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
							ticks:{
								display:false
							}
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
			
			const ctx_history_two = document.getElementById('myChart_history_two').getContext('2d');
			var date      = @json($ActiveCustomer[0]);
			var ActiveNow = @json($ActiveCustomer[1]);
			const myChart_history_two = new Chart(ctx_history_two, {
				type: 'line',
				data: {
					labels: date,
					datasets: [{
						label: 'Visitor',
						data: ActiveNow,
						borderColor:'#F539F8',
						tension: 0.5,
						borderWidth:4,
						pointRadius: 5,
						pointBackgroundColor: '#F539F8',
						pointBorderColor: '#d5dff54f',
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
							ticks:{
								display:false
							}
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
			
			const ctx_history_three = document.getElementById('myChart_history_three').getContext('2d');
			var date          = @json($Total_Prodcuts[0]);
			var Total_product = @json($Total_Prodcuts[1]);
			const myChart_history_three = new Chart(ctx_history_three, {
				type: 'line',
				data: {
					labels: date,
					datasets: [{
						label: 'Visitor',
						data: Total_product,
						borderColor:'#27AE60',
						tension: 0.5,
						borderWidth:4,
						pointRadius: 5,
						pointBackgroundColor: '#27AE60',
						pointBorderColor: '#d5dff54f',
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
							ticks:{
								display:false
							}
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
			
			const ctx_history_four = document.getElementById('myChart_history_four').getContext('2d');
			var date          = @json($Close_Offer[0]);
			var Close_Offer = @json($Close_Offer[1]);
			const myChart_history_four = new Chart(ctx_history_four, {
				type: 'line',
				data: {
					labels: date,
					datasets: [{
						label: 'Visitor',
						data: Close_Offer,
						borderColor:'#EB5757',
						tension: 0.5,
						borderWidth:4,
						pointRadius: 5,
						pointBackgroundColor: '#EB5757',
						pointBorderColor: '#d5dff54f',
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
							ticks:{
								display:false
							}
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
			
			
			const ctx_market = document.getElementById('myChart_market_history').getContext('2d');
			var day      = @json($MarketHistory[0]);
			var visitors = @json($MarketHistory[1]);
			var selles   = @json($MarketHistory[2]);

			const myChart_market_history = new Chart(ctx_market, {
				type: 'line',
				
				data: {
					labels: day,
					datasets: [{
						label: 'Visitors',
						data:visitors,
						backgroundColor: 'transparent',
						borderColor:'#F539F8',
						borderWidth:4,
						fill:true,
						fillColor:'#fff',
						tension: 0.4,
					},{
						label: 'Sells',
						data: selles,
						backgroundColor: 'transparent',
						borderColor:'#5356FB',
						borderWidth:4,
						fill:true,
						tension: 0.4,
						fillColor:'#fff',
					}]
				},
				
				 options: {
					scales: {
						x:{
							grid:{
								drawBorder: false,
							}
							
						},
						y:{
							grid:{
								display:false,
								drawBorder: false,
							}
						},
					},
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

			const ctx_market_7days = document.getElementById('myChart_market_history_7days').getContext('2d');
			var day      = @json($MarketHistory_7days[0]);
			var visitors = @json($MarketHistory_7days[1]);
			var selles   = @json($MarketHistory_7days[2]);

			const myChart_market_history_7days = new Chart(ctx_market_7days, {
				type: 'line',
				
				data: {
					labels: day,
					datasets: [{
						label: 'Visitors',
						data:visitors,
						backgroundColor: 'transparent',
						borderColor:'#F539F8',
						borderWidth:4,
						fill:true,
						fillColor:'#fff',
						tension: 0.4,
					},{
						label: 'Sells',
						data: selles,
						backgroundColor: 'transparent',
						borderColor:'#5356FB',
						borderWidth:4,
						fill:true,
						tension: 0.4,
						fillColor:'#fff',
					}]
				},
				
				 options: {
					scales: {
						x:{
							grid:{
								drawBorder: false,
							}
							
						},
						y:{
							grid:{
								display:false,
								drawBorder: false,
							}
						},
					},
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

			const ctx_market_30days = document.getElementById('myChart_market_history_30days').getContext('2d');
			var day      = @json($MarketHistory_30days[0]);
			var visitors = @json($MarketHistory_30days[1]);
			var selles   = @json($MarketHistory_30days[2]);

			const myChart_market_history_30days = new Chart(ctx_market_30days, {
				type: 'line',
				
				data: {
					labels: day,
					datasets: [{
						label: 'Visitors',
						data:visitors,
						backgroundColor: 'transparent',
						borderColor:'#F539F8',
						borderWidth:4,
						fill:true,
						fillColor:'#fff',
						tension: 0.4,
					},{
						label: 'Sells',
						data: selles,
						backgroundColor: 'transparent',
						borderColor:'#5356FB',
						borderWidth:4,
						fill:true,
						tension: 0.4,
						fillColor:'#fff',
					}]
				},
				
				 options: {
					scales: {
						x:{
							grid:{
								drawBorder: false,
							}
							
						},
						y:{
							grid:{
								display:false,
								drawBorder: false,
							}
						},
					},
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
			
			
			const ctx = document.getElementById('myChart_one').getContext('2d');
			var day       = @json($SellHistory[0]);
            var avgSell   = @json($SellHistory[1]);
            var totalSell = @json($SellHistory[2]);
			const myChart_one = new Chart(ctx, {
				type: 'bar',
				
				data: {
					labels: day,
					datasets: [{
						label: 'AVG Sale',
						data:avgSell,
						backgroundColor: [
							'#5356FB',
							'#5356FB',
							'#5356FB',
							'#5356FB',
							'#5356FB',
							'#5356FB',
							'#5356FB',
						],
						
						fill: true,
						tension:0.4,
						borderWidth: 0,
						borderSkipped:false,
						borderRadius:3,
						barPercentage:0.4,
						categoryPercentage:0.4,
					},{
						label: 'Total Sell',
						data: totalSell,
						backgroundColor: [
							'#F239F5',
							'#F239F5',
							'#F239F5',
							'#F239F5',
							'#F239F5',
							'#F239F5',
							'#F239F5',
						],
						borderWidth: 0,
						borderSkipped:false,
						borderRadius:3,
						categoryPercentage:0.4,
						barPercentage: 0.4
					}]
				},
				
				 options: {
					maintainAspectRatio: false,
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
								drawBorder: false,
							},
						},
					},
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
			
			const ctx_two = document.getElementById('myChart_two').getContext('2d');
			var month = @json($MarketVisitor[0]);
            var visitorData = @json($MarketVisitor[1]);
			const myChart_two = new Chart(ctx_two, {
				type: 'line',
				
				data: {
					labels: month,
					datasets: [{
						label: 'Visitor',
						data: visitorData,
						backgroundColor: '#FAECFF',
						borderColor:'#DE3DF8',
						pointRadius: 5,
						pointBackgroundColor: '#fff',
						pointBorderColor: '#AE8FF7',
						tension: 0.6,
						borderWidth:4,
						fill:true,
						fillColor:'#fff',
					}]
				},
				
				 options: {
					maintainAspectRatio: false,
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
			const ctx_two_7days = document.getElementById('myChart_two_7days').getContext('2d');
			var month = @json($MarketVisitor_7days[0]);
            var visitorData = @json($MarketVisitor_7days[1]);
			const myChart_two_7days = new Chart(ctx_two_7days, {
				type: 'line',
				
				data: {
					labels: month,
					datasets: [{
						label: 'Visitor',
						data: visitorData,
						backgroundColor: '#FAECFF',
						borderColor:'#DE3DF8',
						pointRadius: 5,
						pointBackgroundColor: '#fff',
						pointBorderColor: '#AE8FF7',
						tension: 0.6,
						borderWidth:4,
						fill:true,
						fillColor:'#fff',
					}]
				},
				
				 options: {
					maintainAspectRatio: false,
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
			
			const ctx_two_30days = document.getElementById('myChart_two_30days').getContext('2d');
			var month = @json($MarketVisitor_30days[0]);
            var visitorData = @json($MarketVisitor_30days[1]);
			const myChart_two_30days = new Chart(ctx_two_30days, {
				type: 'line',
				
				data: {
					labels: month,
					datasets: [{
						label: 'Visitor',
						data: visitorData,
						backgroundColor: '#FAECFF',
						borderColor:'#DE3DF8',
						pointRadius: 5,
						pointBackgroundColor: '#fff',
						pointBorderColor: '#AE8FF7',
						tension: 0.6,
						borderWidth:4,
						fill:true,
						fillColor:'#fff',
					}]
				},
				
				 options: {
					maintainAspectRatio: false,
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