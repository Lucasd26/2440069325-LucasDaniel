<nav class="bg-dark border border-light border-2 rounded py-2 my-3">
    <!-- Container wrapper -->
    <div class="container-fluid ">
        <!-- Collapsible wrapper -->
        <div class="d-flex justify-content-around">
            <!-- Left links -->
            <a href="{{ url('/home') }}" class="btn btn-link text-light">
                <i class="fas fa-2x fa-home"></i>
            </a>
            <a href="{{ url('/cart') }}" class="btn btn-link text-light">
                <i class="fas fa-2x fa-shopping-cart"></i>
            </a>
            <a href="{{ url('/profile') }}" class="btn btn-link text-light">
                <i class="fas fa-2x fa-user-circle"></i>
            </a>
            @if (Auth::user()->isAdministrator())
                <a href="{{ url('/maintenance') }}" class="btn btn-link text-light">
                    <i class="fas fa-2x fa-wrench"></i>
                </a>
            @endif
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
