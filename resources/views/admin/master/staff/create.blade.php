@extends('layouts.admin.app')
@section('content')

    <div class="tms-page-content" id="page-purchase">
        <div class="d-flex justify-content-between align-items-center mb-4">
            
            <div class="d-flex align-items-center gap-2">
                <button class="btn btn-outline-secondary btn-sm rounded-circle" onclick="document.querySelector('[data-page=page-dashboard]').click()">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <h4 class="fw-bold mb-0 text-dark">Add Staff</h4>
            </div>
            <div class="d-flex gap-2">
                <a href="{{ route('staff.index') }}" class="btn btn-outline-primary btn-sm bg-white border">
                    <i class="fas fa-list me-1"></i>Staff list
                </a>
            </div>
        </div>
        <div class="m-2">
        <form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data" id="mastercreateForm">
        @csrf
            <div class="row m-2">
                <div class="col-6">                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Employee Name</label>
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
                    <div class="mb-3">
                        <label for="dl_no" class="form-label">DL No</label>
                        <input type="text" name="dl_no" class="form-control" id="dl_no" placeholder="Enter your DL number.">
                    </div> 
                    <div class="mb-3">
                        <label for="remark" class="form-label">Remark</label>
                        <input type="text" name="remark" class="form-control" id="remark" placeholder="Enter your remark.">
                    </div>                                   
                </div>
                <div class="col-6">                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Employee Code</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your employee code.">  
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Gender</label>
                        <select name="gender" class="form-control" id="gender">
                            <option value="" disabled selected>Select gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="number" class="form-label">Mobile Number</label>
                        <input type="number" name="number" class="form-control" id="number" placeholder="Enter your mobile number."> 
                    </div>
                    <div class="mb-3">
                        <label for="dl_expiry" class="form-label">DL Expiry Date</label>
                        <input type="date" name="dl_expiry" class="form-control" id="dl_expiry" placeholder="Enter your DL expiry date.">
                    </div> 
                    <div class="mb-3">
                        <label for="dl_expiry" class="form-label">Staff or Driver</label>
                        <select name="staff_type" class="form-control" id="staff_type">
                            <option value="" disabled selected>Select type</option>
                            <option value="staff">Staff</option>
                            <option value="driver">Driver</option>
                        </select>
                    </div>                                   
                </div>
            </div>

            <div class="tms-page-content">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-gntab-tab" data-bs-toggle="pill" data-bs-target="#pills-gntab" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                            ID Proofe
                        </button>
                    </li>
                    {{-- <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-condetail-tab" data-bs-toggle="pill" data-bs-target="#pills-condetail" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                            Bank account
                        </button>
                    </li> --}}
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-findetail-tab" data-bs-toggle="pill" data-bs-target="#pills-findetail" type="button" role="tab" aria-controls="pills-findetail" aria-selected="false">
                            Emergency Contact
                        </button>
                    </li>
                    {{-- <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-moreinfo-tab" data-bs-toggle="pill" data-bs-target="#pills-moreinfo" type="button" role="tab" aria-controls="pills-moreinfo" aria-selected="false">
                            Deepartment & Designation
                        </button>
                    </li>  --}}
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Oppeningbalance-tab" data-bs-toggle="pill" data-bs-target="#pills-Oppeningbalance" type="button" role="tab" aria-controls="pills-Oppeningbalance" aria-selected="false">
                            Oppening balance & Dates
                        </button>
                    </li>                
                </ul>
                <div class="tab-content" id="pills-tabContent">        
                    <div class="tab-pane fade show active" id="pills-gntab" role="tabpanel" aria-labelledby="pills-gntab-tab" tabindex="0">
                        <div class="row">
                            <div class="col-6">                    
                                <div class="mb-3">
                                    <label for="pancard" class="form-label">PAN Card</label>
                                    <input type="text" name="pancard" class="form-control" id="pancard" placeholder="Enter your PAN card number.">
                                    <input type="hidden" name="usertype" value="supplier">  
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="epfno" class="form-label">EPF No</label>
                                    <input type="text" name="epfno" class="form-control" id="epfno" placeholder="Enter your EPF number."> 
                                </div> --}}
                                {{-- <div class="mb-3">
                                    <label for="esicno" class="form-label">ESIC No</label>
                                    <input type="number" name="esicno" class="form-control" id="esicno" placeholder="Enter your ESIC number."> 
                                </div>                                    --}}
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="adharNo" class="form-label">Adhar No</label>
                                    <input type="text" name="adharNo" class="form-control" id="adharNo" required autofocus placeholder="Enter your Adhar number.">
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="uanNo" class="form-label">UAN No</label>
                                    <input type="text" name="uanNo" class="form-control" id="uanNo" required autofocus placeholder="Enter your UAN number.">
                                </div> --}}
                            </div>
                        </div>
                    </div>
            {{-- secound tab content --}}
                    {{-- <div class="tab-pane fade" id="pills-condetail" role="tabpanel" aria-labelledby="pills-condetail-tab" tabindex="0">
                        <div class="row">
                            <div class="col-6">                    
                                <div class="mb-3">
                                    <label for="bankName" class="form-label">Bank Name</label>
                                    <input type="text" name="bankName" class="form-control" id="bankName" required placeholder="Enter the bank name.">
                                </div>                       
                                <div class="mb-3">
                                    <label for="accountNumber" class="form-label">Account Number</label>
                                    <input type="text" name="accountNumber" class="form-control" id="accountNumber" required placeholder="Enter the account number.">
                                </div>                                  
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="ifsc" class="form-label">IFSC Code</label>
                                    <input type="text" name="ifsc" class="form-control" id="ifsc" required placeholder="Enter the IFSC code.">
                                </div>                       
                                <div class="mb-3">
                                    <label for="branch" class="form-label">Branch</label>
                                    <input type="text" name="branch" class="form-control" id="branch" required placeholder="Enter the branch name.">
                                </div>                      
                            </div>
                        </div>
                    </div> --}}
            {{-- third tab content --}}
                    <div class="tab-pane fade" id="pills-findetail" role="tabpanel" aria-labelledby="pills-findetail-tab" tabindex="0">
                        <div class="row">
                            <div class="col-6">   
                                <div class="mb-3">
                                    <label for="contactPersonName" class="form-label">Contact Person Name</label>
                                    <input type="text" name="contactPersonName" class="form-control" id="contactPersonName" placeholder="Enter the contact person name.">
                                </div>
                                <div class="mb-3">
                                    <label for="relation" class="form-label">Relation</label>
                                    <input type="text" name="relation" class="form-control" id="relation" placeholder="Enter the relation."> 
                                </div>                                   
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="number" class="form-label">Contact No</label>
                                    <input type="number" name="number" class="form-control" id="number" placeholder="Enter the contact number.">
                                </div>                      
                            </div>
                        </div>
                    </div>
                    {{-- fourth tab content --}}
                    {{-- <div class="tab-pane fade" id="pills-moreinfo" role="tabpanel" aria-labelledby="pills-moreinfo-tab" tabindex="0">
                        <div class="row">
                            <div class="col-6">   
                                <div class="mb-3">
                                    <label for="department" class="form-label">Department4</label>
                                    <select name="department" class="form-control" id="department">
                                        <option value="" disabled selected>Select department</option>
                                        <option value="Market">Market</option>
                                        <option value="finance">Finance</option>
                                        <option value="operations">Operations</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="group" class="form-label">Under Group</label>
                                    <select name="group" class="form-control" id="group">
                                        <option value="" disabled selected>Select group</option>
                                        <option value="sales">Sales</option>
                                        <option value="marketing">Marketing</option>
                                        <option value="hr">HR</option>
                                    </select>
                                </div>                                   
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="designation" class="form-label">Designation</label>
                                    <select name="designation" class="form-control" id="designation">
                                        <option value="" disabled selected>Select designation</option>
                                        <option value="manager">Manager</option>
                                        <option value="tl">Team lead</option>
                                        <option value="employee">Employee</option>
                                    </select>
                                </div> 
                            </div>
                        </div>
                    </div> --}}
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
            
        
        {{-- <div class="tab-pane fade show active" id="pills-gntab" role="tabpanel" aria-labelledby="pills-gntab-tab" tabindex="0">.1..</div> --}}
        {{-- <div class="tab-pane fade" id="pills-condetail" role="tabpanel" aria-labelledby="pills-condetail-tab" tabindex="0">..2.</div> --}}
        {{-- <div class="tab-pane fade" id="pills-findetail" role="tabpanel" aria-labelledby="pills-findetail-tab" tabindex="0">...3</div> --}}
        {{-- <div class="tab-pane fade" id="pills-moreinfo" role="tabpanel" aria-labelledby="pills-moreinfo-tab" tabindex="0">...4</div> --}}
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