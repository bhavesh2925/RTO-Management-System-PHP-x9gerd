            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>


<!--- Products --->
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#product" aria-expanded="false" aria-controls="product">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Learing Licence Request
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="product" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="new-ll-request.php">New Request</a>
                                    <a class="nav-link" href="accepted-ll-request.php">Accepted Request</a>
                                    <a class="nav-link" href="rejected-ll-request.php">Rejected Request</a>
                                    <a class="nav-link" href="all-ll-request.php">All Request</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#product34" aria-expanded="false" aria-controls="product34">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Driving Licence Request
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="product34" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="new-dl-request.php">New Request</a>
                                    <a class="nav-link" href="accepted-dl-request.php">Accepted Request</a>
                                    <a class="nav-link" href="rejected-dl-request.php">Rejected Request</a>
                                    <a class="nav-link" href="all-dl-request.php">All Request</a>
                                </nav>
                            </div>



                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Report
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="bwdates-report-ll.php">B/w Dates of LL</a>
                                    <a class="nav-link" href="bwdates-report-dl.php">B/w Dates of DL</a>
                                </nav>
                            </div>
                           
                             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts1">
                                <div class="sb-nav-link-icon"><i class="fas fa-search"></i></div>
                                Search Licence
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="search-ll.php">Search LL</a>
                                    <a class="nav-link" href="search-dl.php">Search DL</a>
                                </nav>
                            </div>
                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION['rtoname'];?>
                    </div>
                </nav>
            </div>