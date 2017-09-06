@extends('layouts.master')

@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item">Messages</li>  

	<!-- Breadcrumb Menu-->
	<li class="breadcrumb-menu d-md-down-none">
		<div class="btn-group" role="group" aria-label="Button group">
			<!-- <a class="btn" href="#"><i class="icon-speech"></i></a> -->
			<!-- <a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a> -->
			<a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
		</div>
	</li>
</ol>


<div class="container-fluid"> 
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-8"> 
				<div class="card message-card">
					<div class="card-header bg-primary">
						<i class="fa fa-envelope"></i> Messages
					</div>
					<div class="preview">
						<div class="row">
							<div class="col-xs-6 col-lg-8">
								<form action="" method="post" class="form-horizontal">
									<div class="form-group row">
										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-btn">
													<button type="button" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
												</span>
												<input type="text" id="search-messages" name="search-messages" class="form-control" placeholder="Search messages...">
											</div>
										</div>
									</div> 
								</form>
							</div>
							<div class="col-xs-6 col-lg-4"> 
								<select class="form-control" id="type">
									<option>All</option>
									<option>Outgoing</option> 
									<option>Incoming</option> 
								</select>
							</div>
						</div>
					</div>
					<table class="table table-striped message-table">
						<thead>
							<tr>
								<th width="50%"><i class="fa fa-commenting-o"></i> <b>Messages</b></th>
								<th><i class="fa fa-paper-plane-o"></i> Sender</th>
								<th><i class="fa fa-inbox"></i> Recipient</th>
								<th><i class="fa fa-users"></i> Campaign</th>
								<th class="text-right"><i class="fa fa-calendar"></i> Date Sent</th> 
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Tropical Storm Harvey Intermediate Advisory Number 31A
								NWS National Hurricane Center Miami FL       AL092017
								100 AM CDT Mon Aug 28 2017

								...LIFE-THREATENING FLOODING CONTINUES OVER SOUTHEASTERN TEXAS...
								...DO NOT ATTEMPT TO TRAVEL IN THE AFFECTED AREAS IF YOU ARE IN
								A SAFE PLACE AND DO NOT DRIVE INTO FLOODED ROADWAYS
								Text INFO to 8383 for more information

								</td>
								<td><abbr title="+123456780">PrEPSMS</abbr></td>
								<td><a href="/messages/list"> +1289303493 </a></td>
								<td><abbr title="+123456780"><b>Storm Harvey Advisory</b></abbr></td>
								<td>08/28/2017 01:30AM</td> 
							</tr>
							<tr>
								<td>ropical Storm Harvey Intermediate Advisory Number 27A
								NWS National Hurricane Center Miami FL       AL092017
								100 AM CDT Sun Aug 27 2017

								...HARVEY SLOWLY WEAKENING AS IT MOVES LITTLE...
								...CONTINUES TO PRODUCE EXTREMELY HEAVY RAINS...
								Text INFO to 8383 for more information
								</td>
								<td><abbr title="+123456780">PrEPSMS</abbr></td>
								<td><a href="/messages/list"> +1289303493 </a></td>
								<td><abbr title="+123456780"><b>Storm Harvey Advisory</b></abbr></td>
								<td>08/27/2017 3:30AM</td> 
							</tr>
							<tr>
								<td>Hurricane Harvey Intermediate Advisory Number 23A
								NWS National Hurricane Center Miami FL       AL092017
								100 AM CDT Sat Aug 26 2017

								...HARVEY MAKES A SECOND LANDFALL ON THE NORTHEASTERN SHORE OF
								COPANO BAY...
								Text INFO to 8383 for more information
								</td>
								<td><abbr title="+123456780">PrEPSMS</abbr></td>
								<td><a href="/messages/list"> +1289303493 </a></td>
								<td><abbr title="+123456780"><b>Storm Harvey Advisory</b></abbr></td>
								<td>08/26/2017 10:30AM</td> 
							</tr>
							<tr>
								<td>Hurricane Harvey Intermediate Advisory Number 19A
								NWS National Hurricane Center Miami FL       AL092017
								100 AM CDT Fri Aug 25 2017

								...DANGEROUS HURRICANE HARVEY STRENGTHENING...
								...WINDS REACH 105 MPH...
								Text INFO to 8383 for more information
								</td>
								<td><abbr title="+123456780">PrEPSMS</abbr></td>
								<td><a href="/messages/list"> +1289303493 </a></td>
								<td><abbr title="+123456780"><b>Storm Harvey Advisory</b></abbr></td>
								<td>08/25/2017 08:30PM</td> 
							</tr>
							<tr>
								<td>Tropical Storm Harvey Intermediate Advisory Number 14A
								NWS National Hurricane Center Miami FL       AL092017
								100 AM CDT Thu Aug 24 2017

								...AIR FORCE AND NOAA PLANES FIND HARVEY A LITTLE STRONGER...
								Text INFO to 8383 for more information

								</td>
								<td><abbr title="+123456780">PrEPSMS</abbr></td>
								<td><a href="/messages/list"> +1289303493 </a></td>
								<td><abbr title="+123456780"><b>Storm Harvey Advisory</b></abbr></td>
								<td>08/24/2017 6:30AM</td> 
							</tr>
							<tr>
								<td>Tropical Depression Harvey Advisory Number  12
								NWS National Hurricane Center Miami FL       AL092017
								1000 AM CDT Wed Aug 23 2017

								...HARVEY REGENERATES INTO A TROPICAL DEPRESSION...
								...HURRICANE AND STORM SURGE WATCHES ISSUED FOR PORTIONS OF THE
								TEXAS COAST...
								Text INFO to 8383 for more information
								</td>
								<td><abbr title="+123456780">PrEPSMS</abbr></td>
								<td><a href="/messages/list"> +1289303493 </a></td>
								<td><abbr title="+123456780"><b>Storm Harvey Advisory</b></abbr></td>
								<td>08/23/2017 2:00PM</td> 
							</tr>
						</tbody>
					</table>
					<div class="card-body">
						<ul class="pagination">
							<li class="page-item"><a class="page-link" href="#">Prev</a>
							</li>
							<li class="page-item active">
								<a class="page-link" href="#">1</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">2</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">3</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">4</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">Next</a>
							</li>
						</ul>
					</div>
					<div class="card-footer text-muted">
						You have sent a total of 5 messages to 450,00 recipients for this month.
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4">

				<div class="card">
					<div class="card-header">
						<b>Create Message</b>
					</div>
					<div class="card-body">
						<a href="/messages/create" class="btn btn-success btn-lg btn-block hidden-xs-down text-uppercase lead">Create Message</a><br>
					</div>
					<div class="card-footer">
						23,400 messages sent today.
					</div>
				</div>  
				<div class="card">
					<div class="card-header">
						<b>Incoming & Outgoing</b>
					</div>
					<div class="card-body">
						<div class="chart-wrapper" >
							<canvas id="canvas-11"></canvas>
						</div>
					</div>
					<div class="card-footer">
						Outgoing messages and incoming replies
					</div>
				</div>  
			</div>
		</div>


		<!--/.row-->





		<!--/.row-->
	</div>


