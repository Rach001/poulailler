@include('Layout.Header')
			<!-- NFTmax Dashboard -->
			<section class="nftmax-adashboard nftmax-show">
			
				<div class="container">
					<div class="row">	
						<div class="col-lg-9 col-12 nftmax-main__column">
							<div class="nftmax-body">
								<!-- Dashboard Inner -->
								<div class="nftmax-dsinner">
									
									<!-- NFTMax User Profile -->
									<div class="nftmax-userprofile mg-top-40">
										<div class="nftmax-userprofile__header">
											<img src="{{ asset($User['cover_image']) }}" alt="#">
										</div>
										<div class="nftmax-userprofile__user">
											<div class="nftmax-userprofile__content">
												<div class="nftmax-userprofile__thumb">
													<img src="{{ asset($User['profile_image']) }}" alt="#">
												</div>
												<div class="nftmax-userprofile__info">
													<h4 class="nftmax-userprofile__info-title">{{ $User['name'] }}</h4>
													<p class="nftmax-userprofile__info-text"> {{ $User['bio'] }} <a href="#">Read More</a></p>
													<ul class="nftmax-userprofile__meta">
														<li class="nftmax-userprofile__meta" data-bs-toggle="modal" data-bs-target="#followers_modal"><a href="#"><span class="nftmax-userprofile__number">{{ $User['followers'] }}</span> Followers</a></li>
														
														<!-- Preview Product -->
														<div class="nftmax-preview__modal modal fade" id="followers_modal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true" >
															<div class="modal-dialog  nftmax-followers__modal">
																<div class="modal-content nftmax-preview__modal-content">
																	<div class="modal-header nftmax__modal__header">
																		<h4 class="modal-title nftmax-preview__modal-title" id="previewModalLabel">Followers</h4>
																		<button type="button" class="nftmax-preview__modal--close btn-close" data-bs-dismiss="modal" aria-label="Close"><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M36 16.16C36 17.4399 36 18.7199 36 20.0001C35.7911 20.0709 35.8636 20.2554 35.8385 20.4001C34.5321 27.9453 30.246 32.9248 22.9603 35.2822C21.9006 35.6251 20.7753 35.7657 19.6802 35.9997C18.4003 35.9997 17.1204 35.9997 15.8401 35.9997C15.5896 35.7086 15.2189 35.7732 14.9034 35.7093C7.77231 34.2621 3.08728 30.0725 0.769671 23.187C0.435002 22.1926 0.445997 21.1199 0 20.1599C0 18.7198 0 17.2798 0 15.8398C0.291376 15.6195 0.214408 15.2656 0.270759 14.9808C1.71321 7.69774 6.02611 2.99691 13.0428 0.700951C14.0118 0.383805 15.0509 0.386897 15.9999 0C17.2265 0 18.4532 0 19.6799 0C19.7156 0.124041 19.8125 0.136067 19.9225 0.146719C27.3 0.868973 33.5322 6.21922 35.3801 13.427C35.6121 14.3313 35.7945 15.2484 36 16.16ZM33.011 18.0787C33.0433 9.77105 26.3423 3.00309 18.077 2.9945C9.78479 2.98626 3.00344 9.658 2.98523 17.8426C2.96667 26.1633 9.58859 32.9601 17.7602 33.0079C26.197 33.0577 32.9787 26.4186 33.011 18.0787Z" fill="#374557" fill-opacity="0.6"></path><path d="M15.9309 18.023C13.9329 16.037 12.007 14.1207 10.0787 12.2072C9.60071 11.733 9.26398 11.2162 9.51996 10.506C9.945 9.32677 11.1954 9.0811 12.1437 10.0174C13.9067 11.7585 15.6766 13.494 17.385 15.2879C17.9108 15.8401 18.1633 15.7487 18.6375 15.258C20.3586 13.4761 22.1199 11.7327 23.8822 9.99096C24.8175 9.06632 26.1095 9.33639 26.4967 10.517C26.7286 11.2241 26.3919 11.7413 25.9133 12.2178C24.1757 13.9472 22.4477 15.6855 20.7104 17.4148C20.5228 17.6018 20.2964 17.7495 20.0466 17.9485C22.0831 19.974 24.0372 21.8992 25.9689 23.8468C26.9262 24.8119 26.6489 26.1101 25.4336 26.4987C24.712 26.7292 24.2131 26.3441 23.7455 25.8757C21.9945 24.1227 20.2232 22.3892 18.5045 20.6049C18.0698 20.1534 17.8716 20.2269 17.4802 20.6282C15.732 22.4215 13.9493 24.1807 12.1777 25.951C11.7022 26.4262 11.193 26.7471 10.4738 26.4537C9.31345 25.9798 9.06881 24.8398 9.98589 23.8952C11.285 22.5576 12.6138 21.2484 13.9387 19.9355C14.5792 19.3005 15.2399 18.6852 15.9309 18.023Z" fill="#374557" fill-opacity="0.6"></path></svg></button>
																	</div>
																	<div class="modal-body nftmax-modal__body">
																		<!-- Treadning Action Single -->
																		<ul class="followers-list">
																			<!-- SIngle Follower -->
																			<li  class="followers-list__single">
																				<div class="followers-list__first">
																					<div class="followers-list__follower">
																						<img src="assets/img/follower.png" alt="#">
																						<div class="followers-list__badge"><img src="assets/img/badge.png" alt="#"></div>
																					</div>
																					<div class="followers-list__content">
																						<h4 class="followers-list__title">Guy Hawkins</h4>
																						<p href="#" class="followers-list__text">34.k followers</p>
																					</div>
																				</div>
																				<div class="followers-list__button">
																					<a href="#" class="nftmax-btn nftmax-btn__bordered nftmax-btn__followed radius btn btn-primary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true"><span class="ntfmax__btn-textgr">Following</span></a>
																				</div>
																			</li>
																			<!-- End SIngle Follower -->
																			<!-- SIngle Follower -->
																			<li  class="followers-list__single">
																				<div class="followers-list__first">
																					<div class="followers-list__follower">
																						<img src="assets/img/follower.png" alt="#">
																						<div class="followers-list__badge"><img src="assets/img/badge.png" alt="#"></div>
																					</div>
																					<div class="followers-list__content">
																						<h4 class="followers-list__title">Guy Hawkins</h4>
																						<p href="#" class="followers-list__text">34.k followers</p>
																					</div>
																				</div>
																				<div class="followers-list__button">
																					<a class="nftmax-btn nftmax-btn__bordered bg radius">Follow</a> 
																				</div>
																			</li>
																			<!-- End SIngle Follower -->
																			<!-- SIngle Follower -->
																			<li  class="followers-list__single">
																				<div class="followers-list__first">
																					<div class="followers-list__follower">
																						<img src="assets/img/follower.png" alt="#">
																						<div class="followers-list__badge"><img src="assets/img/badge.png" alt="#"></div>
																					</div>
																					<div class="followers-list__content">
																						<h4 class="followers-list__title">Guy Hawkins</h4>
																						<p href="#" class="followers-list__text">34.k followers</p>
																					</div>
																				</div>
																				<div class="followers-list__button">
																					<a class="nftmax-btn nftmax-btn__bordered bg radius">Follow</a> 
																				</div>
																			</li>
																			<!-- End SIngle Follower -->
																			<!-- SIngle Follower -->
																			<li  class="followers-list__single">
																				<div class="followers-list__first">
																					<div class="followers-list__follower">
																						<img src="assets/img/follower.png" alt="#">
																						<div class="followers-list__badge"><img src="assets/img/badge.png" alt="#"></div>
																					</div>
																					<div class="followers-list__content">
																						<h4 class="followers-list__title">Guy Hawkins</h4>
																						<p href="#" class="followers-list__text">34.k followers</p>
																					</div>
																				</div>
																				<div class="followers-list__button">
																					<a class="nftmax-btn nftmax-btn__bordered bg radius">Follow</a> 
																				</div>
																			</li>
																			<!-- End SIngle Follower -->
																			<!-- SIngle Follower -->
																			<li  class="followers-list__single">
																				<div class="followers-list__first">
																					<div class="followers-list__follower">
																						<img src="assets/img/follower.png" alt="#">
																						<div class="followers-list__badge"><img src="assets/img/badge.png" alt="#"></div>
																					</div>
																					<div class="followers-list__content">
																						<h4 class="followers-list__title">Guy Hawkins</h4>
																						<p href="#" class="followers-list__text">34.k followers</p>
																					</div>
																				</div>
																				<div class="followers-list__button">
																					<a href="#" class="nftmax-btn nftmax-btn__bordered nftmax-btn__followed radius btn btn-primary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true"><span class="ntfmax__btn-textgr">Following</span></a>
																				</div>
																			</li>
																			<!-- End SIngle Follower -->
																			<!-- SIngle Follower -->
																			<li  class="followers-list__single">
																				<div class="followers-list__first">
																					<div class="followers-list__follower">
																						<img src="assets/img/follower.png" alt="#">
																						<div class="followers-list__badge"><img src="assets/img/badge.png" alt="#"></div>
																					</div>
																					<div class="followers-list__content">
																						<h4 class="followers-list__title">Guy Hawkins</h4>
																						<p href="#" class="followers-list__text">34.k followers</p>
																					</div>
																				</div>
																				<div class="followers-list__button">
																					<a class="nftmax-btn nftmax-btn__bordered bg radius">Follow</a> 
																				</div>
																			</li>
																			<!-- End SIngle Follower -->
																			<!-- SIngle Follower -->
																			<li  class="followers-list__single">
																				<div class="followers-list__first">
																					<div class="followers-list__follower">
																						<img src="assets/img/follower.png" alt="#">
																						<div class="followers-list__badge"><img src="assets/img/badge.png" alt="#"></div>
																					</div>
																					<div class="followers-list__content">
																						<h4 class="followers-list__title">Guy Hawkins</h4>
																						<p href="#" class="followers-list__text">34.k followers</p>
																					</div>
																				</div>
																				<div class="followers-list__button">
																					<a class="nftmax-btn nftmax-btn__bordered bg radius">Follow</a> 
																				</div>
																			</li>
																			<!-- End SIngle Follower -->
																			<!-- SIngle Follower -->
																			<li  class="followers-list__single">
																				<div class="followers-list__first">
																					<div class="followers-list__follower">
																						<img src="assets/img/follower.png" alt="#">
																						<div class="followers-list__badge"><img src="assets/img/badge.png" alt="#"></div>
																					</div>
																					<div class="followers-list__content">
																						<h4 class="followers-list__title">Guy Hawkins</h4>
																						<p href="#" class="followers-list__text">34.k followers</p>
																					</div>
																				</div>
																				<div class="followers-list__button">
																					<a class="nftmax-btn nftmax-btn__bordered bg radius">Follow</a> 
																				</div>
																			</li>
																			<!-- End SIngle Follower -->
																			<!-- SIngle Follower -->
																			<li  class="followers-list__single">
																				<div class="followers-list__first">
																					<div class="followers-list__follower">
																						<img src="assets/img/follower.png" alt="#">
																						<div class="followers-list__badge"><img src="assets/img/badge.png" alt="#"></div>
																					</div>
																					<div class="followers-list__content">
																						<h4 class="followers-list__title">Guy Hawkins</h4>
																						<p href="#" class="followers-list__text">34.k followers</p>
																					</div>
																				</div>
																				<div class="followers-list__button">
																					<a href="#" class="nftmax-btn nftmax-btn__bordered nftmax-btn__followed radius btn btn-primary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true"><span class="ntfmax__btn-textgr">Following</span></a>
																				</div>
																			</li>
																			<!-- End SIngle Follower -->
																			<!-- SIngle Follower -->
																			<li  class="followers-list__single">
																				<div class="followers-list__first">
																					<div class="followers-list__follower">
																						<img src="assets/img/follower.png" alt="#">
																						<div class="followers-list__badge"><img src="assets/img/badge.png" alt="#"></div>
																					</div>
																					<div class="followers-list__content">
																						<h4 class="followers-list__title">Guy Hawkins</h4>
																						<p href="#" class="followers-list__text">34.k followers</p>
																					</div>
																				</div>
																				<div class="followers-list__button">
																					<a class="nftmax-btn nftmax-btn__bordered bg radius">Follow</a> 
																				</div>
																			</li>
																			<!-- End SIngle Follower -->
																			<!-- SIngle Follower -->
																			<li  class="followers-list__single">
																				<div class="followers-list__first">
																					<div class="followers-list__follower">
																						<img src="assets/img/follower.png" alt="#">
																						<div class="followers-list__badge"><img src="assets/img/badge.png" alt="#"></div>
																					</div>
																					<div class="followers-list__content">
																						<h4 class="followers-list__title">Guy Hawkins</h4>
																						<p href="#" class="followers-list__text">34.k followers</p>
																					</div>
																				</div>
																				<div class="followers-list__button">
																					<a class="nftmax-btn nftmax-btn__bordered bg radius">Follow</a> 
																				</div>
																			</li>
																			<!-- End SIngle Follower -->
																			<!-- SIngle Follower -->
																			<li  class="followers-list__single">
																				<div class="followers-list__first">
																					<div class="followers-list__follower">
																						<img src="assets/img/follower.png" alt="#">
																						<div class="followers-list__badge"><img src="assets/img/badge.png" alt="#"></div>
																					</div>
																					<div class="followers-list__content">
																						<h4 class="followers-list__title">Guy Hawkins</h4>
																						<p href="#" class="followers-list__text">34.k followers</p>
																					</div>
																				</div>
																				<div class="followers-list__button">
																					<a class="nftmax-btn nftmax-btn__bordered bg radius">Follow</a> 
																				</div>
																			</li>
																			<!-- End SIngle Follower -->
																		</ul>
																	</div>
																</div>
															</div>
														</div>
														<!-- End Preview Product -->
														<li class="nftmax-userprofile__meta"><a href="#"><span class="nftmax-userprofile__number">35</span> Following</a></li>
														<li class="nftmax-userprofile__meta"><a href="#"><span class="nftmax-userprofile__number">{{ $User['favorite'] }}</span> Favorites</a></li>
													</ul>
												</div>
											</div>
											<div class="nftmax-userprofile__right">
												<a href="#" class="nftmax-btn nftmax-btn__primary nftmax-btn__profile radius">Edit Profile</a>
												<a href="#" class="nftmax-btn nftmax-btn__share radius"><svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.4922 5.51801C12.4922 5.43549 12.4922 5.37668 12.4922 5.31786C12.4908 3.80698 12.4894 2.2961 12.4881 0.784769C12.4876 0.460163 12.6709 0.18525 12.97 0.0626106C13.2823 -0.0654996 13.6374 0.00562209 13.8708 0.251813C14.1079 0.50165 14.3391 0.756959 14.5725 1.00999C16.9742 3.6114 19.3723 6.216 21.7827 8.80921C22.0863 9.13564 22.0863 9.7347 21.7863 10.0579C19.1471 12.9024 16.5188 15.7568 13.8868 18.608C13.6356 18.8802 13.3069 18.9586 12.9864 18.8264C12.6668 18.6947 12.4899 18.4006 12.4899 18.0404C12.4899 16.5204 12.4844 15 12.4803 13.48C12.4803 13.449 12.4735 13.418 12.4676 13.3706C12.4092 13.3706 12.3559 13.3697 12.3021 13.3706C9.96553 13.4216 7.82231 14.1082 5.8537 15.3506C4.32002 16.3185 3.04895 17.5544 2.11206 19.1177C1.60053 19.9712 1.23261 20.8826 1.02517 21.8573C1.01788 21.8915 1.00602 21.9248 0.984596 22C0.896606 21.7821 0.818646 21.6024 0.750715 21.4196C0.0700445 19.5905 -0.16338 17.7081 0.114724 15.7728C0.385533 13.8885 1.11088 12.1857 2.25521 10.6707C4.17459 8.12899 6.70944 6.52693 9.80642 5.8107C10.6271 5.62104 11.4623 5.52804 12.3053 5.51846C12.3591 5.51755 12.4133 5.51801 12.4922 5.51801Z" fill="#374557"></path></svg></a>
											</div>
										</div>
									</div>
									
									<div class="nftmax-pcats">
							
										<!-- Profile Menu -->
										<div class="nftmax-pcats__bar">
											<div class="nftmax-pcats__list list-group " id="list-tab" role="tablist">
												<a class="list-group-item active" data-bs-toggle="list" href="#tab_1" role="tab" href="profile.html">On Sale<span class="nftmax-pcats__count">{{ count($OnSale) }}</span></a>
												<a class="list-group-item" data-bs-toggle="list" href="#tab_2" role="tab">Owned<span class="nftmax-pcats__count">{{count($Owned)}}</span></a>
												<a class="list-group-item" data-bs-toggle="list" href="#tab_3" role="tab">Created<span class="nftmax-pcats__count">{{count($CreateforSell)+count($CreateforBits)}}</span></a>
												<a class="list-group-item" data-bs-toggle="list" href="#tab_4" role="tab">Hidden<span class="nftmax-pcats__count">{{count($CreateforSellHidden)+count($CreateforBitsHidden)}}</span></a>
												<a class="list-group-item" data-bs-toggle="list" href="#tab_5" role="tab">Collections<span class="nftmax-pcats__count">{{count($collection)}}</span></a>
												<a class="list-group-item" data-bs-toggle="list" href="#tab_6" role="tab">Activity</a></li>
											</div>
											<a href="{{url('/upload-product')}}" class="nftmax__item-button--single nftmax-btn nftmax-btn__bordered bg radius">Upload Product</a>
										</div>
										<!-- End Profile Menu -->
										
										
										<div class="tab-content" id="nav-tabContent">
											<!-- Single Tab -->
											<div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="nav-home-tab">
												
												<div class="row">
													<div class="col-12">
														<div class="nftmax-pptabs mg-btm-20">
															<div class="nftmax-pptabs__form">
																<form class="nftmax-header__form-inner nftmax-header__form-profile" action="#">
																	<button class="search-btn" type="submit"><img src="assets/img/search.png" alt="#"></button>
																	<input name="s" value="" type="text" placeholder="Search items, collections...">
																</form>
															</div>
															<div class="nftmax-pptabs__main">
																<ul  class="nav nav-tabs nftmax-dropdown__list" id="nav-tab" role="tablist">
																	<li class="nav-item dropdown">
																		<a class="nftmax-sidebar_btn nftmax-heading__tabs nav-link dropdown-toggle">Recently Received <span><svg width="20" height="10" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.7" d="M12.4124 0.247421C12.3327 0.169022 12.2379 0.106794 12.1335 0.0643287C12.0291 0.0218632 11.917 0 11.8039 0C11.6908 0 11.5787 0.0218632 11.4743 0.0643287C11.3699 0.106794 11.2751 0.169022 11.1954 0.247421L7.27012 4.07837C7.19045 4.15677 7.09566 4.219 6.99122 4.26146C6.88678 4.30393 6.77476 4.32579 6.66162 4.32579C6.54848 4.32579 6.43646 4.30393 6.33202 4.26146C6.22758 4.219 6.13279 4.15677 6.05312 4.07837L2.12785 0.247421C2.04818 0.169022 1.95338 0.106794 1.84895 0.0643287C1.74451 0.0218632 1.63249 0 1.51935 0C1.40621 0 1.29419 0.0218632 1.18975 0.0643287C1.08531 0.106794 0.990517 0.169022 0.910844 0.247421C0.751218 0.404141 0.661621 0.616141 0.661621 0.837119C0.661621 1.0581 0.751218 1.2701 0.910844 1.42682L4.84468 5.26613C5.32677 5.73605 5.98027 6 6.66162 6C7.34297 6 7.99647 5.73605 8.47856 5.26613L12.4124 1.42682C12.572 1.2701 12.6616 1.0581 12.6616 0.837119C12.6616 0.616141 12.572 0.404141 12.4124 0.247421Z" fill="#374557" fill-opacity="0.6"></path></svg></span></a>
																	</li>
																</ul>
															</div>
														</div>	
													</div>
												</div>
												
												<div class="row nftmax-gap-sq30">
												@foreach($OnSale as $OnSale)
															<div class="col-lg-4 col-md-6 col-12">
																<!-- Marketplace Single Item -->
																<div class="trending-action__single trending-action__single--v2">
																	<div class="nftmax-trendmeta">
																		<div class="nftmax-trendmeta__main">
																			<div class="nftmax-trendmeta__author">
																				<div class="nftmax-trendmeta__img">
																					<img src="{{ asset($OnSale['0']) }}" alt="#">
																				</div>
																				<div class="nftmax-trendmeta__content">
																					<span class="nftmax-trendmeta__small">Owned by</span>
																					<h4 class="nftmax-trendmeta__title">{{ $OnSale['1'] }}</h4> 
																				</div>
																			</div>
																			<div class="nftmax-trendmeta__author">
																				<div class="nftmax-trendmeta__content">
																					<span class="nftmax-trendmeta__small">Create by</span>
																					<h4 class="nftmax-trendmeta__title">{{ $OnSale['2'] }}</h4> 
																				</div>
																				<div class="nftmax-trendmeta__img">
																					<img src="{{ asset($OnSale['3']) }}" alt="#">
																				</div>
																			</div>
																		</div>
																	</div>
																	<!-- Trending Head -->
																	<div class="trending-action__head">
																		@if($OnSale['4'] == 1)
																		<div class="trending-action__badge"><span>Active</span></div>
																		@else
																		<div class="trending-action__badge"><span>close</span></div>
																		@endif
																		<div class="trending-action__button v2">
																			<a class="trending-action__btn heart-icon"><i class="fa-solid fa-heart"></i></a>
																			<a class="trending-action__btn"><i class="fa-solid fa-ellipsis-vertical"></i></a>
																		</div>
																		<img src="{{ asset($OnSale['5']) }}" alt="#">
																	</div>
																	<!-- Trending Body -->
																	<div class="trending-action__body trending-marketplace__body">
																		<h2 class="trending-action__title"><a href="marketplace-details.html">{{ $OnSale['6'] }}</a></h2>
																		<div class="nftmax-currency">
																			<div class="nftmax-currency__main">
																				<div class="nftmax-currency__icon"><img src="{{ asset($OnSale['7']) }}" alt="#"></div>
																				<div class="nftmax-currency__content">
																					<h4 class="nftmax-currency__content-title">{{ $OnSale['8'] }} ETH </h4>
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
										
											<div class="tab-pane fade" id="tab_2" role="tabpanel" aria-labelledby="nav-home-tab">
												<div class="row">
													<div class="col-12">
														<div class="nftmax-pptabs mg-btm-20">
															<div class="nftmax-pptabs__form">
																<form class="nftmax-header__form-inner nftmax-header__form-profile" action="#">
																	<button class="search-btn" type="submit"><img src="assets/img/search.png" alt="#"></button>
																	<input name="s" value="" type="text" placeholder="Search items, collections...">
																</form>
															</div>
															<div class="nftmax-pptabs__main">
																<ul  class="nav nav-tabs nftmax-dropdown__list" id="nav-tab" role="tablist">
																	<li class="nav-item dropdown">
																		<a class="nftmax-sidebar_btn nftmax-heading__tabs nav-link dropdown-toggle">Recently Received <span><svg width="20" height="10" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.7" d="M12.4124 0.247421C12.3327 0.169022 12.2379 0.106794 12.1335 0.0643287C12.0291 0.0218632 11.917 0 11.8039 0C11.6908 0 11.5787 0.0218632 11.4743 0.0643287C11.3699 0.106794 11.2751 0.169022 11.1954 0.247421L7.27012 4.07837C7.19045 4.15677 7.09566 4.219 6.99122 4.26146C6.88678 4.30393 6.77476 4.32579 6.66162 4.32579C6.54848 4.32579 6.43646 4.30393 6.33202 4.26146C6.22758 4.219 6.13279 4.15677 6.05312 4.07837L2.12785 0.247421C2.04818 0.169022 1.95338 0.106794 1.84895 0.0643287C1.74451 0.0218632 1.63249 0 1.51935 0C1.40621 0 1.29419 0.0218632 1.18975 0.0643287C1.08531 0.106794 0.990517 0.169022 0.910844 0.247421C0.751218 0.404141 0.661621 0.616141 0.661621 0.837119C0.661621 1.0581 0.751218 1.2701 0.910844 1.42682L4.84468 5.26613C5.32677 5.73605 5.98027 6 6.66162 6C7.34297 6 7.99647 5.73605 8.47856 5.26613L12.4124 1.42682C12.572 1.2701 12.6616 1.0581 12.6616 0.837119C12.6616 0.616141 12.572 0.404141 12.4124 0.247421Z" fill="#374557" fill-opacity="0.6"></path></svg></span></a>
																	</li>
																</ul>
															</div>
														</div>	
													</div>
												</div>
												<div class="row nftmax-gap-sq30 trending-action__actives">
												@foreach($Owned as $Owned)
													<div class="col-xxl-3 col-lg-3 col-md-6 col-12">
														<!-- Treadning Single -->
														<div class="trending-action__single nftmax-pd-20">
															<!-- Trending Head -->
															<div class="trending-action__head">
																<div class="trending-action__button">
																	<a class="trending-action__btn heart-icon"><i class="fa-solid fa-heart"></i></a>
																	<a class="trending-action__btn"><i class="fa-solid fa-ellipsis-vertical"></i></a>
																</div>
																<img src="{{ asset($Owned['0']) }}" alt="#">
															</div>
															<!-- Trending Body -->
															<div class="trending-action__body">
																<div class="trending-action__author-meta">
																	<div class="trending-action__author-img"><img src="{{ asset($Owned['1']) }}" alt="#"></div>
																	<p class="trending-action__author-name">Owned by <a href="profile.html">{{ $Owned['2'] }}</a></p>
																</div>
																<h2 class="trending-action__title"><a href="active-bids.html">{{ $Owned['3'] }}</a></h2>
																<div class="dashboard-banner__bid dashboard-banner__bid-v2">
																	<!-- Single Bid -->
																	<div class="dashboard-banner__group dashboard-banner__group-v2">
																		<p class="dashboard-banner__group-small">Current Bid</p>
																		<h3 class="dashboard-banner__group-title">{{ $Owned['4'] }} ETH</h3>
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
											</div>
											
											<div class="tab-pane fade" id="tab_3" role="tabpanel" aria-labelledby="nav-home-tab">
												<div class="row">
													<div class="col-12">
														<div class="nftmax-pptabs mg-btm-20">
															<div class="nftmax-pptabs__form">
																<form class="nftmax-header__form-inner nftmax-header__form-profile" action="#">
																	<button class="search-btn" type="submit"><img src="assets/img/search.png" alt="#"></button>
																	<input name="s" value="" type="text" placeholder="Search items, collections...">
																</form>
															</div>
															<div class="nftmax-pptabs__main">
																<ul  class="nav nav-tabs nftmax-dropdown__list" id="nav-tab" role="tablist">
																	<li class="nav-item dropdown">
																		<a class="nftmax-sidebar_btn nftmax-heading__tabs nav-link dropdown-toggle">Recently Received <span><svg width="20" height="10" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.7" d="M12.4124 0.247421C12.3327 0.169022 12.2379 0.106794 12.1335 0.0643287C12.0291 0.0218632 11.917 0 11.8039 0C11.6908 0 11.5787 0.0218632 11.4743 0.0643287C11.3699 0.106794 11.2751 0.169022 11.1954 0.247421L7.27012 4.07837C7.19045 4.15677 7.09566 4.219 6.99122 4.26146C6.88678 4.30393 6.77476 4.32579 6.66162 4.32579C6.54848 4.32579 6.43646 4.30393 6.33202 4.26146C6.22758 4.219 6.13279 4.15677 6.05312 4.07837L2.12785 0.247421C2.04818 0.169022 1.95338 0.106794 1.84895 0.0643287C1.74451 0.0218632 1.63249 0 1.51935 0C1.40621 0 1.29419 0.0218632 1.18975 0.0643287C1.08531 0.106794 0.990517 0.169022 0.910844 0.247421C0.751218 0.404141 0.661621 0.616141 0.661621 0.837119C0.661621 1.0581 0.751218 1.2701 0.910844 1.42682L4.84468 5.26613C5.32677 5.73605 5.98027 6 6.66162 6C7.34297 6 7.99647 5.73605 8.47856 5.26613L12.4124 1.42682C12.572 1.2701 12.6616 1.0581 12.6616 0.837119C12.6616 0.616141 12.572 0.404141 12.4124 0.247421Z" fill="#374557" fill-opacity="0.6"></path></svg></span></a>
																	</li>
																</ul>
															</div>
														</div>	
													</div>
												</div>
												<div class="nftmax-inner__heading nftmax-pp__title mt-0">
													<h2 class="nftmax-inner__page-title">Create for Sell</h2>
												</div>
												<div class="row nftmax-gap-sq30 trending-action__actives">
													<!-- End Marketplace Item -->
													@foreach($CreateforBits as $CreateforBits)
													<div class="col-lg-4 col-md-6 col-12">
														<!-- Marketplace Single Item -->
														<div class="trending-action__single nftmax-pd-20">
															<div class="nftmax-trendmeta">
																<div class="nftmax-trendmeta__main">
																	<div class="nftmax-trendmeta__author">
																		<div class="nftmax-trendmeta__img">
																			<img src="{{ asset($CreateforBits['0']) }}" alt="#">
																		</div>
																		<div class="nftmax-trendmeta__content">
																			<span class="nftmax-trendmeta__small">Owned by</span>
																			<h4 class="nftmax-trendmeta__title">{{$CreateforBits[1]}}</h4> 
																		</div>
																	</div>
																	<div class="nftmax-trendmeta__author">
																		<div class="nftmax-trendmeta__content">
																			<span class="nftmax-trendmeta__small">Create by</span>
																			<h4 class="nftmax-trendmeta__title">{{$CreateforBits[2]}}</h4> 
																		</div>
																		<div class="nftmax-trendmeta__img">
																			<img src="{{ asset($CreateforBits['3']) }}" alt="#">
																		</div>
																	</div>
																</div>
															</div>
															<!-- Trending Head -->
															<div class="trending-action__head">
																<div class="trending-action__badge"><span>Active</span></div>
																<div class="trending-action__button v2">
																	<a class="trending-action__btn heart-icon"><i class="fa-solid fa-heart"></i></a>
																	<a class="trending-action__btn"><i class="fa-solid fa-ellipsis-vertical"></i></a>
																</div>
																<img src="{{asset($CreateforBits['5'])}}" alt="#">
															</div>
															<!-- Trending Body -->
															<div class="trending-action__body trending-marketplace__body">
																<h2 class="trending-action__title"><a href="marketplace-details.html">{{$CreateforBits['6']}}</a></h2>
																<div class="nftmax-currency">
																	<div class="nftmax-currency__main">
																		<div class="nftmax-currency__icon"><img src="{{$CreateforBits['7']}}" alt="#"></div>
																		<div class="nftmax-currency__content">
																			<h4 class="nftmax-currency__content-title">{{$CreateforBits['8']}} ETH </h4>
																			<p class="nftmax-currency__content-sub">({{$CreateforBits['9']}}  USD)</p>
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
												
												<div class="nftmax-inner__heading nftmax-pp__title">
													<h2 class="nftmax-inner__page-title">Create for Bits</h2>
												</div>
												
												<div class="row nftmax-gap-sq30  trending-action__actives">
													@foreach($CreateforSell as $CreateforSell)
													<div class="col-xxl-3 col-lg-3 col-md-6 col-12">
														<!-- Treadning Single -->
														<div class="trending-action__single nftmax-pd-20">
															<!-- Trending Head -->
															<div class="trending-action__head">
																<div class="trending-action__button">
																	<a class="trending-action__btn heart-icon"><i class="fa-solid fa-heart"></i></a>
																	<a class="trending-action__btn"><i class="fa-solid fa-ellipsis-vertical"></i></a>
																</div>
																<img src="{{ asset($CreateforSell[0]) }}" alt="#">
															</div>
															<!-- Trending Body -->
															<div class="trending-action__body">
																<div class="trending-action__author-meta">
																	<div class="trending-action__author-img"><img src="{{ asset($CreateforSell[1]) }}" alt="#"></div>
																	<p class="trending-action__author-name">Owned by <a href="#">{{ $CreateforSell[2] }}</a></p>
																</div>
																<h2 class="trending-action__title"><a href="#">{{ $CreateforSell[3] }}</a></h2>
																<div class="dashboard-banner__bid dashboard-banner__bid-v2">
																	<!-- Single Bid -->
																	<div class="dashboard-banner__group dashboard-banner__group-v2">
																		<p class="dashboard-banner__group-small">Current Bid</p>
																		<h3 class="dashboard-banner__group-title">{{ $CreateforSell[4] }} ETH</h3>
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
																<a href="marketplace.html" class="nftmax-btn trs-white">View Art Work</a>
															</div>
														</div>
														<!-- End Treadning Single -->
													</div>
													@endforeach
												</div>
											</div>
											
											<div class="tab-pane fade" id="tab_4" role="tabpanel" aria-labelledby="nav-home-tab">
												<div class="row">
													<div class="col-12">
														<div class="nftmax-pptabs mg-btm-20">
															<div class="nftmax-pptabs__form">
																<form class="nftmax-header__form-inner nftmax-header__form-profile" action="#">
																	<button class="search-btn" type="submit"><img src="assets/img/search.png" alt="#"></button>
																	<input name="s" value="" type="text" placeholder="Search items, collections...">
																</form>
															</div>
															<div class="nftmax-pptabs__main">
																<ul  class="nav nav-tabs nftmax-dropdown__list" id="nav-tab" role="tablist">
																	<li class="nav-item dropdown">
																		<a class="nftmax-sidebar_btn nftmax-heading__tabs nav-link dropdown-toggle">Recently Received <span><svg width="20" height="10" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.7" d="M12.4124 0.247421C12.3327 0.169022 12.2379 0.106794 12.1335 0.0643287C12.0291 0.0218632 11.917 0 11.8039 0C11.6908 0 11.5787 0.0218632 11.4743 0.0643287C11.3699 0.106794 11.2751 0.169022 11.1954 0.247421L7.27012 4.07837C7.19045 4.15677 7.09566 4.219 6.99122 4.26146C6.88678 4.30393 6.77476 4.32579 6.66162 4.32579C6.54848 4.32579 6.43646 4.30393 6.33202 4.26146C6.22758 4.219 6.13279 4.15677 6.05312 4.07837L2.12785 0.247421C2.04818 0.169022 1.95338 0.106794 1.84895 0.0643287C1.74451 0.0218632 1.63249 0 1.51935 0C1.40621 0 1.29419 0.0218632 1.18975 0.0643287C1.08531 0.106794 0.990517 0.169022 0.910844 0.247421C0.751218 0.404141 0.661621 0.616141 0.661621 0.837119C0.661621 1.0581 0.751218 1.2701 0.910844 1.42682L4.84468 5.26613C5.32677 5.73605 5.98027 6 6.66162 6C7.34297 6 7.99647 5.73605 8.47856 5.26613L12.4124 1.42682C12.572 1.2701 12.6616 1.0581 12.6616 0.837119C12.6616 0.616141 12.572 0.404141 12.4124 0.247421Z" fill="#374557" fill-opacity="0.6"></path></svg></span></a>
																	</li>
																</ul>
															</div>
														</div>	
													</div>
												</div>
												<div class="nftmax-inner__heading nftmax-pp__title mt-0">
													<h2 class="nftmax-inner__page-title">Create for Sell</h2>
												</div>
												<div class="row nftmax-gap-sq30 trending-action__actives">
													<!-- End Marketplace Item -->
													@foreach($CreateforBitsHidden as $CreateforBits)
													<div class="col-lg-4 col-md-6 col-12">
														<!-- Marketplace Single Item -->
														<div class="trending-action__single nftmax-pd-20">
															<div class="nftmax-trendmeta">
																<div class="nftmax-trendmeta__main">
																	<div class="nftmax-trendmeta__author">
																		<div class="nftmax-trendmeta__img">
																			<img src="{{ asset($CreateforBits['0']) }}" alt="#">
																		</div>
																		<div class="nftmax-trendmeta__content">
																			<span class="nftmax-trendmeta__small">Owned by</span>
																			<h4 class="nftmax-trendmeta__title">{{$CreateforBits[1]}}</h4> 
																		</div>
																	</div>
																	<div class="nftmax-trendmeta__author">
																		<div class="nftmax-trendmeta__content">
																			<span class="nftmax-trendmeta__small">Create by</span>
																			<h4 class="nftmax-trendmeta__title">{{$CreateforBits[2]}}</h4> 
																		</div>
																		<div class="nftmax-trendmeta__img">
																			<img src="{{ asset($CreateforBits['3']) }}" alt="#">
																		</div>
																	</div>
																</div>
															</div>
															<!-- Trending Head -->
															<div class="trending-action__head">
																<div class="trending-action__badge"><span>Active</span></div>
																<div class="trending-action__button v2">
																	<a class="trending-action__btn heart-icon"><i class="fa-solid fa-heart"></i></a>
																	<a class="trending-action__btn"><i class="fa-solid fa-ellipsis-vertical"></i></a>
																</div>
																<img src="{{asset($CreateforBits['5'])}}" alt="#">
															</div>
															<!-- Trending Body -->
															<div class="trending-action__body trending-marketplace__body">
																<h2 class="trending-action__title"><a href="marketplace-details.html">{{$CreateforBits['6']}}</a></h2>
																<div class="nftmax-currency">
																	<div class="nftmax-currency__main">
																		<div class="nftmax-currency__icon"><img src="{{$CreateforBits['7']}}" alt="#"></div>
																		<div class="nftmax-currency__content">
																			<h4 class="nftmax-currency__content-title">{{$CreateforBits['8']}} ETH </h4>
																			<p class="nftmax-currency__content-sub">({{$CreateforBits['9']}}  USD)</p>
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
												
												<div class="nftmax-inner__heading nftmax-pp__title">
													<h2 class="nftmax-inner__page-title">Create for Bits</h2>
												</div>
												
												<div class="row nftmax-gap-sq30  trending-action__actives">
													@foreach($CreateforSellHidden as $CreateforSell)
													<div class="col-xxl-3 col-lg-3 col-md-6 col-12">
														<!-- Treadning Single -->
														<div class="trending-action__single nftmax-pd-20">
															<!-- Trending Head -->
															<div class="trending-action__head">
																<div class="trending-action__button">
																	<a class="trending-action__btn heart-icon"><i class="fa-solid fa-heart"></i></a>
																	<a class="trending-action__btn"><i class="fa-solid fa-ellipsis-vertical"></i></a>
																</div>
																<img src="{{ asset($CreateforSell[0]) }}" alt="#">
															</div>
															<!-- Trending Body -->
															<div class="trending-action__body">
																<div class="trending-action__author-meta">
																	<div class="trending-action__author-img"><img src="{{ asset($CreateforSell[1]) }}" alt="#"></div>
																	<p class="trending-action__author-name">Owned by <a href="#">{{ $CreateforSell[2] }}</a></p>
																</div>
																<h2 class="trending-action__title"><a href="#">{{ $CreateforSell[3] }}</a></h2>
																<div class="dashboard-banner__bid dashboard-banner__bid-v2">
																	<!-- Single Bid -->
																	<div class="dashboard-banner__group dashboard-banner__group-v2">
																		<p class="dashboard-banner__group-small">Current Bid</p>
																		<h3 class="dashboard-banner__group-title">{{ $CreateforSell[4] }} ETH</h3>
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
																<a href="marketplace.html" class="nftmax-btn trs-white">View Art Work</a>
															</div>
														</div>
														<!-- End Treadning Single -->
													</div>
													@endforeach
												</div>
											</div>
											
											<div class="tab-pane fade" id="tab_5" role="tabpanel" aria-labelledby="nav-home-tab">
												<div class="row">
													<div class="col-12">
														<div class="nftmax-pptabs mg-btm-20">
															<div class="nftmax-pptabs__form">
																<form class="nftmax-header__form-inner nftmax-header__form-profile" action="#">
																	<button class="search-btn" type="submit"><img src="assets/img/search.png" alt="#"></button>
																	<input name="s" value="" type="text" placeholder="Search items, collections...">
																</form>
															</div>
															<div class="nftmax-pptabs__main">
																<ul  class="nav nav-tabs nftmax-dropdown__list" id="nav-tab" role="tablist">
																	<li class="nav-item dropdown">
																		<a class="nftmax-sidebar_btn nftmax-heading__tabs nav-link dropdown-toggle">Recently Received <span><svg width="20" height="10" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.7" d="M12.4124 0.247421C12.3327 0.169022 12.2379 0.106794 12.1335 0.0643287C12.0291 0.0218632 11.917 0 11.8039 0C11.6908 0 11.5787 0.0218632 11.4743 0.0643287C11.3699 0.106794 11.2751 0.169022 11.1954 0.247421L7.27012 4.07837C7.19045 4.15677 7.09566 4.219 6.99122 4.26146C6.88678 4.30393 6.77476 4.32579 6.66162 4.32579C6.54848 4.32579 6.43646 4.30393 6.33202 4.26146C6.22758 4.219 6.13279 4.15677 6.05312 4.07837L2.12785 0.247421C2.04818 0.169022 1.95338 0.106794 1.84895 0.0643287C1.74451 0.0218632 1.63249 0 1.51935 0C1.40621 0 1.29419 0.0218632 1.18975 0.0643287C1.08531 0.106794 0.990517 0.169022 0.910844 0.247421C0.751218 0.404141 0.661621 0.616141 0.661621 0.837119C0.661621 1.0581 0.751218 1.2701 0.910844 1.42682L4.84468 5.26613C5.32677 5.73605 5.98027 6 6.66162 6C7.34297 6 7.99647 5.73605 8.47856 5.26613L12.4124 1.42682C12.572 1.2701 12.6616 1.0581 12.6616 0.837119C12.6616 0.616141 12.572 0.404141 12.4124 0.247421Z" fill="#374557" fill-opacity="0.6"></path></svg></span></a>
																	</li>
																</ul>
															</div>
														</div>	
													</div>
												</div>
												<div class="row nftmax-gap-sq30">
												@foreach($collection as $collection)
												<div class="col-lg-4 col-md-6 col-12">
													<div class="nftmax-collection__single">
														<div class="nftmax-collection__head">
															<a href="#"><img class="nftmax-collection__img" src="{{ asset($collection['0']) }}" alt="#"></a>
														</div>
														<div class="nftmax-collection__body">
															<div class="row g-2">
																<div class="col-6">
																	<a href="#"><img class="nftmax-collection__img" src="{{ asset($collection['1']) }}" alt="#"></a>
																</div>
																<div class="col-6">
																	<a href="#"><img class="nftmax-collection__img" src="{{ asset($collection['2']) }}" alt="#"></a>
																</div>
															</div>
															<div class="nftmax-collection__author">
																<div class="nftmax-collection__author-head">
																	<a href="#">
																		<img src="{{ asset($collection['3']) }}" alt="#">
																		<h4 class="nftmax-collection__title">{{ $collection['4'] }}</h4>
																	</a>
																</div>
																<div class="nftmax-collection__item"><a href="#">{{ $collection['5'] }} Item</a></div>
															</div>
														</div>
													</div>
												</div>
												@endforeach
												</div>
											</div>
											
											<div class="tab-pane fade" id="tab_6" role="tabpanel" aria-labelledby="nav-home-tab">
												<div class="row">
													<div class="col-12">
														<div class="nftmax-pptabs mg-btm-20">
															<div class="nftmax-pptabs__form">
																<form class="nftmax-header__form-inner nftmax-header__form-profile" action="#">
																	<button class="search-btn" type="submit"><img src="img/search.png" alt="#"></button>
																	<input name="s" value="" type="text" placeholder="Search items, collections...">
																</form>
															</div>
														</div>	
													</div>
												</div>
												<div class="nftmax-table">
													<div class="nftmax-table__heading">
														<h3 class="nftmax-table__title mb-0">Products History</h3>
														<ul class="nav nav-tabs  nftmax-dropdown__list" id="nav-tab" role="tablist">
															<li class="nav-item dropdown ">
																<a class="nftmax-sidebar_btn nftmax-heading__tabs nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">All Categories <span class="nftmax-table__arrow--icon"><svg width="13" height="6" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.7" d="M12.4124 0.247421C12.3327 0.169022 12.2379 0.106794 12.1335 0.0643287C12.0291 0.0218632 11.917 0 11.8039 0C11.6908 0 11.5787 0.0218632 11.4743 0.0643287C11.3699 0.106794 11.2751 0.169022 11.1954 0.247421L7.27012 4.07837C7.19045 4.15677 7.09566 4.219 6.99122 4.26146C6.88678 4.30393 6.77476 4.32579 6.66162 4.32579C6.54848 4.32579 6.43646 4.30393 6.33202 4.26146C6.22758 4.219 6.13279 4.15677 6.05312 4.07837L2.12785 0.247421C2.04818 0.169022 1.95338 0.106794 1.84895 0.0643287C1.74451 0.0218632 1.63249 0 1.51935 0C1.40621 0 1.29419 0.0218632 1.18975 0.0643287C1.08531 0.106794 0.990517 0.169022 0.910844 0.247421C0.751218 0.404141 0.661621 0.616141 0.661621 0.837119C0.661621 1.0581 0.751218 1.2701 0.910844 1.42682L4.84468 5.26613C5.32677 5.73605 5.98027 6 6.66162 6C7.34297 6 7.99647 5.73605 8.47856 5.26613L12.4124 1.42682C12.572 1.2701 12.6616 1.0581 12.6616 0.837119C12.6616 0.616141 12.572 0.404141 12.4124 0.247421Z" fill="#374557" fill-opacity="0.6"></path></svg></span></a>
															</li>
														</ul>
													</div>
													<!-- NFTMax Table -->
													<table id="nftmax-table__main" class="nftmax-table__main nftmax-table__profile-activity">
														<!-- NFTMax Table Head -->
														<thead class="nftmax-table__head">
															<tr>
																<th class="nftmax-table__column-1 nftmax-table__h1">List</th>
																<th class="nftmax-table__column-2 nftmax-table__h2">Products Name</th>
																<th class="nftmax-table__column-3 nftmax-table__h2">Price</th>
																<th class="nftmax-table__column-4 nftmax-table__h3">Quanitiy</th>
																<th class="nftmax-table__column-5 nftmax-table__h4">From</th>
																<th class="nftmax-table__column-6 nftmax-table__h5">To</th>
																<th class="nftmax-table__column-7 nftmax-table__h6">Time</th>
															</tr>
														</thead>
														<!-- NFTMax Table Body -->
														<tbody class="nftmax-table__body">
														<?php $i=1;?>
															@foreach($Activity as $Activity)
															<tr>
																<td class="nftmax-table__column-1 nftmax-table__data-1">
																	<span class="nftmax-table__text"><b>{{$i++}}</b></span>
																</td>
																<td class="nftmax-table__column-2 nftmax-table__data-2">
																	<div class="nftmax-table__product">
																		<div class="nftmax-table__product-img">
																			<img src="{{ asset($Activity[0]) }}" alt="#">
																		</div>
																		<div class="nftmax-table__product-content">
																			<h4 class="nftmax-table__product-title">{{ $Activity['1'] }}</h4>
																			<p class="nftmax-table__product-desc">Owned by  <a href="#">{{$Activity['2']}}</a></p>
																		</div>
																	</div>
																</td>
																<td class="nftmax-table__column-3 nftmax-table__data-3">
																	<div class="nftmax-table__amount nftmax-table__text-two">
																		<img src="{{ asset($Activity[3]) }}" alt="#"><span class="nftmax-table__text">{{$Activity['4']}} $</span>
																	</div>
																</td>
																<td class="nftmax-table__column-4 nftmax-table__data-4">
																	<p class="nftmax-table__text nftmax-table__bid-text">{{$Activity['5']}}</p>
																</td>
																<td class="nftmax-table__column-5 nftmax-table__data-5">
																	<p class="nftmax-table__text nftmax-table__bid-text"><a href="#">{{$Activity['6']}}</a></p>
																</td>
																<td class="nftmax-table__column-6 nftmax-table__data-6">
																	<p class="nftmax-table__text nftmax-table__time">you</p>
																</td>
																<td class="nftmax-table__column-7 nftmax-table__data-7">
																	<p class="nftmax-table__time">{{$Activity['7']}}</p>
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
								<!-- End Dashboard Inner -->
							</div>
						</div>
@include('Layout.RightSidebar')
@include('Layout.Footer')                       