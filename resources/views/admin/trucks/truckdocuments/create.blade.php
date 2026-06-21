@extends('layouts.admin.app')
@section('content')
<style>
    .document-card{
        border:1px solid #ddd;
        border-radius:12px;
        padding:25px;
        background:#fff;
        max-width:420px;
    }

    .section-title{
        font-weight:700;
        font-size:20px;
        margin-bottom:25px;
    }

    .optional-text{
        color:#999;
        font-size:14px;
    }

    .form-control,
    .form-select{
        height:55px;
        border-radius:10px;
    }

    textarea.form-control{
        height:100px;
        resize:none;
    }
</style>
    <div class="tms-page-content" id="page-purchase">
        <div class="d-flex justify-content-between align-items-center mb-4">
            
            <div class="d-flex align-items-center gap-2">
                <button class="btn btn-outline-secondary btn-sm rounded-circle" onclick="document.querySelector('[data-page=page-dashboard]').click()">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <h4 class="fw-bold mb-0 text-dark">Add Truck documents</h4>
            </div>
            <div class="d-flex gap-2">
                <a href="{{ route('truckdocument.index') }}" class="btn btn-outline-primary btn-sm bg-white border">
                    <i class="fas fa-list me-1"></i>Truck documents list
                </a>
            </div>
        </div>
        <div class="m-2">
        <form action="{{ route('truckdocument.store') }}" method="POST" enctype="multipart/form-data" id="mastercreateForm">
        @csrf
            <div class="row">
                <div class="col-6">                    
                    <div class="mb-3">
                        <label for="truckno" class="form-label">Truck no</label>
                        <select name="truckno" class="form-control" id="truckno">
                            <option value="" disabled selected>Select truck number</option>
                            <option value="Select truck number">Select truck number</option>
                            <option value="Select truck number1">Select truck number1</option>
                            <option value="Select truck number2">Select truck number2</option>
                            <option value="Select truck number3">Select truck number3</option>
                            <option value="Select truck number4">Select truck number4</option>
                            <option value="Select truck number5">Select truck number5</option>
                        </select>                   
                    </div>
                </div>
                {{-- <div class="col-6">
                    <div class="mb-3">
                        <label for="document" class="form-label">Document</label>
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-3">
                                <div class="border border-dashed rounded-3 p-4 text-center bg-light">
                                    <i class="fas fa-cloud-upload-alt fa-2x text-primary mb-2"></i>
                                    <p class="mb-2 fw-semibold">Upload truck document</p>
                                    <input type="file" name="document" class="form-control" id="document">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="row">
                {{-- INSURANCE --}}
                <div class="col-4 border border-dark -bottom-3 p-2 rounded-3">

                    <div class="section-title">
                        <i class="bi bi-file-earmark-text me-2"></i>
                        INSURANCE
                    </div>

                    <!-- Document -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">
                            Document File
                            <span class="optional-text">(Optional)</span>
                        </label>

                        <input type="file" class="form-control">
                    </div>

                    <!-- Expiry Date -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">
                            Expiry Date
                            <span class="optional-text">(Optional)</span>
                        </label>

                        <input type="date" class="form-control">
                    </div>

                    <!-- Remark -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Remark
                        </label>

                        <textarea class="form-control" placeholder="Enter remark (optional)"></textarea>
                    </div>

                </div>

                {{-- Fitness --}}
                <div class="col-4 border border-dark -bottom-3 p-2 rounded-3">

                    <div class="section-title">
                        <i class="bi bi-file-earmark-text me-2"></i>
                        Fitness
                    </div>

                    <!-- Document -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">
                            Document File
                            <span class="optional-text">(Optional)</span>
                        </label>

                        <input type="file" class="form-control">
                    </div>

                    <!-- Expiry Date -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">
                            Expiry Date
                            <span class="optional-text">(Optional)</span>
                        </label>

                        <input type="date" class="form-control">
                    </div>

                    <!-- Remark -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Remark
                        </label>

                        <textarea class="form-control" placeholder="Enter remark (optional)"></textarea>
                    </div>

                </div>
                {{-- PUC --}}
                <div class="col-4 border border-dark -bottom-3 p-2 rounded-3">
                    <div class="section-title">
                        <i class="bi bi-file-earmark-text me-2"></i>
                        PUC    
                    </div>

                    <!-- Document -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">
                            Document File
                            <span class="optional-text">(Optional)</span>
                        </label>

                        <input type="file" class="form-control">
                    </div>

                    <!-- Expiry Date -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">
                            Expiry Date
                            <span class="optional-text">(Optional)</span>
                        </label>

                        <input type="date" class="form-control">
                    </div>

                    <!-- Remark -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Remark
                        </label>

                        <textarea class="form-control" placeholder="Enter remark (optional)"></textarea>
                    </div>                    
                </div>

{{-- Permit --}}
                <div class="col-4 border border-dark -bottom-3 p-2 rounded-3">
                    <div class="section-title">
                        <i class="bi bi-file-earmark-text me-2"></i>
                        Permit    
                    </div>

                    <!-- Document -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">
                            Document File
                            <span class="optional-text">(Optional)</span>
                        </label>

                        <input type="file" class="form-control">
                    </div>

                    <!-- Expiry Date -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">
                            Expiry Date
                            <span class="optional-text">(Optional)</span>
                        </label>

                        <input type="date" class="form-control">
                    </div>

                    <!-- Remark -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Remark
                        </label>

                        <textarea class="form-control" placeholder="Enter remark (optional)"></textarea>
                    </div>                    
                </div>
{{-- rc --}}
                <div class="col-4 border border-dark -bottom-3 p-2 rounded-3">
                    <div class="section-title">
                        <i class="bi bi-file-earmark-text me-2"></i>
                        RC
                    </div>

                    <!-- Document -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">
                            Document File
                            <span class="optional-text">(Optional)</span>
                        </label>

                        <input type="file" class="form-control">
                    </div>

                    <!-- Expiry Date -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">
                            Expiry Date
                            <span class="optional-text">(Optional)</span>
                        </label>

                        <input type="date" class="form-control">
                    </div>

                    <!-- Remark -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Remark
                        </label>

                        <textarea class="form-control" placeholder="Enter remark (optional)"></textarea>
                    </div>                    
                </div>
            </div>
            

            <div class="d-flex gap-2 mt-3">
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