<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="index.html">Dashboard 1</a>
                        </li>
                        <li>
                            <a href="index2.html">Dashboard 2</a>
                        </li>
                        <li>
                            <a href="index3.html">Dashboard 3</a>
                        </li>
                        <li>
                            <a href="index4.html">Dashboard 4</a>
                        </li>
                    </ul>
                </li>
                <!-- Add the Portfolio module here -->
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-briefcase"></i>Portfolio</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('admin.portfolios.index') }}">All Portfolios</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.portfolios.create') }}">Add New Portfolio</a>
                        </li>
                    </ul>
                </li>
                <!-- Existing menu items -->
                <li>
                    <a href="chart.html">
                        <i class="fas fa-chart-bar"></i>Charts</a>
                </li>
                <!-- ... other menu items ... -->
            </ul>
        </nav>
    </div>
</aside>