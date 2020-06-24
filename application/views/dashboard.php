<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
							
						</div>
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-lg-12">							
							<form id="insertData" method="post" action="<?php echo base_url('api/item');?>">
							<div class="row">	
								<div class="col-lg-3">
									<div class="form-group">
										<div class="cal-icon">
										<input class="form-control" type="text" id="partner_name" name="partner_name" placeholder="Partner Name : A,B,C">
										</div>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<div class="cal-icon">
										<button class="btn btn-primary" type="submit" >Call Api</button>
										</div>
									</div>
								</div>
							</div>	
								</form>
							
							<div class="row">
								<div class="col-lg-3">
									<div class="form-group">
										<div class="cal-icon"><input class="form-control" type="text" placeholder="Date Filter" id="datetimepicker2" name="min" onchange="getnotification(this.value)"></div>
									</div>
								</div>
								
							</div>
							
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
									<div class="dash-widget-info" id="total">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><b>Total request served based on partner</b></span>
									<div class="dash-widget-info" id="resut">
										
									</div>
								</div>
							</div>
						</div>						
					</div>
            </div>
			
			
			
        </div>
		

    	
