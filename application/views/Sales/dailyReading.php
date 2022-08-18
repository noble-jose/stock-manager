<!--begin::Toolbar-->
<div class="toolbar py-2" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex align-items-center">
		<!--begin::Page title-->
		<div class="flex-grow-1 flex-shrink-0 me-5">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Daily Reading</h1>
				<!--end::Title-->
				<!--begin::Separator-->
				<span class="h-20px border-gray-200 border-start mx-3"></span>
				<!--end::Separator-->
				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">
						<a href="javascript:void(0)" class="text-muted text-hover-primary">Home</a>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-200 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">Daily Reading</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-200 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">Details</li>
					<!--end::Item-->
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title-->
		</div>
		<!--end::Page title-->
	</div>
	<!--end::Container-->
</div>
<!--end::Toolbar-->

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Container-->
	<div id="kt_content_container" class="container">
		<!--begin::Card-->
		<div class="card">
			<!--begin::Card body-->
			<div class="card-body p-0 pb-0">
				<!--begin::Wrapper-->
				<div class="card-px text-center py-10 my-10">
					<div class="row">
						<div class="col-md-4">
							<a href="javascript:void(0)" class="reading-cards">
								<div class="card" data-bs-toggle="modal" data-bs-target="#kt_modal_hsd">
								  <div class="img-circle bg-light-success">
								  		<img src="assets/images/icons/fuel-pump(1).png" class="card-img-top card-img-reading" alt="hsd-image">
								  </div>
								  <div class="card-body">
								    <p class="card-text" style="color:#ffffff;background-color: #036103b5;">HSD</p>
								  </div>
								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="javascript:void(0)" class="reading-cards">
								<div class="card" data-bs-toggle="modal" data-bs-target="#kt_modal_ms">
									<div class="img-circle bg-light-primary">
										  <img src="assets/images/icons/fuel-pump(1).png" class="card-img-top card-img-reading" alt="hsd-image">
									</div>
								  <div class="card-body">
								    <p class="card-text" style="color:#ffffff;background-color: #05057ea1;">MS</p>
								  </div>
								</div>
							</a>							
						</div>
						<div class="col-md-4">
							<a href="javascript:void(0)" class="reading-cards">
								<div class="card" data-bs-toggle="modal" data-bs-target="#kt_modal_power">
									<div class="img-circle bg-light-warning">
										  <img src="assets/images/icons/fuel-pump(1).png" class="card-img-top card-img-reading" alt="hsd-image">
									</div>
								  <div class="card-body">
								    <p class="card-text" style="color:#ffffff;background-color: #ffa500b5;">POWER</p>
								  </div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!--end::Card body-->
		</div>
		<!--end::Card-->
	</div>
	<!--end::Container-->
