<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('items.index') }}" class="nav-link {{ Request::is('items*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Items</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('calendars.index') }}" class="nav-link {{ Request::is('calendars*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Calendars</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('payments.index') }}" class="nav-link {{ Request::is('payments*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Payments</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('settings.index') }}" class="nav-link {{ Request::is('settings*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Settings</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('websitebuilder') }}" class="nav-link {{ Request::is('webbuilder*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Generator www</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('builders.index') }}" class="nav-link {{ Request::is('builders*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Builders</p>
    </a>
</li>
