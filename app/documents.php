<?php
$page = "Documents";
include "./components/header.php";
include "./components/sidebar.php";
?>

    <div class="main-content">
        <div class="header">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="avatar avatar-lg avatar-4by3">
                                <img src="assets/img/documents.jpg" alt="..." class="avatar-img rounded">
                            </div>
                        </div>
                        <div class="col ms-n3 ms-md-n2">
                            <h6 class="header-pretitle">Property</h6>
                            <h1 class="header-title">Documents</h1>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col">
                            <ul class="nav nav-tabs nav-overflow header-tabs">
                                <li class="nav-item">
                                    <a href="documents" class="nav-link active">Files</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card" data-list='{"valueNames": ["name"]}'>
                        <div class="card-header">
                            <form>
                                <div class="input-group input-group-flush input-group-merge input-group-reverse">
                                    <input class="form-control list-search" type="search" placeholder="Search Documents">
                                    <div class="input-group-text">
                                        <span class="fe fe-search"></span>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="card-body">
                            <ul class="list-group list-group-lg list-group-flush list my-n4">
                                <?php
                                $select_query = "SELECT * FROM documents WHERE userID = '".$_SESSION['user_id']."'";
                                $result = mysqli_query($conn, $select_query);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $document_id = $row['document_id'];
                                        $userID = $row['userID'];
                                        $document_title = $row['document_title'];
                                        $document = $row['document'];
                                        $created_at = $row['created_at'];
                                        $date = strtotime($created_at);
                                ?>
                                <li class="list-group-item" style="display: <?php if (!$document){echo 'none';}else{echo 'unset';}; ?>">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar avatar-lg">
                                                <span class="avatar-title rounded text-danger" style="background-color: #fad7dd;">
                                                    <span class="fe fe-file-text"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col ms-n2">
                                            <h4 class="mb-1 name">
                                                <a href="https://admin.dillionproperty.ng/<?php echo $document; ?>" target="_blank"><?php echo $document_title; ?></a>
                                            </h4>

                                            <p class="card-text small text-body-secondary">
                                                Uploaded on <time datetime="2018-01-03"><?php echo date('F j, Y', $date); ?></time>
                                            </p>
                                        </div>
                                        <div class="col-auto">
                                            <!-- <button onclick="downloadPdf()" class="btn btn-sm btn-white d-none d-md-inline-block"><i class="fe fe-download"></i> Download</button> -->
                                            <a href="https://admin.dillionproperty.ng/<?php echo $document; ?>" target="_blank" class="btn btn-sm btn-white d-none d-md-inline-block"><i class="fe fe-download"></i> Download</a>
                                            <a href="https://admin.dillionproperty.ng/<?php echo $document; ?>" target="_blank" class="btn btn-sm btn-dark d-none d-md-inline-block"><i class="fe fe-eye"></i> View</a>
                                        </div>
                                        <div class="col-auto d-md-none">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="https://admin.dillionproperty.ng/<?php echo $document; ?>" target="_blank" class="dropdown-item">View</a>
                                                    <a href="https://admin.dillionproperty.ng/<?php echo $document; ?>" target="_blank" class="dropdown-item">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row" style="display: <?php if ($document){echo 'none';}else{echo 'unset';}; ?>">
                <div class="col-12">
                    <div class="card card-inactive">
                        <div class="card-body text-center">
                            <img src="assets/img/no_document.png" alt="..." class="img-fluid" style="max-width: 132px;">
                            <h1 class="mt-5">No Documents Yet.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <script>
            function downloadPdf() {
                const xhr = new XMLHttpRequest();
                xhr.open('GET', './auth/download?id=<?php echo $document_id; ?>', true); // Replace 1 with the ID of the PDF file
                xhr.responseType = 'blob';

                xhr.onload = function() {
                    if (xhr.status === 200) {
                        const pdfFile = xhr.response;
                        const filename = 'Dillion-Document-<?php echo $document_title; ?>.pdf';
                        const url = URL.createObjectURL(pdfFile);
                        const a = document.createElement('a');
                        a.href = url;
                        a.download = filename;
                        a.click();
                    }
                };

                xhr.send();
            }
        </script>

<?php include "./components/footer.php"; ?>