</div>
<!--end::Content-->
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Container-->
	<div id="kt_content_container" class="container">
		<!--begin::Card-->
		<div class="card">
			<div class="card-header card-header-stretch">
		        <div class="card-toolbar">
		            <ul class="nav nav-pills fs-6 border-0 py-5">
					  <li class="nav-item">
					    <a class="nav-link border border-primary active" data-bs-toggle="tab" href="#kt_tab_pane_7">HSD</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link border border-primary" data-bs-toggle="tab" href="#kt_tab_pane_8">MS</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link border border-primary" data-bs-toggle="tab" href="#kt_tab_pane_9">Power</a>
					  </li>
					</ul>
		        </div>
		    </div>
			<!--begin::Card body-->
			<div class="card-body p-0 pb-0">
				<!--begin::Wrapper-->
				<div class="card-px text-center my-10">
			        <div class="tab-content" id="myTabContent">
			            <div class="tab-pane fade show active" id="kt_tab_pane_7" role="tabpanel">
							<div class="row">
								<div class="col-md-12 table-responsive">
									<table id="example" class="table table-striped dt-responsive pt-5" style="width:100%;border: none;">
		    						    <thead style="background-color: #f0f0f0;">
		            						<tr>
		            						    <th style="border-bottom: none;padding-left: 10px;">S.No</th>
		            						    <th style="border-bottom: none;" class="text-start">Meter Name</th>
		            						    <th style="border-bottom: none;" class="text-start">Day & Time</th>
		            						    <th style="border-bottom: none;" class="text-start">Reader Name</th>
		            						    <th style="border-bottom: none;" class="text-start">Meter 1 (D)</th>
		              						    <th style="border-bottom: none;" class="text-start">Meter 2 (D)</th>
		              						    <th style="border-bottom: none;" class="text-start">Meter 2 (P)</th>
		              						    <th style="border-bottom: none;" class="text-start">Total Amount</th>
		            						    <th style="border-bottom: none;">Action</th>
		            						</tr>
		    						    </thead>
		    						    <tbody>
		            						<tr>
		            						    <td style="vertical-align: middle;padding-left: 15px;" class="text-start">1</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5">HSD</td>
		               						    <td style="vertical-align: middle;" class="text-start ps-5">01-12-21 <br> 7:00 AM</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5">Employee 1</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-tint text-primary"></i> 2000 Ltr.</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-tint text-primary"></i> 5000 Ltr.</td> 
		            						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-tint text-primary"></i> 5000 Ltr.</td>
		              						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-rupee-sign text-success"></i> 400000</td>
		            						    <td style="vertical-align: middle;display: block ruby;" class="text-center">
		            								<button class="btn btn-sm btn-light mx-2" data-bs-toggle="modal" data-bs-target="#kt_modal_edithsd"><i class="bi bi-pencil-fill text-primary"></i></button><button class="btn btn-sm btn-light mx-2"><i class="bi bi-trash-fill text-danger"></i></button>
		            							</td>
		            						</tr>
		            						<tr>
		            						    <td style="vertical-align: middle;padding-left: 15px;" class="text-start">2</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5">HSD</td>
		               						    <td style="vertical-align: middle;" class="text-start ps-5">01-12-21 <br> 6:00 PM</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5">Employee 2</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-tint text-primary"></i> 2000 Ltr.</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-tint text-primary"></i> 5000 Ltr.</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-tint text-primary"></i> 5000 Ltr.</td>
		              						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-rupee-sign text-success"></i> 400000</td>
		            						    <td style="vertical-align: middle;display: block ruby;" class="text-center">
		            								<button class="btn btn-sm btn-light mx-2" data-bs-toggle="modal" data-bs-target="#kt_modal_edithsd"><i class="bi bi-pencil-fill text-primary"></i></button><button class="btn btn-sm btn-light mx-2"><i class="bi bi-trash-fill text-danger"></i></button>
		            							</td>
		            						</tr>
		    							</tbody>
		    						</table>
								</div>
							</div>
			            </div>

			            <div class="tab-pane fade" id="kt_tab_pane_8" role="tabpanel">
							<div class="row">
								<div class="col-md-12 table-responsive">
									<table id="example" class="table table-striped dt-responsive pt-5" style="width:100%;border: none;">
		    						    <thead style="background-color: #f0f0f0;">
		            						<tr>
		            						    <th style="border-bottom: none;padding-left: 10px;">S.No</th>
		            						    <th style="border-bottom: none;" class="text-start">Meter Name</th>
		            						    <th style="border-bottom: none;" class="text-start">Day & Time</th>
		            						    <th style="border-bottom: none;" class="text-start">Reader Name</th>
		            						    <th style="border-bottom: none;" class="text-start">Meter 1 (D)</th>
		              						    <th style="border-bottom: none;" class="text-start">Meter 2 (D)</th>
		              						    <th style="border-bottom: none;" class="text-start">Meter 2 (P)</th>
		              						    <th style="border-bottom: none;" class="text-start">Total Amount</th>
		            						    <th style="border-bottom: none;">Action</th>
		            						</tr>
		    						    </thead>
		    						    <tbody>
		            						<tr>
		            						    <td style="vertical-align: middle;padding-left: 15px;" class="text-start">1</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5">MS</td>
		               						    <td style="vertical-align: middle;" class="text-start ps-5">01-12-21 <br> 7:00 AM</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5">Employee 1</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-tint text-primary"></i> 2000 Ltr.</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-tint text-primary"></i> 5000 Ltr.</td> 
		            						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-tint text-primary"></i> 5000 Ltr.</td>
		              						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-rupee-sign text-success"></i> 400000</td>
		            						    <td style="vertical-align: middle;display: block ruby;" class="text-center">
		            								<button class="btn btn-sm btn-light mx-2" data-bs-toggle="modal" data-bs-target="#kt_modal_editms"><i class="bi bi-pencil-fill text-primary"></i></button><button class="btn btn-sm btn-light mx-2"><i class="bi bi-trash-fill text-danger"></i></button>
		            							</td>
		            						</tr>
		            						<tr>
		            						    <td style="vertical-align: middle;padding-left: 15px;" class="text-start">2</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5">MS</td>
		               						    <td style="vertical-align: middle;" class="text-start ps-5">01-12-21 <br> 6:00 PM</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5">Employee 2</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-tint text-primary"></i> 2000 Ltr.</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-tint text-primary"></i> 5000 Ltr.</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-tint text-primary"></i> 5000 Ltr.</td>
		              						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-rupee-sign text-success"></i> 400000</td>
		            						    <td style="vertical-align: middle;display: block ruby;" class="text-center">
		            								<button class="btn btn-sm btn-light mx-2" data-bs-toggle="modal" data-bs-target="#kt_modal_editms"><i class="bi bi-pencil-fill text-primary"></i></button><button class="btn btn-sm btn-light mx-2"><i class="bi bi-trash-fill text-danger"></i></button>
		            							</td>
		            						</tr>
		    							</tbody>
		    						</table>
								</div>
							</div>
			            </div>

			            <div class="tab-pane fade" id="kt_tab_pane_9" role="tabpanel">
							<div class="row">
								<div class="col-md-12 table-responsive">
									<table id="example" class="table table-striped dt-responsive pt-5" style="width:100%;border: none;">
		    						    <thead style="background-color: #f0f0f0;">
		            						<tr>
		            						    <th style="border-bottom: none;padding-left: 10px;">S.No</th>
		            						    <th style="border-bottom: none;" class="text-start">Meter Name</th>
		            						    <th style="border-bottom: none;" class="text-start">Day & Time</th>
		            						    <th style="border-bottom: none;" class="text-start">Reader Name</th>
		            						    <th style="border-bottom: none;" class="text-start">Meter 1 (D)</th>
		              						    <th style="border-bottom: none;" class="text-start">Meter 2 (D)</th>
		              						    <th style="border-bottom: none;" class="text-start">Meter 2 (P)</th>
		              						    <th style="border-bottom: none;" class="text-start">Total Amount</th>
		            						    <th style="border-bottom: none;">Action</th>
		            						</tr>
		    						    </thead>
		    						    <tbody>
		            						<tr>
		            						    <td style="vertical-align: middle;padding-left: 15px;" class="text-start">1</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5">Power</td>
		               						    <td style="vertical-align: middle;" class="text-start ps-5">01-12-21 <br> 7:00 AM</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5">Employee 1</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-tint text-primary"></i> 2000 Ltr.</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-tint text-primary"></i> 5000 Ltr.</td> 
		            						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-tint text-primary"></i> 5000 Ltr.</td>
		              						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-rupee-sign text-success"></i> 400000</td>
		            						    <td style="vertical-align: middle;display: block ruby;" class="text-center">
		            								<button class="btn btn-sm btn-light mx-2" data-bs-toggle="modal" data-bs-target="#kt_modal_editpower"><i class="bi bi-pencil-fill text-primary"></i></button><button class="btn btn-sm btn-light mx-2"><i class="bi bi-trash-fill text-danger"></i></button>
		            							</td>
		            						</tr>
		            						<tr>
		            						    <td style="vertical-align: middle;padding-left: 15px;" class="text-start">2</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5">Power</td>
		               						    <td style="vertical-align: middle;" class="text-start ps-5">01-12-21 <br> 6:00 PM</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5">Employee 2</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-tint text-primary"></i> 2000 Ltr.</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-tint text-primary"></i> 5000 Ltr.</td>
		            						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-tint text-primary"></i> 5000 Ltr.</td>
		              						    <td style="vertical-align: middle;" class="text-start ps-5"><i class="fas fa-rupee-sign text-success"></i> 400000</td>
		            						    <td style="vertical-align: middle;display: block ruby;" class="text-center">
		            								<button class="btn btn-sm btn-light mx-2" data-bs-toggle="modal" data-bs-target="#kt_modal_editpower"><i class="bi bi-pencil-fill text-primary"></i></button><button class="btn btn-sm btn-light mx-2"><i class="bi bi-trash-fill text-danger"></i></button>
		            							</td>
		            						</tr>
		    							</tbody>
		    						</table>
								</div>
							</div>
			            </div>
			        </div>
				</div>
			</div>
			<!--end::Card body-->
		</div>
		<!--end::Card-->
	</div>
	<!--end::Container-->
