<!-- Jquery JS -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery-migrate.js')}}"></script>
		<script src="{{asset('assets/js/popper.min.js')}}"></script>
		<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/js/slickslider.min.js')}}"></script>
		<script src="{{asset('assets/js/charts.js')}}"></script>
		<script src="{{asset('assets/js/countdown.min.js')}}"></script>
		<script src="{{asset('assets/js/final-countdown.min.js')}}"></script>
		<script src="{{asset('assets/js/circle-progress.min.js')}}"></script>
		<script src="{{asset('assets/js/main.js')}}"></script>
		<script>
		jQuery(document).ready(function($) {
			  $('[data-countdown]').each(function() {
				  var $this = $(this), finalDate = $(this).data('countdown');
				  $this.countdown(finalDate, function(event) {
					$this.html(event.strftime(' %H : %M : %S'));
				  });
			 });
		});
		</script>
       <script>
			const ctx_side_two = document.getElementById('myChart_Side_One').getContext('2d');
			var TotalSold    = @json($Statistics['TotalSold']);
			var TotalCancen  = @json($Statistics['TotalCancel']);
			var TotalPending = @json($Statistics['TotalPanding']);
			const dataSet = [TotalSold, TotalCancen, TotalPending]
			const myChart_Side_One = new Chart(ctx_side_two, {
				type: 'doughnut',
				
				data: {
					labels: [
						'Total Sold',
						'Total Cancel',
						'Total Planding'
					  ],
					  datasets: [{
						label: 'My First Dataset',
						data: dataSet,
						backgroundColor: [
						  '#5356FB',
						  '#F539F8',
						  '#FFC210',
						  '#E3E4FE'
						],
						hoverOffset: 2,
						borderWidth: 0,
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
						text: 'Sell History'
					  }
					}
				}
				
			});


			const ctx_side_two_weekly = document.getElementById('myChart_Side_One_weekly').getContext('2d');
			var TotalSold    = @json($Statistics_weekly['TotalSold']);
			var TotalCancen  = @json($Statistics_weekly['TotalCancel']);
			var TotalPending = @json($Statistics_weekly['TotalPanding']);
			const dataSet_weekly = [TotalSold, TotalCancen, TotalPending]
			const myChart_Side_One_weekly = new Chart(ctx_side_two_weekly, {
				type: 'doughnut',
				
				data: {
					labels: [
						'Total Sold',
						'Total Cancel',
						'Total Planding'
					  ],
					  datasets: [{
						label: 'My First Dataset',
						data: dataSet_weekly,
						backgroundColor: [
						  '#5356FB',
						  '#F539F8',
						  '#FFC210',
						  '#E3E4FE'
						],
						hoverOffset: 2,
						borderWidth: 0,
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
						text: 'Sell History'
					  }
					}
				}
				
			});

			const ctx_side_two_monthly = document.getElementById('myChart_Side_One_monthly').getContext('2d');
			var TotalSold    = @json($Statistics_monthly['TotalSold']);
			var TotalCancen  = @json($Statistics_monthly['TotalCancel']);
			var TotalPending = @json($Statistics_monthly['TotalPanding']);
			const dataSet_monthly = [TotalSold, TotalCancen, TotalPending]
			const myChart_Side_One_monthly = new Chart(ctx_side_two_monthly, {
				type: 'doughnut',
				
				data: {
					labels: [
						'Total Sold',
						'Total Cancel',
						'Total Planding'
					  ],
					  datasets: [{
						label: 'My First Dataset',
						data: dataSet_monthly,
						backgroundColor: [
						  '#5356FB',
						  '#F539F8',
						  '#FFC210',
						  '#E3E4FE'
						],
						hoverOffset: 2,
						borderWidth: 0,
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
						text: 'Sell History'
					  }
					}
				}
				
			});
			
			const ctx_side_three = document.getElementById('myChart_Side_Two').getContext('2d');
			var label = @json($transectionRate[0]);
			var data  = @json($transectionRate[1]);
			const myChart_Side_Two = new Chart(ctx_side_three, {
				type: 'line',
				
				data: {
					labels: label,
					datasets: [{
						label: 'Visitor',
						data: data,
						backgroundColor: '#D8D8FE',
						borderColor:'#5356FB',
						pointRadius: 3,
						pointBackgroundColor: '#5356FB',
						pointBorderColor: '#5356FB',
						borderWidth:4,
						tension: 0.9,
						fill:true,
						fillColor:'#fff',
						
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
			const ctx_side_three_BTC = document.getElementById('myChart_Side_Two_BTC').getContext('2d');
			var label = @json($transectionRateBTC[0]);
			var data  = @json($transectionRateBTC[1]);
			const myChart_Side_Two_BTC = new Chart(ctx_side_three_BTC, {
				type: 'line',
				
				data: {
					labels: label,
					datasets: [{
						label: 'Visitor',
						data: data,
						backgroundColor: '#D8D8FE',
						borderColor:'#5356FB',
						pointRadius: 3,
						pointBackgroundColor: '#5356FB',
						pointBorderColor: '#5356FB',
						borderWidth:4,
						tension: 0.9,
						fill:true,
						fillColor:'#fff',
						
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