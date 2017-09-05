@extends('layouts.master')

@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="./messages.html">Messages</a></li>  
	<li class="breadcrumb-item">Create Message</li>  

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
				<div class="card message-card message-send">
					<div class="card-header bg-primary">
						<i class="fa fa-envelope"></i> Create Keyword
							</div>
							<div class="preview"> 
								<div class="form-group row">
									<label class="col-md-3 form-control-label lead" for="campaign-select"><b><i class="fa fa-flag"></i> Title</b></label>
									<div class="col-md-9">
										<input type = "text" name = "title" class ="form-control">
									</div>
								</div>  
								<div class="form-group row">
									<label class="col-md-3 form-control-label lead" for="campaign-select"><b><i class="fa fa-barcode"></i> Code</b></label>
									<div class="col-md-9">
										<input type = "text" name = "code" class ="form-control">
									</div>
								</div>  
								<div class="form-group">
									<label class="form-control-label lead" for="campaign-select"><b><i class="fa fa-bars"></i> Description</b></label>
										<textarea name = "description" class ="form-control"></textarea>
								</div>  
								<button type = "submit" class = "btn btn-primary pull-right">Create Keyword</button>
							</div> 
						</div>
					</div>
				</div>


				<!--/.row-->





				<!--/.row-->
			</div>


		</div>
		@endsection