</div>
<!--end::Content-->
<!--HSD Reading Modal-->
<div class="modal fade" tabindex="-1" id="kt_modal_hsd">
	<div class="modal-dialog">
	    <div class="modal-content">
	        <div class="modal-header">
	            <h5 class="modal-title">HSD Reading</h5>

			    <!--begin::Close-->
			    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
			    	<i class="bi bi-x text-dark" style="font-size: 30px !important;"></i>
			    </div>
			    <!--end::Close-->
			</div>

			<div class="modal-body">
			   <div class="row">
			   		<form class="hsd_reading_modal" action="" method="post" enctype="multipart/form-data">
			   			<div class="row">
			   				<div class="col-md-12">
			   					<div class="mb-5">
			   						<label for="meter1-diesel" class="form-label">Meter 1 (Diesel)</label>
					               	<input type="text" name="meter1-d" placeholder="Total litter" class="form-control form-control-solid" required>	               	
								</div>
			   				</div>
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="meter2-diesel" class="form-label">Meter 2 (Diesel)</label>
					        		<input type="text" name="meter2-d" placeholder="Total litter" class="form-control form-control-solid" required> 
					        	</div>
					        </div>	
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="meter2-diesel" class="form-label">Meter 2 (Petrol)</label>
									<input type="text" name="meter2-p" placeholder="Total litter" class="form-control form-control-solid" required>
					        	</div>
					        </div>
					       	<div class="col-md-12">
					            <div class="mb-5">
					              	<label for="reader-name" class="form-label">Reader Name</label>
					              	<select class="form-select form-select-solid" name="readerName" required>
					              		<option value="employee 1" selected>Employee 1</option>
					              		<option value="employee 2">Employee 2</option>
					              		<option value="employee 3">Employee 3</option>
					              	</select>
					            </div>
					        </div>     
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="fuel-type" class="form-label">Oil</label>
									<input type="text" name="oilhsd" placeholder="Amount" class="form-control form-control-solid" required>
					        	</div>
					        </div>					 
					        <div class="col-md-12 py-5">
					        	<div class="mb-5 text-end">
									<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
					        		<button type="submit" class="btn btn-primary">Submit</button>		
					        	</div>
					        </div>
	           			</div>
	           		</form>
	           </div>	
	        </div>
	    </div>
	</div>
