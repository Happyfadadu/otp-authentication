<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dasboard Multichoice</title>

  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
  <link rel="icon" href="./favicon.ico" type="image/x-icon" />

  <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ url('frontend/css/bootstrap-select.min.css') }}" />
  <link rel="stylesheet" href="{{ url('frontend/css/datatables.min.css') }}" />
  <link rel="stylesheet" href="{{ url('frontend/css/bootstrap-icons.min.css') }}" />
  <link rel="stylesheet" href="{{ url('frontend/css/custom.css') }}" />

</head>

<body>
  <div class="page-wrapper">
    <main class="full-page-main">
      <header class="header text-md">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col">
              <ul class="siteheader">
                <li>
                  <a class="side-logo" href="./" title="Multichoice - Enriching Lives">
                    <img src="{{url('frontend/images/logo.png')}}" width="73.2" height="44.36" alt="Multichoice Logo" />
                  </a>
                </li>
                <li>
                  <a class="active" href="./dashboard" title="Dashboard">Dashboard</a>
                </li>
                <li>
                  <a href="./index.html" title="New Order">New Order</a>
                </li>
                <li>
                  <a href="#OrderTracking" title="Order Tracking">Order Tracking</a>
                </li>
                <li>
                  <a href="#Briefs" title="Briefs">Briefs</a>
                </li>
                <li>
                  <a href="#Reports" title="Reports">Reports</a>
                </li>
                <li>
                  <a href="#ContactSupport" title="Contact Support">Contact Support</a>
                </li>
              </ul>
            </div>
            <div class="col-auto">
              <div class="headright d-flex align-items-center">
                <div class="d-flex align-items-center notification">
                  <a class="text--gray" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"><i class="icon-notification"></i></a>

                  <!-- NOTIFICATION CARD ATTACHED HERE START -->
                  <div class="dropdown notification-card">
                    <div class="dropdown-menu notification-menu">
                      <div class="notification-header pb-2 d-flex justify-content-between">
                        <span class="font-10 text-rg">3 Unread</span>
                        <a href="" title="Mark All Read" class="text--primary font-10 text-md">Mark All Read</a>
                      </div>
                      <div class="notification-body">
                        <div class="notification-item">
                          <img width="14" height="14" alt="running-low-icon" title="Reward Running Low" src="{{url('frontend//images/running-low-icon.svg')}}" />
                          <div class="d-flex flex-column g-2 notification-content">
                            <span class="font-8 text--gray text-rg">10 mins ago</span>
                            <h5 class="font-12 text-md mb-0">
                              Reward Running Low
                            </h5>
                            <h6 class="font-10 text--gray text-rg mb-0">
                              Order # 092450982-093
                            </h6>
                          </div>
                          <div class="notification-mark"></div>
                        </div>
                        <div class="notification-item">
                          <img width="14" height="14" alt="order-release-icon" title="Order Released" src="{{url('frontend/images/order-release-icon.svg')}}" />
                          <div class="d-flex flex-column g-2 notification-content">
                            <span class="font-8 text--gray text-rg">1 hour ago</span>
                            <h5 class="font-12 text-md mb-0">
                              Order Released
                            </h5>
                            <h6 class="font-10 text--gray text-rg mb-0">
                              Order # 092450982-093
                            </h6>
                          </div>
                          <div class="notification-mark"></div>
                        </div>
                        <div class="notification-item">
                          <img width="14" height="14" alt="order-submitted-icon" title="Order Submitted Successfully" src="./images/order-release-icon.svg" src="{{url('frontend/images/order-release-icon.svg')}}" />
                          <div class="d-flex flex-column g-2 notification-content">
                            <span class="font-8 text--gray text-rg">1 hour ago</span>
                            <h5 class="font-12 text-md mb-0">
                              Order Submitted Successfully
                            </h5>
                            <h6 class="font-10 text--gray text-rg mb-0">
                              Order # 092450982-093
                            </h6>
                          </div>
                          <div class="notification-mark"></div>
                        </div>
                        <div class="notification-item">
                          <img width="14" height="14" alt="reward-running-icon" title="Reward Running Low" src="{{url('frontend/running-low-icon.svg')}}" />
                          <div class="d-flex flex-column g-2 notification-content">
                            <span class="font-8 text--gray text-rg">7 days ago</span>
                            <h5 class="font-12 text-md mb-0">
                              Reward Running Low
                            </h5>
                            <h6 class="font-10 text--gray text-rg mb-0">
                              Order # 092450982-093
                            </h6>
                          </div>
                        </div>
                      </div>
                      <div class="notification-footer pt-2 text-align-center">
                        <a href="#" title="View All" class="text--primary font-10 text-md justify-content-center">View All</a>
                      </div>
                    </div>
                  </div>
                  <!-- NOTIFICATION CARD ATTACHED HERE START -->
                </div>
                <div>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                  <a href="#" title="Sign Out" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="icon-user"></i> Sign Out
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
    </main>
  </div>