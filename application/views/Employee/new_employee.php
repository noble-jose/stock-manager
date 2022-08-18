<!--begin::Toolbar-->
<div class="toolbar py-2" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex align-items-center">
		<!--begin::Page title-->
		<div class="flex-grow-1 flex-shrink-0 me-5">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">New Employee</h1>
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
					<li class="breadcrumb-item text-muted">Employee</li>
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
		<div class="card">
			<!--card::title-->
			<div class="card-header">
		        <h3 class="card-title"></h3>
		        <div class="card-toolbar">
		            <button type="button" class="btn btn-sm btn-primary text-light fs-5 mx-1" data-bs-toggle="modal" data-bs-target="#kt_modal_create_employee">
		                <i class="bi bi-person-plus-fill fs-2 text-light"></i>Employee
		            </button>
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
            						    <th style="border-bottom: none;" class="text-start">Employee Name</th>
            						    <th style="border-bottom: none;" class="text-start">Job Type</th>
            						    <th style="border-bottom: none;" class="text-start">Salary</th>
            						    <th style="border-bottom: none;" class="text-start">Shift</th>
              						    <th style="border-bottom: none;" class="text-start">Phone Number</th>
               						    <th style="border-bottom: none;" class="text-start">Join Date</th>
            						    <th style="border-bottom: none;">Action</th>
            						</tr>
    						    </thead>
    						    <tbody>
            						<tr>
            						    <td style="vertical-align: middle;padding-left: 15px;" class="text-start">1</td>
            						    <td style="vertical-align: middle;" class="text-start ps-5">John Doe</td>
            						    <td style="vertical-align: middle;" class="text-start ps-5">Full Time</td>
            						    <td style="vertical-align: middle;" class="text-start ps-5">500</td>
            						    <td style="vertical-align: middle;" class="text-start ps-5"><strong>Day</strong></td>
            						    <td style="vertical-align: middle;" class="text-success text-start ps-5"><strong>01-56882-0000</strong></td>
              						    <td style="vertical-align: middle;" class="text-start ps-5">01-11-2021</td>
            						    <td style="vertical-align: middle;display: block ruby;" class="text-center">
            								<button class="btn btn-sm btn-light mx-2" data-bs-toggle="modal" data-bs-target="#kt_modal_edit"><i class="bi bi-pencil-fill text-primary"></i></button> 
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
		<!--end::Card-->
	</div>
	<!--end::Container-->
</div>
<!--end::Content-->

<!--Add Employee Modal-->
<div class="modal fade" tabindex="-1" id="kt_modal_create_employee">
	<div class="modal-dialog" style="max-width: 700px;">
	    <div class="modal-content">
	        <div class="modal-header">
	            <h5 class="modal-title">Create New Employee</h5>

			    <!--begin::Close-->
			    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
			    	<i class="bi bi-x text-dark" style="font-size: 30px !important;"></i>
			    </div>
			    <!--end::Close-->
			</div>

			<div class="modal-body">
			   <div class="row">
			   		<form class="hpcard_add_modal" action="" method="post" enctype="multipart/form-data">
			   			<div class="row">
			   				<div class="col-md-6">
			   					<div class="mb-5">
			   						<label for="card_number" class="form-label">Employee Name</label>
					               	<input type="text" name="employee_name" class="form-control form-control-solid" placeholder="Jon Doe" required>
			   					</div>
			   				</div>
					        <div class="col-md-6">
					        	<div class="mb-5">
					        		<label for="card_holder_name" class="form-label">Job Type</label>
					               	<select class="form-select form-select-solid" name="job_type">
					               		<option value="full time" selected>Full Time</option>
					               		<option value="part time">Part Time</option>
					               	</select> 
					        	</div>
					        </div>	
					        <div class="col-md-6">
					        	<div class="mb-5">
					        		<label for="fuel_type" class="form-label">Salary</label>
									<input type="text" name="employee_salary" class="form-control form-control-solid" placeholder="ex : 500" required>
					        	</div>
					        </div>
					        <div class="col-md-6">
					        	<div class="mb-5">
					        		<label for="fuel_type" class="form-label">Shift</label>
					               	<select class="form-select form-select-solid" name="employee_shift">
					               		<option value="day" selected>Day</option>
					               		<option value="night">Night</option>
					               		<option value="evening">Evening</option>
					               	</select> 
					        	</div>
					        </div>
					       	<div class="col-md-6">
					            <div class="mb-5">
					              	<label for="ifsc" class="form-label">Phone</label>
					              	<input type="text" name="employee_phone" class="form-control form-control-solid" placeholder="ex : 01-52645-000" required>
					            </div>
					        </div>     
					        <div class="col-md-6 py-5">
					        	<div class="mb-0 mt-3 text-end">
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
<!--end::Add Employee Modal-->

<!--Add Employee Modal-->
<div class="modal fade" tabindex="-1" id="kt_modal_edit_employee">
	<div class="modal-dialog" style="max-width: 700px;">
	    <div class="modal-content">
	        <div class="modal-header">
	            <h5 class="modal-title">Edit Employee Details</h5>

			    <!--begin::Close-->
			    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
			    	<i class="bi bi-x text-dark" style="font-size: 30px !important;"></i>
			    </div>
			    <!--end::Close-->
			</div>

			<div class="modal-body">
			   <div class="row">
			   		<form class="hpcard_add_modal" action="" method="post" enctype="multipart/form-data">
			   			<div class="row">
			   				<div class="col-md-6">
			   					<div class="mb-5">
			   						<label for="card_number" class="form-label">Employee Name</label>
					               	<input type="text" name="employee_name" class="form-control form-control-solid" value="Jon Doe" required>
			   					</div>
			   				</div>
					        <div class="col-md-6">
					        	<div class="mb-5">
					        		<label for="card_holder_name" class="form-label">Job Type</label>
					               	<select class="form-select form-select-solid" name="job_type">
					               		<option value="full time" selected>Full Time</option>
					               		<option value="part time">Part Time</option>
					               	</select> 
					        	</div>
					        </div>	
					        <div class="col-md-6">
					        	<div class="mb-5">
					        		<label for="fuel_type" class="form-label">Salary</label>
									<input type="text" name="employee_salary" class="form-control form-control-solid" value="500" required>
					        	</div>
					        </div>
					        <div class="col-md-6">
					        	<div class="mb-5">
					        		<label for="fuel_type" class="form-label">Shift</label>
					               	<select class="form-select form-select-solid" name="employee_shift">
					               		<option value="day" selected>Day</option>
					               		<option value="night">Night</option>
					               		<option value="evening">Evening</option>
					               	</select> 
					        	</div>
					        </div>
					       	<div class="col-md-6">
					            <div class="mb-5">
					              	<label for="ifsc" class="form-label">Phone</label>
					              	<input type="text" name="employee_phone" class="form-control form-control-solid" value="01-52645-000" required>
					            </div>
					        </div>     
					        <div class="col-md-6 py-5">
					        	<div class="mb-0 mt-3 text-end">
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
<!--end::Add Employee Modal-->