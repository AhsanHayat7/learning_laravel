<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#category-submenu">
                <i class="bi bi-menu-button-wide"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="category-submenu" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('add') }}" class="nav-link">
                        <i class="bi bi-circle"></i><span>View All Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('add.category') }}" class="nav-link">
                        <i class="bi bi-circle"></i><span>Add  Category</span>
                    </a>
                </li>
                <li>
                  <a href="{{ route('add-category') }}" class="nav-link">
                      <i class="bi bi-circle"></i><span>Add Product Category</span>
                  </a>
              </li>
              <li>
                  <a href="{{ route('product.category') }}" class="nav-link">
                      <i class="bi bi-circle"></i><span>View Product Category</span>
                  </a>
              </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#products-submenu">
                <i class="bi bi-menu-button-wide"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="products-submenu" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('all') }}" class="nav-link">
                        <i class="bi bi-circle"></i><span>View All Product</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('add.product') }}" class="nav-link">
                        <i class="bi bi-circle"></i><span>Add Product</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#cms-submenu">
                <i class="bi bi-menu-button-wide"></i><span>Control Management System</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="cms-submenu" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('cms') }}" class="nav-link">
                        <i class="bi bi-circle"></i><span>Home</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
  </aside><!-- End Sidebar-->

  <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get the current page URL
        var currentPageUrl = window.location.href;

        // Find the submenu link corresponding to the current page
        var submenuLink = document.querySelector('.sidebar-nav .nav-link[href="' + currentPageUrl + '"]');

        if (submenuLink) {
            // Add active class to the submenu link
            submenuLink.classList.add('active');

            // Open parent collapse if it's closed
            var parentCollapse = submenuLink.parentElement.parentElement.querySelector('.collapse');
            if (parentCollapse && !parentCollapse.classList.contains('show')) {
                parentCollapse.classList.add('show');
            }
        }
    });
  </script>
