<!--begin::Toolbar-->
<div class="toolbar py-2" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex align-items-center">
		<!--begin::Page title-->
		<div class="flex-grow-1 flex-shrink-0 me-5">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Credit & Debit</h1>
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
					<li class="breadcrumb-item text-muted">Creadit</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-200 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">Debit</li>
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
			<!--card::title-->
			<div class="card-header">
		        <h3 class="card-title"></h3>
		        <div class="card-toolbar">
		            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_credit_amount"><i class="bi bi-file-earmark-plus-fill fs-2 text-light"></i> Credit Amount</button>
		        </div>
		    </div>
			<!--card::endTitle-->
			<!--begin::Card body-->
			<div class="card-body p-0 pb-0">
				<!--begin::Wrapper-->
				<div class="card-px text-center py-10">
					<div class="row">
						<div class="col-md-12 table-responsive">
							<table id="example" class="table table-striped dt-responsive pt-5" style="width:100%;border: none;">
    						    <thead style="background-color: #f0f0f0;">
            						<tr>
            						    <th style="border-bottom: none;padding-left: 10px;">S.No</th>
            						    <th style="border-bottom: none;" class="text-start">Company Name</th>
            						    <th style="border-bottom: none;" class="text-start">Balance Amount</th>
            						    <th style="border-bottom: none;" class="text-start">Credit Amount</th>
            						    <th style="border-bottom: none;" class="text-start">Credit Date</th>
            						    <th style="border-bottom: none;" class="text-start">Action</th>            						    
            						</tr>
    						    </thead>
    						    <tbody>
            						<tr>
            						    <td style="vertical-align: middle;padding-left: 15px;" class="text-start">1</td>
            						    <td style="vertical-align: middle;" class="text-start ps-5">Thekkekara</td>
            						    <td style="vertical-align: middle;" class="text-start ps-5"><strong class="text-danger">30000</strong></td>
            						    <td style="vertical-align: middle;" class="text-start ps-5"><strong class="text-success">20000</strong></td>
            						    <td style="vertical-align: middle;" class="text-start ps-5">07-02-2022</td>
 										<td style="vertical-align: middle;display: block ruby;" class="text-center">
		            						<button class="btn btn-sm btn-light mx-2" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_credit_amount"><i class="bi bi-pencil-fill text-primary"></i></button>
		            						<button class="btn btn-sm btn-light mx-2"><i class="bi bi-trash-fill text-danger"></i></button>
		            					</td>
            						</tr>
    							</tbody>
    						</table>
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

<!--New Customer Modal-->
<div class="modal fade" tabindex="-1" id="kt_modal_credit_amount">
	<div class="modal-dialog">
	    <div class="modal-content">
	        <div class="modal-header">
	            <h5 class="modal-title">Credit Amount</h5>

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
			   						<label for="credit_name" class="form-label">Select Customer</label>
					               	<select class="form-select form-select-solid" name="credit_name">
					               		<option value="company 1">company 1</option>
					               		<option value="company 2">company 2</option>
					               		<option value="company 3">company 3</option>
					               	</select>	               	
								</div>
			   				</div>	
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="meter2-diesel" class="form-label">Amount</label>
									<input type="text" name="credit_amount" placeholder="Enter amount" class="form-control form-control-solid" required>
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
<!--end::new customer modal-->

<!--edit New Customer Modal-->
<div class="modal fade" tabindex="-1" id="kt_modal_edit_credit_amount">
	<div class="modal-dialog">
	    <div class="modal-content">
	        <div class="modal-header">
	            <h5 class="modal-title">Update Credit Amount</h5>

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
			   						<label for="meter1-diesel" class="form-label">Select Customer</label>
					               	<select class="form-select form-select-solid" name="credit_name">
					               		<option value="company 1" selected>company 1</option>
					               		<option value="company 2">company 2</option>
					               		<option value="company 3">company 3</option>
					               	</select>	               	
								</div>
			   				</div>	
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="meter2-diesel" class="form-label">Amount</label>
									<input type="text" name="credit_amount" value="1000" class="form-control form-control-solid" required>
					        	</div>
					        </div>			 
					        <div class="col-md-12 py-5">
					        	<div class="mb-5 text-end">
									<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
					        		<button type="submit" class="btn btn-primary">Update</button>		
					        	</div>
					        </div>
	           			</div>
	           		</form>
	           </div>	
	        </div>
	    </div>
	</div>
</div>
<!--end::edit new customer modal-->