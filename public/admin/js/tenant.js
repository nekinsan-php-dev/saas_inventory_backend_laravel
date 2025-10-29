// Tenant Management JavaScript
class TenantManager {
    constructor() {
        this.selectedTenants = new Set();
        this.init();
    }

    init() {
        this.initEventListeners();
        this.initTableInteractions();
    }

    initEventListeners() {
        // Add tenant modal
        document.getElementById('addTenantBtn')?.addEventListener('click', () => {
            this.openAddTenantModal();
        });

        // Modal close
        document.getElementById('closeModal')?.addEventListener('click', () => {
            this.closeModal();
        });

        // Bulk actions
        document.getElementById('selectAll')?.addEventListener('change', (e) => {
            this.toggleSelectAll(e.target.checked);
        });

        // Filter actions
        document.querySelectorAll('.filter-select').forEach(select => {
            select.addEventListener('change', () => {
                this.applyFilters();
            });
        });

        // Search filter
        const searchInput = document.querySelector('.search-filter input');
        if (searchInput) {
            searchInput.addEventListener('input', this.debounce(() => {
                this.applyFilters();
            }, 300));
        }
    }

    initTableInteractions() {
        // Row selection
        document.querySelectorAll('.tenant-checkbox').forEach(checkbox => {
            checkbox.addEventListener('change', (e) => {
                const tenantId = e.target.value;
                if (e.target.checked) {
                    this.selectedTenants.add(tenantId);
                } else {
                    this.selectedTenants.delete(tenantId);
                }
                this.updateBulkActions();
            });
        });

        // Action buttons
        document.querySelectorAll('.action-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const action = e.currentTarget.title.toLowerCase();
                const row = e.currentTarget.closest('tr');
                const tenantId = row.querySelector('.tenant-checkbox').value;
                
                switch(action) {
                    case 'view':
                        this.viewTenant(tenantId);
                        break;
                    case 'edit':
                        this.editTenant(tenantId);
                        break;
                    case 'suspend':
                        this.suspendTenant(tenantId);
                        break;
                    case 'delete':
                        this.deleteTenant(tenantId);
                        break;
                }
            });
        });
    }

    openAddTenantModal() {
        document.getElementById('tenantModal').classList.add('active');
    }

    closeModal() {
        document.getElementById('tenantModal').classList.remove('active');
        this.resetForm();
    }

    resetForm() {
        document.getElementById('tenantForm').reset();
    }

    toggleSelectAll(checked) {
        document.querySelectorAll('.tenant-checkbox').forEach(checkbox => {
            checkbox.checked = checked;
            const tenantId = checkbox.value;
            if (checked) {
                this.selectedTenants.add(tenantId);
            } else {
                this.selectedTenants.delete(tenantId);
            }
        });
        this.updateBulkActions();
    }

    updateBulkActions() {
        const bulkSection = document.querySelector('.bulk-actions');
        const selectedCount = this.selectedTenants.size;
        
        if (selectedCount > 0) {
            bulkSection.style.display = 'flex';
            document.querySelector('.selected-count').textContent = `${selectedCount} selected`;
        } else {
            bulkSection.style.display = 'none';
        }
    }

    applyFilters() {
        const searchTerm = document.querySelector('.search-filter input').value.toLowerCase();
        const statusFilter = document.querySelector('select[name="status"]').value;
        const planFilter = document.querySelector('select[name="plan"]').value;
        
        document.querySelectorAll('tbody tr').forEach(row => {
            const name = row.querySelector('.tenant-name').textContent.toLowerCase();
            const status = row.querySelector('.tenant-status').textContent.toLowerCase();
            const plan = row.querySelector('.plan-badge').textContent.toLowerCase();
            
            const matchesSearch = name.includes(searchTerm);
            const matchesStatus = statusFilter === 'all' || status.includes(statusFilter);
            const matchesPlan = planFilter === 'all' || plan.includes(planFilter);
            
            row.style.display = matchesSearch && matchesStatus && matchesPlan ? '' : 'none';
        });
    }

    viewTenant(tenantId) {
        // Implement view tenant functionality
        console.log('View tenant:', tenantId);
        // Redirect to tenant detail page or show modal
    }

    editTenant(tenantId) {
        // Implement edit tenant functionality
        console.log('Edit tenant:', tenantId);
        // Open edit modal with tenant data
    }

    suspendTenant(tenantId) {
        if (confirm('Are you sure you want to suspend this tenant?')) {
            // Implement suspend functionality
            console.log('Suspend tenant:', tenantId);
            // API call to suspend tenant
        }
    }

    deleteTenant(tenantId) {
        if (confirm('Are you sure you want to delete this tenant? This action cannot be undone.')) {
            // Implement delete functionality
            console.log('Delete tenant:', tenantId);
            // API call to delete tenant
        }
    }

    debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new TenantManager();
});