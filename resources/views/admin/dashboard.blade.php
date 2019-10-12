@extends("template.main")

@section('title', 'Admin Dashboard - ITBMUN 2020')

@section('content')
<main>
<!-- ## 3. Main Hero Section ========= -->
    <section class="dashboard-body">
        <div class="dashboard-navigation">Hello World</div>
        <div class="dashboard-container">
            <div class="dashboard-topbar">
                <div class="dashboard-topbar-title">
                    Topbar Title
                </div>
                <div class="dashboard-topbar-icons">
                    <a href="#"><i class="fas fa-cog"></i></a>
                    <a href="#"><i class="fas fa-sign-out-alt"></i></a>
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