@extends('Layout.LoginRegisterLayout')
@section('base')
<div class="col-lg-6 col-lg-6 offset-lg-0 col-md-10 offset-md-1 col-12">
							<!-- Welcome Form -->
							<div class="nftmax-wc__form">
								<div class="nftmax-wc__form-inner nftmax-wc__form-password bg-mask-img" style="background-image:url('assets/img/mask-group-bg.png')">
									<div class="nftmax-wc__heading">
										<h3 class="nftmax-wc__form-title">Password Updated</h3>
									</div>
									<!-- Sign in Form -->
									<form class="nftmax-wc__form-main" action="#" method="post">
										<div class="form-group">
											<div class="nftmax-wc__middle-update">
												<div class="nftmax-wc__update">
													<img src="img/sign-icon.png" alt="#">
												</div>
												<div class="nftmax-wc__update-contnet">
													<h2 class="nftmax-wc__update-contnet-title">Thanks You !</h2>
													<p class="nftmax-wc__update-contnet-text">Your password has been updated</p>
												</div>
											</div>
											<div class="nftmax-wc__button nftmax-wc__button-forget">
												<button class="ntfmax-wc__btn" type="submit">Back to Login</button>
											</div>
										</div>
									</form>	
									<!-- End Sign in Form -->
								</div>
							</div>
							<!-- End Welcome Form -->
						</div>
@endsection