</div>
<!--end::hsd reading modal-->
<!--Edit HSD Reading Modal-->
<div class="modal fade" tabindex="-1" id="kt_modal_edithsd">
	<div class="modal-dialog">
	    <div class="modal-content">
	        <div class="modal-header">
	            <h5 class="modal-title">Edit HSD Reading</h5>

			    <!--begin::Close-->
			    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
			    	<i class="bi bi-x text-dark" style="font-size: 30px !important;"></i>
			    </div>
			    <!--end::Close-->
			</div>

			<div class="modal-body">
			   <div class="row">
			   		<form class="hsd_reading_modal" action="" method="post" enctype="multipart/form-data">
			   			<div class="row">
			   				<div class="col-md-12">
			   					<div class="mb-5">
			   						<label for="meter1-diesel" class="form-label">Meter 1 (Diesel)</label>
					               	<input type="text" name="meter1-d" placeholder="Total litter" class="form-control form-control-solid" value="200" required>	               	
								</div>
			   				</div>
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="meter2-diesel" class="form-label">Meter 2 (Diesel)</label>
					        		<input type="text" name="meter2-d" placeholder="Total litter" class="form-control form-control-solid" value="150" required> 
					        	</div>
					        </div>	
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="meter2-diesel" class="form-label">Meter 2 (Petrol)</label>
									<input type="text" name="meter2-p" placeholder="Total litter" class="form-control form-control-solid" value="200" required>
					        	</div>
					        </div>
					       	<div class="col-md-12">
					            <div class="mb-5">
					              	<label for="reader-name" class="form-label">Reader Name</label>
					              	<select class="form-select form-select-solid" name="readerName" required>
					              		<option value="employee 1" selected>Employee 1</option>
					              		<option value="employee 2">Employee 2</option>
					              		<option value="employee 3">Employee 3</option>
					              	</select>
					            </div>
					        </div>     
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="fuel-type" class="form-label">Oil</label>
									<input type="text" name="oilhsd" placeholder="Amount" class="form-control form-control-solid" value="300" required>
					        	</div>
					        </div>					 
					        <div class="col-md-12 py-5">
					        	<div class="mb-5 text-end">
									<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
					        		<button type="submit" class="btn btn-primary">Submit</button>		
					        	</div>
					        </div>
	           			</div>
	           		</form>
	           </div>	
	        </div>
	    </div>
	</div>
