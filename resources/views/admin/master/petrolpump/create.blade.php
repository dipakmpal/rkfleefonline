@extends('layouts.admin.app')
@section('content')

    <div class="tms-page-content" id="page-purchase">
        <div class="d-flex justify-content-between align-items-center mb-4">
            
            <div class="d-flex align-items-center gap-2">
                <button class="btn btn-outline-secondary btn-sm rounded-circle" onclick="document.querySelector('[data-page=page-dashboard]').click()">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <h4 class="fw-bold mb-0 text-dark">Add Petrol Pump</h4>
            </div>
            <div class="d-flex gap-2">
                <a href="{{ route('petrolpump.index') }}" class="btn btn-outline-primary btn-sm bg-white border">
                    <i class="fas fa-list me-1"></i>Petrol Pump list
                </a>
            </div>
        </div>
        <div class="m-2">
        <form action="{{ route('petrolpump.store') }}" method="POST" enctype="multipart/form-data" id="mastercreateForm">
        @csrf
            <div class="row m-2">
                <div class="col-6">                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Pump Name</label>
                        <input type="text" name="name" class="form-control" id="name" required autofocus placeholder="Enter your employee name."> 
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Enter your address."> 
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Id</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email id."> 
                    </div>                                   
                </div>
                <div class="col-6">                    
                    <div class="mb-3">
                        <label for="opening_balance" class="form-label">Openning balance</label>
                        <input type="number" name="opening_balance" class="form-control" id="opening_balance" placeholder="Enter opening balance.">  
                        <select name="balance_type" class="form-control mt-2" id="balance_type">
                            <option value="" disabled selected>Select balance type</option>
                            <option value="debit">Debit</option>
                            <option value="credit">Credit</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="number" class="form-label">Mobile Number</label>
                        <input type="number" name="number" class="form-control" id="number" placeholder="Enter your mobile number."> 
                    </div>
                    <div class="mb-3">
                        <label for="remark" class="form-label">Remark</label>
                        <input type="text" name="remark" class="form-control" id="remark" placeholder="Enter your remark.">
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