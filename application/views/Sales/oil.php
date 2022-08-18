<!--begin::Toolbar-->
<div class="toolbar py-2" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex align-items-center">
		<!--begin::Page title-->
		<div class="flex-grow-1 flex-shrink-0 me-5">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Oil</h1>
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
					<li class="breadcrumb-item text-muted">Oil Stock</li>
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
		            <button type="button" class="btn btn-sm btn-primary text-light fs-5 mx-1" data-bs-toggle="modal" data-bs-target="#kt_modal_create_oilstock">
		                <i class="bi bi-list-check fs-2 text-light"></i>Create Stock
		            </button>
		            <button type="button" class="btn btn-sm btn-primary text-light fs-5 mx-1" data-bs-toggle="modal" data-bs-target="#kt_modal_oilnewstock">
		                <i class="bi bi-file-earmark-plus-fill fs-2 text-light"></i> New Stock
		            </button>

		            <a href="<?= base_url('OilStock/newStockdetails')?>" class="btn btn-sm btn-primary text-light fs-5 mx-1" >
		                <i class="bi bi-file-earmark-spreadsheet fs-2 text-light"></i> Stock Update
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
              						    <th style="border-bottom: none;" class="text-start">  Balance</th>
              						    <th style="border-bottom: none;" class="text-start">left</th>
            						    <th style="border-bottom: none;" class="text-start">Date</th>
            						    <th style="border-bottom: none;">Action</th>
            						</tr>
    						    </thead>
    						    <tbody>
            						<tr>
            						    <td style="vertical-align: middle;padding-left: 15px;" class="text-start">1</td>
            						    <td style="vertical-align: middle;" class="text-start ps-5">Grees</td>
            						    <td style="vertical-align: middle;" class="text-start ps-5">Hp</td>
            						    <td style="vertical-align: middle;" class="text-start ps-5">500. gm</td>
            						    <td style="vertical-align: middle;" class="text-start ps-5"><strong><i class="fas fa-rupee-sign text-secondry"></i> 250</strong></td>
            						    <td style="vertical-align: middle;" class="text-success text-start ps-5"><strong>9 itm.</strong></td>
            						    <td style="vertical-align: middle;" class="text-danger text-start ps-5"><strong> 1 itm.</strong></td>
              						    <td style="vertical-align: middle;" class="text-start ps-5">01-11-2021</td>
            						    <td style="vertical-align: middle;display: block ruby;" class="text-center">
            								<button class="btn btn-sm btn-light mx-2" data-bs-toggle="modal" data-bs-target="#kt_modal_oilitem_edit"><i class="bi bi-pencil-fill text-primary"></i></button> 
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

<!--oil Add Modal-->
<div class="modal fade" tabindex="-1" id="kt_modal_create_oilstock">
	<div class="modal-dialog">
	    <div class="modal-content">
	        <div class="modal-header">
	            <h5 class="modal-title">Create New Stock</h5>

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
			   				<div class="col-md-12">
			   					<div class="mb-5">
			   						<label for="card_number" class="form-label">Item</label>
					               	<input type="text" name="items_name" placeholder="New item name" class="form-control form-control-solid" required>
			   					</div>
			   				</div>
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="card_holder_name" class="form-label">Company Name</label>
					        		<input type="text" name="company_name" placeholder="Product-company" class="form-control form-control-solid" required> 
					        	</div>
					        </div>	
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="fuel_type" class="form-label">Quantity</label>
									<input type="text" name="item_quantity" placeholder="Item Quantity" class="form-control form-control-solid" required>
					        	</div>
					        </div>
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="fuel_type" class="form-label">Quantity Type</label>
					               	<select class="form-select form-select-solid" name="bank_name">
					               		<option value="litter" selected>Litter</option>
					               		<option value="kilogram">Kilo gram</option>
					               		<option value="gram">Gram</option>
					               	</select> 
					        	</div>
					        </div>
					       	<div class="col-md-12">
					            <div class="mb-5">
					              	<label for="ifsc" class="form-label">Price</label>
					              	<input type="text" name="item_price" placeholder="Item Price" class="form-control form-control-solid" required>
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
<!--end::oil Add Modal-->

<!--Oil New Stock-->
<div class="modal fade" tabindex="-1" id="kt_modal_oilnewstock">
	<div class="modal-dialog">
	    <div class="modal-content">
	        <div class="modal-header">
	            <h5 class="modal-title">New Stock Insert</h5>

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
			   				<div class="col-md-12">
			   					<div class="mb-5">
			   						<label for="bank_name" class="form-label">Item Name</label>
					               	<select class="form-select form-select-solid" name="item_name">
					               		<option value="grees" selected>Grees</option>
					               		<option value="engine oil">Engine Oil</option>
					               	</select>             	
			   					</div>
			   				</div>
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="amount" class="form-label">Company Name</label>
					               	<select class="form-select form-select-solid" name="company_name">
					               		<option value="grees" selected>Hp</option>
					               		<option value="engine oil">HP2</option>
					               	</select> 
					        	</div>
					        </div>	
					        <div class="col-md-6">
					        	<div class="mb-5">
					        		<label for="amount" class="form-label">Quantity</label>
					               	<select class="form-select form-select-solid" name="item_quantity">
					               		<option value="grees" selected>500 Liter</option>
					               	</select> 
					        	</div>
					        </div>
					        <div class="col-md-6">
					        	<div class="mb-5">
					        		<label for="amount" class="form-label">Total Quantity</label>
					               	<select class="form-select form-select-solid" name="total_quantity">
					               		<option value="1" selected>1</option>
					               		<option value="2">2</option>
					               		<option value="3">3</option>
					               		<option value="4">4</option>
					               		<option value="5">5</option>
					               		<option value="6">6</option>
					               		<option value="7">7</option>
					               		<option value="8">8</option>
					               		<option value="9">9</option>
					               		<option value="10">10</option>
					               	</select> 
					        	</div>
					        </div>	
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="amount" class="form-label">Price</label>
					               	<input type="text" class="form-control form-control-solid" name="item_price" placeholder="Item_price">
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
<!--end::oil new stock  Modal-->

<!--oil Add Modal-->
<div class="modal fade" tabindex="-1" id="kt_modal_oilitem_edit">
	<div class="modal-dialog">
	    <div class="modal-content">
	        <div class="modal-header">
	            <h5 class="modal-title">Create New Stock</h5>

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
			   				<div class="col-md-12">
			   					<div class="mb-5">
			   						<label for="card_number" class="form-label">Item</label>
					               	<input type="text" name="items_name" class="form-control form-control-solid" value="Grees" required>
			   					</div>
			   				</div>
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="card_holder_name" class="form-label">Company Name</label>
					        		<input type="text" name="company_name" class="form-control form-control-solid" value="Hp" required> 
					        	</div>
					        </div>	
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="fuel_type" class="form-label">Quantity</label>
									<input type="text" name="item_quantity" class="form-control form-control-solid" value="500" required>
					        	</div>
					        </div>
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="fuel_type" class="form-label">Quantity Type</label>
					               	<select class="form-select form-select-solid" name="bank_name">
					               		<option value="litter" selected>Litter</option>
					               		<option value="kilogram">Kilo gram</option>
					               		<option value="gram">Gram</option>
					               	</select> 
					        	</div>
					        </div>
					       	<div class="col-md-12">
					            <div class="mb-5">
					              	<label for="ifsc" class="form-label">Price</label>
					              	<input type="text" name="item_price" class="form-control form-control-solid" value="250" required>
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
<!--end::oil Add Modal-->
