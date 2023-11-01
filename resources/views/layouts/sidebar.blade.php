<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="{{url('assets/dist/img/one-house-logo.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">One House Lead</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Robert Mareno</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="{{url('dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="{{route('property')}}" class="nav-link">
              <i class="nav-icon fas fa-city"></i>
              <p>
                Properties
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('visitor-show')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Visitors
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('flyer-brochure-list')}}" class="nav-link">
              <i class="nav-icon fas fa-broom"></i>
              <p>
                Flyers
              </p>
            </a>
          </li>
          <li class="nav-item">
            <!-- <a href="pages/widgets.php" class="nav-link"> -->
              <a href="{{route('quick-start-dt')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Quick Start?  
              </p>
            </a>
          </li>
          <li class="nav-header">ADVANCED FEATURED</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon  fas fa-cog"></i>
              <p>
                Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="{{route('quick-setting')}}" class="nav-link">
                  <i class="fas fa-cogs nav-icon"></i>
                  <p>Quick Settings</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('profile')}}" class="nav-link">
                  <i class="fas fa-user-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('smartphone')}}" class="nav-link">
                  <i class="fas fa-mobile nav-icon"></i>
                  <p>Smartphone Page</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('fonts-colors-dt')}}" class="nav-link">
                  <i class="fas fa-font nav-icon"></i>
                  <p>Fonts & Colors</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{Route('crm-dt')}}" class="nav-link">
                  <i class="fas fa-paint-brush nav-icon"></i>
                  <p>CRM Connections Colors</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{Route('account-dt')}}" class="nav-link">
                  <i class="fas fa-file-invoice-dollar nav-icon"></i>
                  <p>Account & Billing</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Marketing & Tools
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="{{Route('welcome-email-dt')}}" class="nav-link">
                  <i class="far fa-envelope nav-icon"></i>
                  <p>Welcome Email/Text</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{Route('drips-dt')}}" class="nav-link">
                  <i class="fas fa-grip-horizontal nav-icon"></i>
                  <p>Drip Campaigns?</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('feedback-dt')}}" class="nav-link">
                  <i class="far fa-flag nav-icon"></i>
                  <p>Feedback Reports</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{Route('your-team')}}" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Manage Team
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/coopagents.php" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Co-host Partners
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="{{Route('add-coopagent-dt')}}" class="nav-link">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>Add A Co-host</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{Route('coopagents')}}" class="nav-link">
                  <i class="fas fa-user-check nav-icon"></i>
                  <p>Add a Lender</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="nav-icon fas fa-info"></i>
              <p>
                Help?  
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="nav-icon  fas fa-headset"></i>
              <p>
                Contact Support
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="{{Route('logout')}}" class="nav-link">
              <i class="fas fa-user-plus nav-icon"></i>
              <p> Logout </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>