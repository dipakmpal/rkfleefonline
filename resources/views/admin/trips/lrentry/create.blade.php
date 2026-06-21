@extends('layouts.admin.app')
@section('content')

    <div class="tms-page-content" id="page-purchase">
        <div class="d-flex justify-content-between align-items-center mb-4">
            
            <div class="d-flex align-items-center gap-2">
                <button class="btn btn-outline-secondary btn-sm rounded-circle" onclick="document.querySelector('[data-page=page-dashboard]').click()">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <h4 class="fw-bold mb-0 text-dark">LR entry</h4>
            </div>
            <div class="d-flex gap-2">
                <a href="{{ route('lrentry.index') }}" class="btn btn-outline-primary btn-sm bg-white border">
                    <i class="fas fa-list me-1"></i>LR entry list
                </a>
            </div>
        </div>
        <div class="m-2">
        <form action="{{ route('lrentry.store') }}" method="POST" enctype="multipart/form-data" id="mastercreateForm">
        @csrf
            <div class="row">
                <div class="col-6">  
                    <div class="mb-3">
                        <label for="driver_name" class="form-label">Driver Name</label>
                        <input type="text" name="driver_name" class="form-control" id="driver_name" placeholder="Enter driver name."> 
                    </div>                  
                    <div class="mb-3">
                        <label for="locationfrom" class="form-label">Location From</label>
                        <input type="text" name="locationfrom" class="form-control" id="locationfrom" placeholder="Enter location from.">  
                    </div>
                    <div class="mb-3">
                        <label for="pfrom" class="form-label">Purchase from</label>
                        <input type="text" name="pfrom" class="form-control" id="pfrom" placeholder="Enter purchase from.">
                    </div>                      
                    <div class="mb-3">
                        <label for="address" class="form-label">Truck No</label>
                        <select name="truck_no" class="form-control" id="truck_no" required>
                            <option value="" disabled selected>Select truck no</option>
                            <option value="truck1">Truck 1</option>
                            <option value="truck2">Truck 2</option> 
                            <option value="truck3">Truck 3</option>
                        </select>
                    </div>                                  
                </div>
                <div class="col-6">   
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" name="date" class="form-control" id="date" required autofocus placeholder="Enter the date."> 
                    </div>                 
                    
                    <div class="mb-3">
                        <label for="locationto" class="form-label">Location To</label>
                        <input type="text" name="locationto" class="form-control" id="locationto" placeholder="Enter location to."> 
                    </div>  
                    <div class="mb-3">
                        <label for="tosell" class="form-label">To sell</label>
                        <input type="text" name="tosell" class="form-control" id="tosell" placeholder="Enter to sell.">
                    </div>                                 
                </div>
            </div>

            <div class="tms-page-content">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-gntab-tab" data-bs-toggle="pill" data-bs-target="#pills-gntab" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                            Material Details
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-findetail-tab" data-bs-toggle="pill" data-bs-target="#pills-findetail" type="button" role="tab" aria-controls="pills-findetail" aria-selected="false">
                            Expense
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Oppeningbalance-tab" data-bs-toggle="pill" data-bs-target="#pills-Oppeningbalance" type="button" role="tab" aria-controls="pills-Oppeningbalance" aria-selected="false">
                            Oppening balance & Dates
                        </button>
                    </li>                
                </ul>
                <div class="tab-content" id="pills-tabContent">        
                    <div class="tab-pane fade show active" id="pills-gntab" role="tabpanel" aria-labelledby="pills-gntab-tab" tabindex="0">
                        <div class="row">
                            <div class="col-4">                    
                                <div class="mb-3">
                                    <label for="itemname" class="form-label">Item Name</label>
                                    <input type="text" name="itemname" class="form-control" id="itemname" placeholder="Enter the item name.">
                                </div>
                                <div class="mb-3">
                                    <label for="km" class="form-label">KM</label>
                                    <input type="text" name="km" class="form-control" id="km" placeholder="Enter the KM.">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="packages" class="form-label">Packages</label>
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" name="packages" class="form-control" id="packages" required autofocus placeholder="Enter the number of packages.">
                                        </div>
                                        <div class="col-6">
                                            <select name="truck_no" class="form-control" id="truck_no" required>
                                                <option value="" disabled selected>Select truck no</option>
                                                <option value="truck1">Truck 1</option>
                                                <option value="truck2">Truck 2</option> 
                                                <option value="truck3">Truck 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="chargeweight" class="form-label">Charge Weight</label>
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" name="packages" class="form-control" id="packages" required autofocus placeholder="Enter the number of packages.">
                                        </div>
                                        <div class="col-6">
                                            <select name="truck_no" class="form-control" id="truck_no" required>
                                                <option value="" disabled selected>Select truck no</option>
                                                <option value="truck1">Truck 1</option>
                                                <option value="truck2">Truck 2</option> 
                                                <option value="truck3">Truck 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="rate" class="form-label">Rate</label>
                                    <input type="text" name="rate" class="form-control" id="rate" placeholder="Enter the rate.">
                                </div>
                                <div class="mb-3">
                                    <label for="totalfreight" class="form-label">Total Freight</label>
                                    <input type="text" name="totalfreight" class="form-control" id="totalfreight" placeholder="Enter the total freight.">
                                </div>
                            </div>
                        </div>
                    </div>
            {{-- third tab content --}}
                    <div class="tab-pane fade" id="pills-findetail" role="tabpanel" aria-labelledby="pills-findetail-tab" tabindex="0">
                        

                        <div class="table-responsive border rounded mb-3">
                        <table class="table table-hover align-middle mb-0" id="saleItemsTable" style="min-width: 750px;">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 70px;" class="text-center">No</th>
                                    <th>Date</th>
                                    <th style="width: 100px;" class="text-center">Particular</th>
                                    <th style="width: 120px;" class="text-end">Amount</th>
                                    <th style="width: 110px;" class="text-end">From Account</th>
                                    <th style="width: 110px;" class="text-center">Remark</th>
                                </tr>
                            </thead>

                            <tbody id="saleItemsTableBody">
                                <tr>

                                    <!-- Row Number -->
                                    <td class="align-middle text-center">
                                        <button type="button" class="btn btn-sm btn-outline-danger border-0 delete-sale-row">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>

                                        <span class="ms-1 row-number">1</span>
                                        
                                    </td>

                                    <!-- Item Name -->
                                    <td>
                                        <input type="date" name="date[]" class="form-control form-control-sm" placeholder="Enter the date.">
                                        
                                    </td>

                                    <!-- Quantity -->
                                    <td>
                                        <select name="item_name[]" class="form-select form-select-sm">
                                            <option value="" selected disabled>Select Item</option>
                                            <option value="freight">Freight Charges</option>
                                            <option value="local">Local Delivery</option>
                                            <option value="detention">Detention Charges</option>
                                            <option value="loading">Loading / Unloading</option>
                                            <option value="toll">Toll Reimbursement</option>
                                        </select>
                                    </td>

                                    <!-- Rate -->
                                    <td>
                                        <input type="number"
                                            name="rate[]"
                                            class="form-control form-control-sm text-end sale-rate"
                                            min="0">
                                    </td>

                                    <!-- Discount -->
                                    <td>
                                        <input type="text"
                                            name="fromaccount[]"
                                            class="form-control form-control-sm text-end sale-discount"
                                        >
                                    </td>


                                    <!-- Total -->
                                    <td class="text-end fw-semibold align-middle">
                                        <input type="text" name="total[]">
                                    </td>

                                </tr>
                            </tbody>
                            <tfoot class="table-light">
                                <tr>
                                    <td colspan="2" class="text-end fw-bold small">Total</td>
                                    <td id="footerQty" class="text-center fw-bold small">
                                        0
                                        <input type="hidden" name="totalqty">
                                    </td>
                                    <td></td>
                                    <td id="footerDiscount" class="text-end fw-bold small">
                                        ₹ 0.00
                                        <input type="hidden" name="total_discount">
                                    </td>
                                    <td id="footerGst" class="text-end fw-bold small">
                                        ₹ 0.00
                                        <input type="hidden" name="total_gst">
                                    </td>
                                    <td id="footerTotal" class="text-end fw-bold small text-primary">
                                        ₹ 0.00
                                        <input type="hidden" name="grand_total">
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    </div>

                    
                    <div class="mb-4">
                        <a href="#" class="btn btn-link btn-sm text-decoration-none fw-semibold p-0" id="addSaleItemBtn">
                            <i class="fas fa-plus me-1"></i> Add Another Expense                                        </a>
                    </div>
                    {{-- fifth tab content --}}
                    <div class="tab-pane fade" id="pills-Oppeningbalance" role="tabpanel" aria-labelledby="pills-Oppeningbalance-tab" tabindex="0">
                        <div class="row">
                            <div class="col-6">   
                                <div class="mb-3">
                                    <label for="openingBalance" class="form-label">Opening Balance</label>
                                    <input type="text" name="openingBalance" class="form-control" id="openingBalance" placeholder="Enter the opening balance.">
                                </div>
                                <div class="mb-3">
                                    <label for="dob" class="form-label">Birth Date</label>
                                    <input type="date" name="dob" class="form-control" id="dob" placeholder="Enter the birth date."> 
                                </div>                                   
                            </div>
                            <div class="col-6">   
                                <div class="mb-3">
                                    <label for="balanceType" class="form-label">Balance Type</label>
                                    <select name="balanceType" class="form-control" id="balanceType">
                                        <option value="" disabled selected>Select balance type</option>
                                        <option value="debit">Debit</option>
                                        <option value="credit">Credit</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="joiningDate" class="form-label">Joining Date</label>
                                    <input type="date" name="joiningDate" class="form-control" id="joiningDate" placeholder="Enter the joining date."> 
                                </div>                                   
                            </div>
                        </div>
                </div>
            </div>
        <div class="d-flex gap-2">
            <input type="submit" class="btn btn-primary py-2 px-3 ml-2 px-2 py-1 d-inline-block" value="Submit"/>
        </div>
    </form>
</div>

<script type="text/javascript">
  jQuery(function($) {
    var validator = $('#mastercreateForm').validate({
      rules: {
        name: {
          required: true
        }
      },
      messages: {
        name: 'Please enter customer name.',
      },
      errorElement : 'div',
      errorLabelContainer: '.errorTxt'
    });
  });
</script>
@endsection