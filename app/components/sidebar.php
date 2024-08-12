    <div data-bs-theme="">
        <nav class="navbar navbar-vertical fixed-start navbar-expand-md" id="sidebar">
            <div class="container-fluid">
                               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <a class="navbar-brand" href="dashboard">
                    <img src="assets/img/d-logo.png" class="navbar-brand-img mx-auto" alt="...">
                </a>
        
                <div class="navbar-user d-md-none">
                    <div class="dropdown">
                        <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-sm avatar-online">
                                <img src="<?php echo $picture; ?>" class="avatar-img rounded-circle" alt="...">
                            </div>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarIcon">
                            <a href="profile" class="dropdown-item">Profile</a>
                            <a href="settings" class="dropdown-item">Settings</a>
                            <hr class="dropdown-divider">
                            <a href="logout" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
                        
                <div class="collapse navbar-collapse" id="sidebarCollapse">

                    <ul class="navbar-nav mt-4">
                        <li class="nav-item">
                            <a class="nav-link <?php if($page=='Dashboard'){echo 'active';}?>" href="dashboard"><i class="fe fe-grid"></i> Overview</a>
                        </li>
                        <li class="nav-item mt-3">
                            <a class="nav-link <?php if($page=='Properties'){echo 'active';}?>" href="properties"><i class="fe fe-map"></i> Properties</a>
                        </li>
                        <li class="nav-item mt-3">
                            <a class="nav-link <?php if($page=='Portfolio'){echo 'active';}?>" href="portfolio"><i class="fe fe-briefcase"></i> Portfolio</a>
                        </li>
                        <li class="nav-item mt-3">
                            <a class="nav-link <?php if($page=='Documents'){echo 'active';}?>" href="documents"><i class="fe fe-file-text"></i> Documents</a>
                        </li>
                        <li class="nav-item mt-3">
                            <a class="nav-link <?php if($page=='Transactions'){echo 'active';}?>" href="transactions"><i class="fe fe-dollar-sign"></i> Transactions</a>
                        </li>
                    </ul>

                    <hr class="navbar-divider my-3">

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link <?php if($page=='Profile'){echo 'active';}?>" href="profile"><i class="fe fe-user"></i> Account</a>
                        </li>
                        <li class="nav-item mt-3">
                            <a class="nav-link <?php if($page=='Settings'){echo 'active';}?>" href="settings"><i class="fe fe-settings"></i> Settings</a>
                        </li>
                    </ul>
      
                    
            
                    <!-- System View -->
                    <div class="mt-auto"></div>

                    <div id="popoverDemoContainer" data-bs-theme="dark"></div>
            
                    <div class="navbar-user d-none d-md-flex" id="sidebarUser">
            
                        <a class="navbar-user-link" href="logout">
                            <span class="icon">
                                <i class="fe fe-power"></i>
                            </span>
                        </a>
            
                        <div class="dropup">
                            <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-sm avatar-online">
                                    <img src="<?php echo $picture; ?>" class="avatar-img rounded-circle" alt="...">
                                </div>
                            </a>
            
                            <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                                <a href="profile" class="dropdown-item">Profile</a>
                                <a href="settings" class="dropdown-item">Settings</a>
                                <hr class="dropdown-divider">
                                <a href="logout" class="dropdown-item">Logout</a>
                            </div>
                        </div>

                        <a class="navbar-user-link" href="mailto:support@dillionproperty.ng">
                            <span class="icon">
                                <i class="fe fe-message-square"></i>
                            </span>
                        </a>
            
                    </div>
                </div>
            </div>
        </nav>
    </div>