@extends('template.layaut')
@section("sectionGeneral","administrador")
@section('userName')
{{ session('firstName') }} {{ session('surName') }}
@endsection
@section("dashboard")
<li class="nav-item">
  <a href="{{url('admin/getall')}}" class="nav-link active">
    <i class="far fa-circle nav-icon"></i>
    <p>ver Usuarios</p>
  </a>
  <a href="{{url('admin/course')}}" class="nav-link active">
    <i class="far fa-circle nav-icon"></i>
    <p>ver Cursos</p>
  </a>
  <a href="{{url('admin/enrolled')}}" class="nav-link active">
    <i class="far fa-circle nav-icon"></i>
    <p>ver Matriculas</p>
  </a>
</li>
@endsection
@section("content")
<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-chart-pie mr-1"></i>
                Sales
              </h3>
              <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                  </li>
                </ul>
              </div>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content p-0">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart"
                     style="position: relative; height: 300px;">
                    <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>                         
                 </div>
                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                  <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>                         
                </div>  
              </div>
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- DIRECT CHAT -->
          <div class="card direct-chat direct-chat-primary">
            <div class="card-header">
              <h3 class="card-title">Direct Chat</h3>

              <div class="card-tools">
                <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">3</span>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
                        data-widget="chat-pane-toggle">
                  <i class="fas fa-comments"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <!-- Conversations are loaded here -->
              <div class="direct-chat-messages">
                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                  <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                    <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                  </div>
                  <!-- /.direct-chat-infos -->
                  <img class="direct-chat-img" src="{{asset('plugins/adminlte/dist/img/user1-128x128.jpg" alt="message user image')}}">
                  <!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    Is this template really for free? That's unbelievable!
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                  <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                    <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                  </div>
                  <!-- /.direct-chat-infos -->
                  <img class="direct-chat-img" src="{{asset('plugins/adminlte/dist/img/user3-128x128.jpg')}}" alt="message user image">
                  <!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    You better believe it!
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                  <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                    <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                  </div>
                  <!-- /.direct-chat-infos -->
                  <img class="direct-chat-img" src="{{asset('plugins/adminlte/dist/img/user1-128x128.jpg" alt="message user image')}}">
                  <!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    Working with AdminLTE on a great new app! Wanna join?
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                  <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                    <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                  </div>
                  <!-- /.direct-chat-infos -->
                  <img class="direct-chat-img" src="{{asset('plugins/adminlte/dist/img/user3-128x128.jpg" alt="message user image')}}">
                  <!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    I would love to.
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

              </div>
              <!--/.direct-chat-messages-->

              <!-- Contacts are loaded here -->
              <div class="direct-chat-contacts">
                <ul class="contacts-list">
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="dist/img/user1-128x128.jpg">

                      <div class="contacts-list-info">
                        <span class="contacts-list-name">
                          Count Dracula
                          <small class="contacts-list-date float-right">2/28/2015</small>
                        </span>
                        <span class="contacts-list-msg">How have you been? I was...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="dist/img/user7-128x128.jpg">

                      <div class="contacts-list-info">
                        <span class="contacts-list-name">
                          Sarah Doe
                          <small class="contacts-list-date float-right">2/23/2015</small>
                        </span>
                        <span class="contacts-list-msg">I will be waiting for...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="dist/img/user3-128x128.jpg">

                      <div class="contacts-list-info">
                        <span class="contacts-list-name">
                          Nadia Jolie
                          <small class="contacts-list-date float-right">2/20/2015</small>
                        </span>
                        <span class="contacts-list-msg">I'll call you back at...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                    
            <!-- /.card-body -->
            <div class="card-footer">
              <form action="#" method="post">
                <div class="input-group">
                  <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                  <span class="input-group-append">
                    <button type="button" class="btn btn-primary">Send</button>
                  </span>
                </div>
              </form>
            </div>
            <!-- /.card-footer-->
          </div>
          <!--/.direct-chat -->
 
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
 

          <!-- Map card -->
          <div class="card bg-gradient-primary">
            <div class="card-header border-0">
              <h3 class="card-title">
                <i class="fas fa-map-marker-alt mr-1"></i>
                Visitors
              </h3>
              <!-- card tools -->
              <div class="card-tools">
                <button type="button"
                        class="btn btn-primary btn-sm daterange"
                        data-toggle="tooltip"
                        title="Date range">
                  <i class="far fa-calendar-alt"></i>
                </button>
                <button type="button"
                        class="btn btn-primary btn-sm"
                        data-card-widget="collapse"
                        data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <div class="card-body">
              <div id="world-map" style="height: 250px; width: 100%;"></div>
            </div>
            <!-- /.card-body-->
            <div class="card-footer bg-transparent">
              <div class="row">
                <div class="col-4 text-center">
                  <div id="sparkline-1"></div>
                  <div class="text-white">Visitors</div>
                </div>
                <!-- ./col -->
                <div class="col-4 text-center">
                  <div id="sparkline-2"></div>
                  <div class="text-white">Online</div>
                </div>
                <!-- ./col -->
                <div class="col-4 text-center">
                  <div id="sparkline-3"></div>
                  <div class="text-white">Sales</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.card -->

          <!-- solid sales graph -->
          <div class="card bg-gradient-info">
            <div class="card-header border-0">
              <h3 class="card-title">
                <i class="fas fa-th mr-1"></i>
                Sales Graph
              </h3>

              <div class="card-tools">
                <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
            <!-- /.card-body -->
            <div class="card-footer bg-transparent">
              <div class="row">
                <div class="col-4 text-center">
                  <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                         data-fgColor="#39CCCC">

                  <div class="text-white">Mail-Orders</div>
                </div>
                <!-- ./col -->
                <div class="col-4 text-center">
                  <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                         data-fgColor="#39CCCC">

                  <div class="text-white">Online</div>
                </div>
                <!-- ./col -->
                <div class="col-4 text-center">
                  <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                         data-fgColor="#39CCCC">

                  <div class="text-white">In-Store</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->

          <!-- Calendar -->
          <div class="card bg-gradient-success">
            <div class="card-header border-0">

              <h3 class="card-title">
                <i class="far fa-calendar-alt"></i>
                Calendar
              </h3>
              <!-- tools card -->
              <div class="card-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fas fa-bars"></i></button>
                  <div class="dropdown-menu float-right" role="menu">
                    <a href="#" class="dropdown-item">Add new event</a>
                    <a href="#" class="dropdown-item">Clear events</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">View calendar</a>
                  </div>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pt-0">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>  
  @endsection