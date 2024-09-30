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
                        <!-- <li>
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
                        </li> -->
                    </ul>
                </li>
                <!-- Profile module -->
                <li>
                    <a href="{{ route('admin.profile') }}">
                        <i class="fas fa-user"></i>Profile</a>
                </li>
                <!-- Portfolio module -->
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
                <!-- Education module -->
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-graduation-cap"></i>Education</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('admin.education.index') }}">My Education</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.education.create') }}">Add New Education</a>
                        </li>
                    </ul>
                </li>
                <!-- Soft Skills module -->
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-lightbulb"></i>Soft Skills</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('admin.soft_skills.index') }}">All Soft Skills</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.soft_skills.create') }}">Add New Soft Skill</a>
                        </li>
                    </ul>
                </li>
                <!-- Technical Skills module -->
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-cogs"></i>Technical Skills</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('admin.technical_skills.index') }}">All Technical Skills</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.technical_skills.create') }}">Add New Technical Skill</a>
                        </li>
                    </ul>
                </li>
                <!-- Experience module -->
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-briefcase"></i>Experience</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('admin.experiences.index') }}">All Experiences</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.experiences.create') }}">Add New Experience</a>
                        </li>
                    </ul>
                </li>
                <!-- Logout button -->
                <li>
                    <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>Logout</a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                <!-- ... other menu items ... -->
            </ul>
        </nav>
    </div>
</aside>