</div>
@endsection

@section('script')
<script type="text/javascript">
	$(function(){
		var randomizer = function(){ return Math.round(Math.random()*50)};
		var lineChartData = {
			labels : ['February','March','April','May','June','July','August'],
			datasets : [
			{
				label: 'Outgoing Messages',
				backgroundColor : 'rgba(230,47,83,0.2)',
				borderColor : 'rgba(230,47,83,1)',
				pointBackgroundColor : 'rgba(230,47,83,1)',
				pointBorderColor : 'rgba(230,47,83,1)',
				data : [randomizer(),randomizer(),randomizer(),randomizer(),randomizer(),randomizer(),randomizer()]
			},
			{
				label: 'Incoming Replies',
				backgroundColor : 'rgba(61,188,110,0.2)',
				borderColor : 'rgba(61,188,110,1)',
				pointBackgroundColor : 'rgba(61,188,110,1)',
				pointBorderColor : 'rgba(61,188,110,1)',
				data : [randomizer(),randomizer(),randomizer(),randomizer(),randomizer(),randomizer(),randomizer()]
			}
			]
		}

		var ctx = document.getElementById('canvas-11');
		var chart = new Chart(ctx, {
			type: 'line',
			pointStyle: 'dash',
			data: lineChartData,
			options: {
				responsive: true
			}
		});   
	});
</script>
@endsection