@include('Layout.Header')
				
			<!-- NFTmax Dashboard -->
			<section class="nftmax-adashboard nftmax-show">
				<div class="container">
					<div class="row">	
						<div class="col-xxl-9 col-12 nftmax-main__column">
							<div class="nftmax-body">
								<!-- Dashboard Inner -->
								<div class="nftmax-dsinner">
									<!-- Dashboard Slider -->
									<div class="dashboard-banner nftmax-bg-cover mg-top-40" style="background-image:url('assets/img/banner-bg.png')">
										<div class="row">
											<div class="col-12">
												<div class="dashboard-banner__main">
													<div class="dashboard-banner__column dashboard-banner__column--one">
														<!-- Dashboard Content -->
														<div class="dashboard-banner__content">
															<h2 class="dashboard-banner__title nftmax-font-regular nftmax-lspacing">{{ $CurrentBid['name'] }}</h2>
															<p class="dashboard-banner__text nftmax-lspacing">ID : {{ $CurrentBid['id'] }}</p>
														</div>	
														
														<div class="nftmax-header__author nftmax-header__author-two ">
															<div class="nftmax-header__author-img"><img src="{{ asset($CurrentBid['image']) }}" alt="#"></div>
															<div class="nftmax-header__author-content ">
																<h4 class="nftmax-header__author-title nftmax-header__author-title--two nftmax-lspacing">{{ $CurrentBid['user'] }}</h4>
																<p class="nftmax-header__author-text nftmax-header__author-text--two"><a href="#" class="nftmax-font-regular nftmax-lspacing">{{ $CurrentBid['user_name'] }}</a></p>
															</div>
														</div>
														
														<div class="dashboard-banner__bids">
															<div class="dashboard-banner__bid">
																<!-- Single Bid -->
																<div class="dashboard-banner__group">
																<p class="dashboard-banner__group-small">Total d'achat</p>
																	<h3 class="dashboard-banner__group-title">{{ $CurrentBid['bids'] }} DT</h3>																	
																</div>
																<!-- End Single Bid -->
																<div class="dashboard-banner__middle-border"></div>
																<!-- Single Bid -->
																<div class="dashboard-banner__group">
																	<p class="dashboard-banner__group-small">Dernière action</p>
																	<h3 class="dashboard-banner__group-title" data-countdown="{{ $CurrentBid['count_down_from'] }}"></h3>
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
															<div class="dashboard-banner__single-btn dashboard-banner__main-btn">
																<a href="{{url('/active-bids')}}" class="nftmax-btn nftmax-btn__secondary radius">Acheter Plus</a>
															</div>
															<div class="dashboard-banner__single-btn">
															<a href="{{url('/market-place')}}" class="nftmax-btn trs-white">Afficher l'Historique</a>
															</div>
														</div>
														<!-- End Dashboard Banner Button -->
													</div>
													<div class="dashboard-banner__column dashboard-banner__column--two">
                                                        <div class="dashboard-banner__slider">
                                                        @foreach($sliderBanner as $sliderBanner)
															<div class="dashboard-banner__single-slider">
																<img src="{{ asset($sliderBanner) }}" alt="#">
															</div>
                                                        @endforeach   
                                                        </div> 
													</div>
												</div>
											</div>
										</div>
									</div>	
									<!-- End Dashboard Slider -->
									
									<!-- Welcome CTA -->
									<div class="welcome-cta mg-top-40">
										<div class="welcome-cta__heading">
											<h2 class="welcome-cta__title">Creé Nouvelle profile de fournisseur</h2>
											<p class="welcome-cta__text nftmax-lspacing">ajouter un fournisseur pour votre poulailler</p>
										</div>
										<div class="welcome-cta__button">
											<a href="{{url('/upload-product')}}" class="nftmax-btn nftmax-btn__bordered bg radius">Ajouter Fournisseur</a>
											<a href="{{url('/market-place')}}" class="nftmax-btn trs-white bl-color">Afficher la liste des fornisseur</a>
										</div>
									</div>
									<!-- End Welcome CTA -->
									
									<!-- Trending Action -->
									<div class="trending-action mg-top-40">
										<h2 class="trending-action__heading">Tendance des produit</h2>
										<div class="row">
											<div class="col-12">
												<div class="trending-action__slider">
													<!-- Treadning Single -->
													@foreach($TrendingAction as $TrendingAction)
													<div class="trending-action__single">
														<!-- Trending Head -->
														<div class="trending-action__head">
															
															<img src="{{asset($TrendingAction['0'])}}" alt="#">
														</div>
														<!-- Trending Body -->
														<div class="trending-action__body">
															<div class="trending-action__author-meta">
																<div class="trending-action__author-img"><img src="{{asset($TrendingAction['1'])}}" alt="#"></div>
																<p class="trending-action__author-name">Propriété de <a href="profile.html">{{ $TrendingAction['2'] }}</a></p>
															</div>
															<h2 class="trending-action__title"><a href="active-bids.html">{{ $TrendingAction['3'] }}</a></h2>
															<div class="dashboard-banner__bid dashboard-banner__bid-v2">
																<!-- Single Bid -->
																<div class="dashboard-banner__group dashboard-banner__group-v2">
																	<p class="dashboard-banner__group-small">Total Achat</p>
																	<h3 class="dashboard-banner__group-title">{{ $TrendingAction['4'] }} DT</h3>
																</div>
																
															</div>
														</div>
														<div class="dashboard-banner__button trending-action__bottom">
															<a href="{{url('/active-bids')}}" class="nftmax-btn nftmax-btn__secondary radius">Acheter</a>
															<a href="{{url('/market-place')}}" class="nftmax-btn trs-white">afficher détails</a>
														</div>
													</div>
													@endforeach
													<!-- End Treadning Single -->
													<!-- End Treadning Single -->
												</div>
											</div>
										</div>
									</div>
									<!-- End Trending Action -->
									
									<div class="row nftmax-gap-30">
										<div class="col-lg-6 col-md-6 col-12 nftmax-sixth-one">
											<!-- Charts One -->
											<div class="charts-main charts-home-one mg-top-40">
												<div class="charts-main__heading">
													<h4 class="charts-main__title">Historique de vente</h4>
													<div class="charts-main__middle">
														<div class="charts-main__middle-single">
															<p class="charts-main__middle-text">Moy: Prix de vente</p>
														</div>
														<div class="charts-main__middle-single">
															<p class="charts-main__middle-text nftmax-total__sales">Total vente</p>
														</div>
													</div>
													
													<div class="nftmax-chart__dropdown">
														<span class="nftmax-current">Semaine actuelle</span>
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
													<h4 class="charts-main__title">Taux d'achat</h4>
													<div class="nftmax-chart__dropdown">
														<ul  class="nav nav-tabs nftmax-dropdown__list" id="nav-tab" role="tablist">
															<li class="nav-item dropdown">
																<a class="nftmax-sidebar_btn nftmax-heading__tabs nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Last 30 days <svg width="13" height="6" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.7" d="M12.4124 0.247421C12.3327 0.169022 12.2379 0.106794 12.1335 0.0643287C12.0291 0.0218632 11.917 0 11.8039 0C11.6908 0 11.5787 0.0218632 11.4743 0.0643287C11.3699 0.106794 11.2751 0.169022 11.1954 0.247421L7.27012 4.07837C7.19045 4.15677 7.09566 4.219 6.99122 4.26146C6.88678 4.30393 6.77476 4.32579 6.66162 4.32579C6.54848 4.32579 6.43646 4.30393 6.33202 4.26146C6.22758 4.219 6.13279 4.15677 6.05312 4.07837L2.12785 0.247421C2.04818 0.169022 1.95338 0.106794 1.84895 0.0643287C1.74451 0.0218632 1.63249 0 1.51935 0C1.40621 0 1.29419 0.0218632 1.18975 0.0643287C1.08531 0.106794 0.990517 0.169022 0.910844 0.247421C0.751218 0.404141 0.661621 0.616141 0.661621 0.837119C0.661621 1.0581 0.751218 1.2701 0.910844 1.42682L4.84468 5.26613C5.32677 5.73605 5.98027 6 6.66162 6C7.34297 6 7.99647 5.73605 8.47856 5.26613L12.4124 1.42682C12.572 1.2701 12.6616 1.0581 12.6616 0.837119C12.6616 0.616141 12.572 0.404141 12.4124 0.247421Z" fill="#374557" fill-opacity="0.6"></path></svg></a>
																<ul class="dropdown-menu nftmax-sidebar_dropdown">
																	<a class="list-group-item" data-bs-toggle="list" data-bs-target="#chart__visitor" role="tab">Last 15 Days</a>
																	<a class="list-group-item" data-bs-toggle="list" data-bs-target="#chart__visitor_weekly" role="tab">Last 7 Days</a>
																	<a class="list-group-item"  data-bs-toggle="list" data-bs-target="#chart__visitor_monthly" role="tab">Last Month</a>
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
														<div class="tab-pane fade" id="chart__visitor_monthly" role="tabpanel" aria-labelledby="chart__visitor">
															<canvas id="myChart_two_monthly"></canvas>
														</div>
														<div class="tab-pane fade" id="chart__visitor_weekly" role="tabpanel" aria-labelledby="chart__visitor">
															<canvas id="myChart_two_weekly"></canvas>
														</div>
													</div>
												</div>
											</div>
											<!-- End Charts Two -->
										</div>
									</div>
									
									<div class="row nftmax-gap-30">
										<div class="col-lg-6 col-12 nftmax-sixth-one">
											<div class="nftmax-table mg-top-40">
												<h3 class="seller-list__heading">Top Seller</h3>
												<div class="seller-list__slider">
													<!-- Seller Single List -->
													@foreach($TopSeller as $TopSeller)
                                                    <div class="seller-list__single-slider">
														<div class="seller-list__single">
															<!-- Seller Head -->
															<div class="seller-list__head">
																<div class="verfify-sign"><img src="{{ $TopSeller['0'] }}" alt="#"></div>
																<img src="{{asset($TopSeller['1'])}}" alt="#">
															</div>
															<!-- Seller Body -->
															<div class="seller-list__body">
																<h4 class="sell-list__title"><a href="#">{{ $TopSeller['2'] }}</a></h4>
																<p class="sell-list__author"><a href="#">{{ $TopSeller['3'] }}</a></p>
																<div class="sell-list__item nftmax-scolor"><img src="{{ $TopSeller['4'] }}" alt="#">{{ $TopSeller['5'] }} Items</div>
															</div>
														</div>
													</div>
                                                    @endforeach
												</div>
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
			
			const ctx_two = document.getElementById('myChart_two').getContext('2d');
            var day = @json($MarketVisitor[0]);
            var visitor = @json($MarketVisitor[1]);
			const myChart_two = new Chart(ctx_two, {
				type: 'line',
				
				data: {
					labels: day,
					datasets: [{
						label: 'Visitor',
						data:visitor,
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


			const ctx_two_monthly = document.getElementById('myChart_two_monthly').getContext('2d');
            var day = @json($MarketVisitorMonthly[0]);
            var visitor = @json($MarketVisitorMonthly[1]);
			const myChart_two_monthly = new Chart(ctx_two_monthly, {
				type: 'line',
				
				data: {
					labels: day,
					datasets: [{
						label: 'Visitor',
						data:visitor,
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
			const ctx_two_weekly = document.getElementById('myChart_two_weekly').getContext('2d');
            var day = @json($MarketVisitorWeekly[0]);
            var visitor = @json($MarketVisitorWeekly[1]);
			const myChart_two_weekly = new Chart(ctx_two_weekly, {
				type: 'line',
				
				data: {
					labels: day,
					datasets: [{
						label: 'Visitor',
						data:visitor,
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
		
	</body>
</html>