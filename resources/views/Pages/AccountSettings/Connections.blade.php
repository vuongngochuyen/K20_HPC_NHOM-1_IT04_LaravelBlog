@extends('welcome')

   @section('content')
    <!-- Layout container -->
    <div class="layout-page">
        <!-- Navbar -->

        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar"
        >
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input
                  type="text"
                  class="form-control border-0 shadow-none"
                  placeholder="Search..."
                  aria-label="Search..."
                />
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <li class="nav-item lh-1 me-3">
                <a
                  class="github-button"
                  href="https://github.com/themeselection/sneat-html-admin-template-free"
                  data-icon="octicon-star"
                  data-size="large"
                  data-show-count="true"
                  aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                  >Star</a
                >
              </li>

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">John Doe</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-cog me-2"></i>
                      <span class="align-middle">Settings</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <span class="d-flex align-items-center align-middle">
                        <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                        <span class="flex-grow-1 align-middle">Billing</span>
                        <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="auth-login-basic.html">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">
              <span class="text-muted fw-light">Account Settings / </span> Connections
            </h4>

            <div class="row">
              <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                  <li class="nav-item">
                    <a class="nav-link" href="pages-account-settings-account.html"
                      ><i class="bx bx-user me-1"></i> Account</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages-account-settings-notifications.html"
                      ><i class="bx bx-bell me-1"></i> Notifications</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);"
                      ><i class="bx bx-link-alt me-1"></i> Connections</a
                    >
                  </li>
                </ul>
                <div class="row">
                  <div class="col-md-6 col-12 mb-md-0 mb-4">
                    <div class="card">
                      <h5 class="card-header">Connected Accounts</h5>
                      <div class="card-body">
                        <p>Display content from your connected accounts on your site</p>
                        <!-- Connections -->
                        <div class="d-flex mb-3">
                          <div class="flex-shrink-0">
                            <img src="../assets/img/icons/brands/google.png" alt="google" class="me-3" height="30" />
                          </div>
                          <div class="flex-grow-1 row">
                            <div class="col-9 mb-sm-0 mb-2">
                              <h6 class="mb-0">Google</h6>
                              <small class="text-muted">Calendar and contacts</small>
                            </div>
                            <div class="col-3 text-end">
                              <div class="form-check form-switch">
                                <input class="form-check-input float-end" type="checkbox" role="switch" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex mb-3">
                          <div class="flex-shrink-0">
                            <img src="../assets/img/icons/brands/slack.png" alt="slack" class="me-3" height="30" />
                          </div>
                          <div class="flex-grow-1 row">
                            <div class="col-9 mb-sm-0 mb-2">
                              <h6 class="mb-0">Slack</h6>
                              <small class="text-muted">Communication</small>
                            </div>
                            <div class="col-3 text-end">
                              <div class="form-check form-switch">
                                <input class="form-check-input float-end" type="checkbox" role="switch" checked />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex mb-3">
                          <div class="flex-shrink-0">
                            <img src="../assets/img/icons/brands/github.png" alt="github" class="me-3" height="30" />
                          </div>
                          <div class="flex-grow-1 row">
                            <div class="col-9 mb-sm-0 mb-2">
                              <h6 class="mb-0">Github</h6>
                              <small class="text-muted">Manage your Git repositories</small>
                            </div>
                            <div class="col-3 text-end">
                              <div class="form-check form-switch">
                                <input class="form-check-input float-end" type="checkbox" role="switch" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex mb-3">
                          <div class="flex-shrink-0">
                            <img
                              src="../assets/img/icons/brands/mailchimp.png"
                              alt="mailchimp"
                              class="me-3"
                              height="30"
                            />
                          </div>
                          <div class="flex-grow-1 row">
                            <div class="col-9 mb-sm-0 mb-2">
                              <h6 class="mb-0">Mailchimp</h6>
                              <small class="text-muted">Email marketing service</small>
                            </div>
                            <div class="col-3 text-end">
                              <div class="form-check form-switch">
                                <input class="form-check-input float-end" type="checkbox" role="switch" checked />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex">
                          <div class="flex-shrink-0">
                            <img src="../assets/img/icons/brands/asana.png" alt="asana" class="me-3" height="30" />
                          </div>
                          <div class="flex-grow-1 row">
                            <div class="col-9 mb-sm-0 mb-2">
                              <h6 class="mb-0">Asana</h6>
                              <small class="text-muted">Communication</small>
                            </div>
                            <div class="col-3 text-end">
                              <div class="form-check form-switch">
                                <input class="form-check-input float-end" type="checkbox" role="switch" checked />
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /Connections -->
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="card">
                      <h5 class="card-header">Social Accounts</h5>
                      <div class="card-body">
                        <p>Display content from social accounts on your site</p>
                        <!-- Social Accounts -->
                        <div class="d-flex mb-3">
                          <div class="flex-shrink-0">
                            <img
                              src="../assets/img/icons/brands/facebook.png"
                              alt="facebook"
                              class="me-3"
                              height="30"
                            />
                          </div>
                          <div class="flex-grow-1 row">
                            <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                              <h6 class="mb-0">Facebook</h6>
                              <small class="text-muted">Not Connected</small>
                            </div>
                            <div class="col-4 col-sm-5 text-end">
                              <button type="button" class="btn btn-icon btn-outline-secondary">
                                <i class="bx bx-link-alt"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex mb-3">
                          <div class="flex-shrink-0">
                            <img
                              src="../assets/img/icons/brands/twitter.png"
                              alt="twitter"
                              class="me-3"
                              height="30"
                            />
                          </div>
                          <div class="flex-grow-1 row">
                            <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                              <h6 class="mb-0">Twitter</h6>
                              <a href="https://twitter.com/Theme_Selection" target="_blank">@ThemeSelection</a>
                            </div>
                            <div class="col-4 col-sm-5 text-end">
                              <button type="button" class="btn btn-icon btn-outline-danger">
                                <i class="bx bx-trash-alt"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex mb-3">
                          <div class="flex-shrink-0">
                            <img
                              src="../assets/img/icons/brands/instagram.png"
                              alt="instagram"
                              class="me-3"
                              height="30"
                            />
                          </div>
                          <div class="flex-grow-1 row">
                            <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                              <h6 class="mb-0">instagram</h6>
                              <a href="https://www.instagram.com/themeselection/" target="_blank">@ThemeSelection</a>
                            </div>
                            <div class="col-4 col-sm-5 text-end">
                              <button type="button" class="btn btn-icon btn-outline-danger">
                                <i class="bx bx-trash-alt"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex mb-3">
                          <div class="flex-shrink-0">
                            <img
                              src="../assets/img/icons/brands/dribbble.png"
                              alt="dribbble"
                              class="me-3"
                              height="30"
                            />
                          </div>
                          <div class="flex-grow-1 row">
                            <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                              <h6 class="mb-0">Dribbble</h6>
                              <small class="text-muted">Not Connected</small>
                            </div>
                            <div class="col-4 col-sm-5 text-end">
                              <button type="button" class="btn btn-icon btn-outline-secondary">
                                <i class="bx bx-link-alt"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex">
                          <div class="flex-shrink-0">
                            <img
                              src="../assets/img/icons/brands/behance.png"
                              alt="behance"
                              class="me-3"
                              height="30"
                            />
                          </div>
                          <div class="flex-grow-1 row">
                            <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                              <h6 class="mb-0">Behance</h6>
                              <small class="text-muted">Not Connected</small>
                            </div>
                            <div class="col-4 col-sm-5 text-end">
                              <button type="button" class="btn btn-icon btn-outline-secondary">
                                <i class="bx bx-link-alt"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <!-- /Social Accounts -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / Content -->
      @endsection
