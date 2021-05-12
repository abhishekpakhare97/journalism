<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-md-down-none">
        {{ config('app.name', 'Journalism') }}
    </div>
    <ul class="c-sidebar-nav ps ">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="/">
                <i class="fas fa-tachometer-alt"></i>
                <span class="ml-3">
                    Dashboard
                </span>
            </a>
        </li>
        <li class="c-sidebar-nav-title">Journal</li>
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                Manager Journal
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{ route('reviewer.journal.index') }}">
                        List of Journals
                    </a>
                </li>
            </ul>
        </li>

    </ul>

</div>
