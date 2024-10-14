<!-- Bagian atas -->

<!-- main-content -->
<div class="main-content app-content">

<!-- container -->
<div class="main-container container-fluid">

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
						<div>
							<h1 class="content-title mb-2">Selamat datang di Website!</h1>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a   href="javascript:void(0);">Dashboard</a></li>
									<li class="breadcrumb-item active" aria-current="page">Home</li>
								</ol>
							</nav>
						</div>
					</div>
					<!-- /breadcrumb -->

    <!-- main-content-body -->
    <div class="main-content-body">

        <!-- Navigasi -->
						 <!-- navigasi -->
				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="card custom-card" id="basic">
							<div class="p-3 bg-light mb-3">
								<nav class="nav main-nav flex-column flex-md-row justify-content-center">
								    <a class="nav-link active"   href="#home">Home</a>
								 	<a class="nav-link active"   href="./news.php">News</a>
									<a class="nav-link"   href="javascript:void(0);">Pages</a>
									<a class="nav-link"   href="javascript:void(0);">Custom</a>
								</nav>
							</div>
						</div>
					</div>
			   	</div>
        <!--/navigasi  -->
								

        <!-- row -->
        <!-- row 1 -->
        <div class="row row-sm " id="home">
            <!-- Foto/video -->
           <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
               <div class="card overflow-hidden">
                    <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                       <div class="d-flex justify-content-between">
                            <h4 id="home" class="card-title mg-b-10">Intro</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                    </div>
                    <div class="card-body pd-y-7">
                        <video width="600" controls>
                            <source src="../assets/vid/intro.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
                                       
            <!-- Agenda -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
              <div class="card overflow-hidden">
                <div class="card-body pb-3">
                    <div class="d-flex justify-content-between">
                      <h4 class="card-title mg-b-10">Agenda &amp; task</h4>
                      <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                     <p class="tx-12 text-muted mb-3">Data pembelajaran dan project tugas produktif yang telah dilaksanakan</a></p>
                       <div class="table-responsive mb-0 projects-stat tx-14">
                            <table class="table table-hover table-bordered mb-0 text-md-nowrap text-lg-nowrap text-xl-nowrap  ">
                                <thead>
                                    <tr>
                                        <th>Pembelajaran &amp; project</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="project-names">
                                                <h6 class="bg-primary-transparent text-primary d-inline-block me-2 text-center">W</h6>
                                                <p class="d-inline-block font-weight-semibold mb-0">Website Pribadi</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="badge bg-success">Completed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="project-names">
                                                <h6 class="bg-pink-transparent text-pink d-inline-block text-center me-2">H</h6>
                                                <p class="d-inline-block font-weight-semibold mb-0">HTML</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="badge bg-teal">On-Going</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="project-names">
                                                <h6 class="bg-success-transparent text-success d-inline-block me-2 text-center">P</h6>
                                                <p class="d-inline-block font-weight-semibold mb-0">PHP</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="badge bg-warning">Pending</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="project-names">
                                                <h6 class="bg-purple-transparent text-purple d-inline-block me-2 text-center">J</h6>
                                                <p class="d-inline-block font-weight-semibold mb-0">Javascript</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="badge bg-warning">Pending</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="project-names">
                                                <h6 class="bg-danger-transparent text-danger d-inline-block me-2 text-center">L</h6>
                                                <p class="d-inline-block font-weight-semibold mb-0">Laravel 9 10 11</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="badge bg-success">Completed</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row 1-->



    </div>
    <!-- /main content -->
                                    
	
    
        <!-- row -->
        <div class="row row-sm">
            <div class="col-lg-6 col-xl-4 col-md-12 col-sm-12">
                <div class="card overflow-hidden latest-tasks">
                    <div class="">
                        <div class="d-flex justify-content-between ps-4 pt-4 pe-4">
                            <h4 class="card-title mg-b-10">Latest Task</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <div class="">
                            <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-bold" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" data-bs-toggle="tab" href="#tasktab-1" role="tab" aria-selected="false">
                                        Today
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tasktab-2" role="tab" aria-selected="false">
                                        Week
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tasktab-3" role="tab" aria-selected="true">
                                        Month
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body pt-3">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="tasktab-1" role="tabpanel">
                                <div class="">
                                    <div class="tasks">
                                        <div class=" task-line primary active">
                                            <a   href="javascript:void(0);" class="label">
                                                XML Import & Export
                                            </a>
                                            <div class="time">
                                                12:00 PM
                                            </div>
                                        </div>
                                        <span class="add-delete-task ">
                                            <a   href="javascript:void(0);" class="btn btn-link">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                                        </span>
                                        <div class="checkbox">
                                            <label class="check-box">
                                                <label class="ckbox"><input checked type="checkbox"><span></span></label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="tasks">
                                        <div class="task-line pink">
                                            <a   href="javascript:void(0);" class="label">
                                                Database Optimization
                                            </a>
                                            <div class="time">
                                                02:13 PM
                                            </div>
                                        </div>
                                        <span class="add-delete-task ">
                                            <a   href="javascript:void(0);" class="btn btn-link">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                                        </span>
                                        <div class="checkbox">
                                            <label class="check-box">
                                                <label class="ckbox"><input type="checkbox"><span></span></label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="tasks">
                                        <div class="task-line success">
                                            <a   href="javascript:void(0);" class="label">
                                                Create Wireframes
                                            </a>
                                            <div class="time">
                                                06:20 PM
                                            </div>
                                        </div>
                                        <span class="add-delete-task ">
                                            <a   href="javascript:void(0);" class="btn btn-link">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                                        </span>
                                        <div class="checkbox">
                                            <label class="check-box">
                                                <label class="ckbox"><input type="checkbox"><span></span></label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="tasks">
                                        <div class="task-line warning">
                                            <a   href="javascript:void(0);" class="label">
                                                Develop MVP
                                            </a>
                                            <div class="time">
                                                10: 00 PM
                                            </div>
                                        </div>
                                        <span class="add-delete-task ">
                                            <a   href="javascript:void(0);" class="btn btn-link">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                                        </span>
                                        <div class="checkbox">
                                            <label class="check-box">
                                                <label class="ckbox"><input type="checkbox"><span></span></label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="tasks">
                                        <div class="task-line teal">
                                            <a   href="javascript:void(0);" class="label">
                                                Design Ecommerce
                                            </a>
                                            <div class="time">
                                                10: 00 PM
                                            </div>
                                        </div>
                                        <span class="add-delete-task ">
                                            <a   href="javascript:void(0);" class="btn btn-link">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                                        </span>
                                        <div class="checkbox">
                                            <label class="check-box">
                                                <label class="ckbox"><input type="checkbox"><span></span></label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="tasks mb-0">
                                        <div class="task-line purple">
                                            <a   href="javascript:void(0);" class="label">
                                                Fix Validation Issues
                                            </a>
                                            <div class="time">
                                                12: 00 AM
                                            </div>
                                        </div>
                                        <span class="add-delete-task ">
                                            <a   href="javascript:void(0);" class="btn btn-link">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                                        </span>
                                        <div class="checkbox">
                                            <label class="check-box">
                                                <label class="ckbox"><input type="checkbox"><span></span></label>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tasktab-2" role="tabpanel">
                                <div class="">
                                    <div class="tasks">
                                        <div class=" task-line teal">
                                            <a   href="javascript:void(0);" class="label">
                                                Management meeting
                                            </a>
                                            <div class="time">
                                                06:30 AM
                                            </div>
                                        </div>
                                        <span class="add-delete-task ">
                                            <a   href="javascript:void(0);" class="btn btn-link">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                                        </span>
                                        <div class="checkbox">
                                            <label class="check-box">
                                                <label class="ckbox"><input type="checkbox"><span></span></label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="tasks">
                                        <div class="task-line danger">
                                            <a   href="javascript:void(0);" class="label">
                                                Connect API to pages
                                            </a>
                                            <div class="time">
                                                08:00 AM
                                            </div>
                                        </div>
                                        <span class="add-delete-task ">
                                            <a   href="javascript:void(0);" class="btn btn-link">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                                        </span>
                                        <div class="checkbox">
                                            <label class="check-box">
                                                <label class="ckbox"><input type="checkbox"><span></span></label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="tasks">
                                        <div class="task-line purple">
                                            <a   href="javascript:void(0);" class="label">
                                                Icon change in Redesign App
                                            </a>
                                            <div class="time">
                                                11:20 AM
                                            </div>
                                        </div>
                                        <span class="add-delete-task ">
                                            <a   href="javascript:void(0);" class="btn btn-link">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                                        </span>
                                        <div class="checkbox">
                                            <label class="check-box">
                                                <label class="ckbox"><input type="checkbox"><span></span></label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="tasks">
                                        <div class="task-line warning">
                                            <a   href="javascript:void(0);" class="label">
                                                Test new features in tablets
                                            </a>
                                            <div class="time">
                                                02: 00 PM
                                            </div>
                                        </div>
                                        <span class="add-delete-task ">
                                            <a   href="javascript:void(0);" class="btn btn-link">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                                        </span>
                                        <div class="checkbox">
                                            <label class="check-box">
                                                <label class="ckbox"><input type="checkbox"><span></span></label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="tasks">
                                        <div class="task-line success">
                                            <a   href="javascript:void(0);" class="label">
                                                Design Logo
                                            </a>
                                            <div class="time">
                                                04: 00 PM
                                            </div>
                                        </div>
                                        <span class="add-delete-task ">
                                            <a   href="javascript:void(0);" class="btn btn-link">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                                        </span>
                                        <div class="checkbox">
                                            <label class="check-box">
                                                <label class="ckbox"><input type="checkbox"><span></span></label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="tasks mb-0">
                                        <div class="task-line primary">
                                            <a   href="javascript:void(0);" class="label">
                                                Project Launch
                                            </a>
                                            <div class="time">
                                                06: 00 PM
                                            </div>
                                        </div>
                                        <span class="add-delete-task ">
                                            <a   href="javascript:void(0);" class="btn btn-link">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                                        </span>
                                        <div class="checkbox">
                                            <label class="check-box">
                                                <label class="ckbox"><input type="checkbox"><span></span></label>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tasktab-3" role="tabpanel">
                                <div class="">
                                    <div class="tasks">
                                        <div class=" task-line info">
                                            <a   href="javascript:void(0);" class="label">
                                                Design a Landing Page
                                            </a>
                                            <div class="time">
                                                06:12 AM
                                            </div>
                                        </div>
                                        <span class="add-delete-task ">
                                            <a   href="javascript:void(0);" class="btn btn-link">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                                        </span>
                                        <div class="checkbox">
                                            <label class="check-box">
                                                <label class="ckbox"><input type="checkbox"><span></span></label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="tasks">
                                        <div class="task-line danger">
                                            <a   href="javascript:void(0);" class="label">
                                                Food Delivery Mobile Application
                                            </a>
                                            <div class="time">
                                                3:00 PM
                                            </div>
                                        </div>
                                        <span class="add-delete-task ">
                                            <a   href="javascript:void(0);" class="btn btn-link">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                                        </span>
                                        <div class="checkbox">
                                            <label class="check-box">
                                                <label class="ckbox"><input type="checkbox"><span></span></label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="tasks">
                                        <div class="task-line warning">
                                            <a   href="javascript:void(0);" class="label">
                                                Export Database values
                                            </a>
                                            <div class="time">
                                                03:20 PM
                                            </div>
                                        </div>
                                        <span class="add-delete-task ">
                                            <a   href="javascript:void(0);" class="btn btn-link">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                                        </span>
                                        <div class="checkbox">
                                            <label class="check-box">
                                                <label class="ckbox"><input type="checkbox"><span></span></label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="tasks">
                                        <div class="task-line pink">
                                            <a   href="javascript:void(0);" class="label">
                                                Write Simple Python Script
                                            </a>
                                            <div class="time">
                                                04: 00 PM
                                            </div>
                                        </div>
                                        <span class="add-delete-task ">
                                            <a   href="javascript:void(0);" class="btn btn-link">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                                        </span>
                                        <div class="checkbox">
                                            <label class="check-box">
                                                <label class="ckbox"><input type="checkbox"><span></span></label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="tasks">
                                        <div class="task-line success">
                                            <a   href="javascript:void(0);" class="label">
                                                Write Simple Anugalr Program
                                            </a>
                                            <div class="time">
                                                05: 00 PM
                                            </div>
                                        </div>
                                        <span class="add-delete-task ">
                                            <a   href="javascript:void(0);" class="btn btn-link">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                                        </span>
                                        <div class="checkbox">
                                            <label class="check-box">
                                                <label class="ckbox"><input type="checkbox"><span></span></label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="tasks mb-0">
                                        <div class="task-line primary">
                                            <a   href="javascript:void(0);" class="label">
                                                Design PSD files
                                            </a>
                                            <div class="time">
                                                06: 00 PM
                                            </div>
                                        </div>
                                        <span class="add-delete-task ">
                                            <a   href="javascript:void(0);" class="btn btn-link">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-link"><i class="fa fa-trash"></i></a>
                                        </span>
                                        <div class="checkbox">
                                            <label class="check-box">
                                                <label class="ckbox"><input type="checkbox"><span></span></label>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-10 mt-2">Projects Workload</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <p class="tx-12 text-muted mb-0"> In the Project Workload report, their remaining assignments, completion dates, whether their work is at-risk. <a href="">Learn more</a></p>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div class="row justify-content-md-center">
                                <div class="col-sm-12">
                                    <div class="">
                                        <canvas id="chartDonut" class="ht-175 drop-shadow"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-3">
                            <div class="row ">
                                <div class="col-sm-8 ">
                                    <h5 class="mb-0 tx-15 d-flex"><span class="legend bg-primary-gradient brround"></span>40.32%</h6>
                                    <p class="text-muted  tx-13 mb-0">External</p>
                                </div>
                                <div class="col-sm-4 ">
                                    <span id="sparkel1">1,3,7,8,4,5,4,8,6</span>
                                </div>
                            </div>
                        </div>

                        <div class="pt-3">
                            <div class="row ">
                                <div class="col-sm-8 ">
                                    <h6 class="mb-0 tx-15 d-flex"><span class="legend bg-danger-gradient brround"></span>40.73%</h6>
                                    <p class="text-muted tx-13 mb-0 ">Internal</p>
                                </div>
                                <div class="col-sm-4 ">
                                    <span id="sparkel2">2,5,6,4,8,6,5,9,6</span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-3">
                            <div class="row ">
                                <div class="col-sm-8 ">
                                    <h6 class="mb-0 tx-15 d-flex"><span class="legend bg-success-gradient brround"></span>50.12%</h6>
                                    <p class="text-muted tx-13 mb-0">Other</p>
                                </div>
                                <div class="col-sm-4 ">
                                    <span id="sparkel3">2,5,6,4,8,6,5,9,6</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-4 col-md-12 col-sm-12">
                <div class="card card-dashboard-events">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-10">Upcoming Events</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <p class="tx-12 text-muted mb-0">It had the latest news and notes from the championship, while previewing the upcoming event.. <a href="">Learn more</a></p>
                    </div>
                    <div class="card-body">
                        <div class="list-group ">
                            <div class="list-group-item border-top-0">
                                <div class="event-indicator bg-primary-gradient"></div><label>Nov 20 <span>Tuesday</span></label>
                                <h6>PH World Mall Lantern Festival</h6>
                                <p><strong>8AM - 4PM</strong> Bay Area, San Francisco</p><small><span class="tx-danger">Sold Out</span> (3000 tickets sold)</small>
                            </div>
                            <div class="list-group-item">
                                <div class="event-indicator bg-danger-gradient"></div><label>Nov 23 <span>Friday</span></label>
                                <h6>Asia Pacific Generation Workshop</h6>
                                <p><strong>8AM - 5PM</strong> Singapore</p><small><span class="tx-warning">Sold Out Soon</span> (12 tickets left)</small>
                            </div>
                            <div class="list-group-item border-bottom-0">
                                <div class="event-indicator bg-info-gradient"></div><label>Nov 23 <span>Friday</span></label>
                                <h6>Korea Smart Device Trade Show</h6>
                                <p><strong>8AM - 5PM</strong> Singapore</p><small><span class="tx-success">Free Registration</span> (Limited seats only)</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->

        <!-- row -->
        <div class="row row-sm ">
            <div class="col-md-12 col-xl-12">
                <div class="card overflow-hidden review-project">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-10">All Projects</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <p class="tx-12 text-muted mb-3">A project is an activity to meet the creation of a unique product or service and thus activities that are undertaken to accomplish routine activities cannot be considered projects. <a href="">Learn more</a></p>
                        <div class="table-responsive mb-0">
                            <table class="table table-hover table-bordered mb-0 text-md-nowrap text-lg-nowrap text-xl-nowrap table-striped ">
                                <thead>
                                    <tr>
                                        <th>Project</th>
                                        <th>Team Members</th>
                                        <th>Categorie</th>
                                        <th>Created</th>
                                        <th>Status</th>
                                        <th>Deadline</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="project-contain">
                                                <h6 class="mb-1 tx-13">Angular Project</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="image-grouped"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/11.jpg"><img class="profile-img brround " alt="profile image" src="../assets/img/faces/12.jpg"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/2.jpg"></div>
                                        </td>
                                        <td>Web Design</td>
                                        <td>01 Jan 2020</td>
                                        <td><span class="badge bg-primary-gradient">Ongoing</span></td>
                                        <td>15 March 2020</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="project-contain">
                                                <h6 class="mb-1 tx-13">PHP Project</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="image-grouped"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/16.jpg"><img class="profile-img brround " alt="profile image" src="../assets/img/faces/8.jpg"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/7.jpg"></div>
                                        </td>
                                        <td>Web Development</td>
                                        <td>03 March 2020</td>
                                        <td><span class="badge bg-success-gradient">Ongoing</span></td>
                                        <td>15 Jun 2020</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="project-contain">
                                                <h6 class="mb-1 tx-13">Python</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="image-grouped"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/3.jpg"><img class="profile-img brround " alt="profile image" src="../assets/img/faces/12.jpg"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/15.jpg"></div>
                                        </td>
                                        <td>Web Development</td>
                                        <td>15 March 2020</td>
                                        <td><span class="badge bg-danger-gradient">Pending</span></td>
                                        <td>15 March 2020</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="project-contain">
                                                <h6 class="mb-1 tx-13">Android App</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="image-grouped"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/7.jpg"><img class="profile-img brround " alt="profile image" src="../assets/img/faces/6.jpg"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/16.jpg"></div>
                                        </td>
                                        <td>Android</td>
                                        <td>15 March 2020</td>
                                        <td><span class="badge bg-success-gradient">Ongoing</span></td>
                                        <td>15 March 2020</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="project-contain">
                                                <h6 class="mb-1 tx-13">Mobile Application</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="image-grouped"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/8.jpg"><img class="profile-img brround " alt="profile image" src="../assets/img/faces/11.jpg"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/15.jpg"></div>
                                        </td>
                                        <td>Android</td>
                                        <td>15 March 2020</td>
                                        <td><span class="badge bg-pink-gradient">Ongoing</span></td>
                                        <td>15 March 2020</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->

        <!-- row -->
        <div class="row row-sm ">
            <div class="col-lg-12 col-xl-4 col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 pt-4">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-10">Top Ongoing Projects</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <p class="tx-12 text-muted mb-0">Project Description is a formally written declaration of the project and its idea and context . <a href="">Learn more</a></p>
                    </div>
                    <div class="card-body p-0 m-scroll mh-350 mt-2">
                        <div class="list-group projects-list">
                            <a   href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start border-top-0">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1 font-weight-semibold ">PSD Projects</h6>
                                    <small class="text-danger"><i class="fa fa-caret-down me-1"></i>5 days ago</small>
                                </div>
                                <p class="mb-0 text-muted mb-0 tx-12">Started:17-02-2020</p>
                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</small>
                            </a>
                            <a   href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1 font-weight-semibold">Wordpress Projects</h6>
                                    <small class="text-success"><i class="fa fa-caret-up me-1"></i>2 days ago</small>
                                </div>
                                <p class="mb-0 text-muted mb-0 tx-12">Started:15-02-2020</p>
                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</small>
                            </a>
                            <a   href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1 font-weight-semibold">HTML &amp; CSS3 Projects</h6>
                                    <small class="text-danger"><i class="fa fa-caret-down me-1"></i>1 days ago</small>
                                </div>
                                <p class="mb-0 text-muted mb-0 tx-12">Started:26-02-2020</p>
                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</small>
                            </a>
                            <a   href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1 font-weight-semibold">HTML &amp; CSS3 Projects</h6>
                                    <small class="text-danger"><i class="fa fa-caret-down me-1"></i>1 days ago</small>
                                </div>
                                <p class="mb-0 text-muted mb-0 tx-12">Started:26-02-2020</p>
                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card overflow-hidden ">
                    <div class="card-header pb-0 pt-4">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-10 ">Activity</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <p class="tx-12 text-muted mb-0">An activity is a scheduled phase in a project plan with a distinct beginning and end. <a href="">Learn more</a></p>
                    </div>
                    <div class="card-body p-0">
                        <div class="activity Activity-scroll">
                            <div class="activity-list">
                                <img src="../assets/img/faces/6.jpg" alt="" class="img-activity">
                                <div class="time-activity ">
                                    <div class="item-activity">
                                    <p class="mb-0"><span class="h6 me-1">Adam Berry</span><span class="text-muted tx-13"> Add a new projects</span> <span class="h6 ms-1 added-project"> AngularJS Template</span></p><small class="text-muted ">30 mins ago</small> </div>
                                </div>
                            <img src="../assets/img/faces/9.jpg" alt="" class="img-activity">
                                <div class="time-activity">
                                    <div class="item-activity">
                                    <p class="mb-0"><span class="h6 me-1">Irene Hunter</span> <span class="text-muted tx-13"> Add a new projects</span> <span class="h6 ms-1 added-project text-danger">Free HTML Template</span></p><small class="text-muted ">1 days ago</small> </div>
                                </div> <img src="../assets/img/faces/3.jpg" alt="" class="img-activity">
                                <div class="time-activity">
                                    <div class="item-activity">
                                    <p class="mb-0"><span class="h6 me-1">John Payne</span> <span class="text-muted tx-13"> Add a new projects</span> <span class="h6 ms-1 added-project text-success">Free PSD Template</span></p><small class="text-muted ">3 days ago</small> </div>
                                </div> <img src="../assets/img/faces/4.jpg" alt="" class="img-activity">
                                <div class="time-activity">
                                    <div class="item-activity ">
                                    <p class="mb-0"><span class="h6 me-1">Julia Hardacre</span> <span class="text-muted tx-13"> Add a new projects</span> <span class="h6 ms-1 added-project text-warning">Free UI Template</span></p><small class="text-muted ">5 days ago</small> </div>
                                </div> <img src="../assets/img/faces/5.jpg" alt="" class="img-activity">
                                <div class="time-activity">
                                    <div class="item-activity">
                                    <p class="mb-0"><span class="h6 me-1">Adam Berry</span> <span class="text-muted tx-13"> Add a new projects</span> <span class="h6 ms-1 added-project text-pink"> AngularJS Template</span></p><small class="text-muted ">30 mins ago</small> </div>
                                </div> <img src="../assets/img/faces/6.jpg" alt="" class="img-activity">
                                <div class="time-activity">
                                    <div class="item-activity">
                                    <p class="mb-0"><span class="h6 me-1">Irene Hunter</span> <span class="text-muted tx-13"> Add a new projects</span> <span class="h6 ms-1 added-project text-purple">Free HTML Template</span></p><small class="text-muted ">1 days ago</small> </div>
                                </div> <img src="../assets/img/faces/16.jpg" alt="" class="img-activity">
                                <div class="time-activity">
                                    <div class="item-activity">
                                    <p class="mb-0"><span class="h6 me-1">John Payne</span><span class="text-muted tx-13"> Add a new projects</span> <span class="h6 ms-1 added-project text-success">Free PSD Template</span></p><small class="text-muted ">3 days ago</small> </div>
                                </div> <img src="../assets/img/faces/10.jpg" alt="" class="img-activity">
                                <div class="time-activity mb-0">
                                    <div class="item-activity mb-0">
                                    <p class="mb-0"><span class="h6 me-1">Julia Hardacre</span><span class="text-muted tx-13"> Add a new projects</span><span class="h6 ms-1 added-project">Free UI Template</span></p><small class="text-muted ">5 days ago</small> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-header pt-4 pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-10 ">Task Statistics</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <p class="tx-12 text-muted mb-0">The Statistics You can also summarize your data in a graphical display, such as histograms <a href="">Learn more</a> </p>
                    </div>
                    <div class="p-4">
                        <div class="">
                            <div class="row">
                                <div class="col-md-6 col-6 text-center">
                                    <div class="task-box primary mb-0">
                                        <p class="mb-0 tx-12">Total Tasks</p>
                                        <h3 class="mb-0">385</h3>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6 text-center">
                                    <div class="task-box danger  mb-0">
                                        <p class="mb-0 tx-12">Overdue Tasks</p>
                                        <h3 class="mb-0">19</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="task-stat pb-0">
                        <div class="d-flex tasks">
                            <div class="mb-0">
                                <div class="h6 fs-15 mb-0"><i class="far fa-dot-circle text-primary me-2"></i>Completed Tasks</div>
                                <span class="text-muted tx-11 ms-4">8:00am - 10:30am</span>
                            </div>
                            <span class="float-end ms-auto">135</span>
                        </div>
                        <div class="d-flex tasks">
                            <div class="mb-0">
                                <div class="h6 fs-15 mb-0"><i class="far fa-dot-circle text-pink me-2"></i>Inprogress Tasks</div>
                                <span class="text-muted tx-11 ms-4">8:00am - 10:30am</span>
                            </div>
                            <span class="float-end ms-auto">75</span>
                        </div>
                        <div class="d-flex tasks">
                            <div class="mb-0">
                                <div class="h6 fs-15 mb-0"><i class="far fa-dot-circle text-success me-2"></i>On Hold Tasks</div>
                                <span class="text-muted tx-11 ms-4">8:00am - 10:30am</span>
                            </div>
                            <span class="float-end ms-auto">23</span>
                        </div>
                        <div class="d-flex tasks mb-0 border-bottom-0">
                            <div class="mb-0">
                                <div class="h6 fs-15 mb-0"><i class="far fa-dot-circle text-purple me-2"></i>Pending Tasks</div>
                                <span class="text-muted tx-11 ms-4">8:00am - 10:30am</span>
                            </div>
                            <span class="float-end ms-auto">1</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /main-content -->