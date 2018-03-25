<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'AICMS')</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link href="{{ asset('css/semantic.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/pace.css') }}" rel="stylesheet" />

</head>

<body>
    <div id="contextWrap">
        <!--sidebar-->
        <div class="ui sidebar vertical left menu overlay  borderless visible sidemenu inverted  grey" style="-webkit-transition-duration: 0.1s; transition-duration: 0.1s;"
            data-color="grey">
            <a class="item logo" href="index.html">
                <img src="img/logo.png" alt="stagblogo" />
                <img src="img/thumblogo.png" alt="stagblogo" class="displaynone" />
            </a>
            <div class="ui accordion inverted">

                <a class="title item">
                    <i class="ion-speedometer titleIcon icon"></i> Dashboard
                    <i class="dropdown icon"></i>
                </a>
                <div class="content">
                    <a class="item" href="index.html">
                        Dashboard
                    </a>
                </div>

                <div class="title item">
                    <i class="ion-ios-lightbulb titleIcon icon"></i>

                    <i class="dropdown icon"></i> Manga
                </div>
                <div class="content">
                    <a class="item" href="inbox.html">
                        Manga
                    </a>

                    <a class="item" href="chat.html">
                        TOP Manga
                    </a>
                </div>
            </div>

            <div class="ui dropdown item displaynone scrolling">
                <span>Dashboard</span>
                <i class="ion-speedometer icon"></i>

                <div class="menu">
                    <div class="header">
                        Dashboard
                    </div>
                    <div class="ui divider"></div>
                    <a class="item" href="index.html">
                        Dashboard
                    </a>
                </div>
            </div>
            <div class="ui dropdown item displaynone scrolling">
                <span>Apps</span>
                <i class="ion-ios-lightbulb icon"></i>
                <div class="menu">
                    <div class="header">
                        Manga
                    </div>
                    <div class="ui divider"></div>
                    <a class="item" href="inbox.html">
                        Manga
                    </a>
                    <a class="item" href="filter.html">
                        TOP Manga
                    </a>
                </div>
            </div>
            <div class="ui divider"></div>
        </div>
        <!--sidebar-->
        <div class="ui right sidebar">
            <div class="ui pointing secondary two item tabular menu">
                <a class="item active" data-tab="first">
                    <i class="red icon ion-chatbox-working icon"></i>
                </a>

                <a class="item" data-tab="fourth">
                    <i class="blue icon ion-gear-a"></i>
                </a>
            </div>
            <div class="ui tab active" data-tab="first">
                <div class="ui small feed">
                    <h4 class="ui header">Followers Activity</h4>
                    <div class="event">
                        <div class="label">
                            <img src="img/avatar/people/carol.png" alt="label-image" />
                        </div>
                        <div class="content">
                            <div class="summary">
                                You added
                                <a>Jenny Hess</a> to your
                                <a>coworker</a> group.
                                <div class="date">
                                    3 days ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ui tab" data-tab="fourth">
                <div class="ui form fluid">
                    <div class="grouped fields">
                        <label>Notifications</label>
                        <div class="field">
                            <div class="ui toggle checkbox">
                                <input type="checkbox" checked name="public">
                                <label class="coloring red">Enabled</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui toggle checkbox">
                                <input type="checkbox" name="public">
                                <label class="coloring green">Updates</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui divider"></div>

                <h4 class="ui header">Navbar Color</h4>
                <div class="ui basic segment">
                    <ul class="colorlist">
                        <li>
                            <a class="ui segment yellow inverted" data-addClass="inverted yellow">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment red inverted" data-addClass="inverted red">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment blue inverted" data-addClass="inverted blue">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment black inverted" data-addClass="inverted black">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment orange inverted" data-addClass="inverted orange">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment pink inverted" data-addClass="inverted pink">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment green inverted" data-addClass="inverted green">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment purple inverted" data-addClass="inverted purple">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment violet inverted" data-addClass="inverted violet">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment brown inverted" data-addClass="inverted brown">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment teal inverted" data-addClass="inverted teal">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment greenli inverted" data-addClass="inverted greenli">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment grey inverted" data-addClass="inverted grey">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment redli inverted" data-addClass="inverted redli">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment yellowli inverted" data-addClass="inverted yellowli">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment blueli inverted" data-addClass="inverted blueli">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment darkpurpleli inverted" data-addClass="inverted darkpurpleli">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment darkorangeli inverted" data-addClass="inverted darkorangeli">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment greenli2 inverted" data-addClass="inverted greenli2">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment pinkli inverted" data-addClass="inverted pinkli">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment lightyellowli inverted" data-addClass="inverted lightyellowli">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment darkli inverted" data-addClass="inverted darkli">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment lightbrownli inverted" data-addClass="inverted lightbrownli">
                            </a>
                        </li>
                    </ul>
                </div>
                <h4 class="ui header">Sidebar Color</h4>
                <div class="ui basic segment">

                    <ul class="sidecolor">
                        <li>
                            <a class="ui segment yellow inverted" data-addClass="inverted yellow">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment red inverted" data-addClass="inverted red">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment blue inverted" data-addClass="inverted blue">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment black inverted" data-addClass="inverted black">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment orange inverted" data-addClass="inverted orange">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment pink inverted" data-addClass="inverted pink">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment green inverted" data-addClass="inverted green">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment purple inverted" data-addClass="inverted purple">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment violet inverted" data-addClass="inverted violet">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment brown inverted" data-addClass="inverted brown">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment teal inverted" data-addClass="inverted teal">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment greenli inverted" data-addClass="inverted greenli">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment grey inverted" data-addClass="inverted grey">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment redli inverted" data-addClass="inverted redli">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment yellowli inverted" data-addClass="inverted yellowli">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment blueli inverted" data-addClass="inverted blueli">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment darkpurpleli inverted" data-addClass="inverted darkpurpleli">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment darkorangeli inverted" data-addClass="inverted darkorangeli">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment greenli2 inverted" data-addClass="inverted greenli2">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment pinkli inverted" data-addClass="inverted pinkli">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment lightyellowli inverted" data-addClass="inverted lightyellowli">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment darkli inverted" data-addClass="inverted darkli">
                            </a>
                        </li>
                        <li>
                            <a class="ui segment lightbrownli inverted" data-addClass="inverted lightbrownli">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="pusher">
            <!--navbar-->
            <div class="navslide navwrap">
                <div class="ui menu icon borderless grid" data-color="inverted white">
                    <a class="item labeled openbtn">
                        <i class="ion-navicon-round big icon"></i>
                    </a>
                    <a class="item labeled expandit" onclick="toggleFullScreen(document.body)">
                        <i class="ion-arrow-expand big icon"></i>
                    </a>
                    <div class="item ui colhidden">
                        <div class="ui icon input">
                            <input type="text" placeholder="Search...">
                            <i class="search icon"></i>
                        </div>
                    </div>
                    <div class="right menu colhidden">

                        <div class="ui dropdown item labeled icon">
                            <i class="bell icon"></i>
                            <div class="ui red label mini circular">6</div>
                            <div class="menu">
                                <div class="header">
                                    Manga Updates
                                </div>
                                <div class="item">
                                    <img class="ui avatar image" src="img/avatar/people/Meggie.png" alt="label-image" /> Pauline Cain
                                </div>
                            </div>
                        </div>
                        <div class="ui dropdown item">
                            Language
                            <i class="dropdown icon"></i>
                            <div class="menu">
                                <a class="item">
                                    <i class="united kingdom flag"></i>English</a>
                                <a class="item">
                                    <i class="indonesia flag"></i>Indonesia</a>
                            </div>
                        </div>
                        <div class="ui dropdown item">
                            <img class="ui mini circular image" src="img/avatar/people/enid.png" alt="label-image" />
                            <div class="menu">
                                <a class="item" href="mail.html">Inbox</a>
                                <a class="item" href="profile.html">Profile</a>
                                <a class="item" href="settings.html">Settings</a>
                                <div class="ui divider"></div>
                                <a class="item">Need Help?</a>
                                <a class="item" href="login.html">Sign Out</a>
                            </div>
                        </div>
                        <a class="item labeled rightsidebar computer only">
                            <i class="ion-wrench large icon"></i>
                        </a>

                    </div>
                </div>
            </div>
            <!--navbar-->
            <!--maincontent-->
            <div class="mainWrap navslide">
                <div class="ui equal width left aligned padded grid stackable">
                    <!--Site Content-->

                    @yield('content')
                    <!--Site Content-->
                </div>
            </div>
            <!--maincontent-->
        </div>
    </div>
    <!--jquery-->
    <script src="{{asset('js/app.js')}}"></script>
    <!--jquery-->
    <!--semantic-->
    <script src="{{ asset('js/semantic.min.js') }}"></script>
    <!--semantic-->
    <script src="{{asset('js/js.cookie-2.2.0.min.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>

    <script data-pace-options='{ "ajax": false }' src="{{asset('js/pace.js')}}"></script>

    <script src="{{asset('js/admin.js')}}"></script>
</body>

</html>