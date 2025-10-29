account setting <x-admin.layout title="System Settings">
    <link href="{{ asset('admin/css/settings.css') }}" rel="stylesheet">

    <!-- Page Header -->
    <div class="page-header">
        <h1 class="page-title">System Settings</h1>
        <p class="page-subtitle">Configure your SaaS platform settings, security, and preferences</p>
    </div>

    <!-- Settings Layout -->
    <div class="settings-layout">
  
        <!-- Main Content -->
        <div class="settings-content">
            <!-- General Settings -->
            <div class="settings-section">
                <div class="section-header">
                    <h2 class="section-title">General Settings</h2>
                    <p class="section-description">Basic platform configuration and preferences</p>
                </div>
                
                <div class="settings-card">
                    <div class="form-group">
                        <label class="form-label">Platform Name</label>
                        <input type="text" class="form-input" value="SaaS Portal Admin" placeholder="Enter platform name">
                        <small class="form-help">This name will be displayed throughout the application</small>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Platform URL</label>
                        <input type="url" class="form-input" value="https://admin.saasportal.com" placeholder="Enter platform URL">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Default Timezone</label>
                        <select class="form-select">
                            <option value="utc">UTC</option>
                            <option value="est" selected>Eastern Time (ET)</option>
                            <option value="pst">Pacific Time (PT)</option>
                            <option value="cet">Central European Time (CET)</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Default Language</label>
                        <select class="form-select">
                            <option value="en" selected>English</option>
                            <option value="es">Spanish</option>
                            <option value="fr">French</option>
                            <option value="de">German</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Date Format</label>
                        <select class="form-select">
                            <option value="mm/dd/yyyy" selected>MM/DD/YYYY</option>
                            <option value="dd/mm/yyyy">DD/MM/YYYY</option>
                            <option value="yyyy-mm-dd">YYYY-MM-DD</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Security Settings -->
            <div class="settings-section">
                <div class="section-header">
                    <h2 class="section-title">Security Settings</h2>
                    <p class="section-description">Configure security policies and authentication</p>
                </div>
                
                <div class="settings-card">
                    <div class="form-group">
                        <label class="form-label checkbox-label">
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                            Require Two-Factor Authentication
                        </label>
                        <small class="form-help">All admin users will be required to enable 2FA</small>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Session Timeout</label>
                        <select class="form-select">
                            <option value="15">15 minutes</option>
                            <option value="30">30 minutes</option>
                            <option value="60" selected>1 hour</option>
                            <option value="120">2 hours</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Password Policy</label>
                        <select class="form-select">
                            <option value="basic">Basic (8 characters minimum)</option>
                            <option value="medium" selected>Medium (12 characters, mixed case)</option>
                            <option value="strong">Strong (12 characters, mixed case + numbers + symbols)</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Failed Login Attempts</label>
                        <input type="number" class="form-input" value="5" min="1" max="10">
                        <small class="form-help">Number of failed attempts before account lockout</small>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">IP Whitelist</label>
                        <textarea class="form-textarea" placeholder="Enter allowed IP addresses (one per line)"></textarea>
                        <small class="form-help">Leave empty to allow access from any IP address</small>
                    </div>
                </div>
            </div>

            <!-- Email Settings -->
            <div class="settings-section">
                <div class="section-header">
                    <h2 class="section-title">Email & Notifications</h2>
                    <p class="section-description">Configure email templates and notification preferences</p>
                </div>
                
                <div class="settings-card">
                    <div class="form-group">
                        <label class="form-label">SMTP Host</label>
                        <input type="text" class="form-input" value="smtp.saasportal.com" placeholder="Enter SMTP host">
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">SMTP Port</label>
                            <input type="number" class="form-input" value="587" placeholder="Port">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Encryption</label>
                            <select class="form-select">
                                <option value="none">None</option>
                                <option value="ssl">SSL</option>
                                <option value="tls" selected>TLS</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">From Email</label>
                        <input type="email" class="form-input" value="noreply@saasportal.com" placeholder="From email address">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">From Name</label>
                        <input type="text" class="form-input" value="SaaS Portal" placeholder="From name">
                    </div>
                    
                    <div class="notification-settings">
                        <h4 class="subsection-title">Notification Types</h4>
                        
                        <div class="form-group">
                            <label class="form-label checkbox-label">
                                <input type="checkbox" checked>
                                <span class="checkmark"></span>
                                New Tenant Signups
                            </label>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label checkbox-label">
                                <input type="checkbox" checked>
                                <span class="checkmark"></span>
                                Payment Failures
                            </label>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label checkbox-label">
                                <input type="checkbox" checked>
                                <span class="checkmark"></span>
                                System Alerts
                            </label>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label checkbox-label">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                                Monthly Reports
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Billing & Payments -->
            <div class="settings-section">
                <div class="section-header">
                    <h2 class="section-title">Billing & Payments</h2>
                    <p class="section-description">Configure payment gateways and billing settings</p>
                </div>
                
                <div class="settings-card">
                    <div class="form-group">
                        <label class="form-label">Currency</label>
                        <select class="form-select">
                            <option value="usd" selected>US Dollar (USD)</option>
                            <option value="eur">Euro (EUR)</option>
                            <option value="gbp">British Pound (GBP)</option>
                            <option value="cad">Canadian Dollar (CAD)</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Payment Gateway</label>
                        <select class="form-select">
                            <option value="stripe" selected>Stripe</option>
                            <option value="paypal">PayPal</option>
                            <option value="braintree">Braintree</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Stripe API Key</label>
                        <input type="password" class="form-input" value="sk_live_xxxxxxxx" placeholder="Enter Stripe secret key">
                        <small class="form-help">Your Stripe secret key for processing payments</small>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Tax Rate (%)</label>
                        <input type="number" class="form-input" value="0.0" step="0.1" min="0" max="50" placeholder="Tax rate">
                        <small class="form-help">Global tax rate applied to all subscriptions</small>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Invoice Prefix</label>
                        <input type="text" class="form-input" value="INV-" placeholder="Invoice number prefix">
                    </div>
                </div>
            </div>

            <!-- Advanced Settings -->
            <div class="settings-section">
                <div class="section-header">
                    <h2 class="section-title">Advanced Settings</h2>
                    <p class="section-description">System configuration and maintenance options</p>
                </div>
                
                <div class="settings-card">
                    <div class="form-group">
                        <label class="form-label">API Rate Limit</label>
                        <input type="number" class="form-input" value="1000" min="100" max="10000">
                        <small class="form-help">Maximum API requests per hour per tenant</small>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Data Retention Period</label>
                        <select class="form-select">
                            <option value="30">30 days</option>
                            <option value="90">90 days</option>
                            <option value="365" selected>1 year</option>
                            <option value="730">2 years</option>
                        </select>
                        <small class="form-help">How long to keep tenant data after cancellation</small>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Backup Frequency</label>
                        <select class="form-select">
                            <option value="daily">Daily</option>
                            <option value="weekly" selected>Weekly</option>
                            <option value="monthly">Monthly</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Maintenance Mode</label>
                        <label class="form-label checkbox-label">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            Enable Maintenance Mode
                        </label>
                        <small class="form-help">Platform will be unavailable to tenants during maintenance</small>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Custom CSS</label>
                        <textarea class="form-textarea code-editor" placeholder="Enter custom CSS code" rows="6"></textarea>
                        <small class="form-help">Custom styles to override default platform styling</small>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="settings-actions">
                <button class="btn-secondary">Cancel</button>
                <button class="btn-primary">Save Changes</button>
            </div>
        </div>
    </div>

    <script src="{{ asset('admin/js/settings.js') }}"></script>
</x-admin.layout>