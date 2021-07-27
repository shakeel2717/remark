@extends('dashboard.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <x-email-alert />
        </div>
    </div>
    <x-alert />

    <body data-offset="0" data-hs-scrollspy-options='{ "target": "#navbarSettings" }'>

        <div class="row">
            <div class="col-lg-5">
                <!-- Navbar -->
                <div class="navbar-vertical navbar-expand-lg">
                    <!-- Navbar Toggle -->
                    <button type="button" class="navbar-toggler btn btn-block btn-white mb-3" aria-label="Toggle navigation"
                        aria-expanded="false" aria-controls="navbarVerticalNavMenu" data-toggle="collapse"
                        data-target="#navbarVerticalNavMenu">
                        <span class="d-flex justify-content-between align-items-center">
                            <span class="h5 mb-0">Nav menu</span>

                            <span class="navbar-toggle-default">
                                <i class="tio-menu-hamburger"></i>
                            </span>

                            <span class="navbar-toggle-toggled">
                                <i class="tio-clear"></i>
                            </span>
                        </span>
                    </button>
                    <!-- End Navbar Toggle -->

                    <!-- Navbar Collapse -->
                    <div id="navbarVerticalNavMenu" class="collapse navbar-collapse">
                        <ul id="navbarSettings"
                            class="js-sticky-block js-scrollspy navbar-nav navbar-nav-lg nav-tabs card card-navbar-nav"
                            data-hs-sticky-block-options='{
                                                                                         "parentSelector": "#navbarVerticalNavMenu",
                                                                                         "targetSelector": "#header",
                                                                                         "breakpoint": "lg",
                                                                                         "startPoint": "#navbarVerticalNavMenu",
                                                                                         "endPoint": "#stickyBlockEndPoint",
                                                                                         "stickyOffsetTop": 20
                                                                                       }'>
                            <li class="nav-item">
                                <a class="nav-link active" href="#basicInfo">
                                    <i class="tio-user-outlined nav-icon"></i>
                                    Basic information
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#passwordSection">
                                    <i class="tio-lock-outlined nav-icon"></i>
                                    Password
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#recentDevicesSection">
                                    <i class="tio-settings-outlined nav-icon"></i>
                                    Recent devices
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
                <!-- End Navbar -->
            </div>

            <div class="col-lg-7">
                <!-- Card -->
                <div id="basicInfo" class="card mb-5">
                    <div class="card-header">
                        <h3 class="card-title h4">Basic information</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('profileReq') }}" method="POST">
                            @csrf
                            <div class="row form-group">
                                <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Full name <i
                                        class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top"
                                        title=""
                                        data-original-title="Displayed on public forums, such as Front."></i></label>

                                <div class="col-sm-9">
                                    <div class="input-group input-group-sm-down-break">
                                        <input type="text" class="form-control" name="fname" id="fnameLabel"
                                            placeholder="Your first name" aria-label="Your first name"
                                            value="{{ session('user')[0]->fname }}"
                                            style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                                        <input type="text" class="form-control" name="lname" id="lnameLabel"
                                            placeholder="Your last name" aria-label="Your last name"
                                            value="{{ session('user')[0]->lname }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="emailLabel" class="col-sm-3 col-form-label input-label">Username</label>

                                <div class="col-sm-9">
                                    <input type="username" class="form-control" name="username" id="usernameLabel"
                                        placeholder="Username" aria-label="username"
                                        value="{{ session('user')[0]->username }}" readonly>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="emailLabel" class="col-sm-3 col-form-label input-label">Email</label>

                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" id="emailLabel"
                                        placeholder="Email" aria-label="Email" value="{{ session('user')[0]->email }}"
                                        readonly>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Card -->


                <!-- Card -->
                <div id="passwordSection" class="card mb-5">
                    <div class="card-header">
                        <h3 class="card-title h4">Password</h3>
                    </div>
                    <div class="card-body">
                        <!-- Form -->
                        <form action="{{ route('changePasswordReq') }}" method="POST">
                            @csrf
                            <!-- Form Group -->
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">Current
                                    password</label>

                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="currentPassword"
                                        id="currentPasswordLabel" placeholder="Enter current password"
                                        aria-label="Enter current password" autocomplete="off">
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div class="row form-group">
                                <label for="newPassword" class="col-sm-3 col-form-label input-label">New password</label>

                                <div class="col-sm-9">
                                    <input type="password" class="js-pwstrength form-control" name="newPassword"
                                        id="newPassword" placeholder="Enter new password" aria-label="Enter new password">
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div class="row form-group">
                                <label for="confirmNewPasswordLabel" class="col-sm-3 col-form-label input-label">Confirm new
                                    password</label>

                                <div class="col-sm-9">
                                    <div class="mb-3">
                                        <input type="password" class="form-control" name="newPassword_confirmation"
                                            id="confirmNewPasswordLabel" placeholder="Confirm your new password"
                                            aria-label="Confirm your new password"
                                            style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACIUlEQVQ4EX2TOYhTURSG87IMihDsjGghBhFBmHFDHLWwSqcikk4RRKJgk0KL7C8bMpWpZtIqNkEUl1ZCgs0wOo0SxiLMDApWlgOPrH7/5b2QkYwX7jvn/uc//zl3edZ4PPbNGvF4fC4ajR5VrNvt/mo0Gr1ZPOtfgWw2e9Lv9+chX7cs64CS4Oxg3o9GI7tUKv0Q5o1dAiTfCgQCLwnOkfQOu+oSLyJ2A783HA7vIPLGxX0TgVwud4HKn0nc7Pf7N6vV6oZHkkX8FPG3uMfgXC0Wi2vCg/poUKGGcagQI3k7k8mcp5slcGswGDwpl8tfwGJg3xB6Dvey8vz6oH4C3iXcFYjbwiDeo1KafafkC3NjK7iL5ESFGQEUF7Sg+ifZdDp9GnMF/KGmfBdT2HCwZ7TwtrBPC7rQaav6Iv48rqZwg+F+p8hOMBj0IbxfMdMBrW5pAVGV/ztINByENkU0t5BIJEKRSOQ3Aj+Z57iFs1R5NK3EQS6HQqF1zmQdzpFWq3W42WwOTAf1er1PF2USFlC+qxMvFAr3HcexWX+QX6lUvsKpkTyPSEXJkw6MQ4S38Ljdbi8rmM/nY+CvgNcQqdH6U/xrYK9t244jZv6ByUOSiDdIfgBZ12U6dHEHu9TpdIr8F0OP692CtzaW/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                                    </div>

                                    <h5>Password requirements:</h5>

                                    <p class="font-size-sm mb-2">Ensure that these requirements are met:</p>

                                    <ul class="font-size-sm">
                                        <li>Minimum 8 characters long - the more, the better</li>
                                        <li>At least one lowercase character</li>
                                        <li>At least one uppercase character</li>
                                        <li>At least one number, symbol, or whitespace character</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div id="recentDevicesSection" class="card mb-3 mb-lg-5">
                    <div class="card-header">
                        <h4 class="card-title">Recent devices</h4>
                    </div>

                    <!-- Body -->
                    <div class="card-body">
                        <p class="card-text">View and manage devices where you're logged in.</p>
                    </div>
                    <!-- End Body -->

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-thead-bordered table-nowrap table-align-middle card-table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Browser</th>
                                    <th>Device</th>
                                    <th>Location</th>
                                    <th>Most recent activity</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($login_history as $history)
                                    <tr>
                                        <td class="d-flex align-items-center">
                                            <img class="avatar avatar-xss mr-2"
                                                src="{{ asset('assets/svg/brands/'. strtolower($history->browser) .'.svg') }}" alt="Image Description">
                                            {{ $history->browser }} on {{ $history->os }}
                                        </td>
                                        <td>
                                            <i class="tio-laptop tio-lg mr-2"></i> {{ $history->device }}
                                        </td>
                                        <td>{{ $history->city }}, {{ $history->country }}</td>
                                        <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($history->created_at))->diffForHumans() }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table -->
                </div>
            </div>
        </div>
        <!-- End Card -->

        <!-- Sticky Block End Point -->
        <div id="stickyBlockEndPoint"></div>
        </div>
        </div>
        <!-- End Row -->
    @endsection
    @section('footer')
        <!-- JS Implementing Plugins -->
        <script src="{{ asset('assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js') }}"></script>

        <script>
            $(document).on('ready', function() {
                // INITIALIZATION OF STICKY BLOCKS
                // =======================================================
                $('.js-sticky-block').each(function() {
                    var stickyBlock = new HSStickyBlock($(this)).init();
                });


                // INITIALIZATION OF SCROLLSPY
                // =======================================================
                var scrollspy = new HSScrollspy($('body'), {
                    // !SETTING "resolve" PARAMETER AND RETURNING "resolve('completed')" IS REQUIRED
                    beforeScroll: function(resolve) {
                        if (window.innerWidth < 992) {
                            $('#navbarVerticalNavMenu').collapse('hide').on('hidden.bs.collapse',
                                function() {
                                    return resolve('completed');
                                });
                        } else {
                            return resolve('completed');
                        }
                    }
                }).init();
            });
        </script>
    @endsection
