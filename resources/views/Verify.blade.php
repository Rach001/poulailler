@extends('Layout.LoginRegisterLayout')
@section('base')

<div class="col-lg-6 col-lg-6 offset-lg-0 col-md-10 offset-md-1 col-12">
							<!-- Welcome Form -->
							<div class="nftmax-wc__form">
								<div class="nftmax-wc__form-inner">
									<div class="nftmax-wc__heading">
										<h3 class="nftmax-wc__form-title nftmax-wc__form-title__four" style="background-image:url('assets/img/heading-vector-4.png')">Verificaiton Code</h3>
									</div>
									<!-- Sign in Form -->
									<form class="nftmax-wc__form-main" action="{{url('/verification')}}" method="post">
										@csrf
										<div class="form-group">
											<ul class="nftmax-wc__form-verify">
												<input class="nftmax-wc__form-input" type="text" name="text" placeholder="9" required="required">
												<input class="nftmax-wc__form-input" type="text" name="text" placeholder="4" required="required">
												<input class="nftmax-wc__form-input" type="text" name="text" placeholder="6" required="required">
												<input class="nftmax-wc__form-input" type="text" name="text" placeholder="7" required="required">
												<input class="nftmax-wc__form-input" type="text" name="text" placeholder="3" required="required">
												<input class="nftmax-wc__form-input" type="text" name="text" placeholder="1" required="required">
											</ul>
										</div>
										<div class="form-group">
											<div class="nftmax-wc__button">
												<button class="ntfmax-wc__btn" type="submit">Continue</button>
											</div>
										</div>
										<div class="form-group">
											<div class="nftmax-wc__bottom">
												<p class="nftmax-wc__text">I dont’t recived a code ? <a href="#">Please resend</a></p>
											</div>
										</div>
									</form>	
									<!-- End Sign in Form -->
								</div>
							</div>
							<!-- End Welcome Form -->
						</div>
@endsection                         