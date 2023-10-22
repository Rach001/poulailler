@include('Layout.Header')

			<!-- NFTmax Dashboard -->
			<section class="nftmax-adashboard nftmax-show">
				<div class="container">
					<div class="row">	
						<div class="col-lg-9 col-12 nftmax-main__column">
							<div class="nftmax-body">
								<!-- Dashboard Inner -->
								<div class="nftmax-dsinner">
									<!-- All Notification Heading -->
									<div class="nftmax-inner__heading">
										<h2 class="nftmax-inner__page-title">All Notification</h2>
										<div class="all-notificaiton__tabs">
											<!-- Features Tab List -->
											<div class="all-notificaiton__inner nav nav-tabs" id="nav-tab" role="tablist">
												<a class="list-group-item active" data-bs-toggle="list" href="#notify-one" role="tab">Today <span class="all-notificaiton__count">{{count($TodayNotification)}}</span></a>
												<a class="list-group-item" data-bs-toggle="list" href="#notify-two" role="tab">7 days <span class="all-notificaiton__count">{{count($LastSevenDaysNotification)}}</span></a>
												<a class="list-group-item" data-bs-toggle="list" href="#notify-three" role="tab">All <span class="all-notificaiton__count">{{count($AllNotification)}}</span></a>
											</div>
										</div>
									</div>
									<!-- End All Notification Heading -->
								
									<div class="tab-content" id="nav-tabContent">
										<!--  Features Single Tab -->
										<div class="tab-pane fade show active" id="notify-one" role="tabpanel">
											<!-- NFTMax Alarm Hover -->
											<div class="nftmax-balance nftmax-alarm__hover all-notificaiton">
												<!-- NFTMax Balance List -->
												<ul class="nftmax-balance_list">
                                                    @foreach($TodayNotification as $TodayNotification)
													<li>
														<div class="nftmax-balance-info">
															<div class="nftmax-balance__img nftmax-alarm__default"><img src="{{ asset($TodayNotification['0']) }}" alt="#"></div>
															<div class="nftmax-alarm__content">
																<h4 class="nftmax-balance-name">{{ $TodayNotification['1'] }}<strong class="nftmax-balance__second">{{ $TodayNotification['2'] }}</strong></h4>
																<p class="nftmax-alarm__text">{{ $TodayNotification['3'] }}</p>
															</div>
														</div>
													</li>
                                                    @endforeach
												</ul>
												<!-- NFTMax Balance Button -->
												<div class="nftmax-balance__button"><a href="#" class="nftmax-balance__sell-all">See more Notification</a></div>
											</div>
											<!-- End NFTMax Balance Hover -->
										</div>
										<!--  Features Single Tab -->
										<div class="tab-pane fade" id="notify-two" role="tabpanel">
											<!-- NFTMax Alarm Hover -->
											<div class="nftmax-balance nftmax-alarm__hover all-notificaiton">
												<!-- NFTMax Balance List -->
												<ul class="nftmax-balance_list">
												@foreach($LastSevenDaysNotification as $LastSevenDaysNotification)
													<li>
														<div class="nftmax-balance-info">
															<div class="nftmax-balance__img nftmax-alarm__default"><img src="{{ asset($LastSevenDaysNotification['0']) }}" alt="#"></div>
															<div class="nftmax-alarm__content">
																<h4 class="nftmax-balance-name">{{ $LastSevenDaysNotification['1'] }}<strong class="nftmax-balance__second">{{ $LastSevenDaysNotification['2'] }}</strong></h4>
																<p class="nftmax-alarm__text">{{ $LastSevenDaysNotification['3'] }}</p>
															</div>
														</div>
													</li>
                                                    @endforeach
												</ul>
												<!-- NFTMax Balance Button -->
												<div class="nftmax-balance__button"><a href="#" class="nftmax-balance__sell-all">See more Notification</a></div>
											</div>
											<!-- End NFTMax Balance Hover -->
										</div>
										<div class="tab-pane fade" id="notify-three" role="tabpanel">
											<!-- NFTMax Alarm Hover -->
											<div class="nftmax-balance nftmax-alarm__hover all-notificaiton">
												<!-- NFTMax Balance List -->
												<ul class="nftmax-balance_list">
												@foreach($AllNotification as $AllNotification)
													<li>
														<div class="nftmax-balance-info">
															<div class="nftmax-balance__img nftmax-alarm__default"><img src="{{ asset($AllNotification['0']) }}" alt="#"></div>
															<div class="nftmax-alarm__content">
																<h4 class="nftmax-balance-name">{{ $AllNotification['1'] }}<strong class="nftmax-balance__second">{{ $AllNotification['2'] }}</strong></h4>
																<p class="nftmax-alarm__text">{{ $AllNotification['3'] }}</p>
															</div>
														</div>
													</li>
                                                    @endforeach
												</ul>
												<!-- NFTMax Balance Button -->
												<div class="nftmax-balance__button"><a href="#" class="nftmax-balance__sell-all">See more Notification</a></div>
											</div>
											<!-- End NFTMax Balance Hover -->
										</div>
									</div>
								</div>
								<!-- End Dashboard Inner -->
							</div>
						</div>
						
@include('Layout.RightSidebar')
@include('Layout.Footer')