<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="./view/admin/assets/images/faces/face1.jpg" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">David Grey. H</span>
                    <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
               aria-controls="ui-basic">
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="./view/admin/pages/ui-features/buttons.html">Buttons</a>
                    </li>
                    <li class="nav-item"><a class="nav-link"
                                            href="./view/admin/pages/ui-features/typography.html">Typography</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./view/admin/pages/icons/mdi.html">
                <span class="menu-title">Icons</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./view/admin/pages/forms/basic_elements.html">
                <span class="menu-title">Forms</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./view/admin/pages/charts/chartjs.html">
                <span class="menu-title">Charts</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./view/admin/pages/tables/basic-table.html">
                <span class="menu-title">Tables</span>
                <i class="mdi mdi-table-large menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false"
               aria-controls="general-pages">
                <span class="menu-title">Sample Pages</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
            </a>
            <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="./view/admin/pages/samples/blank-page.html">
                            Blank Page </a></li>
                    <li class="nav-item"><a class="nav-link" href="./view/admin/pages/samples/login.html">
                            Login </a></li>
                    <li class="nav-item"><a class="nav-link" href="./view/admin/pages/samples/register.html">
                            Register </a></li>
                    <li class="nav-item"><a class="nav-link" href="./view/admin/pages/samples/error-404.html">
                            404 </a></li>
                    <li class="nav-item"><a class="nav-link" href="./view/admin/pages/samples/error-500.html">
                            500 </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?controller=admin&action=customer">
                <span class="menu-title">Customers</span>
                <i class="fa-solid fa-users menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./view/admin/pages/forms/basic_elements.html">
                <span class="menu-title">Manufacturers</span>
                <i class="fa-solid fa-industry menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./view/admin/pages/forms/basic_elements.html">
                <span class="menu-title">Products</span>
                <i class="fa-solid fa-cart-shopping menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./view/admin/pages/forms/basic_elements.html">
                <span class="menu-title">Orders</span>
                <i class="fa-solid fa-note-sticky menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./view/admin/pages/forms/basic_elements.html">
                <span class="menu-title">Order Details</span>
                <i class="fa-solid fa-box-open menu-icon"></i>
            </a>
        </li>
        <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <div class="border-bottom">
                  <h6 class="font-weight-normal mb-3">Add Project</h6>
                </div>
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
              </span>
        </li>
    </ul>
</nav>