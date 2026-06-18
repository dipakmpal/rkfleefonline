<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RK Fleet Online - Advanced Transport Management Software</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome 6 Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

    <!-- SIDEBAR -->
    <aside class="tms-sidebar" id="tmsSidebar">
        <div class="tms-brand">
            <div class="tms-brand-logo">
                <i class="fas fa-truck-fast"></i>
            </div>
            <span class="tms-brand-text">RK Fleet Online</span>
        </div>

        <nav class="tms-menu">
            <!-- Dashboard Link -->
            <a href="#" class="tms-menu-item active" data-page="page-dashboard">
                <div class="tms-menu-item-left">
                    <i class="fas fa-chart-pie"></i>
                    <span class="tms-menu-item-text">Dffffashboard</span>
                </div>
            </a>

            <!-- Loan & Maintenance -->
            <a href="#" class="tms-menu-item" data-bs-toggle="collapse" data-bs-target="#menuLoan" aria-expanded="false">
                <div class="tms-menu-item-left">
                    <i class="fas fa-building-columns"></i>
                    <span class="tms-menu-item-text">Loan & Maintenance</span>
                </div>
                <i class="fas fa-chevron-down tms-chevron"></i>
            </a>
            <div class="collapse" id="menuLoan">
                <ul class="tms-submenu">
                    <li><a href="#" class="tms-submenu-item" data-page="page-under-construction">Vehicle Loans</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-alerts">Service Alerts</a></li>
                </ul>
            </div>

            <!-- Trip Management -->
            <!-- <a href="#" class="tms-menu-item" data-bs-toggle="collapse" data-bs-target="#menuTrips" aria-expanded="false">
                <div class="tms-menu-item-left">
                    <i class="fas fa-route"></i>
                    <span class="tms-menu-item-text">Trip Management</span>
                </div>
                <i class="fas fa-chevron-down tms-chevron"></i>
            </a> -->
            <!-- <div class="collapse" id="menuTrips">
                <ul class="tms-submenu">
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Trips & Diesel</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-under-construction">Live Location</a></li>
                </ul>
            </div> -->

            <!-- Billing -->
            <!-- <a href="#" class="tms-menu-item" data-bs-toggle="collapse" data-bs-target="#menuBilling" aria-expanded="false">
                <div class="tms-menu-item-left">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <span class="tms-menu-item-text">Billing</span>
                </div>
                <i class="fas fa-chevron-down tms-chevron"></i>
            </a> -->
            <!-- <div class="collapse" id="menuBilling">
                <ul class="tms-submenu">
                    <li><a href="#" class="tms-submenu-item" data-page="page-lr-billing">Generate LR / Bilty</a></li>
                </ul>
            </div> -->

            <!-- Purchase & Sale -->
            <a href="#" class="tms-menu-item" data-bs-toggle="collapse" data-bs-target="#menuPurchaseSale" aria-expanded="true">
                <div class="tms-menu-item-left">
                    <i class="fas fa-cart-shopping"></i>
                    <span class="tms-menu-item-text">Purchase & Sale</span>
                </div>
                <i class="fas fa-chevron-down tms-chevron"></i>
            </a>
            <div class="collapse show" id="menuPurchaseSale">
                <ul class="tms-submenu">
                    <li><a href="#" class="tms-submenu-item" data-page="page-purchase">Purchase</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-sale-bill">Sale Bill</a></li>
                </ul>
            </div>

            <!-- Money Control -->
            <!-- <a href="#" class="tms-menu-item" data-bs-toggle="collapse" data-bs-target="#menuMoney" aria-expanded="false">
                <div class="tms-menu-item-left">
                    <i class="fas fa-wallet"></i>
                    <span class="tms-menu-item-text">Money Control</span>
                </div>
                <i class="fas fa-chevron-down tms-chevron"></i>
            </a> -->
            <!-- <div class="collapse" id="menuMoney">
                <ul class="tms-submenu">
                    <li><a href="#" class="tms-submenu-item" data-page="page-under-construction">Advances Log</a></li>
                </ul>
            </div> -->

            <!-- Driver Requests -->
            <!-- <a href="#" class="tms-menu-item" data-bs-toggle="collapse" data-bs-target="#menuDriverReq" aria-expanded="false">
                <div class="tms-menu-item-left">
                    <i class="fas fa-id-card"></i>
                    <span class="tms-menu-item-text">Driver Requests</span>
                </div>
                <i class="fas fa-chevron-down tms-chevron"></i>
            </a> -->
            <!-- <div class="collapse" id="menuDriverReq">
                <ul class="tms-submenu">
                    <li><a href="#" class="tms-submenu-item" data-page="page-driver-staff">Driver Records</a></li>
                </ul>
            </div> -->

            <!-- PayRoll -->
            <!-- <a href="#" class="tms-menu-item" data-bs-toggle="collapse" data-bs-target="#menuPayroll" aria-expanded="false">
                <div class="tms-menu-item-left">
                    <i class="fas fa-users-gear"></i>
                    <span class="tms-menu-item-text">PayRoll</span>
                </div>
                <i class="fas fa-chevron-down tms-chevron"></i>
            </a> -->
            <!-- <div class="collapse" id="menuPayroll">
                <ul class="tms-submenu">
                    <li><a href="#" class="tms-submenu-item" data-page="page-under-construction">Attendance & Salaries</a></li>
                </ul>
            </div> -->

            <!-- Reports -->
            <!-- <a href="#" class="tms-menu-item" data-bs-toggle="collapse" data-bs-target="#menuReports" aria-expanded="false">
                <div class="tms-menu-item-left">
                    <i class="fas fa-chart-line"></i>
                    <span class="tms-menu-item-text">Reports</span>
                </div>
                <i class="fas fa-chevron-down tms-chevron"></i>
            </a> -->
            <!-- <div class="collapse" id="menuReports">
                <ul class="tms-submenu">
                    <li><a href="#" class="tms-submenu-item" data-page="page-under-construction">Trip Summary</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-vendors">Vendor List</a></li>
                </ul>
            </div> -->

            <!-- Accounting Reports -->
            <!-- <a href="#" class="tms-menu-item" data-bs-toggle="collapse" data-bs-target="#menuAcctReports" aria-expanded="false">
                <div class="tms-menu-item-left">
                    <i class="fas fa-file-invoice"></i>
                    <span class="tms-menu-item-text">Accounting Reports</span>
                </div>
                <i class="fas fa-chevron-down tms-chevron"></i>
            </a> -->
            <!-- <div class="collapse" id="menuAcctReports">
                <ul class="tms-submenu">
                    <li><a href="#" class="tms-submenu-item" data-page="page-gst-finance">GST & Ledgers</a></li>
                </ul>
            </div> -->

            <!-- Inventory Reports -->
            <!-- <a href="#" class="tms-menu-item" data-bs-toggle="collapse" data-bs-target="#menuInventory" aria-expanded="false">
                <div class="tms-menu-item-left">
                    <i class="fas fa-boxes-stacked"></i>
                    <span class="tms-menu-item-text">Inventory Reports</span>
                </div>
                <i class="fas fa-chevron-down tms-chevron"></i>
            </a> -->
            <!-- <div class="collapse" id="menuInventory">
                <ul class="tms-submenu">
                    <li><a href="#" class="tms-submenu-item" data-page="page-tyre-management">Tyre Management</a></li>
                </ul>
            </div> -->

            <!-- Utility -->
            <!-- <a href="#" class="tms-menu-item" data-bs-toggle="collapse" data-bs-target="#menuUtility" aria-expanded="false">
                <div class="tms-menu-item-left">
                    <i class="fas fa-screwdriver-wrench"></i>
                    <span class="tms-menu-item-text">Utility</span>
                </div>
                <i class="fas fa-chevron-down tms-chevron"></i>
            </a> -->
            <!-- <div class="collapse" id="menuUtility">
                <ul class="tms-submenu">
                    <li><a href="#" class="tms-submenu-item" data-page="page-customer-master">Customer Master</a></li>
                </ul>
            </div> -->

            <!-- Items -->
            <!-- <a href="#" class="tms-menu-item" data-bs-toggle="collapse" data-bs-target="#menuItems" aria-expanded="false">
                <div class="tms-menu-item-left">
                    <i class="fas fa-list-check"></i>
                    <span class="tms-menu-item-text">Items</span>
                </div>
                <i class="fas fa-chevron-down tms-chevron"></i>
            </a> -->
            <!-- <div class="collapse" id="menuItems">
                <ul class="tms-submenu">
                    <li><a href="#" class="tms-submenu-item" data-page="page-under-construction">Service Products</a></li>
                </ul>
            </div> -->
        </nav>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="tms-main-content" id="tmsMainContent">
        <!-- TOP HEADER -->
        <header class="tms-header">
            <div class="d-flex align-items-center gap-3">
                <button class="tms-toggle-btn d-none d-lg-flex" id="tmsToggleSidebar">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="tms-toggle-btn d-lg-none" id="tmsMobileToggle">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="tms-search-wrapper">
                    <i class="fas fa-search tms-search-icon"></i>
                    <input type="text" class="tms-search-input" placeholder="Search Any Party / Vehicle / Menu...">
                </div>
            </div>

            <div class="d-flex align-items-center gap-3">
                <!-- <span class="text-muted d-none d-md-inline small fw-semibold">
                    <i class="fas fa-map-marker-alt text-primary me-1"></i> TMS LOGISTICS & TRANSPORT
                </span> -->
                
                <button class="btn btn-primary btn-sm rounded-pill px-3 d-flex align-items-center gap-2 fw-semibold shadow-sm" onclick="showToast('Loading Quick Trip Generator...', 'info')">
                    <i class="fas fa-plus"></i> Add Trip <span class="badge bg-danger rounded-pill" style="font-size: 0.6rem;">NEW</span>
                </button>

                <!-- Notifications -->
                <div class="position-relative cursor-pointer" onclick="showToast('You have 29 new alerts pending', 'warning')">
                    <i class="far fa-bell fs-5 text-secondary"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.6rem; padding: 0.2rem 0.4rem;">29</span>
                </div>

                <!-- Settings -->
                <i class="fas fa-cog fs-5 text-muted cursor-pointer" onclick="showToast('Open Settings Panel', 'info')"></i>

                <!-- Profile -->
                <div class="d-flex align-items-center gap-2">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=100" class="rounded-circle border border-2 border-primary shadow-sm" width="38" height="38" alt="Profile">
                </div>
            </div>
        </header>

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
            <div class="tms-page-content d-none" id="page-customer-master">
                <div class="tms-card">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="fw-bold mb-0"><i class="fas fa-users text-primary me-2"></i>Customer Directory</h4>
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
            <div class="tms-page-content d-none" id="page-driver-staff">
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
            <div class="tms-page-content d-none" id="page-lr-billing">
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
            <div class="tms-page-content d-none" id="page-trips-diesel">
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
            <div class="tms-page-content d-none" id="page-vendors">
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
            <div class="tms-page-content d-none" id="page-tyre-management">
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
            <div class="tms-page-content d-none" id="page-alerts">
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
            <div class="tms-page-content d-none" id="page-gst-finance">
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
            <div class="tms-page-content d-none" id="page-purchase">
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
                                <form id="saleBillForm" onsubmit="event.preventDefault(); showToast('Sale Bill Saved successfully!', 'success');">
                                    <div class="row g-3 mb-4">
                                        <div class="col-md-6">
                                            <label class="form-label text-muted small fw-semibold">Bill No</label>
                                            <input type="text" class="form-control" id="saleBillNoInput" placeholder="Enter Bill No." value="SB-2026-0492">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label text-muted small fw-semibold">Bill Date</label>
                                            <input type="date" class="form-control" id="saleBillDateInput" value="2026-05-22">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label text-muted small fw-semibold">Customer Name</label>
                                            <select class="form-select" id="saleCustomerNameSelect">
                                                <option value="" disabled>Select Customer Name</option>
                                                <option value="1" selected>Adani Logistics Ltd.</option>
                                                <option value="2">Tata Steel Cargo Division</option>
                                                <option value="3">Reliance Retail Logistics</option>
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
                                                    <td class="align-middle text-center">
                                                        <button type="button" class="btn btn-sm btn-outline-danger border-0 delete-sale-row">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                        <span class="ms-1 row-number">1</span>
                                                    </td>
                                                    <td>
                                                        <select class="form-select form-select-sm">
                                                            <option value="freight" selected>Freight Charges</option>
                                                            <option value="local">Local Delivery</option>
                                                            <option value="detention">Detention Charges</option>
                                                            <option value="loading">Loading / Unloading</option>
                                                            <option value="toll">Toll Reimbursement</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control form-control-sm text-center sale-qty" value="1" min="0">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control form-control-sm text-end sale-rate" value="15000" min="0">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control form-control-sm text-end sale-discount" value="0" min="0">
                                                    </td>
                                                    <td>
                                                        <select class="form-select form-select-sm sale-gst">
                                                            <option value="0">0%</option>
                                                            <option value="5">5%</option>
                                                            <option value="12">12%</option>
                                                            <option value="18" selected>18%</option>
                                                            <option value="28">28%</option>
                                                        </select>
                                                    </td>
                                                    <td class="text-end fw-semibold align-middle sale-row-total">₹ 17,700.00</td>
                                                </tr>
                                            </tbody>
                                            <tfoot class="table-light">
                                                <tr>
                                                    <td colspan="2" class="text-end fw-bold small">Total</td>
                                                    <td id="footerQty" class="text-center fw-bold small">1</td>
                                                    <td></td>
                                                    <td id="footerDiscount" class="text-end fw-bold small">₹ 0</td>
                                                    <td id="footerGst" class="text-end fw-bold small">₹ 2,700.00</td>
                                                    <td id="footerTotal" class="text-end fw-bold small text-primary">₹ 17,700.00</td>
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
                                            <textarea class="form-control" rows="2" placeholder="Enter note..."></textarea>
                                        </div>
                                    </div>

                                    <!-- Collapsible Shipping Section -->
                                    <div class="collapse mb-3" id="collapseSaleShipping">
                                        <div class="card card-body bg-light border-0 p-3">
                                            <h6 class="fw-bold mb-3 small">Shipping Details</h6>
                                            <div class="row g-3">
                                                <div class="col-md-8">
                                                    <label class="form-label text-muted small">Shipping Address</label>
                                                    <input type="text" class="form-control form-control-sm" placeholder="Destination Address">
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label text-muted small">GSTIN / State Code</label>
                                                    <input type="text" class="form-control form-control-sm" placeholder="e.g. 24 - Gujarat">
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
                                                    <input type="text" class="form-control form-control-sm" placeholder="e.g. Blue Dart">
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label text-muted small">Vehicle No</label>
                                                    <input type="text" class="form-control form-control-sm" placeholder="e.g. MH04-GP-1234">
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label text-muted small">E-Way Bill / LR No</label>
                                                    <input type="text" class="form-control form-control-sm" placeholder="e.g. LR-2026-98">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Action Buttons -->
                                    <div class="d-flex gap-2">
                                        <button type="submit" class="btn btn-primary d-flex align-items-center gap-2">
                                            <i class="fas fa-save"></i> Save Bill
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary d-flex align-items-center gap-2" id="clearSaleFormBtn">
                                            <i class="fas fa-sync-alt"></i> Clear Form
                                        </button>
                                        <button type="button" class="btn btn-success d-flex align-items-center gap-2" onclick="showToast('Printing Invoice...', 'success')">
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

            <!-- PAGE: UNDER CONSTRUCTION / PLACEHOLDER -->
            <div class="tms-page-content d-none" id="page-under-construction">
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

        <!-- FOOTER -->
        <footer class="mt-auto py-3 bg-white border-top text-center text-muted small">
            &copy; 2026 RK Fleet Online. Developed and Design by RD Web Wonders. All rights reserved.
        </footer>
    </main>

    <!-- SUPPORT TICKET FLOATING PANEL -->
    <button class="tms-support-toggle-btn" id="tmsSupportToggle">
        <i class="far fa-comments"></i>
    </button>

    <div class="tms-support-panel" id="tmsSupportPanel">
        <div class="tms-support-header">
            <span class="fw-bold"><i class="fas fa-ticket me-2"></i>Support Tickets</span>
            <button class="btn-close btn-close-white" id="tmsCloseSupport" aria-label="Close"></button>
        </div>
        
        <!-- Tabs -->
        <ul class="nav nav-tabs nav-fill border-bottom bg-light px-2" style="font-size: 0.85rem;">
            <li class="nav-item"><a class="nav-link active" href="#">All</a></li>
            <li class="nav-item"><a class="nav-link text-muted" href="#">Open</a></li>
            <li class="nav-item"><a class="nav-link text-muted" href="#">Closed</a></li>
        </ul>

        <div class="tms-support-body">
            <div class="tms-ticket-item">
                <div class="d-flex justify-content-between mb-1">
                    <span class="fw-bold small">lr list</span>
                    <span class="badge bg-success-light text-success">OPEN</span>
                </div>
                <div class="text-muted small" style="font-size: 0.75rem;">TKT-20260116-25412</div>
                <div class="text-muted small mt-1">about 1 hour ago</div>
            </div>
            <div class="tms-ticket-item">
                <div class="d-flex justify-content-between mb-1">
                    <span class="fw-bold small">report issue</span>
                    <span class="badge bg-success-light text-success">OPEN</span>
                </div>
                <div class="text-muted small" style="font-size: 0.75rem;">TKT-20260116-68353</div>
                <div class="text-muted small mt-1">about 1 hour ago</div>
            </div>
            <div class="tms-ticket-item">
                <div class="d-flex justify-content-between mb-1">
                    <span class="fw-bold small">test2</span>
                    <span class="badge bg-success-light text-success">OPEN</span>
                </div>
                <div class="text-muted small" style="font-size: 0.75rem;">TKT-20260116-10174</div>
                <div class="text-muted small mt-1">about 2 hours ago</div>
            </div>
            <div class="tms-ticket-item">
                <div class="d-flex justify-content-between mb-1">
                    <span class="fw-bold small">test1</span>
                    <span class="badge bg-success-light text-success">OPEN</span>
                </div>
                <div class="text-muted small" style="font-size: 0.75rem;">TKT-20260116-39978</div>
                <div class="text-muted small mt-1">about 2 hours ago</div>
            </div>
            <button class="btn btn-primary btn-sm w-100 py-2 mt-2" onclick="showToast('Create new support ticket form!', 'info')">
                <i class="fas fa-plus me-1"></i> New Ticket
            </button>
        </div>
    </div>

    <!-- ALERTS / TOAST CONTAINER -->
    <div class="tms-alerts-container" id="tmsAlertsContainer"></div>

    <!-- Chart.js and Bootstrap JS Bundle (with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom App Controllers -->
    <script src="assets/js/app.js"></script>
</body>
</html>
