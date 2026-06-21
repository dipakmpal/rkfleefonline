// TMS Prime Dashboard JS Controllers

document.addEventListener('DOMContentLoaded', function() {
    // 1. Sidebar Toggler for Desktop
    const sidebarToggle = document.getElementById('tmsToggleSidebar');
    const sidebar = document.getElementById('tmsSidebar');
    const mainContent = document.getElementById('tmsMainContent');

    if (sidebarToggle && sidebar && mainContent) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
            
            // Toggle icons in toggle button
            const icon = sidebarToggle.querySelector('i');
            if (sidebar.classList.contains('collapsed')) {
                icon.classList.remove('fa-chevron-left');
                icon.classList.add('fa-chevron-right');
            } else {
                icon.classList.remove('fa-chevron-right');
                icon.classList.add('fa-chevron-left');
            }
        });
    }

    // 2. Sidebar Mobile Toggle (drawer mode)
    const mobileToggle = document.getElementById('tmsMobileToggle');
    if (mobileToggle) {
        mobileToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            sidebar.classList.toggle('show-mobile');
        });
    }

    // Close sidebar on mobile when clicking outside
    document.addEventListener('click', function(e) {
        if (window.innerWidth < 992) {
            if (sidebar && !sidebar.contains(e.target) && sidebar.classList.contains('show-mobile')) {
                sidebar.classList.remove('show-mobile');
            }
        }
    });

    // 3. Page Switching Logic (SPA Simulation)
    const menuLinks = document.querySelectorAll('.tms-menu-item:not([data-bs-toggle="collapse"]), .tms-submenu-item');
    const pages = document.querySelectorAll('.tms-page-content');

    menuLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // SPA behavior only when data-page is present AND the link does not point to a real URL
            const targetPageId = this.getAttribute('data-page');
            const href = this.getAttribute('href');

            // Treat '#' or missing href as SPA-only links. If href is a real route, allow normal navigation.
            const isSpaLink = targetPageId && (!href || href === '#' || href.trim() === '');

            if (isSpaLink) {
                e.preventDefault();

                // Remove active class from all links
                document.querySelectorAll('.tms-menu-item, .tms-submenu-item').forEach(el => el.classList.remove('active'));

                // Add active class to clicked link
                this.classList.add('active');

                // If it is a submenu link, make parent active too
                const parentCollapse = this.closest('.collapse');
                if (parentCollapse) {
                    const parentToggler = document.querySelector(`[data-bs-target="#${parentCollapse.id}"]`);
                    if (parentToggler) parentToggler.classList.add('active');
                }

                // Hide all pages and show target page
                pages.forEach(page => {
                    page.classList.add('d-none');
                });
                const targetPage = document.getElementById(targetPageId);
                if (targetPage) {
                    targetPage.classList.remove('d-none');
                    // Scroll to top of content
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                }

                // Close sidebar on mobile after clicking item
                if (window.innerWidth < 992) {
                    sidebar.classList.remove('show-mobile');
                }
            }
            // else: allow default navigation for links that have a real href (e.g., route links)
        });
    });

    // 4. Support Ticket Floating Panel Toggle
    const supportToggle = document.getElementById('tmsSupportToggle');
    const supportPanel = document.getElementById('tmsSupportPanel');
    const closeSupport = document.getElementById('tmsCloseSupport');

    if (supportToggle && supportPanel) {
        supportToggle.addEventListener('click', function() {
            supportPanel.classList.toggle('show');
            const icon = supportToggle.querySelector('i');
            if (supportPanel.classList.contains('show')) {
                icon.classList.remove('fa-comments');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-comments');
            }
        });
    }

    if (closeSupport && supportPanel) {
        closeSupport.addEventListener('click', function() {
            supportPanel.classList.remove('show');
            if (supportToggle) {
                const icon = supportToggle.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-comments');
            }
        });
    }

    // 5. Initialize Charts (Chart.js)
    const ctx = document.getElementById('incomeExpenseChart');
    if (ctx) {
        const incomeExpenseChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [
                    {
                        label: 'Incomes',
                        data: [1500000, 2200000, 1800000, 2900000, 3100000, 3800000, 4200000, 3900000, 4500000, 4800000, 5200000, 5444295.88],
                        borderColor: '#2563eb',
                        backgroundColor: 'rgba(37, 99, 235, 0.04)',
                        borderWidth: 3,
                        fill: true,
                        tension: 0.4,
                        pointRadius: 4,
                        pointBackgroundColor: '#2563eb'
                    },
                    {
                        label: 'Expenses',
                        data: [800000, 1200000, 950000, 1400000, 1500000, 1700000, 1900000, 1800000, 2100000, 2200000, 2300000, 2344091.50],
                        borderColor: '#7c3aed',
                        backgroundColor: 'rgba(124, 58, 237, 0.04)',
                        borderWidth: 3,
                        fill: true,
                        tension: 0.4,
                        pointRadius: 4,
                        pointBackgroundColor: '#7c3aed'
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        padding: 12,
                        cornerRadius: 8,
                        backgroundColor: '#0f172a'
                    }
                },
                scales: {
                    y: {
                        grid: {
                            color: '#f1f5f9'
                        },
                        ticks: {
                            color: '#94a3b8',
                            font: {
                                family: 'Plus Jakarta Sans'
                            },
                            callback: function(value) {
                                if (value >= 100000) {
                                    return '₹ ' + (value / 100000).toFixed(1) + ' L';
                                }
                                return '₹ ' + value;
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: '#94a3b8',
                            font: {
                                family: 'Plus Jakarta Sans'
                            }
                        }
                    }
                }
            }
        });
    }

 

    // 7. Interactive Sale Bill calculations
    const saleTableBody = document.getElementById('saleItemsTableBody');
    const addSaleItemBtn = document.getElementById('addSaleItemBtn');
    
    if (saleTableBody && addSaleItemBtn) {
        let rowCount = 1;
        
        // Add new row
        addSaleItemBtn.addEventListener('click', function(e) {
            e.preventDefault();
            rowCount++;
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td class="align-middle text-center">
                    <button type="button" class="btn btn-sm btn-outline-danger border-0 delete-sale-row">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                    <span class="ms-1 row-number">${rowCount}</span>
                </td>
                <td>
                    <select name="item_name[]" class="form-select form-select-sm">
                        <option value="freight">Freight Charges</option>
                        <option value="local">Local Delivery</option>
                        <option value="detention">Detention Charges</option>
                        <option value="loading">Loading / Unloading</option>
                        <option value="toll">Toll Reimbursement</option>
                    </select>
                </td>
                <td>
                    <input type="number" name="qty[]" class="form-control form-control-sm text-center sale-qty" value="0" min="0">
                </td>
                <td>
                    <input type="number" name="rate[]" class="form-control form-control-sm text-end sale-rate" value="0" min="0">
                </td>
                <td>
                    <input type="number" name="discount[]" class="form-control form-control-sm text-end sale-discount" value="0" min="0">
                </td>
                <td>
                    <select name="gst[]" class="form-select form-select-sm sale-gst">
                        <option value="0">0%</option>
                        <option value="5">5%</option>
                        <option value="12">12%</option>
                        <option value="18" selected>18%</option>
                        <option value="28">28%</option>
                    </select>
                </td>
                <td class="text-end fw-semibold align-middle">
                    <input type="hidden" name="total[]" value="0">
                    <span class="sale-row-total">₹ 0.00</span>
                </td>
            `;
            saleTableBody.appendChild(newRow);
            recalculateSaleBill();
        });

        // Delete row
        saleTableBody.addEventListener('click', function(e) {
            const deleteBtn = e.target.closest('.delete-sale-row');
            if (deleteBtn) {
                const row = deleteBtn.closest('tr');
                row.remove();
                
                // Re-index row numbers
                const rows = saleTableBody.querySelectorAll('tr');
                rowCount = 0;
                rows.forEach((r, idx) => {
                    rowCount++;
                    r.querySelector('.row-number').textContent = rowCount;
                });
                recalculateSaleBill();
            }
        });

        // Recalculate on inputs
        saleTableBody.addEventListener('input', function(e) {
            if (e.target.classList.contains('sale-qty') || 
                e.target.classList.contains('sale-rate') || 
                e.target.classList.contains('sale-discount')) {
                recalculateSaleBill();
            }
        });

        saleTableBody.addEventListener('change', function(e) {
            if (e.target.classList.contains('sale-gst')) {
                recalculateSaleBill();
            }
        });

        // TDS & Round off toggles
        const tdsCheck = document.getElementById('saleTdsCheck');
        const tdsPercentInput = document.getElementById('saleTdsPercent');
        const roundCheck = document.getElementById('saleRoundCheck');
        const chargeAmountInput = document.getElementById('saleChargeAmount');

        if (tdsCheck) tdsCheck.addEventListener('change', recalculateSaleBill);
        if (tdsPercentInput) tdsPercentInput.addEventListener('input', recalculateSaleBill);
        if (roundCheck) roundCheck.addEventListener('change', recalculateSaleBill);
        if (chargeAmountInput) chargeAmountInput.addEventListener('input', recalculateSaleBill);

        // Main calculation function
        function recalculateSaleBill() {
            const rows = saleTableBody.querySelectorAll('tr');
            let grandQuantity = 0;
            let grandDiscount = 0;
            let grandGst = 0;
            let grandSubtotal = 0;
            let grandTotalOfTotals = 0;

            rows.forEach(row => {
                const qty = parseFloat(row.querySelector('.sale-qty').value) || 0;
                const rate = parseFloat(row.querySelector('.sale-rate').value) || 0;
                const discount = parseFloat(row.querySelector('.sale-discount').value) || 0;
                const gstRate = parseFloat(row.querySelector('.sale-gst').value) || 0;

                const rowSubtotal = (qty * rate) - discount;
                const rowGstAmount = rowSubtotal * (gstRate / 100);
                const rowTotal = rowSubtotal + rowGstAmount;

                row.querySelector('.sale-row-total').textContent = '₹ ' + rowTotal.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
                const totalInput = row.querySelector('input[name="total[]"]');
                if (totalInput) {
                    totalInput.value = rowTotal.toFixed(2);
                }

                grandQuantity += qty;
                grandDiscount += discount;
                grandGst += rowGstAmount;
                grandSubtotal += (qty * rate);
                grandTotalOfTotals += rowTotal;
            });

            // Update footer metrics
            const footerQty = document.getElementById('footerQty');
            const footerDiscount = document.getElementById('footerDiscount');
            const footerGst = document.getElementById('footerGst');
            const footerTotal = document.getElementById('footerTotal');

            if (footerQty) footerQty.textContent = grandQuantity;
            if (footerDiscount) footerDiscount.textContent = '₹ ' + grandDiscount.toLocaleString('en-IN');
            if (footerGst) footerGst.textContent = '₹ ' + grandGst.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
            if (footerTotal) footerTotal.textContent = '₹ ' + grandTotalOfTotals.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });

            // Right sidebar summary
            const baseBillAmount = grandTotalOfTotals;
            const chargesVal = parseFloat(chargeAmountInput.value) || 0;
            let finalBillAmount = baseBillAmount + chargesVal;

            let tdsAmount = 0;
            if (tdsCheck && tdsCheck.checked) {
                const tdsPercent = parseFloat(tdsPercentInput.value) || 0;
                tdsAmount = (finalBillAmount * (tdsPercent / 100));
            }

            let payableAmount = finalBillAmount - tdsAmount;

            // Rounding
            let roundOffVal = 0;
            if (roundCheck && roundCheck.checked) {
                const rounded = Math.round(payableAmount);
                roundOffVal = rounded - payableAmount;
                payableAmount = rounded;
            }

            // Update UI elements
            const billAmountEl = document.getElementById('summaryBillAmount');
            const tdsAmountEl = document.getElementById('summaryTdsAmount');
            const payableAmountEl = document.getElementById('summaryPayableAmount');
            const roundOffEl = document.getElementById('summaryRoundOff');

            if (billAmountEl) billAmountEl.textContent = '₹ ' + finalBillAmount.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
            if (tdsAmountEl) tdsAmountEl.textContent = '₹ ' + tdsAmount.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
            if (payableAmountEl) payableAmountEl.textContent = '₹ ' + payableAmount.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
            if (roundOffEl) {
                roundOffEl.textContent = (roundOffVal >= 0 ? '+' : '') + roundOffVal.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
            }
        }

        // Initial calculation trigger for Sales form
        recalculateSaleBill();

        // Clear Form Button for Sales
        const clearSaleFormBtn = document.getElementById('clearSaleFormBtn');
        if (clearSaleFormBtn) {
            clearSaleFormBtn.addEventListener('click', function() {
                const form = document.getElementById('saleBillForm');
                if (form) form.reset();
                const rows = saleTableBody.querySelectorAll('tr');
                rows.forEach((row, index) => {
                    if (index > 0) row.remove();
                });
                const firstRow = saleTableBody.querySelector('tr');
                if (firstRow) {
                    firstRow.querySelector('.sale-qty').value = 1;
                    firstRow.querySelector('.sale-rate').value = 0;
                    firstRow.querySelector('.sale-discount').value = 0;
                    firstRow.querySelector('.sale-gst').value = "18";
                }
                recalculateSaleBill();
                showToast('Sales form cleared!', 'info');
            });
        }
    }

    // Toggle list vs form views on Sale Bill page
    const toggleSaleListViewBtn = document.getElementById('toggleSaleListViewBtn');
    const toggleSaleFormViewBtn = document.getElementById('toggleSaleFormViewBtn');
    const saleBillFormView = document.getElementById('saleBillFormView');
    const saleBillListView = document.getElementById('saleBillListView');

    if (toggleSaleListViewBtn && toggleSaleFormViewBtn && saleBillFormView && saleBillListView) {
        toggleSaleListViewBtn.addEventListener('click', function(e) {
            e.preventDefault();
            saleBillFormView.classList.add('d-none');
            saleBillListView.classList.remove('d-none');
        });
        toggleSaleFormViewBtn.addEventListener('click', function(e) {
            e.preventDefault();
            saleBillListView.classList.add('d-none');
            saleBillFormView.classList.remove('d-none');
        });
    }

    // 8. Interactive Purchase Bill calculations
    const purchaseTableBody = document.getElementById('purchaseItemsTableBody');
    const addPurchaseItemBtn = document.getElementById('addPurchaseItemBtn');
    
    if (purchaseTableBody && addPurchaseItemBtn) {
        let pRowCount = 1;
        
        // Add new row
        addPurchaseItemBtn.addEventListener('click', function(e) {
            e.preventDefault();
            pRowCount++;
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td class="align-middle text-center">
                    <button type="button" class="btn btn-sm btn-outline-danger border-0 delete-purchase-row">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                    <span class="ms-1 purchase-row-number">${pRowCount}</span>
                </td>
                <td>
                    <select class="form-select form-select-sm">
                        <option value="diesel">Diesel Purchase</option>
                        <option value="tyre">Tyre Purchase / Retreading</option>
                        <option value="spare">Spare Parts</option>
                        <option value="lubricant">Mobil & Lubricants</option>
                        <option value="toll">Toll Recharge</option>
                        <option value="driver">Driver Advance Payment</option>
                    </select>
                </td>
                <td>
                    <input type="number" class="form-control form-control-sm text-center purchase-qty" value="0" min="0">
                </td>
                <td>
                    <input type="number" class="form-control form-control-sm text-end purchase-rate" value="0" min="0">
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
                <td class="text-end fw-semibold align-middle purchase-row-total">₹ 0.00</td>
            `;
            purchaseTableBody.appendChild(newRow);
            recalculatePurchaseBill();
        });

        // Delete row
        purchaseTableBody.addEventListener('click', function(e) {
            const deleteBtn = e.target.closest('.delete-purchase-row');
            if (deleteBtn) {
                const row = deleteBtn.closest('tr');
                row.remove();
                
                // Re-index row numbers
                const rows = purchaseTableBody.querySelectorAll('tr');
                pRowCount = 0;
                rows.forEach((r, idx) => {
                    pRowCount++;
                    r.querySelector('.purchase-row-number').textContent = pRowCount;
                });
                recalculatePurchaseBill();
            }
        });

        // Recalculate on inputs
        purchaseTableBody.addEventListener('input', function(e) {
            if (e.target.classList.contains('purchase-qty') || 
                e.target.classList.contains('purchase-rate') || 
                e.target.classList.contains('purchase-discount')) {
                recalculatePurchaseBill();
            }
        });

        purchaseTableBody.addEventListener('change', function(e) {
            if (e.target.classList.contains('purchase-gst')) {
                recalculatePurchaseBill();
            }
        });

        // TDS & Round off toggles
        const pTdsCheck = document.getElementById('purchaseTdsCheck');
        const pTdsPercentInput = document.getElementById('purchaseTdsPercent');
        const pRoundCheck = document.getElementById('purchaseRoundCheck');
        const pChargeAmountInput = document.getElementById('purchaseChargeAmount');

        if (pTdsCheck) pTdsCheck.addEventListener('change', recalculatePurchaseBill);
        if (pTdsPercentInput) pTdsPercentInput.addEventListener('input', recalculatePurchaseBill);
        if (pRoundCheck) pRoundCheck.addEventListener('change', recalculatePurchaseBill);
        if (pChargeAmountInput) pChargeAmountInput.addEventListener('input', recalculatePurchaseBill);

        // Main calculation function
        function recalculatePurchaseBill() {
            const rows = purchaseTableBody.querySelectorAll('tr');
            let grandQuantity = 0;
            let grandDiscount = 0;
            let grandGst = 0;
            let grandSubtotal = 0;
            let grandTotalOfTotals = 0;

            rows.forEach(row => {
                const qty = parseFloat(row.querySelector('.purchase-qty').value) || 0;
                const rate = parseFloat(row.querySelector('.purchase-rate').value) || 0;
                const discount = parseFloat(row.querySelector('.purchase-discount').value) || 0;
                const gstRate = parseFloat(row.querySelector('.purchase-gst').value) || 0;

                const rowSubtotal = (qty * rate) - discount;
                const rowGstAmount = rowSubtotal * (gstRate / 100);
                const rowTotal = rowSubtotal + rowGstAmount;

                row.querySelector('.purchase-row-total').textContent = '₹ ' + rowTotal.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });

                grandQuantity += qty;
                grandDiscount += discount;
                grandGst += rowGstAmount;
                grandSubtotal += (qty * rate);
                grandTotalOfTotals += rowTotal;
            });

            // Update footer metrics
            const footerQty = document.getElementById('purchaseFooterQty');
            const footerDiscount = document.getElementById('purchaseFooterDiscount');
            const footerGst = document.getElementById('purchaseFooterGst');
            const footerTotal = document.getElementById('purchaseFooterTotal');

            if (footerQty) footerQty.textContent = grandQuantity;
            if (footerDiscount) footerDiscount.textContent = '₹ ' + grandDiscount.toLocaleString('en-IN');
            if (footerGst) footerGst.textContent = '₹ ' + grandGst.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
            if (footerTotal) footerTotal.textContent = '₹ ' + grandTotalOfTotals.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });

            // Summary calculations
            const baseBillAmount = grandTotalOfTotals;
            const chargesVal = parseFloat(pChargeAmountInput.value) || 0;
            let finalBillAmount = baseBillAmount + chargesVal;

            let tdsAmount = 0;
            if (pTdsCheck && pTdsCheck.checked) {
                const tdsPercent = parseFloat(pTdsPercentInput.value) || 0;
                tdsAmount = (finalBillAmount * (tdsPercent / 100));
            }

            let payableAmount = finalBillAmount - tdsAmount;

            // Rounding
            let roundOffVal = 0;
            if (pRoundCheck && pRoundCheck.checked) {
                const rounded = Math.round(payableAmount);
                roundOffVal = rounded - payableAmount;
                payableAmount = rounded;
            }

            // Update UI elements
            const billAmountEl = document.getElementById('purchaseSummaryBillAmount');
            const tdsAmountEl = document.getElementById('purchaseSummaryTdsAmount');
            const payableAmountEl = document.getElementById('purchaseSummaryPayableAmount');
            const roundOffEl = document.getElementById('purchaseSummaryRoundOff');

            if (billAmountEl) billAmountEl.textContent = '₹ ' + finalBillAmount.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
            if (tdsAmountEl) tdsAmountEl.textContent = '₹ ' + tdsAmount.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
            if (payableAmountEl) payableAmountEl.textContent = '₹ ' + payableAmount.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
            if (roundOffEl) {
                roundOffEl.textContent = (roundOffVal >= 0 ? '+' : '') + roundOffVal.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
            }
        }

        // Initial calculation trigger for Purchase form
        recalculatePurchaseBill();

        // Clear Form Button for Purchase
        const clearPurchaseFormBtn = document.getElementById('clearPurchaseFormBtn');
        if (clearPurchaseFormBtn) {
            clearPurchaseFormBtn.addEventListener('click', function() {
                const form = document.getElementById('purchaseBillForm');
                if (form) form.reset();
                const rows = purchaseTableBody.querySelectorAll('tr');
                rows.forEach((row, index) => {
                    if (index > 0) row.remove();
                });
                const firstRow = purchaseTableBody.querySelector('tr');
                if (firstRow) {
                    firstRow.querySelector('.purchase-qty').value = 1;
                    firstRow.querySelector('.purchase-rate').value = 0;
                    firstRow.querySelector('.purchase-discount').value = 0;
                    firstRow.querySelector('.purchase-gst').value = "18";
                }
                recalculatePurchaseBill();
                showToast('Purchase form cleared!', 'info');
            });
        }
    }

    // Toggle list vs form views on Purchase page
    const togglePurchaseListViewBtn = document.getElementById('togglePurchaseListViewBtn');
    const togglePurchaseFormViewBtn = document.getElementById('togglePurchaseFormViewBtn');
    const purchaseBillFormView = document.getElementById('purchaseBillFormView');
    const purchaseBillListView = document.getElementById('purchaseBillListView');

    if (togglePurchaseListViewBtn && togglePurchaseFormViewBtn && purchaseBillFormView && purchaseBillListView) {
        togglePurchaseListViewBtn.addEventListener('click', function(e) {
            e.preventDefault();
            purchaseBillFormView.classList.add('d-none');
            purchaseBillListView.classList.remove('d-none');
        });
        togglePurchaseFormViewBtn.addEventListener('click', function(e) {
            e.preventDefault();
            purchaseBillListView.classList.add('d-none');
            purchaseBillFormView.classList.remove('d-none');
        });
    }

    // Show initial alerts to mimic the screenshot
    setTimeout(() => {
        showToast('E-Way Bill Expired for Vehicle HR61D1109 (LR No: 10024)', 'danger');
    }, 1000);
    setTimeout(() => {
        showToast('PUC Renewal Due in 3 days for Vehicle DL01A4321', 'warning');
    }, 2500);
});
