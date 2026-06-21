<aside class="tms-sidebar" id="tmsSidebar">
    <div class="tms-brand">
        <div class="tms-brand-logo">
            <i class="fas fa-truck-fast"></i>
        </div>
        <span class="tms-brand-text">RK Fleet Online</span>
    </div>

    <nav class="tms-menu">
        <!-- Dashboard Link -->
        <a href="{{ route('home') }}" class="{{ request()->is('home') || request()->is('home/*') ? 'tms-menu-item active' : '' }}">
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
                    <li><a href="{{ route('customer-master') }}" class="tms-submenu-item {{ request()->is('customermaster') || request()->is('customermaster/*') ? 'tms-menu-item active' : '' }}" data-page="page-trips-diesel">Customer master</a></li>
                    <li><a href="{{ route('suppliers.index') }}" class="tms-submenu-item {{ request()->is('suppliers') || request()->is('suppliers/*') ? 'tms-menu-item active' : '' }}" data-page="page-trips-diesel">Suppliers</a></li>
                    <li><a href="{{ route('petrolpump.index') }}" class="tms-submenu-item {{ request()->is('petrolpump') || request()->is('petrolpump/*') ? 'tms-menu-item active' : '' }}" data-page="page-trips-diesel">Petrol pump</a></li>
                    <li><a href="{{ route('staff.index') }}" class="tms-submenu-item {{ request()->is('staff') || request()->is('staff/*') ? 'tms-menu-item active' : '' }}" data-page="page-trips-diesel">Driver & staff</a></li>                    
                    <li><a href="{{ route('salary.index') }}" class="tms-submenu-item {{ request()->is('salary') || request()->is('salary/*') ? 'tms-menu-item active' : '' }}" data-page="page-trips-diesel">Salary master</a></li>
                    <li><a href="{{ route('account.index') }}" class="tms-submenu-item {{ request()->is('account') || request()->is('account/*') ? 'tms-menu-item active' : '' }}" data-page="page-trips-diesel">Account master</a></li>
                    <li><a href="{{ route('accountgroup.index') }}" class="tms-submenu-item {{ request()->is('accountgroup') || request()->is('accountgroup/*') ? 'tms-menu-item active' : '' }}" data-page="page-trips-diesel">Account group</a></li>
                    
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
                    <li><a href="{{ route('addtruck.index') }}" class="tms-submenu-item {{ request()->is('addtruck') || request()->is('addtruck/*') ? 'tms-menu-item active' : '' }}" data-page="page-trips-diesel">Add Trucks</a></li>
                    <li><a href="{{ route('truckdocument.index') }}" class="tms-submenu-item {{ request()->is('truckdocument') || request()->is('truckdocument/*') ? 'tms-menu-item active' : '' }}" data-page="page-trips-diesel">Truck Documents</a></li>
                    <li><a href="{{ route('trucktype.index') }}" class="tms-submenu-item {{ request()->is('trucktype') || request()->is('trucktype/*') ? 'tms-menu-item active' : '' }}" data-page="page-trips-diesel">Truck Types</a></li>
                    {{-- <li><a href="{{ route('truckrenewaltypes') }}" class="tms-submenu-item {{ request()->is('truckrenewaltypes') || request()->is('truckrenewaltypes/*') ? 'tms-menu-item active' : '' }}" data-page="page-trips-diesel">Truck renewal types </a></li> --}}
                    <li><a href="#" class="tms-submenu-item {{ request()->is('fasttag') || request()->is('fasttag/*') ? 'tms-menu-item active' : '' }}" data-page="page-trips-diesel">Add fasttag</a></li>
                    {{-- <li><a href="{{ route('toll&dieselbudget') }}" class="tms-submenu-item {{ request()->is('toll&dieselbudget') || request()->is('toll&dieselbudget/*') ? 'tms-menu-item active' : '' }}" data-page="page-trips-diesel">Toll & diesel budget</a></li> --}}
                    
                    
                </ul>
            </div>

            <!-- Loan & Maintenance -->
            {{-- <a href="#" class="tms-menu-item" data-bs-toggle="collapse" data-bs-target="#menuLoan" aria-expanded="false">
                <div class="tms-menu-item-left">
                    <i class="fas fa-building-columns"></i>
                    <span class="tms-menu-item-text">Loan & Maintenance</span>
                </div>
                <i class="fas fa-chevron-down tms-chevron"></i>
            </a>
            <div class="collapse" id="menuLoan">
                <ul class="tms-submenu">
                    <li><a href="{{ route('truckloanentry') }}" class="tms-submenu-item {{ request()->is('truckloanentry') || request()->is('truckloanentry/*') ? 'tms-menu-item active' : '' }}" data-page="page-under-construction">Truck loan entry</a></li>
                    <li><a href="{{ route('truckEMIpayment') }}" class="tms-submenu-item {{ request()->is('truckEMIpayment') || request()->is('truckEMIpayment/*') ? 'tms-menu-item active' : '' }}" data-page="page-alerts">Truck EMI payment</a></li>
                    <li><a href="{{ route('loanstatements') }}" class="tms-submenu-item {{ request()->is('loanstatements') || request()->is('loanstatements/*') ? 'tms-menu-item active' : '' }}" data-page="page-under-construction">Loan statements</a></li>
                    <li><a href="{{ route('dieselpurchase') }}" class="tms-submenu-item {{ request()->is('dieselpurchase') || request()->is('dieselpurchase/*') ? 'tms-menu-item active' : '' }}" data-page="page-alerts">Diesel purchase</a></li>
                    <li><a href="{{ route('dieselstatements') }}" class="tms-submenu-item {{ request()->is('dieselstatements') || request()->is('dieselstatements/*') ? 'tms-menu-item active' : '' }}" data-page="page-under-construction">Diesel statement</a></li>
                    <li><a href="{{ route('truckmaintenance') }}" class="tms-submenu-item {{ request()->is('truckmaintenance') || request()->is('truckmaintenance/*') ? 'tms-menu-item active' : '' }}" data-page="page-alerts">Truck Maintenance</a></li>
                </ul>
            </div> --}}

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
                    {{-- <li><a href="{{ route('tripplanning') }}" class="tms-submenu-item {{ request()->is('tripplanning') || request()->is('tripplanning/*') ? 'tms-menu-item active' : '' }}" data-page="page-trips-diesel">Trip Planning</a></li> --}}
                    <li><a href="{{ route('lrentry.create') }}" class="tms-submenu-item {{ request()->is('lrentry') || request()->is('lrentry/*') ? 'tms-menu-item active' : '' }}" data-page="page-trips-diesel">LR entry</a></li>               
                    
                </ul>
            </div> 

            

            {{-- Item --}}
            <a href="#" class="tms-menu-item" data-bs-toggle="collapse" data-bs-target="#menuitem" aria-expanded="false">
                <div class="tms-menu-item-left">
                    <i class="fas fa-route"></i>
                    <span class="tms-menu-item-text">Item</span>
                </div>
                <i class="fas fa-chevron-down tms-chevron"></i>
            </a>
            <div class="collapse" id="menuitem">
                <ul class="tms-submenu">
                    <li><a href="{{ route('item') }}" class="tms-submenu-item {{ request()->is('item') || request()->is('item/*') ? 'tms-menu-item active' : '' }}" data-page="page-trips-diesel">Add Item</a></li>
                    <li><a href="{{ route('itemgroup.index') }}" class="tms-submenu-item {{ request()->is('itemgroup') || request()->is('itemgroup/*') ? 'tms-menu-item active' : '' }}" data-page="page-trips-diesel">Item group</a></li>
                    <li><a href="{{ route('itemunit.index') }}" class="tms-submenu-item {{ request()->is('itemunit') || request()->is('itemunit/*') ? 'tms-menu-item active' : '' }}" data-page="page-trips-diesel">Item unit</a></li>
                    
                </ul>
            </div>

            {{-- Billing --}}
            {{-- <a href="#" class="tms-menu-item" data-bs-toggle="collapse" data-bs-target="#menubilling" aria-expanded="false">
                <div class="tms-menu-item-left">
                    <i class="fas fa-route"></i>
                    <span class="tms-menu-item-text">Billing</span>
                </div>
                <i class="fas fa-chevron-down tms-chevron"></i>
            </a>
            <div class="collapse" id="menubilling">
                <ul class="tms-submenu">
                    <li><a href="{{ route('lrtobill') }}" class="tms-submenu-item {{ request()->is('lrtobill') || request()->is('lrtobill/*') ? 'tms-menu-item active' : '' }}" data-page="page-trips-diesel">LR to bill</a></li>
                    <li><a href="{{ route('billlist') }}" class="tms-submenu-item {{ request()->is('billlist') || request()->is('billlist/*') ? 'tms-menu-item active' : '' }}" data-page="page-trips-diesel">Bill list</a></li>
                    
                </ul>
            </div> --}}

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
                    <li><a href="{{ route('purchase') }}" class="tms-submenu-item {{ request()->is('purchase') || request()->is('purchase/*') ? 'tms-menu-item active' : '' }}" data-page="page-under-construction">Purchase</a></li>
                    <li><a href="{{ route('sale-bill') }}" class="tms-submenu-item {{ request()->is('sale-bill') || request()->is('sale-bill/*') ? 'tms-menu-item active' : '' }}" data-page="page-alerts">Sale Bill</a></li>
                </ul>
            </div>

            <!-- Money control -->
            <a href="#" class="tms-menu-item" data-bs-toggle="collapse" data-bs-target="#menuMoneyControl" aria-expanded="true">
                <div class="tms-menu-item-left">
                    <i class="fas fa-money-bill"></i>
                    <span class="tms-menu-item-text">Money control</span>
                </div>
                <i class="fas fa-chevron-down tms-chevron"></i>
            </a>
            <div class="collapse show" id="menuMoneyControl">
                <ul class="tms-submenu">
                    {{-- <li><a href="{{ route('moneyreceipt') }}" class="tms-submenu-item {{ request()->is('moneyreceipt') || request()->is('moneyreceipt/*') ? 'tms-menu-item active' : '' }}" data-page="page-under-construction">Money receipt</a></li>
                    <li><a href="{{ route('moneypaid') }}" class="tms-submenu-item {{ request()->is('moneypaid') || request()->is('moneypaid/*') ? 'tms-menu-item active' : '' }}" data-page="page-alerts">Money paid</a></li>
                    <li><a href="{{ route('bankcash') }}" class="tms-submenu-item {{ request()->is('bankcash') || request()->is('bankcash/*') ? 'tms-menu-item active' : '' }}" data-page="page-under-construction">Bank cash</a></li> --}}
                    <li><a href="{{ route('journalvoucher.create') }}" class="tms-submenu-item {{ request()->is('journalvoucher') || request()->is('journalvoucher/*') ? 'tms-menu-item active' : '' }}" data-page="page-alerts">Journal Voucher</a></li>
                    {{-- <li><a href="{{ route('fasttagrecharge') }}" class="tms-submenu-item {{ request()->is('fasttagrecharge') || request()->is('fasttagrecharge/*') ? 'tms-menu-item active' : '' }}" data-page="page-under-construction">FastTag recharge</a></li> --}}
                </ul>
            </div>

            <!-- Pay roll -->
            {{-- <a href="#" class="tms-menu-item" data-bs-toggle="collapse" data-bs-target="#menuPayRoll" aria-expanded="true">
                <div class="tms-menu-item-left">
                    <i class="fas fa-money-bill"></i>
                    <span class="tms-menu-item-text">Pay Roll</span>
                </div>
                <i class="fas fa-chevron-down tms-chevron"></i>
            </a>
            <div class="collapse show" id="menuPayRoll">
                <ul class="tms-submenu">
                    <li><a href="{{ route('dayattendance') }}" class="tms-submenu-item {{ request()->is('dayattendance') || request()->is('dayattendance/*') ? 'tms-menu-item active' : '' }}" data-page="page-under-construction">Day wise attendance</a></li>
                </ul>
            </div> --}}

            <!-- Reports -->
            {{-- <a href="#" class="tms-menu-item" data-bs-toggle="collapse" data-bs-target="#menuReports" aria-expanded="true">
                <div class="tms-menu-item-left">
                    <i class="fas fa-money-bill"></i>
                    <span class="tms-menu-item-text">Reports</span>
                </div>
                <i class="fas fa-chevron-down tms-chevron"></i>
            </a>
            <div class="collapse show" id="menuReports">
                <ul class="tms-submenu">
                    <li><a href="{{ route('truckstatments') }}" class="tms-submenu-item {{ request()->is('truckstatments') || request()->is('truckstatments/*') ? 'tms-menu-item active' : '' }}" data-page="page-under-construction">Truck statments</a></li>
                </ul>
            </div> --}}



    
    </nav>
</aside>