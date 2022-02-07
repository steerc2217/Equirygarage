<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title><?php echo $title; ?></title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

	
		<link href="<?php echo base_url(); ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	
		<link href="<?php echo base_url(); ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/media/logos/favicon.ico" />
		<link href="<?php echo base_url(); ?>assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	
	
		
		
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed header-bottom-enabled page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile bg-primary header-mobile-fixed">
			<!--begin::Logo-->
			<a href="index.html">
				<img alt="Logo" src="<?php echo base_url(); ?>assets/media/logos/logo-letter-9.png" class="max-h-30px" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header flex-column header-fixed">
						<!--begin::Top-->
						<div class="header-top">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Left-->
								<div class="d-none d-lg-flex align-items-center mr-3">
									<!--begin::Logo-->
									<a href="index.html" class="mr-20">
										<img alt="Logo" src="<?php echo base_url(); ?>assets/media/logos/logo-letter-9.png" class="max-h-50px" />
									</a>
									<!--end::Logo-->
									<!--begin::Tab Navs(for desktop mode)-->
									<ul class="header-tabs nav align-self-end font-size-lg" role="tablist">
										<!--begin::Item-->
										<li class="nav-item">
											<a href="#" class="nav-link py-4 px-6 active" data-toggle="tab" data-target="#kt_header_tab_1" role="tab">Technicals</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item mr-3">
											<a href="#" class="nav-link py-4 px-6" data-toggle="tab" data-target="#kt_header_tab_2" role="tab">Fundamentals</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item mr-3">
											<a href="#" class="nav-link py-4 px-6" data-toggle="tab" data-target="#kt_header_tab_2" role="tab">Articles</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item mr-3">
											<a href="#" class="nav-link py-4 px-6" data-toggle="tab" data-target="#kt_header_tab_2" role="tab">Contact</a>
										</li>
										<!--end::Item-->
									</ul>
									<!--begin::Tab Navs-->
								</div>
								<!--end::Left-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Top-->
						<!--begin::Bottom-->
						<div class="header-bottom">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Header Menu Wrapper-->
								<div class="header-navs header-navs-left" id="kt_header_navs">
									<!--begin::Tab Navs(for tablet and mobile modes)-->
									<ul class="header-tabs p-5 p-lg-0 d-flex d-lg-none nav nav-bold nav-tabs" role="tablist">
										<!--begin::Item-->
										<li class="nav-item mr-2">
											<a href="#" class="nav-link btn btn-clean active" data-toggle="tab" data-target="#kt_header_tab_1" role="tab">Home</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item mr-2">
											<a href="#" class="nav-link btn btn-clean" data-toggle="tab" data-target="#kt_header_tab_2" role="tab">Reports</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item mr-2">
											<a href="#" class="nav-link btn btn-clean" data-toggle="tab" data-target="#kt_header_tab_2" role="tab">Orders</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item mr-2">
											<a href="#" class="nav-link btn btn-clean" data-toggle="tab" data-target="#kt_header_tab_2" role="tab">Help Ceter</a>
										</li>
										<!--end::Item-->
									</ul>
									<!--begin::Tab Navs-->
									<!--begin::Tab Content-->
									<div class="tab-content">
										<!--begin::Tab Pane-->
										<div class="tab-pane py-5 p-lg-0 show active" id="kt_header_tab_1">
											<!--begin::Menu-->
											<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
												<!--begin::Nav-->
												<ul class="menu-nav">
													<li class="menu-item menu-item-active" aria-haspopup="true">
														<a href="<?php echo site_url('Dashboard/index'); ?>" class="menu-link">
															<span class="menu-text">Dashboard</span>
														</a>
													</li>
													<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
														<a href="javascript:;" class="menu-link menu-toggle">
															<span class="menu-text">Features</span>
															<span class="menu-desc"></span>
															<i class="menu-arrow"></i>
														</a>
														<div class="menu-submenu menu-submenu-classic menu-submenu-left">
															<ul class="menu-subnav">
																<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link menu-toggle">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/Communication/Add-user.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<polygon points="0 0 24 0 24 24 0 24" />
																					<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																					<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Bootstrap</span>
																		<i class="menu-arrow"></i>
																	</a>
																	<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																		<ul class="menu-subnav">
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/bootstrap/typography.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Typography</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/bootstrap/buttons.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Buttons</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/bootstrap/button-group.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Button Group</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/bootstrap/dropdown.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Dropdown</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/bootstrap/navs.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Navs</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/bootstrap/tables.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Tables</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/bootstrap/progress.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Progress</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/bootstrap/modal.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Modal</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/bootstrap/alerts.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Alerts</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/bootstrap/popover.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Popover</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/bootstrap/tooltip.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Tooltip</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link menu-toggle">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/Files/Pictures1.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3" />
																					<polygon fill="#000000" opacity="0.3" points="4 19 10 11 16 19" />
																					<polygon fill="#000000" points="11 19 15 14 19 19" />
																					<path d="M18,12 C18.8284271,12 19.5,11.3284271 19.5,10.5 C19.5,9.67157288 18.8284271,9 18,9 C17.1715729,9 16.5,9.67157288 16.5,10.5 C16.5,11.3284271 17.1715729,12 18,12 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Custom</span>
																		<i class="menu-arrow"></i>
																	</a>
																	<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																		<ul class="menu-subnav">
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/custom/utilities.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Utilities</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/custom/accordions.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Accordions</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/custom/label.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Label</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/custom/pulse.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Pulse</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/custom/line-tabs.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Line Tabs</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/custom/advance-navs.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Advance Navigations</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/custom/timeline.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Timeline</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/custom/pagination.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Pagination</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/custom/symbol.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Symbol</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/custom/spinners.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Spinners</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/custom/iconbox.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Iconbox</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/custom/callout.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Callout</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/custom/ribbons.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Ribbons</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link menu-toggle">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/General/Thunder-move.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000" />
																					<path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Icons</span>
																		<i class="menu-arrow"></i>
																	</a>
																	<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																		<ul class="menu-subnav">
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/icons/flaticon.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Flaticon</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/icons/fontawesome5.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Fontawesome 5</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/icons/lineawesome.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Lineawesome</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/icons/socicons.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Socicons</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/icons/svg.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">SVG Icons</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/icons/keenthemes-icons.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Keenthemes Icons</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link menu-toggle">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/Communication/Adress-book2.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z" fill="#000000" opacity="0.3" />
																					<path d="M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Cards</span>
																		<i class="menu-arrow"></i>
																	</a>
																	<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																		<ul class="menu-subnav">
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/cards/general.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">General Cards</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/cards/stacked.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Stacked Cards</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/cards/tabbed.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Tabbed Cards</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/cards/draggable.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Draggable Cards</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/cards/tools.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Cards Tools</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/cards/sticky.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Sticky Cards</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/cards/stretched.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Stretched Cards</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link menu-toggle">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/Communication/Chat1.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<polygon fill="#000000" opacity="0.3" points="5 15 3 21.5 9.5 19.5" />
																					<path d="M13.5,21 C8.25329488,21 4,16.7467051 4,11.5 C4,6.25329488 8.25329488,2 13.5,2 C18.7467051,2 23,6.25329488 23,11.5 C23,16.7467051 18.7467051,21 13.5,21 Z M8.5,13 C9.32842712,13 10,12.3284271 10,11.5 C10,10.6715729 9.32842712,10 8.5,10 C7.67157288,10 7,10.6715729 7,11.5 C7,12.3284271 7.67157288,13 8.5,13 Z M13.5,13 C14.3284271,13 15,12.3284271 15,11.5 C15,10.6715729 14.3284271,10 13.5,10 C12.6715729,10 12,10.6715729 12,11.5 C12,12.3284271 12.6715729,13 13.5,13 Z M18.5,13 C19.3284271,13 20,12.3284271 20,11.5 C20,10.6715729 19.3284271,10 18.5,10 C17.6715729,10 17,10.6715729 17,11.5 C17,12.3284271 17.6715729,13 18.5,13 Z" fill="#000000" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Widgets</span>
																		<i class="menu-arrow"></i>
																	</a>
																	<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																		<ul class="menu-subnav">
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/widgets/lists.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Lists</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/widgets/stats.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Stats</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/widgets/charts.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Charts</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/widgets/mixed.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Mixed</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/widgets/feeds.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Feeds</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/widgets/engage.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Engage</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/widgets/base-tables.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Base Tables</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/widgets/advance-tables.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Advance Tables</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/widgets/nav-panels.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Nav Panels</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link menu-toggle">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/Communication/Chat-check.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																					<path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Calendar</span>
																		<i class="menu-arrow"></i>
																	</a>
																	<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																		<ul class="menu-subnav">
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/calendar/basic.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Basic Calendar</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/calendar/list-view.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">List Views</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/calendar/google.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Google Calendar</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/calendar/external-events.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">External Events</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/calendar/background-events.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Background Events</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link menu-toggle">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/Communication/Dial-numbers.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="2" />
																					<rect fill="#000000" x="4" y="10" width="4" height="4" rx="2" />
																					<rect fill="#000000" x="10" y="4" width="4" height="4" rx="2" />
																					<rect fill="#000000" x="10" y="10" width="4" height="4" rx="2" />
																					<rect fill="#000000" x="16" y="4" width="4" height="4" rx="2" />
																					<rect fill="#000000" x="16" y="10" width="4" height="4" rx="2" />
																					<rect fill="#000000" x="4" y="16" width="4" height="4" rx="2" />
																					<rect fill="#000000" x="10" y="16" width="4" height="4" rx="2" />
																					<rect fill="#000000" x="16" y="16" width="4" height="4" rx="2" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Charts</span>
																		<i class="menu-arrow"></i>
																	</a>
																	<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																		<ul class="menu-subnav">
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/charts/apexcharts.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Apexcharts</span>
																				</a>
																			</li>
																			<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																				<a href="javascript:;" class="menu-link menu-toggle">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">amCharts</span>
																					<i class="menu-arrow"></i>
																				</a>
																				<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																					<ul class="menu-subnav">
																						<li class="menu-item" aria-haspopup="true">
																							<a href="features/charts/amcharts/charts.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">amCharts Charts</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="features/charts/amcharts/stock-charts.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">amCharts Stock Charts</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="features/charts/amcharts/maps.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">amCharts Maps</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/charts/flotcharts.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Flot Charts</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/charts/google-charts.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Google Charts</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link menu-toggle">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/Communication/Incoming-box.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M22,17 L22,21 C22,22.1045695 21.1045695,23 20,23 L4,23 C2.8954305,23 2,22.1045695 2,21 L2,17 L6.27924078,17 L6.82339262,18.6324555 C7.09562072,19.4491398 7.8598984,20 8.72075922,20 L15.381966,20 C16.1395101,20 16.8320364,19.5719952 17.1708204,18.8944272 L18.118034,17 L22,17 Z" fill="#000000" />
																					<path d="M2.5625,15 L5.92654389,9.01947752 C6.2807805,8.38972356 6.94714834,8 7.66969497,8 L16.330305,8 C17.0528517,8 17.7192195,8.38972356 18.0734561,9.01947752 L21.4375,15 L18.118034,15 C17.3604899,15 16.6679636,15.4280048 16.3291796,16.1055728 L15.381966,18 L8.72075922,18 L8.17660738,16.3675445 C7.90437928,15.5508602 7.1401016,15 6.27924078,15 L2.5625,15 Z" fill="#000000" opacity="0.3" />
																					<path d="M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.959697, 3.661508) rotate(-270.000000) translate(-11.959697, -3.661508)" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Maps</span>
																		<i class="menu-arrow"></i>
																	</a>
																	<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																		<ul class="menu-subnav">
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/maps/google-maps.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Google Maps</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/maps/leaflet.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Leaflet</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/maps/jqvmap.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">JQVMap</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link menu-toggle">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/Communication/Active-call.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M13.0799676,14.7839934 L15.2839934,12.5799676 C15.8927139,11.9712471 16.0436229,11.0413042 15.6586342,10.2713269 L15.5337539,10.0215663 C15.1487653,9.25158901 15.2996742,8.3216461 15.9083948,7.71292558 L18.6411989,4.98012149 C18.836461,4.78485934 19.1530435,4.78485934 19.3483056,4.98012149 C19.3863063,5.01812215 19.4179321,5.06200062 19.4419658,5.11006808 L20.5459415,7.31801948 C21.3904962,9.0071287 21.0594452,11.0471565 19.7240871,12.3825146 L13.7252616,18.3813401 C12.2717221,19.8348796 10.1217008,20.3424308 8.17157288,19.6923882 L5.75709327,18.8875616 C5.49512161,18.8002377 5.35354162,18.5170777 5.4408655,18.2551061 C5.46541191,18.1814669 5.50676633,18.114554 5.56165376,18.0596666 L8.21292558,15.4083948 C8.8216461,14.7996742 9.75158901,14.6487653 10.5215663,15.0337539 L10.7713269,15.1586342 C11.5413042,15.5436229 12.4712471,15.3927139 13.0799676,14.7839934 Z" fill="#000000" />
																					<path d="M14.1480759,6.00715131 L13.9566988,7.99797396 C12.4781389,7.8558405 11.0097207,8.36895892 9.93933983,9.43933983 C8.8724631,10.5062166 8.35911588,11.9685602 8.49664195,13.4426352 L6.50528978,13.6284215 C6.31304559,11.5678496 7.03283934,9.51741319 8.52512627,8.02512627 C10.0223249,6.52792766 12.0812426,5.80846733 14.1480759,6.00715131 Z M14.4980938,2.02230302 L14.313049,4.01372424 C11.6618299,3.76737046 9.03000738,4.69181803 7.1109127,6.6109127 C5.19447112,8.52735429 4.26985715,11.1545872 4.51274152,13.802405 L2.52110319,13.985098 C2.22450978,10.7517681 3.35562581,7.53777247 5.69669914,5.19669914 C8.04101739,2.85238089 11.2606138,1.72147333 14.4980938,2.02230302 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Miscellaneous</span>
																		<i class="menu-arrow"></i>
																	</a>
																	<div class="menu-submenu menu-submenu-classic menu-submenu-right" style="top: -150px">
																		<ul class="menu-subnav">
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/miscellaneous/kanban-board.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Kanban Board</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/miscellaneous/sticky-panels.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Sticky Panels</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/miscellaneous/blockui.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Block UI</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/miscellaneous/perfect-scrollbar.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Perfect Scrollbar</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/miscellaneous/treeview.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Tree View</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/miscellaneous/bootstrap-notify.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Bootstrap Notify</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/miscellaneous/toastr.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Toastr</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/miscellaneous/sweetalert2.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">SweetAlert2</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/miscellaneous/dual-listbox.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Dual Listbox</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/miscellaneous/session-timeout.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Session Timeout</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/miscellaneous/idle-timer.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Idle Timer</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="features/miscellaneous/cropper.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Cropper</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a target="_blank" href="https://preview.keenthemes.com/metronic/demo7/builder.html" class="menu-link">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/Home/Library.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																					<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Layout Builder</span>
																	</a>
																</li>
															</ul>
														</div>
													</li>
													<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
														<a href="javascript:;" class="menu-link menu-toggle">
															<span class="menu-text">Crud</span>
															<span class="menu-desc"></span>
															<i class="menu-arrow"></i>
														</a>
														<div class="menu-submenu menu-submenu-classic menu-submenu-left">
															<ul class="menu-subnav">
																<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link menu-toggle">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/Shopping/Box2.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
																					<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Forms &amp; Controls</span>
																		<i class="menu-arrow"></i>
																	</a>
																	<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																		<ul class="menu-subnav">
																			<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																				<a href="javascript:;" class="menu-link menu-toggle">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Form Controls</span>
																					<i class="menu-arrow"></i>
																				</a>
																				<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																					<ul class="menu-subnav">
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/controls/base.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Base Inputs</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/controls/input-group.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Input Groups</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/controls/checkbox.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Checkbox</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/controls/radio.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Radio</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/controls/switch.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Switch</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/controls/option.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Mega Options</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</li>
																			<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																				<a href="javascript:;" class="menu-link menu-toggle">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Form Widgets</span>
																					<i class="menu-arrow"></i>
																				</a>
																				<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																					<ul class="menu-subnav">
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/widgets/bootstrap-datetimepicker.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Datetimepicker</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/widgets/bootstrap-datepicker.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Datepicker</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/widgets/bootstrap-timepicker.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Timepicker</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/widgets/bootstrap-daterangepicker.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Daterangepicker</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/widgets/tagify.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Tagify</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/widgets/bootstrap-touchspin.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Touchspin</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/widgets/bootstrap-maxlength.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Maxlength</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/widgets/bootstrap-switch.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Switch</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/widgets/bootstrap-multipleselectsplitter.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Multiple Select Splitter</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/widgets/bootstrap-select.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Bootstrap Select</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/widgets/select2.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Select2</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/widgets/typeahead.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Typeahead</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</li>
																			<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																				<a href="javascript:;" class="menu-link menu-toggle">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Form Widgets 2</span>
																					<i class="menu-arrow"></i>
																				</a>
																				<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																					<ul class="menu-subnav">
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/widgets/nouislider.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">noUiSlider</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/widgets/form-repeater.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Form Repeater</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/widgets/ion-range-slider.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Ion Range Slider</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/widgets/input-mask.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Input Masks</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/widgets/jquery-mask.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">jQuery Mask</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/widgets/autosize.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Autosize</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/widgets/clipboard.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Clipboard</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/widgets/recaptcha.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Google reCaptcha</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</li>
																			<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																				<a href="javascript:;" class="menu-link menu-toggle">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Form Text Editors</span>
																					<i class="menu-arrow"></i>
																				</a>
																				<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																					<ul class="menu-subnav">
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/editors/tinymce.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">TinyMCE</span>
																							</a>
																						</li>
																						<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																							<a href="javascript:;" class="menu-link menu-toggle">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">CKEditor</span>
																								<i class="menu-arrow"></i>
																							</a>
																							<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																								<ul class="menu-subnav">
																									<li class="menu-item" aria-haspopup="true">
																										<a href="crud/forms/editors/ckeditor-classic.html" class="menu-link">
																											<i class="menu-bullet menu-bullet-line">
																												<span></span>
																											</i>
																											<span class="menu-text">CKEditor Classic</span>
																										</a>
																									</li>
																									<li class="menu-item" aria-haspopup="true">
																										<a href="crud/forms/editors/ckeditor-inline.html" class="menu-link">
																											<i class="menu-bullet menu-bullet-line">
																												<span></span>
																											</i>
																											<span class="menu-text">CKEditor Inline</span>
																										</a>
																									</li>
																									<li class="menu-item" aria-haspopup="true">
																										<a href="crud/forms/editors/ckeditor-balloon.html" class="menu-link">
																											<i class="menu-bullet menu-bullet-line">
																												<span></span>
																											</i>
																											<span class="menu-text">CKEditor Balloon</span>
																										</a>
																									</li>
																									<li class="menu-item" aria-haspopup="true">
																										<a href="crud/forms/editors/ckeditor-balloon-block.html" class="menu-link">
																											<i class="menu-bullet menu-bullet-line">
																												<span></span>
																											</i>
																											<span class="menu-text">CKEditor Balloon Block</span>
																										</a>
																									</li>
																									<li class="menu-item" aria-haspopup="true">
																										<a href="crud/forms/editors/ckeditor-document.html" class="menu-link">
																											<i class="menu-bullet menu-bullet-line">
																												<span></span>
																											</i>
																											<span class="menu-text">CKEditor Document</span>
																										</a>
																									</li>
																								</ul>
																							</div>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/editors/quill.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Quill Text Editor</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/editors/summernote.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Summernote WYSIWYG</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/editors/bootstrap-markdown.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Markdown Editor</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</li>
																			<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																				<a href="javascript:;" class="menu-link menu-toggle">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Form Layouts</span>
																					<i class="menu-arrow"></i>
																				</a>
																				<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																					<ul class="menu-subnav">
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/layouts/default-forms.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Default Forms</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/layouts/multi-column-forms.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Multi Column Forms</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/layouts/action-bars.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Basic Action Bars</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/layouts/sticky-action-bar.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Sticky Action Bar</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</li>
																			<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																				<a href="javascript:;" class="menu-link menu-toggle">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Form Validation</span>
																					<i class="menu-arrow"></i>
																				</a>
																				<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																					<ul class="menu-subnav">
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/validation/states.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Validation States</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/validation/form-controls.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Form Controls</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/forms/validation/form-widgets.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Form Widgets</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link menu-toggle">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/General/Thunder-move.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000" />
																					<path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">KTDatatable</span>
																		<i class="menu-arrow"></i>
																	</a>
																	<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																		<ul class="menu-subnav">
																			<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																				<a href="javascript:;" class="menu-link menu-toggle">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Base</span>
																					<i class="menu-arrow"></i>
																				</a>
																				<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																					<ul class="menu-subnav">
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/ktdatatable/base/data-local.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Local Data</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/ktdatatable/base/data-json.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">JSON Data</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/ktdatatable/base/data-ajax.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Ajax Data</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/ktdatatable/base/html-table.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">HTML Table</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/ktdatatable/base/local-sort.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Local Sort</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/ktdatatable/base/translation.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Translation</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</li>
																			<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																				<a href="javascript:;" class="menu-link menu-toggle">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Advanced</span>
																					<i class="menu-arrow"></i>
																				</a>
																				<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																					<ul class="menu-subnav">
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/ktdatatable/advanced/record-selection.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Record Selection</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/ktdatatable/advanced/row-details.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Row Details</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/ktdatatable/advanced/modal.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Modal Examples</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/ktdatatable/advanced/column-rendering.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Column Rendering</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/ktdatatable/advanced/column-width.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Column Width</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/ktdatatable/advanced/vertical.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Vertical Scrolling</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</li>
																			<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																				<a href="javascript:;" class="menu-link menu-toggle">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Child Datatables</span>
																					<i class="menu-arrow"></i>
																				</a>
																				<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																					<ul class="menu-subnav">
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/ktdatatable/child/data-local.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Local Data</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/ktdatatable/child/data-ajax.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Remote Data</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</li>
																			<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																				<a href="javascript:;" class="menu-link menu-toggle">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">API</span>
																					<i class="menu-arrow"></i>
																				</a>
																				<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																					<ul class="menu-subnav">
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/ktdatatable/api/methods.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">API Methods</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/ktdatatable/api/events.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Events</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link menu-toggle">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/Communication/Add-user.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<polygon points="0 0 24 0 24 24 0 24" />
																					<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																					<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Datatables.net</span>
																		<i class="menu-arrow"></i>
																	</a>
																	<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																		<ul class="menu-subnav">
																			<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																				<a href="javascript:;" class="menu-link menu-toggle">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Basic</span>
																					<i class="menu-arrow"></i>
																				</a>
																				<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																					<ul class="menu-subnav">
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/basic/basic.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Basic Tables</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/basic/scrollable.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Scrollable Tables</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/basic/headers.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Complex Headers</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/basic/paginations.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Pagination Options</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</li>
																			<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																				<a href="javascript:;" class="menu-link menu-toggle">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Advanced</span>
																					<i class="menu-arrow"></i>
																				</a>
																				<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																					<ul class="menu-subnav">
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/advanced/column-rendering.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Column Rendering</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/advanced/multiple-controls.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Multiple Controls</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/advanced/column-visibility.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Column Visibility</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/advanced/row-callback.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Row Callback</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/advanced/row-grouping.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Row Grouping</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/advanced/footer-callback.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Footer Callback</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</li>
																			<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																				<a href="javascript:;" class="menu-link menu-toggle">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Data sources</span>
																					<i class="menu-arrow"></i>
																				</a>
																				<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																					<ul class="menu-subnav">
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/data-sources/html.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">HTML</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/data-sources/javascript.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Javascript</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/data-sources/ajax-client-side.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Ajax Client-side</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/data-sources/ajax-server-side.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Ajax Server-side</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</li>
																			<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																				<a href="javascript:;" class="menu-link menu-toggle">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Search Options</span>
																					<i class="menu-arrow"></i>
																				</a>
																				<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																					<ul class="menu-subnav">
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/search-options/column-search.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Column Search</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/search-options/advanced-search.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Advanced Search</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</li>
																			<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																				<a href="javascript:;" class="menu-link menu-toggle">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Extensions</span>
																					<i class="menu-arrow"></i>
																				</a>
																				<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																					<ul class="menu-subnav">
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/extensions/buttons.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Buttons</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/extensions/colreorder.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">ColReorder</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/extensions/keytable.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">KeyTable</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/extensions/responsive.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Responsive</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/extensions/rowgroup.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">RowGroup</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/extensions/rowreorder.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">RowReorder</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/extensions/scroller.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Scroller</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="crud/datatables/extensions/select.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-dot">
																									<span></span>
																								</i>
																								<span class="menu-text">Select</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link menu-toggle">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/Shopping/Gift.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M4,6 L20,6 C20.5522847,6 21,6.44771525 21,7 L21,8 C21,8.55228475 20.5522847,9 20,9 L4,9 C3.44771525,9 3,8.55228475 3,8 L3,7 C3,6.44771525 3.44771525,6 4,6 Z M5,11 L10,11 C10.5522847,11 11,11.4477153 11,12 L11,19 C11,19.5522847 10.5522847,20 10,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,12 C4,11.4477153 4.44771525,11 5,11 Z M14,11 L19,11 C19.5522847,11 20,11.4477153 20,12 L20,19 C20,19.5522847 19.5522847,20 19,20 L14,20 C13.4477153,20 13,19.5522847 13,19 L13,12 C13,11.4477153 13.4477153,11 14,11 Z" fill="#000000" />
																					<path d="M14.4452998,2.16794971 C14.9048285,1.86159725 15.5256978,1.98577112 15.8320503,2.4452998 C16.1384028,2.90482849 16.0142289,3.52569784 15.5547002,3.83205029 L12,6.20185043 L8.4452998,3.83205029 C7.98577112,3.52569784 7.86159725,2.90482849 8.16794971,2.4452998 C8.47430216,1.98577112 9.09517151,1.86159725 9.5547002,2.16794971 L12,3.79814957 L14.4452998,2.16794971 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">File Upload</span>
																		<i class="menu-arrow"></i>
																	</a>
																	<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																		<ul class="menu-subnav">
																			<li class="menu-item" aria-haspopup="true">
																				<a href="crud/file-upload/image-input.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Image Input</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="crud/file-upload/dropzonejs.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">DropzoneJS</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="crud/file-upload/uppy.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Uppy</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>
															</ul>
														</div>
													</li>
													<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
														<a href="javascript:;" class="menu-link menu-toggle">
															<span class="menu-text">Apps</span>
															<span class="menu-desc"></span>
															<i class="menu-arrow"></i>
														</a>
														<div class="menu-submenu menu-submenu-classic menu-submenu-left">
															<ul class="menu-subnav">
																<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link menu-toggle">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/Shopping/Gift.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M4,6 L20,6 C20.5522847,6 21,6.44771525 21,7 L21,8 C21,8.55228475 20.5522847,9 20,9 L4,9 C3.44771525,9 3,8.55228475 3,8 L3,7 C3,6.44771525 3.44771525,6 4,6 Z M5,11 L10,11 C10.5522847,11 11,11.4477153 11,12 L11,19 C11,19.5522847 10.5522847,20 10,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,12 C4,11.4477153 4.44771525,11 5,11 Z M14,11 L19,11 C19.5522847,11 20,11.4477153 20,12 L20,19 C20,19.5522847 19.5522847,20 19,20 L14,20 C13.4477153,20 13,19.5522847 13,19 L13,12 C13,11.4477153 13.4477153,11 14,11 Z" fill="#000000" />
																					<path d="M14.4452998,2.16794971 C14.9048285,1.86159725 15.5256978,1.98577112 15.8320503,2.4452998 C16.1384028,2.90482849 16.0142289,3.52569784 15.5547002,3.83205029 L12,6.20185043 L8.4452998,3.83205029 C7.98577112,3.52569784 7.86159725,2.90482849 8.16794971,2.4452998 C8.47430216,1.98577112 9.09517151,1.86159725 9.5547002,2.16794971 L12,3.79814957 L14.4452998,2.16794971 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Users</span>
																		<i class="menu-arrow"></i>
																	</a>
																	<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																		<ul class="menu-subnav">
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/user/list-default.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">List - Default</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/user/list-datatable.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">List - Datatable</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/user/list-columns-1.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">List - Columns 1</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/user/list-columns-2.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">List - Columns 2</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/user/add-user.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Add User</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/user/edit-user.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Edit User</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link menu-toggle">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/Communication/Address-card.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Profile</span>
																		<i class="menu-arrow"></i>
																	</a>
																	<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																		<ul class="menu-subnav">
																			<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																				<a href="javascript:;" class="menu-link menu-toggle">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Profile 1</span>
																					<i class="menu-arrow"></i>
																				</a>
																				<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																					<ul class="menu-subnav">
																						<li class="menu-item" aria-haspopup="true">
																							<a href="custom/apps/profile/profile-1/overview.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-line">
																									<span></span>
																								</i>
																								<span class="menu-text">Overview</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="custom/apps/profile/profile-1/personal-information.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-line">
																									<span></span>
																								</i>
																								<span class="menu-text">Personal Information</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="custom/apps/profile/profile-1/account-information.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-line">
																									<span></span>
																								</i>
																								<span class="menu-text">Account Information</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="custom/apps/profile/profile-1/change-password.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-line">
																									<span></span>
																								</i>
																								<span class="menu-text">Change Password</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="custom/apps/profile/profile-1/email-settings.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-line">
																									<span></span>
																								</i>
																								<span class="menu-text">Email Settings</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/profile/profile-2.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Profile 2</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/profile/profile-3.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Profile 3</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/profile/profile-4.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Profile 4</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link menu-toggle">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/Communication/Adress-book1.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M17,2 L19,2 C20.6568542,2 22,3.34314575 22,5 L22,19 C22,20.6568542 20.6568542,22 19,22 L17,22 L17,2 Z" fill="#000000" opacity="0.3" />
																					<path d="M4,2 L16,2 C17.6568542,2 19,3.34314575 19,5 L19,19 C19,20.6568542 17.6568542,22 16,22 L4,22 C3.44771525,22 3,21.5522847 3,21 L3,3 C3,2.44771525 3.44771525,2 4,2 Z M11.1176481,13.709585 C10.6725287,14.1547043 9.99251947,14.2650547 9.42948307,13.9835365 C8.86644666,13.7020183 8.18643739,13.8123686 7.74131803,14.2574879 L6.2303083,15.7684977 C6.17542087,15.8233851 6.13406645,15.8902979 6.10952004,15.9639372 C6.02219616,16.2259088 6.16377615,16.5090688 6.42574781,16.5963927 L7.77956724,17.0476658 C9.07965249,17.4810276 10.5130001,17.1426601 11.4820264,16.1736338 L15.4812434,12.1744168 C16.3714821,11.2841781 16.5921828,9.92415954 16.0291464,8.79808673 L15.3965752,7.53294436 C15.3725414,7.48487691 15.3409156,7.44099843 15.302915,7.40299777 C15.1076528,7.20773562 14.7910703,7.20773562 14.5958082,7.40299777 L13.0032662,8.99553978 C12.5581468,9.44065914 12.4477965,10.1206684 12.7293147,10.6837048 C13.0108329,11.2467412 12.9004826,11.9267505 12.4553632,12.3718698 L11.1176481,13.709585 Z" fill="#000000" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Contacts</span>
																		<i class="menu-arrow"></i>
																	</a>
																	<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																		<ul class="menu-subnav">
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/contacts/list-columns.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">List - Columns</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/contacts/list-datatable.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">List - Datatable</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/contacts/view-contact.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">View Contact</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/contacts/add-contact.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Add Contact</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/contacts/edit-contact.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Edit Contact</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link menu-toggle">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/Communication/Mail-opened.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3" />
																					<path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Chat</span>
																		<i class="menu-arrow"></i>
																	</a>
																	<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																		<ul class="menu-subnav">
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/chat/private.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Private</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/chat/group.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Group</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/chat/popup.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Popup</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link menu-toggle">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/Shopping/Box2.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
																					<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Projects</span>
																		<i class="menu-arrow"></i>
																	</a>
																	<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																		<ul class="menu-subnav">
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/projects/list-columns-1.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">List - Columns 1</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/projects/list-columns-2.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">List - Columns 2</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/projects/list-columns-3.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">List - Columns 3</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/projects/list-columns-4.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">List - Columns 4</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/projects/list-datatable.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">List - Datatable</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/projects/view-project.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">View Project</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/projects/add-project.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Add Project</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/projects/edit-project.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Edit Project</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link menu-toggle">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/General/Shield-check.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
																					<path d="M11.1750002,14.75 C10.9354169,14.75 10.6958335,14.6541667 10.5041669,14.4625 L8.58750019,12.5458333 C8.20416686,12.1625 8.20416686,11.5875 8.58750019,11.2041667 C8.97083352,10.8208333 9.59375019,10.8208333 9.92916686,11.2041667 L11.1750002,12.45 L14.3375002,9.2875 C14.7208335,8.90416667 15.2958335,8.90416667 15.6791669,9.2875 C16.0625002,9.67083333 16.0625002,10.2458333 15.6791669,10.6291667 L11.8458335,14.4625 C11.6541669,14.6541667 11.4145835,14.75 11.1750002,14.75 Z" fill="#000000" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Support Center</span>
																		<i class="menu-arrow"></i>
																	</a>
																	<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																		<ul class="menu-subnav">
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/support-center/home-1.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Home 1</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/support-center/home-2.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Home 2</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/support-center/faq-1.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">FAQ 1</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/support-center/faq-2.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">FAQ 2</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/support-center/faq-3.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">FAQ 3</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/support-center/feedback.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Feedback</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/support-center/license.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">License</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link menu-toggle">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/General/Thunder-move.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000" />
																					<path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Todo</span>
																		<i class="menu-arrow"></i>
																	</a>
																	<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																		<ul class="menu-subnav">
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/todo/tasks.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Tasks</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/todo/docs.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Docs</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/todo/files.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Files</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link menu-toggle">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/Communication/Clipboard-list.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
																					<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
																					<rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1" />
																					<rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1" />
																					<rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1" />
																					<rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1" />
																					<rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1" />
																					<rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Education</span>
																		<i class="menu-arrow"></i>
																	</a>
																	<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																		<ul class="menu-subnav">
																			<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																				<a href="javascript:;" class="menu-link menu-toggle">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">School</span>
																					<i class="menu-arrow"></i>
																				</a>
																				<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																					<ul class="menu-subnav">
																						<li class="menu-item" aria-haspopup="true">
																							<a href="custom/apps/education/school/dashboard.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-line">
																									<span></span>
																								</i>
																								<span class="menu-text">Dashboard</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="custom/apps/education/school/statistics.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-line">
																									<span></span>
																								</i>
																								<span class="menu-text">Statistics</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="custom/apps/education/school/calendar.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-line">
																									<span></span>
																								</i>
																								<span class="menu-text">Calendar</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="custom/apps/education/school/library.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-line">
																									<span></span>
																								</i>
																								<span class="menu-text">Library</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="custom/apps/education/school/teachers.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-line">
																									<span></span>
																								</i>
																								<span class="menu-text">Teachers</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="custom/apps/education/school/students.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-line">
																									<span></span>
																								</i>
																								<span class="menu-text">Students</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</li>
																			<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																				<a href="javascript:;" class="menu-link menu-toggle">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Student</span>
																					<i class="menu-arrow"></i>
																				</a>
																				<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																					<ul class="menu-subnav">
																						<li class="menu-item" aria-haspopup="true">
																							<a href="custom/apps/education/student/dashboard.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-line">
																									<span></span>
																								</i>
																								<span class="menu-text">Dashboard</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="custom/apps/education/student/profile.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-line">
																									<span></span>
																								</i>
																								<span class="menu-text">Profile</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="custom/apps/education/student/calendar.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-line">
																									<span></span>
																								</i>
																								<span class="menu-text">Calendar</span>
																							</a>
																						</li>
																						<li class="menu-item" aria-haspopup="true">
																							<a href="custom/apps/education/student/classmates.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-line">
																									<span></span>
																								</i>
																								<span class="menu-text">Classmates</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</li>
																			<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																				<a href="javascript:;" class="menu-link menu-toggle">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Class</span>
																					<i class="menu-arrow"></i>
																				</a>
																				<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																					<ul class="menu-subnav">
																						<li class="menu-item" aria-haspopup="true">
																							<a href="custom/apps/education/class/dashboard.html" class="menu-link">
																								<i class="menu-bullet menu-bullet-line">
																									<span></span>
																								</i>
																								<span class="menu-text">Dashboard</span>
																							</a>
																						</li>
																					</ul>
																				</div>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link menu-toggle">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/Communication/Add-user.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<polygon points="0 0 24 0 24 24 0 24" />
																					<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																					<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">eCommerce</span>
																		<i class="menu-arrow"></i>
																	</a>
																	<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																		<ul class="menu-subnav">
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/ecommerce/dashboard.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Dashboard 1</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/ecommerce/dashboard-2.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Dashboard 2</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/ecommerce/dashboard-3.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Dashboard 3</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/ecommerce/dashboard-4.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Dashboard 4</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/ecommerce/dashboard-5.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Dashboard 5</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/ecommerce/my-orders.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">My Orders</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/ecommerce/order-details.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Order Details</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/ecommerce/shopping-cart.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Shopping Cart</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/apps/ecommerce/checkout.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-dot">
																						<span></span>
																					</i>
																					<span class="menu-text">Checkout</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="custom/apps/inbox.html" class="menu-link">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:<?php echo base_url(); ?>assets/media/svg/icons/General/Shield-check.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
																					<path d="M11.1750002,14.75 C10.9354169,14.75 10.6958335,14.6541667 10.5041669,14.4625 L8.58750019,12.5458333 C8.20416686,12.1625 8.20416686,11.5875 8.58750019,11.2041667 C8.97083352,10.8208333 9.59375019,10.8208333 9.92916686,11.2041667 L11.1750002,12.45 L14.3375002,9.2875 C14.7208335,8.90416667 15.2958335,8.90416667 15.6791669,9.2875 C16.0625002,9.67083333 16.0625002,10.2458333 15.6791669,10.6291667 L11.8458335,14.4625 C11.6541669,14.6541667 11.4145835,14.75 11.1750002,14.75 Z" fill="#000000" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Inbox</span>
																		<span class="menu-label">
																			<span class="label label-danger label-inline">new</span>
																		</span>
																	</a>
																</li>
															</ul>
														</div>
													</li>
													<li class="menu-item menu-item-submenu" data-menu-toggle="click" aria-haspopup="true">
														<a href="javascript:;" class="menu-link menu-toggle">
															<span class="menu-text">Pages</span>
															<span class="menu-desc"></span>
															<i class="menu-arrow"></i>
														</a>
														<div class="menu-submenu menu-submenu-fixed menu-submenu-center" style="width:1150px">
															<div class="menu-subnav">
																<ul class="menu-content">
																	<li class="menu-item">
																		<h3 class="menu-heading menu-toggle">
																			<span class="menu-text">Pricing Tables</span>
																			<i class="menu-arrow"></i>
																		</h3>
																		<ul class="menu-inner">
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/pricing/pricing-1.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Pricing Tables 1</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/pricing/pricing-2.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Pricing Tables 2</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/pricing/pricing-3.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Pricing Tables 3</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/pricing/pricing-4.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Pricing Tables 4</span>
																				</a>
																			</li>
																		</ul>
																	</li>
																	<li class="menu-item">
																		<h3 class="menu-heading menu-toggle">
																			<span class="menu-text">Wizards</span>
																			<i class="menu-arrow"></i>
																		</h3>
																		<ul class="menu-inner">
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/wizard/wizard-1.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Wizard 1</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/wizard/wizard-2.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Wizard 2</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/wizard/wizard-3.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Wizard 3</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/wizard/wizard-4.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Wizard 4</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/wizard/wizard-5.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Wizard 5</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/wizard/wizard-6.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Wizard 6</span>
																				</a>
																			</li>
																		</ul>
																	</li>
																	<li class="menu-item">
																		<h3 class="menu-heading menu-toggle">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Invoices</span>
																			<i class="menu-arrow"></i>
																		</h3>
																		<ul class="menu-inner">
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/invoices/invoice-1.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Invoice 1</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/invoices/invoice-2.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Invoice 2</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/invoices/invoice-3.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Invoice 3</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/invoices/invoice-4.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Invoice 4</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/invoices/invoice-5.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Invoice 5</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/invoices/invoice-6.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Invoice 6</span>
																				</a>
																			</li>
																		</ul>
																	</li>
																	<li class="menu-item">
																		<h3 class="menu-heading menu-toggle">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Login</span>
																			<i class="menu-arrow"></i>
																		</h3>
																		<ul class="menu-inner">
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/login/login-1.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Login 1</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/login/login-2.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Login 2</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/login/login-3/signup.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Login 3</span>
																					<span class="menu-label">
																						<span class="label label-inline label-info">Wizard</span>
																					</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/login/login-4/signup.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Login 4</span>
																					<span class="menu-label">
																						<span class="label label-inline label-info">Wizard</span>
																					</span>
																				</a>
																			</li>
																		</ul>
																	</li>
																	<li class="menu-item">
																		<h3 class="menu-heading menu-toggle">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Classic Login</span>
																			<i class="menu-arrow"></i>
																		</h3>
																		<ul class="menu-inner">
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/login/classic/login-1.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Login 1</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/login/classic/login-2.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Login 2</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/login/classic/login-3.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Login 3</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/login/classic/login-4.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Login 4</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/login/classic/login-5.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Login 5</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/login/classic/login-6.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Login 6</span>
																				</a>
																			</li>
																		</ul>
																	</li>
																	<li class="menu-item">
																		<h3 class="menu-heading menu-toggle">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Error Pages</span>
																			<i class="menu-arrow"></i>
																		</h3>
																		<ul class="menu-inner">
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/error/error-1.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Error 1</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/error/error-2.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Error 2</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/error/error-3.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Error 3</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/error/error-4.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Error 4</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/error/error-5.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Error 5</span>
																				</a>
																			</li>
																			<li class="menu-item" aria-haspopup="true">
																				<a href="custom/pages/error/error-6.html" class="menu-link">
																					<i class="menu-bullet menu-bullet-line">
																						<span></span>
																					</i>
																					<span class="menu-text">Error 6</span>
																				</a>
																			</li>
																		</ul>
																	</li>
																</ul>
															</div>
														</div>
													</li>
												</ul>
												<!--end::Nav-->
											</div>
											<!--end::Menu-->
										</div>
										<!--begin::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane p-5 p-lg-0 justify-content-between" id="kt_header_tab_2">
											<div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center">
												<!--begin::Actions-->
												<a href="#" class="btn btn-light-success font-weight-bold mr-3 my-2 my-lg-0">Latest Orders</a>
												<a href="#" class="btn btn-light-primary font-weight-bold my-2 my-lg-0">Customer Service</a>
												<!--end::Actions-->
											</div>
											<div class="d-flex align-items-center">
												<!--begin::Actions-->
												<a href="#" class="btn btn-danger font-weight-bold my-2 my-lg-0">Generate Reports</a>
												<!--end::Actions-->
											</div>
										</div>
										<!--begin::Tab Pane-->
									</div>
									<!--end::Tab Content-->
								</div>
								<!--end::Header Menu Wrapper-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Bottom-->
					</div>