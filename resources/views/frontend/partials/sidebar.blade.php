<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="backend/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="backend/images/logo-dark.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="backend/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="backend/images/logo-light.png" alt="" height="17">
            </span>
        </a>
        <button type="button" class="p-0 btn btn-sm fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div class="m-1 rounded dropdown sidebar-user">
        <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="gap-2 d-flex align-items-center">
                <img class="rounded header-profile-user" src="backend/images/users/avatar-1.jpg" alt="Header Avatar">
                <span class="text-start">
                    <span class="d-block fw-medium sidebar-user-name-text">Anna Adame</span>
                    <span class="d-block fs-14 sidebar-user-name-sub-text"><i
                            class="align-baseline ri ri-circle-fill fs-10 text-success"></i> <span
                            class="align-middle">Online</span></span>
                </span>
            </span>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <h6 class="dropdown-header">Welcome Anna!</h6>
            <a class="dropdown-item" href="pages-profile.html"><i
                    class="align-middle mdi mdi-account-circle text-muted fs-16 me-1"></i> <span
                    class="align-middle">Profile</span></a>
            <a class="dropdown-item" href="apps-chat.html"><i
                    class="align-middle mdi mdi-message-text-outline text-muted fs-16 me-1"></i> <span
                    class="align-middle">Messages</span></a>
            <a class="dropdown-item" href="apps-tasks-kanban.html"><i
                    class="align-middle mdi mdi-calendar-check-outline text-muted fs-16 me-1"></i> <span
                    class="align-middle">Taskboard</span></a>
            <a class="dropdown-item" href="pages-faqs.html"><i
                    class="align-middle mdi mdi-lifebuoy text-muted fs-16 me-1"></i> <span
                    class="align-middle">Help</span></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="pages-profile.html"><i
                    class="align-middle mdi mdi-wallet text-muted fs-16 me-1"></i> <span class="align-middle">Balance :
                    <b>$5971.67</b></span></a>
            <a class="dropdown-item" href="pages-profile-settings.html"><span
                    class="mt-1 badge bg-success-subtle text-success float-end">New</span><i
                    class="align-middle mdi mdi-cog-outline text-muted fs-16 me-1"></i> <span
                    class="align-middle">Settings</span></a>
            <a class="dropdown-item" href="auth-lockscreen-basic.html"><i
                    class="align-middle mdi mdi-lock text-muted fs-16 me-1"></i> <span class="align-middle">Lock
                    screen</span></a>
            <a class="dropdown-item" href="auth-logout-basic.html"><i
                    class="align-middle mdi mdi-logout text-muted fs-16 me-1"></i> <span class="align-middle"
                    data-key="t-logout">Logout</span></a>
        </div>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">


            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.dashboard') }}">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarMultilevel">
                        <i class="ri-share-line"></i> <span data-key="t-multi-level">Multi Level</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMultilevel">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-level-1.1"> Level 1.1 </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2">
                                    Level
                                    1.2
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarAccount">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-key="t-level-2.1"> Level 2.1 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarCrm"
                                                data-key="t-level-2.2"> Level 2.2
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarCrm">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-key="t-level-3.1">
                                                            Level 3.1
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-key="t-level-3.2">
                                                            Level 3.2
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- staff account management --}}
                <li class="nav-item {{ request()->routeIs('admin.staff.register.*') ? 'active' : '' }}">
                    <a class="nav-link menu-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarMaps">
                        <i class="ri-user-add-line"></i> <span data-key="t-maps">Staff Management</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('admin.staff.register.*') ? 'show' : '' }}"
                        id="sidebarMaps">
                        <ul class="nav nav-sm flex-column">
                            <li
                                class="nav-item {{ request()->routeIs('admin.staff.register.create') ? 'active' : '' }}">
                                <a href="{{ route('admin.staff.register.create') }}" class="nav-link"
                                    data-key="t-google">
                                    New Register
                                </a>
                            </li>
                            <li
                                class="nav-item {{ request()->routeIs('admin.staff.register.index') ? 'active' : '' }}">
                                <a href="{{ route('admin.staff.register.index') }}" class="nav-link"
                                    data-key="t-vector">
                                    All Staffs
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- Services Image start --}}
                <li class="nav-item {{ request()->routeIs('admin.service.image.*') ? 'active' : '' }}">
                    <a class="nav-link menu-link" href="#sidebarServiceImages" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarMaps">
                        <i class="ri-file-image-line"></i> <span data-key="t-maps">Services Images</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('admin.service.image.*') ? 'show' : '' }}"
                        id="sidebarServiceImages">
                        <ul class="nav nav-sm flex-column">
                            <li
                                class="nav-item {{ request()->routeIs('admin.service.image.create') ? 'active' : '' }}">
                                <a href="{{ route('admin.service.image.create') }}" class="nav-link"
                                    data-key="t-google">
                                    Add Image
                                </a>
                            </li>
                            <li
                                class="nav-item {{ request()->routeIs('admin.service.image.index') ? 'active' : '' }}">
                                <a href="{{ route('admin.service.image.index') }}" class="nav-link"
                                    data-key="t-vector">
                                    All Images
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- services image end --}}
                {{-- Services Image start --}}
                <li class="nav-item {{ request()->routeIs('admin.service.*') ? 'active' : '' }}">
                    <a class="nav-link menu-link" href="#sidebarService" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarMaps">
                        <i class="ri-file-image-line"></i> <span data-key="t-maps">Services Images</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('admin.service.*') ? 'show' : '' }}"
                        id="sidebarService">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item {{ request()->routeIs('admin.service.create') ? 'active' : '' }}">
                                <a href="{{ route('admin.service.create') }}" class="nav-link" data-key="t-google">
                                    Add Image
                                </a>
                            </li>
                            <li class="nav-item {{ request()->routeIs('admin.service.index') ? 'active' : '' }}">
                                <a href="{{ route('admin.service.index') }}" class="nav-link" data-key="t-vector">
                                    All Images
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- services image end --}}
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
