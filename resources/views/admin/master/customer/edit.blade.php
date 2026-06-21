@extends('layouts.admin.app')
@section('content')


<div class="tms-page-content">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-gntab-tab" data-bs-toggle="pill" data-bs-target="#pills-gntab" type="button" role="tab" aria-controls="pills-home" aria-selected="true">General Information</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-condetail-tab" data-bs-toggle="pill" data-bs-target="#pills-condetail" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Contact Details</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-findetail-tab" data-bs-toggle="pill" data-bs-target="#pills-findetail" type="button" role="tab" aria-controls="pills-findetail" aria-selected="false">Financial Detail</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-moreinfo-tab" data-bs-toggle="pill" data-bs-target="#pills-moreinfo" type="button" role="tab" aria-controls="pills-moreinfo" aria-selected="false">More Information</button>
    </li>
    
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <form action="{{ route('customer-master-update', [$data->id]) }}" method="POST" enctype="multipart/form-data" id="mastercreateForm">
            @csrf
            @method('PUT')
            <div class="tab-pane fade show active" id="pills-gntab" role="tabpanel" aria-labelledby="pills-gntab-tab" tabindex="0">
                <div class="row">
                    <div class="col-6">                    
                        <div class="mb-3">
                            <label for="name" class="form-label">Customer Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{$data->name}}" required autofocus placeholder="Enter your customer name.">
                            <input type="hidden" name="usertype" value="customer">  
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" value="{{$data->address}}" name="address" class="form-control" id="address" placeholder="Enter your address."> 
                        </div>
                        <div class="mb-3">
                            <label for="state" class="form-label">State</label>
                            <input type="text" value="{{$data->state}}" name="state" class="form-control" id="state" placeholder="Enter your state."> 
                        </div>
                        <div class="mb-3">
                            <label for="pincode" class="form-label">Pin code</label>
                            <input type="number" value="{{$data->pincode}}" name="pincode" class="form-control" id="pincode" placeholder="Enter your pin code.">
                        </div> 
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <input type="text" value="{{$data->city}}" name="city" class="form-control" id="city" placeholder="Enter your city.">
                        </div>                                   
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="gstNumber" class="form-label">GST Number</label>
                            <input type="text" value="{{$data->gstNumber}}" name="gstNumber" class="form-control" id="gstNumber" required autofocus placeholder="Enter your GST number.">
                        </div>
                        <div class="mb-3">
                            <label for="customerCode" class="form-label">Customer Code</label>
                            <input type="text" value="{{$data->customerCode}}" name="customerCode" class="form-control" id="customerCode" placeholder="Enter your customer code."> 
                        </div>
                        <div class="mb-3">
                            <label for="underGroup" class="form-label">Under Group</label>
                            {{-- <input type="text"  placeholder="Enter the group your customer belongs to.">  --}}
                            <select name="underGroup" class="form-control" id="underGroup">
                                <option value="" disabled>Select Group</option>
                                <option value="Sundry Debtors" {{ $data->underGroup == 'Sundry Debtors' ? 'selected' : '' }}>Sundry Debtors</option>
                                <option value="Shubham co ltd pune" {{ $data->underGroup == 'Shubham co ltd pune' ? 'selected' : '' }}>Shubham co ltd pune</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="panNumber" class="form-label">PAN Number</label>
                            <input type="text" value="{{$data->panNumber}}" name="panNumber" class="form-control" id="panNumber" placeholder="Enter your PAN number.">
                        </div> 
                        <div class="mb-3">
                            <label for="adharNumber" class="form-label">Adhar Number</label>
                            <input type="number" value="{{$data->adharNumber}}" name="adharNumber" class="form-control" id="adharNumber" placeholder="Enter your Adhar number.">
                        </div>
                        <div class="mb-3">
                            <label for="remark" class="form-label">Remark</label>
                            <input type="text" value="{{$data->remark}}" name="remark" class="form-control" id="remark" placeholder="Enter any remarks.">
                        </div>
                    </div>
                </div>
            </div>
            {{-- secound tab content --}}
            <div class="tab-pane fade" id="pills-condetail" role="tabpanel" aria-labelledby="pills-condetail-tab" tabindex="0">
                <div class="row">
                    <div class="col-6">                    
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" value="{{$data->email}}" name="email" class="form-control" id="email" placeholder="Enter your customer email.">
                        </div>
                        <div class="mb-3">
                            <label for="monumber" class="form-label">Mobile Number</label>
                            <input type="number" value="{{$data->monumber}}" name="monumber" class="form-control" id="monumber" placeholder="Enter your mobile number."> 
                        </div>
                        <div class="mb-3">
                            <label for="contactperson" class="form-label">Contact Person</label>
                            <input type="text" value="{{$data->contactperson}}" name="contactperson" class="form-control" id="contactperson" placeholder="Enter the contact person's name."> 
                        </div>                                   
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="hirer" class="form-label">Hirer</label>
                            <input type="text" value="{{$data->hirer}}" name="hirer" class="form-control" id="hirer" placeholder="Enter the hirer's name.">
                        </div>
                        <div class="mb-3">
                            <label for="whatsappNumber" class="form-label">WhatsApp Number</label>
                            <input type="number" value="{{$data->whatsappNumber}}" name="whatsappNumber" class="form-control" id="whatsappNumber" placeholder="Enter your WhatsApp number."> 
                        </div>                        
                    </div>
                </div>
            </div>
            {{-- third tab content --}}
            <div class="tab-pane fade" id="pills-findetail" role="tabpanel" aria-labelledby="pills-findetail-tab" tabindex="0">
                <div class="row">
                    <div class="col-6">   
                        <div class="mb-3">
                            <label for="tds" class="form-label">TDS Percent (%)</label>
                            <input type="number" value="{{$data->tds}}" name="tds" class="form-control" id="tds" placeholder="Enter the TDS percent.">
                        </div>                 
                        <div class="mb-3">
                            <label for="openingbalance" class="form-label">Opening Balance</label>
                            <input type="number" value="{{$data->openingbalance}}" name="openingbalance" class="form-control" id="openingbalance" required autofocus placeholder="Enter the opening balance.">
                            <select id="openingbalancestatus" name="openingbalancestatus">
                                <option value="dr">To Receive (Dr)</option>
                                <option value="cr">To Pay (Cr)</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="vendorcode" class="form-label">Vendor Code</label>
                            <input type="text" value="{{$data->vendorcode}}" name="vendorcode" class="form-control" id="vendorcode" placeholder="Enter the vendor code."> 
                        </div>                                   
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="biltycharges" class="form-label">Bilty Charges</label>
                            <input type="number" value="{{$data->biltycharges}}" name="biltycharges" class="form-control" id="biltycharges" placeholder="Enter the bilty charges.">
                        </div>
                        <div class="mb-3">
                            <label for="creditlimit" class="form-label">Credit Limit</label>
                            <input type="number" value="{{$data->creditlimit}}" name="creditlimit" class="form-control" id="creditlimit" placeholder="Enter the credit limit.">
                        </div>                       
                    </div>
                </div>
            </div>

            {{-- fourth tab content --}}
            <div class="tab-pane fade" id="pills-moreinfo" role="tabpanel" aria-labelledby="pills-moreinfo-tab" tabindex="0">
                <div class="row">
                    <div class="col-6">   
                        <div class="mb-3">
                            <label for="billformate"  class="form-label">Bill Format</label>
                            <select id="billformate" name="billformate"  class="form-label">
                                <option value="" disabled>Select Bill Format</option>
                                <option value="Sale bill" {{ $data->billformate == 'Sale bill' ? 'selected' : '' }}>Sale bill</option>
                                <option value="LR billing" {{ $data->billformate == 'LR billing' ? 'selected' : '' }}>LR billing</option>
                                <option value="Bill Annexure" {{ $data->billformate == 'Bill Annexure' ? 'selected' : '' }}>Bill Annexure</option>
                                <option value="bill" {{ $data->billformate == 'bill' ? 'selected' : '' }}>Bill</option>
                                <option value="velan" {{ $data->billformate == 'velan' ? 'selected' : '' }}>Velan</option>
                                <option value="bill2" {{ $data->billformate == 'bill2' ? 'selected' : '' }}>Bill 2</option>
                                <option value="Challan to bill" {{ $data->billformate == 'Challan to bill' ? 'selected' : '' }}>Challan to bill</option>
                                <option value="Challan Bill new" {{ $data->billformate == 'Challan Bill new' ? 'selected' : '' }}>Challan Bill new</option>
                                <option value="Charges bill" {{ $data->billformate == 'Charges bill' ? 'selected' : '' }}>Charges bill</option>
                            </select>
                        </div>                 
                        <div class="mb-3">
                            <label for="transporterparty" class="form-label">Transporter / Party</label>
                            <select id="transporterparty" name="transporterparty"  class="form-label">
                                <option value="Transporter" {{ $data->transporterparty == 'Transporter' ? 'selected' : '' }}>Transporter</option>
                                <option value="Party" {{ $data->transporterparty == 'Party' ? 'selected' : '' }}>Party</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">   
                        <div class="mb-3">
                            <label for="partyType"  class="form-label">Party Type</label>
                            <select id="partyType" name="partyType"  class="form-label">
                                <option value="" disabled>Select Party Type</option>
                                <option value="Billing" {{ $data->partyType == 'Billing' ? 'selected' : '' }}>Billing</option>
                                <option value="Consignor" {{ $data->partyType == 'Consignor' ? 'selected' : '' }}>Consignor</option>
                                <option value="All" {{ $data->partyType == 'All' ? 'selected' : '' }}>All</option>
                                <option value="Consignee" {{ $data->partyType == 'Consignee' ? 'selected' : '' }}>Consignee</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex gap-2">
                <input type="submit" class="btn btn-primary py-2 px-3 ml-2 px-2 py-1 d-inline-block" value="Submit"/>
            </div>
        </form>
        
        {{-- <div class="tab-pane fade show active" id="pills-gntab" role="tabpanel" aria-labelledby="pills-gntab-tab" tabindex="0">.1..</div> --}}
        {{-- <div class="tab-pane fade" id="pills-condetail" role="tabpanel" aria-labelledby="pills-condetail-tab" tabindex="0">..2.</div> --}}
        {{-- <div class="tab-pane fade" id="pills-findetail" role="tabpanel" aria-labelledby="pills-findetail-tab" tabindex="0">...3</div> --}}
        {{-- <div class="tab-pane fade" id="pills-moreinfo" role="tabpanel" aria-labelledby="pills-moreinfo-tab" tabindex="0">...4</div> --}}
    </div>
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