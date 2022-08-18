<!--begin::Toolbar-->
<div class="toolbar py-2" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex align-items-center">
		<!--begin::Page title-->
		<div class="flex-grow-1 flex-shrink-0 me-5">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Attendance</h1>
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
					<li class="breadcrumb-item text-muted">Daily</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-200 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">Attendance</li>
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
		<div class="card mb-10">
			<!--card::title-->
			<div class="card-header">
		        <h3 class="card-title"></h3>
		        <div class="card-toolbar">
		           <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_Confirm_update">Update Attendance</button>
		        </div>
		    </div>
			<!--card::endTitle-->
			<!--begin::Card body-->
			<div class="card-body p-0 pb-0">
				<!--begin::Wrapper-->
				<div class="card-px text-center py-10">
					<form>
						<div class="row">
							<div class="col-md-12 table-responsive">
								<table id="example_employee_attendance" class="table table-striped dt-responsive pt-5" style="width:100%;border: none;">
	    						    <thead style="background-color: #f0f0f0;">
	            						<tr>
	            						    <th style="border-bottom: none;font-weight: 500;">S.No</th>
	            						    <th style="border-bottom: none;font-weight: 500;" class="text-start">Employee Name</th>
	            						    <th style="border-bottom: none;font-weight: 500;" class="text-start">Date</th>            						    
	            						    <th style="border-bottom: none;font-weight: 500;" class="text-start">Start Time</th>
	            						    <th style="border-bottom: none;font-weight: 500;" class="text-start">End Time</th>
	            						    <th style="border-bottom: none;font-weight: 500;">Check</th>
	            						</tr>
	    						    </thead>
	    						    <tbody>
	            						<tr>
	            						    <td style="vertical-align: middle;padding-left: 15px;" class="text-start">1</td>
	            						    <td style="vertical-align: middle;" class="text-start ps-5">John Doe</td>
	            						    <td style="vertical-align: middle;" class="text-start ps-5">07-02-2022</td>
	            						    <td style="vertical-align: middle;" class="text-start ps-5">6:00 AM</td>
	            						    <td style="vertical-align: middle;" class="text-start ps-5">5:00 PM</td>
	            						    <td style="vertical-align: middle;display: block ruby;" class="text-center">
	            						    	<div class="form-check form-check-custom form-check-solid" style="display: inline-block;">
												    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
												</div>            								
	            							</td>
	            						</tr>
	    							</tbody>
	    						</table>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!--end::Card body-->
		</div>
		<!--end::Card-->
		<!--begin::Card-->
		<div class="card">
			<!--card::title-->
			<div class="card-header">
		        <h3 class="card-title">Attendance Details</h3>
		        <div class="card-toolbar">
		           
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
            						    <th style="border-bottom: none;" class="text-start">Date</th>
            						    <th style="border-bottom: none;" class="text-start">Start Time</th>
            						    <th style="border-bottom: none;" class="text-start">End Time</th>
            						</tr>
    						    </thead>
    						    <tbody>
            						<tr>
            						    <td style="vertical-align: middle;padding-left: 15px;" class="text-start">1</td>
            						    <td style="vertical-align: middle;" class="text-start ps-5">John Doe</td>
            						    <td style="vertical-align: middle;" class="text-start ps-5">07-02-2022</td>
            						    <td style="vertical-align: middle;" class="text-start ps-5">6:00 AM</td>
            						    <td style="vertical-align: middle;" class="text-start ps-5">5:00 PM></td>
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

<!--AConfirm Modal-->
<div class="modal fade" tabindex="-1" id="kt_modal_Confirm_update">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm Message</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x text-dark" style="font-size: 30px !important;"></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <p>Are you sure, all details are going to submit is correct ? </p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary">Yes</button>
            </div>
        </div>
    </div>
</div>
<!--end::confirm Modal-->