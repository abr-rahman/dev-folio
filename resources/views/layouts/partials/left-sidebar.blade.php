<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{ asset('backend/vendors/images/deskapp-logo.svg') }}" alt="" class="dark-logo" />
            <img src="{{ asset('backend/vendors/images/deskapp-logo-white.svg') }}" alt="" class="light-logo" />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-house"></span><span class="mtext">Dashboard</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="/">Home</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-textarea-resize"></span><span class="mtext">Forms</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('form') }}">Form</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
