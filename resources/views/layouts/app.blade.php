<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Orders | Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app-creative.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{ asset('assets/css/app-creative-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />
        @yield('css')

    </head>

    <body class="loading" data-layout="topnav" data-layout-config='{"layoutBoxed":false,"darkMode":false,"showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
            @include('layouts.header')

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                                            <li class="breadcrumb-item active">Orders</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Orders</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-lg-8">
                                                <form class="form-inline">
                                                    <div class="form-group mb-2">
                                                        <label for="inputPassword2" class="sr-only">Search</label>
                                                        <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                                                    </div>
                                                    <div class="form-group mx-sm-3 mb-2">
                                                        <label for="status-select" class="mr-2">Status</label>
                                                        <select class="custom-select" id="status-select">
                                                            <option selected>Choose...</option>
                                                            <option value="1">Paid</option>
                                                            <option value="2">Awaiting Authorization</option>
                                                            <option value="3">Payment failed</option>
                                                            <option value="4">Cash On Delivery</option>
                                                            <option value="5">Fulfilled</option>
                                                            <option value="6">Unfulfilled</option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="text-lg-right">
                                                    <button type="button" class="btn btn-danger mb-2 mr-2"><i class="mdi mdi-basket mr-1"></i> Add New Order</button>
                                                    <button type="button" class="btn btn-light mb-2">Export</button>
                                                </div>
                                            </div><!-- end col-->
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-centered mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>Order ID</th>
                                                        <th>Date</th>
                                                        <th>Payment Status</th>
                                                        <th>Total</th>
                                                        <th>Payment Method</th>
                                                        <th>Order Status</th>
                                                        <th style="width: 125px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="apps-ecommerce-orders-details.html" class="text-body font-weight-bold">#BM9708</a> </td>
                                                        <td>
                                                            August 05 2018 <small class="text-muted">10:29 PM</small>
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> Paid</span></h5>
                                                        </td>
                                                        <td>
                                                            $176.41
                                                        </td>
                                                        <td>
                                                            Mastercard
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-info-lighten">Shipped</span></h5>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                                <label class="custom-control-label" for="customCheck3">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="apps-ecommerce-orders-details.html" class="text-body font-weight-bold">#BM9707</a> </td>
                                                        <td>August 04 2018 <small class="text-muted">08:18 AM</small></td>
                                                        <td>
                                                            <h5><span class="badge badge-warning-lighten"><i class="mdi mdi-timer-sand"></i> Awaiting Authorization</span></h5>
                                                        </td>
                                                        <td>
                                                            $1,458.65
                                                        </td>
                                                        <td>
                                                            Visa
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-warning-lighten">Processing</span></h5>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                                <label class="custom-control-label" for="customCheck4">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="apps-ecommerce-orders-details.html" class="text-body font-weight-bold">#BM9706</a> </td>
                                                        <td>August 04 2018 <small class="text-muted">10:29 PM</small></td>
                                                        <td>
                                                            <h5><span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> Paid</span></h5>
                                                        </td>
                                                        <td>
                                                            $801.99
                                                        </td>
                                                        <td>
                                                            Credit Card
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-warning-lighten">Processing</span></h5>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                                <label class="custom-control-label" for="customCheck5">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="apps-ecommerce-orders-details.html" class="text-body font-weight-bold">#BM9705</a> </td>
                                                        <td>August 03 2018 <small class="text-muted">07:56 AM</small></td>
                                                        <td>
                                                            <h5><span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> Paid</span></h5>
                                                        </td>
                                                        <td>
                                                            $215.35
                                                        </td>
                                                        <td>
                                                            Mastercard
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-success-lighten">Delivered</span></h5>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                                <label class="custom-control-label" for="customCheck6">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="apps-ecommerce-orders-details.html" class="text-body font-weight-bold">#BM9704</a> </td>
                                                        <td>May 22 2018 <small class="text-muted">07:22 PM</small></td>
                                                        <td>
                                                            <h5><span class="badge badge-danger-lighten"><i class="mdi mdi-cancel"></i> Payment Failed</span></h5>
                                                        </td>
                                                        <td>
                                                            $2,514.36
                                                        </td>
                                                        <td>
                                                            Paypal
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-danger-lighten">Cancelled</span></h5>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                                <label class="custom-control-label" for="customCheck7">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="apps-ecommerce-orders-details.html" class="text-body font-weight-bold">#BM9703</a> </td>
                                                        <td>April 02 2018 <small class="text-muted">03:02 AM</small></td>
                                                        <td>
                                                            <h5><span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> Paid</span></h5>
                                                        </td>
                                                        <td>
                                                            $183.20
                                                        </td>
                                                        <td>
                                                            Payoneer
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-info-lighten">Shipped</span></h5>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                                <label class="custom-control-label" for="customCheck8">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="apps-ecommerce-orders-details.html" class="text-body font-weight-bold">#BM9702</a> </td>
                                                        <td>March 18 2018 <small class="text-muted">11:19 PM</small></td>
                                                        <td>
                                                            <h5><span class="badge badge-warning-lighten"><i class="mdi mdi-timer-sand"></i> Awaiting Authorization</span></h5>
                                                        </td>
                                                        <td>
                                                            $1,768.41
                                                        </td>
                                                        <td>
                                                            Visa
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-warning-lighten">Processing</span></h5>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                                <label class="custom-control-label" for="customCheck9">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="apps-ecommerce-orders-details.html" class="text-body font-weight-bold">#BM9701</a> </td>
                                                        <td>February 01 2018 <small class="text-muted">07:22 AM</small></td>
                                                        <td>
                                                            <h5><span class="badge badge-info-lighten"><i class="mdi mdi-cash"></i> Unpaid</span></h5>
                                                        </td>
                                                        <td>
                                                            $3,582.99
                                                        </td>
                                                        <td>
                                                            Paypal
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-info-lighten">Shipped</span></h5>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                                <label class="custom-control-label" for="customCheck10">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="apps-ecommerce-orders-details.html" class="text-body font-weight-bold">#BM9700</a> </td>
                                                        <td>January 22 2018 <small class="text-muted">08:09 PM</small></td>
                                                        <td>
                                                            <h5><span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> Paid</span></h5>
                                                        </td>
                                                        <td>
                                                            $923.95
                                                        </td>
                                                        <td>
                                                            Credit Card
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-success-lighten">Delivered</span></h5>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                                <label class="custom-control-label" for="customCheck11">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="apps-ecommerce-orders-details.html" class="text-body font-weight-bold">#BM9699</a> </td>
                                                        <td>January 17 2018 <small class="text-muted">02:30 PM</small></td>
                                                        <td>
                                                            <h5><span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> Paid</span></h5>
                                                        </td>
                                                        <td>
                                                            $5,177.68
                                                        </td>
                                                        <td>
                                                            Mastercard
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-info-lighten">Shipped</span></h5>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- container -->

                </div>
                <!-- content -->

                <!-- Footer Start -->
               @include('layouts.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">

          <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
              <i class="dripicons-cross noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
          </div>

          <div class="rightbar-content h-100" data-simplebar>

            <div class="p-3">
              <div class="alert alert-warning" role="alert">
                <strong>Customize </strong> the overall color scheme, layout width, etc.
              </div>

              <!-- Settings -->
              <h5 class="mt-3">Color Scheme</h5>
              <hr class="mt-1" />

              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="color-scheme-mode" value="light" id="light-mode-check"
                  checked />
                <label class="custom-control-label" for="light-mode-check">Light Mode</label>
              </div>

              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="color-scheme-mode" value="dark" id="dark-mode-check" />
                <label class="custom-control-label" for="dark-mode-check">Dark Mode</label>
              </div>

              <!-- Width -->
              <h5 class="mt-4">Width</h5>
              <hr class="mt-1"/>
              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="width" value="fluid" id="fluid-check" checked />
                <label class="custom-control-label" for="fluid-check">Fluid</label>
              </div>
              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="width" value="boxed" id="boxed-check" />
                <label class="custom-control-label" for="boxed-check">Boxed</label>
              </div>



              <button class="btn btn-primary btn-block mt-4" id="resetBtn">Reset to Default</button>

              <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/" class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-basket mr-1"></i> Purchase Now</a>
            </div> <!-- end padding-->

          </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /Right-bar -->

        <!-- bundle -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
        <script src="{{ asset('assets/js/app.min.js') }}"></script>
        @yield('js')

    </body>
</html>
