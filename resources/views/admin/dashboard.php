<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">
	<!-- LOGO -->
	<a href="index.html" class="logo text-center logo-light">
		<span class="logo-lg">
			<img src="public/img/logo.png" alt="" height="16" />
		</span>
		<span class="logo-sm">
			<img src="public/img/logo_sm.png" alt="" height="16" />
		</span>
	</a>

	<!-- LOGO -->
	<a href="index.html" class="logo text-center logo-dark">
		<span class="logo-lg">
			<img src="public/img/logo-dark.png" alt="" height="16" />
		</span>
		<span class="logo-sm">
			<img src="public/img/logo_sm_dark.png" alt="" height="16" />
		</span>
	</a>

	<div class="h-100" id="leftside-menu-container" data-simplebar="">
		<!--- Sidemenu -->
		<ul class="side-nav">
			<li class="side-nav-title side-nav-item">Navigation</li>

			<li class="side-nav-item menuitem-active">
				<a href="index.php?action=show_dashboard" class="side-nav-link active">
					<i class="uil-home-alt"></i>
					<!-- <span class="badge bg-success float-end">4</span> -->
					<span> Trang tổng quan </span>
				</a>
			</li>

			<li class="side-nav-title side-nav-item">Manages</li>

			<li class="side-nav-item">
				<a href="index.php?action=show_admins_panel" class="side-nav-link">
					<i class="uil-user-circle"></i>
					<span> Quản lý Admin </span>
				</a>
			</li>

			<li class="side-nav-item">
				<a href="index.php?action=show_teachers_panel" class="side-nav-link">
					<i class="uil-user-circle"></i>
					<span> Quản lý Giáo viên </span>
				</a>
			</li>

			<li class="side-nav-item">
				<a href="index.php?action=show_grades_panel" class="side-nav-link">
					<i class="uil-servers"></i>
					<span> Quản lý Khối </span>
				</a>
			</li>

			<li class="side-nav-item">
				<a href="index.php?action=show_classes_panel" class="side-nav-link">
					<i class="uil-diary"></i>
					<span> Quản lý Lớp </span>
				</a>
			</li>

			<li class="side-nav-item">
				<a href="index.php?action=show_students_panel" class="side-nav-link">
					<i class="uil-user-circle"></i>
					<span> Quản lý Học Sinh </span>
				</a>
			</li>

			<li class="side-nav-item">
				<a href="index.php?action=show_subjects_panel" class="side-nav-link">
					<i class="uil-subject"></i>
					<span> Quản lý Môn </span>
				</a>
			</li>

			<li class="side-nav-item">
				<a href="index.php?action=show_questions_panel" class="side-nav-link">
					<i class="uil-question-circle"></i>
					<span> Quản lý Câu Hỏi </span>
				</a>
			</li>

			<li class="side-nav-item">
				<a href="index.php?action=show_tests_panel" class="side-nav-link">
					<i class="uil-clipboard-alt"></i>
					<span> Quản lý Đề Thi </span>
				</a>
			</li>

			<li class="side-nav-title side-nav-item">Contact</li>

			<li class="side-nav-item">
				<a href="index.php?action=show_" class="side-nav-link">
					<i class="uil-bell"></i>
					<span> Thông Báo </span>
				</a>
			</li>

			<li class="side-nav-item">
				<a href="index.php?action=show_" class="side-nav-link">
					<i class="uil-user-square"></i>
					<span> Liên hệ </span>
				</a>
			</li>
		</ul>

		<!-- Help Box -->
		<div class="help-box text-white text-center">
			<a href="javascript: void(0);" class="float-end close-btn text-white">
				<i class="mdi mdi-close"></i>
			</a>
			<img src="public/img/help-icon.svg" height="90" alt="Helper Icon Image" />
			<h5 class="mt-3">Unlimited Access</h5>
			<p class="mb-3">
				Upgrade to plan to get access to unlimited reports
			</p>
			<a href="javascript: void(0);" class="btn btn-outline-light btn-sm">Upgrade</a>
		</div>
		<!-- end Help Box -->
		<!-- End Sidebar -->

		<div class="clearfix"></div>
	</div>
	<!-- Sidebar -left -->
