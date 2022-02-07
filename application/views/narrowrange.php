<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
				
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">

								<!--begin::Card-->
								<div class="card card-custom">
									<div class="card-header">
										<div class="card-title">
											<span class="card-icon">
												<i class="flaticon2-layers text-primary"></i>
											</span>
											<h3 class="card-label"><?php echo $title; ?></h3>
										</div>
										<div class="card-toolbar">
											<!--begin::Dropdown-->
											<div class="dropdown dropdown-inline mr-2">
												<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="la la-download"></i>Export</button>
												<!--begin::Dropdown Menu-->
												<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
													<ul class="nav flex-column nav-hover">
														<li class="nav-header font-weight-bolder text-uppercase text-primary pb-2">Choose an option:</li>
														<li class="nav-item">
															<a href="#" class="nav-link">
																<i class="nav-icon la la-print"></i>
																<span class="nav-text">Print</span>
															</a>
														</li>
														<li class="nav-item">
															<a href="#" class="nav-link">
																<i class="nav-icon la la-copy"></i>
																<span class="nav-text">Copy</span>
															</a>
														</li>
														<li class="nav-item">
															<a href="#" class="nav-link">
																<i class="nav-icon la la-file-excel-o"></i>
																<span class="nav-text">Excel</span>
															</a>
														</li>
														<li class="nav-item">
															<a href="#" class="nav-link">
																<i class="nav-icon la la-file-text-o"></i>
																<span class="nav-text">CSV</span>
															</a>
														</li>
														<li class="nav-item">
															<a href="#" class="nav-link">
																<i class="nav-icon la la-file-pdf-o"></i>
																<span class="nav-text">PDF</span>
															</a>
														</li>
													</ul>
												</div>
												<!--end::Dropdown Menu-->
											</div>
											<!--end::Dropdown-->
											<!--begin::Button-->
											<a href="#" class="btn btn-primary font-weight-bolder">
											<i class="la la-plus"></i>New Record</a>
											<!--end::Button-->
										</div>
									</div>
									<div class="card-body">
										<!--begin: Datatable-->
										<table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
											<thead>
												<tr>
													<th>Id</th>
													<th>Ticker</th>
													<th>Date</th>
													<th>NR4</th>
													<th>NR7</th>
													<th>NR14</th>
													<th>NR21</th>
													<th>InsideDay</th>
													<th>TweezerTop</th>
													<th>TweezerBottom</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													
												<th>Id</th>
													<th>Ticker</th>
													<th>Date</th>
													<th>NR4</th>
													<th>NR7</th>
													<th>NR14</th>
													<th>NR21</th>
													<th>InsideDay</th>
													
													<th>TweezerTop</th>
													<th>TweezerBottom</th>
													
													<th>Actions</th>
												</tr>
											</tfoot>
										</table>
										<!--end: Datatable-->
									</div>
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>