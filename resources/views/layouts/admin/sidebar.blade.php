<aside class="tms-sidebar" id="tmsSidebar">
    <div class="tms-brand">
        <div class="tms-brand-logo">
            <i class="fas fa-truck-fast"></i>
        </div>
        <span class="tms-brand-text">RK Fleet Online</span>
    </div>

    <nav class="tms-menu">
        <!-- Dashboard Link -->
        <a href="{{ route('home') }}" class="tms-menu-item active">
            <div class="tms-menu-item-left">
                <i class="fas fa-chart-pie"></i>
                <span class="tms-menu-item-text">Dashboard</span>
            </div>
        </a>
<!-- Masters Link -->
            <a href="#" class="tms-menu-item" data-bs-toggle="collapse" data-bs-target="#menumasters" aria-expanded="false">
                <div class="tms-menu-item-left">
                    <i class="fas fa-route"></i>
                    <span class="tms-menu-item-text">Masters</span>
                </div>
                <i class="fas fa-chevron-down tms-chevron"></i>
            </a>
            <div class="collapse" id="menumasters">
                <ul class="tms-submenu">
                    <li><a href="{{ route('customer-master') }}" class="tms-submenu-item" data-page="page-trips-diesel">Customer master</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Truck Suppliers</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Shop master</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Petrol pump</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Driver & staff</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Salary master</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Account Master</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Account group</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Branch master</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Add Location</a></li>
                    
                </ul>
            </div>

            <!-- Truck Link -->
            <a href="#" class="tms-menu-item" data-bs-toggle="collapse" data-bs-target="#menuTruck" aria-expanded="false">
                <div class="tms-menu-item-left">
                    <i class="fas fa-truck"></i>
                    <span class="tms-menu-item-text">Truck</span>
                </div>
                <i class="fas fa-chevron-down tms-chevron"></i>
            </a>
            <div class="collapse" id="menuTruck">
                <ul class="tms-submenu">
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Add Trucks</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Truck Documents</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Truck Documents</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Truck Types</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Truck renewal types</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Add fasTag</a></li>
                    
                    
                </ul>
            </div>

               <!-- Trip Management Link -->
            <a href="#" class="tms-menu-item" data-bs-toggle="collapse" data-bs-target="#menuTrips" aria-expanded="false">
                <div class="tms-menu-item-left">
                    <i class="fas fa-truck"></i>
                    <span class="tms-menu-item-text">Trip Management</span>
                </div>
                <i class="fas fa-chevron-down tms-chevron"></i>
            </a>
            <div class="collapse" id="menuTrips">
                <ul class="tms-submenu">
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Trip Planning</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Diesel Management</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Live Location</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Trip History</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">LR Book</a></li>               
                    
                </ul>
            </div>


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

        <!-- Purchase & Sale -->
        <a href="#" class="tms-menu-item" data-bs-toggle="collapse" data-bs-target="#menuPurchaseSale" aria-expanded="true">
            <div class="tms-menu-item-left">
                <i class="fas fa-cart-shopping"></i>
                <span class="tms-menu-item-text">Purchase & Sale</span>
            </div>
            <i class="fas fa-chevron-down tms-chevron"></i>
        </a>
        <div class="collapse show">
            <ul class="tms-submenu">
                <li><a href="{{ route('purchase') }}" class="tms-submenu-item">Purchase</a></li>
                <li><a href="{{ route('sale-bill') }}" class="tms-submenu-item">Sale Bill</a></li>
            </ul>
        </div>

         <!-- Trip Management Link -->
            <a href="#" class="tms-menu-item" data-bs-toggle="collapse" data-bs-target="#menuTrips" aria-expanded="false">
                <div class="tms-menu-item-left">
                    <i class="fas fa-truck"></i>
                    <span class="tms-menu-item-text">Money Control</span>
                </div>
                <i class="fas fa-chevron-down tms-chevron"></i>
            </a>
            <div class="collapse" id="menuTrips">
                <ul class="tms-submenu">
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Money Receipt</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Money Paid</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Bank Cash</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Journal Voucher</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Fastags Recharge</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">LR Expense</a></li>
                    <li><a href="#" class="tms-submenu-item" data-page="page-trips-diesel">Markets LRs</a></li>             
                    
                </ul>
            </div>



    
    </nav>
</aside>