</div>
<!-- Left Sidebar End -->

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
	<div class="content">
		<!-- Start Content-->
		<div class="container-fluid">
			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box">
						<div class="page-title-right">
							<form class="d-flex">
								<div class="input-group">
									<input type="text" class="form-control form-control-light" id="dash-daterange" />
									<span class="input-group-text bg-primary border-primary text-white">
										<i class="mdi mdi-calendar-range font-13"></i>
									</span>
								</div>
								<a href="javascript: void(0);" class="btn btn-primary ms-2">
									<i class="mdi mdi-autorenew"></i>
								</a>
							</form>
						</div>
						<h4 class="page-title">Analytics</h4>
					</div>
				</div>
			</div>
			<!-- end page title -->

			<div class="row">
				<div class="col-xl-3 col-lg-4">
					<div class="card tilebox-one">
						<div class="card-body">
							<i class="uil uil-users-alt float-end"></i>
							<h6 class="text-uppercase mt-0">
								Active Users
							</h6>
							<h2 class="my-2" id="active-users-count">
								121
							</h2>
							<p class="mb-0 text-muted">
								<span class="text-success me-1"><span class="mdi mdi-arrow-up-bold"></span>
									5.27%</span>
								<span class="text-nowrap">Since last month</span>
							</p>
						</div>
						<!-- end card-body-->
					</div>
					<!--end card-->

					<div class="card tilebox-one">
						<div class="card-body">
							<i class="uil uil-window-restore float-end"></i>
							<h6 class="text-uppercase mt-0">
								Views per minute
							</h6>
							<h2 class="my-2" id="active-views-count">
								560
							</h2>
							<p class="mb-0 text-muted">
								<span class="text-danger me-1"><span class="mdi mdi-arrow-down-bold"></span>
									1.08%</span>
								<span class="text-nowrap">Since previous week</span>
							</p>
						</div>
						<!-- end card-body-->
					</div>
					<!--end card-->

					<div class="card cta-box overflow-hidden">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h3 class="m-0 fw-normal cta-box-title">
										Enhance your
										<b>Campaign</b> for better
										outreach
										<i class="mdi mdi-arrow-right"></i>
									</h3>
								</div>
								<img class="ms-3" src="public/img/email-campaign.svg" width="92" alt="Generic placeholder image" />
							</div>
						</div>
						<!-- end card-body -->
					</div>
				</div>
				<!-- end col -->

				<div class="col-xl-9 col-lg-8">
					<div class="card card-h-100">
						<div class="card-body">
							<div class="alert alert-warning alert-dismissible fade show mb-3" role="alert">
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								Property HY1xx is not receiving
								hits. Either your site is not
								receiving any sessions or it is not
								tagged correctly.
							</div>
							<ul class="nav float-end d-none d-lg-flex">
								<li class="nav-item">
									<a class="nav-link text-muted" href="#">Today</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-muted" href="#">7d</a>
								</li>
								<li class="nav-item">
									<a class="nav-link active" href="#">15d</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-muted" href="#">1m</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-muted" href="#">1y</a>
								</li>
							</ul>
							<h4 class="header-title mb-3">
								Sessions Overview
							</h4>

							<div dir="ltr">
								<div id="sessions-overview" class="apex-charts mt-3" data-colors="#0acf97"></div>
							</div>
						</div>
						<!-- end card-body-->
					</div>
					<!-- end card-->
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="dropdown float-end">
								<a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="mdi mdi-dots-vertical"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<!-- item-->
									<a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
									<!-- item-->
									<a href="javascript:void(0);" class="dropdown-item">Export Report</a>
								</div>
							</div>
							<h4 class="header-title">
								Sessions by country
							</h4>

							<div class="row">
								<div class="col-lg-8">
									<div id="world-map-markers" class="mt-3 mb-3" style="height: 300px"></div>
								</div>
								<div class="col-lg-4" dir="ltr">
									<div id="country-chart" class="apex-charts" data-colors="#727cf5"></div>
								</div>
							</div>
						</div>
						<!-- end card-body-->
					</div>
					<!-- end card-->
				</div>
				<!-- end col-->
			</div>
			<!-- end row -->

			<div class="row">
				<div class="col-xl-4 col-lg-12">
					<div class="card">
						<div class="card-body">
							<div class="dropdown float-end">
								<a href="#" class="dropdown-toggle arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="mdi mdi-dots-vertical"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
									<a href="javascript:void(0);" class="dropdown-item">Export Report</a>
								</div>
							</div>
							<h4 class="header-title">
								Views Per Minute
							</h4>

							<div id="views-min" class="apex-charts mt-2" data-colors="#0acf97"></div>

							<div class="table-responsive mt-3">
								<table class="table table-sm mb-0 font-13">
									<thead>
										<tr>
											<th>Page</th>
											<th>Views</th>
											<th>Bounce Rate</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<a href="javascript:void(0);" class="text-muted">/hyper/dashboard-analytics</a>
											</td>
											<td>25</td>
											<td>87.5%</td>
										</tr>
										<tr>
											<td>
												<a href="javascript:void(0);" class="text-muted">/hyper/dashboard-crm</a>
											</td>
											<td>15</td>
											<td>21.48%</td>
										</tr>
										<tr>
											<td>
												<a href="javascript:void(0);" class="text-muted">/ubold/dashboard</a>
											</td>
											<td>10</td>
											<td>63.59%</td>
										</tr>
										<tr>
											<td>
												<a href="javascript:void(0);" class="text-muted">/minton/home</a>
											</td>
											<td>7</td>
											<td>56.12%</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- end card-body-->
					</div>
					<!-- end card-->
				</div>
				<!-- end col-->

				<div class="col-xl-4 col-lg-6">
					<div class="card">
						<div class="card-body">
							<div class="dropdown float-end">
								<a href="#" class="dropdown-toggle arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="mdi mdi-dots-vertical"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
									<a href="javascript:void(0);" class="dropdown-item">Export Report</a>
								</div>
							</div>
							<h4 class="header-title">
								Sessions by Browser
							</h4>

							<div id="sessions-browser" class="apex-charts mt-3" data-colors="#727cf5"></div>
						</div>
						<!-- end card-body-->
					</div>
					<!-- end card-->
				</div>
				<!-- end col-->

				<div class="col-xl-4 col-lg-6">
					<div class="card">
						<div class="card-body">
							<div class="dropdown float-end">
								<a href="#" class="dropdown-toggle arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="mdi mdi-dots-vertical"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
									<a href="javascript:void(0);" class="dropdown-item">Export Report</a>
								</div>
							</div>
							<h4 class="header-title">
								Sessions by Operating System
							</h4>

							<div id="sessions-os" class="apex-charts mt-3" data-colors="#727cf5,#0acf97,#fa5c7c,#ffbc00"></div>

							<div class="row text-center mt-2">
								<div class="col-6">
									<h4 class="fw-normal">
										<span>6,510</span>
									</h4>
									<p class="text-muted mb-0">
										Online System
									</p>
								</div>
								<div class="col-6">
									<h4 class="fw-normal">
										<span>2,031</span>
									</h4>
									<p class="text-muted mb-0">
										Offline System
									</p>
								</div>
							</div>
						</div>
						<!-- end card-body-->
					</div>
					<!-- end card-->
				</div>
				<!-- end col-->
			</div>
			<!-- end row -->

			<div class="row">
				<div class="col-xl-4 col-lg-6">
					<div class="card">
						<div class="card-body">
							<a href="" class="p-0 float-end">Export
								<i class="mdi mdi-download ms-1"></i></a>
							<h4 class="header-title mt-1 mb-3">
								Channels
							</h4>

							<div class="table-responsive">
								<table class="table table-sm table-centered mb-0 font-14">
									<thead class="table-light">
										<tr>
											<th>Channel</th>
											<th>Visits</th>
											<th style="width: 40%"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Direct</td>
											<td>2,050</td>
											<td>
												<div class="progress" style="
                                                                    height: 3px;
                                                                ">
													<div class="progress-bar" role="progressbar" style="
                                                                        width: 65%;
                                                                        height: 20px;
                                                                    " aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</td>
										</tr>
										<tr>
											<td>Organic Search</td>
											<td>1,405</td>
											<td>
												<div class="progress" style="
                                                                    height: 3px;
                                                                ">
													<div class="progress-bar bg-info" role="progressbar" style="
                                                                        width: 45%;
                                                                        height: 20px;
                                                                    " aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</td>
										</tr>
										<tr>
											<td>Refferal</td>
											<td>750</td>
											<td>
												<div class="progress" style="
                                                                    height: 3px;
                                                                ">
													<div class="progress-bar bg-warning" role="progressbar" style="
                                                                        width: 30%;
                                                                        height: 20px;
                                                                    " aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</td>
										</tr>
										<tr>
											<td>Social</td>
											<td>540</td>
											<td>
												<div class="progress" style="
                                                                    height: 3px;
                                                                ">
													<div class="progress-bar bg-danger" role="progressbar" style="
                                                                        width: 25%;
                                                                        height: 20px;
                                                                    " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- end table-responsive-->
						</div>
						<!-- end card-body-->
					</div>
					<!-- end card-->
				</div>
				<!-- end col-->

				<div class="col-xl-4 col-lg-6">
					<div class="card">
						<div class="card-body">
							<a href="" class="p-0 float-end">Export
								<i class="mdi mdi-download ms-1"></i></a>
							<h4 class="header-title mt-1 mb-3">
								Social Media Traffic
							</h4>

							<div class="table-responsive">
								<table class="table table-sm table-centered mb-0 font-14">
									<thead class="table-light">
										<tr>
											<th>Network</th>
											<th>Visits</th>
											<th style="width: 40%"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Facebook</td>
											<td>2,250</td>
											<td>
												<div class="progress" style="
                                                                    height: 3px;
                                                                ">
													<div class="progress-bar" role="progressbar" style="
                                                                        width: 65%;
                                                                        height: 20px;
                                                                    " aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</td>
										</tr>
										<tr>
											<td>Instagram</td>
											<td>1,501</td>
											<td>
												<div class="progress" style="
                                                                    height: 3px;
                                                                ">
													<div class="progress-bar" role="progressbar" style="
                                                                        width: 45%;
                                                                        height: 20px;
                                                                    " aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</td>
										</tr>
										<tr>
											<td>Twitter</td>
											<td>750</td>
											<td>
												<div class="progress" style="
                                                                    height: 3px;
                                                                ">
													<div class="progress-bar" role="progressbar" style="
                                                                        width: 30%;
                                                                        height: 20px;
                                                                    " aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</td>
										</tr>
										<tr>
											<td>LinkedIn</td>
											<td>540</td>
											<td>
												<div class="progress" style="
                                                                    height: 3px;
                                                                ">
													<div class="progress-bar" role="progressbar" style="
                                                                        width: 25%;
                                                                        height: 20px;
                                                                    " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- end table-responsive-->
						</div>
						<!-- end card-body-->
					</div>
					<!-- end card-->
				</div>
				<!-- end col-->

				<div class="col-xl-4 col-lg-12">
					<div class="card">
						<div class="card-body">
							<a href="" class="p-0 float-end">Export
								<i class="mdi mdi-download ms-1"></i></a>
							<h4 class="header-title mt-1 mb-3">
								Engagement Overview
							</h4>

							<div class="table-responsive">
								<table class="table table-sm table-centered mb-0 font-14">
									<thead class="table-light">
										<tr>
											<th>Duration (Secs)</th>
											<th style="width: 30%">
												Sessions
											</th>
											<th style="width: 30%">
												Views
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>0-30</td>
											<td>2,250</td>
											<td>4,250</td>
										</tr>
										<tr>
											<td>31-60</td>
											<td>1,501</td>
											<td>2,050</td>
										</tr>
										<tr>
											<td>61-120</td>
											<td>750</td>
											<td>1,600</td>
										</tr>
										<tr>
											<td>121-240</td>
											<td>540</td>
											<td>1,040</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- end table-responsive-->
						</div>
						<!-- end card-body-->
					</div>
					<!-- end card-->
				</div>
				<!-- end col-->
			</div>
			<!-- end row -->
		</div>
		<!-- container -->
	</div>
	<!-- content -->

	<script src="public/js/vendor/Chart.bundle.min.js"></script>
	<script src="public/js/vendor/apexcharts.min.js"></script>