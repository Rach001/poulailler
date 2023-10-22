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
										<div class="row nftmax-gap-40">
											<div class="col-lg-6 col-6 col-12 nftmax-wallet__one">
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
											<div class="col-lg-6 col-6 col-12 nftmax-wallet__two">
												<!-- NFTMax Balance Hover -->
												<div class="nftmax-balance__all mg-top-30">
													<h3 class="nftmax-balance__all-title">My Wallet</h3>
													<!-- NFTMax Balance List -->
													<ul class="nftmax-balance_list">
														@foreach($MyWellat as $MyWellat)
														<li class="nftmax-balance__all-single">
															<div class="nftmax-balance-info">
																<div class="nftmax-balance__img"><img src="{{asset($MyWellat['0'])}}" alt="#"></div>
																<h4 class="nftmax-balance-name">{{ $MyWellat['1'] }}</h4>
															</div>
															<div class="nftmax-balance-desc">
																<div class="nftmax-balance-desc__main">
																	<h4 class="nftmax-balance-amount"><b>$</b>{{ $MyWellat['2'] }}</h4>
																	<p class="nftmax-balance__sub">New Add <span>+{{ $MyWellat['3'] }}</span></p>
																</div>
																<div class="nftmax-dots"><img src="assets/img/dots.png" alt="#"></div>
															</div>
														</li>
														@endforeach
													</ul>
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
														<div class="charts-main__middle">
															<div class="charts-main__middle-single">
																<p class="charts-main__middle-text">LTC</p>
															</div>
															<div class="charts-main__middle-single">
																<p class="charts-main__middle-text nftmax-total__sales">ETH</p>
															</div>
															<div class="charts-main__middle-single">
																<p class="charts-main__middle-text nftmax-last__sales">BTC</p>
															</div>
														</div>
														
														<div class="nftmax-chart__dropdown">
															<ul  class="nav nav-tabs nftmax-dropdown__list" id="nav-tab" role="tablist">
																<li class="nav-item dropdown">
																	<a class="nftmax-sidebar_btn nftmax-heading__tabs nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Last 15 days <span><svg width="13" height="6" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.7" d="M12.4124 0.247421C12.3327 0.169022 12.2379 0.106794 12.1335 0.0643287C12.0291 0.0218632 11.917 0 11.8039 0C11.6908 0 11.5787 0.0218632 11.4743 0.0643287C11.3699 0.106794 11.2751 0.169022 11.1954 0.247421L7.27012 4.07837C7.19045 4.15677 7.09566 4.219 6.99122 4.26146C6.88678 4.30393 6.77476 4.32579 6.66162 4.32579C6.54848 4.32579 6.43646 4.30393 6.33202 4.26146C6.22758 4.219 6.13279 4.15677 6.05312 4.07837L2.12785 0.247421C2.04818 0.169022 1.95338 0.106794 1.84895 0.0643287C1.74451 0.0218632 1.63249 0 1.51935 0C1.40621 0 1.29419 0.0218632 1.18975 0.0643287C1.08531 0.106794 0.990517 0.169022 0.910844 0.247421C0.751218 0.404141 0.661621 0.616141 0.661621 0.837119C0.661621 1.0581 0.751218 1.2701 0.910844 1.42682L4.84468 5.26613C5.32677 5.73605 5.98027 6 6.66162 6C7.34297 6 7.99647 5.73605 8.47856 5.26613L12.4124 1.42682C12.572 1.2701 12.6616 1.0581 12.6616 0.837119C12.6616 0.616141 12.572 0.404141 12.4124 0.247421Z" fill="#374557" fill-opacity="0.6"></path></svg></span></a>
																	<ul class="dropdown-menu nftmax-sidebar_dropdown">
																		<a class="list-group-item" data-bs-toggle="list" data-bs-target="#s_history" role="tab">Last 15 Daily</a>
																		<a class="list-group-item" data-bs-toggle="list" data-bs-target="#s_history_weekly" role="tab">Weekly</a>
																		<a class="list-group-item"  data-bs-toggle="list" data-bs-target="#s_history_monthly" role="tab">Monthly</a>
																	</ul>
																</li>
															</ul>
														</div>
													</div>
													<div class="charts-main__three">
														<div class="tab-content" id="nav-tabContent">
															<div class="tab-pane fade show active" id="s_history" role="tabpanel" aria-labelledby="nav-home-tab">
																<canvas id="myChart_three"></canvas>
															</div>
															<div class="tab-pane fade" id="s_history_monthly" role="tabpanel" aria-labelledby="nav-home-tab">
																<canvas id="myChart_three_monthly"></canvas>
															</div>
															<div class="tab-pane fade" id="s_history_weekly" role="tabpanel" aria-labelledby="nav-home-tab">
																<canvas id="myChart_three_weekly"></canvas>
															</div>
														</div>
													</div>
												</div>
												<!-- End Charts One -->
											</div>
										</div>
										
										<div class="row nftmax-gap-40">
											<div class="col-lg-6 col-12">
												<!-- NFTMax Balance Hover -->
												<div class="nftmax-newtrans mg-top-40">
												
													<div class="nftmax-newtrans__box">
														<div class="nftmax-newtrans__heading">
															<h3 class="nftmax-newtrans__title">Recent Transaction</h3>
															<!-- Features Tab List -->
															<div class="nftmax-newtrans__menu list-group" id="list-tab" role="tablist">
																<a class="list-group-item active" data-bs-toggle="list" href="#all-trn" role="tab">ALL</a>
																<a class="list-group-item" data-bs-toggle="list" href="#send-trn" role="tab">SEND</a>
																<a class="list-group-item" data-bs-toggle="list" href="#recent-trn" role="tab">RECENT</a>
															</div>
														</div>
														<div class="tab-content" id="nav-tabContent">
															<div class="tab-pane fade show active" id="all-trn" role="tabpanel">
																<!-- NFTMax Balance List -->
																
																<ul class="nftmax-newtrans__list">
																@foreach($RecentTransaction as $RecentTransaction)
																	<li class="nftmax-newtrans__single">
																		<div class="nftmax-newtrans__info">
																			<div class="nftmax-newtrans__icon"><img src="{{asset($RecentTransaction['0'])}}" alt="#"></div>
																			<h4 class="nftmax-newtrans__added">{{ $RecentTransaction['1'] }}<span>{{ $RecentTransaction['2'] }}</span> </h4>
																		</div>
																		<div class="nftmax-balance-amount nftmax-newtrans__amount">
																			<h4 class="nftmax-balance-amount"><b>$</b>{{ $RecentTransaction['3'] }}</h4>
																			<p class="nftmax-balance__sub"><span class="nftmax-newtrans__credit">+{{ $RecentTransaction['4'] }}</span></p>
																		</div>
																	</li>
																@endforeach
																</ul>
															</div>
															
															<div class="tab-pane fade" id="send-trn" role="tabpanel">
																<!-- NFTMax Balance List -->
																<ul class="nftmax-newtrans__list">
																@foreach($RecentTransactionSend as $RecentTransactionSend)
																	<li class="nftmax-newtrans__single">
																		<div class="nftmax-newtrans__info">
																			<div class="nftmax-newtrans__icon"><img src="{{asset($RecentTransactionSend['0'])}}" alt="#"></div>
																			<h4 class="nftmax-newtrans__added">{{ $RecentTransactionSend['1'] }}<span>{{ $RecentTransactionSend['2'] }}</span> </h4>
																		</div>
																		<div class="nftmax-balance-amount nftmax-newtrans__amount">
																			<h4 class="nftmax-balance-amount"><b>$</b>{{ $RecentTransactionSend['3'] }}</h4>
																			<p class="nftmax-balance__sub"><span class="nftmax-newtrans__credit">+{{ $RecentTransactionSend['4'] }}</span></p>
																		</div>
																	</li>
																@endforeach
																</ul>
															</div>
															
															<div class="tab-pane fade" id="recent-trn" role="tabpanel">
																<!-- NFTMax Balance List -->
																<ul class="nftmax-newtrans__list">
																@foreach($RecentTransactionRecent as $RecentTransactionRecent)
																	<li class="nftmax-newtrans__single">
																		<div class="nftmax-newtrans__info">
																			<div class="nftmax-newtrans__icon"><img src="{{asset($RecentTransactionRecent['0'])}}" alt="#"></div>
																			<h4 class="nftmax-newtrans__added">{{ $RecentTransactionRecent['1'] }}<span>{{ $RecentTransactionRecent['2'] }}</span> </h4>
																		</div>
																		<div class="nftmax-balance-amount nftmax-newtrans__amount">
																			<h4 class="nftmax-balance-amount"><b>$</b>{{ $RecentTransactionRecent['3'] }}</h4>
																			<p class="nftmax-balance__sub"><span class="nftmax-newtrans__credit">+{{ $RecentTransactionRecent['4'] }}</span></p>
																		</div>
																	</li>
																@endforeach
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-12">
												<!-- Charts Two -->
												<div class="charts-main charts-main__invest mg-top-40">
													<div class="charts-main__heading">
														<h4 class="charts-main__title">Investment</h4>
														<div class="nftmax-chart__dropdown">
															<ul  class="nav nav-tabs nftmax-dropdown__list" id="nav-tab" role="tablist">
																<li class="nav-item dropdown">
																	<a class="nftmax-sidebar_btn nftmax-heading__tabs nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Last 30 days <span><svg width="13" height="6" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.7" d="M12.4124 0.247421C12.3327 0.169022 12.2379 0.106794 12.1335 0.0643287C12.0291 0.0218632 11.917 0 11.8039 0C11.6908 0 11.5787 0.0218632 11.4743 0.0643287C11.3699 0.106794 11.2751 0.169022 11.1954 0.247421L7.27012 4.07837C7.19045 4.15677 7.09566 4.219 6.99122 4.26146C6.88678 4.30393 6.77476 4.32579 6.66162 4.32579C6.54848 4.32579 6.43646 4.30393 6.33202 4.26146C6.22758 4.219 6.13279 4.15677 6.05312 4.07837L2.12785 0.247421C2.04818 0.169022 1.95338 0.106794 1.84895 0.0643287C1.74451 0.0218632 1.63249 0 1.51935 0C1.40621 0 1.29419 0.0218632 1.18975 0.0643287C1.08531 0.106794 0.990517 0.169022 0.910844 0.247421C0.751218 0.404141 0.661621 0.616141 0.661621 0.837119C0.661621 1.0581 0.751218 1.2701 0.910844 1.42682L4.84468 5.26613C5.32677 5.73605 5.98027 6 6.66162 6C7.34297 6 7.99647 5.73605 8.47856 5.26613L12.4124 1.42682C12.572 1.2701 12.6616 1.0581 12.6616 0.837119C12.6616 0.616141 12.572 0.404141 12.4124 0.247421Z" fill="#374557" fill-opacity="0.6"></path></svg></span></a>
																	<ul class="dropdown-menu nftmax-sidebar_dropdown">
																		<a class="list-group-item" data-bs-toggle="list" data-bs-target="#chart__investment" role="tab">Last 7 Days</a>
																		<a class="list-group-item" data-bs-toggle="list" data-bs-target="#chart__investment15_days" role="tab">Last 15 Days</a>
																		<a class="list-group-item"  data-bs-toggle="list" data-bs-target="#chart__investment" role="tab">Last 30 Days</a>
																	</ul>
																</li>
															</ul>
														</div>
													</div>
													
													<div class="charts-main__one">
														<div class="tab-content" id="nav-tabContent">
															<div class="tab-pane fade show active" id="chart__investment" role="tabpanel" aria-labelledby="chart__investment">
																<canvas id="myChart_investment"></canvas>
																<div class="nftmax-charts__line">
																	<span>|</span><span>|</span><span>|</span><span>|</span><span>|</span><span>|</span><span>|</span><span>|</span><span>|</span><span>|</span><span>|</span><span >|</span><span>|</span><span>|</span><span>|</span><span>|</span><div></div>
																</div>
															</div>
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
@include('Layout.Footer')

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
			const ctx = document.getElementById('myChart_three').getContext('2d');
			var date = @json($CurrencyStatistics[0]);
			var ETH = @json($CurrencyStatistics[1]);
			var LTC = @json($CurrencyStatistics[2]);
			var BTC = @json($CurrencyStatistics[3]);
			const myChart_three = new Chart(ctx, {
				type: 'line',
				
				data: {
					labels: date,
					datasets: [{
						label: '',
						data: ETH,
						backgroundColor: 'transparent',
						borderColor:'#F539F8',
						borderWidth:4,
						fill:true,
						fillColor:'#fff',
						tension: 0.5,
					},{
						label: '',
						data: LTC,
						backgroundColor: 'transparent',
						borderColor:'#5356FB',
						borderWidth:4,
						fill:true,
						fillColor:'#fff',
						tension: 0.5,
					},{
						label: '',
						data:BTC,
						backgroundColor: 'transparent',
						borderColor:'#F2994A',
						borderWidth:4,
						fill:true,
						fillColor:'#fff',
						tension: 0.5,
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
								drawBorder: false,
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
						text: 'Sell History'
					  }
					}
				}
			});

			const ctx_montly = document.getElementById('myChart_three_monthly').getContext('2d');
			var date = @json($CurrencyStatistics_monthly[0]);
			var ETH = @json($CurrencyStatistics_monthly[1]);
			var LTC = @json($CurrencyStatistics_monthly[2]);
			var BTC = @json($CurrencyStatistics_monthly[3]);
			const myChart_three_monthly = new Chart(ctx_montly, {
				type: 'line',
				
				data: {
					labels: date,
					datasets: [{
						label: '',
						data: ETH,
						backgroundColor: 'transparent',
						borderColor:'#F539F8',
						borderWidth:4,
						fill:true,
						fillColor:'#fff',
						tension: 0.5,
					},{
						label: '',
						data: LTC,
						backgroundColor: 'transparent',
						borderColor:'#5356FB',
						borderWidth:4,
						fill:true,
						fillColor:'#fff',
						tension: 0.5,
					},{
						label: '',
						data:BTC,
						backgroundColor: 'transparent',
						borderColor:'#F2994A',
						borderWidth:4,
						fill:true,
						fillColor:'#fff',
						tension: 0.5,
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
								drawBorder: false,
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
						text: 'Sell History'
					  }
					}
				}
			});
			const ctx_weekly = document.getElementById('myChart_three_weekly').getContext('2d');
			var date = @json($CurrencyStatistics_weekly[0]);
			var ETH = @json($CurrencyStatistics_weekly[1]);
			var LTC = @json($CurrencyStatistics_weekly[2]);
			var BTC = @json($CurrencyStatistics_weekly[3]);
			const myChart_three_weekly = new Chart(ctx_weekly, {
				type: 'line',
				
				data: {
					labels: date,
					datasets: [{
						label: '',
						data: ETH,
						backgroundColor: 'transparent',
						borderColor:'#F539F8',
						borderWidth:4,
						fill:true,
						fillColor:'#fff',
						tension: 0.5,
					},{
						label: '',
						data: LTC,
						backgroundColor: 'transparent',
						borderColor:'#5356FB',
						borderWidth:4,
						fill:true,
						fillColor:'#fff',
						tension: 0.5,
					},{
						label: '',
						data:BTC,
						backgroundColor: 'transparent',
						borderColor:'#F2994A',
						borderWidth:4,
						fill:true,
						fillColor:'#fff',
						tension: 0.5,
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
								drawBorder: false,
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
						text: 'Sell History'
					  }
					}
				}
			});
			
			const ctx_two = document.getElementById('myChart_investment').getContext('2d');
			var investmantData   = @json($Investment[1]);
			var investmentMongth = @json($Investment[0]);
			const myChart_investment = new Chart(ctx_two, {
				type: 'line',
				
				data: {
					labels: investmentMongth,
					datasets: [{
						label: 'Visitor',
						data: investmantData,
						backgroundColor: '#FAECFF',
						borderColor:'#DE3DF8',
						pointRadius: 5,
						pointBackgroundColor: '#DE3DF8',
						pointBorderColor: '#fff',
						borderWidth:4,
						fill:true,
						tension: 0.9,
						fillColor:'#fff',
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

			const ctx_two_15days = document.getElementById('myChart_investment_15days').getContext('2d');
			var investmantData   = @json($Investment15Days[1]);
			var investmentMongth = @json($Investment15Days[0]);
			const myChart_investment_15days = new Chart(ctx_two_15days, {
				type: 'line',
				
				data: {
					labels: investmentMongth,
					datasets: [{
						label: 'Visitor',
						data: investmantData,
						backgroundColor: '#FAECFF',
						borderColor:'#DE3DF8',
						pointRadius: 5,
						pointBackgroundColor: '#DE3DF8',
						pointBorderColor: '#fff',
						borderWidth:4,
						fill:true,
						tension: 0.9,
						fillColor:'#fff',
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
			
		
</script>