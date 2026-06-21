@extends('layouts.admin.app')
@section('content')

    <div class="tms-page-content" id="page-purchase">
        <div class="d-flex justify-content-between align-items-center mb-4">
            
            <div class="d-flex align-items-center gap-2">
                <button class="btn btn-outline-secondary btn-sm rounded-circle" onclick="document.querySelector('[data-page=page-dashboard]').click()">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <h4 class="fw-bold mb-0 text-dark">Add Truck</h4>
            </div>
            <div class="d-flex gap-2">
                <a href="{{ route('addtruck.index') }}" class="btn btn-outline-primary btn-sm bg-white border">
                    <i class="fas fa-list me-1"></i>Truck list
                </a>
            </div>
        </div>
        <div class="m-2">
        <form action="{{ route('addtruck.store') }}" method="POST" enctype="multipart/form-data" id="mastercreateForm">
        @csrf
            <div class="row m-2">
                <div class="col-6">                    
                    <div class="mb-3">
                        <label for="truckno" class="form-label">Truck no</label>
                        <input type="text" name="truckno" class="form-control" id="truckno" placeholder="Enter truck no.">
                    </div>                    
                    <div class="mb-3">
                        <label for="fastTagName" class="form-label">FastTag Name</label>
                        <input type="text" name="fastTagName" class="form-control" id="fastTagName" placeholder="Enter fast tag name.">
                    </div>                    
                    <div class="mb-3">
                        <label for="remark" class="form-label">Remark</label>
                        <input type="text" name="remark" class="form-control" id="remark" placeholder="Enter remark.">
                    </div> 
                </div>
                <div class="col-6">    
                    <div class="mb-3">
                        <label for="trucktype" class="form-label">Truck Type</label>
                        <select name="trucktype" class="form-control" id="trucktype">
                            <option value="" disabled selected>Select truck type</option>
                            <option value="monthly">Monthly</option>
                            <option value="weekly">Weekly</option>
                            <option value="daily">Daily</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="capacity" class="form-label">Capacity</label>
                         <div class="row">
                            <div class="col-6">
                                <input type="text" name="capacity" class="form-control" id="capacity" placeholder="Enter capacity.">
                            </div>
                            <div class="col-6">
                                <select name="capacityunit" class="form-control" id="capacityunit">
                                    <option value="" disabled selected>Select capacity unit</option>
                                    <option value="kg">Kg</option>
                                    <option value="ton">Ton</option>
                                    <option value="kl">Kl</option>
                                    <option value="ltr">LTR</option>
                                    <option value="brass">Brass</option>
                                    <option value="cubicmeter">Cubic Meter</option>
                                </select>
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
        truckno: {
          required: true
        }
      },
      messages: {
        truckno: 'Please enter truck number.',
      },
      errorElement : 'div',
      errorLabelContainer: '.errorTxt'
    });
  });
</script>
@endsection