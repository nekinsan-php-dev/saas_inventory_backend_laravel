<x-admin.layout title="Tenant Management">
    <link href="{{ asset('admin/css/tenant.css') }}" rel="stylesheet">

    <!-- Page Header -->
    <div class="page-header">
        <h1 class="page-title">Tenant Management</h1>
        <p class="page-subtitle">Manage all your SaaS tenants, their plans, and status in one place.</p>
        
        <div class="header-actions">
            <div class="btn-group">
                <button class="active">All Tenants</button>
                <button>Active</button>
                <button>Suspended</button>
            </div>
            <button class="btn-primary" id="addTenantBtn">
                <i class="bi bi-plus-circle"></i>
                <span>Add New Tenant</span>
            </button>
        </div>
    </div>

    <!-- Filter Bar -->
    <div class="filter-bar">
        <div class="filter-group">
            <span class="filter-label">Status:</span>
            <select class="filter-select" name="status">
                <option value="all">All Status</option>
                <option value="active">Active</option>
                <option value="suspended">Suspended</option>
                <option value="pending">Pending</option>
            </select>
        </div>
        
        <div class="filter-group">
            <span class="filter-label">Plan:</span>
            <select class="filter-select" name="plan">
                <option value="all">All Plans</option>
                <option value="basic">Basic</option>
                <option value="professional">Professional</option>
                <option value="enterprise">Enterprise</option>
            </select>
        </div>
        
        <div class="search-filter">
            <i class="bi bi-search"></i>
            <input type="text" placeholder="Search tenants...">
        </div>
    </div>

    <!-- Tenants Table - Updated to match image layout -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All Tenants</h3>
        </div>
        <div class="card-body" style="padding: 0;">
            <div class="table-wrapper">
                <table class="tenant-table detailed-view">
                    <thead>
                        <tr>
                            <th>TENANT</th>
                            <th>PLAN & BILLING</th>
                            <th>STATUS</th>
                            <th>USAGE</th>
                            <th>SUBSCRIPTION</th>
                            <th>CREATED</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- TechCorp -->
                        <tr>
                            <td>
                                <div class="tenant-info">
                                    <div class="tenant-logo primary">TC</div>
                                    <div class="tenant-details">
                                        <div class="tenant-name">TechCorp</div>
                                        <div class="tenant-plan">PROFESSIONAL</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="billing-info">
                                    <div class="price">$799.99/month</div>
                                    <div class="billing-cycle">Monthly</div>
                                </div>
                            </td>
                            <td>
                                <div class="status-info">
                                    <span class="status-badge active">Active</span>
                                </div>
                            </td>
                            <td>
                                <div class="usage-stats">
                                    <div class="usage-item">
                                        <span class="usage-label">Users</span>
                                        <span class="usage-value">12/20</span>
                                    </div>
                                    <div class="usage-item">
                                        <span class="usage-label">Storage</span>
                                        <span class="usage-value">45%</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="subscription-info">
                                    <div class="period">Current Period</div>
                                    <div class="dates">Oct 1 - Oct 31, 2023</div>
                                    <div class="last-payment">Last Payment $799.99 on Oct 1</div>
                                </div>
                            </td>
                            <td>
                                <div class="created-date">Jan 15, 2023</div>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <button class="action-btn" title="View">View</button>
                                    <button class="action-btn" title="Edit">Edit</button>
                                    <button class="action-btn" title="Enter">Enter</button>
                                    <button class="action-btn" title="Suspend">Suspend</button>
                                </div>
                            </td>
                        </tr>
                        
                        <!-- RetailStore -->
                        <tr>
                            <td>
                                <div class="tenant-info">
                                    <div class="tenant-logo success">RS</div>
                                    <div class="tenant-details">
                                        <div class="tenant-name">RetailStore</div>
                                        <div class="tenant-plan">BASIC</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="billing-info">
                                    <div class="price">$299.99/month</div>
                                    <div class="billing-cycle">Monthly</div>
                                </div>
                            </td>
                            <td>
                                <div class="status-info">
                                    <span class="status-badge active">Active</span>
                                </div>
                            </td>
                            <td>
                                <div class="usage-stats">
                                    <div class="usage-item">
                                        <span class="usage-label">Users</span>
                                        <span class="usage-value">3/5</span>
                                    </div>
                                    <div class="usage-item">
                                        <span class="usage-label">Storage</span>
                                        <span class="usage-value">22%</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="subscription-info">
                                    <div class="period">Current Period</div>
                                    <div class="dates">Oct 1 - Oct 31, 2023</div>
                                    <div class="last-payment">Last Payment $299.99 on Oct 1</div>
                                </div>
                            </td>
                            <td>
                                <div class="created-date">Feb 1, 2023</div>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <button class="action-btn" title="View">View</button>
                                    <button class="action-btn" title="Edit">Edit</button>
                                    <button class="action-btn" title="Enter">Enter</button>
                                    <button class="action-btn" title="Suspend">Suspend</button>
                                </div>
                            </td>
                        </tr>
                        
                        <!-- ManufacturePro -->
                        <tr>
                            <td>
                                <div class="tenant-info">
                                    <div class="tenant-logo warning">MP</div>
                                    <div class="tenant-details">
                                        <div class="tenant-name">ManufacturePro</div>
                                        <div class="tenant-plan">ENTERPRISE</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="billing-info">
                                    <div class="price">$1,999.99/month</div>
                                    <div class="billing-cycle">Custom</div>
                                </div>
                            </td>
                            <td>
                                <div class="status-info">
                                    <span class="status-badge suspended">Suspended</span>
                                </div>
                            </td>
                            <td>
                                <div class="usage-stats">
                                    <div class="usage-item">
                                        <span class="usage-label">Users</span>
                                        <span class="usage-value">45/100</span>
                                    </div>
                                    <div class="usage-item">
                                        <span class="usage-label">Storage</span>
                                        <span class="usage-value">78%</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="subscription-info">
                                    <div class="period">Last Period</div>
                                    <div class="dates">Sept 1 - Sep 30, 2023</div>
                                    <div class="last-payment">Balance Due $1,999.99</div>
                                </div>
                            </td>
                            <td>
                                <div class="created-date">Jan 20, 2023</div>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <button class="action-btn" title="View">View</button>
                                    <button class="action-btn" title="Edit">Edit</button>
                                    <button class="action-btn" title="Access">Access</button>
                                    <button class="action-btn" title="Close">Close</button>
                                </div>
                            </td>
                        </tr>
                        
                        <!-- FoodDistro -->
                        <tr>
                            <td>
                                <div class="tenant-info">
                                    <div class="tenant-logo info">FD</div>
                                    <div class="tenant-details">
                                        <div class="tenant-name">FoodDistro</div>
                                        <div class="tenant-plan">PROFESSIONAL</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="billing-info">
                                    <div class="price">$799.99/month</div>
                                    <div class="billing-cycle">Trial</div>
                                </div>
                            </td>
                            <td>
                                <div class="status-info">
                                    <span class="status-badge trial">Trial</span>
                                </div>
                            </td>
                            <td>
                                <div class="usage-stats">
                                    <div class="usage-item">
                                        <span class="usage-label">Users</span>
                                        <span class="usage-value">8/20</span>
                                    </div>
                                    <div class="usage-item">
                                        <span class="usage-label">Storage</span>
                                        <span class="usage-value">32%</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="subscription-info">
                                    <div class="period">Trial Period</div>
                                    <div class="dates">Oct 1 - Nov 14, 2023</div>
                                    <div class="last-payment">Trial Ends: First Bill: $799.99/month</div>
                                </div>
                            </td>
                            <td>
                                <div class="created-date">Mar 10, 2023</div>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <button class="action-btn" title="View">View</button>
                                    <button class="action-btn" title="Edit">Edit</button>
                                    <button class="action-btn" title="Signup">Signup</button>
                                    <button class="action-btn" title="Suspend">Suspend</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Add Tenant Modal -->
    <div class="modal-overlay" id="tenantModal">
        <div class="tenant-modal">
            <div class="modal-header">
                <h3 class="modal-title">Add New Tenant</h3>
                <button class="modal-close" id="closeModal">
                    <i class="bi bi-x"></i>
                </button>
            </div>
            <form id="tenantForm">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Company Name</label>
                        <input type="text" class="form-input" placeholder="Enter company name" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Subdomain</label>
                        <input type="text" class="form-input" placeholder="company-name" required>
                        <small style="color: #6b7280; font-size: 12px; margin-top: 4px; display: block;">
                            Will be accessible at: company-name.saasportal.com
                        </small>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Plan</label>
                            <select class="form-select" required>
                                <option value="">Select a plan</option>
                                <option value="basic">Basic - $299/month</option>
                                <option value="professional">Professional - $799/month</option>
                                <option value="enterprise">Enterprise - $1,999/month</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">User Limit</label>
                            <input type="number" class="form-input" placeholder="e.g., 10" min="1" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Admin Email</label>
                        <input type="email" class="form-input" placeholder="admin@company.com" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Admin Name</label>
                        <input type="text" class="form-input" placeholder="Enter admin full name" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-secondary" id="closeModal">Cancel</button>
                    <button type="submit" class="btn-primary">Create Tenant</button>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('admin/js/tenant.js') }}"></script>
</x-admin.layout>