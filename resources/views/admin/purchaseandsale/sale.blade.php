@extends('layouts.admin.app')
@section('content')

<!-- PAGE: SALE BILL -->
<div class="tms-page-content" id="page-sale-bill">
    <!-- SUB-VIEW: SALE BILL FORM -->
    <div id="saleBillFormView">
        <div class="d-flex justify-content-between align-items-center mb-4">
            
            <div class="d-flex align-items-center gap-2">
                <button class="btn btn-outline-secondary btn-sm rounded-circle" onclick="document.querySelector('[data-page=page-dashboard]').click()">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <h4 class="fw-bold mb-0 text-dark">Add Sale</h4>
            </div>
            <div class="d-flex gap-2">
                  <button class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#expenseModal">
    <i class="bi bi-plus"></i>
    Add New Expense
</button>
                <button class="btn btn-outline-secondary btn-sm bg-white border" onclick="showToast('Sales settings opened!', 'info')">
                    <i class="fas fa-cog me-1"></i> Settings
                </button>
                <button class="btn btn-outline-primary btn-sm bg-white border" id="toggleSaleListViewBtn">
                    <i class="fas fa-list me-1"></i> Sale List
                </button>
            </div>
        </div>

        <div class="row g-4">
            <!-- Left Side: Invoice Details & Items -->
            <div class="col-lg-8">
                <div class="tms-card">
                    <form action="{{ route('sale-create') }}" method="POST" enctype="multipart/form-data" id="saleBillForm">
                        @csrf
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-semibold">Bill No</label>
                                <input type="text" name="billno" class="form-control" id="saleBillNoInput" placeholder="Enter Bill No.">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-semibold">Bill Date</label>
                                <input type="date" name="date" class="form-control" id="saleBillDateInput" value="{{ date('Y-m-d') }}">
                            </div>
                            <div class="col-12">
                                <label class="form-label text-muted small fw-semibold">Customer Name</label>
                                <select class="form-select" id="saleCustomerNameSelect" name="customer_name">
                                    <option value="" disabled>Select Customer Name</option>
                                    <option value="Adani Logistics Ltd." selected>Adani Logistics Ltd.</option>
                                    <option value="Tata Steel Cargo Division">Tata Steel Cargo Division</option>
                                    <option value="Reliance Retail Logistics">Reliance Retail Logistics</option>
                                </select>
                            </div>
                        </div>

                        <!-- Item Table -->
                        <div class="table-responsive border rounded mb-3">
                            <table class="table table-hover align-middle mb-0" id="saleItemsTable" style="min-width: 750px;">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width: 70px;" class="text-center">No</th>
                                        <th>Item Name</th>
                                        <th style="width: 100px;" class="text-center">Quantity</th>
                                        <th style="width: 120px;" class="text-end">Rate</th>
                                        <th style="width: 110px;" class="text-end">Discount</th>
                                        <th style="width: 110px;" class="text-center">GST(%)</th>
                                        <th style="width: 140px;" class="text-end">Total</th>
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
                                            <select name="item_name[]" class="form-select form-select-sm">
                                                <option value="" selected disabled>Select Item</option>
                                                <option value="freight">Freight Charges</option>
                                                <option value="local">Local Delivery</option>
                                                <option value="detention">Detention Charges</option>
                                                <option value="loading">Loading / Unloading</option>
                                                <option value="toll">Toll Reimbursement</option>
                                            </select>
                                        </td>

                                        <!-- Quantity -->
                                        <td>
                                            <input type="number"
                                                name="qty[]"
                                                class="form-control form-control-sm text-center sale-qty"
                                                min="0">
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
                                            <input type="number"
                                                name="discount[]"
                                                class="form-control form-control-sm text-end sale-discount"
                                                min="0">
                                        </td>

                                        <!-- GST -->
                                        <td>
                                            <select name="gst[]" class="form-select form-select-sm sale-gst">
                                                <option value="0">0%</option>
                                                <option value="5">5%</option>
                                                <option value="12">12%</option>
                                                <option value="18" selected>18%</option>
                                                <option value="28">28%</option>
                                            </select>
                                        </td>

                                        <!-- Total -->
                                        <td class="text-end fw-semibold align-middle">
                                            <input type="hidden" name="total[]">
                                            <span class="sale-row-total">₹ 17,700.00</span>
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

                        <div class="mb-4">
                            <a href="#" class="btn btn-link btn-sm text-decoration-none fw-semibold p-0" id="addSaleItemBtn">
                                <i class="fas fa-plus me-1"></i> Add Another Expense                                        </a>
                        </div>

                        <!-- Optional Fields Toggles -->
                        <div class="d-flex flex-wrap gap-3 mb-4">
                            <a href="#collapseSaleNote" class="text-decoration-none small fw-semibold text-secondary" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseSaleNote">
                                <i class="fas fa-plus me-1"></i> Add Note
                            </a>
                            <a href="#collapseSaleShipping" class="text-decoration-none small fw-semibold text-secondary" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseSaleShipping">
                                <i class="fas fa-plus me-1"></i> Add Shipping Address Details
                            </a>
                            <a href="#collapseSaleTransporter" class="text-decoration-none small fw-semibold text-secondary" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseSaleTransporter">
                                <i class="fas fa-plus me-1"></i> Add Transporter Details
                            </a>
                        </div>

                        <!-- Collapsible Note Section -->
                        <div class="collapse mb-3" id="collapseSaleNote">
                            <div class="card card-body bg-light border-0 p-3">
                                <label class="form-label text-muted small fw-semibold">Note / Remarks</label>
                                <textarea class="form-control" rows="2" placeholder="Enter note..." name="noteforsale"></textarea>
                            </div>
                        </div>

                        <!-- Collapsible Shipping Section -->
                        <div class="collapse mb-3" id="collapseSaleShipping">
                            <div class="card card-body bg-light border-0 p-3">
                                <h6 class="fw-bold mb-3 small">Shipping Details</h6>
                                <div class="row g-3">
                                    <div class="col-md-8">
                                        <label class="form-label text-muted small">Shipping Address</label>
                                        <input type="text" class="form-control form-control-sm" name="shippingaddress" placeholder="Destination Address">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label text-muted small">GSTIN / State Code</label>
                                        <input type="text" name="gstinstatecode" class="form-control form-control-sm" placeholder="e.g. 24 - Gujarat">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Collapsible Transporter Section -->
                        <div class="collapse mb-4" id="collapseSaleTransporter">
                            <div class="card card-body bg-light border-0 p-3">
                                <h6 class="fw-bold mb-3 small">Transporter Details</h6>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label class="form-label text-muted small">Transporter Name</label>
                                        <input type="text" name="transportername" class="form-control form-control-sm" placeholder="e.g. Blue Dart">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label text-muted small">Vehicle No</label>
                                        <input type="text" name="vehicleno" class="form-control form-control-sm" placeholder="e.g. MH04-GP-1234">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label text-muted small">E-Way Bill / LR No</label>
                                        <input type="text" name="ewaybillno" class="form-control form-control-sm" placeholder="e.g. LR-2026-98">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-flex gap-2">
                            {{-- <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button> --}}
                            <input type="submit" class="btn btn-primary py-2 px-3 ml-2 px-2 py-1 d-inline-block" value="Submit"/>
                        </div>
                    </form>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-outline-secondary d-flex align-items-center gap-2" id="clearSaleFormBtn">
                            <i class="fas fa-sync-alt"></i> Clear Form
                        </button>
                        <button type="button" class="btn btn-success d-flex align-items-center gap-2" onclick="showToast('Printing Invoice...', 'success')">
                            <i class="fas fa-print"></i> Save & Print
                        </button>
                    </div>
                </div>
            </div>

            <!-- Right Side: Calculations Panel -->
            <div class="col-lg-4">
                <div class="tms-card d-flex flex-column gap-4">
                    <!-- Additional Charges -->
                    <div>
                        <h6 class="fw-bold mb-3"><i class="fas fa-plus text-primary me-2"></i>Additional Charges</h6>
                        <div class="d-flex gap-2 align-items-center mb-2">
                            <select class="form-select form-select-sm" style="flex: 2;">
                                <option value="" disabled>Select Charges</option>
                                <option value="loading" selected>Loading Charges</option>
                                <option value="unloading">Unloading Charges</option>
                                <option value="other">Other Charges</option>
                            </select>
                            <input type="number" class="form-control form-control-sm text-end" id="saleChargeAmount" placeholder="00.00" value="500" style="flex: 1;">
                            <button type="button" class="btn btn-sm btn-outline-danger border-0" onclick="document.getElementById('saleChargeAmount').value=0; document.getElementById('saleChargeAmount').dispatchEvent(new Event('input'));">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                        <a href="#" class="small text-decoration-none fw-semibold text-primary" onclick="showToast('Extended charges configuration opened', 'info')">+ Add Charges</a>
                    </div>

                    <!-- Summary Metrics -->
                    <div class="border-top pt-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted small fw-semibold">Bill Amount</span>
                            <span class="fw-bold text-dark" id="summaryBillAmount">₹ 18,200.00</span>
                        </div>

                        <!-- Deduct TDS Option -->
                        <div class="d-flex flex-column gap-2 mb-3 pb-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-check form-switch p-0 m-0 d-flex align-items-center gap-2">
                                    <input class="form-check-input ms-0" type="checkbox" id="saleTdsCheck">
                                    <label class="form-check-label text-muted small fw-semibold" for="saleTdsCheck">Deduct TDS</label>
                                </div>
                                <div class="input-group input-group-sm" style="width: 90px;">
                                    <input type="number" class="form-control text-center" id="saleTdsPercent" value="2.00" min="0" max="100" step="0.1">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-muted small">TDS Amount</span>
                                <span class="fw-semibold text-danger" id="summaryTdsAmount">₹ 0.00</span>
                            </div>
                        </div>

                        <!-- Round Off Option -->
                        <div class="d-flex flex-column gap-2 mb-3 pb-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-check form-switch p-0 m-0 d-flex align-items-center gap-2">
                                    <input class="form-check-input ms-0" type="checkbox" id="saleRoundCheck" checked>
                                    <label class="form-check-label text-muted small fw-semibold" for="saleRoundCheck">Auto Round Off</label>
                                </div>
                                <span class="fw-semibold text-secondary" id="summaryRoundOff">₹ 0.00</span>
                            </div>
                        </div>

                        <!-- Final Payable Amount -->
                        <div class="bg-light p-3 rounded d-flex justify-content-between align-items-center">
                            <div>
                                <span class="text-muted small fw-bold d-block">Payable Amount</span>
                                <span class="text-muted small" style="font-size: 0.7rem;">Inclusive of GST & Charges</span>
                            </div>
                            <span class="fw-extrabold fs-4 text-primary" id="summaryPayableAmount">₹ 18,200.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SUB-VIEW: SALE BILL LIST -->
    <div id="saleBillListView" class="d-none">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold mb-0 text-dark"><i class="fas fa-list text-primary me-2"></i>Sales Register</h4>
            <button class="btn btn-primary btn-sm" id="toggleSaleFormViewBtn">
                <i class="fas fa-plus me-1"></i> Add Sale
            </button>
        </div>
        <div class="tms-card">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Bill No</th>
                            <th>Date</th>
                            <th>Customer Name</th>
                            <th>Subtotal</th>
                            <th>GST Amount</th>
                            <th>Charges</th>
                            <th>TDS Deducted</th>
                            <th>Total Payable</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>SB-2026-0489</strong></td>
                            <td>2026-05-20</td>
                            <td>Adani Logistics Ltd.</td>
                            <td>₹ 25,000.00</td>
                            <td>₹ 4,500.00</td>
                            <td>₹ 1,200.00</td>
                            <td>₹ 0.00</td>
                            <td class="fw-semibold text-primary">₹ 30,700.00</td>
                            <td><span class="badge bg-success-light text-success">PAID</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-secondary border-0" onclick="showToast('Printing SB-2026-0489...', 'success')"><i class="fas fa-print"></i></button>
                                <button class="btn btn-sm btn-outline-primary border-0" onclick="showToast('Viewing invoice ledger', 'info')"><i class="fas fa-eye"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>SB-2026-0490</strong></td>
                            <td>2026-05-21</td>
                            <td>Tata Steel Cargo Division</td>
                            <td>₹ 48,000.00</td>
                            <td>₹ 8,640.00</td>
                            <td>₹ 0.00</td>
                            <td>₹ 1,132.80</td>
                            <td class="fw-semibold text-primary">₹ 55,507.00</td>
                            <td><span class="badge bg-warning-light text-warning">PARTIAL</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-secondary border-0" onclick="showToast('Printing SB-2026-0490...', 'success')"><i class="fas fa-print"></i></button>
                                <button class="btn btn-sm btn-outline-primary border-0" onclick="showToast('Viewing invoice ledger', 'info')"><i class="fas fa-eye"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="expenseModal" tabindex="-1" aria-labelledby="expenseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="expenseModalLabel">
                    Add New Expense
                </h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Body -->
            <div class="modal-body">

                <div class="mb-3">
                    <label class="form-label">Expense Name</label>
                    <input type="text" class="form-control" placeholder="Enter expense name">
                </div>

                {{-- <div class="mb-3">
                    <label class="form-label">Amount</label>
                    <input type="number" class="form-control" placeholder="Enter amount">
                </div> --}}

            </div>

            <!-- Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Close
                </button>

                <button type="button" class="btn btn-primary">
                    Save Expense
                </button>
            </div>

        </div>
    </div>
</div>

@endsection