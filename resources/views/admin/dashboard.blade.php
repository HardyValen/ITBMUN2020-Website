@extends("template.main")

@section('content')
<main>
<!-- ## 3. Main Hero Section ========= -->
    <section class="dashboard-body">
        <div class="dashboard-topbar">
            <div class="dashboard-topbar-title">
                <b>@yield('topbar')</b>
            </div>
            <div class="dashboard-topbar-icons">
                <a href="#"><i class="fas fa-cog"></i></a>
                <a href="#"><i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>
        <div class="dashboard-container">
            <div class="dashboard-navigation">
                <div class="dashboard-pills-container">
                    <a class="dashboard-pill" href="#">
                        <img src="{{URL::asset('assets/admin/sidenav/delegate.svg')}}" />
                        <p>Delegate</p>
                    </a>
                    <a class="dashboard-pill" href="#">
                        <img src="{{URL::asset('assets/admin/sidenav/delegation.svg')}}" />
                        <p>Delegation</p>
                    </a>
                    <a class="dashboard-pill" href="#">
                        <img src="{{URL::asset('assets/admin/sidenav/announcement.svg')}}" />
                        <p>Announcement</p>
                    </a>
                    <a class="dashboard-pill" href="#">
                        <img src="{{URL::asset('assets/admin/sidenav/press.svg')}}" />
                        <p>Press</p>
                    </a>
                </div>
            </div>
            <div class="dashboard-content">
                @yield('dashboardContent')    
            </div>
        </div>
    </section>
<!-- ## END of Main Hero Section ========= -->
</main>
@endsection

@section('script')

@endsection