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
						<li>
							<a href="auditor-dashboard.php">
								<span class="label">Dashboard</span>
							</a>
						</li>
						<li>
							<a href="auditor-audit.php">
								<span class="label">Audit</span>
							</a>
						</li>
						<li class="current">
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
				<div class="box-container">
					<div class="search-filter">
						<form action="#" method="get">
							<p>
								<label>Search</label>
								<input type="text" name="input[]" placeholder="Type a keyword..">
							</p>
							<div class="row">
								<div class="column one-half">
									<p>
										<label>Tahun Audit</label>
										<span class="custom-combobox">
											<select name="input[]">
												<option value="0">Select Tahun</option>
											</select>
										</span>
									</p>
									<p>
										<label>Temuan</label>
										<span class="custom-combobox">
											<select name="input[]">
												<option value="0">Select Temuan</option>
											</select>
										</span>
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Unit</label>
										<span class="custom-combobox">
											<select name="input[]">
												<option value="0">Select Unit</option>
											</select>
										</span>
									</p>
									<p>
										<label>Jenis Temuan</label>
										<span class="custom-combobox">
											<select name="input[]">
												<option value="0">Select Jenis Temuan</option>
											</select>
										</span>
									</p>
								</div>
							</div>
							<p align="right">
								<input type="submit" value="Load Data" class="button button-primary">
							</p>
						</form>
					</div>
				</div>
				<div class="box-container">
					<div class="page-sub-heading">
						<h2>Audit History List</h2>
					</div>
					<div class="table-component">
						<table class="bordered">
							<thead>
								<tr>
									<th>Periode</th>
									<th>Unit</th>
									<th>Auditor</th>
									<th>Temuan</th>
									<th>Perbaikan</th>
									<th>Jenis Temuan</th>
									<th>&nbsp;</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="has-rowspan" rowspan="4"><strong>2014</strong></td>
									<td class="has-rowspan-sub" rowspan="2">DMD</td>
									<td class="align-top" rowspan="2">
										<span>
											<strong>Lead Auditor</strong><br/>
											Louis Van Gaal
										</span>
										<br/><br/>
										<span>
											<strong>Assistant Auditor</strong><br/>
											Ryan Giggs
										</span>
									</td>
									<td>1. Lorem ipsum dolor sit amet.</td>
									<td>Lorem ipsum dolor sit amet.</td>
									<td>Oportunity for Improvement</td>
									<td rowspan="2"><a href="auditor-history-detail.php" class="icon icon-ami-arrow-right"></a></td>
								</tr>
								<tr>
									<td>2. Lorem ipsum dolor sit amet.</td>
									<td>Lorem ipsum dolor sit amet.</td>
									<td>Oportunity for Improvement</td>
								</tr>
								<tr>
									<td class="has-rowspan-sub" rowspan="2">QMC</td>
									<td class="align-top" rowspan="2">
										<span>
											<strong>Lead Auditor</strong><br/>
											Louis Van Gaal
										</span>
										<br/><br/>
										<span>
											<strong>Assistant Auditor</strong><br/>
											Ryan Giggs
										</span>
									</td>
									<td>1. Lorem ipsum dolor sit amet.</td>
									<td>Lorem ipsum dolor sit amet.</td>
									<td>Oportunity for Improvement</td>
									<td rowspan="2"><a href="auditor-history-detail.php" class="icon icon-ami-arrow-right"></a></td>
								</tr>
								<tr>
									<td>2. Lorem ipsum dolor sit amet.</td>
									<td>Lorem ipsum dolor sit amet.</td>
									<td>Oportunity for Improvement</td>
								</tr>
							</tbody>
						</table>
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
		</div><!-- #main-content -->

	</div><!-- #site-content -->

<?php include( 'footer.php' ); ?>