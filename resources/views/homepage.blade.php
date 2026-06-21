@extends('layouts.admin.app')
@section('content')

    <!-- MAIN CONTENT -->
    
        <!-- TOP HEADER -->
    

        <!-- CONTAINER AREA -->
        <div class="container-fluid p-4">
            
            <!-- PAGE: DASHBOARD -->
            <div class="tms-page-content" id="page-dashboard">
                <!-- TOP CARD METRICS -->
                <div class="row g-4 mb-4">
                    <div class="col-md-4">
                        <div class="tms-card d-flex align-items-center justify-content-between">
                            <div>
                                <span class="text-muted small fw-semibold uppercase tracking-wider">Active Trips</span>
                                <h3 class="fw-bold mt-1 mb-0">604</h3>
                            </div>
                            <div class="tms-card-icon-box active-trips">
                                <i class="fas fa-truck"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tms-card d-flex align-items-center justify-content-between">
                            <div>
                                <span class="text-muted small fw-semibold">Available Trucks</span>
                                <h3 class="fw-bold mt-1 mb-0">99</h3>
                            </div>
                            <div class="tms-card-icon-box available-trucks">
                                <i class="fas fa-truck-moving"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tms-card d-flex align-items-center justify-content-between">
                            <div>
                                <span class="text-muted small fw-semibold">Customer Balance</span>
                                <h3 class="fw-bold mt-1 mb-0">₹ 10,28,635</h3>
                            </div>
                            <div class="tms-card-icon-box customer-balance">
                                <i class="fas fa-wallet"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INCOME VS EXPENSE CHART -->
                <div class="row g-4 mb-4">
                    <div class="col-lg-8">
                        <div class="tms-card h-100">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h5 class="fw-bold text-dark mb-0">Income Vs Expense</h5>
                                <div class="d-flex gap-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-primary rounded-circle p-1" style="width: 8px; height: 8px; display: inline-block;"></span>
                                        <span class="small text-muted fw-semibold">Incomes: ₹ 54,44,295.88</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-secondary rounded-circle p-1" style="width: 8px; height: 8px; display: inline-block;"></span>
                                        <span class="small text-muted fw-semibold">Expenses: ₹ 23,44,091.50</span>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 320px; position: relative;">
                                <canvas id="incomeExpenseChart"></canvas>
                            </div>
                        </div>
                    </div>
                    
                    <!-- RECENT TRIPS SUMMARY -->
                    <div class="col-lg-4">
                        <div class="tms-card h-100">
                            <h5 class="fw-bold mb-3">Live Fleet Status</h5>
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex justify-content-between align-items-center p-2 rounded bg-light border-start border-3 border-success">
                                    <div>
                                        <span class="fw-bold small d-block">TRIP-9843 (HR55-9087)</span>
                                        <span class="text-muted small">Delhi to Mumbai | Full Load</span>
                                    </div>
                                    <span class="badge bg-success rounded-pill">ON ROAD</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center p-2 rounded bg-light border-start border-3 border-warning">
                                    <div>
                                        <span class="fw-bold small d-block">TRIP-9844 (MH02-4521)</span>
                                        <span class="text-muted small">Pune to Nagpur | Part Load</span>
                                    </div>
                                    <span class="badge bg-warning text-dark rounded-pill">LOADING</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center p-2 rounded bg-light border-start border-3 border-danger">
                                    <div>
                                        <span class="fw-bold small d-block">TRIP-9845 (DL01-1122)</span>
                                        <span class="text-muted small">Kolkata Depot | Maintenance</span>
                                    </div>
                                    <span class="badge bg-danger rounded-pill">BREAKDOWN</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center p-2 rounded bg-light border-start border-3 border-primary">
                                    <div>
                                        <span class="fw-bold small d-block">TRIP-9846 (GJ01-8899)</span>
                                        <span class="text-muted small">Ahmedabad to Jaipur | Loose Cargo</span>
                                    </div>
                                    <span class="badge bg-primary rounded-pill">DELIVERED</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PAGE: CUSTOMER MASTER -->
            <div class="tms-page-content" id="page-customer-master">
                <div class="tms-card">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="fw-bold mb-0"><i class="fas fa-users text-primary me-2"></i>Customgndhether Directory</h4>
                        <button class="btn btn-primary" onclick="showToast('Create Customer Form opened!', 'info')">
                            <i class="fas fa-user-plus me-1"></i> Add Customer
                        </button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Customer Name</th>
                                    <th>Contact Person</th>
                                    <th>Phone</th>
                                    <th>City / Station</th>
                                    <th>GSTIN</th>
                                    <th>Outstanding Bal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>CUST-001</strong></td>
                                    <td>Adani Logistics Ltd.</td>
                                    <td>Rakesh Verma</td>
                                    <td>+91 9876543210</td>
                                    <td>Mundra Port</td>
                                    <td>24AAACA1234F1Z8</td>
                                    <td class="text-danger fw-semibold">₹ 4,50,000</td>
                                    <td>
                                        <button class="btn btn-outline-primary btn-sm me-1"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>CUST-002</strong></td>
                                    <td>Tata Steel Cargo Division</td>
                                    <td>Sanjay Sen</td>
                                    <td>+91 8765432109</td>
                                    <td>Jamshedpur</td>
                                    <td>20AAACT5678Q1ZA</td>
                                    <td class="text-success fw-semibold">₹ -20,000</td>
                                    <td>
                                        <button class="btn btn-outline-primary btn-sm me-1"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>CUST-003</strong></td>
                                    <td>Reliance Retail Logistics</td>
                                    <td>Pooja Patel</td>
                                    <td>+91 9123456789</td>
                                    <td>Mumbai Hub</td>
                                    <td>27AAACR9012K1ZY</td>
                                    <td class="text-danger fw-semibold">₹ 5,98,635</td>
                                    <td>
                                        <button class="btn btn-outline-primary btn-sm me-1"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- PAGE: DRIVER & STAFF -->
            <div class="tms-page-content" id="page-driver-staff">
                <div class="tms-card">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="fw-bold mb-0"><i class="fas fa-id-card text-primary me-2"></i>Driver & Crew Records</h4>
                        <button class="btn btn-primary" onclick="showToast('Open Add Driver Wizard', 'info')">
                            <i class="fas fa-plus me-1"></i> Add Driver
                        </button>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card shadow-sm border-0">
                                <div class="card-body text-center">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=100" class="rounded-circle mb-3" width="70" height="70" alt="Avatar">
                                    <h6 class="fw-bold mb-1">Malkiat Singh</h6>
                                    <span class="badge bg-success-light text-success rounded-pill px-3 py-1 mb-3">On Duty - TRIP-9843</span>
                                    <p class="text-muted small mb-1"><i class="fas fa-phone-alt me-2"></i>+91 9414012345</p>
                                    <p class="text-muted small mb-3"><i class="fas fa-truck me-2"></i>Vehicle: HR55-9087</p>
                                    <div class="d-flex justify-content-around border-top pt-3">
                                        <button class="btn btn-link btn-sm text-decoration-none" onclick="showToast('Simulating live GPS location for Malkiat...', 'info')">
                                            <i class="fas fa-location-crosshairs me-1"></i> Track Location
                                        </button>
                                        <button class="btn btn-link btn-sm text-decoration-none text-secondary">
                                            <i class="fas fa-eye me-1"></i> View Profile
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow-sm border-0">
                                <div class="card-body text-center">
                                    <img src="https://images.unsplash.com/photo-1628157582853-a796fa650a6a?auto=format&fit=crop&q=80&w=100" class="rounded-circle mb-3" width="70" height="70" alt="Avatar">
                                    <h6 class="fw-bold mb-1">Satish Kumar</h6>
                                    <span class="badge bg-warning-light text-warning rounded-pill px-3 py-1 mb-3">Standby - Available</span>
                                    <p class="text-muted small mb-1"><i class="fas fa-phone-alt me-2"></i>+91 8899882211</p>
                                    <p class="text-muted small mb-3"><i class="fas fa-truck me-2"></i>Unassigned</p>
                                    <div class="d-flex justify-content-around border-top pt-3">
                                        <button class="btn btn-link btn-sm text-decoration-none text-muted" disabled>
                                            <i class="fas fa-location-crosshairs me-1"></i> Offline
                                        </button>
                                        <button class="btn btn-link btn-sm text-decoration-none text-secondary">
                                            <i class="fas fa-eye me-1"></i> View Profile
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow-sm border-0">
                                <div class="card-body text-center">
                                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=100" class="rounded-circle mb-3" width="70" height="70" alt="Avatar">
                                    <h6 class="fw-bold mb-1">Gurpreet Singh</h6>
                                    <span class="badge bg-danger-light text-danger rounded-pill px-3 py-1 mb-3">On Leave</span>
                                    <p class="text-muted small mb-1"><i class="fas fa-phone-alt me-2"></i>+91 9988223344</p>
                                    <p class="text-muted small mb-3"><i class="fas fa-truck me-2"></i>Vehicle: MH02-4521</p>
                                    <div class="d-flex justify-content-around border-top pt-3">
                                        <button class="btn btn-link btn-sm text-decoration-none text-muted" disabled>
                                            <i class="fas fa-location-crosshairs me-1"></i> Offline
                                        </button>
                                        <button class="btn btn-link btn-sm text-decoration-none text-secondary">
                                            <i class="fas fa-eye me-1"></i> View Profile
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PAGE: LR / BILTY BILLING -->
            <div class="tms-page-content" id="page-lr-billing">
                <div class="row g-4">
                    <div class="col-lg-8">
                        <div class="tms-card">
                            <h4 class="fw-bold mb-4"><i class="fas fa-file-circle-plus text-primary me-2"></i>Generate LR (Bilty)</h4>
                            <form id="lrForm" onsubmit="event.preventDefault(); showToast('LR / Bilty Generated and Saved Successfully!', 'success');">
                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold text-muted">LR Number</label>
                                        <input type="text" class="form-control" value="LR-2026-10254" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold text-muted">Date</label>
                                        <input type="date" class="form-control" value="2026-05-22">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold text-muted">Consignor (Sender)</label>
                                        <select class="form-select">
                                            <option>Adani Logistics Ltd.</option>
                                            <option>Reliance Retail</option>
                                            <option>Tata Steel</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold text-muted">Consignee (Receiver)</label>
                                        <select class="form-select">
                                            <option>Maruti Suzuki India Depot</option>
                                            <option>Amazon Warehouse BLR</option>
                                            <option>JSW Plant</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold text-muted">From Station</label>
                                        <input type="text" class="form-control" placeholder="Origin City" value="Gurgaon">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold text-muted">To Station</label>
                                        <input type="text" class="form-control" placeholder="Destination City" value="Bangalore">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label fw-semibold text-muted">Load Type</label>
                                        <select class="form-select">
                                            <option>Full Load</option>
                                            <option>Part Load</option>
                                            <option>Parchutan (Loose/Loose Goods)</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label fw-semibold text-muted">Weight (Tons)</label>
                                        <input type="number" step="0.1" class="form-control" value="15.5">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label fw-semibold text-muted">Freight Rate (Per Ton)</label>
                                        <input type="number" class="form-control" value="2500">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-2"><i class="fas fa-check-circle me-1"></i> Generate Digital Bilty</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tms-card h-100">
                            <h5 class="fw-bold mb-3">Freight Calculation</h5>
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                                    <span class="text-muted">Base Freight</span>
                                    <span class="fw-bold">₹ 38,750</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                                    <span class="text-muted">Labour (Hamali)</span>
                                    <span class="fw-bold">₹ 1,200</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                                    <span class="text-muted">GST (18% FCM)</span>
                                    <span class="fw-bold text-secondary">₹ 7,191</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-2 bg-light p-2 rounded">
                                    <span class="fw-bold">Total Bill Amount</span>
                                    <span class="fw-bold text-primary fs-5">₹ 47,141</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PAGE: TRIPS & DIESEL -->
            <div class="tms-page-content" id="page-trips-diesel">
                <div class="row g-4">
                    <div class="col-lg-8">
                        <div class="tms-card">
                            <h4 class="fw-bold mb-4"><i class="fas fa-truck-moving text-primary me-2"></i>Trip Setup & Operations</h4>
                            <div class="table-responsive">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th>Trip ID</th>
                                            <th>Vehicle</th>
                                            <th>Driver</th>
                                            <th>Route</th>
                                            <th>Diesel (Ltrs)</th>
                                            <th>Tolls Paid</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>TRIP-9843</strong></td>
                                            <td>HR55-9087</td>
                                            <td>Malkiat Singh</td>
                                            <td>Delhi-Mumbai</td>
                                            <td>320 L</td>
                                            <td>₹ 4,500</td>
                                            <td><span class="badge bg-success">ON ROAD</span></td>
                                        </tr>
                                        <tr>
                                            <td><strong>TRIP-9844</strong></td>
                                            <td>MH02-4521</td>
                                            <td>Gurpreet Singh</td>
                                            <td>Pune-Nagpur</td>
                                            <td>180 L</td>
                                            <td>₹ 2,100</td>
                                            <td><span class="badge bg-warning text-dark">LOADING</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tms-card">
                            <h5 class="fw-bold mb-3"><i class="fas fa-gas-pump text-danger me-2"></i>Diesel Slip Log</h5>
                            <form onsubmit="event.preventDefault(); showToast('Diesel slip logged & mileage re-calculated!', 'success');">
                                <div class="mb-3">
                                    <label class="form-label text-muted small fw-semibold">Select Active Vehicle</label>
                                    <select class="form-select">
                                        <option>HR55-9087 (Malkiat Singh)</option>
                                        <option>MH02-4521 (Gurpreet Singh)</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-muted small fw-semibold">Liters Fuelled</label>
                                    <input type="number" class="form-control" placeholder="Qty in Liters" value="120">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-muted small fw-semibold">Rate Per Liter</label>
                                    <input type="number" class="form-control" value="94.50">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-muted small fw-semibold">Pump Dealer</label>
                                    <input type="text" class="form-control" value="HP Fuel Plaza, NH48">
                                </div>
                                <button type="submit" class="btn btn-danger w-100">Log Fuel & Update Mileage</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PAGE: VENDORS -->
            <div class="tms-page-content" id="page-vendors">
                <div class="tms-card">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="fw-bold mb-0"><i class="fas fa-handshake text-primary me-2"></i>Vendor Broker Directory</h4>
                        <button class="btn btn-primary" onclick="showToast('Opened Broker Wizard', 'info')">
                            <i class="fas fa-plus me-1"></i> Add Broker
                        </button>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Broker Name</th>
                                    <th>Market Vehicles Supplied</th>
                                    <th>Pending Balance</th>
                                    <th>Last Booking</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Rajesh Roadlines</td>
                                    <td>12 Vehicles</td>
                                    <td class="text-danger fw-semibold">₹ 85,000</td>
                                    <td>2026-05-20</td>
                                    <td><button class="btn btn-sm btn-outline-primary" onclick="showToast('Viewed ledger for Rajesh Roadlines', 'info')">Ledger</button></td>
                                </tr>
                                <tr>
                                    <td>Sher-E-Punjab Logistics</td>
                                    <td>8 Vehicles</td>
                                    <td class="text-success fw-semibold">₹ 0</td>
                                    <td>2026-05-18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" onclick="showToast('Viewed ledger for Sher-E-Punjab', 'info')">Ledger</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- PAGE: TYRE MANAGEMENT -->
            <div class="tms-page-content" id="page-tyre-management">
                <div class="tms-card">
                    <h4 class="fw-bold mb-4"><i class="fas fa-circle-notch text-primary me-2"></i>Tyre Tracking System</h4>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="border p-3 rounded bg-light">
                                <h6 class="fw-bold mb-3">Vehicle HR55-9087 (10 Tyre Dumper)</h6>
                                <div class="d-flex flex-column align-items-center py-4">
                                    <div class="d-flex gap-4 mb-3">
                                        <div class="p-2 border bg-white rounded text-center" style="width: 60px;">FL<br><span class="badge bg-success">85%</span></div>
                                        <div class="p-2 border bg-white rounded text-center" style="width: 60px;">FR<br><span class="badge bg-success">88%</span></div>
                                    </div>
                                    <div class="d-flex gap-4 mb-3">
                                        <div class="p-2 border bg-white rounded text-center" style="width: 60px;">RL-O<br><span class="badge bg-warning text-dark">40%</span></div>
                                        <div class="p-2 border bg-white rounded text-center" style="width: 60px;">RL-I<br><span class="badge bg-warning text-dark">45%</span></div>
                                        <div class="p-2 border bg-white rounded text-center" style="width: 60px;">RR-I<br><span class="badge bg-success">80%</span></div>
                                        <div class="p-2 border bg-white rounded text-center" style="width: 60px;">RR-O<br><span class="badge bg-success">82%</span></div>
                                    </div>
                                    <div class="d-flex gap-4">
                                        <div class="p-2 border bg-white rounded text-center" style="width: 60px;">RL2-O<br><span class="badge bg-danger">15%</span></div>
                                        <div class="p-2 border bg-white rounded text-center" style="width: 60px;">RL2-I<br><span class="badge bg-danger">18%</span></div>
                                        <div class="p-2 border bg-white rounded text-center" style="width: 60px;">RR2-I<br><span class="badge bg-warning text-dark">35%</span></div>
                                        <div class="p-2 border bg-white rounded text-center" style="width: 60px;">RR2-O<br><span class="badge bg-warning text-dark">38%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6 class="fw-bold mb-3">Tyre Inventory & Logs</h6>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Serial No</th>
                                            <th>Brand</th>
                                            <th>Current Run (KM)</th>
                                            <th>Est. Life Remaining</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>MRF-S89721</td>
                                            <td>MRF Steel Muscle</td>
                                            <td>45,000 KM</td>
                                            <td><span class="text-success">55,000 KM</span></td>
                                        </tr>
                                        <tr>
                                            <td>JK-T77121</td>
                                            <td>JK Tyre Jet R1</td>
                                            <td>82,000 KM</td>
                                            <td><span class="text-danger fw-bold">8,000 KM (Replace Soon)</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PAGE: FLEET ALERTS -->
            <div class="tms-page-content" id="page-alerts">
                <div class="tms-card">
                    <h4 class="fw-bold mb-4"><i class="fas fa-bell text-warning me-2"></i>Renewal & Service Alerts</h4>
                    <div class="row g-3">
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-danger bg-danger-light">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <h6 class="fw-bold text-danger mb-0">Insurance Expiring</h6>
                                        <span class="badge bg-danger">URGENT</span>
                                    </div>
                                    <p class="mb-1"><strong>Vehicle:</strong> HR55-9087</p>
                                    <p class="mb-3"><strong>Expiry Date:</strong> 2026-05-28 (6 days left)</p>
                                    <button class="btn btn-danger btn-sm w-100" onclick="showToast('Opened Insurance renewal portal', 'info')">Renew Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-warning bg-warning-light">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <h6 class="fw-bold text-warning-dark mb-0">PUC Renewal Due</h6>
                                        <span class="badge bg-warning text-dark">WARNING</span>
                                    </div>
                                    <p class="mb-1"><strong>Vehicle:</strong> MH02-4521</p>
                                    <p class="mb-3"><strong>Expiry Date:</strong> 2026-06-02 (11 days left)</p>
                                    <button class="btn btn-warning btn-sm w-100" onclick="showToast('PUC upload page opened', 'info')">Upload New PUC</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-info bg-light">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <h6 class="fw-bold text-info mb-0">Periodic Service Due</h6>
                                        <span class="badge bg-info">SCHEDULED</span>
                                    </div>
                                    <p class="mb-1"><strong>Vehicle:</strong> DL01-1122</p>
                                    <p class="mb-3"><strong>Next Mileage:</strong> 95,000 KM (900 KM left)</p>
                                    <button class="btn btn-info text-white btn-sm w-100" onclick="showToast('Scheduled maintenance task created', 'success')">Schedule Service</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PAGE: GST & FINANCIALS -->
            <div class="tms-page-content" id="page-gst-finance">
                <div class="tms-card">
                    <h4 class="fw-bold mb-4"><i class="fas fa-file-invoice-dollar text-primary me-2"></i>GST & Profit/Loss Statements</h4>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="border p-3 rounded bg-light">
                                <h6 class="fw-bold mb-3 text-secondary">GST Statement (Current Month)</h6>
                                <div class="d-flex justify-content-between mb-2 pb-1 border-bottom">
                                    <span>FCM Sales Taxable Value</span>
                                    <span class="fw-semibold">₹ 12,50,000</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2 pb-1 border-bottom">
                                    <span>CGST Liability (9%)</span>
                                    <span class="fw-semibold">₹ 1,12,500</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2 pb-1 border-bottom">
                                    <span>SGST Liability (9%)</span>
                                    <span class="fw-semibold">₹ 1,12,500</span>
                                </div>
                                <div class="d-flex justify-content-between mb-3 bg-white p-2 rounded">
                                    <span class="fw-bold">Total Payable GST</span>
                                    <span class="fw-bold text-danger">₹ 2,25,000</span>
                                </div>
                                <button class="btn btn-outline-secondary w-100" onclick="showToast('Exporting GST Excel...', 'success')">
                                    <i class="fas fa-file-excel me-1"></i> Export GST R-1
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="border p-3 rounded bg-light">
                                <h6 class="fw-bold mb-3 text-secondary">Monthly Profit & Loss Preview</h6>
                                <div class="d-flex justify-content-between mb-2 pb-1 border-bottom">
                                    <span>Total Income (Freight + Commission)</span>
                                    <span class="fw-semibold text-success">₹ 54,44,295</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2 pb-1 border-bottom">
                                    <span>Diesel & Fuel Cost</span>
                                    <span class="fw-semibold text-danger">₹ -12,20,500</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2 pb-1 border-bottom">
                                    <span>Toll & Permit Charges</span>
                                    <span class="fw-semibold text-danger">₹ -1,85,000</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2 pb-1 border-bottom">
                                    <span>Driver Salaries & Allowances</span>
                                    <span class="fw-semibold text-danger">₹ -4,20,000</span>
                                </div>
                                <div class="d-flex justify-content-between mb-3 bg-white p-2 rounded">
                                    <span class="fw-bold">Net Operational Profit</span>
                                    <span class="fw-bold text-success fs-5">₹ 36,18,795</span>
                                </div>
                                <button class="btn btn-primary w-100" onclick="showToast('Generating Balance Sheet PDF...', 'success')">
                                    <i class="fas fa-file-pdf me-1"></i> Generate Balance Sheet
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PAGE: PURCHASE -->
            

            <!-- PAGE: UNDER CONSTRUCTION / PLACEHOLDER -->
            <div class="tms-page-content" id="page-under-construction">
                <div class="tms-card text-center py-5">
                    <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&q=80&w=400" class="img-fluid rounded mb-4" style="max-height: 250px;" alt="Logistics Warehouse">
                    <h3 class="fw-bold">Module is coming soon</h3>
                    <p class="text-muted max-width-500 mx-auto">Our developers are currently configuring the database API integrations for this specific master sheet. Standard functionality will be updated dynamically.</p>
                    <button class="btn btn-primary px-4" onclick="document.querySelector('[data-page=page-dashboard]').click()">
                        <i class="fas fa-home me-1"></i> Back to Dashboard
                    </button>
                </div>
            </div>

        </div>

@endsection