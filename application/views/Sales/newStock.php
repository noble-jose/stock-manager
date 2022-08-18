<!--begin::Toolbar-->
<div class="toolbar py-2" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex align-items-center">
		<!--begin::Page title-->
		<div class="flex-grow-1 flex-shrink-0 me-5">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Stock</h1>
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
					<li class="breadcrumb-item text-muted">New Stock</li>
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
		            <a href="<?= base_url('OilStock')?>" class="btn btn-sm btn-primary text-light fs-5 mx-1">
		                <i class="bi bi-arrow-left-short fs-2 text-light"></i>Back
		            </a>
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
            						    <th style="border-bottom: none;" class="text-start">Items</th>
            						    <th style="border-bottom: none;" class="text-start">Company Name</th>
            						    <th style="border-bottom: none;" class="text-start">Quantity</th>
            						    <th style="border-bottom: none;" class="text-start">Price</th>
              						    <th style="border-bottom: none;" class="text-start">Total Quantity</th>
              						    <th style="border-bottom: none;" class="text-start">  Total Price</th>
            						    <th style="border-bottom: none;" class="text-start">Date</th>
            						    <th style="border-bottom: none;">Action</th>
            						</tr>
    						    </thead>
    						    <tbody>
            						<tr>
            						    <td style="vertical-align: middle;padding-left: 15px;" class="text-start">1</td>
            						    <td style="vertical-align: middle;" class="text-start ps-5">Grees</td>
            						    <td style="vertical-align: middle;" class="text-start ps-5">Hp</td>
            						    <td style="vertical-align: middle;" class="text-start ps-5">500.gm</td>
            						    <td style="vertical-align: middle;" class="text-start ps-5"><strong><i class="fas fa-rupee-sign text-secondry"></i> 250</strong></td>
               						    <td style="vertical-align: middle;" class="text-start ps-5">10</td>
            						    <td style="vertical-align: middle;" class="text-success text-start ps-5"><strong><i class="fas fa-rupee-sign text-secondry"></i> 2500</strong></td>
              						    <td style="vertical-align: middle;" class="text-start ps-5">01-11-2021</td>
            						    <td style="vertical-align: middle;display: block ruby;" class="text-center">
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

