@include('Layout.Header')
					<!-- NFTmax Dashboard -->
                    <section class="nftmax-adashboard nftmax-show">
				<div class="container">
					<div class="row">	
						<div class="col-lg-9 col-12 nftmax-main__column">
							<div class="nftmax-body">
								<!-- Dashboard Inner -->
								<div class="nftmax-dsinner">
									<div class="nftmax-inner__heading mg-btm-20">
										<h2 class="nftmax-inner__page-title mb-0">All Saved</h2>
									</div>
									<div class="row nftmax-gap-sq30">
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
														<h2 class="trending-action__title"><a href="active-bids.html">{{ $AllBids['3'] }}</a></h2>
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
																<h3 class="dashboard-banner__group-title" id="CountDown" data-countdown="2023/09/01"></h3>
															</div>
															<!-- End Single Bid -->
														</div>
													</div>
													<div class="dashboard-banner__button trending-action__bottom">
														<a href="active-bids.html" class="nftmax-btn nftmax-btn__secondary radius">Place a Bid</a>
														<a href="marketplace.html" class="nftmax-btn trs-white">View Atwork</a>
													</div>
												</div>
												<!-- End Treadning Single -->
											</div>
											@endforeach
									</div>
									
									<!-- Welcome CTA -->
									<div class="welcome-cta mg-top-40">
										<div class="welcome-cta__heading">
											<h2 class="welcome-cta__title">Create your own NFT and extraordinary get lot of Sell..</h2>
											<p class="welcome-cta__text">Buy and sell NFTs from the world’s top artists</p>
										</div>
										<div class="welcome-cta__button">
											<a href="{{url('/product-upload')}}" class="nftmax-btn nftmax-btn__bordered bg radius">Upload Products</a>
											<a href="#" class="nftmax-btn trs-white bl-color">View Atwork</a>
										</div>
									</div>
									<!-- End Welcome CTA -->
									
								</div>
								<!-- End Dashboard Inner -->
							</div>
						</div>
@include('Layout.RightSidebar')
@include('Layout.Footer')