</div>
<!--end::edit hsd reading modal-->

<!--MS Reading Modal-->
<div class="modal fade" tabindex="-1" id="kt_modal_ms">
	<div class="modal-dialog">
	    <div class="modal-content">
	        <div class="modal-header">
	            <h5 class="modal-title">MS Reading</h5>

			    <!--begin::Close-->
			    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
			    	<i class="bi bi-x text-dark" style="font-size: 30px !important;"></i>
			    </div>
			    <!--end::Close-->
			</div>

			<div class="modal-body">
			   <div class="row">
			   		<form class="ms_reading_modal" action="" method="post" enctype="multipart/form-data">
			   			<div class="row">
			   				<div class="col-md-12">
			   					<div class="mb-5">
			   						<label for="meter1-petrol" class="form-label">Meter 1 (Petrol)</label>
					               	<input type="text" name="meter1-p" placeholder="Total litter" class="form-control form-control-solid" required>	               	
								</div>
			   				</div>
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="meter2-petrol" class="form-label">Meter 2 (Petrol)</label>
					        		<input type="text" name="meter2-p" placeholder="Total litter" class="form-control form-control-solid" required> 
					        	</div>
					        </div>	
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="meter2-diesel" class="form-label">Meter 2 (Diesel)</label>
									<input type="text" name="meter2-d" placeholder="Total litter" class="form-control form-control-solid" required>
					        	</div>
					        </div>
					       	<div class="col-md-12">
					            <div class="mb-5">
					              	<label for="reader-name" class="form-label">Reader Name</label>
					              	<select class="form-select form-select-solid" name="readerName" required>
					              		<option value="employee 1">Employee 1</option>
					              		<option value="employee 2" selected>Employee 2</option>
					              		<option value="employee 3">Employee 3</option>
					              	</select>
					            </div>
					        </div>     
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="fuel-type" class="form-label">Oil</label>
									<input type="text" name="oilhsd" placeholder="Amount" class="form-control form-control-solid" required>
					        	</div>
					        </div>					 
					        <div class="col-md-12 py-5">
					        	<div class="mb-5 text-end">
									<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
					        		<button type="submit" class="btn btn-primary">Submit</button>		
					        	</div>
					        </div>
	           			</div>
	           		</form>
	           </div>	
	        </div>
	    </div>
	</div>
</div>
<!--end::ms reading modal-->
<!--editMS Reading Modal-->
<div class="modal fade" tabindex="-1" id="kt_modal_editms">
	<div class="modal-dialog">
	    <div class="modal-content">
	        <div class="modal-header">
	            <h5 class="modal-title">Edit MS Reading</h5>

			    <!--begin::Close-->
			    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
			    	<i class="bi bi-x text-dark" style="font-size: 30px !important;"></i>
			    </div>
			    <!--end::Close-->
			</div>

			<div class="modal-body">
			   <div class="row">
			   		<form class="ms_reading_modal" action="" method="post" enctype="multipart/form-data">
			   			<div class="row">
			   				<div class="col-md-12">
			   					<div class="mb-5">
			   						<label for="meter1-petrol" class="form-label">Meter 1 (Petrol)</label>
					               	<input type="text" name="meter1-p" placeholder="Total litter" class="form-control form-control-solid" value="300" required>	               	
								</div>
			   				</div>
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="meter2-petrol" class="form-label">Meter 2 (Petrol)</label>
					        		<input type="text" name="meter2-p" placeholder="Total litter" class="form-control form-control-solid" value="200" required> 
					        	</div>
					        </div>	
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="meter2-diesel" class="form-label">Meter 2 (Diesel)</label>
									<input type="text" name="meter2-d" placeholder="Total litter" class="form-control form-control-solid" value="150" required>
					        	</div>
					        </div>
					       	<div class="col-md-12">
					            <div class="mb-5">
					              	<label for="reader-name" class="form-label">Reader Name</label>
					              	<select class="form-select form-select-solid" name="readerName" required>
					              		<option value="employee 1">Employee 1</option>
					              		<option value="employee 2" selected>Employee 2</option>
					              		<option value="employee 3">Employee 3</option>
					              	</select>
					            </div>
					        </div>     
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="fuel-type" class="form-label">Oil</label>
									<input type="text" name="oilhsd" placeholder="Amount" class="form-control form-control-solid" value="500" required>
					        	</div>
					        </div>					 
					        <div class="col-md-12 py-5">
					        	<div class="mb-5 text-end">
									<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
					        		<button type="submit" class="btn btn-primary">Submit</button>		
					        	</div>
					        </div>
	           			</div>
	           		</form>
	           </div>	
	        </div>
	    </div>
	</div>
