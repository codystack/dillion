<?php
$page = "Dashboard";
include "./components/header.php";
include "./components/sidebar.php";
?>

    <div class="main-content">
        <div class="header">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-end">
                        <div class="col">
                            <h1 class="header-title">Welcome, <?php echo $first_name; ?> 👋🏽 </h1>
                        </div>
                        <div class="col-auto navbar-user">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row">
            <div class="col-12 col-lg-6 col-xl">

                <!-- Value  -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center gx-0">
                        <div class="col">

                            <!-- Title -->
                            <h6 class="text-uppercase text-body-secondary mb-2">
                            Value
                            </h6>

                            <!-- Heading -->
                            <span class="h2 mb-0">
                            $24,500
                            </span>

                            <!-- Badge -->
                            <span class="badge text-bg-success-subtle mt-n1">
                            +3.5%
                            </span>
                        </div>
                        <div class="col-auto">

                            <!-- Icon -->
                            <span class="h2 fe fe-dollar-sign text-body-secondary mb-0"></span>

                        </div>
                        </div> <!-- / .row -->
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 col-xl">

                <!-- Hours -->
                <div class="card">
                <div class="card-body">
                    <div class="row align-items-center gx-0">
                    <div class="col">

                        <!-- Title -->
                        <h6 class="text-uppercase text-body-secondary mb-2">
                        Total hours
                        </h6>

                        <!-- Heading -->
                        <span class="h2 mb-0">
                        763.5
                        </span>

                    </div>
                    <div class="col-auto">

                        <!-- Icon -->
                        <span class="h2 fe fe-briefcase text-body-secondary mb-0"></span>

                    </div>
                    </div> <!-- / .row -->
                </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 col-xl">

                <!-- Exit -->
                <div class="card">
                <div class="card-body">
                    <div class="row align-items-center gx-0">
                    <div class="col">

                        <!-- Title -->
                        <h6 class="text-uppercase text-body-secondary mb-2">
                        Exit %
                        </h6>

                        <!-- Heading -->
                        <span class="h2 mb-0">
                        35.5%
                        </span>

                    </div>
                    <div class="col-auto">

                        <!-- Chart -->
                        <div class="chart chart-sparkline">
                        <canvas class="chart-canvas" id="sparklineChart"></canvas>
                        </div>

                    </div>
                    </div> <!-- / .row -->
                </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 col-xl">

                <!-- Time -->
                <div class="card">
                <div class="card-body">
                    <div class="row align-items-center gx-0">
                    <div class="col">

                        <!-- Title -->
                        <h6 class="text-uppercase text-body-secondary mb-2">
                        Avg. Time
                        </h6>

                        <!-- Heading -->
                        <span class="h2 mb-0">
                        2:37
                        </span>

                    </div>
                    <div class="col-auto">

                        <!-- Icon -->
                        <span class="h2 fe fe-clock text-body-secondary mb-0"></span>

                    </div>
                    </div> <!-- / .row -->
                </div>
                </div>

            </div>
            </div>

            <div class="row">
            <div class="col-12 col-xl-8">

                <div class="card">
                <div class="card-header">

                    <!-- Title -->
                    <h4 class="card-header-title">
                    Conversions
                    </h4>

                    <!-- Caption -->
                    <span class="text-body-secondary me-3">
                    Last year comparision:
                    </span>

                    <!-- Switch -->
                    <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="cardToggle" data-toggle="chart" data-target="#conversionsChart" data-trigger="change" data-action="add" data-dataset="1">
                    <label class="form-check-label" for="cardToggle"></label>
                    </div>

                </div>
                <div class="card-body">

                    <!-- Chart -->
                    <div class="chart">
                    <canvas id="conversionsChart" class="chart-canvas"></canvas>
                    </div>

                </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">

                <!-- Traffic -->
                <div class="card">
                <div class="card-header">

                    <!-- Title -->
                    <h4 class="card-header-title">
                    Traffic Channels
                    </h4>

                    <!-- Tabs -->
                    <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                    <li class="nav-item" data-toggle="chart" data-target="#trafficChart" data-trigger="click" data-action="toggle" data-dataset="0">
                        <a href="#" class="nav-link active" data-bs-toggle="tab">
                        All
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="chart" data-target="#trafficChart" data-trigger="click" data-action="toggle" data-dataset="1">
                        <a href="#" class="nav-link" data-bs-toggle="tab">
                        Direct
                        </a>
                    </li>
                    </ul>

                </div>
                <div class="card-body">

                    <!-- Chart -->
                    <div class="chart chart-appended">
                    <canvas id="trafficChart" class="chart-canvas" data-toggle="legend" data-target="#trafficChartLegend"></canvas>
                    </div>

                    <!-- Legend -->
                    <div id="trafficChartLegend" class="chart-legend"></div>

                </div>
                </div>
            </div>
            </div>

            <div class="row">
                <div class="col-12 col-xl-4">

                    <!-- Projects -->
                    <div class="card card-fill">
                    <div class="card-header">

                        <!-- Title -->
                        <h4 class="card-header-title">
                        Projects
                        </h4>

                        <!-- Link -->
                        <a href="project-overview.html" class="small">View all</a>

                    </div>
                    <div class="card-body">

                        <!-- List group -->
                        <div class="list-group list-group-flush my-n3">
                        <div class="list-group-item">
                            <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <a href="project-overview.html" class="avatar avatar-4by3">
                                <img src="assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                                </a>

                            </div>
                            <div class="col ms-n2">

                                <!-- Title -->
                                <h4 class="mb-1">
                                <a href="project-overview.html">Homepage Redesign</a>
                                </h4>

                                <!-- Time -->
                                <p class="card-text small text-body-secondary">
                                <time datetime="2018-05-24">Updated 4hr ago</time>
                                </p>

                            </div>
                            <div class="col-auto">

                                <!-- Dropdown -->
                                <div class="dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#!" class="dropdown-item">
                                    Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                    Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                    Something else here
                                    </a>
                                </div>
                                </div>

                            </div>
                            </div> <!-- / .row -->
                        </div>
                        <div class="list-group-item">
                            <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <a href="project-overview.html" class="avatar avatar-4by3">
                                <img src="assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                                </a>

                            </div>
                            <div class="col ms-n2">

                                <!-- Title -->
                                <h4 class="mb-1">
                                <a href="project-overview.html">Travels & Time</a>
                                </h4>

                                <!-- Time -->
                                <p class="card-text small text-body-secondary">
                                <time datetime="2018-05-24">Updated 4hr ago</time>
                                </p>

                            </div>
                            <div class="col-auto">

                                <!-- Dropdown -->
                                <div class="dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#!" class="dropdown-item">
                                    Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                    Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                    Something else here
                                    </a>
                                </div>
                                </div>

                            </div>
                            </div> <!-- / .row -->
                        </div>
                        <div class="list-group-item">
                            <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <a href="project-overview.html" class="avatar avatar-4by3">
                                <img src="assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                                </a>

                            </div>
                            <div class="col ms-n2">

                                <!-- Title -->
                                <h4 class="mb-1">
                                <a href="project-overview.html">Safari Exploration</a>
                                </h4>

                                <!-- Time -->
                                <p class="card-text small text-body-secondary">
                                <time datetime="2018-05-24">Updated 4hr ago</time>
                                </p>

                            </div>
                            <div class="col-auto">

                                <!-- Dropdown -->
                                <div class="dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#!" class="dropdown-item">
                                    Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                    Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                    Something else here
                                    </a>
                                </div>
                                </div>

                            </div>
                            </div> <!-- / .row -->
                        </div>
                        <div class="list-group-item">
                            <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <a href="project-overview.html" class="avatar avatar-4by3">
                                <img src="assets/img/avatars/projects/project-5.jpg" alt="..." class="avatar-img rounded">
                                </a>

                            </div>
                            <div class="col ms-n2">

                                <!-- Title -->
                                <h4 class="mb-1">
                                <a href="project-overview.html">Personal Site</a>
                                </h4>

                                <!-- Time -->
                                <p class="card-text small text-body-secondary">
                                <time datetime="2018-05-24">Updated 4hr ago</time>
                                </p>

                            </div>
                            <div class="col-auto">

                                <!-- Dropdown -->
                                <div class="dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#!" class="dropdown-item">
                                    Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                    Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                    Something else here
                                    </a>
                                </div>
                                </div>

                            </div>
                            </div> <!-- / .row -->
                        </div>
                        </div>

                    </div> <!-- / .card-body -->
                    </div> <!-- / .card -->
                </div>

                <div class="col-12 col-xl-8">

                    <!-- Sales -->
                    <div class="card">
                    <div class="card-header">

                        <!-- Title -->
                        <h4 class="card-header-title">
                        Sales
                        </h4>

                        <!-- Nav -->
                        <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                        <li class="nav-item" data-toggle="chart" data-target="#salesChart" data-trigger="click" data-action="toggle" data-dataset="0">
                            <a class="nav-link active" href="#" data-bs-toggle="tab">
                            All
                            </a>
                        </li>
                        <li class="nav-item" data-toggle="chart" data-target="#salesChart" data-trigger="click" data-action="toggle" data-dataset="1">
                            <a class="nav-link" href="#" data-bs-toggle="tab">
                            Direct
                            </a>
                        </li>
                        <li class="nav-item" data-toggle="chart" data-target="#salesChart" data-trigger="click" data-action="toggle" data-dataset="2">
                            <a class="nav-link" href="#" data-bs-toggle="tab">
                            Organic
                            </a>
                        </li>
                        </ul>

                    </div>
                    <div class="card-body">

                        <!-- Chart -->
                        <div class="chart">
                        <canvas id="salesChart" class="chart-canvas"></canvas>
                        </div>

                    </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12">

                    <!-- Goals -->
                    <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                        <div class="col">

                            <!-- Title -->
                            <h4 class="card-header-title">
                            Goals
                            </h4>

                        </div>
                        <div class="col-auto">

                            <!-- Button -->
                            <a href="#!" class="btn btn-sm btn-white">
                            Export
                            </a>

                        </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="table-responsive mb-0" data-list="{&quot;valueNames&quot;: [&quot;goal-project&quot;, &quot;goal-status&quot;, &quot;goal-progress&quot;, &quot;goal-date&quot;]}">
                        <table class="table table-sm table-nowrap card-table">
                        <thead>
                            <tr>
                            <th>
                                <a href="#" class="text-body-secondary list-sort" data-sort="goal-project">
                                Goal
                                </a>
                            </th>
                            <th>
                                <a href="#" class="text-body-secondary list-sort" data-sort="goal-status">
                                Status
                                </a>
                            </th>
                            <th>
                                <a href="#" class="text-body-secondary list-sort" data-sort="goal-progress">
                                Progress
                                </a>
                            </th>
                            <th>
                                <a href="#" class="text-body-secondary list-sort" data-sort="goal-date">
                                Due date
                                </a>
                            </th>
                            <th class="text-end">
                                Team
                            </th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                            <td class="goal-project">
                                Update the API
                            </td>
                            <td class="goal-status">
                                <span class="text-warning">●</span> In progress
                            </td>
                            <td class="goal-progress">
                                55%
                            </td>
                            <td class="goal-date">
                                <time datetime="2018-10-24">07/24/18</time>
                            </td>
                            <td class="text-end">
                                <div class="avatar-group">
                                <a href="profile-posts.html" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Dianna Smiley">
                                    <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                </a>
                                <a href="profile-posts.html" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Ab Hadley">
                                    <img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                </a>
                                <a href="profile-posts.html" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Adolfo Hess">
                                    <img src="assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                </a>
                                <a href="profile-posts.html" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Daniela Dewitt">
                                    <img src="assets/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                                </a>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#!" class="dropdown-item">
                                    Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                    Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                    Something else here
                                    </a>
                                </div>
                                </div>
                            </td>
                            </tr>
                            <tr>
                            <td class="goal-project">
                                Release v1.2-Beta
                            </td>
                            <td class="goal-status">
                                <span class="text-warning">●</span> In progress
                            </td>
                            <td class="goal-progress">
                                25%
                            </td>
                            <td class="goal-date">
                                <time datetime="2018-10-24">08/26/18</time>
                            </td>
                            <td class="text-end">
                                <div class="avatar-group justify-content-end">
                                <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Dianna Smiley">
                                    <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                </a>
                                <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Ab Hadley">
                                    <img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                </a>
                                <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Adolfo Hess">
                                    <img src="assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                </a>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#!" class="dropdown-item">
                                    Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                    Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                    Something else here
                                    </a>
                                </div>
                                </div>
                            </td>
                            </tr>
                            <tr>
                            <td class="goal-project">
                                GDPR Compliance
                            </td>
                            <td class="goal-status">
                                <span class="text-success">●</span> Completed
                            </td>
                            <td class="goal-progress">
                                100%
                            </td>
                            <td class="goal-date">
                                <time datetime="2018-10-24">06/19/18</time>
                            </td>
                            <td class="text-end">
                                <div class="avatar-group justify-content-end">
                                <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Dianna Smiley">
                                    <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                </a>
                                <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Ab Hadley">
                                    <img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                </a>
                                <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Adolfo Hess">
                                    <img src="assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                </a>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#!" class="dropdown-item">
                                    Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                    Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                    Something else here
                                    </a>
                                </div>
                                </div>
                            </td>
                            </tr>
                            <tr>
                            <td class="goal-project">
                                v1.2 Documentation
                            </td>
                            <td class="goal-status">
                                <span class="text-danger">●</span> Cancelled
                            </td>
                            <td class="goal-progress">
                                0%
                            </td>
                            <td class="goal-date">
                                <time datetime="2018-10-24">06/25/18</time>
                            </td>
                            <td class="text-end">
                                <div class="avatar-group justify-content-end">
                                <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Dianna Smiley">
                                    <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                </a>
                                <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Ab Hadley">
                                    <img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                </a>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="fe fe-more-vertical"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#!" class="dropdown-item">
                                    Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                    Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                    Something else here
                                    </a>
                                </div>
                                </div>
                            </td>
                            </tr>
                            <tr>
                            <td class="goal-project">
                                Plan design offsite
                            </td>
                            <td class="goal-status">
                                <span class="text-success">●</span> Completed
                            </td>
                            <td class="goal-progress">
                                100%
                            </td>
                            <td class="goal-date">
                                <time datetime="2018-10-24">06/30/18</time>
                            </td>
                            <td class="text-end">
                                <div class="avatar-group justify-content-end">
                                <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Dianna Smiley">
                                    <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                </a>
                                <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Ab Hadley">
                                    <img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                </a>
                                <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Adolfo Hess">
                                    <img src="assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                </a>
                                <a href="#!" class="avatar avatar-xs" data-bs-toggle="tooltip" title="Daniela Dewitt">
                                    <img src="assets/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                                </a>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#!" class="dropdown-item">
                                    Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                    Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                    Something else here
                                    </a>
                                </div>
                                </div>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



<?php include "./components/footer.php"; ?>