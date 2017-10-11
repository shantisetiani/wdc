<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">

		<section class="user-content">
			<div class="container">
				<div class="row">
					<div class="column two-thirds">
						<section class="user-profile">
							<div class="thumbnail">
								<span class="avatar">
									<img src="images/statics/avatar.png" alt="">
								</span>
							</div>
							<div class="details">
								<div class="field">
									<h2 class="student-name">User Nicename</h2>
									<span class="position">Lorem ipsum dolor sit amet.</span>
								</div>
							</div>
						</section>
					</div>
					<div class="column one-third opposite">
						<section class="user-role">
							<div class="wrap">
								<div class="field">
									<span class="label">Login As</span>
									<span class="component">
										<span class="login-role" id="login-role">
											<select name="login-role">
												<option value="1">Auditor</option>
											</select>
										</span>
									</span>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section><!-- .user-content -->

		<section class="body-navigation on-pre-content">
			<div class="nav-head">
				<div class="container">
					<ul>
						<li class="current">
							<a href="auditor-dashboard.php">
								<span class="label">Dashboard</span>
							</a>
						</li>
						<li>
							<a href="auditor-audit.php">
								<span class="label">Audit</span>
							</a>
						</li>
						<li>
							<a href="auditor-history.php">
								<span class="label">History</span>
							</a>
						</li>
						<li>
							<a href="auditor-schedule.php">
								<span class="label">Schedule</span>
							</a>
						</li>
						<li>
							<a href="auditor-questionnaire.php">
								<span class="label">Questionnaire Score</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section><!-- .body-navigation -->

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="widget-parent" id="widget-parent">
					<div class="row">
						<div class="column one-half">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Action</span>
										</span>
										<span class="opposite-link">
											<a href="auditor-action-list.php #target-id" class="fancybox-trigger fancybox.ajax">View All</a>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-table">
										<table class="zebra bordered">
											<thead>
												<tr>
													<th>Document</th>
													<th>&nbsp;</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Lorem ipsum dolor sit amet.</td>
													<td width="1"><a href="#" class="icon icon-download has-tooltip" title="Download File"></a></td>
												</tr>
												<tr>
													<td>Lorem ipsum dolor sit amet.</td>
													<td><a href="#" class="icon icon-download has-tooltip" title="Download File"></a></td>
												</tr>
												<tr>
													<td>Lorem ipsum dolor sit amet.</td>
													<td><a href="#" class="icon icon-download has-tooltip" title="Download File"></a></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="column one-half">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Audit Schedule</span>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-audit-schedule">
										<div class="group-item">
											<div class="rows">
												<div class="item date">
													17 November 2014
												</div>
												<div class="item time">
													14.00 - 17.00
												</div>
												<div class="item description">
													<span class="title">Audit Quarter 1</span>
													<span class="location">M2A - Syahdan</span>
												</div>
											</div>
											<div class="rows">
												<div class="item date">
													17 November 2014
												</div>
												<div class="item time">
													14.00 - 17.00
												</div>
												<div class="item description">
													<span class="title">Audit Quarter 1</span>
													<span class="location">M2A - Syahdan</span>
												</div>
											</div>
										</div>
										<div class="pagination">
											<span class="page-display">Page 7 of 10</span>
											<span class="page-number">
												<a href="#" class="item">1</a>
												<a href="#" class="item">&laquo;</a>
												<a href="#" class="item">5</a>
												<a href="#" class="item">6</a>
												<span class="item current">7</span>
												<a href="#" class="item">8</a>
												<a href="#" class="item">9</a>
												<a href="#" class="item">&raquo;</a>
												<a href="#" class="item">10</a>
											</span>
											<span class="page-button">
												<a href="#" class="prev"></a>
												<a href="#" class="next"></a>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="column">
							<div class="widget auto-height">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Audit Schedule Verificator</span>
										</span>
										<span class="opposite-link">
											<a href="auditor-audit-schedule.php">View All</a>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-table has-action">
										<table class="zebra bordered">
											<thead>
												<tr>
													<th>&nbsp;</th>
													<th>Date</th>
													<th>Time</th>
													<th>Unit</th>
													<th>Auditor</th>
													<th>Auditte</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<span class="custom-checkbox">
															<input type="checkbox" name="input[]">
														</span>
													</td>
													<td>22 Desember 2014</td>
													<td>14.00 - 17.00</td>
													<td>DMD</td>
													<td>
														Engkos Ahmad Kuncoro<br/>
														Danella Indriani
													</td>
													<td>
														Danu Widhyatmoko<br/>
														Rina Kartika
													</td>
													<td>
														<span class="group-item status">
															<span class="item">
																<i class="icon icon-ami-status-done"></i>
															</span>
															<span class="item">Done</span>
														</span>
													</td>
												</tr>
												<tr>
													<td>
														<span class="custom-checkbox">
															<input type="checkbox" name="input[]">
														</span>
													</td>
													<td>22 Desember 2014</td>
													<td>14.00 - 17.00</td>
													<td>DMD</td>
													<td>
														Engkos Ahmad Kuncoro<br/>
														Danella Indriani
													</td>
													<td>
														Danu Widhyatmoko<br/>
														Rina Kartika
													</td>
													<td>
														<span class="group-item status">
															<span class="item">
																<i class="icon icon-ami-status-awaiting"></i>
															</span>
															<span class="item">Awaiting Information</span>
														</span>
													</td>
												</tr>
												<tr>
													<td>
														<span class="custom-checkbox">
															<input type="checkbox" name="input[]">
														</span>
													</td>
													<td>22 Desember 2014</td>
													<td>14.00 - 17.00</td>
													<td>DMD</td>
													<td>
														Engkos Ahmad Kuncoro<br/>
														Danella Indriani
													</td>
													<td>
														Danu Widhyatmoko<br/>
														Rina Kartika
													</td>
													<td>
														<span class="group-item status">
															<span class="item">
																<i class="icon icon-ami-status-cancel"></i>
															</span>
															<span class="item">Cancel</span>
														</span>
													</td>
												</tr>
												<tr>
													<td>
														<span class="custom-checkbox">
															<input type="checkbox" name="input[]">
														</span>
													</td>
													<td>22 Desember 2014</td>
													<td>14.00 - 17.00</td>
													<td>DMD</td>
													<td>
														Engkos Ahmad Kuncoro<br/>
														Danella Indriani
													</td>
													<td>
														Danu Widhyatmoko<br/>
														Rina Kartika
													</td>
													<td>
														<span class="group-item status">
															<span class="item">
																<i class="icon icon-ami-status-progress"></i>
															</span>
															<span class="item">On Progress</span>
														</span>
													</td>
												</tr>
											</tbody>
										</table>
										<p align="right">
											<a href="auditor-reschedule.php #target-id" class="button button-primary fancybox-trigger fancybox.ajax">Reschedule</a>
											<a href="#" class="button button-primary">Accept Selected</a>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="column">
							<div class="widget auto-height">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Recent Audit Finding</span>
										</span>
										<span class="opposite-link">
											<a href="auditor-audit-finding.php">View All</a>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-table">
										<table class="bordered">
											<thead>
												<tr>
													<th>Periode</th>
													<th>Unit</th>
													<th>Uraian Temuan</th>
													<th>Sebab</th>
													<th>Status</th>
													<th>&nbsp;</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td rowspan="2">2015</td>
													<td rowspan="2">DMD</td>
													<td>1. Lorem ipsum dolor sit amet.</td>
													<td>Lain-lain</td>
													<td>Verifikasi pada...</td>
													<td class="action">
														<a href="auditor-audit-form-edit.php #target-id-5" class="icon icon-edit has-tooltip fancybox-trigger fancybox.ajax" title="Edit Data"></a>
														<a href="#" class="icon icon-trash has-tooltip" title="Delete Data"></a>
													</td>
												</tr>
												<tr>
													<td>2. Lorem ipsum dolor sit amet.</td>
													<td>Lain-lain</td>
													<td>Sesuai</td>
													<td class="action">
														<a href="auditor-audit-form-edit.php #target-id-5" class="icon icon-edit has-tooltip fancybox-trigger fancybox.ajax" title="Edit Data"></a>
														<a href="#" class="icon icon-trash has-tooltip" title="Delete Data"></a>
													</td>
												</tr>
												<tr class="zebra-bg">
													<td>2014</td>
													<td>DMD</td>
													<td>1. Lorem ipsum dolor sit amet.</td>
													<td>Lain-lain</td>
													<td>Verifikasi pada...</td>
													<td class="action">
														<a href="auditor-audit-form-edit.php #target-id-5" class="icon icon-edit has-tooltip fancybox-trigger fancybox.ajax" title="Edit Data"></a>
														<a href="#" class="icon icon-trash has-tooltip" title="Delete Data"></a>
													</td>
												</tr>
												<tr>
													<td>2013</td>
													<td>DMD</td>
													<td>1. Lorem ipsum dolor sit amet.</td>
													<td>Lain-lain</td>
													<td>Verifikasi pada...</td>
													<td class="action">
														<a href="auditor-audit-form-edit.php #target-id-5" class="icon icon-edit has-tooltip fancybox-trigger fancybox.ajax" title="Edit Data"></a>
														<a href="#" class="icon icon-trash has-tooltip" title="Delete Data"></a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="column">
							<div class="widget auto-height">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Finding Verification</span>
										</span>
										<span class="opposite-link">
											<a href="auditor-finding-verification.php">View All</a>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-table">
										<table class="zebra bordered">
											<thead>
												<tr>
													<th>Unit</th>
													<th>No. Temuan</th>
													<th>No. Verifikasi</th>
													<th>Tgl. Verifikasi</th>
													<th>Auditee Notes</th>
													<th>Auditor Notes</th>
													<th>Admin Notes</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>DMD</td>
													<td>1</td>
													<td>1</td>
													<td>11 Desember 2014</td>
													<td>Lorem ipsum dolor sit amet.</td>
													<td>
														<span class="group-item notes">
															<span class="item description">
																Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
															</span>
															<span class="item action">
																<a href="auditor-audit-form-edit.php #target-id-4" class="icon icon-edit has-tooltip fancybox-trigger fancybox.ajax" title="Edit Data"></a>
															</span>
														</span>
													</td>
													<td>Lorem ipsum dolor sit amet.</td>
												</tr>
												<tr>
													<td>DMD</td>
													<td>1</td>
													<td>1</td>
													<td>11 Desember 2014</td>
													<td>Lorem ipsum dolor sit amet.</td>
													<td>
														<span class="group-item notes">
															<span class="item description">
																Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
															</span>
															<span class="item action">
																<a href="auditor-audit-form-edit.php #target-id-4" class="icon icon-edit has-tooltip fancybox-trigger fancybox.ajax" title="Edit Data"></a>
															</span>
														</span>
													</td>
													<td>Lorem ipsum dolor sit amet.</td>
												</tr>
												<tr>
													<td>DMD</td>
													<td>1</td>
													<td>1</td>
													<td>11 Desember 2014</td>
													<td>Lorem ipsum dolor sit amet.</td>
													<td>
														<span class="group-item notes">
															<span class="item description">
																Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
															</span>
															<span class="item action">
																<a href="auditor-audit-form-edit.php #target-id-4" class="icon icon-edit has-tooltip fancybox-trigger fancybox.ajax" title="Edit Data"></a>
															</span>
														</span>
													</td>
													<td>Lorem ipsum dolor sit amet.</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- #main-content -->

	</div><!-- #site-content -->

<?php include( 'footer.php' ); ?>