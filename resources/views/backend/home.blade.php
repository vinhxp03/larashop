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
  <script src="backend/js/pages/ecommerce-dashboard.js"></script>
@endpush
<div class="row page-tilte align-items-center">
  <div class="col-md-auto">
    <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
    <h1 class="weight-300 h3 title">eCommerce Dashboard</h1>
    <p class="text-muted m-0 desc">Get a quick overview of eCommerce</p>
  </div>
  <div class="col controls-wrapper mt-3 mt-md-0 d-none d-md-block ">
    <div class="controls d-flex justify-content-center justify-content-md-end">
      <input type="text" class="form-control date-rage width-260">
      <button type="button" class="btn btn-danger">Apply Range</button>
      <span class="dropdown">
        <button type="button" id="downloadGrid" data-toggle="dropdown" class="btn btn-secondary py-1 px-2"><span class="material-icons align-text-bottom">save_alt</span></button>
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
<div class="content">
  <div class="card mb-4">
    <div class="card-body  p-lg-4">
      <div class="row">
        <div class="col-md-6 col-lg-3  mb-4 mb-lg-0">
          <div class="media align-items-center">
            <span class="material-icons text-info mr-4 circle p-3 border border-info bg-info-light25">shopping_cart</span>
            <div class="media-body">
              <h4 class="weight-400 m-0">4982</h4>
              <small class="text-muted">Order Recevied</small>
            </div>
          </div>
          <div class="progress mt-3" style="height: 6px;">
            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3  mb-4 mb-lg-0">
          <div class="media align-items-center">
            <span class="material-icons text-danger mr-3 circle p-3 border border-danger bg-danger-light25">monetization_on</span>
            <div class="media-body">
              <h4 class="weight-400 m-0">$23,470.00</h4>
              <small class="text-muted">Total Earnings</small>
            </div>
          </div>
          <div class="progress mt-3" style="height: 6px;">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3  mb-4 mb-md-0 ">
          <div class="media align-items-center">
            <span class="material-icons text-success mr-3 circle p-3 border border-success bg-success-light25">person_add</span>
            <div class="media-body">
              <h4 class="weight-400 m-0">619</h4>
              <small class="text-muted">New Customers</small>
            </div>
          </div>
          <div class="progress mt-3" style="height: 6px;">
            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
          <div class="media align-items-center">
            <span class="material-icons text-warning mr-3 circle p-3 border border-warning bg-warning-light25">group</span>
            <div class="media-body">
              <h4 class="weight-400 m-0">395</h4>
              <small class="text-muted">Churned Users</small>
            </div>
          </div>
          <div class="progress mt-3" style="height: 6px;">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-8 mb-4">
      <div class="card  h-100">
        <div class="card-header py-3">Sales &amp; Users Report</div>
        <div class="card-body ">
          <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
            <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
              <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
            </div>
            <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
              <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
            </div>
          </div>
          <canvas id="canvas" width="452" height="226" class="chartjs-render-monitor" style="display: block; width: 452px; height: 226px;"></canvas>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card mb-4">
        <div class="card-body">
          <h6 class="weight-400 mb-3 border-left border-warning pl-2 border-width-medium">USA <span class="text-muted">Sales Report</span></h6>
          <div class="row">
            <div class="col">
              <small class="text-muted weight-300">This Week</small>
              <div class="weight-400">$28,343</div>
            </div>
            <div class="col">
              <small class="text-muted weight-300">This Week</small>
              <div class="weight-400">$28,343</div>
            </div>
            <div class="col">
              <small class="text-muted weight-300">This Week</small>
              <div class="weight-400">$28,343</div>
            </div>
          </div>
          <div class="progress mt-3" style="height: 6px;">
            <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-body">
          <h6 class="weight-400 mb-3 border-left border-primary pl-2 border-width-medium">USA <span class="text-muted">Sales Report</span></h6>
          <div class="row">
            <div class="col">
              <small class="text-muted weight-300">This Week</small>
              <div class="weight-400">$28,343</div>
            </div>
            <div class="col">
              <small class="text-muted weight-300">This Week</small>
              <div class="weight-400">$28,343</div>
            </div>
            <div class="col">
              <small class="text-muted weight-300">This Week</small>
              <div class="weight-400">$28,343</div>
            </div>
          </div>
          <div class="progress mt-3" style="height: 6px;">
            <div class="progress-bar bg-success" role="progressbar" style="width: 35%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h6 class="weight-400 mb-3 border-left border-danger pl-2 border-width-medium">USA <span class="text-muted">Sales Report</span></h6>
          <div class="row">
            <div class="col">
              <small class="text-muted weight-300">This Week</small>
              <div class="weight-400">$28,343</div>
            </div>
            <div class="col">
              <small class="text-muted weight-300">This Week</small>
              <div class="weight-400">$28,343</div>
            </div>
            <div class="col">
              <small class="text-muted weight-300">This Week</small>
              <div class="weight-400">$28,343</div>
            </div>
          </div>
          <div class="progress mt-3" style="height: 6px;">
            <div class="progress-bar bg-secondary" role="progressbar" style="width: 35%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="progress-bar " role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4 mb-4 mb-lg-0 ">
      <div class="card h-100 ">
        <div class="card-header">Order Status</div>
        <div class="card-body">
          <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
            <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
              <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
            </div>
            <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
              <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
            </div>
          </div>
          <h3 class="weight-400 text-center mb-0"><span class="material-icons mr-2 text-success">arrow_upward</span>73,239</h3>
          <p class="text-muted text-center">Lorem ipsum dolor sit amet</p>
          <canvas id="chart-area" height="142" width="194" class="chartjs-render-monitor" style="display: block; width: 194px; height: 142px;"></canvas>
        </div>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="card">
        <div class="card-body table-responsive p-0">
          <table class="table  m-0">
            <thead>
              <tr>
                <th scope="col" width="1" class="border-top-0">#</th>
                <th scope="col" class="border-top-0">Full Name</th>
                <th scope="col" class="border-top-0">Address</th>
                <th scope="col" class="border-top-0">Avg. Session</th>
                <th scope="col" class="border-top-0 text-right">Actions</th>
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
  </div>
</div>
@endsection