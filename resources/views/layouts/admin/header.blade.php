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