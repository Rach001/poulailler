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
											<div class="col-lg-6 col-12">
												<!-- NFTMax Balance Hover -->
												<div class="nftmax-balance__current nftmax-bg__cover mg-top-40" style="background-image:url('assets/img/current-balance__bg.png')">
													<div class="nftmax-balancetop">
														<div class="nftmax-balance__wallet-box">{{$wellateStatistic['No_of_wallate']}} <span>Wallets</span></div>
														<div class="nftmax-transaction">
															<h3 class="nftmax-transaction__title">{{$wellateStatistic['Total_transection']}}</h3>
															<p class="nftmax-transaction__text">Total Transactions</p>
														</div>
													</div>
													<div class="nftmax-balance__wallet-current">
														<p class="nftmax-balance__wallet-text">Current Balance</p>
														<h2 class="nftmax-balance__wallet-amount">${{$wellateStatistic['current_balance']}}</h2>
														<p class="nftmax-balance__wallet-add">+{{$wellateStatistic['growth']}} <span>({{$wellateStatistic['growth_percentage']}}%)</span></p>
													</div>
													<div class="nftmax-progress">
														<!-- Progress Single -->
														<div class="nftmax-progress__single">
															<div class="circle circle__one" data-value="0.9" data-size="65">
																<b class="number">{{$wellateStatistic['ETH_percentage']}}%</b>
															</div>
															<strong>{{$wellateStatistic['ETH']}} ETH</strong>
														</div>
														<!-- Progress Single -->
														<div class="nftmax-progress__single">
															<div class="circle circle__two" data-value="0.4" data-size="65">
																<b class="number">{{$wellateStatistic['BTC_percentage']}}%</b>
															</div>
															<strong>{{$wellateStatistic['BTC']}} BTC</strong>
														</div>
														<!-- Progress Single -->
														<div class="nftmax-progress__single">
															<div class="circle circle__three" data-value="0.8" data-size="65">
																<b class="number">{{$wellateStatistic['LTC_percentage']}}%</b>
															</div>
															<strong>{{$wellateStatistic['LTC']}} LTC</strong>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-12">
												<!-- NFTMax Balance Hover -->
												<div class="row">
													<div class="col-lg-6 col-12">
														<div class="nftmax-sellbox__single nftmax-sellbox__sell mg-top-40">
															<div class="nftmax-sellbox__heading">
																<h4 class="nftmax-sellbox__heading-title">Bits this Month</h4>
															</div>
															<div class="nftmax-amount__statics">
																<h4 class="nftmax-amount__statics__title">{{$BitsthisMonthData['ETH']}} ETH</h4>
																<p class="nftmax-amount__statics__text">(${{$BitsthisMonthData['usd']}})<span class="nftmax-amount__statics__debit">{{$BitsthisMonthData['growth']}} ({{$BitsthisMonthData['growth_percentage']}}%)</span></p>
															</div>
															<div class="nftmax-sidebar__cside-one">
																<canvas id="myChart_bids_month" height="250"></canvas>
															</div>
														</div>
													</div>
													<div class="col-lg-6 col-12">
														<div class="nftmax-sellbox__single nftmax-sellbox__earning mg-top-40">
															<div class="nftmax-sellbox__heading">
																<h4 class="nftmax-sellbox__heading-title">Sell Earing this Month</h4>
															</div>
															<div class="nftmax-amount__statics">
																<h4 class="nftmax-amount__statics__title">{{$SellEaringthisMonth['ETH']}} ETH</h4>
																<p class="nftmax-amount__statics__text">(${{$SellEaringthisMonth['usd']}})<span class="nftmax-amount__statics__credit">{{$SellEaringthisMonth['growth']}} ({{$SellEaringthisMonth['growth_percentage']}}%)</span></p>
															</div>
															<div class="nftmax-sidebar__cside-one">
																<canvas id="myChart_earning_month" height="250"></canvas>
															</div>
														</div>
														
													</div>
												</div>
												<!-- End NFTMax Balance Hover -->
											</div>
										</div>
										
										<div class="row">
											<div class="col-12">
												<!-- Charts One -->
												<div class="charts-main  mg-top-40">
													<div class="charts-main__heading">
														<h4 class="charts-main__title">Currency  Statistics</h4>
														
														<div class="nftmax-chart__dropdown">
															<ul  class="nav nav-tabs  nftmax-dropdown__list" id="nav-tab" role="tablist">
																<li class="nav-item dropdown">
																	<a class="nftmax-sidebar_btn nftmax-heading__tabs nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Last 15 days <span class="nftmax-table__arrow--icon"><svg width="13" height="6" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.7" d="M12.4124 0.247421C12.3327 0.169022 12.2379 0.106794 12.1335 0.0643287C12.0291 0.0218632 11.917 0 11.8039 0C11.6908 0 11.5787 0.0218632 11.4743 0.0643287C11.3699 0.106794 11.2751 0.169022 11.1954 0.247421L7.27012 4.07837C7.19045 4.15677 7.09566 4.219 6.99122 4.26146C6.88678 4.30393 6.77476 4.32579 6.66162 4.32579C6.54848 4.32579 6.43646 4.30393 6.33202 4.26146C6.22758 4.219 6.13279 4.15677 6.05312 4.07837L2.12785 0.247421C2.04818 0.169022 1.95338 0.106794 1.84895 0.0643287C1.74451 0.0218632 1.63249 0 1.51935 0C1.40621 0 1.29419 0.0218632 1.18975 0.0643287C1.08531 0.106794 0.990517 0.169022 0.910844 0.247421C0.751218 0.404141 0.661621 0.616141 0.661621 0.837119C0.661621 1.0581 0.751218 1.2701 0.910844 1.42682L4.84468 5.26613C5.32677 5.73605 5.98027 6 6.66162 6C7.34297 6 7.99647 5.73605 8.47856 5.26613L12.4124 1.42682C12.572 1.2701 12.6616 1.0581 12.6616 0.837119C12.6616 0.616141 12.572 0.404141 12.4124 0.247421Z" fill="#374557" fill-opacity="0.6"></path></svg></span></a>
																	<ul class="dropdown-menu nftmax-sidebar_dropdown">
																		<a class="dropdown-item list-group-item" data-bs-toggle="tab" data-bs-target="#table_1" role="tab">Daily</a>
																		<a class="dropdown-item list-group-item" data-bs-toggle="tab" data-bs-target="#table_2" role="tab">15 days</a>
																		<a class="dropdown-item list-group-item" data-bs-toggle="tab" data-bs-target="#table_3" role="tab">Monthly</a>
																	</ul>
																</li>
															</ul>
														</div>
													</div>
													<div class="tab-content" id="myTabContent">
														<div class="tab-pane fade show active" id="table_1" role="tabpanel" aria-labelledby="table_1">
														<canvas id="myChart_sell_analytics"></canvas>
														</div>
														<div class="tab-pane fade" id="table_2" role="tabpanel" aria-labelledby="table_1">
														<canvas id="myChart_sell_analytics_15days"></canvas>
														</div>
														<div class="tab-pane fade" id="table_3" role="tabpanel" aria-labelledby="table_1">
														<canvas id="myChart_sell_analytics_30days"></canvas>
														</div>
													</div>
												</div>
												<!-- End Charts One -->
											</div>
										</div>
										
										<div class="row nftmax-gap-30">
											<div class="col-lg-6 col-12 nftmax-sixth-one">
											<!-- Charts One -->
											<div class="charts-main charts-main__sellh mg-top-40">
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
														<ul  class="nav nav-tabs nftmax-dropdown__list" id="nav-tab" role="tablist">
															<li class="nav-item dropdown">
																<a class="nftmax-sidebar_btn nftmax-heading__tabs nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Last 7 days <span class="nftmax-table__arrow--icon"><svg width="13" height="6" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.7" d="M12.4124 0.247421C12.3327 0.169022 12.2379 0.106794 12.1335 0.0643287C12.0291 0.0218632 11.917 0 11.8039 0C11.6908 0 11.5787 0.0218632 11.4743 0.0643287C11.3699 0.106794 11.2751 0.169022 11.1954 0.247421L7.27012 4.07837C7.19045 4.15677 7.09566 4.219 6.99122 4.26146C6.88678 4.30393 6.77476 4.32579 6.66162 4.32579C6.54848 4.32579 6.43646 4.30393 6.33202 4.26146C6.22758 4.219 6.13279 4.15677 6.05312 4.07837L2.12785 0.247421C2.04818 0.169022 1.95338 0.106794 1.84895 0.0643287C1.74451 0.0218632 1.63249 0 1.51935 0C1.40621 0 1.29419 0.0218632 1.18975 0.0643287C1.08531 0.106794 0.990517 0.169022 0.910844 0.247421C0.751218 0.404141 0.661621 0.616141 0.661621 0.837119C0.661621 1.0581 0.751218 1.2701 0.910844 1.42682L4.84468 5.26613C5.32677 5.73605 5.98027 6 6.66162 6C7.34297 6 7.99647 5.73605 8.47856 5.26613L12.4124 1.42682C12.572 1.2701 12.6616 1.0581 12.6616 0.837119C12.6616 0.616141 12.572 0.404141 12.4124 0.247421Z" fill="#374557" fill-opacity="0.6"></path></svg></span></a>
																<ul class="dropdown-menu nftmax-sidebar_dropdown">
																	<a class="list-group-item" data-bs-toggle="list" data-bs-target="#chart__sell" role="tab">Last 7 Days </a>
																	<a class="list-group-item" data-bs-toggle="list" data-bs-target="#chart__sell_15days" role="tab">Last 15 Days</a>
																	<a class="list-group-item"  data-bs-toggle="list" data-bs-target="#chart__sell_30days" role="tab">Last 30 Days</a>
																</ul>
															</li>
														</ul>
													</div>
												</div>
												<div class="charts-main__one">
													<div class="tab-content" id="nav-tabContent">
														<div class="tab-pane fade show active" id="chart__sell" role="tabpanel" aria-labelledby="chart__sell">
															<canvas id="myChart_one"></canvas>
														</div>
														<div class="tab-pane fade" id="chart__sell_15days" role="tabpanel" aria-labelledby="chart__sell">
															<canvas id="myChart_one_15days"></canvas>
														</div>
														<div class="tab-pane fade" id="chart__sell_30days" role="tabpanel" aria-labelledby="chart__sell">
															<canvas id="myChart_one_30days"></canvas>
														</div>
													</div>
												</div>
											</div>
											<!-- End Charts One -->
										</div>
											<div class="col-lg-6 col-12 nftmax-sixth-two">
												<!-- NFTMax Balance Hover -->
												<div class="nftmax-newtrans  mg-top-40">
												
													<div class="nftmax-newtrans__box nftmax-newtrans__box__inner  charts-main__tops">
														<div class="nftmax-newtrans__heading">
															<h3 class="nftmax-newtrans__title">Top Sell Country </h3>
															<!-- Features Tab List -->
																<ul  class="nav nav-tabs" id="nav-tab" role="tablist">
																	<li class="nav-item dropdown">
																		<a class="nftmax-sidebar_btn nftmax-heading__tabs nav-link " data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">View All <span class="nftmax-table__arrow--icon"><svg width="13" height="6" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.7" d="M12.4124 0.247421C12.3327 0.169022 12.2379 0.106794 12.1335 0.0643287C12.0291 0.0218632 11.917 0 11.8039 0C11.6908 0 11.5787 0.0218632 11.4743 0.0643287C11.3699 0.106794 11.2751 0.169022 11.1954 0.247421L7.27012 4.07837C7.19045 4.15677 7.09566 4.219 6.99122 4.26146C6.88678 4.30393 6.77476 4.32579 6.66162 4.32579C6.54848 4.32579 6.43646 4.30393 6.33202 4.26146C6.22758 4.219 6.13279 4.15677 6.05312 4.07837L2.12785 0.247421C2.04818 0.169022 1.95338 0.106794 1.84895 0.0643287C1.74451 0.0218632 1.63249 0 1.51935 0C1.40621 0 1.29419 0.0218632 1.18975 0.0643287C1.08531 0.106794 0.990517 0.169022 0.910844 0.247421C0.751218 0.404141 0.661621 0.616141 0.661621 0.837119C0.661621 1.0581 0.751218 1.2701 0.910844 1.42682L4.84468 5.26613C5.32677 5.73605 5.98027 6 6.66162 6C7.34297 6 7.99647 5.73605 8.47856 5.26613L12.4124 1.42682C12.572 1.2701 12.6616 1.0581 12.6616 0.837119C12.6616 0.616141 12.572 0.404141 12.4124 0.247421Z" fill="#374557" fill-opacity="0.6"></path></svg></span></a>
																		<ul class="dropdown-menu nftmax-sidebar_dropdown">
																			<a class="list-group-item" data-bs-toggle="list" href="#country_1" role="tab">Daily</a>
																			<a class="list-group-item" data-bs-toggle="list" href="#country_2" role="tab">Weekly</a>
																			<a class="list-group-item"  data-bs-toggle="list" href="#country_3" role="tab">Monthly</a>
																		</ul>
																	</li>
																</ul>
														</div>
														<div class="tab-content" id="nav-tabContent">
															<div class="tab-pane fade show active" id="country_1" role="tabpanel">
																<!-- NFTMax Balance List -->
																<ul class="nftmax-newtrans__list nftmax-topsell__country ">
																	@foreach($TopSellCountry as $TopSellCountry)
																	<li class="nftmax-newtrans__single">
																		<div class="nftmax-newtrans__info">
																			<div class="nftmax-newtrans__icon"><img src="{{ asset($TopSellCountry['0']) }}" alt="#"></div>
																			<h4 class="nftmax-newtrans__added">{{ $TopSellCountry['1'] }}</h4>
																		</div>
																		<div class="nftmax-balance-amount nftmax-newtrans__amount">
																			<h4 class="nftmax-balance-amount">{{ $TopSellCountry['2'] }} ETH</h4>
																		</div>
																	</li>
																	@endforeach
																</ul>
																<div class="view-wallet__btn top-sell"><a href="#">See All</a></div>
															</div>
															
															<div class="tab-pane fade" id="country_2" role="tabpanel">
																<!-- NFTMax Balance List -->
																<ul class="nftmax-newtrans__list nftmax-topsell__country ">
																@foreach($TopSellCountryWeekly as $TopSellCountryWeekly)
																	<li class="nftmax-newtrans__single">
																		<div class="nftmax-newtrans__info">
																			<div class="nftmax-newtrans__icon"><img src="{{ asset($TopSellCountryWeekly['0']) }}" alt="#"></div>
																			<h4 class="nftmax-newtrans__added">{{ $TopSellCountryWeekly['1'] }}</h4>
																		</div>
																		<div class="nftmax-balance-amount nftmax-newtrans__amount">
																			<h4 class="nftmax-balance-amount">{{ $TopSellCountryWeekly['2'] }} ETH</h4>
																		</div>
																	</li>
																	@endforeach
																</ul>
																<div class="{{url('/sell')}}"><a href="#">View All Transaction</a></div>
															</div>
															
															<div class="tab-pane fade" id="country_3" role="tabpanel">
																<!-- NFTMax Balance List -->
																<ul class="nftmax-newtrans__list nftmax-topsell__country ">
																@foreach($TopSellCountryMonthly as $TopSellCountryMonthly)
																	<li class="nftmax-newtrans__single">
																		<div class="nftmax-newtrans__info">
																			<div class="nftmax-newtrans__icon"><img src="{{ asset($TopSellCountryMonthly['0']) }}" alt="#"></div>
																			<h4 class="nftmax-newtrans__added">{{ $TopSellCountryMonthly['1'] }}</h4>
																		</div>
																		<div class="nftmax-balance-amount nftmax-newtrans__amount">
																			<h4 class="nftmax-balance-amount">{{ $TopSellCountryMonthly['2'] }} ETH</h4>
																		</div>
																	</li>
																	@endforeach
																</ul>
																<div class="view-wallet__btn view-trnsc"><a href="#">View All Transaction</a></div>
															</div>
														</div>
													</div>
												</div>
												
											</div>
										</div>
										
										<div class="row">
											<div class="col-12">
												<div class="nftmax-table mg-top-40">
													<div class="nftmax-table__heading">
														<h3 class="nftmax-table__title mb-0">Products History</h3>
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
															<table id="nftmax-table__main" class="nftmax-table__main nftmax-table__product-history ">
																<!-- NFTMax Table Head -->
																<thead class="nftmax-table__head">
																	<tr>
																		<th class="nftmax-table__column-1 nftmax-table__h1">List</th>
																		<th class="nftmax-table__column-2 nftmax-table__h2">Publish date</th>
																		<th class="nftmax-table__column-3 nftmax-table__h3">Products Name</th>
																		<th class="nftmax-table__column-4 nftmax-table__h4">Type</th>
																		<th class="nftmax-table__column-5 nftmax-table__h5">Sell</th>
																		<th class="nftmax-table__column-6 nftmax-table__h6">Tendered</th>
																		<th class="nftmax-table__column-7 nftmax-table__h7">Earnings</th>
																	</tr>
																</thead>
																<!-- NFTMax Table Body -->
																<tbody class="nftmax-table__body">
																	<?php $i=0;?>
																	@foreach($productHistory as $productHistory)
																	<tr>
																		<td class="nftmax-table__column-1 nftmax-table__data-1">
																			<span class="nftmax-table__text"><b>{{$i++}}</b></span>
																		</td>
																		<td class="nftmax-table__column-2 nftmax-table__data-2">
																			<p class="nftmax-table__text nftmax-table__time">{{$productHistory['0']}}</p>
																		</td>
																		<td class="nftmax-table__column-3 nftmax-table__data-3">
																			<div class="nftmax-table__product">
																				<div class="nftmax-table__product-img">
																					<img src="{{asset($productHistory['1'])}}" alt="#">
																				</div>
																				<div class="nftmax-table__product-content">
																					<h4 class="nftmax-table__product-title">{{ $productHistory['2']}}</h4>
																					<p class="nftmax-table__product-desc">Owned by  <a href="#">{{$productHistory['3']}}</a></p>
																				</div>
																			</div>
																		</td>
																		<td class="nftmax-table__column-4 nftmax-table__data-4">
																		@if($productHistory['4'] == 1)	
																			<div class="nftmax-table__status nftmax-gbcolor">Publish</div>
																		@else
																		<div class="nftmax-table__status nftmax-gbcolor">Clode</div>
																		</td>
																		@endif
																		<td class="nftmax-table__column-5 nftmax-table__data-5">
																			<p class="nftmax-table__text nftmax-table__bid-text">{{$productHistory['5']}}</p>
																		</td>
																		<td class="nftmax-table__column-6 nftmax-table__data-6">
																			<p class="nftmax-table__text nftmax-table__bid-text">{{$productHistory['6']}}  ETH</p>
																		</td>
																		<td class="nftmax-table__column-7 nftmax-table__data-7">
																			<p class="nftmax-table__text nftmax-table__bid-text">{{ $productHistory['7']}} ETH</p>
																		</td>
																	</tr>
																	@endforeach
																</tbody>
																<!-- End NFTMax Table Body -->
															</table>
															<!-- End NFTMax Table -->
														</div>
														<div class="tab-pane fade" id="table_2" role="tabpanel" aria-labelledby="table_1">
															<!-- NFTMax Table -->
															<table id="nftmax-table__main" class="nftmax-table__main nftmax-table__product-history ">
																<!-- NFTMax Table Head -->
																<thead class="nftmax-table__head">
																	<tr>
																		<th class="nftmax-table__column-1 nftmax-table__h1">List</th>
																		<th class="nftmax-table__column-2 nftmax-table__h2">Publish date</th>
																		<th class="nftmax-table__column-3 nftmax-table__h3">Products Name</th>
																		<th class="nftmax-table__column-4 nftmax-table__h4">Type</th>
																		<th class="nftmax-table__column-5 nftmax-table__h5">Sell</th>
																		<th class="nftmax-table__column-6 nftmax-table__h6">Tendered</th>
																		<th class="nftmax-table__column-7 nftmax-table__h7">Earnings</th>
																	</tr>
																</thead>
																<!-- NFTMax Table Body -->
																<tbody class="nftmax-table__body">
																	<?php $i=0;?>
																	@foreach($productHistoryV2 as $productHistory)
																	<tr>
																		<td class="nftmax-table__column-1 nftmax-table__data-1">
																			<span class="nftmax-table__text"><b>{{$i++}}</b></span>
																		</td>
																		<td class="nftmax-table__column-2 nftmax-table__data-2">
																			<p class="nftmax-table__text nftmax-table__time">{{$productHistory['0']}}</p>
																		</td>
																		<td class="nftmax-table__column-3 nftmax-table__data-3">
																			<div class="nftmax-table__product">
																				<div class="nftmax-table__product-img">
																					<img src="{{asset($productHistory['1'])}}" alt="#">
																				</div>
																				<div class="nftmax-table__product-content">
																					<h4 class="nftmax-table__product-title">{{ $productHistory['2']}}</h4>
																					<p class="nftmax-table__product-desc">Owned by  <a href="#">{{$productHistory['3']}}</a></p>
																				</div>
																			</div>
																		</td>
																		<td class="nftmax-table__column-4 nftmax-table__data-4">
																		@if($productHistory['4'] == 1)	
																			<div class="nftmax-table__status nftmax-gbcolor">Publish</div>
																		@else
																		<div class="nftmax-table__status nftmax-gbcolor">Clode</div>
																		</td>
																		@endif
																		<td class="nftmax-table__column-5 nftmax-table__data-5">
																			<p class="nftmax-table__text nftmax-table__bid-text">{{$productHistory['5']}}</p>
																		</td>
																		<td class="nftmax-table__column-6 nftmax-table__data-6">
																			<p class="nftmax-table__text nftmax-table__bid-text">{{$productHistory['6']}}  ETH</p>
																		</td>
																		<td class="nftmax-table__column-7 nftmax-table__data-7">
																			<p class="nftmax-table__text nftmax-table__bid-text">{{ $productHistory['7']}} ETH</p>
																		</td>
																	</tr>
																	@endforeach
																</tbody>
																<!-- End NFTMax Table Body -->
															</table>
															<!-- End NFTMax Table -->
														</div>

														<div class="tab-pane fade" id="table_3" role="tabpanel" aria-labelledby="table_1">
															<!-- NFTMax Table -->
															<table id="nftmax-table__main" class="nftmax-table__main nftmax-table__product-history ">
																<!-- NFTMax Table Head -->
																<thead class="nftmax-table__head">
																	<tr>
																		<th class="nftmax-table__column-1 nftmax-table__h1">List</th>
																		<th class="nftmax-table__column-2 nftmax-table__h2">Publish date</th>
																		<th class="nftmax-table__column-3 nftmax-table__h3">Products Name</th>
																		<th class="nftmax-table__column-4 nftmax-table__h4">Type</th>
																		<th class="nftmax-table__column-5 nftmax-table__h5">Sell</th>
																		<th class="nftmax-table__column-6 nftmax-table__h6">Tendered</th>
																		<th class="nftmax-table__column-7 nftmax-table__h7">Earnings</th>
																	</tr>
																</thead>
																<!-- NFTMax Table Body -->
																<tbody class="nftmax-table__body">
																	<?php $i=0;?>
																	@foreach($productHistoryV3 as $productHistory)
																	<tr>
																		<td class="nftmax-table__column-1 nftmax-table__data-1">
																			<span class="nftmax-table__text"><b>{{$i++}}</b></span>
																		</td>
																		<td class="nftmax-table__column-2 nftmax-table__data-2">
																			<p class="nftmax-table__text nftmax-table__time">{{$productHistory['0']}}</p>
																		</td>
																		<td class="nftmax-table__column-3 nftmax-table__data-3">
																			<div class="nftmax-table__product">
																				<div class="nftmax-table__product-img">
																					<img src="{{asset($productHistory['1'])}}" alt="#">
																				</div>
																				<div class="nftmax-table__product-content">
																					<h4 class="nftmax-table__product-title">{{ $productHistory['2']}}</h4>
																					<p class="nftmax-table__product-desc">Owned by  <a href="#">{{$productHistory['3']}}</a></p>
																				</div>
																			</div>
																		</td>
																		<td class="nftmax-table__column-4 nftmax-table__data-4">
																		@if($productHistory['4'] == 1)	
																			<div class="nftmax-table__status nftmax-gbcolor">Publish</div>
																		@else
																		<div class="nftmax-table__status nftmax-gbcolor">Clode</div>
																		</td>
																		@endif
																		<td class="nftmax-table__column-5 nftmax-table__data-5">
																			<p class="nftmax-table__text nftmax-table__bid-text">{{$productHistory['5']}}</p>
																		</td>
																		<td class="nftmax-table__column-6 nftmax-table__data-6">
																			<p class="nftmax-table__text nftmax-table__bid-text">{{$productHistory['6']}}  ETH</p>
																		</td>
																		<td class="nftmax-table__column-7 nftmax-table__data-7">
																			<p class="nftmax-table__text nftmax-table__bid-text">{{ $productHistory['7']}} ETH</p>
																		</td>
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
@include('Layout.RightSidebar')
@include('Layout.Footer');
<script>
			jQuery(document).ready(function($) {
				$('.circle__one').circleProgress({
					fill: {
						color: '#F539F8'
					}
				})
				
				$('.circle__two').circleProgress({
					fill: {
					color: '#F2994A'
					}
				})
				$('.circle__three').circleProgress({
					fill: {
					color: '#EB5757'
					}
				})
			});
		</script>

