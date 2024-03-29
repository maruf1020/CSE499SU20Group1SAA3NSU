<div class="container-fluid d-flex align-items-stretch justify-content-between">
    <!--begin::Header Menu Wrapper-->
    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
        <!--begin::Header Menu-->
        <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
            <!--begin::Header Nav-->
            <ul class="menu-nav">
                <li class="menu-item menu-item-submenu" data-menu-toggle="click" aria-haspopup="true">
                    <!-- menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here menu-item-active -->
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="menu-text">Quick access 1</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="menu-item menu-item-submenu" data-menu-toggle="click" aria-haspopup="true">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="menu-text">Quick access 2</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="menu-text">Quick access 3</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
            </ul>
            <!--end::Header Nav-->
        </div>
        <!--end::Header Menu-->
    </div>
    <!--end::Header Menu Wrapper-->
    <!--begin::Topbar-->
    <div class="topbar">
        <!--begin::Search-->
        <div class="dropdown" id="kt_quick_search_toggle">
            <!--begin::Toggle-->
            <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                <div class="btn btn-icon btn-clean btn-lg btn-dropdown mr-1">
          <span class="svg-icon svg-icon-xl svg-icon-primary">
            <!--begin::Svg Icon | path:{{ asset('assets/media/svg/icons/General/Search.svg') }}-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                     height="24px" viewBox="0 0 24 24" version="1.1">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <rect x="0" y="0" width="24" height="24"/>
                <path
                    d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                    fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                <path
                    d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                    fill="#000000" fill-rule="nonzero"/>
              </g>
            </svg>
                <!--end::Svg Icon-->
          </span>
                </div>
            </div>
            <!--end::Toggle-->
            <!--begin::Dropdown-->
            <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                <div class="quick-search quick-search-dropdown" id="">
                    <!-- kt_quick_search_dropdown -->
                    <!--begin:Form-->
                    <form method="get" class="quick-search-form">
                        <div class="input-group">
                            <div class="input-group-prepend">
                <span class="input-group-text">
                  <span class="svg-icon svg-icon-lg">
                    <!--begin::Svg Icon | path:{{ asset('assets/media/svg/icons/General/Search.svg') }}-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                             height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"/>
                        <path
                            d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                            fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                        <path
                            d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                            fill="#000000" fill-rule="nonzero"/>
                      </g>
                    </svg>
                        <!--end::Svg Icon-->
                  </span>
                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search..."/>
                            <div class="input-group-append">
                <span class="input-group-text">
                  <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                </span>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                    <!--begin::Scroll-->
                    <div class="quick-search-wrapper scroll" data-scroll="true" data-height="325"
                         data-mobile-height="200"></div>
                    <!--end::Scroll-->
                </div>
            </div>
            <!--end::Dropdown-->
        </div>
        <!--end::Search-->
        <!--begin::Notifications-->

        <!--end::Notifications-->
        <!--begin::Quick Actions-->

        <!--end::Quick Actions-->
        <!--begin::Cart-->

        <!--end::Cart-->
        <!--begin::Quick panel-->

        <!--end::Quick panel-->
        <!--begin::Chat-->

        <!--end::Chat-->
        <!--begin::Languages-->
        <div class="dropdown">
            <!--begin::Toggle-->
            <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                    <img class="h-20px w-20px rounded-sm"
                         src="{{ asset('assets/media/svg/flags/226-united-states.svg') }}" alt=""/>
                </div>
            </div>
            <!--end::Toggle-->
            <!--begin::Dropdown-->
            <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                <!--begin::Nav-->
                <ul class="navi navi-hover py-4">
                    <!--begin::Item-->
                    <li class="navi-item">
                        <a href="#" class="navi-link">
              <span class="symbol symbol-20 mr-3">
                <img src="{{ asset('assets/media/svg/flags/226-united-states.svg') }}" alt=""/>
              </span>
                            <span class="navi-text">English</span>
                        </a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="navi-item">
                        <a href="#" class="navi-link">
              <span class="symbol symbol-20 mr-3">
                <img src="{{ asset('assets/media/svg/flags/flag-square-250.png') }}" alt=""/>
              </span>
                            <span class="navi-text">বাংলা</span>
                        </a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="navi-item active">
                        <a href="#" class="navi-link">
              <span class="symbol symbol-20 mr-3">
                <img src="{{ asset('assets/media/svg/flags/128-spain.svg') }}" alt=""/>
              </span>
                            <span class="navi-text">Spanish</span>
                        </a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="navi-item">
                        <a href="#" class="navi-link">
              <span class="symbol symbol-20 mr-3">
                <img src="{{ asset('assets/media/svg/flags/162-germany.svg') }}" alt=""/>
              </span>
                            <span class="navi-text">German</span>
                        </a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="navi-item">
                        <a href="#" class="navi-link">
              <span class="symbol symbol-20 mr-3">
                <img src="{{ asset('assets/media/svg/flags/195-france.svg') }}" alt=""/>
              </span>
                            <span class="navi-text">French</span>
                        </a>
                    </li>
                    <!--end::Item-->
                </ul>
                <!--end::Nav-->
            </div>
            <!--end::Dropdown-->
        </div>
        <!--end::Languages-->
        <!--begin::User-->
        <div class="topbar-item">
            <div class="btn btn-icon btn-light-success w-auto btn-clean d-inline-flex align-items-center btn-lg px-2 mr-5">
                @php
                    $user=Auth::user();
                    $user_name=Auth::user()->name;
                    $user_role=Auth::user()->role;
                @endphp
                <span class="text-dark-75 font-weight-bold font-size-base mr-1">{{ $user_name }}</span>
                <span class="font-weight-bolder font-size-base mr-3">(
                    @php
                        if($user_role==0){
                            echo"Admin";
                        }
                    elseif ($user_role==1){
                        echo"Student";
                    }
                    elseif ($user_role==2){
                        echo"Teacher";
                    }
                    elseif ($user_role==3){
                        echo"Institution";
                    }
                    @endphp
                 )</span>
                <span class="symbol symbol-35 symbol-light-primary">
        <span class="symbol-label font-size-h5 font-weight-bold">
            <img alt="Pic" height="30" src="{{ asset('assets/media/users/avatar.png') }}"/>
        </span>
    </span>
            </div>


        </div>
        <!--end::User-->
    </div>
    <!--end::Topbar-->
</div>
