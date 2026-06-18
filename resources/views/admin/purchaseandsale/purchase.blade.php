@extends('layouts.admin.app')
@section('content')
<div class="tms-page-content" id="page-purchase">
    <!-- SUB-VIEW: PURCHASE FORM -->
    <div id="purchaseBillFormView">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex align-items-center gap-2">
                <button class="btn btn-outline-secondary btn-sm rounded-circle" onclick="document.querySelector('[data-page=page-dashboard]').click()">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <h4 class="fw-bold mb-0 text-dark">Add Purchase</h4>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-outline-secondary btn-sm bg-white border" onclick="showToast('Purchase settings opened!', 'info')">
                    <i class="fas fa-cog me-1"></i> Settings
                </button>
                <button class="btn btn-outline-success btn-sm bg-white border" id="togglePurchaseListViewBtn">
                    <i class="fas fa-list me-1"></i> Purchase List
                </button>
            </div>
        </div>

        <div class="row g-4">
            <!-- Left Side: Invoice Details & Items -->
            <div class="col-lg-8">
                <div class="tms-card">
                    <form id="purchaseBillForm" onsubmit="event.preventDefault(); showToast('Purchase Invoice logged successfully!', 'success');">
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-semibold">Vendor Invoice No</label>
                                <input type="text" class="form-control" id="purchaseBillNoInput" placeholder="Enter Invoice No." value="PB-2026-0982">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-semibold">Purchase Date</label>
                                <input type="date" class="form-control" id="purchaseBillDateInput" value="2026-05-22">
                            </div>
                            <div class="col-12">
                                <label class="form-label text-muted small fw-semibold">Vendor / Broker Name</label>
                                <select class="form-select" id="purchaseVendorSelect">
                                    <option value="" disabled>Select Vendor</option>
                                    <option value="1" selected>Rajesh Roadlines</option>
                                    <option value="2">Sher-E-Punjab Logistics</option>
                                    <option value="3">HP Fuel Plaza, NH48</option>
                                </select>
                            </div>
                        </div>

                        <!-- Item Table -->
                        <div class="table-responsive border rounded mb-3">
                            <table class="table table-hover align-middle mb-0" id="purchaseItemsTable" style="min-width: 750px;">
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
                                <tbody id="purchaseItemsTableBody">
                                    <tr>
                                        <td class="align-middle text-center">
                                            <button type="button" class="btn btn-sm btn-outline-danger border-0 delete-purchase-row">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                            <span class="ms-1 purchase-row-number">1</span>
                                        </td>
                                        <td>
                                            <select class="form-select form-select-sm">
                                                <option value="diesel" selected>Diesel Purchase</option>
                                                <option value="tyre">Tyre Purchase / Retreading</option>
                                                <option value="spare">Spare Parts</option>
                                                <option value="lubricant">Mobil & Lubricants</option>
                                                <option value="toll">Toll Recharge</option>
                                                <option value="driver">Driver Advance Payment</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-center purchase-qty" value="1" min="0">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-end purchase-rate" value="12000" min="0">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm text-end purchase-discount" value="0" min="0">
                                        </td>
                                        <td>
                                            <select class="form-select form-select-sm purchase-gst">
                                                <option value="0">0%</option>
                                                <option value="5">5%</option>
                                                <option value="12">12%</option>
                                                <option value="18" selected>18%</option>
                                                <option value="28">28%</option>
                                            </select>
                                        </td>
                                        <td class="text-end fw-semibold align-middle purchase-row-total">₹ 14,160.00</td>
                                    </tr>
                                </tbody>
                                <tfoot class="table-light">
                                    <tr>
                                        <td colspan="2" class="text-end fw-bold small">Total</td>
                                        <td id="purchaseFooterQty" class="text-center fw-bold small">1</td>
                                        <td></td>
                                        <td id="purchaseFooterDiscount" class="text-end fw-bold small">₹ 0</td>
                                        <td id="purchaseFooterGst" class="text-end fw-bold small">₹ 2,160.00</td>
                                        <td id="purchaseFooterTotal" class="text-end fw-bold small text-success">₹ 14,160.00</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class="mb-4">
                            <a href="#" class="btn btn-link btn-sm text-decoration-none fw-semibold p-0 text-success" id="addPurchaseItemBtn">
                                <i class="fas fa-plus me-1"></i> Add Item
                            </a>
                        </div>

                        <!-- Optional Fields Toggles -->
                        <div class="d-flex flex-wrap gap-3 mb-4">
                            <a href="#collapsePurchaseNote" class="text-decoration-none small fw-semibold text-secondary" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapsePurchaseNote">
                                <i class="fas fa-plus me-1"></i> Add Note
                            </a>
                            <a href="#collapsePurchaseVendor" class="text-decoration-none small fw-semibold text-secondary" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapsePurchaseVendor">
                                <i class="fas fa-plus me-1"></i> Add Vendor Details
                            </a>
                        </div>

                        <!-- Collapsible Note Section -->
                        <div class="collapse mb-3" id="collapsePurchaseNote">
                            <div class="card card-body bg-light border-0 p-3">
                                <label class="form-label text-muted small fw-semibold">Note / Remarks</label>
                                <textarea class="form-control" rows="2" placeholder="Enter purchase comments..."></textarea>
                            </div>
                        </div>

                        <!-- Collapsible Vendor Section -->
                        <div class="collapse mb-4" id="collapsePurchaseVendor">
                            <div class="card card-body bg-light border-0 p-3">
                                <h6 class="fw-bold mb-3 small">Vendor Details</h6>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label text-muted small">Vendor Contact Phone</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="e.g. +91 9999988888">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label text-muted small">Vendor GSTIN</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="e.g. 07AAAAA1111A1Z1">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success d-flex align-items-center gap-2">
                                <i class="fas fa-save"></i> Save Purchase
                            </button>
                            <button type="button" class="btn btn-outline-secondary d-flex align-items-center gap-2" id="clearPurchaseFormBtn">
                                <i class="fas fa-sync-alt"></i> Clear Form
                            </button>
                            <button type="button" class="btn btn-outline-success d-flex align-items-center gap-2" onclick="showToast('Printing Purchase Voucher...', 'success')">
                                <i class="fas fa-print"></i> Save & Print
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right Side: Calculations Panel -->
            <div class="col-lg-4">
                <div class="tms-card d-flex flex-column gap-4">
                    <!-- Additional Charges -->
                    <div>
                        <h6 class="fw-bold mb-3"><i class="fas fa-plus text-success me-2"></i>Additional Charges</h6>
                        <div class="d-flex gap-2 align-items-center mb-2">
                            <select class="form-select form-select-sm" style="flex: 2;">
                                <option value="" disabled>Select Charges</option>
                                <option value="loading">Loading Charges</option>
                                <option value="freight" selected>Inward Freight</option>
                                <option value="other">Other Charges</option>
                            </select>
                            <input type="number" class="form-control form-control-sm text-end" id="purchaseChargeAmount" placeholder="00.00" value="0" style="flex: 1;">
                            <button type="button" class="btn btn-sm btn-outline-danger border-0" onclick="document.getElementById('purchaseChargeAmount').value=0; document.getElementById('purchaseChargeAmount').dispatchEvent(new Event('input'));">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                        <a href="#" class="small text-decoration-none fw-semibold text-success" onclick="showToast('Purchase extra charges configured', 'info')">+ Add Charges</a>
                    </div>

                    <!-- Summary Metrics -->
                    <div class="border-top pt-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted small fw-semibold">Bill Amount</span>
                            <span class="fw-bold text-dark" id="purchaseSummaryBillAmount">₹ 14,160.00</span>
                        </div>

                        <!-- Deduct TDS Option -->
                        <div class="d-flex flex-column gap-2 mb-3 pb-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-check form-switch p-0 m-0 d-flex align-items-center gap-2">
                                    <input class="form-check-input ms-0" type="checkbox" id="purchaseTdsCheck">
                                    <label class="form-check-label text-muted small fw-semibold" for="purchaseTdsCheck">Deduct TDS</label>
                                </div>
                                <div class="input-group input-group-sm" style="width: 90px;">
                                    <input type="number" class="form-control text-center" id="purchaseTdsPercent" value="2.00" min="0" max="100" step="0.1">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-muted small">TDS Amount</span>
                                <span class="fw-semibold text-danger" id="purchaseSummaryTdsAmount">₹ 0.00</span>
                            </div>
                        </div>

                        <!-- Round Off Option -->
                        <div class="d-flex flex-column gap-2 mb-3 pb-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-check form-switch p-0 m-0 d-flex align-items-center gap-2">
                                    <input class="form-check-input ms-0" type="checkbox" id="purchaseRoundCheck" checked>
                                    <label class="form-check-label text-muted small fw-semibold" for="purchaseRoundCheck">Auto Round Off</label>
                                </div>
                                <span class="fw-semibold text-secondary" id="purchaseSummaryRoundOff">₹ 0.00</span>
                            </div>
                        </div>

                        <!-- Final Payable Amount -->
                        <div class="bg-light p-3 rounded d-flex justify-content-between align-items-center">
                            <div>
                                <span class="text-muted small fw-bold d-block">Total Purchase Value</span>
                                <span class="text-muted small" style="font-size: 0.7rem;">Inclusive of GST & Charges</span>
                            </div>
                            <span class="fw-extrabold fs-4 text-success" id="purchaseSummaryPayableAmount">₹ 14,160.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SUB-VIEW: PURCHASE LIST -->
    <div id="purchaseBillListView" class="d-none">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold mb-0 text-dark"><i class="fas fa-list text-success me-2"></i>Purchase Log</h4>
            <button class="btn btn-success btn-sm" id="togglePurchaseFormViewBtn">
                <i class="fas fa-plus me-1"></i> Add Purchase
            </button>
        </div>
        <div class="tms-card">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Invoice No</th>
                            <th>Date</th>
                            <th>Vendor Name</th>
                            <th>Subtotal</th>
                            <th>GST Amount</th>
                            <th>Charges</th>
                            <th>TDS Deducted</th>
                            <th>Total Value</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>PB-2026-0979</strong></td>
                            <td>2026-05-18</td>
                            <td>Rajesh Roadlines</td>
                            <td>₹ 85,000.00</td>
                            <td>₹ 0.00</td>
                            <td>₹ 0.00</td>
                            <td>₹ 0.00</td>
                            <td class="fw-semibold text-success">₹ 85,000.00</td>
                            <td><span class="badge bg-danger-light text-danger">UNPAID</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-secondary border-0" onclick="showToast('Printing PB-2026-0979...', 'success')"><i class="fas fa-print"></i></button>
                                <button class="btn btn-sm btn-outline-success border-0" onclick="showToast('Viewing vendor ledger', 'info')"><i class="fas fa-eye"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>PB-2026-0980</strong></td>
                            <td>2026-05-20</td>
                            <td>HP Fuel Plaza, NH48</td>
                            <td>₹ 10,000.00</td>
                            <td>₹ 1,800.00</td>
                            <td>₹ 0.00</td>
                            <td>₹ 0.00</td>
                            <td class="fw-semibold text-success">₹ 11,800.00</td>
                            <td><span class="badge bg-success-light text-success">PAID</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-secondary border-0" onclick="showToast('Printing PB-2026-0980...', 'success')"><i class="fas fa-print"></i></button>
                                <button class="btn btn-sm btn-outline-success border-0" onclick="showToast('Viewing vendor ledger', 'info')"><i class="fas fa-eye"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection