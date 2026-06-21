@extends('layouts.admin.app')
@section('content')

    <div class="tms-page-content" id="page-purchase">
        <div class="d-flex justify-content-between align-items-center mb-4">
            
            <div class="d-flex align-items-center gap-2">
                <button class="btn btn-outline-secondary btn-sm rounded-circle" onclick="document.querySelector('[data-page=page-dashboard]').click()">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <h4 class="fw-bold mb-0 text-dark">Add Truck type</h4>
            </div>
            <div class="d-flex gap-2">
                <a href="{{ route('trucktype.index') }}" class="btn btn-outline-primary btn-sm bg-white border">
                    <i class="fas fa-list me-1"></i>Truck list
                </a>
            </div>
        </div>
        <div class="m-2">
        <form action="{{ route('trucktype.store') }}" method="POST" enctype="multipart/form-data" id="mastercreateForm">
        @csrf
            <div class="row m-2">
                <div class="col-6">                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Vehical type</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter vehicle type.">
                    </div> 
                </div>
                <div class="col-6">    
                    <div class="mb-3">
                        <label for="remark" class="form-label">Remark</label>
                        <input type="text" name="remark" class="form-control" id="remark" placeholder="Enter remark.">
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
        name: 'Please enter vehicle type.',
      },
      errorElement : 'div',
      errorLabelContainer: '.errorTxt'
    });
  });
</script>
@endsection