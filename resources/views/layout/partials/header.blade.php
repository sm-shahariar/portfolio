<div class="">
    <div class="container-fluid shadow-sm">
        <div class="row">
            <div class="col-md-4 logo-name">
                <div class="navbar-brand">
                    <h3 class="logo">Portfolio</h3>
                </div>
            </div>
            <div class="col-md-8">
                <div class="navbar-collapse d-flex justify-content-end">
                    <ul class="navbar-nav flex-row align-items-end">
                        <li class="nav-item dropdown me-4">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('images/user.svg') }}" alt="" height="30px" width="30px">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li><span class="dropdown-item-text">{{ auth()->user()->name }}</span></li>
                                <li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="ms-3 btn btn-outline-danger">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
