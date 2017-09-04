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
								<td>PrEP Advisory: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat adipisci tenetur doloribus vero. SEND YES to 3104 to subscribe.</td>
								<td><abbr title="+123456780">PrEPSMS</abbr></td>
								<td><a href="#">+100-3018-203</a></td>
								<td><abbr title="HIV Awareness long title put them here"><b>HIV Awareness</b></abbr></td>
								<td>08/22/2017 11:30AM</td> 
							</tr>
							<tr>
								<td>PrEP Advisory: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat adipisci tenetur doloribus vero. SEND YES to 3104 to subscribe.</td>
								<td><abbr title="+123456780">PrEPSMS</abbr></td>
								<td><a href="#">+100-3018-203</a></td>
								<td><abbr title="HIV Awareness long title put them here"><b>HIV Awareness</b></abbr></td>
								<td>08/22/2017 11:30AM</td> 
							</tr>
							<tr>
								<td>PrEP Advisory: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde amet, perspiciatis, modi sunt. Please visit www.google.com.</td>
								<td><abbr title="+123456780">PrEPSMS</abbr></td>
								<td><a href="#">+100-3018-203</a></td>
								<td><abbr title="HIV Awareness long title put them here"><b>HIV Awareness</b></abbr></td>
								<td>08/22/2017 11:30AM</td> 
							</tr>
							<tr>
								<td>PrEP Advisory: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat adipisci tenetur doloribus vero. SEND YES to 3104 to subscribe.</td>
								<td><abbr title="+123456780">PrEPSMS</abbr></td>
								<td><a href="#">+100-3018-203</a></td>
								<td><abbr title="HIV Awareness long title put them here"><b>HIV Awareness</b></abbr></td>
								<td>08/22/2017 11:30AM</td> 
							</tr>
							<tr>
								<td>PrEP Advisory: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat adipisci tenetur doloribus vero. SEND YES to 3104 to subscribe.</td>
								<td><abbr title="+123456780">PrEPSMS</abbr></td>
								<td><a href="#">+100-3018-203</a></td>
								<td><abbr title="HIV Awareness long title put them here"><b>HIV Awareness</b></abbr></td>
								<td>08/22/2017 11:30AM</td> 
							</tr>
							<tr>
								<td>PrEP Advisory: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat adipisci tenetur doloribus vero. SEND YES to 3104 to subscribe.</td>
								<td><abbr title="+123456780">PrEPSMS</abbr></td>
								<td><a href="#">+100-3018-203</a></td>
								<td><abbr title="HIV Awareness long title put them here"><b>HIV Awareness</b></abbr></td>
								<td>08/22/2017 11:30AM</td> 
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