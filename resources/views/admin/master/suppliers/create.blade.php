@extends('layouts.admin.app')
@section('content')


<div class="d-flex justify-content-between align-items-center mb-4">            
    <div class="d-flex align-items-center gap-2">
        <button class="btn btn-outline-secondary btn-sm rounded-circle" onclick="document.querySelector('[data-page=page-dashboard]').click()">
            <i class="fas fa-chevron-left"></i>
        </button>
        <h4 class="fw-bold mb-0 text-dark">Add Supplier</h4>
    </div>
    <div class="d-flex gap-2">
        <a href="{{ route('suppliers.index') }}" class="btn btn-outline-primary btn-sm bg-white border">
            <i class="fas fa-list me-1"></i> Supplier list
        </a>
    </div>
</div>
<form action="{{ route('suppliers.store') }}" method="POST" enctype="multipart/form-data" id="mastercreateForm">
@csrf
    <div class="row m-2">            
        <div class="col-6">                         
            <div class="mb-1">
                <label for="name" class="form-label">Supplier Name</label>
                <input type="text" name="name" class="form-control" id="name" required autofocus placeholder="Enter your supplier name.">
                <input type="hidden" name="usertype" value="supplier">  
            </div>
            <div class="mb-1">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" id="email" required placeholder="Enter your customer email.">
            </div>
            <div class="mb-1">
                <label for="number" class="form-label">Mobile Number</label>
                <input type="number" name="number" class="form-control" id="number" placeholder="Enter your mobile number."> 
            </div>
            <div class="mb-1">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Enter your address."> 
            </div>
            <div class="mb-1">
                <label for="state" class="form-label">State</label>
                <input type="text" name="state" class="form-control" id="state" placeholder="Enter your state."> 
            </div>
            <div class="mb-1">
                <label for="pincode" class="form-label">Pin code</label>
                <input type="number" name="pincode" class="form-control" id="pincode" placeholder="Enter your pin code.">
            </div> 
            <div class="mb-1">
                <label for="city" class="form-label">City</label>
                <input type="text" name="city" class="form-control" id="city" placeholder="Enter your city.">
            </div>                                   
        </div>
        <div class="col-6">
            <div class="mb-1">
                <label for="gstNumber" class="form-label">GST Number</label>
                <input type="text" name="gstNumber" class="form-control" id="gstNumber" placeholder="Enter your GST number.">
            </div>            
            <div class="mb-1">
                <label for="underGroup" class="form-label">Under Group</label>
                {{-- <input type="text"  placeholder="Enter the group your customer belongs to.">  --}}
                <select name="underGroup" class="form-control" id="underGroup">
                    <option value="" disabled>Select Group</option>
                    <option value="Sundry Debtors">Sundry Debtors</option>
                    <option value="Shubham co ltd pune">Shubham co ltd pune</option>
                </select>
            </div>
            <div class="mb-1">
                <label for="openingbalance" class="form-label">Opening Balance</label>
                <input type="number" name="openingbalance" class="form-control" id="openingbalance" placeholder="Enter the opening balance.">
                <select id="openingbalancestatus" name="openingbalancestatus">
                    <option value="dr">To Receive (Dr)</option>
                    <option value="cr">To Pay (Cr)</option>
                </select>
            </div>
            <div class="mb-1">
                <label for="panNumber" class="form-label">PAN Number</label>
                <input type="text" name="panNumber" class="form-control" id="panNumber" placeholder="Enter your PAN number.">
            </div> 
            <div class="mb-1">
                <label for="adharNumber" class="form-label">Adhar Number</label>
                <input type="number" name="adharNumber" class="form-control" id="adharNumber" placeholder="Enter your Adhar number.">
            </div>
            <div class="mb-1">
                <label for="remark" class="form-label">Remark</label>
                <input type="text" name="remark" class="form-control" id="remark" placeholder="Enter any remarks.">
            </div>            
        </div>                
    </div>
    <div class="d-flex gap-2">
        <input type="submit" class="btn btn-primary py-2 px-3 ml-2 px-2 py-1 d-inline-block" value="Submit"/>
    </div>    
</form>

<script type="text/javascript">
  jQuery(function($) {
    $('#mastercreateForm').validate({
      rules: {
        name: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
        number: {
          required: true,
          digits: true
        }
      },
      messages: {
        name: 'Please enter supplier name.',
        email: 'Please enter a valid email address.',
        number: 'Please enter a valid mobile number.'
      },
      errorElement: 'div',
      errorClass: 'text-danger',
      errorLabelContainer: '.errorTxt'
    });
  });
</script>
@endsection