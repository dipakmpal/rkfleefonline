@extends('layouts.admin.app')

@section('content')
<style>
    .card{
        border-radius:20px;
    }

    .form-control,
    .form-select{
        border-radius:10px;
        height:45px;
    }

    .btn-primary{
        border-radius:10px;
    }

    .table-primary{
        background:#f3f0ff !important;
    }
</style>


<div class="container-fluid mt-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold mx-auto">Journal Voucher</h4>

        <div>
            <a href="#" class="btn btn-primary">
                <i class="fa fa-cog"></i> Settings
            </a>

            <a href="#" class="btn btn-primary">
                <i class="fa fa-plus"></i> Journal Voucher List
            </a>
        </div>
    </div>

    <!-- Main Card -->
    <div class="card shadow border rounded-4">
        <div class="card-body p-4">

            <!-- Top Form -->
            <div class="row">

                <div class="col-md-6">

                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">Firm Name</label>
                        <div class="col-md-9">
                            <select class="form-select">
                                <option>Select Firm</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">Income / Expense</label>
                        <div class="col-md-9">
                            <select class="form-select">
                                <option>Select Truck First</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">Date</label>
                        <div class="col-md-9">
                            <input type="date" class="form-control">
                        </div>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">Truck</label>
                        <div class="col-md-9">
                            <select class="form-select">
                                <option>Select Vehicle</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">Voucher No</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="60">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">Remark</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Enter Remark">
                        </div>
                    </div>

                </div>

            </div>

            <!-- Table -->
            <div class="table-responsive mt-4">
                <table class="table table-bordered align-middle">

                    <thead class="table-light">
                    <tr>
                        <th width="8%">No</th>
                        <th width="20%">DR/CR</th>
                        <th width="25%">Particular</th>
                        <th width="37%">Amount</th>
                        <th width="10%">Action</th>
                    </tr>
                    </thead>

                    <tbody id="voucherTableBody">

                    <tr>
                        <td>1</td>

                        <td>
                            <select class="form-select" name="drcr[]">
                                <option>Cr/From</option>
                                <option>Dr/To</option>
                            </select>
                        </td>

                        <td>
                            <select class="form-select" name="particular[]">
                                <option>Select</option>
                            </select>
                        </td>

                        <td>
                            <input type="number" class="form-control" name="amount[]" value="10000">
                        </td>

                        <td class="text-center">
                            <button type="button" class="btn btn-link text-danger removeRow">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>

                        <td>
                            <select class="form-select" name="drcr[]">
                                <option>Dr/To</option>
                                <option>Cr/From</option>
                            </select>
                        </td>

                        <td>
                            <select class="form-select" name="particular[]">
                                <option>Select</option>
                            </select>
                        </td>

                        <td>
                            <input type="number" class="form-control" name="amount[]" value="10000">
                        </td>

                        <td class="text-center">
                            <button type="button" class="btn btn-link text-danger removeRow">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>

                    </tbody>

                    <tfoot>
                    <tr class="table-primary">
                        <th colspan="5">Total</th>
                    </tr>
                    </tfoot>

                </table>
            </div>

            <!-- Add Row -->
            <div class="mb-4">
                <button type="button" class="btn btn-secondary" id="addRow">
                    <i class="fa fa-plus"></i> Add Row
                </button>
            </div>

            <!-- Buttons -->
            <div class="text-center">
                <button class="btn btn-primary px-4">
                    <i class="fa fa-save"></i> Save JV
                </button>

                <button class="btn btn-primary px-4 ms-2">
                    <i class="fa fa-refresh"></i> Clear Form
                </button>
            </div>

        </div>
    </div>

</div>

@endsection

@section('script')
<script>
$(document).ready(function () {
    $('#addRow').on('click', function () {
        let rowCount = $('#voucherTableBody tr').length + 1;

        let newRow = `
            <tr>
                <td>${rowCount}</td>
                <td>
                    <select class="form-select" name="drcr[]">
                        <option value="Cr/From">Cr/From</option>
                        <option value="Dr/To">Dr/To</option>
                    </select>
                </td>
                <td>
                    <select class="form-select" name="particular[]">
                        <option value="">Select</option>
                    </select>
                </td>
                <td>
                    <input type="number" class="form-control" name="amount[]" placeholder="Enter Amount">
                </td>
                <td class="text-center">
                    <button type="button" class="btn btn-link text-danger removeRow">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>
        `;

        $('#voucherTableBody').append(newRow);
    });

    $(document).on('click', '.removeRow', function () {
        $(this).closest('tr').remove();

        $('#voucherTableBody tr').each(function (index) {
            $(this).find('td:first').text(index + 1);
        });
    });
});
</script>
@endsection