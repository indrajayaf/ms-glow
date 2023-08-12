<ul class="nav justify-content-center fixed-bottom navbar-expand-lg bg-white navbar-dark">
    <li class="nav-item">
        <a class="nav-active text-center nav-link {{ ($active) === "home" ? 'active' : ''}}" href="/home"><i class="fa-duotone fa-house"></i><br/>Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-menu text-center nav-link {{ ($active) === "Orders" ? 'active' : ''}}" href="/orders"><i class="fa-duotone fa-bag-shopping"></i><br/>Orders</a>
    </li>
    <li class="nav-item">
        <a class="nav-menu text-center nav-link {{ ($active) === "Withdraw" ? 'active' : ''}}" href="/withdraw"><i class="fa-duotone fa-money-bill-transfer"></i><br/>Withdraw</a>
    </li>
    <li class="nav-item">
        <a class="nav-menu text-center nav-link {{ ($active) === "Account" ? 'active' : ''}}" href="/account"><i class="fa-duotone fa-user"></i><br/>Account</a>
    </li>
</ul> 