<script>
			const ctx_bids = document.getElementById('myChart_bids_month').getContext('2d');
			var bitsMonth = @json($BitsThisMonth[0]);
			var bitsData = @json($BitsThisMonth[1]);
			const myChart_bids_month = new Chart(ctx_bids, {
				type: 'line',
				
				data: {
					labels: bitsMonth,
					datasets: [{
						label: 'Visitor',
						data: bitsData,
						backgroundColor: 'rgba(242, 153, 74, 0.2)',
						borderColor:'#F2994A',
						pointRadius: 0,
						pointBackgroundColor: '#fff',
						pointBorderColor: '#AE8FF7',
						borderWidth:4,
						fill:true,
						fillColor:'#fff',
						tension: 0.8,
					}]
				},
				
				 options: {
					 layout: {
						padding: {
							bottom: -20
						}
					},
					maintainAspectRatio: false,
					responsive: true,
					scales: {
						x:{
							grid:{
								display:false,
								drawBorder: false,
							},
							ticks:{
								display:false,
							}
						},
						y:{
							grid:{
								display:false,
								drawBorder: false,
							},
							ticks:{
								display:false,
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
			
			const ctx_earning = document.getElementById('myChart_earning_month').getContext('2d');
			var sellEarningMonth = @json($CurrencyStatistics[0]);
			var sellEarningData = @json($CurrencyStatistics[1]);
			const myChart_earning_month = new Chart(ctx_earning, {
				type: 'line',
				
				data: {
					labels: sellEarningMonth,
					datasets: [{
						label: 'Visitor',
						data: sellEarningData,
						backgroundColor: '#FAECFF',
						borderColor:'#DE3DF8',
						  pointRadius: 0,
						  pointBackgroundColor: '#fff',
						  pointBorderColor: '#AE8FF7',
						borderWidth:4,
						fill:true,
						fillColor:'#fff',
						tension: 0.8,
					}]
				},
				
				 options: {
					 layout: {
						padding: {
							bottom: -20
						}
					},
					maintainAspectRatio: false,
					responsive: true,
					scales: {
						x:{
							grid:{
								display:false,
								drawBorder: false,
							},
							ticks:{
								display:false,
							}
						},
						y:{
							grid:{
								display:false,
								drawBorder: false,
							},
							ticks:{
								display:false,
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
			
			const ctx_sell = document.getElementById('myChart_sell_analytics').getContext('2d');
			var month = @json($CurrencyStatistics[0]);
			var data = @json($CurrencyStatistics[1]);
			const myChart_sell_analytics = new Chart(ctx_sell, {
				type: 'line',
				
				data: {
					labels: month,
					datasets: [{
						label: 'Visitor',
						data: data,
						backgroundColor: 'rgba(245, 57, 248, 0.2)',
						borderColor:'#D03FF9',
						  pointRadius: 5,
						  pointBackgroundColor: '#B340ED',
						  pointBorderColor: '#B340ED',
						borderWidth:4,
						fill:true,
						fillColor:'#fff',
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
						text: 'Visitor: 2k'
					  }
					}
				}
			});

			const ctx_sell_15days = document.getElementById('myChart_sell_analytics_15days').getContext('2d');
			var month = @json($CurrencyStatistics_15days[0]);
			var data = @json($CurrencyStatistics_15days[1]);
			const myChart_sell_analytics_15days = new Chart(ctx_sell_15days, {
				type: 'line',
				
				data: {
					labels: month,
					datasets: [{
						label: 'Visitor',
						data: data,
						backgroundColor: 'rgba(245, 57, 248, 0.2)',
						borderColor:'#D03FF9',
						  pointRadius: 5,
						  pointBackgroundColor: '#B340ED',
						  pointBorderColor: '#B340ED',
						borderWidth:4,
						fill:true,
						fillColor:'#fff',
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
						text: 'Visitor: 2k'
					  }
					}
				}
			});

			const ctx_sell_30days = document.getElementById('myChart_sell_analytics_30days').getContext('2d');
			var month = @json($CurrencyStatistics_30days[0]);
			var data = @json($CurrencyStatistics_30days[1]);
			const myChart_sell_analytics_30days = new Chart(ctx_sell_30days, {
				type: 'line',
				
				data: {
					labels: month,
					datasets: [{
						label: 'Visitor',
						data: data,
						backgroundColor: 'rgba(245, 57, 248, 0.2)',
						borderColor:'#D03FF9',
						  pointRadius: 5,
						  pointBackgroundColor: '#B340ED',
						  pointBorderColor: '#B340ED',
						borderWidth:4,
						fill:true,
						fillColor:'#fff',
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
						text: 'Visitor: 2k'
					  }
					}
				}
			});
			
			
			
			const ctx = document.getElementById('myChart_one').getContext('2d');
			var day = @json($SellHistory[0]);
			var avgSell = @json($SellHistory[1]);
			var totalSell = @json($SellHistory[2]);
			const myChart_one = new Chart(ctx, {
				type: 'bar',
				
				data: {
					labels: day,
					datasets: [{
						label: 'AVG Sale',
						data: avgSell,
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
			const ctx_15days = document.getElementById('myChart_one_15days').getContext('2d');
			var day = @json($SellHistory_15days[0]);
			var avgSell = @json($SellHistory_15days[1]);
			var totalSell = @json($SellHistory_15days[2]);
			const myChart_one_15days = new Chart(ctx_15days, {
				type: 'bar',
				
				data: {
					labels: day,
					datasets: [{
						label: 'AVG Sale',
						data: avgSell,
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

			const ctx_30days = document.getElementById('myChart_one_30days').getContext('2d');
			var day = @json($SellHistory_30days[0]);
			var avgSell = @json($SellHistory_30days[1]);
			var totalSell = @json($SellHistory_30days[2]);
			const myChart_one_30days = new Chart(ctx_30days, {
				type: 'bar',
				
				data: {
					labels: day,
					datasets: [{
						label: 'AVG Sale',
						data: avgSell,
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
		
		</script>