</div>
<!--end::editms reading modal-->
<!--Power Reading Modal-->
<div class="modal fade" tabindex="-1" id="kt_modal_power">
	<div class="modal-dialog">
	    <div class="modal-content">
	        <div class="modal-header">
	            <h5 class="modal-title">Power Meter</h5>

			    <!--begin::Close-->
			    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
			    	<i class="bi bi-x text-dark" style="font-size: 30px !important;"></i>
			    </div>
			    <!--end::Close-->
			</div>

			<div class="modal-body">
			   <div class="row">
			   		<form class="hsd_reading_modal" action="" method="post" enctype="multipart/form-data">
			   			<div class="row">
			   				<div class="col-md-12">
			   					<div class="mb-5">
			   						<label for="power-diesel" class="form-label">Meter 1 (Diesel)</label>
					               	<input type="text" name="power-d" placeholder="Total litter" class="form-control form-control-solid" required>	               	
								</div>
			   				</div>
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="power-petrol" class="form-label">Meter 2 (Petrol)</label>
					        		<input type="text" name="power-p" placeholder="Total litter" class="form-control form-control-solid" required> 
					        	</div>
					        </div>		
					       	<div class="col-md-12">
					            <div class="mb-5">
					              	<label for="reader-name" class="form-label">Reader Name</label>
					              	<select class="form-select form-select-solid" name="readerName" required>
					              		<option value="employee 1">Employee 1</option>
					              		<option value="employee 2" selected>Employee 2</option>
					              		<option value="employee 3">Employee 3</option>
					              	</select>
					            </div>
					        </div>     
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="fuel-type" class="form-label">Oil</label>
									<input type="text" name="oilhsd" placeholder="Amount" class="form-control form-control-solid" required>
					        	</div>
					        </div>	 
					        <div class="col-md-12 py-5">
					        	<div class="mb-5 text-end">
									<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
					        		<button type="submit" class="btn btn-primary">Submit</button>		
					        	</div>
					        </div>
	           			</div>
	           		</form>
	           </div>	
	        </div>
	    </div>
	</div>
</div>
<!--end::power reading Modal-->
<!--Edit Power Reading Modal-->
<div class="modal fade" tabindex="-1" id="kt_modal_editpower">
	<div class="modal-dialog">
	    <div class="modal-content">
	        <div class="modal-header">
	            <h5 class="modal-title">Edit Power Meter</h5>

			    <!--begin::Close-->
			    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
			    	<i class="bi bi-x text-dark" style="font-size: 30px !important;"></i>
			    </div>
			    <!--end::Close-->
			</div>

			<div class="modal-body">
			   <div class="row">
			   		<form class="hsd_reading_modal" action="" method="post" enctype="multipart/form-data">
			   			<div class="row">
			   				<div class="col-md-12">
			   					<div class="mb-5">
			   						<label for="power-diesel" class="form-label">Meter 1 (Diesel)</label>
					               	<input type="text" name="power-d" placeholder="Total litter" class="form-control form-control-solid" value="200" required>	               	
								</div>
			   				</div>
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="power-petrol" class="form-label">Meter 2 (Petrol)</label>
					        		<input type="text" name="power-p" placeholder="Total litter" class="form-control form-control-solid" value="300" required> 
					        	</div>
					        </div>		
					       	<div class="col-md-12">
					            <div class="mb-5">
					              	<label for="reader-name" class="form-label">Reader Name</label>
					              	<select class="form-select form-select-solid" name="readerName" required>
					              		<option value="employee 1">Employee 1</option>
					              		<option value="employee 2" selected>Employee 2</option>
					              		<option value="employee 3">Employee 3</option>
					              	</select>
					            </div>
					        </div>     
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="fuel-type" class="form-label">Oil</label>
									<input type="text" name="oilhsd" placeholder="Amount" class="form-control form-control-solid" value="400" required>
					        	</div>
					        </div>	 
					        <div class="col-md-12 py-5">
					        	<div class="mb-5 text-end">
									<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
					        		<button type="submit" class="btn btn-primary">Submit</button>		
					        	</div>
					        </div>
	           			</div>
	           		</form>
	           </div>	
	        </div>
	    </div>
	</div>
</div>
<!--end::power reading Modal-->