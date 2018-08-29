<!--<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Collapsibles | Materialize - Material Design Admin Template</title>
     Favicons
    <link rel="icon" href="/images/favicon/favicon-32x32.png" sizes="32x32">
     Favicons
    <link rel="apple-touch-icon-precomposed" href="/images/favicon/apple-touch-icon-152x152.png">
     For iPhone 
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
     For Windows Phone 
     CORE CSS
    <link href="/css/themes/horizontal-menu/materialize.css" type="text/css" rel="stylesheet">
    <link href="/css/themes/horizontal-menu/style.css" type="text/css" rel="stylesheet">
     Custome CSS
    <link href="/css/custom/custom.css" type="text/css" rel="stylesheet">
     CSS style Horizontal Nav
    <link href="/css/layouts/style-horizontal.css" type="text/css" rel="stylesheet">
     INCLUDED PLUGIN CSS ON THIS PAGE 
    <link href="/vendors/prism/prism.css" type="text/css" rel="stylesheet">
    <link href="/vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="/vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
  </head>
  <body id="layouts-horizontal">
     Start Page Loading 
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
     End Page Loading 
     //////////////////////////////////////////////////////////////////////////// 
     START HEADER 
    <header id="header" class="page-topbar">
       start header nav
      <div class="navbar-fixed">
        <nav class="navbar-color gradient-45deg-light-blue-cyan">
          <div class="nav-wrapper">
            <ul class="left">
              <li>
                <h1 class="logo-wrapper">
                  <a href="index.html" class="brand-logo darken-1">
                    <img src="/images/logo/materialize-logo.png" alt="materialize logo">
                    <span class="logo-text hide-on-med-and-down">Materialize</span>
                  </a>
                </h1>
              </li>
            </ul>
            <div class="header-search-wrapper hide-on-med-and-down">
              <i class="material-icons">search</i>
              <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize" />
            </div>
            <ul class="right hide-on-med-and-down">
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button" data-activates="translation-dropdown">
                  <span class="flag-icon flag-icon-gb"></span>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                  <i class="material-icons">settings_overscan</i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown">
                  <i class="material-icons">notifications_none
                    <small class="notification-badge orange accent-3">5</small>
                  </i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                  <span class="avatar-status avatar-online">
                    <img src="/images/avatar/avatar-7.png" alt="avatar">
                    <i></i>
                  </span>
                </a>
              </li>
              <li>
                <a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse">
                  <i class="material-icons">format_indent_increase</i>
                </a>
              </li>
            </ul>
             translation-button 
            <ul id="translation-dropdown" class="dropdown-content">
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-gb"></i> English</a>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-fr"></i> French</a>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-cn"></i> Chinese</a>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-de"></i> German</a>
              </li>
            </ul>
             notifications-dropdown 
            <ul id="notifications-dropdown" class="dropdown-content">
              <li>
                <h6>NOTIFICATIONS
                  <span class="new badge">5</span>
                </h6>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
              </li>
            </ul>
             profile-dropdown 
            <ul id="profile-dropdown" class="dropdown-content">
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">face</i> Profile</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">settings</i> Settings</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">live_help</i> Help</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">lock_outline</i> Lock</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">keyboard_tab</i> Logout</a>
              </li>
            </ul>
          </div>
        </nav>
         HORIZONTL NAV START
        <nav id="horizontal-nav" class="white hide-on-med-and-down">
          <div class="nav-wrapper">
            <ul id="ul-horizontal-nav" class="left hide-on-med-and-down">
              <li>
                <a class="dropdown-menu" href="#!" data-activates="Dashboarddropdown">
                  <i class="material-icons">dashboard</i>
                  <span>Dashboard
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
              <li>
                <a class="dropdown-menu" href="#!" data-activates="Templatesdropdown">
                  <i class="material-icons">dvr</i>
                  <span>Templates
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
              <li>
                <a class="dropdown-menu" href="#!" data-activates="Cardsdropdown">
                  <i class="material-icons">cast</i>
                  <span>Cards
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
              <li>
                <a href="app-email.html">
                  <i class="material-icons">mail_outline</i>
                  <span>Mailbox</span>
                </a>
              </li>
              <li>
                <a class="dropdown-menu" href="#!" data-activates="CSSdropdown">
                  <i class="material-icons">invert_colors</i>
                  <span>CSS
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
              <li>
                <a class="dropdown-menu" href="#!" data-activates="BasicUIdropdown">
                  <i class="material-icons">photo_filter</i>
                  <span>Basic UI
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
              <li class="active">
                <a class="dropdown-menu" href="#!" data-activates="AdvancedUIdropdown">
                  <i class="material-icons">library_add</i>
                  <span>Advanced UI
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
              <li>
                <a class="dropdown-menu" href="#!" data-activates="ExtraComponentsdropdown">
                  <i class="material-icons">add_to_queue</i>
                  <span>Extra Components
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
              <li>
                <a class="dropdown-menu" href="#!" data-activates="Tablesdropdown">
                  <i class="material-icons">border_all</i>
                  <span>Tables
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
              <li>
                <a class="dropdown-menu" href="#!" data-activates="Formsdropdown">
                  <i class="material-icons">chrome_reader_mode</i>
                  <span>Forms
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
              <li>
                <a class="dropdown-menu" href="#!" data-activates="Pagesdropdown">
                  <i class="material-icons">pages</i>
                  <span>Pages
                    <i class="material-icons right">keyboard_arrow_down</i>
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
         Dashboarddropdown 
        <ul id="Dashboarddropdown" class="dropdown-content dropdown-horizontal-list">
          <li><a href="dashboard-ecommerce.html">eCommerce</a></li>
          <li><a href="index.html">Analytics</a></li>
        </ul>
         Templatesdropdown 
        <ul id="Templatesdropdown" class="dropdown-content dropdown-horizontal-list">
          <li><a href="../collapsible-menu/">Collapsible Menu</a></li>
          <li><a href="../semi-dark-menu/">Semi Dark Menu</a></li>
          <li><a href="../fixed-menu/">Fixed Menu</a></li>
          <li><a href="../overlay-menu/">Overlay Menu</a></li>
          <li><a href="../horizontal-menu/">Horizontal Menu</a></li>
        </ul>
         Cardsdropdown 
        <ul id="Cardsdropdown" class="dropdown-content dropdown-horizontal-list">
          <li><a href="cards-basic.html">Basic</a></li>
          <li><a href="cards-advance.html">Advance</a></li>
          <li><a href="cards-extended.html">Extended</a></li>
        </ul>
         CSSdropdown 
        <ul id="CSSdropdown" class="dropdown-content dropdown-horizontal-list">
          <li><a href="css-typography.html">Typography</a></li>
          <li><a href="css-color.html">Color</a></li>
          <li><a href="css-grid.html">Grid</a></li>
          <li><a href="css-helpers.html">Helpers</a></li>
          <li><a href="css-media.html">Media</a></li>
          <li><a href="css-pulse.html">Pulse</a></li>
          <li><a href="css-sass.html">Sass</a></li>
          <li><a href="css-shadow.html">Shadow</a></li>
          <li><a href="css-animations.html">Animations</a></li>
          <li><a href="css-transitions.html">Transition</a></li>
        </ul>
         BasicUIdropdown
        <ul id="BasicUIdropdown" class="dropdown-content dropdown-horizontal-list">
          <li><a href="ui-basic-buttons.html">Basic</a></li>
          <li><a href="ui-extended-buttons.html">Extended</a></li>
          <li><a href="ui-icons.html">Icons</a></li>
          <li><a href="ui-alerts.html">Alerts</a></li>
          <li><a href="ui-badges.html">Badges</a></li>
          <li><a href="ui-breadcrumbs.html">Breadcrumbs</a></li>
          <li><a href="ui-chips.html">Chips</a></li>
          <li><a href="ui-collections.html">Collections</a></li>
          <li><a href="ui-navbar.html">Navbar</a></li>
          <li><a href="ui-pagination.html">Pagination</a></li>
          <li><a href="ui-preloader.html">Preloader</a></li>
        </ul>
         AdvancedUIdropdown
        <ul id="AdvancedUIdropdown" class="dropdown-content dropdown-horizontal-list">
          <li class="active"><a href="advance-ui-carousel.html">Carousel</a></li>
          <li><a href="advance-ui-collapsibles.html">Collapsible</a></li>
          <li><a href="advance-ui-toasts.html">Toasts</a></li>
          <li><a href="advance-ui-tooltip.html">Tooltip</a></li>
          <li><a href="advance-ui-dropdown.html">Dropdown</a></li>
          <li><a href="advance-ui-feature-discovery.html">Feature Discovery</a></li>
          <li><a href="advanced-ui-media.html">Media</a></li>
          <li><a href="advanced-ui-modals.html">Modals</a></li>
          <li><a href="advance-ui-scrollfire.html">ScrollFire</a></li>
          <li><a href="advance-ui-scrollspy.html">Scrollspy</a></li>
          <li><a href="advance-ui-tabs.html">Tabs</a></li>
          <li><a href="advance-ui-transitions.html">Transitions</a></li>
          <li><a href="advance-ui-waves.html">Waves</a></li>
        </ul>
         ExtraComponentsdropdown
        <ul id="ExtraComponentsdropdown" class="dropdown-content dropdown-horizontal-list">
          <li><a href="extra-components-range-slider.html">Range Slider</a></li>
          <li><a href="extra-components-sweetalert.html">SweetAlert</a></li>
          <li><a href="extra-components-nestable.html">Shortable & Nestable</a></li>
          <li><a href="extra-components-translation.html">Language Translation</a></li>
          <li><a href="extra-components-highlight.html">Highlight</a></li>
        </ul>
         Tablesdropdown 
        <ul id="Tablesdropdown" class="dropdown-content dropdown-horizontal-list">
          <li><a href="table-basic.html">Basic Tables</a></li>
          <li><a href="table-data.html">Data Tables</a></li>
          <li><a href="table-jsgrid.html">jsGrid</a></li>
          <li><a href="table-editable.html">Editable Table</a></li>
          <li><a href="table-floatThead.html">FloatThead</a></li>
        </ul>
         Formsdropdown 
        <ul id="Formsdropdown" class="dropdown-content dropdown-horizontal-list">
          <li><a href="form-elements.html">Form Elements</a></li>
          <li><a href="form-layouts.html">Form Layouts</a></li>
          <li><a href="form-validation.html">Form Validations</a></li>
          <li><a href="form-masks.html">Form Masks</a></li>
          <li><a href="form-file-uploads.html">File Uploads</a></li>
        </ul>
         Pagesdropdown 
        <ul id="Pagesdropdown" class="dropdown-content dropdown-horizontal-list">
          <li><a href="page-contact.html">Contact Page</a></li>
          <li><a href="page-todo.html">ToDos</a></li>
          <li><a href="page-blog-1.html">Blog Type 1</a></li>
          <li><a href="page-blog-2.html">Blog Type 2</a></li>
          <li><a href="page-404.html">404</a></li>
          <li><a href="page-500.html">500</a></li>
          <li><a href="page-blank.html">Blank</a></li>
        </ul>
      </div>
       end header nav
    </header>
     END HEADER 
     //////////////////////////////////////////////////////////////////////////// 
     START MAIN 
    <div id="main">
       START WRAPPER 
      <div class="wrapper">
         START LEFT SIDEBAR NAV
        <aside id="left-sidebar-nav hide-on-large-only">
          <ul id="slide-out" class="side-nav leftside-navigation">
            <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion">
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">dashboard</i>
                    <span>Dashboard</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="index.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>eCommerce</span>
                        </a>
                      </li>
                      <li>
                        <a href="dashboard-analytics.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Analytics</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">dvr</i>
                    <span>Templates</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="collapsible-menu/">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span> Collapsible Menu</span>
                        </a>
                      </li>
                      <li>
                        <a href="fixed-menu/">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span> Fixed Menu</span>
                        </a>
                      </li>
                      <li>
                        <a href="overlay-menu/">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span> Overlay Menu</span>
                        </a>
                      </li>
                      <li>
                        <a href="horizontal-menu/">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Horizontal Menu</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">web</i>
                    <span>Layouts</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="layout-light.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Light Layout</span>
                        </a>
                      </li>
                      <li>
                        <a href="layout-dark.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Dark Layout</span>
                        </a>
                      </li>
                      <li>
                        <a href="layout-fixed-footer.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Fixed Footer</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">cast</i>
                    <span>Cards</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="cards-basic.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span> Basic</span>
                        </a>
                      </li>
                      <li>
                        <a href="cards-advance.html" class="waves-effect waves-cyan">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Advance</span>
                        </a>
                      </li>
                      <li>
                        <a href="cards-extended.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Extended</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a href="app-email.html" class="waves-effect waves-cyan">
                    <i class="material-icons">mail_outline</i>
                    <span>Mailbox</span>
                  </a>
                </li>
                <li class="bold">
                  <a href="app-calendar.html" class="waves-effect waves-cyan">
                    <i class="material-icons">today</i>
                    <span>Calender</span>
                  </a>
                </li>
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">invert_colors</i>
                    <span>CSS</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="css-typography.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Typography</span>
                        </a>
                      </li>
                      <li>
                        <a href="css-color.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Color</span>
                        </a>
                      </li>
                      <li>
                        <a href="css-grid.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Grid</span>
                        </a>
                      </li>
                      <li>
                        <a href="css-helpers.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Helpers</span>
                        </a>
                      </li>
                      <li>
                        <a href="css-media.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Media</span>
                        </a>
                      </li>
                      <li>
                        <a href="css-pulse.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Pulse</span>
                        </a>
                      </li>
                      <li>
                        <a href="css-sass.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Sass</span>
                        </a>
                      </li>
                      <li>
                        <a href="css-shadow.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Shadow</span>
                        </a>
                      </li>
                      <li>
                        <a href="css-animations.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Animations</span>
                        </a>
                      </li>
                      <li>
                        <a href="css-transitions.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Transition</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header  waves-effect waves-cyan">
                    <i class="material-icons">photo_filter</i>
                    <span>Basic UI</span>
                  </a>
                  <div class="collapsible-body">
                    <ul class="collapsible" data-collapsible="accordion">
                      <li class="bold">
                        <a class="collapsible-header  waves-effect waves-cyan">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Buttons</span>
                        </a>
                        <div class="collapsible-body">
                          <ul class="collapsible" data-collapsible="accordion">
                            <li>
                              <a href="ui-basic-buttons.html">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Basic</span>
                              </a>
                            </li>
                            <li>
                              <a href="ui-extended-buttons.html">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Extended</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li>
                        <a href="ui-icons.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Icons</span>
                        </a>
                      </li>
                      <li>
                        <a href="ui-alerts.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Alerts</span>
                        </a>
                      </li>
                      <li>
                        <a href="ui-badges.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Badges</span>
                        </a>
                      </li>
                      <li>
                        <a href="ui-breadcrumbs.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Breadcrumbs</span>
                        </a>
                      </li>
                      <li>
                        <a href="ui-chips.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Chips</span>
                        </a>
                      </li>
                      <li>
                        <a href="ui-collections.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Collections</span>
                        </a>
                      </li>
                      <li>
                        <a href="ui-navbar.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Navbar</span>
                        </a>
                      </li>
                      <li>
                        <a href="ui-pagination.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Pagination</span>
                        </a>
                      </li>
                      <li>
                        <a href="ui-preloader.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Preloader</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan active">
                    <i class="material-icons">library_add</i>
                    <span>Advanced UI</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li class="active">
                        <a href="advance-ui-carousel.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Carousel</span>
                        </a>
                      </li>
                      <li>
                        <a href="advance-ui-collapsibles.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Collapsible</span>
                        </a>
                      </li>
                      <li>
                        <a href="advance-ui-toasts.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Toasts</span>
                        </a>
                      </li>
                      <li>
                        <a href="advance-ui-tooltip.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Tooltip</span>
                        </a>
                      </li>
                      <li>
                        <a href="advance-ui-dropdown.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Dropdown</span>
                        </a>
                      </li>
                      <li>
                        <a href="advance-ui-feature-discovery.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Feature Discovery</span>
                        </a>
                      </li>
                      <li>
                        <a href="advanced-ui-media.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Media</span>
                        </a>
                      </li>
                      <li>
                        <a href="advanced-ui-modals.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Modals</span>
                        </a>
                      </li>
                      <li>
                        <a href="advance-ui-scrollfire.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>ScrollFire</span>
                        </a>
                      </li>
                      <li>
                        <a href="advance-ui-scrollspy.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Scrollspy</span>
                        </a>
                      </li>
                      <li>
                        <a href="advance-ui-tabs.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Tabs</span>
                        </a>
                      </li>
                      <li>
                        <a href="advance-ui-transitions.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Transitions</span>
                        </a>
                      </li>
                      <li>
                        <a href="advance-ui-waves.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Waves</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">add_to_queue</i>
                    <span>Extra Components</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="extra-components-range-slider.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Range Slider</span>
                        </a>
                      </li>
                      <li>
                        <a href="extra-components-sweetalert.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>SweetAlert</span>
                        </a>
                      </li>
                      <li>
                        <a href="extra-components-nestable.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Shortable & Nestable</span>
                        </a>
                      </li>
                      <li>
                        <a href="extra-components-translation.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Language Translation</span>
                        </a>
                      </li>
                      <li>
                        <a href="extra-components-highlight.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Highlight</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header  waves-effect waves-cyan">
                    <i class="material-icons">border_all</i>
                    <span>Tables</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="table-basic.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Basic Tables</span>
                        </a>
                      </li>
                      <li>
                        <a href="table-data.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Data Tables</span>
                        </a>
                      </li>
                      <li>
                        <a href="table-jsgrid.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>jsGrid</span>
                        </a>
                      </li>
                      <li>
                        <a href="table-editable.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Editable Table</span>
                        </a>
                      </li>
                      <li>
                        <a href="table-floatThead.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>FloatThead</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header  waves-effect waves-cyan">
                    <i class="material-icons">chrome_reader_mode</i>
                    <span>Forms</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="form-elements.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Form Elements</span>
                        </a>
                      </li>
                      <li>
                        <a href="form-layouts.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Form Layouts</span>
                        </a>
                      </li>
                      <li>
                        <a href="form-validation.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Form Validations</span>
                        </a>
                      </li>
                      <li>
                        <a href="form-masks.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Form Masks</span>
                        </a>
                      </li>
                      <li>
                        <a href="form-file-uploads.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>File Uploads</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header  waves-effect waves-cyan">
                    <i class="material-icons">pages</i>
                    <span>Pages</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="page-contact.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Contact Page</span>
                        </a>
                      </li>
                      <li>
                        <a href="page-todo.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>ToDos</span>
                        </a>
                      </li>
                      <li>
                        <a href="page-blog-1.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Blog Type 1</span>
                        </a>
                      </li>
                      <li>
                        <a href="page-blog-2.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Blog Type 2</span>
                        </a>
                      </li>
                      <li>
                        <a href="page-404.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>404</span>
                        </a>
                      </li>
                      <li>
                        <a href="page-500.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>500</span>
                        </a>
                      </li>
                      <li>
                        <a href="page-blank.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Blank</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header  waves-effect waves-cyan">
                    <i class="material-icons">add_shopping_cart</i>
                    <span>eCommers</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="eCommerce-products-page.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Products Page</span>
                        </a>
                      </li>
                      <li>
                        <a href="eCommerce-pricing.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Pricing Table</span>
                        </a>
                      </li>
                      <li>
                        <a href="eCommerce-invoice.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Invoice</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header  waves-effect waves-cyan">
                    <i class="material-icons">perm_media</i>
                    <span>Medias</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="media-gallary-page.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Gallery Page</span>
                        </a>
                      </li>
                      <li>
                        <a href="media-hover-effects.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Image Hover Effects</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header  waves-effect waves-cyan">
                    <i class="material-icons">account_circle</i>
                    <span>User</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="user-profile-page.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>User Profile</span>
                        </a>
                      </li>
                      <li>
                        <a href="user-login.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Login</span>
                        </a>
                      </li>
                      <li>
                        <a href="user-register.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Register</span>
                        </a>
                      </li>
                      <li>
                        <a href="user-forgot-password.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Forgot Password</span>
                        </a>
                      </li>
                      <li>
                        <a href="user-lock-screen.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Lock Screen</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">pie_chart_outlined</i>
                    <span>Charts</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="charts-chartjs.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Chart JS</span>
                        </a>
                      </li>
                      <li>
                        <a href="charts-chartist.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Chartist</span>
                        </a>
                      </li>
                      <li>
                        <a href="charts-morris.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Morris Charts</span>
                        </a>
                      </li>
                      <li>
                        <a href="charts-xcharts.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>xCharts</span>
                        </a>
                      </li>
                      <li>
                        <a href="charts-flotcharts.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Flot Charts</span>
                        </a>
                      </li>
                      <li>
                        <a href="charts-sparklines.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Sparkline Charts</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </li>
            <li class="li-hover">
              <p class="ultra-small margin more-text">MORE</p>
            </li>
            <li>
              <a href="angular-ui.html">
                <i class="material-icons">verified_user</i>
                <span>Angular UI</span>
              </a>
            </li>
            <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion">
                <li class="bold">
                  <a class="collapsible-header  waves-effect waves-cyan">
                    <i class="material-icons">photo_filter</i>
                    <span>Menu Levels</span>
                  </a>
                  <div class="collapsible-body">
                    <ul class="collapsible" data-collapsible="accordion">
                      <li>
                        <a href="ui-basic-buttons.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Second level</span>
                        </a>
                      </li>
                      <li class="bold">
                        <a class="collapsible-header  waves-effect waves-cyan">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Second level child</span>
                        </a>
                        <div class="collapsible-body">
                          <ul class="collapsible" data-collapsible="accordion">
                            <li>
                              <a href="ui-basic-buttons.html">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Third level</span>
                              </a>
                            </li>
                            <li class="bold">
                              <a class="collapsible-header  waves-effect waves-cyan">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Third level child</span>
                              </a>
                              <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">
                                  <li>
                                    <a href="ui-basic-buttons.html">
                                      <i class="material-icons">keyboard_arrow_right</i>
                                      <span>Forth level</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="ui-extended-buttons.html">
                                      <i class="material-icons">keyboard_arrow_right</i>
                                      <span>Forth level</span>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </li>
            <li>
              <a href="changelogs.html">
                <i class="material-icons">track_changes</i>
                <span>Changelogs</span>
              </a>
            </li>
            <li>
              <a href="changelogs.html">
                <i class="material-icons">help_outline</i>
                <span>Support</span>
              </a>
            </li>
          </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
            <i class="material-icons">menu</i>
          </a>
        </aside>
         END LEFT SIDEBAR NAV
         //////////////////////////////////////////////////////////////////////////// 
         START CONTENT 
        <section id="content">

          <div class="container">
            <div class="section">

               <?= $this->Flash->render() ?>
    
        <?= $this->fetch('content') ?>
            </div>
             Floating Action Button 
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
              <a class="btn-floating btn-large">
                <i class="material-icons">add</i>
              </a>
              <ul>
                <li>
                  <a href="css-helpers.html" class="btn-floating blue">
                    <i class="material-icons">help_outline</i>
                  </a>
                </li>
                <li>
                  <a href="cards-extended.html" class="btn-floating green">
                    <i class="material-icons">widgets</i>
                  </a>
                </li>
                <li>
                  <a href="app-calendar.html" class="btn-floating amber">
                    <i class="material-icons">today</i>
                  </a>
                </li>
                <li>
                  <a href="app-email.html" class="btn-floating red">
                    <i class="material-icons">mail_outline</i>
                  </a>
                </li>
              </ul>
            </div>
             Floating Action Button 
          </div>
          end container
        </section>
         END CONTENT 
         //////////////////////////////////////////////////////////////////////////// 
         START RIGHT SIDEBAR NAV
        <aside id="right-sidebar-nav">
          <ul id="chat-out" class="side-nav rightside-navigation">
            <li class="li-hover">
              <div class="row">
                <div class="col s12 border-bottom-1 mt-5">
                  <ul class="tabs">
                    <li class="tab col s4">
                      <a href="#activity" class="active">
                        <span class="material-icons">graphic_eq</span>
                      </a>
                    </li>
                    <li class="tab col s4">
                      <a href="#chatapp">
                        <span class="material-icons">face</span>
                      </a>
                    </li>
                    <li class="tab col s4">
                      <a href="#settings">
                        <span class="material-icons">settings</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div id="settings" class="col s12">
                  <h6 class="mt-5 mb-3 ml-3">GENERAL SETTINGS</h6>
                  <ul class="collection border-none">
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Notifications</span>
                        <div class="switch right">
                          <label>
                            <input checked type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show recent activity</span>
                        <div class="switch right">
                          <label>
                            <input checked type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Notifications</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show recent activity</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show your emails</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show Task statistics</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                  </ul>
                </div>
                <div id="chatapp" class="col s12">
                  <div class="collection border-none">
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images/avatar/avatar-1.png" alt="" class="circle cyan">
                      <span class="line-height-0">Elizabeth Elliott </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">5.00 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Thank you </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images/avatar/avatar-2.png" alt="" class="circle deep-orange accent-2">
                      <span class="line-height-0">Mary Adams </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">4.14 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Hello Boo </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images/avatar/avatar-3.png" alt="" class="circle teal accent-4">
                      <span class="line-height-0">Caleb Richards </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">9.00 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Keny ! </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images/avatar/avatar-4.png" alt="" class="circle cyan">
                      <span class="line-height-0">June Lane </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">4.14 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Ohh God </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images/avatar/avatar-5.png" alt="" class="circle red accent-2">
                      <span class="line-height-0">Edward Fletcher </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">5.15 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Love you </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images/avatar/avatar-6.png" alt="" class="circle deep-orange accent-2">
                      <span class="line-height-0">Crystal Bates </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">8.00 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Can we </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images/avatar/avatar-7.png" alt="" class="circle cyan">
                      <span class="line-height-0">Nathan Watts </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">9.53 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Great! </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images/avatar/avatar-8.png" alt="" class="circle red accent-2">
                      <span class="line-height-0">Willard Wood </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">4.20 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Do it </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images/avatar/avatar-9.png" alt="" class="circle teal accent-4">
                      <span class="line-height-0">Ronnie Ellis </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">5.30 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Got that </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images/avatar/avatar-1.png" alt="" class="circle cyan">
                      <span class="line-height-0">Gwendolyn Wood </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">4.34 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Like you </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images/avatar/avatar-2.png" alt="" class="circle red accent-2">
                      <span class="line-height-0">Daniel Russell </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">12.00 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Thank you </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images/avatar/avatar-3.png" alt="" class="circle teal accent-4">
                      <span class="line-height-0">Sarah Graves </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">11.14 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Okay you </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images/avatar/avatar-4.png" alt="" class="circle red accent-2">
                      <span class="line-height-0">Andrew Hoffman </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">7.30 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Can do </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images/avatar/avatar-5.png" alt="" class="circle cyan">
                      <span class="line-height-0">Camila Lynch </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">2.00 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Leave it </p>
                    </a>
                  </div>
                </div>
                <div id="activity" class="col s12">
                  <h6 class="mt-5 mb-3 ml-3">RECENT ACTIVITY</h6>
                  <div class="activity">
                    <div class="col s3 mt-2 center-align recent-activity-list-icon">
                      <i class="material-icons white-text icon-bg-color deep-purple lighten-2">add_shopping_cart</i>
                    </div>
                    <div class="col s9 recent-activity-list-text">
                      <a href="#" class="deep-purple-text medium-small">just now</a>
                      <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jim Doe Purchased new equipments for zonal office.</p>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color cyan lighten-2">airplanemode_active</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="cyan-text medium-small">Yesterday</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Your Next flight for USA will be on 15th August 2015.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
                        <i class="material-icons white-text icon-bg-color green lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="green-text medium-small">5 Days Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color amber lighten-2">store</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="amber-text medium-small">1 Week Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list row">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color deep-orange lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="deep-orange-text medium-small">2 Week Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
                        <i class="material-icons white-text icon-bg-color brown lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="brown-text medium-small">1 Month Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color deep-purple lighten-2">store</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="deep-purple-text medium-small">3 Month Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list row">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color grey lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="grey-text medium-small">1 Year Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </aside>
         END RIGHT SIDEBAR NAV
      </div>
       END WRAPPER 
    </div>
     END MAIN 
     //////////////////////////////////////////////////////////////////////////// 
     START FOOTER 
    <footer class="page-footer">
      <div class="footer-copyright">
        <div class="container">
          <span>Copyright ©
            <script type="text/javascript">
              document.write(new Date().getFullYear());
            </script> <a class="grey-text text-lighten-4" href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a> All rights reserved.</span>
          <span class="right hide-on-small-only"> Design and Developed by <a class="grey-text text-lighten-4" href="https://pixinvent.com/">PIXINVENT</a></span>
        </div>
      </div>
    </footer>
     END FOOTER 
     ================================================
    Scripts
    ================================================ 
     jQuery Library 
    <script type="text/javascript" src="/vendors/jquery-3.2.1.min.js"></script>
    materialize js
    <script type="text/javascript" src="/js/materialize.min.js"></script>
    prism
    <script type="text/javascript" src="/vendors/prism/prism.js"></script>
    scrollbar
    <script type="text/javascript" src="/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    plugins.js - Some Specific JS codes for Plugin Settings
    <script type="text/javascript" src="/js/plugins.js"></script>
    advance-ui-carousel.js - Page Specific JS codes
    <script type="text/javascript" src="/js/scripts/advance-ui-carousel.js"></script>
    custom-script.js - Add your own theme custom JS
    <script type="text/javascript" src="/js/custom-script.js"></script>
  </body>
</html>-->