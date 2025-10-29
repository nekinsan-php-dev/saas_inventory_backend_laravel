<x-admin.layout title="Dashboard Overview">
<link href="{{ asset('admin/css/dashbaord.css') }}" rel="stylesheet">
        <!-- Page Header -->
        <div class="page-header">
            <h1 class="page-title">Dashboard Overview</h1>
            <p class="page-subtitle">Welcome back! Here's what's happening with your SaaS portal today.</p>
            
            <div class="header-controls">
                <div class="btn-group">
                    <button class="active">Today</button>
                    <button>Week</button>
                    <button>Month</button>
                </div>
                <button class="btn-primary">
                    <i class="bi bi-download"></i>
                    <span>Export Report</span>
                </button>
            </div>
        </div>
        
        <!-- Stats Cards -->
        <div class="stats-grid">
            <div class="stat-card primary">
                <div class="stat-header">
                    <div>
                        <div class="stat-label">Total Tenants</div>
                        <div class="stat-value">24</div>
                        <div class="stat-change">
                            <span class="positive">
                                <i class="bi bi-arrow-up"></i> 12%
                            </span>
                            <span class="stat-change-text">from last month</span>
                        </div>
                    </div>
                    <div class="stat-icon primary">
                        <i class="bi bi-building"></i>
                    </div>
                </div>
            </div>
            
            <div class="stat-card success">
                <div class="stat-header">
                    <div>
                        <div class="stat-label">Active Tenants</div>
                        <div class="stat-value">18</div>
                        <div class="stat-change">
                            <span class="positive">
                                <i class="bi bi-arrow-up"></i> 8%
                            </span>
                            <span class="stat-change-text">active rate</span>
                        </div>
                    </div>
                    <div class="stat-icon success">
                        <i class="bi bi-check-circle"></i>
                    </div>
                </div>
            </div>
            
            <div class="stat-card warning">
                <div class="stat-header">
                    <div>
                        <div class="stat-label">Monthly Revenue</div>
                        <div class="stat-value">$3,240</div>
                        <div class="stat-change">
                            <span class="positive">
                                <i class="bi bi-arrow-up"></i> 15%
                            </span>
                            <span class="stat-change-text">growth</span>
                        </div>
                    </div>
                    <div class="stat-icon warning">
                        <i class="bi bi-currency-dollar"></i>
                    </div>
                </div>
            </div>
            
            <div class="stat-card info">
                <div class="stat-header">
                    <div>
                        <div class="stat-label">Total Products</div>
                        <div class="stat-value">1,247</div>
                        <div class="stat-change">
                            <span class="positive">
                                <i class="bi bi-arrow-up"></i> 5%
                            </span>
                            <span class="stat-change-text">this month</span>
                        </div>
                    </div>
                    <div class="stat-icon info">
                        <i class="bi bi-box"></i>
                    </div>
                </div>
            </div>
            
            <div class="stat-card danger">
                <div class="stat-header">
                    <div>
                        <div class="stat-label">Pending Invoices</div>
                        <div class="stat-value">7</div>
                        <div class="stat-change">
                            <span class="negative">
                                <i class="bi bi-arrow-up"></i> 2
                            </span>
                            <span class="stat-change-text">awaiting payment</span>
                        </div>
                    </div>
                    <div class="stat-icon danger">
                        <i class="bi bi-receipt"></i>
                    </div>
                </div>
            </div>
            
            <div class="stat-card secondary">
                <div class="stat-header">
                    <div>
                        <div class="stat-label">System Users</div>
                        <div class="stat-value">156</div>
                        <div class="stat-change">
                            <span class="positive">
                                <i class="bi bi-arrow-up"></i> 8%
                            </span>
                            <span class="stat-change-text">active users</span>
                        </div>
                    </div>
                    <div class="stat-icon secondary">
                        <i class="bi bi-people"></i>
                    </div>
                </div>
            </div>
        </div>
            <!-- Revenue Chart & Quick Stats -->
            <div class="grid-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Revenue Overview</h3>
                    <div class="btn-group" style="margin: 0;">
                        <button>7D</button>
                        <button class="active">30D</button>
                        <button>90D</button>
                        <button>1Y</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="revenueChart"></canvas>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Quick Statistics</h3>
                </div>
                <div class="card-body" style="padding: 16px;">
                    <div class="quick-stats">
                        <div class="quick-stat-item">
                            <div class="quick-stat-left">
                                <div class="quick-stat-icon primary">
                                    <i class="bi bi-graph-up"></i>
                                </div>
                                <div class="quick-stat-info">
                                    <div class="quick-stat-label">Monthly Growth</div>
                                    <div class="quick-stat-sublabel">Revenue increase</div>
                                </div>
                            </div>
                            <span class="badge primary">+15%</span>
                        </div>
                        
                        <div class="quick-stat-item">
                            <div class="quick-stat-left">
                                <div class="quick-stat-icon success">
                                    <i class="bi bi-arrow-up-right"></i>
                                </div>
                                <div class="quick-stat-info">
                                    <div class="quick-stat-label">New Tenants</div>
                                    <div class="quick-stat-sublabel">This month</div>
                                </div>
                            </div>
                            <span class="badge success">+3</span>
                        </div>
                        
                        <div class="quick-stat-item">
                            <div class="quick-stat-left">
                                <div class="quick-stat-icon warning">
                                    <i class="bi bi-cart"></i>
                                </div>
                                <div class="quick-stat-info">
                                    <div class="quick-stat-label">Total Sales</div>
                                    <div class="quick-stat-sublabel">All tenants</div>
                                </div>
                            </div>
                            <span class="badge warning">247</span>
                        </div>
                        
                        <div class="quick-stat-item">
                            <div class="quick-stat-left">
                                <div class="quick-stat-icon info">
                                    <i class="bi bi-box"></i>
                                </div>
                                <div class="quick-stat-info">
                                    <div class="quick-stat-label">Low Stock Items</div>
                                    <div class="quick-stat-sublabel">Need attention</div>
                                </div>
                            </div>
                            <span class="badge info">12</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Recent Tenants & Activity -->
        <div class="grid-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Recent Tenants</h3>
                    <div style="display: flex; gap: 8px;">
                        <button class="btn-primary" style="padding: 8px 16px; font-size: 13px;">
                            <i class="bi bi-plus-circle"></i>
                            <span>Add Tenant</span>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="padding: 0;">
                    <div class="table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>Tenant</th>
                                    <th>Plan</th>
                                    <th>Status</th>
                                    <th>Users</th>
                                    <th>Revenue</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="tenant-info">
                                            <div class="tenant-logo primary">TC</div>
                                            <div class="tenant-details">
                                                <div class="tenant-name">TechCorp</div>
                                                <div class="tenant-url">techcorp.saasportal.com</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="plan-badge professional">Professional</span></td>
                                    <td><span class="status active"><i class="bi bi-circle-fill"></i> Active</span></td>
                                    <td>
                                        <div class="progress-wrapper">
                                            <span style="font-size: 13px; font-weight: 600;">12/20</span>
                                            <div class="progress-bar-bg">
                                                <div class="progress-bar-fill" style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><strong>$799.99</strong></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="action-btn" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="action-btn" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="action-btn" title="Analytics">
                                                <i class="bi bi-graph-up"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="tenant-info">
                                            <div class="tenant-logo success">RS</div>
                                            <div class="tenant-details">
                                                <div class="tenant-name">RetailStore</div>
                                                <div class="tenant-url">retailstore.saasportal.com</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="plan-badge basic">Basic</span></td>
                                    <td><span class="status active"><i class="bi bi-circle-fill"></i> Active</span></td>
                                    <td>
                                        <div class="progress-wrapper">
                                            <span style="font-size: 13px; font-weight: 600;">3/5</span>
                                            <div class="progress-bar-bg">
                                                <div class="progress-bar-fill" style="width: 60%; background: linear-gradient(90deg, #f59e0b 0%, #d97706 100%);"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><strong>$299.99</strong></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="action-btn" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="action-btn" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="action-btn" title="Analytics">
                                                <i class="bi bi-graph-up"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="tenant-info">
                                            <div class="tenant-logo warning">MF</div>
                                            <div class="tenant-details">
                                                <div class="tenant-name">ManufacturePro</div>
                                                <div class="tenant-url">manufacturepro.saasportal.com</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="plan-badge enterprise">Enterprise</span></td>
                                    <td><span class="status suspended"><i class="bi bi-circle-fill"></i> Suspended</span></td>
                                    <td>
                                        <div class="progress-wrapper">
                                            <span style="font-size: 13px; font-weight: 600;">45/100</span>
                                            <div class="progress-bar-bg">
                                                <div class="progress-bar-fill" style="width: 45%;"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><strong>$1,999.99</strong></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="action-btn" title="View">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="action-btn" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="action-btn" title="Analytics">
                                                <i class="bi bi-graph-up"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div>
                <!-- System Health -->
                <div class="card" style="margin-bottom: 24px;">
                    <div class="card-header">
                        <h3 class="card-title">System Health</h3>
                        <span class="badge success">All Systems Normal</span>
                    </div>
                    <div class="card-body" style="padding: 16px;">
                        <div class="health-item">
                            <div class="health-left">
                                <div class="health-icon success">
                                    <i class="bi bi-database"></i>
                                </div>
                                <div class="health-info">
                                    <div class="health-label">Database</div>
                                    <div class="health-sublabel">Response time</div>
                                </div>
                            </div>
                            <span class="health-value success">45ms</span>
                        </div>
                        
                        <div class="health-item">
                            <div class="health-left">
                                <div class="health-icon success">
                                    <i class="bi bi-cpu"></i>
                                </div>
                                <div class="health-info">
                                    <div class="health-label">CPU Usage</div>
                                    <div class="health-sublabel">Server load</div>
                                </div>
                            </div>
                            <span class="health-value success">24%</span>
                        </div>
                        
                        <div class="health-item">
                            <div class="health-left">
                                <div class="health-icon warning">
                                    <i class="bi bi-hdd"></i>
                                </div>
                                <div class="health-info">
                                    <div class="health-label">Storage</div>
                                    <div class="health-sublabel">Disk space</div>
                                </div>
                            </div>
                            <span class="health-value warning">78%</span>
                        </div>
                        
                        <div class="health-item">
                            <div class="health-left">
                                <div class="health-icon success">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <div class="health-info">
                                    <div class="health-label">Security</div>
                                    <div class="health-sublabel">Last scan</div>
                                </div>
                            </div>
                            <span class="health-value success">2h ago</span>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Activity -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Recent Activity</h3>
                        <span class="badge primary">3 New</span>
                    </div>
                    <div class="card-body" style="padding: 0;">
                        <div class="activity-feed">
                            <div class="activity-item">
                                <div class="activity-icon success">
                                    <i class="bi bi-building"></i>
                                </div>
                                <div class="activity-content">
                                    <div class="activity-title">New Tenant Registered</div>
                                    <div class="activity-description">FoodDistro signed up for Professional plan</div>
                                </div>
                                <div class="activity-time">5 min ago</div>
                            </div>
                            
                            <div class="activity-item">
                                <div class="activity-icon primary">
                                    <i class="bi bi-currency-dollar"></i>
                                </div>
                                <div class="activity-content">
                                    <div class="activity-title">Payment Received</div>
                                    <div class="activity-description">TechCorp paid $799.99</div>
                                </div>
                                <div class="activity-time">1 hour ago</div>
                            </div>
                            
                            <div class="activity-item">
                                <div class="activity-icon warning">
                                    <i class="bi bi-arrow-up"></i>
                                </div>
                                <div class="activity-content">
                                    <div class="activity-title">Plan Upgrade</div>
                                    <div class="activity-description">RetailStore upgraded to Professional</div>
                                </div>
                                <div class="activity-time">2 hours ago</div>
                            </div>
                            
                            <div class="activity-item">
                                <div class="activity-icon info">
                                    <i class="bi bi-question-circle"></i>
                                </div>
                                <div class="activity-content">
                                    <div class="activity-title">Support Ticket</div>
                                    <div class="activity-description">New ticket from ManufacturePro</div>
                                </div>
                                <div class="activity-time">5 hours ago</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/js/dashboard.js') }}"></script>
</x-admin.layout>