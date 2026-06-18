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
    <link href="https://cdn.datatables.net/2.3.8/css/dataTables.bootstrap5.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>

    <!-- SIDEBAR -->
    @include('layouts.admin.sidebar')

    <!-- MAIN CONTENT -->
    <main class="tms-main-content" id="tmsMainContent">
        <!-- TOP HEADER -->
        @include('layouts.admin.header')
        

        <!-- CONTAINER AREA -->
        @yield('content')

        <!-- FOOTER -->
        {{-- <!-- @include('layouts.admin.footer') --> --}}

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
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>