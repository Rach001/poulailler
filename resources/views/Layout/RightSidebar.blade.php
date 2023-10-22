
<div class="col-xxl-3 col-12 nftmax-main__sidebar">
							<div class="nftmax-sidebar mg-top-40">
								<div class="row">
									<div class="col-xxl-12 col-xl-6 col-12 nftmax-sidebar__widget">
										<!-- NFTMax Single Sidebar -->
										<div class="nftmax-sidebar__single">
											<!-- Sidebar Heading -->
											<div class="nftmax-sidebar__heading">
												<h4 class="nftmax-sidebar__title">Statistics</h4>
												<ul  class="nav nav-tabs nftmax-dropdown__list" id="nav-tab" role="tablist">
													<li class="nav-item dropdown">
														<a class="nftmax-sidebar_btn nftmax-heading__tabs nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Today <span class="nftmax-sidebar__arrow--icon"><svg width="13" height="6" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.7" d="M12.4124 0.247421C12.3327 0.169022 12.2379 0.106794 12.1335 0.0643287C12.0291 0.0218632 11.917 0 11.8039 0C11.6908 0 11.5787 0.0218632 11.4743 0.0643287C11.3699 0.106794 11.2751 0.169022 11.1954 0.247421L7.27012 4.07837C7.19045 4.15677 7.09566 4.219 6.99122 4.26146C6.88678 4.30393 6.77476 4.32579 6.66162 4.32579C6.54848 4.32579 6.43646 4.30393 6.33202 4.26146C6.22758 4.219 6.13279 4.15677 6.05312 4.07837L2.12785 0.247421C2.04818 0.169022 1.95338 0.106794 1.84895 0.0643287C1.74451 0.0218632 1.63249 0 1.51935 0C1.40621 0 1.29419 0.0218632 1.18975 0.0643287C1.08531 0.106794 0.990517 0.169022 0.910844 0.247421C0.751218 0.404141 0.661621 0.616141 0.661621 0.837119C0.661621 1.0581 0.751218 1.2701 0.910844 1.42682L4.84468 5.26613C5.32677 5.73605 5.98027 6 6.66162 6C7.34297 6 7.99647 5.73605 8.47856 5.26613L12.4124 1.42682C12.572 1.2701 12.6616 1.0581 12.6616 0.837119C12.6616 0.616141 12.572 0.404141 12.4124 0.247421Z" fill="#374557" fill-opacity="0.6"></path></svg></span></a>
														<ul class="dropdown-menu nftmax-sidebar_dropdown">
															<a class="list-group-item active" data-bs-toggle="list" data-bs-target="#side__one" role="tab">Daily</a>
															<a class="list-group-item" data-bs-toggle="list" data-bs-target="#side__one_weekly" role="tab">Weekly</a>
															<a class="list-group-item"  data-bs-toggle="list"data-bs-target="#side__one_monthly" role="tab">Monthly</a>
														</ul>
													</li>
												</ul>
											</div>
											
											<div class="tab-content" id="nav-tabContent">
												<!-- Single Tab -->
												<div class="tab-pane fade show active" id="side__one" role="tabpanel" aria-labelledby="side__one">
													<!-- Platform List -->
													<div class="nftmax-sidebar__charts nftmax-sidebar__charts--v1">
														<div class="nftmax-sidebar__cside-one">
															<canvas id="myChart_Side_One"></canvas>
															<div class="nftmax-sidebar__cicon"><img src="assets/img/charts-middle.png" alt="#"></div>
														</div>
														<div class="nftmax-sidebar__cstatics">
															<h4 class="nftmax-sidebar__cstatics-title">Daily Artwork Statistics</h4>
															<ul class="nftmax-sidebar__clist">
																<li><span class="nftmax-sidebar__ccolor nftmax-sidebar__ccolor-one"></span>Total Sold : {{$Statistics['TotalSold']}}</li>
																<li><span class="nftmax-sidebar__ccolor nftmax-sidebar__ccolor-two"></span>Total Cancel : {{$Statistics['TotalCancel']}}</li>
																<li><span class="nftmax-sidebar__ccolor nftmax-sidebar__ccolor-three"></span>Total Panding : {{$Statistics['TotalPanding']}}</li>
															</ul>
															
														</div>
													</div>
												</div>
												<div class="tab-pane fade show" id="side__one_weekly" role="tabpanel" aria-labelledby="side__one">
													<!-- Platform List -->
													<div class="nftmax-sidebar__charts nftmax-sidebar__charts--v1">
														<div class="nftmax-sidebar__cside-one">
															<canvas id="myChart_Side_One_weekly"></canvas>
															<div class="nftmax-sidebar__cicon"><img src="assets/img/charts-middle.png" alt="#"></div>
														</div>
														<div class="nftmax-sidebar__cstatics">
															<h4 class="nftmax-sidebar__cstatics-title">Weekly Artwork Statistics</h4>
															<ul class="nftmax-sidebar__clist">
																<li><span class="nftmax-sidebar__ccolor nftmax-sidebar__ccolor-one"></span>Total Sold : {{$Statistics_weekly['TotalSold']}}</li>
																<li><span class="nftmax-sidebar__ccolor nftmax-sidebar__ccolor-two"></span>Total Cancel : {{$Statistics_weekly['TotalCancel']}}</li>
																<li><span class="nftmax-sidebar__ccolor nftmax-sidebar__ccolor-three"></span>Total Panding : {{$Statistics_weekly['TotalPanding']}}</li>
															</ul>
															
														</div>
													</div>
												</div>
												<div class="tab-pane fade show" id="side__one_monthly" role="tabpanel" aria-labelledby="side__one">
													<!-- Platform List -->
													<div class="nftmax-sidebar__charts nftmax-sidebar__charts--v1">
														<div class="nftmax-sidebar__cside-one">
															<canvas id="myChart_Side_One_monthly"></canvas>
															<div class="nftmax-sidebar__cicon"><img src="assets/img/charts-middle.png" alt="#"></div>
														</div>
														<div class="nftmax-sidebar__cstatics">
															<h4 class="nftmax-sidebar__cstatics-title">Monthly Artwork Statistics</h4>
															<ul class="nftmax-sidebar__clist">
																<li><span class="nftmax-sidebar__ccolor nftmax-sidebar__ccolor-one"></span>Total Sold : {{$Statistics_monthly['TotalSold']}}</li>
																<li><span class="nftmax-sidebar__ccolor nftmax-sidebar__ccolor-two"></span>Total Cancel : {{$Statistics_monthly['TotalCancel']}}</li>
																<li><span class="nftmax-sidebar__ccolor nftmax-sidebar__ccolor-three"></span>Total Panding : {{$Statistics_monthly['TotalPanding']}}</li>
															</ul>
															
														</div>
													</div>
												</div>
												
												
												<!-- End Single Tab -->
											</div>
										</div>
										<!-- End NFTMax Single Sidebar -->
									</div>
									
									<div class="col-xxl-12 col-xl-6 col-12 nftmax-sidebar__widget">	
										<!-- NFTMax Single Sidebar -->
										<div class="nftmax-sidebar__single">
											<ul class="nav nav-tabs nftmax-dropdown__list" id="nav-tab" role="tablist">
												<li class="nav-item dropdown nftmax-multiple__adropdownn">
													<a class="nftmax-heading__amount-dropdown nav-link  dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><div class="nftmax__amount-dropdown"><img src="assets/img/eth-icon.png" alt="#">Taux d'achat<span class="nftmax-sidebar__arrow--icon"><svg width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.7092 0.288658C13.6163 0.197192 13.5057 0.124593 13.3839 0.0750502C13.262 0.025507 13.1313 0 12.9993 0C12.8673 0 12.7366 0.025507 12.6148 0.0750502C12.4929 0.124593 12.3824 0.197192 12.2894 0.288658L7.70992 4.7581C7.61697 4.84956 7.50638 4.92216 7.38453 4.9717C7.26269 5.02125 7.132 5.04676 7 5.04676C6.868 5.04676 6.73731 5.02125 6.61547 4.9717C6.49362 4.92216 6.38303 4.84956 6.29008 4.7581L1.7106 0.288658C1.61765 0.197192 1.50706 0.124593 1.38521 0.0750502C1.26337 0.025507 1.13268 0 1.00068 0C0.868682 0 0.737991 0.025507 0.616146 0.0750502C0.4943 0.124593 0.383712 0.197192 0.29076 0.288658C0.10453 0.471497 0 0.718831 0 0.976639C0 1.23445 0.10453 1.48178 0.29076 1.66462L4.88024 6.14382C5.44268 6.69206 6.20509 7 7 7C7.79491 7 8.55732 6.69206 9.11976 6.14382L13.7092 1.66462C13.8955 1.48178 14 1.23445 14 0.976639C14 0.718831 13.8955 0.471497 13.7092 0.288658Z" fill="#374557"></path></svg></span></div></a>
													<ul class="dropdown-menu nftmax-sidebar_dropdown">
														<a class="list-group-item" data-bs-toggle="tab" data-bs-target="#side__two" role="tab"><div class="nftmax__amount-dropdown"><img src="assets/img/eth-icon.png" alt="#">Taux d'achat</div></a>
														<a class="list-group-item" data-bs-toggle="tab"  data-bs-target="#side__two_BTC" role="tab"><div class="nftmax__amount-dropdown"><img src="assets/img/btc-icon.png" alt="#">Taux de vente</div></a>
													</ul>
												</li>
											</ul>
											
											<div class="tab-content" id="nav-tabContent">
												<!-- Single Tab -->
												<div class="tab-pane fade show active" id="side__two" role="tabpanel" aria-labelledby="side__two">
													<div class="nftmax-amount__statics">
														<h4 class="nftmax-amount__statics__title">${{$transectionRateData['usd']}} USD</h4>
														<p class="nftmax-amount__statics__text">+{{$transectionRateData['growth']}} ({{$transectionRateData['growth_percentage']}}%)</p>
													</div>
													
													<div class="nftmax-sidebar__cside-one">
														<canvas id="myChart_Side_Two"></canvas>
													</div>
												</div>
												<div class="tab-pane fade show" id="side__two_BTC" role="tabpanel" aria-labelledby="side__two">
													<div class="nftmax-amount__statics">
														<h4 class="nftmax-amount__statics__title">${{$transectionRateBTCData['usd']}} USD</h4>
														<p class="nftmax-amount__statics__text">+{{$transectionRateBTCData['growth']}} ({{$transectionRateBTCData['growth_percentage']}}%)</p>
													</div>
													
													<div class="nftmax-sidebar__cside-one">
														<canvas id="myChart_Side_Two_BTC"></canvas>
													</div>
												</div>
												<!-- End Single Tab -->
											</div>
										</div>
										<!-- End NFTMax Single Sidebar -->
									</div>
										
									
									
									<div class="col-xxl-12 col-xl-6 col-12 nftmax-sidebar__widget">	
										<!-- NFTMax Single Sidebar -->
										<div class="nftmax-sidebar__single">
											<!-- Sidebar Heading -->
											<div class="nftmax-sidebar__heading">
												<h4 class="nftmax-sidebar__title">Top Flatform</h4>
												<a href="#" class="nftmax-sidebar_btn">View All</a>
											</div>
											<!-- Platform List -->
											<div class="nftmax-sidebar__platform">
												<ul class="nftmax-sidebar__list">
													@foreach($TopPlatform as $TopPlatform)
                                                    <li>
                                                      <a href="#"><img src="{{ $TopPlatform['0'] }}" alt="#">{{ $TopPlatform['1'] }}</a>
                                                    </li>
                                                    @endforeach
												</ul>
											</div>
										</div>
										<!-- End NFTMax Single Sidebar -->
									</div>
								</div>
							</div>
						</div>
						
					</div>	
				</div>	
			</section>	
			<!-- End NFTmax Dashboard -->
			
		</div>

<script>


</script>


