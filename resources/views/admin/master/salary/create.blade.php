@extends('layouts.admin.app')
@section('content')

    <div class="tms-page-content" id="page-purchase">
        <div class="d-flex justify-content-between align-items-center mb-4">
            
            <div class="d-flex align-items-center gap-2">
                <button class="btn btn-outline-secondary btn-sm rounded-circle" onclick="document.querySelector('[data-page=page-dashboard]').click()">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <h4 class="fw-bold mb-0 text-dark">Add Employee Salary</h4>
            </div>
            <div class="d-flex gap-2">
                <a href="{{ route('salary.index') }}" class="btn btn-outline-primary btn-sm bg-white border">
                    <i class="fas fa-list me-1"></i>Employee Salary list
                </a>
            </div>
        </div>
        <div class="m-2">
        <form action="{{ route('salary.store') }}" method="POST" enctype="multipart/form-data" id="mastercreateForm">
        @csrf
            <div class="row m-2">
                <div class="col-6">                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Employee Name</label>
                        <select name="employee_id" class="form-control" id="employee_id">
                            <option value="" disabled selected>Select employee</option>
                            <option value="1">Employee 1</option>
                            <option value="2">Employee 2</option>
                            <option value="3">Employee 3</option>
                            <option value="4">Employee 4</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="salary" class="form-label">Salary</label>
                        <input type="number" name="salary" class="form-control" id="salary" placeholder="Enter employee salary."> 
                    </div>
                    <div class="mb-3">
                        <label for="days_in_month" class="form-label">Days in Month</label>
                        <input type="number" name="days_in_month" class="form-control" id="days_in_month" placeholder="Enter days in month."> 
                    </div>
                    <div class="mb-3">
                        <label for="off" class="form-label">Week Off</label>
                        <select name="off" class="form-control" id="off">
                            <option value="" disabled selected>Select week off</option>
                            <option value="sunday">Sunday</option>
                            <option value="monday">Monday</option>
                            <option value="tuesday">Tuesday</option>
                            <option value="wednesday">Wednesday</option>
                            <option value="thursday">Thursday</option>
                            <option value="friday">Friday</option>
                            <option value="saturday">Saturday</option>
                        </select> 
                    </div>                                   
                </div>
                <div class="col-6">                    
                    <div class="mb-3">
                        <label for="dateFrom" class="form-label">Date From</label>
                        <input type="date" name="dateFrom" class="form-control" id="dateFrom" placeholder="Enter date from.">
                    </div>
                    <div class="mb-3">
                        <label for="salaryType" class="form-label">Salary Type</label>
                        <select name="salaryType" class="form-control" id="salaryType">
                            <option value="" disabled selected>Select salary type</option>
                            <option value="monthly">Monthly</option>
                            <option value="weekly">Weekly</option>
                            <option value="daily">Daily</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="salary_date" class="form-label">Salary Date</label>
                        <input type="date" name="salary_date" class="form-control" id="salary_date" placeholder="Enter salary date.">
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