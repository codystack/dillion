    <div data-bs-theme="">
        <nav class="navbar navbar-vertical fixed-start navbar-expand-md" id="sidebar">
            <div class="container-fluid">
        
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <!-- Brand -->
            <a class="navbar-brand" href="index.html">
                <img src="assets/img/logo.svg" class="navbar-brand-img mx-auto" alt="...">
            </a>
        
            <!-- User (xs) -->
            <div class="navbar-user d-md-none">
        
                <!-- Dropdown -->
                <div class="dropdown">
        
                <!-- Toggle -->
                <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                    <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                    </div>
                </a>
        
                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarIcon">
                    <a href="profile-posts.html" class="dropdown-item">Profile</a>
                    <a href="account-general.html" class="dropdown-item">Settings</a>
                    <hr class="dropdown-divider">
                    <a href="sign-in.html" class="dropdown-item">Logout</a>
                </div>
        
                </div>
        
            </div>
        
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">
        
                <!-- Form -->
                <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge input-group-reverse">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-text">
                    <span class="fe fe-search"></span>
                    </div>
                </div>
                </form>
        
                <!-- Navigation -->
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                    <i class="fe fe-home"></i> Dashboards
                    </a>
                    <div class="collapse " id="sidebarDashboards">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                        <a href="index.html" class="nav-link ">
                            Default
                        </a>
                        </li>
                        <li class="nav-item">
                        <a href="dashboard-project-management.html" class="nav-link ">
                            Project Management
                        </a>
                        </li>
                        <li class="nav-item">
                        <a href="dashboard-ecommerce.html" class="nav-link ">
                            E-Commerce
                        </a>
                        </li>
                    </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarPages">
                    <i class="fe fe-file"></i> Pages
                    </a>
                    <div class="collapse show" id="sidebarPages">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                        <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarAccount">
                            Account
                        </a>
                        <div class="collapse show" id="sidebarAccount">
                            <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="account-general.html" class="nav-link ">
                                General
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="account-billing.html" class="nav-link active">
                                Billing
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="account-members.html" class="nav-link ">
                                Members
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="account-security.html" class="nav-link ">
                                Security
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="account-notifications.html" class="nav-link ">
                                Notifications
                                </a>
                            </li>
                            </ul>
                        </div>
                        </li>
                        <li class="nav-item">
                        <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm">
                            CRM
                        </a>
                        <div class="collapse " id="sidebarCrm">
                            <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="crm-contacts.html" class="nav-link ">
                                Contacts
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="crm-companies.html" class="nav-link ">
                                Companies
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="crm-deals.html" class="nav-link ">
                                Deals
                                </a>
                            </li>
                            </ul>
                        </div>
                        </li>
                        <li class="nav-item">
                        <a href="#sidebarProfile" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProfile">
                            Profile
                        </a>
                        <div class="collapse " id="sidebarProfile">
                            <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="profile-posts.html" class="nav-link ">
                                Posts
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="profile-groups.html" class="nav-link ">
                                Groups
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="profile-projects.html" class="nav-link ">
                                Projects
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="profile-files.html" class="nav-link ">
                                Files
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="profile-subscribers.html" class="nav-link ">
                                Subscribers
                                </a>
                            </li>
                            </ul>
                        </div>
                        </li>
                        <li class="nav-item">
                        <a href="#sidebarProject" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProject">
                            Project
                        </a>
                        <div class="collapse " id="sidebarProject">
                            <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="project-overview.html" class="nav-link ">
                                Overview
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="project-files.html" class="nav-link ">
                                Files
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="project-reports.html" class="nav-link ">
                                Reports
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="project-new.html" class="nav-link ">
                                New project
                                </a>
                            </li>
                            </ul>
                        </div>
                        </li>
                        <li class="nav-item">
                        <a href="#sidebarTeam" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTeam">
                            Team
                        </a>
                        <div class="collapse " id="sidebarTeam">
                            <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="team-overview.html" class="nav-link ">
                                Overview
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="team-projects.html" class="nav-link ">
                                Projects
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="team-members.html" class="nav-link ">
                                Members
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="team-new.html" class="nav-link ">
                                New team
                                </a>
                            </li>
                            </ul>
                        </div>
                        </li>
                        <li class="nav-item">
                        <a href="#sidebarFeed" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarFeed">
                            Feed
                        </a>
                        <div class="collapse " id="sidebarFeed">
                            <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="feed.html" class="nav-link ">
                                Platform
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="social-feed.html" class="nav-link ">
                                Social
                                </a>
                            </li>
                            </ul>
                        </div>
                        </li>
                        <li class="nav-item">
                        <a href="wizard.html" class="nav-link ">
                            Wizard
                        </a>
                        </li>
                        <li class="nav-item">
                        <a href="kanban.html" class="nav-link ">
                            Kanban
                        </a>
                        </li>
                        <li class="nav-item">
                        <a href="orders.html" class="nav-link ">
                            Orders
                        </a>
                        </li>
                        <li class="nav-item">
                        <a href="invoice.html" class="nav-link ">
                            Invoice
                        </a>
                        </li>
                        <li class="nav-item">
                        <a href="pricing.html" class="nav-link ">
                            Pricing
                        </a>
                        </li>
                    </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="widgets.html">
                    <i class="fe fe-grid"></i> Widgets
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                    <i class="fe fe-user"></i> Authentication
                    </a>
                    <div class="collapse" id="sidebarAuth">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                        <a href="#sidebarSignIn" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignIn">
                            Sign in
                        </a>
                        <div class="collapse" id="sidebarSignIn">
                            <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="sign-in-cover.html" class="nav-link">
                                Cover
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="sign-in-illustration.html" class="nav-link">
                                Illustration
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="sign-in.html" class="nav-link">
                                Basic
                                </a>
                            </li>
                            </ul>
                        </div>
                        </li>
                        <li class="nav-item">
                        <a href="#sidebarSignUp" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignUp">
                            Sign up
                        </a>
                        <div class="collapse" id="sidebarSignUp">
                            <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="sign-up-cover.html" class="nav-link">
                                Cover
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="sign-up-illustration.html" class="nav-link">
                                Illustration
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="sign-up.html" class="nav-link">
                                Basic
                                </a>
                            </li>
                            </ul>
                        </div>
                        </li>
                        <li class="nav-item">
                        <a href="#sidebarPassword" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPassword">
                            Password reset
                        </a>
                        <div class="collapse" id="sidebarPassword">
                            <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="password-reset-cover.html" class="nav-link">
                                Cover
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="password-reset-illustration.html" class="nav-link">
                                Illustration
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="password-reset.html" class="nav-link">
                                Basic
                                </a>
                            </li>
                            </ul>
                        </div>
                        </li>
                        <li class="nav-item">
                        <a href="#sidebarError" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarError">
                            Error
                        </a>
                        <div class="collapse" id="sidebarError">
                            <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="error-illustration.html" class="nav-link">
                                Illustration
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="error.html" class="nav-link">
                                Basic
                                </a>
                            </li>
                            </ul>
                        </div>
                        </li>
                    </ul>
                    </div>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link" data-bs-toggle="offcanvas" href="#sidebarOffcanvasActivity" aria-contrtols="sidebarOffcanvasActivity">
                    <span class="fe fe-bell"></span> Notifications
                    </a>
                </li>
                </ul>
        
                <!-- Divider -->
                <hr class="navbar-divider my-3">
        
                <!-- Heading -->
                <h6 class="navbar-heading">
                Documentation
                </h6>
        
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-4">
                <li class="nav-item">
                    <a class="nav-link" href="#sidebarBasics" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarBasics">
                    <i class="fe fe-clipboard"></i> Basics
                    </a>
                    <div class="collapse " id="sidebarBasics">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                        <a href="docs/getting-started.html" class="nav-link ">
                            Getting Started
                        </a>
                        </li>
                        <li class="nav-item">
                        <a href="docs/design-file.html" class="nav-link ">
                            Design File
                        </a>
                        </li>
                    </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sidebarComponents" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarComponents">
                    <i class="fe fe-book-open"></i> Components
                    </a>
                    <div class="collapse " id="sidebarComponents">
                    <ul class="nav nav-sm flex-column">
                        <li>
                        <a href="docs/components.html#accordion" class="nav-link">
                            Accordion
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#alerts" class="nav-link">
                            Alerts
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#autosize" class="nav-link">
                            Autosize
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#avatars" class="nav-link">
                            Avatars
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#badges" class="nav-link">
                            Badges
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#breadcrumb" class="nav-link">
                            Breadcrumb
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#buttons" class="nav-link">
                            Buttons
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#buttonGroup" class="nav-link">
                            Button group
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#cards" class="nav-link">
                            Cards
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#charts" class="nav-link">
                            Charts
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#checklist" class="nav-link">
                            Checklist
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#dropdowns" class="nav-link">
                            Dropdowns
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#forms" class="nav-link">
                            Forms
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#icons" class="nav-link">
                            Icons
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#kanban" class="nav-link">
                            Kanban
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#listGroup" class="nav-link">
                            List group
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#map" class="nav-link">
                            Map
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#modals" class="nav-link">
                            Modal
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#navbarDocs" class="nav-link">
                            Navbar
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#navsAndTabs" class="nav-link">
                            Navs & tabs
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#offcanvas" class="nav-link">
                            Offcanvas
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#pageHeaders" class="nav-link">
                            Page headers
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#pagination" class="nav-link">
                            Pagination
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#placeholders" class="nav-link">
                            Placeholders
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#popovers" class="nav-link">
                            Popovers
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#progress" class="nav-link">
                            Progress
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#socialPosts" class="nav-link">
                            Social post
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#spinners" class="nav-link">
                            Spinners
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#tables" class="nav-link">
                            Tables
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#toasts" class="nav-link">
                            Toasts
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#tooltips" class="nav-link">
                            Tooltips
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#typography" class="nav-link">
                            Typography
                        </a>
                        </li>
                        <li>
                        <a href="docs/components.html#utilities" class="nav-link">
                            Utilities
                        </a>
                        </li>
                    </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="docs/changelog.html">
                    <i class="fe fe-git-branch"></i> Changelog <span class="badge bg-primary ms-auto">v2.3.0</span>
                    </a>
                </li>
                </ul>
        
                <!-- Push content down -->
                <div class="mt-auto"></div>
        
                <!-- Customize -->
                <div class="mb-4" id="popoverDemo" title="Make Dashkit Your Own!" data-bs-content="Switch the demo to Dark Mode or adjust the navigation layout, icons, and colors!">
                    <a class="btn w-100 btn-primary" data-bs-toggle="offcanvas" href="#offcanvasDemo" aria-controls="offcanvasDemo">
                    <i class="fe fe-sliders me-2"></i> Customize
                    </a>
                </div>
                <div id="popoverDemoContainer" data-bs-theme="dark"></div>
        
                <!-- User (md) -->
                <div class="navbar-user d-none d-md-flex" id="sidebarUser">
        
                    <!-- Icon -->
                    <a class="navbar-user-link" data-bs-toggle="offcanvas" href="#sidebarOffcanvasActivity" aria-controls="sidebarOffcanvasActivity">
                    <span class="icon">
                        <i class="fe fe-bell"></i>
                    </span>
                    </a>
        
                    <!-- Dropup -->
                    <div class="dropup">
        
                    <!-- Toggle -->
                    <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-sm avatar-online">
                        <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                        </div>
                    </a>
        
                    <!-- Menu -->
                    <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                        <a href="profile-posts.html" class="dropdown-item">Profile</a>
                        <a href="account-general.html" class="dropdown-item">Settings</a>
                        <hr class="dropdown-divider">
                        <a href="sign-in.html" class="dropdown-item">Logout</a>
                    </div>
        
                    </div>
        
                    <!-- Icon -->
                    <a class="navbar-user-link" data-bs-toggle="offcanvas" href="#sidebarOffcanvasSearch" aria-controls="sidebarOffcanvasSearch">
                    <span class="icon">
                        <i class="fe fe-search"></i>
                    </span>
                    </a>
        
                </div>
        
            </div> <!-- / .navbar-collapse -->
        
            </div>
        </nav>
    </div>

    <div data-bs-theme="">
        <nav class="navbar navbar-vertical navbar-vertical-sm fixed-start navbar-expand-md" id="sidebarSmall">
            <div class="container-fluid">
        
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarSmallCollapse" aria-controls="sidebarSmallCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <!-- Brand -->
            <a class="navbar-brand" href="index.html">
                <img src="assets/img/logo.svg" class="navbar-brand-img 
                mx-auto" alt="...">
            </a>
        
            <!-- User (xs) -->
            <div class="navbar-user d-md-none">
        
                <!-- Dropdown -->
                <div class="dropdown">
        
                <!-- Toggle -->
                <a href="#" id="sidebarSmallIcon" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                    <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                    </div>
                </a>
        
                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarSmallIcon">
                    <a href="profile-posts.html" class="dropdown-item">Profile</a>
                    <a href="account-general.html" class="dropdown-item">Settings</a>
                    <hr class="dropdown-divider">
                    <a href="sign-in.html" class="dropdown-item">Logout</a>
                </div>
        
                </div>
        
            </div>
        
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarSmallCollapse">
        
                <!-- Form -->
                <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge input-group-reverse">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-text">
                    <span class="fe fe-search"></span>
                    </div>
                </div>
                </form>
        
                <!-- Divider -->
                <hr class="navbar-divider d-none d-md-block mt-0 mb-3">
        
                <!-- Navigation -->
                <ul class="navbar-nav">
                <li class="nav-item dropend">
                    <a class="nav-link dropdown-toggle " id="sidebarSmallDashboards" href="#" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Dashboards">
                    <i class="fe fe-home"></i> <span class="d-md-none">Dashboards</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="sidebarSmallDashboards">
                    <li class="dropdown-header d-none d-md-block">
                        <h6 class="text-uppercase mb-0">Dashboards</h6>
                    </li>
                    <li>
                        <a href="index.html" class="dropdown-item active">
                        Default
                        </a>
                    </li>
                    <li>
                        <a href="dashboard-project-management.html" class="dropdown-item ">
                        Project Management
                        </a>
                    </li>
                    <li>
                        <a href="dashboard-ecommerce.html" class="dropdown-item ">
                        E-Commerce
                        </a>
                    </li>
                    </ul>
                </li>
                <li class="nav-item dropend">
                    <a class="nav-link dropdown-toggle active" id="sidebarSmallPages" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-haspopup="true" aria-expanded="true">
                    <i class="fe fe-file"></i> <span class="d-md-none">Pages</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="sidebarSmallPages">
                    <li class="dropdown-header d-none d-md-block">
                        <h6 class="text-uppercase mb-0">Pages</h6>
                    </li>
                    <li class="dropend">
                        <a class="dropdown-item dropdown-toggle active" href="#" id="sidebarSmallAccount" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="sidebarSmallAccount">
                        <a class="dropdown-item " href="account-general.html">
                            General
                        </a>
                        <a class="dropdown-item " href="account-billing.html">
                            Billing
                        </a>
                        <a class="dropdown-item " href="account-members.html">
                            Members
                        </a>
                        <a class="dropdown-item " href="account-security.html">
                            Security
                        </a>
                        <a class="dropdown-item " href="account-notifications.html">
                            Notifications
                        </a>
                        </div>
                    </li>
                    <li class="dropend">
                        <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallCrm" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        CRM
                        </a>
                        <div class="dropdown-menu" aria-labelledby="sidebarSmallCrm">
                        <a class="dropdown-item " href="crm-contacts.html">
                            Contacts
                        </a>
                        <a class="dropdown-item " href="crm-companies.html">
                            Companies
                        </a>
                        <a class="dropdown-item " href="crm-deals.html">
                            Deals
                        </a>
                        </div>
                    </li>
                    <li class="dropend">
                        <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallProfile" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="sidebarSmallProfile">
                        <a class="dropdown-item " href="profile-posts.html">
                            Posts
                        </a>
                        <a class="dropdown-item " href="profile-groups.html">
                            Groups
                        </a>
                        <a class="dropdown-item " href="profile-projects.html">
                            Projects
                        </a>
                        <a class="dropdown-item " href="profile-files.html">
                            Files
                        </a>
                        <a class="dropdown-item " href="profile-subscribers.html">
                            Subscribers
                        </a>
                        </div>
                    </li>
                    <li class="dropend">
                        <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallProject" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Project
                        </a>
                        <div class="dropdown-menu" aria-labelledby="sidebarSmallProject">
                        <a class="dropdown-item " href="project-overview.html">
                            Overview
                        </a>
                        <a class="dropdown-item " href="project-files.html">
                            Files
                        </a>
                        <a class="dropdown-item " href="project-reports.html">
                            Reports
                        </a>
                        <a class="dropdown-item " href="project-new.html">
                            New project
                        </a>
                        </div>
                    </li>
                    <li class="dropend">
                        <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallTeam" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Team
                        </a>
                        <div class="dropdown-menu" aria-labelledby="sidebarSmallTeam">
                        <a class="dropdown-item " href="team-overview.html">
                            Overview
                        </a>
                        <a class="dropdown-item " href="team-projects.html">
                            Projects
                        </a>
                        <a class="dropdown-item " href="team-members.html">
                            Members
                        </a>
                        <a class="dropdown-item " href="team-new.html">
                            New team
                        </a>
                        </div>
                    </li>
                    <li class="dropend">
                        <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallFeed" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Feed
                        </a>
                        <div class="dropdown-menu" aria-labelledby="sidebarSmallFeed">
                        <a class="dropdown-item " href="feed.html">
                            Platform
                        </a>
                        <a class="dropdown-item " href="social-feed.html">
                            Social
                        </a>
                        </div>
                    </li>
                    <li>
                        <a class="dropdown-item " href="wizard.html">
                        Wizard
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item " href="kanban.html">
                        Kanban
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item " href="orders.html">
                        Orders
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item " href="invoice.html">
                        Invoice
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item " href="pricing.html">
                        Pricing
                        </a>
                    </li>
                    </ul>
                </li>
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Widgets">
                    <a class="nav-link " href="widgets.html">
                    <i class="fe fe-grid"></i> <span class="d-md-none">Widgets</span>
                    </a>
                </li>
                <li class="nav-item dropend">
                    <a class="nav-link dropdown-toggle" id="sidebarSmallAuth" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fe fe-user"></i> <span class="d-md-none">Auth</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="sidebarSmallAuth">
                    <li class="dropdown-header d-none d-md-block">
                        <h6 class="text-uppercase mb-0">Authentication</h6>
                    </li>
                    <li class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallSignIn" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sign in
                        </a>
                        <div class="dropdown-menu" aria-labelledby="sidebarSmallSignIn">
                        <a class="dropdown-item" href="sign-in-cover.html">
                            Cover
                        </a>
                        <a class="dropdown-item" href="sign-in-illustration.html">
                            Illustration
                        </a>
                        <a class="dropdown-item" href="sign-in-basics.html">
                            Basic
                        </a>
                        </div>
                    </li>
                    <li class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallSignUp" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sign up
                        </a>
                        <div class="dropdown-menu" aria-labelledby="sidebarSmallSignUp">
                        <a class="dropdown-item" href="sign-up-cover.html">
                            Cover
                        </a>
                        <a class="dropdown-item" href="sign-up-illustration.html">
                            Illustration
                        </a>
                        <a class="dropdown-item" href="sign-up.html">
                            Basic
                        </a>
                        </div>
                    </li>
                    <li class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallPassword" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Password reset
                        </a>
                        <div class="dropdown-menu" aria-labelledby="sidebarSmallPassword">
                        <a class="dropdown-item" href="password-reset-cover.html">
                            Cover
                        </a>
                        <a class="dropdown-item" href="password-reset-illustration.html">
                            Illustration
                        </a>
                        <a class="dropdown-item" href="password-reset.html">
                            Basic
                        </a>
                        </div>
                    </li>
                    <li class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallError" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Error
                        </a>
                        <div class="dropdown-menu" aria-labelledby="sidebarSmallError">
                        <a class="dropdown-item" href="error-illustration.html">
                            Illustration
                        </a>
                        <a class="dropdown-item" href="error.html">
                            Basic
                        </a>
                        </div>
                    </li>
                    </ul>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link" href="#sidebarOffcanvasActivity" data-bs-toggle="offcanvas" aria-controls="sidebarOffcanvasActivity">
                    <span class="fe fe-bell"></span> Notifications
                    </a>
                </li>
                </ul>
        
                <!-- Divider -->
                <hr class="navbar-divider my-3">
        
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-4">
                <li class="nav-item dropend">
                    <a class="nav-link dropdown-toggle " id="sidebarSmallBasics" href="#" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Basics">
                    <i class="fe fe-clipboard"></i> <span class="d-md-none">Basics</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="sidebarSmallBasics">
                    <li class="dropdown-header d-none d-md-block">
                        <h6 class="text-uppercase mb-0">Basics</h6>
                    </li>
                    <li>
                        <a href="docs/getting-started.html" class="dropdown-item ">
                        Getting Started
                        </a>
                    </li>
                    <li>
                        <a href="docs/design-file.html" class="dropdown-item ">
                        Design File
                        </a>
                    </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="docs/components.html" data-bs-toggle="tooltip" data-bs-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Components">
                    <i class="fe fe-book-open"></i> <span class="d-md-none">Components</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="docs/changelog.html" data-bs-toggle="tooltip" data-bs-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Changelog">
                    <i class="fe fe-git-branch"></i> <span class="d-md-none">Changelog</span> <span class="badge bg-primary ms-auto d-md-none">v2.3.0</span>
                    </a>
                </li>
                </ul>
        
                <!-- Push content down -->
                <div class="mt-auto"></div>
        
                <!-- Customize -->
                <div class="mb-4" data-bs-toggle="tooltip" data-bs-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Customize">
                    <a class="btn w-100 btn-primary" data-bs-toggle="offcanvas" href="#offcanvasDemo" aria-controls="offcanvasDemo">
                    <i class="fe fe-sliders"></i> <span class="d-md-none ms-2">Customize</span>
                    </a>
                </div>
        
                <!-- User (md) -->
                <div class="navbar-user d-none d-md-flex flex-column" id="sidebarSmallUser">
        
                    <!-- Icon -->
                    <a class="navbar-user-link mb-3" data-bs-toggle="offcanvas" href="#sidebarOffcanvasSearch" aria-controls="sidebarOffcanvasSearch">
                    <span class="icon">
                        <i class="fe fe-search"></i>
                    </span>
                    </a>
        
                    <!-- Icon -->
                    <a class="navbar-user-link mb-3" data-bs-toggle="offcanvas" href="#sidebarOffcanvasActivity" aria-controls="sidebarOffcanvasActivity">
                    <span class="icon">
                        <i class="fe fe-bell"></i>
                    </span>
                    </a>
        
                    <!-- Dropup -->
                    <div class="dropend">
        
                    <!-- Toggle -->
                    <a href="#" id="sidebarSmallIconCopy" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-sm avatar-online">
                        <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                        </div>
                    </a>
        
                    <!-- Menu -->
                    <div class="dropdown-menu" aria-labelledby="sidebarSmallIconCopy">
                        <a href="profile-posts.html" class="dropdown-item">Profile</a>
                        <a href="account-general.html" class="dropdown-item">Settings</a>
                        <hr class="dropdown-divider">
                        <a href="sign-in.html" class="dropdown-item">Logout</a>
                    </div>
        
                    </div>
        
                </div>
        
            </div> <!-- / .navbar-collapse -->
        
            </div>
        </nav>
    </div>

    <div data-bs-theme="">
        <nav class="navbar navbar-expand-lg" id="topnav">
            <div class="container">
        
            <!-- Toggler -->
            <button class="navbar-toggler me-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <!-- Brand -->
            <a class="navbar-brand me-auto" href="index.html">
                <img src="assets/img/logo.svg" alt="..." class="navbar-brand-img">
            </a>
        
            <!-- Form -->
            <form class="form-inline me-4 d-none d-lg-flex">
                <div class="input-group input-group-rounded input-group-merge input-group-reverse" data-list='{"valueNames": ["name"]}'>
        
                <!-- Input -->
                <input type="search" class="form-control dropdown-toggle list-search" data-bs-toggle="dropdown" placeholder="Search" aria-label="Search">
        
                <!-- Icon -->
                <div class="input-group-text">
                    <i class="fe fe-search"></i>
                </div>
        
                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-card">
                    <div class="card-body">
        
                    <!-- List group -->
                    <div class="list-group list-group-flush list-group-focus list my-n3">
                        <a class="list-group-item" href="team-overview.html">
                        <div class="row align-items-center">
                            <div class="col-auto">
        
                            <!-- Avatar -->
                            <div class="avatar">
                                <img src="assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                            </div>
        
                            </div>
                            <div class="col ms-n2">
        
                            <!-- Title -->
                            <h4 class="text-body text-focus mb-1 name">
                                Airbnb
                            </h4>
        
                            <!-- Time -->
                            <p class="small text-body-secondary mb-0">
                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                            </p>
        
                            </div>
                        </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item" href="team-overview.html">
                        <div class="row align-items-center">
                            <div class="col-auto">
        
                            <!-- Avatar -->
                            <div class="avatar">
                                <img src="assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                            </div>
        
                            </div>
                            <div class="col ms-n2">
        
                            <!-- Title -->
                            <h4 class="text-body text-focus mb-1 name">
                                Medium Corporation
                            </h4>
        
                            <!-- Time -->
                            <p class="small text-body-secondary mb-0">
                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                            </p>
        
                            </div>
                        </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item" href="project-overview.html">
                        <div class="row align-items-center">
                            <div class="col-auto">
        
                            <!-- Avatar -->
                            <div class="avatar avatar-4by3">
                                <img src="assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                            </div>
        
                            </div>
                            <div class="col ms-n2">
        
                            <!-- Title -->
                            <h4 class="text-body text-focus mb-1 name">
                                Homepage Redesign
                            </h4>
        
                            <!-- Time -->
                            <p class="small text-body-secondary mb-0">
                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                            </p>
        
                            </div>
                        </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item" href="project-overview.html">
                        <div class="row align-items-center">
                            <div class="col-auto">
        
                            <!-- Avatar -->
                            <div class="avatar avatar-4by3">
                                <img src="assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                            </div>
        
                            </div>
                            <div class="col ms-n2">
        
                            <!-- Title -->
                            <h4 class="text-body text-focus mb-1 name">
                                Travels & Time
                            </h4>
        
                            <!-- Time -->
                            <p class="small text-body-secondary mb-0">
                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                            </p>
        
                            </div>
                        </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item" href="project-overview.html">
                        <div class="row align-items-center">
                            <div class="col-auto">
        
                            <!-- Avatar -->
                            <div class="avatar avatar-4by3">
                                <img src="assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                            </div>
        
                            </div>
                            <div class="col ms-n2">
        
                            <!-- Title -->
                            <h4 class="text-body text-focus mb-1 name">
                                Safari Exploration
                            </h4>
        
                            <!-- Time -->
                            <p class="small text-body-secondary mb-0">
                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                            </p>
        
                            </div>
                        </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item" href="profile-posts.html">
                        <div class="row align-items-center">
                            <div class="col-auto">
        
                            <!-- Avatar -->
                            <div class="avatar">
                                <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
        
                            </div>
                            <div class="col ms-n2">
        
                            <!-- Title -->
                            <h4 class="text-body text-focus mb-1 name">
                                Dianna Smiley
                            </h4>
        
                            <!-- Status -->
                            <p class="text-body small mb-0">
                                <span class="text-success">●</span> Online
                            </p>
        
                            </div>
                        </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item" href="profile-posts.html">
                        <div class="row align-items-center">
                            <div class="col-auto">
        
                            <!-- Avatar -->
                            <div class="avatar">
                                <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
        
                            </div>
                            <div class="col ms-n2">
        
                            <!-- Title -->
                            <h4 class="text-body text-focus mb-1 name">
                                Ab Hadley
                            </h4>
        
                            <!-- Status -->
                            <p class="text-body small mb-0">
                                <span class="text-danger">●</span> Offline
                            </p>
        
                            </div>
                        </div> <!-- / .row -->
                        </a>
                    </div>
        
                    </div>
                </div> <!-- / .dropdown-menu -->
        
                </div>
            </form>
        
            <!-- User -->
            <div class="navbar-user">
        
                <!-- Dropdown -->
                <div class="dropdown me-4 d-none d-lg-flex">
        
                <!-- Toggle -->
                <a href="#" class="navbar-user-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="icon active">
                    <i class="fe fe-bell"></i>
                    </span>
                </a>
        
                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                    <div class="card-header">
        
                    <!-- Title -->
                    <h5 class="card-header-title">
                        Notifications
                    </h5>
        
                    <!-- Link -->
                    <a href="#!" class="small">
                        View all
                    </a>
        
                    </div> <!-- / .card-header -->
                    <div class="card-body">
        
                    <!-- List group -->
                    <div class="list-group list-group-flush list-group-activity my-n3">
                        <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">
        
                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                                <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
        
                            </div>
                            <div class="col ms-n2">
        
                            <!-- Content -->
                            <div class="small">
                                <strong>Dianna Smiley</strong> shared your post with Ab Hadley, Adolfo Hess, and 3 others.
                            </div>
        
                            <!-- Time -->
                            <small class="text-body-secondary">
                                2m ago
                            </small>
        
                            </div>
                        </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">
        
                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                                <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
        
                            </div>
                            <div class="col ms-n2">
        
                            <!-- Content -->
                            <div class="small">
                                <strong>Ab Hadley</strong> reacted to your post with a 😍
                            </div>
        
                            <!-- Time -->
                            <small class="text-body-secondary">
                                2m ago
                            </small>
        
                            </div>
                        </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">
        
                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                                <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
        
                            </div>
                            <div class="col ms-n2">
        
                            <!-- Content -->
                            <div class="small">
                                <strong>Adolfo Hess</strong> commented <blockquote class="mb-0">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                            </div>
        
                            <!-- Time -->
                            <small class="text-body-secondary">
                                2m ago
                            </small>
        
                            </div>
                        </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">
        
                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                                <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
        
                            </div>
                            <div class="col ms-n2">
        
                            <!-- Content -->
                            <div class="small">
                                <strong>Daniela Dewitt</strong> subscribed to you.
                            </div>
        
                            <!-- Time -->
                            <small class="text-body-secondary">
                                2m ago
                            </small>
        
                            </div>
                        </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">
        
                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                                <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
        
                            </div>
                            <div class="col ms-n2">
        
                            <!-- Content -->
                            <div class="small">
                                <strong>Miyah Myles</strong> shared your post with Ryu Duke, Glen Rouse, and 3 others.
                            </div>
        
                            <!-- Time -->
                            <small class="text-body-secondary">
                                2m ago
                            </small>
        
                            </div>
                        </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">
        
                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                                <img src="assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
        
                            </div>
                            <div class="col ms-n2">
        
                            <!-- Content -->
                            <div class="small">
                                <strong>Ryu Duke</strong> reacted to your post with a 😍
                            </div>
        
                            <!-- Time -->
                            <small class="text-body-secondary">
                                2m ago
                            </small>
        
                            </div>
                        </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">
        
                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                                <img src="assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
        
                            </div>
                            <div class="col ms-n2">
        
                            <!-- Content -->
                            <div class="small">
                                <strong>Glen Rouse</strong> commented <blockquote class="mb-0">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                            </div>
        
                            <!-- Time -->
                            <small class="text-body-secondary">
                                2m ago
                            </small>
        
                            </div>
                        </div> <!-- / .row -->
                        </a>
                        <a class="list-group-item text-reset" href="#!">
                        <div class="row">
                            <div class="col-auto">
        
                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                                <img src="assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
        
                            </div>
                            <div class="col ms-n2">
        
                            <!-- Content -->
                            <div class="small">
                                <strong>Grace Gross</strong> subscribed to you.
                            </div>
        
                            <!-- Time -->
                            <small class="text-body-secondary">
                                2m ago
                            </small>
        
                            </div>
                        </div> <!-- / .row -->
                        </a>
                    </div>
        
                    </div>
                </div> <!-- / .dropdown-menu -->
        
                </div>
        
                <!-- Dropdown -->
                <div class="dropdown">
        
                <!-- Toggle -->
                <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                </a>
        
                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="profile-posts.html" class="dropdown-item">Profile</a>
                    <a href="account-general.html" class="dropdown-item">Settings</a>
                    <hr class="dropdown-divider">
                    <a href="sign-in.html" class="dropdown-item">Logout</a>
                </div>
        
                </div>
        
            </div>
        
            <!-- Collapse -->
            <div class="collapse navbar-collapse me-lg-auto order-lg-first" id="navbar">
        
                <!-- Form -->
                <form class="mt-4 mb-3 d-md-none">
                <input type="search" class="form-control form-control-rounded" placeholder="Search" aria-label="Search">
                </form>
        
                <!-- Navigation -->
                <ul class="navbar-nav me-lg-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="topnavDashboards" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dashboards
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="topnavDashboards">
                    <li>
                        <a class="dropdown-item " href="index.html">
                        Default
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item " href="dashboard-project-management.html">
                        Project Management
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item " href="dashboard-ecommerce.html">
                        E-Commerce
                        </a>
                    </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="topnavPages" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="true">
                    Pages
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="topnavPages">
                    <li class="dropend">
                        <a class="dropdown-item dropdown-toggle active" href="#" id="topnavAccount" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnavAccount">
                        <a class="dropdown-item " href="account-general.html">
                            General
                        </a>
                        <a class="dropdown-item active" href="account-billing.html">
                            Billing
                        </a>
                        <a class="dropdown-item " href="account-members.html">
                            Members
                        </a>
                        <a class="dropdown-item " href="account-security.html">
                            Security
                        </a>
                        <a class="dropdown-item " href="account-notifications.html">
                            Notifications
                        </a>
                        </div>
                    </li>
                    <li class="dropend">
                        <a class="dropdown-item dropdown-toggle " href="#" id="topnavCrm" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        CRM
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnavCrm">
                        <a class="dropdown-item " href="crm-contacts.html">
                            Contacts
                        </a>
                        <a class="dropdown-item " href="crm-companies.html">
                            Companies
                        </a>
                        <a class="dropdown-item " href="crm-deals.html">
                            Deals
                        </a>
                        </div>
                    </li>
                    <li class="dropend">
                        <a class="dropdown-item dropdown-toggle " href="#" id="topnavProfile" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnavProfile">
                        <a class="dropdown-item " href="profile-posts.html">
                            Posts
                        </a>
                        <a class="dropdown-item " href="profile-groups.html">
                            Groups
                        </a>
                        <a class="dropdown-item " href="profile-projects.html">
                            Projects
                        </a>
                        <a class="dropdown-item " href="profile-files.html">
                            Files
                        </a>
                        <a class="dropdown-item " href="profile-subscribers.html">
                            Subscribers
                        </a>
                        </div>
                    </li>
                    <li class="dropend">
                        <a class="dropdown-item dropdown-toggle " href="#" id="topnavProject" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Project
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnavProject">
                        <a class="dropdown-item " href="project-overview.html">
                            Overview
                        </a>
                        <a class="dropdown-item " href="project-files.html">
                            Files
                        </a>
                        <a class="dropdown-item " href="project-reports.html">
                            Reports
                        </a>
                        <a class="dropdown-item " href="project-new.html">
                            New project
                        </a>
                        </div>
                    </li>
                    <li class="dropend">
                        <a class="dropdown-item dropdown-toggle " href="#" id="topnavTeam" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Team
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnavTeam">
                        <a class="dropdown-item " href="team-overview.html">
                            Overview
                        </a>
                        <a class="dropdown-item " href="team-projects.html">
                            Projects
                        </a>
                        <a class="dropdown-item " href="team-members.html">
                            Members
                        </a>
                        <a class="dropdown-item " href="team-new.html">
                            New team
                        </a>
                        </div>
                    </li>
                    <li class="dropend">
                        <a class="dropdown-item dropdown-toggle " href="#" id="topnavFeed" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Feed
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnavFeed">
                        <a class="dropdown-item " href="feed.html">
                            Platform
                        </a>
                        <a class="dropdown-item " href="social-feed.html">
                            Social
                        </a>
                        </div>
                    </li>
                    <li>
                        <a class="dropdown-item " href="wizard.html">
                        Wizard
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item " href="kanban.html">
                        Kanban
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item " href="orders.html">
                        Orders
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item " href="invoice.html">
                        Invoice
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item " href="pricing.html">
                        Pricing
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item " href="widgets.html">
                        Widgets
                        </a>
                    </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="topnavAuth" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                    Auth
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="topnavAuth">
                    <li class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#" id="topnavSignIn" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sign in
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnavSignIn">
                        <a class="dropdown-item" href="sign-in-cover.html">
                            Cover
                        </a>
                        <a class="dropdown-item" href="sign-in-illustration.html">
                            Illustration
                        </a>
                        <a class="dropdown-item" href="sign-in-basics.html">
                            Basic
                        </a>
                        </div>
                    </li>
                    <li class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#" id="topnavSignUp" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sign up
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnavSignUp">
                        <a class="dropdown-item" href="sign-up-cover.html">
                            Cover
                        </a>
                        <a class="dropdown-item" href="sign-up-illustration.html">
                            Illustration
                        </a>
                        <a class="dropdown-item" href="sign-up.html">
                            Basic
                        </a>
                        </div>
                    </li>
                    <li class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#" id="topnavPassword" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Password reset
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnavPassword">
                        <a class="dropdown-item" href="password-reset-cover.html">
                            Cover
                        </a>
                        <a class="dropdown-item" href="password-reset-illustration.html">
                            Illustration
                        </a>
                        <a class="dropdown-item" href="password-reset.html">
                            Basic
                        </a>
                        </div>
                    </li>
                    <li class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#" id="topnavError" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Error
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnavError">
                        <a class="dropdown-item" href="error-illustration.html">
                            Illustration
                        </a>
                        <a class="dropdown-item" href="error.html">
                            Basic
                        </a>
                        </div>
                    </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="topnavDocumentation" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                    Docs
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="topnavDocumentation">
                    <li class="dropend">
                        <a class="dropdown-item dropdown-toggle " href="#" id="topnavBasics" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Basics
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnavBasics">
                        <a class="dropdown-item " href="docs/getting-started.html">
                            Getting Started
                        </a>
                        <a class="dropdown-item " href="docs/design-file.html">
                            Design File
                        </a>
                        </div>
                    </li>
                    <li>
                        <a class="dropdown-item " href="docs/components.html">
                        Components
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item " href="docs/changelog.html">
                        Changelog
                        </a>
                    </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasDemo" aria-controls="offcanvasDemo">
                    Customize
                    </a>
                </li>
                </ul>
        
            </div>
        
            </div>
        </nav>
    </div>