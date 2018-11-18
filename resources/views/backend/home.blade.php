@extends('backend.master')
@section('content')

@push('styles')
  <!-- Date Range Picker -->
  <link rel="stylesheet" type="text/css" href="backend/css/daterangepicker/daterangepicker.css" />
  <!-- Full Calendar Icons -->
  <link href="backend/css/fullcalendar/fullcalendar.css" rel="stylesheet">
@endpush
@push('scripts')
  <!-- ChartJS -->
  <script src="backend/js/chartjs/Chart.js"></script>
  <script src="backend/js/chartjs/utils.js"></script>
  <script src="backend/js/fullcalendar/fullcalendar.js"></script>
  <script src="backend/js/daterangepicker/daterangepicker.min.js"></script>
  <script src="backend/js/pages/dashboard.script.js"></script>
@endpush
<div class="row page-tilte align-items-center">
  <div class="col-md-auto">
    <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
    <h1 class="weight-300 h3 title">Dashboard</h1>
    <p class="text-muted m-0 desc">Let's get a quick overview</p>
  </div>
  <div class="col controls-wrapper mt-3 mt-md-0 d-none d-md-block ">
    <div class="controls d-flex justify-content-center justify-content-md-end">
      <input type="text" class="form-control date-rage width-260" >
      <button type="button" class="btn btn-danger">Apply Range</button>
      <span class="dropdown">
        <button type="button" id="downloadGrid" data-toggle="dropdown" class="btn btn-secondary py-1 px-2" ><span class="material-icons align-text-bottom">save_alt</span></button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="downloadGrid">
          <a class="dropdown-item" href="#">Save as PDF</a>
          <a class="dropdown-item" href="#">Save as Image</a>
          <a class="dropdown-item" href="#">Save as Word</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Export Excel</a>
        </div>
      </span>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-xl-3">
    <div class="card modal-open mb-sm-4 mb-3">
      <div class="card-body p-0">
        <div class="p-3 pl-4">
          <div class="media align-items-center">
            <div class="media-body">
              <small class="text-muted weight-300">Products Sales</small>
              <p class="m-0 weight-400">$ 45,867,210.00</p>
            </div>
            <span class="dropdown">
              <a href="#" class="text-muted" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="material-icons">more_vert</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Daily</a>
                <a class="dropdown-item" href="#">Weekly</a>
                <a class="dropdown-item" href="#">Monthly</a>
                <a class="dropdown-item" href="#">Yearly</a>
              </div>
            </span>
          </div>
        </div>
        <div>
          <canvas id="chart-2"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-3">
    <div class="card modal-open mb-sm-4 mb-3">
      <div class="card-body p-0">
        <div class="p-3 pl-4">
          <div class="media align-items-center">
            <div class="media-body">
              <small class="text-muted weight-300">WoW Revenue</small>
              <p class="m-0 weight-400">$ 91,271,543.00</p>
            </div>
            <span class="dropdown">
              <a href="#" class="text-muted" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="material-icons">more_vert</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Daily</a>
                <a class="dropdown-item" href="#">Weekly</a>
                <a class="dropdown-item" href="#">Monthly</a>
                <a class="dropdown-item" href="#">Yearly</a>
              </div>
            </span>
          </div>
        </div>
        <div>
          <canvas id="chart-3"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-3">
    <div class="card modal-open mb-sm-4 mb-3">
      <div class="card-body p-0">
        <div class="p-3 pl-4">
          <div class="media align-items-center">
            <div class="media-body">
              <small class="text-muted weight-300">All Transactions</small>
              <p class="m-0 weight-400">% 43.91 - 47.25</p>
            </div>
            <span class="dropdown">
              <a href="#" class="text-muted" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="material-icons">more_vert</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Daily</a>
                <a class="dropdown-item" href="#">Weekly</a>
                <a class="dropdown-item" href="#">Monthly</a>
                <a class="dropdown-item" href="#">Yearly</a>
              </div>
            </span>
          </div>
        </div>
        <div>
          <canvas id="chart-4"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-3">
    <div class="card modal-open mb-sm-4 mb-3">
      <div class="card-body p-0">
        <div class="p-3 pl-4">
          <div class="media align-items-center">
            <div class="media-body">
              <small class="text-muted weight-300">Churned Users</small>
              <p class="m-0 weight-400">59,182,921</p>
            </div>
            <span class="dropdown">
              <a href="#" class="text-muted" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="material-icons">more_vert</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Daily</a>
                <a class="dropdown-item" href="#">Weekly</a>
                <a class="dropdown-item" href="#">Monthly</a>
                <a class="dropdown-item" href="#">Yearly</a>
              </div>
            </span>
          </div>
        </div>
        <div>
          <canvas id="chart-5"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row ">
  <div class="col-lg-8 mb-4">
    <div class="card h-100">
      <div class="card-body  table-responsive p-0">
        <table class="table  m-0">
          <thead>
            <tr>
              <th scope="col" width="1" class="border-top-0">#</th>
              <th scope="col" class="border-top-0">Full Name</th>
              <th scope="col" class="border-top-0">Address</th>
              <th scope="col" class="border-top-0">Avg. Session</th>
              <th scope="col" class="border-top-0 text-right">Username</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=" align-middle text-center">
                <span class="user-initials bg-success-light25 text-success">MD</span>
              </td>
              <td class="align-middle">
                <small class="text-muted weight-300">Mark Doessy</small>
                <div><a href="#" class="weight-400">mark.doessy@gmail.com</a></div>
              </td>
              <td class="align-middle">
                <small class="text-muted weight-300">New York</small>
                <div class="weight-400"> 591  Valley Drive, Philadelphia</div>
              </td>
              <td class="align-middle"><span class="material-icons align-middle md-18 text-danger">expand_more</span> 32 Sec</td>
              <td class="align-middle text-right">@mdo</td>
            </tr>
            <tr>
              <td class=" align-middle text-center">
                <span class="user-initials bg-danger-light25 text-danger">AK</span>
              </td>
              <td class="align-middle">
                <small class="text-muted weight-300">Akshay Kumar</small>
                <div><a href="#" class="weight-400">akshay.azaste@gmail.com</a></div>
              </td>
              <td class="align-middle">
                <small class="text-muted weight-300">Philadelphia</small>
                <div class="weight-400"> 3318 Lilac Lane</div>
              </td>
              <td class="align-middle"><span class="material-icons align-middle md-18 text-success">expand_less</span> 12 Sec</td>
              <td class="align-middle text-right">@mdo</td>
            </tr>
            <tr>
              <td class=" align-middle text-center">
                <span class="user-initials bg-warning-light25 text-warning">GT</span>
              </td>
              <td class="align-middle">
                <small class="text-muted weight-300">Giselle K Trivett</small>
                <div><a href="#" class="weight-400">willy_dicki@yahoo.com</a></div>
              </td>
              <td class="align-middle">
                <small class="text-muted weight-300">Indianapolis</small>
                <div class="weight-400"> 2961 Clay Street,</div>
              </td>
              <td class="align-middle"><span class="material-icons align-middle md-18 text-success">expand_less</span> 5.4 Mins</td>
              <td class="align-middle text-right">@mdo</td>
            </tr>
            <tr>
              <td class=" align-middle text-center">
                <span class="user-initials bg-primary-light25 text-primary">DG</span>
              </td>
              <td class="align-middle">
                <small class="text-muted weight-300">David Gonsalves</small>
                <div><a href="#" class="weight-400">wilburn.magg@yahoo.com</a></div>
              </td>
              <td class="align-middle">
                <small class="text-muted weight-300">London</small>
                <div class="weight-400"> 9009  Lorem Drive, Elphia</div>
              </td>
              <td class="align-middle"><span class="material-icons align-middle md-18 text-success">expand_less</span> 1.3 Mins</td>
              <td class="align-middle text-right">@mdo</td>
            </tr>
            <tr>
              <td class=" align-middle text-center">
                <span class="user-initials bg-info-light25 text-info">AR</span>
              </td>
              <td class="align-middle">
                <small class="text-muted weight-300">Annie Roughton</small>
                <div><a href="#" class="weight-400">manu.akshay@love.com</a></div>
              </td>
              <td class="align-middle">
                <small class="text-muted weight-300">Green Bay</small>
                <div class="weight-400"> 848 Tail Ends Road</div>
              </td>
              <td class="align-middle"><span class="material-icons align-middle md-18 text-success">expand_less</span> 45 Sec</td>
              <td class="align-middle text-right">@mdo</td>
            </tr>
            <tr>
              <td class=" align-middle text-center">
                <span class="user-initials bg-danger-light25 text-danger">LE</span>
              </td>
              <td class="align-middle">
                <small class="text-muted weight-300">LoriH Edenfield</small>
                <div><a href="#" class="weight-400">haan_dougla10@hotmail.com</a></div>
              </td>
              <td class="align-middle">
                <small class="text-muted weight-300">Newark</small>
                <div class="weight-400"> 49 Spring Haven Trail</div>
              </td>
              <td class="align-middle"><span class="material-icons align-middle md-18 text-danger">expand_more</span> 2.32 Mins</td>
              <td class="align-middle text-right">@mdo</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-lg-4 mb-4">
    <div class="card h-100">
      <div class="card-header">Money Analysis</div>
      <div class="card-body ">
        <h3 class="weight-400 text-center mb-0"><span class="material-icons mr-2 text-success">arrow_upward</span>$73,239.00</h3>
        <p class="text-muted text-center">Lorem ipsum dolor sit amet</p>
        <canvas id="chart-doughnut" height="200"></canvas>
        <div class="row mt-4">
          <div class="col">
            <small>Europe</small>
            <div class="progress mt-1" style="height: 6px;">
              <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="col">
            <small>Asia</small>
            <div class="progress mt-1" style="height: 6px;">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="col">
            <small>Other</small>
            <div class="progress mt-1" style="height: 6px;">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-5">
    <div class="card mb-4">
      <div class="card-header">Tasks in progress</div>
      <div class="card-body">
        <p class="">Team Task Completed <small class="text-muted">75% completed</small></p>
        <div class="progress">
          <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="row mt-4 mb-2">
          <div class="col">
            <p class="">Loading Data <small class="text-muted">44%</small></p>
            <div class="progress">
              <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 45%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="col">
            <p class="">Upload Process <small class="text-muted">55%</small></p>
            <div class="progress">
              <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width: 55%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-lg-0 mb-4">
      <div class="card-header">Recent Activites</div>
      <div class="card-body">
        <ul class="list-unstyled recent-activites">
          <li>
            <span class="activity-icon border-primary"></span>
            <div class="media align-items-center">
              <div class="media-body">
                <h6 class="weight-400 mb-0">New task <a href="#" class="text-dark">#709875</a> has been created </h6>
                <small class="text-muted">by Akshay kumar on 23 sep 2018</small>
              </div>
              <div class="dropdown">
                <a href="#" class="text-muted" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="material-icons">more_vert</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <span class="activity-icon border-secondry"></span>
            <div class="media align-items-center">
              <div class="media-body">
                <h6 class="weight-400 mb-0">malesuada fames ac ante ipsum primis</h6>
                <small class="text-muted">by Akshay kumar on 23 sep 2018</small>
              </div>
              <div class="dropdown">
                <a href="#" class="text-muted" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="material-icons">more_vert</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <span class="activity-icon border-info"></span>
            <div class="media align-items-center">
              <div class="media-body">
                <h6 class="weight-400 mb-0">Phasellus vitae leo at sapien leo.</h6>
                <small class="text-muted">by Akshay kumar on 23 sep 2018</small>
              </div>
              <div class="dropdown">
                <a href="#" class="text-muted" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="material-icons">more_vert</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <span class="activity-icon border-warning"></span>
            <div class="media align-items-center">
              <div class="media-body">
                <h6 class="weight-400 mb-0">Vivamus rhoncus ullamcorper justo</h6>
                <small class="text-muted">by Akshay kumar on 23 sep 2018</small>
              </div>
              <div class="dropdown">
                <a href="#" class="text-muted" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="material-icons">more_vert</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <span class="activity-icon border-secondry"></span>
            <div class="media align-items-center">
              <div class="media-body">
                <h6 class="weight-400 mb-0">New task <a href="#" class="text-dark">#709875</a> has been created </h6>
                <small class="text-muted">by Akshay kumar on 23 sep 2018</small>
              </div>
              <div class="dropdown">
                <a href="#" class="text-muted" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="material-icons">more_vert</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <span class="activity-icon border-success"></span>
            <div class="media align-items-center">
              <div class="media-body">
                <h6 class="weight-400 mb-0">Sed id dictum augue. Cras ac</h6>
                <small class="text-muted">by Akshay kumar on 23 sep 2018</small>
              </div>
              <div class="dropdown">
                <a href="#" class="text-muted" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="material-icons">more_vert</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <span class="activity-icon border-danger"></span>
            <div class="media align-items-center">
              <div class="media-body">
                <h6 class="weight-400 mb-0">Donec accumsan eros tellus.</h6>
                <small class="text-muted">by Akshay kumar on 23 sep 2018</small>
              </div>
              <div class="dropdown">
                <a href="#" class="text-muted" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="material-icons">more_vert</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <span class="activity-icon border-secondry"></span>
            <div class="media align-items-center">
              <div class="media-body">
                <h6 class="weight-400 mb-0">malesuada fames ac ante ipsum.</h6>
                <small class="text-muted">by Akshay kumar on 23 sep 2018</small>
              </div>
              <div class="dropdown">
                <a href="#" class="text-muted" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="material-icons">more_vert</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-lg-7">
    <div class="card h-100">
      <div class="card-header p-0">
        <ul class="nav nav-tabs active-thik nav-primary border-0" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link px-4 py-3 active rounded-0" id="messgaes-tab" data-toggle="tab" href="#messgaes" role="tab" aria-controls="messgaes" aria-selected="true">Messgaes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-4 py-3 rounded-0" id="appointmenst-tab" data-toggle="tab" href="#appointmenst" role="tab" aria-controls="appointmenst" aria-selected="false">Appointmenst</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-4 py-3 rounded-0" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="other" aria-selected="false">Other Tab</a>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="messgaes" role="tabpanel" aria-labelledby="messgaes-tab">
            <div class="d-flex flex-column">
              <ul class="messgaes flex-fill mb-4">
                <li class="media">
                  <div class="mr-4"><img src="backend/images/avtar4.png" class="user-thumb"></div>
                  <div class="media-body messgae-bubble bg-warning-light25 ">
                    <h6 class="mt-0 weight-400">kevin Dossey</h6>
                    <small class="text-muted weight-300"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac.</small>
                  </div>
                </li>
                <li class="media flex-row-reverse">
                  <div class="ml-4"><img src="backend/images/avtar3.png" class="user-thumb"></div>
                  <div class="media-body from-you messgae-bubble bg-light ">
                    <h6 class="mt-0 weight-400">kevin Dossey</h6>
                    <small class="text-muted weight-300">Fusce condimentum nunc ac nisi vulputate fringilla.</small>
                  </div>
                </li>
                <li class="media">
                  <div class="mr-4"><img src="backend/images/avtar1.png" class="user-thumb"></div>
                  <div class="media-body messgae-bubble bg-warning-light25 ">
                    <h6 class="mt-0 weight-400">kevin Dossey</h6>
                    <small class="text-muted weight-300"> Sure. and Thanks !</small>
                  </div>
                </li>
                <li class="media">
                  <div class="mr-4"><img src="backend/images/avtar4.png" class="user-thumb"></div>
                  <div class="media-body messgae-bubble bg-warning-light25 ">
                    <h6 class="mt-0 weight-400">kevin Dossey</h6>
                    <small class="text-muted weight-300"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</small>
                  </div>
                </li>
                <li class="media flex-row-reverse">
                  <div class="ml-4"><img src="backend/images/avtar3.png" class="user-thumb"></div>
                  <div class="media-body from-you messgae-bubble bg-light ">
                    <h6 class="mt-0 weight-400">kevin Dossey</h6>
                    <small class="text-muted weight-300">Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</small>
                  </div>
                </li>
              </ul>
              <div>
                <hr class="dashed">
              </div>
              <div class="media align-items-center">
                <a href="#" class="material-icons md-18 text-muted mr-2">attach_file</a>
                <a href="#" class="material-icons md-18 text-muted mr-3">tag_faces</a>
                <div class="media-body">
                  <input type="text" name="" class="form-control border-0" placeholder="Reply Message">
                </div>
                <button class="btn btn-primary btn-sm">Send Message</button>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="appointmenst" role="tabpanel" aria-labelledby="appointmenst-tab">
            <div class="row">
              <div class="col">
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                  <button type="button" id="prev" class="btn btn-secondary">Prev</button>
                  <button type="button" id="next" class="btn btn-secondary ">Next</button>
                </div>
              </div>
              <div class="col text-center">
                <span class="text-nowrap lead">Jun 10 – 16, 2018</span>
              </div>
              <div class="col text-right">
                <button type="button" id="today" class="btn btn-sm btn-secondary">Today</button>
                <div class="btn-group btn-group-sm">
                  <button type="button" id="month-view" class="btn btn-danger">Month</button>
                  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" >
                    <a class="dropdown-item" id="month-view" >Month View</a>
                    <a class="dropdown-item" id="week-view" >Week View</a>
                    <a class="dropdown-item" id="day-view" >Day View</a>
                    <a class="dropdown-item" id="list-view" >List View</a>
                  </div>
                </div>
              </div>
            </div>
            <div id="calendar" class="mt-3"></div>
          </div>
          <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="other-tab">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis blandit odio at magna lacinia suscipit. Morbi convallis erat est, pellentesque rhoncus nisi tempus eget. Fusce nec tortor diam. Nullam varius scelerisque magna, non accumsan neque ultrices vel. Suspendisse potenti. Donec molestie nisi vel metus vulputate sollicitudin. Etiam suscipit, nisi vel blandit dapibus, eros lacus hendrerit neque, vitae aliquam augue elit id nisl. Proin faucibus urna in dui ullamcorper ultricies. Vivamus auctor non ex id pretium. Fusce eget tincidunt sem. Phasellus suscipit tellus ac leo gravida tempor. Curabitur ex erat, consectetur tincidunt feugiat et, dictum non massa.</p>
            <p>Donec hendrerit dolor at metus tincidunt sollicitudin. Aliquam et dolor id orci varius dictum. Nulla dolor turpis, finibus quis lorem nec, tristique aliquam enim. Duis consequat fringilla gravida. Etiam felis neque, interdum at aliquet scelerisque, efficitur sit amet quam. Curabitur nisl lacus, tincidunt sit amet gravida in, tincidunt non turpis. Ut consectetur ex sit amet fringilla viverra. Vivamus efficitur felis arcu, eget tincidunt augue tempor vitae. Nam finibus faucibus mattis. Nullam pellentesque egestas enim, in elementum ligula blandit eget. Sed malesuada nec ligula vitae mattis. Integer dictum consequat ligula et faucibus. Nunc elementum elementum blandit.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection