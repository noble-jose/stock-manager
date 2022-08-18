
<!--begin::Toolbar-->
<div class="toolbar py-2" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex align-items-center">
		<!--begin::Page title-->
		<div class="flex-grow-1 flex-shrink-0 me-5">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">New Customer</h1>
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
					<li class="breadcrumb-item text-muted">New</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-200 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">Customer</li>
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
		            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_customer"><i class="bi bi-file-earmark-plus-fill fs-2 text-light"></i> New Customer</button>
		        </div>
		    </div>
			<!--card::endTitle-->
			<!--begin::Card body-->
			<div class="card-body p-0 pb-0">
				<!--begin::Wrapper-->
				<div class="card-px text-center py-10">
					<div class="row">
						<?php $this->session->flashdata('message');?>
						<div class="col-md-12 table-responsive">
							<table id="example" class="table table-striped dt-responsive pt-5 customer-table" style="width:100%;border: none;">
    						    <thead style="background-color: #f0f0f0;">
            						<tr>
            						    <th style="border-bottom: none;padding-left: 10px;">S.No</th>
            						    <th style="border-bottom: none;" class="text-start">Customer Name</th>
            						    <th style="border-bottom: none;" class="text-start">Phone Number</th>
            						    <th style="border-bottom: none;" class="text-start">Vehicle Number</th>
            						    <th style="border-bottom: none;" class="text-start">Join Date</th>
            						    <th style="border-bottom: none;text-align: center !important;" class="text-start">Action</th>            						    
            						</tr>
    						    </thead>
    						    <tbody>
										<?php
										$i = 1;
										foreach ($getcustomer_data as $row)
										{
										?>
            						<tr>
            						    <td style="vertical-align: middle;padding-left: 25px;" class="text-start"><?php echo $i;?></td>
            						    <td style="vertical-align: middle;" class="text-start ps-5"><?php echo $row->customer_name;?></td>
            						    <td style="vertical-align: middle;" class="text-start ps-5"><?php echo $row->phone_number;?></td>
            						    <td style="vertical-align: middle;" class="text-start ps-5"><?php echo $row->vehicle_number;?></td>
            						    <td style="vertical-align: middle;" class="text-start ps-5"><?= $row->join_into ?></td>
 										<td style="vertical-align: middle;display: block ruby;" class="text-center">
 
		            						<button class="btn btn-sm btn-light mx-2 edit-details" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_new_customer" value="<?= $row->id ?>"><i class="bi bi-pencil-fill text-primary"></i></button>
		            						<a href="javascript:void(0)">
		            						<button class="btn btn-sm btn-light mx-2 confirm-delete" value="<?= $row->id ?>"><i class="bi bi-trash-fill text-danger"></i></button></a>
		            					</td>
            						</tr>
            						<?php
            						$i++;
	            					}
	            					?>
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
<div class="modal fade" tabindex="-1" id="kt_modal_new_customer">
	<div class="modal-dialog">
	    <div class="modal-content">
	        <div class="modal-header">
	            <h5 class="modal-title">Create New Customer Account</h5>

			    <!--begin::Close-->
			    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
			    	<i class="bi bi-x text-dark" style="font-size: 30px !important;"></i>
			    </div>
			    <!--end::Close-->
			</div>

			<div class="modal-body">
			   <div class="row">
			   		<form class="newCustomer" action="<?= base_url('Customer/new_customer')?>" method="post" enctype="multipart/form-data">
			   			<div class="row">
			   				<div class="col-md-12">
			   					<div class="mb-5">
			   						<label for="meter1-diesel" class="form-label">Customer Name</label>
					               	<input type="text" name="customer_name" placeholder="John Doe" class="form-control form-control-solid" required>	               	
								</div>
			   				</div>
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="meter2-diesel" class="form-label">Phone Number</label>
					        		<input type="number" name="phone_number" placeholder="Ex : 01-2562-000" class="form-control form-control-solid" required> 
					        	</div>
					        </div>	
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="meter2-diesel" class="form-label">Vehicle Number</label>
									<input type="text" name="vehicle_number" placeholder="Enter vehicle name" class="form-control form-control-solid" required>
					        	</div>
					        </div>				 
					        <div class="col-md-12 py-5">
					        	<div class="mb-5 text-end">
									<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
					        		<button type="submit" id="customer_submit" class="btn btn-primary">Submit</button>		
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
<div class="modal fade" tabindex="-1" id="kt_modal_edit_new_customer">
	<div class="modal-dialog">
	    <div class="modal-content">
	        <div class="modal-header">
	            <h5 class="modal-title">Create New Customer Account</h5>

			    <!--begin::Close-->
			    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
			    	<i class="bi bi-x text-dark" style="font-size: 30px !important;"></i>
			    </div>
			    <!--end::Close-->
			</div>

			<div class="modal-body">
			   <div class="row">
			   		<form class="newCustomer" action="" method="post" enctype="multipart/form-data">
			   			<div class="row">
			   				<div class="col-md-12">
			   					<div class="mb-5">
			   						<label for="meter1-diesel" class="form-label">Customer Name</label>
					               	<input type="text" name="customer_name" id="customer_name" class="form-control form-control-solid">	               	
								</div>
			   				</div>
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="customer_number" class="form-label">Phone Number</label>
					        		<input type="number" name="phone_number" id="phone_number" class="form-control form-control-solid"> 
					        	</div>
					        </div>	
					        <div class="col-md-12">
					        	<div class="mb-5">
					        		<label for="meter2-diesel" class="form-label">Vehicle Number</label>
									<input type="text" name="vehicle_number" id="vehicle_number" class="form-control form-control-solid">
					        	</div>
					        </div>				 
					        <div class="col-md-12 py-5">
					        	<div class="mb-5 text-end">
					        		<input type="hidden" class="customer_id" id="customer_id">
									<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
					        		<button type="submit" class="btn btn-primary update-button">Update</button>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$("#customer_submit").on("click", function(e){
			e.preventDefault();
			var customer_name = $("input[name='customer_name']").val();
			var phone_number = $("input[name='phone_number']").val();
			var vehicle_number = $("input[name='vehicle_number']").val();
 
			$.ajax({
				url: "<?php echo base_url("Customer/new_customer");?>",
				type: "POST",
	            data: {customer_name:customer_name, phone_number:phone_number, vehicle_number:vehicle_number},
	            success : function(data){
	            	if(data == 'success')
	            	{
	            		toastr.success('Data submitted.', 'Success', {timeOut: 3000});
	            		$('#kt_modal_new_customer, .modal-backdrop').hide();
						$('#kt_modal_new_customer form')[0]. reset();
						$(".customer-table").load(window.location + " .customer-table");
	            	}
	            }, 
	            error : function(data)
	            {
	            	toastr.danger('Data not submitted.', 'Error', {timeOut: 3000});
	            }
			});

		});

		//Delete customer details 
		$(".confirm-delete").click(function(e){
			e.preventDefault();
			if(confirm("Are you sure you want to delete this?"))
			{
				var id = $(this).val();
				$.ajax({
					url: "<?php echo base_url();?>Customer/delete_customer",
					method: "POST",
					data: {id:id},
					success: function(data){
        				$(".customer-table").load(window.location + " .customer-table");
        				toastr.success('Data deleted.', 'Success', {timeOut: 3000});
					}
				});
			}
			else
			{
				return false; 
			}
		});

		//edit customer Details
		$(".edit-details").click(function(){
			var id = $(this).val();
			//alert(id);
			$.ajax({
				url: "<?= base_url()?>Customer/get_customerData",
				method: "POST",
				data: {id:id},
				dataType: "json",
				success: function(data){
					$("#customer_id").val(id);
					$("#customer_name").val(data.customer_name);
					$("#phone_number").val(data.phone_number);
					$("#vehicle_number").val(data.vehicle_number);
				}
			});
		});

		//Upload customer Details
		$(".update-button").click(function(e){
			e.preventDefault();
			var customer_name = $("#customer_name").val();
			var phone_number = $("#phone_number").val();
			var vehicle_number = $("#vehicle_number").val();
			var customer_id = $("#customer_id").val();

			$.ajax({
				url: "<?= base_url('Customer/update_customerData')?>",
				method: "POST",
				data: $(this).serialize(),
				dataType: "json",
				success: function(data)
				{

				}
				error: function()
				{
					
				}
			});
		});

	});
</script>