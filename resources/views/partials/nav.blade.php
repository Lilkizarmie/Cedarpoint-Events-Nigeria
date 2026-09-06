<div class="header-container">
    <header class="header navbar navbar-expand-sm">

        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-menu">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg></a>

        <div class="nav-logo align-self-center">
            <a class="navbar-brand" href="{{ url('/') }}"><img alt="logo"
                    src="{{ asset('assets/img/logo2.svg') }}"> <span class="navbar-brand-name">CedarPoint</span></a>
        </div>

        <ul class="navbar-item topbar-navigation">

            <!--  BEGIN TOPBAR  -->
            <div class="topbar-nav header navbar" role="banner">
                <nav id="topbar">
                    <ul class="navbar-nav theme-brand flex-row  text-center">
                        <li class="nav-item theme-logo">
                            <a href="index-2.html">
                                <img src="assets/img/logo2.svg" class="navbar-logo" alt="logo">
                            </a>
                        </li>
                        <li class="nav-item theme-text">
                            <a href="{{ url('/') }}" class="nav-link"> CedarPoint </a>
                        </li>
                    </ul>

                    <ul class="list-unstyled menu-categories" id="topAccordion">
                        @role('Admin')
                            <li class="menu single-menu  @if (request()->is('dashboard')) active @endif">
                                <a href="{{ url('/dashboard') }}" class="dropdown-toggle autodroprown">
                                    <div class="">
