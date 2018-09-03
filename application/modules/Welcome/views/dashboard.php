<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title>Angle - Bootstrap Admin Template</title>
   <!-- =============== VENDOR STYLES ===============-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="<?= base_url();?>/assets/vendor/fontawesome/css/font-awesome.min.css">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="<?= base_url();?>/assets/vendor/simple-line-icons/css/simple-line-icons.css">
   <!-- ANIMATE.CSS-->
   <link rel="stylesheet" href="<?= base_url();?>/assets/vendor/animate.css/animate.min.css">
   <!-- WHIRL (spinners)-->
   <link rel="stylesheet" href="<?= base_url();?>/assets/vendor/whirl/dist/whirl.css">
   <!-- =============== PAGE VENDOR STYLES ===============-->
   <!-- WEATHER ICONS-->
   <link rel="stylesheet" href="<?= base_url();?>/assets/vendor/weather-icons/css/weather-icons.min.css">
   <!-- CHOSEN-->
   <link rel="stylesheet" href="<?= base_url();?>/assets/vendor/chosen_v1.2.0/chosen.min.css">
   <!-- DATATABLES-->
   <link rel="stylesheet" href="<?= base_url();?>/assets/vendor/datatables-colvis/css/dataTables.colVis.css">
   <link rel="stylesheet" href="<?= base_url();?>/assets/vendor/datatables/media/css/dataTables.bootstrap.css">
   <link rel="stylesheet" href="<?= base_url();?>/assets/vendor/dataTables.fontAwesome/index.css">
   <!-- JQCLOUD-->
   <link rel="stylesheet" href="<?= base_url();?>/assets/vendor/jqcloud2/dist/jqcloud.css">
   <!-- FULLCALENDAR-->
   <link rel="stylesheet" href="<?= base_url();?>/assets/vendor/fullcalendar/dist/fullcalendar.css">
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="<?= base_url();?>/assets/css/bootstrap.css" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="<?= base_url();?>/assets/css/app.css" id="maincss">
</head>

<body>
   <div class="wrapper">
      <!-- top navbar-->
      <header class="topnavbar-wrapper">
         <!-- START Top Navbar-->
         <nav role="navigation" class="navbar topnavbar">
            <!-- START navbar header-->
            <div class="navbar-header">
               <a href="#/" class="navbar-brand">
                  <div class="brand-logo">
                     <img src="<?= base_url();?>/assets/img/logo.png" alt="App Logo" class="img-responsive">
                  </div>
                  <div class="brand-logo-collapsed">
                     <img src="<?= base_url();?>/assets/img/logo-single.png" alt="App Logo" class="img-responsive">
                  </div>
               </a>
            </div>
            <!-- END navbar header-->
            <!-- START Nav wrapper-->
            <div class="nav-wrapper">
               <!-- START Left navbar-->
               <ul class="nav navbar-nav">
                  <li>
                     <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                     <a href="#" data-trigger-resize="" data-toggle-state="aside-collapsed" class="hidden-xs">
                        <em class="fa fa-navicon"></em>
                     </a>
                     <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                     <a href="#" data-toggle-state="aside-toggled" data-no-persist="true" class="visible-xs sidebar-toggle">
                        <em class="fa fa-navicon"></em>
                     </a>
                  </li>
                  <!-- START User avatar toggle-->
                  <li>
                     <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                     <a id="user-block-toggle" href="#user-block" data-toggle="collapse">
                        <em class="icon-user"></em>
                     </a>
                  </li>
                  <!-- END User avatar toggle-->
                  <!-- START lock screen-->
                  <li>
                     <a href="lock.html" title="Lock screen">
                        <em class="icon-lock"></em>
                     </a>
                  </li>
                  <!-- END lock screen-->
               </ul>
               <!-- END Left navbar-->
               <!-- START Right Navbar-->
               <ul class="nav navbar-nav navbar-right">
                  <!-- Search icon-->
                  <li>
                     <a href="#" data-search-open="">
                        <em class="icon-magnifier"></em>
                     </a>
                  </li>
                  <!-- Fullscreen (only desktops)-->
                  <li class="visible-lg">
                     <a href="#" data-toggle-fullscreen="">
                        <em class="fa fa-expand"></em>
                     </a>
                  </li>
                  <!-- START Alert menu-->
                  <li class="dropdown dropdown-list">
                     <a href="#" data-toggle="dropdown">
                        <em class="icon-bell"></em>
                        <div class="label label-danger">11</div>
                     </a>
                     <!-- START Dropdown menu-->
                     <ul class="dropdown-menu animated flipInX">
                        <li>
                           <!-- START list group-->
                           <div class="list-group">
                              <!-- list item-->
                              <a href="#" class="list-group-item">
                                 <div class="media-box">
                                    <div class="pull-left">
                                       <em class="fa fa-twitter fa-2x text-info"></em>
                                    </div>
                                    <div class="media-box-body clearfix">
                                       <p class="m0">New followers</p>
                                       <p class="m0 text-muted">
                                          <small>1 new follower</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- list item-->
                              <a href="#" class="list-group-item">
                                 <div class="media-box">
                                    <div class="pull-left">
                                       <em class="fa fa-envelope fa-2x text-warning"></em>
                                    </div>
                                    <div class="media-box-body clearfix">
                                       <p class="m0">New e-mails</p>
                                       <p class="m0 text-muted">
                                          <small>You have 10 new emails</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- list item-->
                              <a href="#" class="list-group-item">
                                 <div class="media-box">
                                    <div class="pull-left">
                                       <em class="fa fa-tasks fa-2x text-success"></em>
                                    </div>
                                    <div class="media-box-body clearfix">
                                       <p class="m0">Pending Tasks</p>
                                       <p class="m0 text-muted">
                                          <small>11 pending task</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- last list item-->
                              <a href="#" class="list-group-item">
                                 <small>More notifications</small>
                                 <span class="label label-danger pull-right">14</span>
                              </a>
                           </div>
                           <!-- END list group-->
                        </li>
                     </ul>
                     <!-- END Dropdown menu-->
                  </li>
                  <!-- END Alert menu-->
                  <!-- START Offsidebar button-->
                  <li>
                     <a href="#" data-toggle-state="offsidebar-open" data-no-persist="true">
                        <em class="icon-notebook"></em>
                     </a>
                  </li>
                  <!-- END Offsidebar menu-->
               </ul>
               <!-- END Right Navbar-->
            </div>
            <!-- END Nav wrapper-->
            <!-- START Search form-->
            <form role="search" action="search.html" class="navbar-form">
               <div class="form-group has-feedback">
                  <input type="text" placeholder="Type and hit enter <?= base_url();?>." class="form-control">
                  <div data-search-dismiss="" class="fa fa-times form-control-feedback"></div>
               </div>
               <button type="submit" class="hidden btn btn-default">Submit</button>
            </form>
            <!-- END Search form-->
         </nav>
         <!-- END Top Navbar-->
      </header>
      <!-- sidebar-->
      <aside class="aside">
         <!-- START Sidebar (left)-->
         <div class="aside-inner">
            <nav data-sidebar-anyclick-close="" class="sidebar">
               <!-- START sidebar nav-->
               <ul class="nav">
                  <!-- START user info-->
                  <li class="has-user-block">
                     <div id="user-block" class="collapse">
                        <div class="item user-block">
                           <!-- User picture-->
                           <div class="user-block-picture">
                              <div class="user-block-status">
                                 <img src="<?= base_url();?>/assets/img/user/02.jpg" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle">
                                 <div class="circle circle-success circle-lg"></div>
                              </div>
                           </div>
                           <!-- Name and Job-->
                           <div class="user-block-info">
                              <span class="user-block-name">Hello, Mike</span>
                              <span class="user-block-role">Designer</span>
                           </div>
                        </div>
                     </div>
                  </li>
                  <!-- END user info-->
                  <!-- Iterates over all sidebar items-->
                  <li class="nav-heading ">
                     <span data-localize="sidebar.heading.HEADER">Main Navigation</span>
                  </li>
                  <li class=" ">
                     <a href="#dashboard" title="Dashboard" data-toggle="collapse">
                        <div class="pull-right label label-info">3</div>
                        <em class="icon-speedometer"></em>
                        <span data-localize="sidebar.nav.DASHBOARD">Dashboard</span>
                     </a>
                     <ul id="dashboard" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Dashboard</li>
                        <li class=" active">
                           <a href="dashboard.html" title="Dashboard v1">
                              <span>Dashboard v1</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="dashboard_v2.html" title="Dashboard v2">
                              <span>Dashboard v2</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="dashboard_v3.html" title="Dashboard v3">
                              <span>Dashboard v3</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=" ">
                     <a href="widgets.html" title="Widgets">
                        <div class="pull-right label label-success">30</div>
                        <em class="icon-grid"></em>
                        <span data-localize="sidebar.nav.WIDGETS">Widgets</span>
                     </a>
                  </li>
                  <li class=" ">
                     <a href="#layout" title="Layouts" data-toggle="collapse">
                        <em class="icon-layers"></em>
                        <span>Layouts</span>
                     </a>
                     <ul id="layout" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Layouts</li>
                        <li class=" ">
                           <a href="dashboard_h.html" title="Horizontal">
                              <span>Horizontal</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-heading ">
                     <span data-localize="sidebar.heading.COMPONENTS">Components</span>
                  </li>
                  <li class=" ">
                     <a href="#elements" title="Elements" data-toggle="collapse">
                        <em class="icon-chemistry"></em>
                        <span data-localize="sidebar.nav.element.ELEMENTS">Elements</span>
                     </a>
                     <ul id="elements" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Elements</li>
                        <li class=" ">
                           <a href="buttons.html" title="Buttons">
                              <span data-localize="sidebar.nav.element.BUTTON">Buttons</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="notifications.html" title="Notifications">
                              <span data-localize="sidebar.nav.element.NOTIFICATION">Notifications</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="sweetalert.html" title="Sweet Alert">
                              <span>Sweet Alert</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="tour.html" title="Tour">
                              <span>Tour</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="carousel.html" title="Carousel">
                              <span data-localize="sidebar.nav.element.INTERACTION">Carousel</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="spinners.html" title="Spinners">
                              <span data-localize="sidebar.nav.element.SPINNER">Spinners</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="animations.html" title="Animations">
                              <span data-localize="sidebar.nav.element.ANIMATION">Animations</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="dropdown-animations.html" title="Dropdown">
                              <span data-localize="sidebar.nav.element.DROPDOWN">Dropdown</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="nestable.html" title="Nestable">
                              <span>Nestable</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="sortable.html" title="Sortable">
                              <span>Sortable</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="panels.html" title="Panels">
                              <span data-localize="sidebar.nav.element.PANEL">Panels</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="portlets.html" title="Portlets">
                              <span data-localize="sidebar.nav.element.PORTLET">Portlets</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="grid.html" title="Grid">
                              <span data-localize="sidebar.nav.element.GRID">Grid</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="grid-masonry.html" title="Grid Masonry">
                              <span data-localize="sidebar.nav.element.GRID_MASONRY">Grid Masonry</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="typo.html" title="Typography">
                              <span data-localize="sidebar.nav.element.TYPO">Typography</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="icons-font.html" title="Font Icons">
                              <div class="pull-right label label-success">+400</div>
                              <span data-localize="sidebar.nav.element.FONT_ICON">Font Icons</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="icons-weather.html" title="Weather Icons">
                              <div class="pull-right label label-success">+100</div>
                              <span data-localize="sidebar.nav.element.WEATHER_ICON">Weather Icons</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="colors.html" title="Colors">
                              <span data-localize="sidebar.nav.element.COLOR">Colors</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=" ">
                     <a href="#forms" title="Forms" data-toggle="collapse">
                        <em class="icon-note"></em>
                        <span data-localize="sidebar.nav.form.FORM">Forms</span>
                     </a>
                     <ul id="forms" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Forms</li>
                        <li class=" ">
                           <a href="form-standard.html" title="Standard">
                              <span data-localize="sidebar.nav.form.STANDARD">Standard</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="form-extended.html" title="Extended">
                              <span data-localize="sidebar.nav.form.EXTENDED">Extended</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="form-validation.html" title="Validation">
                              <span data-localize="sidebar.nav.form.VALIDATION">Validation</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="form-wizard.html" title="Wizard">
                              <span>Wizard</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="form-upload.html" title="Upload">
                              <span>Upload</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="form-xeditable.html" title="xEditable">
                              <span>xEditable</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="form-imagecrop.html" title="Cropper">
                              <span>Cropper</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=" ">
                     <a href="#charts" title="Charts" data-toggle="collapse">
                        <em class="icon-graph"></em>
                        <span data-localize="sidebar.nav.chart.CHART">Charts</span>
                     </a>
                     <ul id="charts" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Charts</li>
                        <li class=" ">
                           <a href="chart-flot.html" title="Flot">
                              <span data-localize="sidebar.nav.chart.FLOT">Flot</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="chart-radial.html" title="Radial">
                              <span data-localize="sidebar.nav.chart.RADIAL">Radial</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="chart-js.html" title="Chart JS">
                              <span>Chart JS</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="chart-rickshaw.html" title="Rickshaw">
                              <span>Rickshaw</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="chart-morris.html" title="MorrisJS">
                              <span>MorrisJS</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="chart-chartist.html" title="Chartist">
                              <span>Chartist</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=" ">
                     <a href="#tables" title="Tables" data-toggle="collapse">
                        <em class="icon-grid"></em>
                        <span data-localize="sidebar.nav.table.TABLE">Tables</span>
                     </a>
                     <ul id="tables" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Tables</li>
                        <li class=" ">
                           <a href="table-standard.html" title="Standard">
                              <span data-localize="sidebar.nav.table.STANDARD">Standard</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="table-extended.html" title="Extended">
                              <span data-localize="sidebar.nav.table.EXTENDED">Extended</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="table-datatable.html" title="DataTables">
                              <span data-localize="sidebar.nav.table.DATATABLE">DataTables</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="table-jqgrid.html" title="jqGrid">
                              <span>jqGrid</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=" ">
                     <a href="#maps" title="Maps" data-toggle="collapse">
                        <em class="icon-map"></em>
                        <span data-localize="sidebar.nav.map.MAP">Maps</span>
                     </a>
                     <ul id="maps" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Maps</li>
                        <li class=" ">
                           <a href="maps-google.html" title="Google Maps">
                              <span data-localize="sidebar.nav.map.GOOGLE">Google Maps</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="maps-vector.html" title="Vector Maps">
                              <span data-localize="sidebar.nav.map.VECTOR">Vector Maps</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-heading ">
                     <span data-localize="sidebar.heading.MORE">More</span>
                  </li>
                  <li class=" ">
                     <a href="#pages" title="Pages" data-toggle="collapse">
                        <em class="icon-doc"></em>
                        <span data-localize="sidebar.nav.pages.PAGES">Pages</span>
                     </a>
                     <ul id="pages" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Pages</li>
                        <li class=" ">
                           <a href="login.html" title="Login">
                              <span data-localize="sidebar.nav.pages.LOGIN">Login</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="register.html" title="Sign up">
                              <span data-localize="sidebar.nav.pages.REGISTER">Sign up</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="recover.html" title="Recover Password">
                              <span data-localize="sidebar.nav.pages.RECOVER">Recover Password</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="lock.html" title="Lock">
                              <span data-localize="sidebar.nav.pages.LOCK">Lock</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="template.html" title="Starter Template">
                              <span data-localize="sidebar.nav.pages.STARTER">Starter Template</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="404.html" title="404">
                              <span>404</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="500.html" title="500">
                              <span>500</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="maintenance.html" title="Maintenance">
                              <span>Maintenance</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=" ">
                     <a href="#extras" title="Extras" data-toggle="collapse">
                        <em class="icon-cup"></em>
                        <span data-localize="sidebar.nav.extra.EXTRA">Extras</span>
                     </a>
                     <ul id="extras" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Extras</li>
                        <li class=" ">
                           <a href="#blog" title="Blog" data-toggle="collapse">
                              <em class="fa fa-angle-right"></em>
                              <span>Blog</span>
                           </a>
                           <ul id="blog" class="nav sidebar-subnav collapse">
                              <li class="sidebar-subnav-header">Blog</li>
                              <li class=" ">
                                 <a href="blog.html" title="List">
                                    <span>List</span>
                                 </a>
                              </li>
                              <li class=" ">
                                 <a href="blog-post.html" title="Post">
                                    <span>Post</span>
                                 </a>
                              </li>
                              <li class=" ">
                                 <a href="blog-articles.html" title="Articles">
                                    <span>Articles</span>
                                 </a>
                              </li>
                              <li class=" ">
                                 <a href="blog-article-view.html" title="Article View">
                                    <span>Article View</span>
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class=" ">
                           <a href="#ecommerce" title="eCommerce" data-toggle="collapse">
                              <em class="fa fa-angle-right"></em>
                              <span>eCommerce</span>
                           </a>
                           <ul id="ecommerce" class="nav sidebar-subnav collapse">
                              <li class="sidebar-subnav-header">eCommerce</li>
                              <li class=" ">
                                 <a href="ecommerce-orders.html" title="Orders">
                                    <div class="pull-right label label-info">10</div>
                                    <span>Orders</span>
                                 </a>
                              </li>
                              <li class=" ">
                                 <a href="ecommerce-order-view.html" title="Order View">
                                    <span>Order View</span>
                                 </a>
                              </li>
                              <li class=" ">
                                 <a href="ecommerce-products.html" title="Products">
                                    <span>Products</span>
                                 </a>
                              </li>
                              <li class=" ">
                                 <a href="ecommerce-product-view.html" title="Product View">
                                    <span>Product View</span>
                                 </a>
                              </li>
                              <li class=" ">
                                 <a href="ecommerce-checkout.html" title="Checkout">
                                    <span>Checkout</span>
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class=" ">
                           <a href="#forum" title="Forum" data-toggle="collapse">
                              <em class="fa fa-angle-right"></em>
                              <span>Forum</span>
                           </a>
                           <ul id="forum" class="nav sidebar-subnav collapse">
                              <li class="sidebar-subnav-header">Forum</li>
                              <li class=" ">
                                 <a href="forum-categories.html" title="Categories">
                                    <span>Categories</span>
                                 </a>
                              </li>
                              <li class=" ">
                                 <a href="forum-topics.html" title="Topics">
                                    <span>Topics</span>
                                 </a>
                              </li>
                              <li class=" ">
                                 <a href="forum-discussion.html" title="Discussion">
                                    <span>Discussion</span>
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class=" ">
                           <a href="contacts.html" title="Contacts">
                              <span>Contacts</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="contact-details.html" title="Contact details">
                              <span>Contact details</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="projects.html" title="Projects">
                              <span>Projects</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="project-details.html" title="Projects details">
                              <span>Projects details</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="team-viewer.html" title="Team viewer">
                              <span>Team viewer</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="social-board.html" title="Social board">
                              <span>Social board</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="vote-links.html" title="Vote links">
                              <span>Vote links</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="bug-tracker.html" title="Bug tracker">
                              <span>Bug tracker</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="faq.html" title="FAQ">
                              <span>FAQ</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="help-center.html" title="Help Center">
                              <span>Help Center</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="followers.html" title="Followers">
                              <span>Followers</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="settings.html" title="Settings">
                              <span>Settings</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="plans.html" title="Plans">
                              <span>Plans</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="file-manager.html" title="File manager">
                              <span>File manager</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="mailbox.html" title="Mailbox">
                              <span data-localize="sidebar.nav.extra.MAILBOX">Mailbox</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="timeline.html" title="Timeline">
                              <span data-localize="sidebar.nav.extra.TIMELINE">Timeline</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="calendar.html" title="Calendar">
                              <span data-localize="sidebar.nav.extra.CALENDAR">Calendar</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="invoice.html" title="Invoice">
                              <span data-localize="sidebar.nav.extra.INVOICE">Invoice</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="search.html" title="Search">
                              <span data-localize="sidebar.nav.extra.SEARCH">Search</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="todo.html" title="Todo List">
                              <span data-localize="sidebar.nav.extra.TODO">Todo List</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="profile.html" title="Profile">
                              <span data-localize="sidebar.nav.extra.PROFILE">Profile</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=" ">
                     <a href="#multilevel" title="Multilevel" data-toggle="collapse">
                        <em class="fa fa-folder-open-o"></em>
                        <span>Multilevel</span>
                     </a>
                     <ul id="multilevel" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Multilevel</li>
                        <li class=" ">
                           <a href="#level1" title="Level 1" data-toggle="collapse">
                              <span>Level 1</span>
                           </a>
                           <ul id="level1" class="nav sidebar-subnav collapse">
                              <li class="sidebar-subnav-header">Level 1</li>
                              <li class=" ">
                                 <a href="multilevel-1.html" title="Level1 Item">
                                    <span>Level1 Item</span>
                                 </a>
                              </li>
                              <li class=" ">
                                 <a href="#level2" title="Level 2" data-toggle="collapse">
                                    <span>Level 2</span>
                                 </a>
                                 <ul id="level2" class="nav sidebar-subnav collapse">
                                    <li class="sidebar-subnav-header">Level 2</li>
                                    <li class=" ">
                                       <a href="#level3" title="Level 3" data-toggle="collapse">
                                          <span>Level 3</span>
                                       </a>
                                       <ul id="level3" class="nav sidebar-subnav collapse">
                                          <li class="sidebar-subnav-header">Level 3</li>
                                          <li class=" ">
                                             <a href="multilevel-3.html" title="Level3 Item">
                                                <span>Level3 Item</span>
                                             </a>
                                          </li>
                                       </ul>
                                    </li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li class=" ">
                     <a href="documentation.html" title="Documentation">
                        <em class="icon-graduation"></em>
                        <span data-localize="sidebar.nav.DOCUMENTATION">Documentation</span>
                     </a>
                  </li>
               </ul>
               <!-- END sidebar nav-->
            </nav>
         </div>
         <!-- END Sidebar (left)-->
      </aside>
      <!-- offsidebar-->
      <aside class="offsidebar hide">
         <!-- START Off Sidebar (right)-->
         <nav>
            <div role="tabpanel">
               <!-- Nav tabs-->
               <ul role="tablist" class="nav nav-tabs nav-justified">
                  <li role="presentation" class="active">
                     <a href="#app-settings" aria-controls="app-settings" role="tab" data-toggle="tab">
                        <em class="icon-equalizer fa-lg"></em>
                     </a>
                  </li>
                  <li role="presentation">
                     <a href="#app-chat" aria-controls="app-chat" role="tab" data-toggle="tab">
                        <em class="icon-user fa-lg"></em>
                     </a>
                  </li>
               </ul>
               <!-- Tab panes-->
               <div class="tab-content">
                  <div id="app-settings" role="tabpanel" class="tab-pane fade in active">
                     <h3 class="text-center text-thin">Settings</h3>
                     <div class="p">
                        <h4 class="text-muted text-thin">Themes</h4>
                        <div class="table-grid mb">
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-a.css">
                                    <input type="radio" name="setting-theme" checked="checked">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-info"></span>
                                       <span class="color bg-info-light"></span>
                                    </span>
                                    <span class="color bg-white"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-b.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-green"></span>
                                       <span class="color bg-green-light"></span>
                                    </span>
                                    <span class="color bg-white"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-c.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-purple"></span>
                                       <span class="color bg-purple-light"></span>
                                    </span>
                                    <span class="color bg-white"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-d.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-danger"></span>
                                       <span class="color bg-danger-light"></span>
                                    </span>
                                    <span class="color bg-white"></span>
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="table-grid mb">
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-e.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-info-dark"></span>
                                       <span class="color bg-info"></span>
                                    </span>
                                    <span class="color bg-gray-dark"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-f.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-green-dark"></span>
                                       <span class="color bg-green"></span>
                                    </span>
                                    <span class="color bg-gray-dark"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-g.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-purple-dark"></span>
                                       <span class="color bg-purple"></span>
                                    </span>
                                    <span class="color bg-gray-dark"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-h.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-danger-dark"></span>
                                       <span class="color bg-danger"></span>
                                    </span>
                                    <span class="color bg-gray-dark"></span>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="p">
                        <h4 class="text-muted text-thin">Layout</h4>
                        <div class="clearfix">
                           <p class="pull-left">Fixed</p>
                           <div class="pull-right">
                              <label class="switch">
                                 <input id="chk-fixed" type="checkbox" data-toggle-state="layout-fixed">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                        <div class="clearfix">
                           <p class="pull-left">Boxed</p>
                           <div class="pull-right">
                              <label class="switch">
                                 <input id="chk-boxed" type="checkbox" data-toggle-state="layout-boxed">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                        <div class="clearfix">
                           <p class="pull-left">RTL</p>
                           <div class="pull-right">
                              <label class="switch">
                                 <input id="chk-rtl" type="checkbox">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="p">
                        <h4 class="text-muted text-thin">Aside</h4>
                        <div class="clearfix">
                           <p class="pull-left">Collapsed</p>
                           <div class="pull-right">
                              <label class="switch">
                                 <input id="chk-collapsed" type="checkbox" data-toggle-state="aside-collapsed">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                        <div class="clearfix">
                           <p class="pull-left">Collapsed Text</p>
                           <div class="pull-right">
                              <label class="switch">
                                 <input id="chk-collapsed-text" type="checkbox" data-toggle-state="aside-collapsed-text">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                        <div class="clearfix">
                           <p class="pull-left">Float</p>
                           <div class="pull-right">
                              <label class="switch">
                                 <input id="chk-float" type="checkbox" data-toggle-state="aside-float">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                        <div class="clearfix">
                           <p class="pull-left">Hover</p>
                           <div class="pull-right">
                              <label class="switch">
                                 <input id="chk-hover" type="checkbox" data-toggle-state="aside-hover">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                        <div class="clearfix">
                           <p class="pull-left">Show Scrollbar</p>
                           <div class="pull-right">
                              <label class="switch">
                                 <input id="chk-hover" type="checkbox" data-toggle-state="show-scrollbar" data-target=".sidebar">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="app-chat" role="tabpanel" class="tab-pane fade">
                     <h3 class="text-center text-thin">Connections</h3>
                     <ul class="nav">
                        <!-- START list title-->
                        <li class="p">
                           <small class="text-muted">ONLINE</small>
                        </li>
                        <!-- END list title-->
                        <li>
                           <!-- START User status-->
                           <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-success circle-lg"></span>
                              </span>
                              <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="<?= base_url();?>/assets/img/user/05.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                              <!-- Contact info-->
                              <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Juan Sims</strong>
                                    <br>
                                    <small class="text-muted">Designeer</small>
                                 </span>
                              </span>
                           </a>
                           <!-- END User status-->
                           <!-- START User status-->
                           <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-success circle-lg"></span>
                              </span>
                              <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="<?= base_url();?>/assets/img/user/06.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                              <!-- Contact info-->
                              <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Maureen Jenkins</strong>
                                    <br>
                                    <small class="text-muted">Designeer</small>
                                 </span>
                              </span>
                           </a>
                           <!-- END User status-->
                           <!-- START User status-->
                           <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-danger circle-lg"></span>
                              </span>
                              <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="<?= base_url();?>/assets/img/user/07.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                              <!-- Contact info-->
                              <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Billie Dunn</strong>
                                    <br>
                                    <small class="text-muted">Designeer</small>
                                 </span>
                              </span>
                           </a>
                           <!-- END User status-->
                           <!-- START User status-->
                           <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-warning circle-lg"></span>
                              </span>
                              <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="<?= base_url();?>/assets/img/user/08.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                              <!-- Contact info-->
                              <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Tomothy Roberts</strong>
                                    <br>
                                    <small class="text-muted">Designer</small>
                                 </span>
                              </span>
                           </a>
                           <!-- END User status-->
                        </li>
                        <!-- START list title-->
                        <li class="p">
                           <small class="text-muted">OFFLINE</small>
                        </li>
                        <!-- END list title-->
                        <li>
                           <!-- START User status-->
                           <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-lg"></span>
                              </span>
                              <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="<?= base_url();?>/assets/img/user/09.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                              <!-- Contact info-->
                              <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Lawrence Robinson</strong>
                                    <br>
                                    <small class="text-muted">Developer</small>
                                 </span>
                              </span>
                           </a>
                           <!-- END User status-->
                           <!-- START User status-->
                           <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-lg"></span>
                              </span>
                              <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="<?= base_url();?>/assets/img/user/10.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                              <!-- Contact info-->
                              <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Tyrone Owens</strong>
                                    <br>
                                    <small class="text-muted">Designer</small>
                                 </span>
                              </span>
                           </a>
                           <!-- END User status-->
                        </li>
                        <li>
                           <div class="p-lg text-center">
                              <!-- Optional link to list more users-->
                              <a href="#" title="See more contacts" class="btn btn-purple btn-sm">
                                 <strong>Load more<?= base_url();?></strong>
                              </a>
                           </div>
                        </li>
                     </ul>
                     <!-- Extra items-->
                     <div class="p">
                        <p>
                           <small class="text-muted">Tasks completion</small>
                        </p>
                        <div class="progress progress-xs m0">
                           <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-success progress-80">
                              <span class="sr-only">80% Complete</span>
                           </div>
                        </div>
                     </div>
                     <div class="p">
                        <p>
                           <small class="text-muted">Upload quota</small>
                        </p>
                        <div class="progress progress-xs m0">
                           <div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-warning progress-40">
                              <span class="sr-only">40% Complete</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </nav>
         <!-- END Off Sidebar (right)-->
      </aside>
      <!-- Main section-->
      <section>
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="content-heading">
               <!-- START Language list-->
               <div class="pull-right">
                  <div class="btn-group">
                     <button type="button" data-toggle="dropdown" class="btn btn-default">English</button>
                     <ul role="menu" class="dropdown-menu dropdown-menu-right animated fadeInUpShort">
                        <li><a href="#" data-set-lang="en">English</a>
                        </li>
                        <li><a href="#" data-set-lang="es">Spanish</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <!-- END Language list    -->
               Dashboard
               <small data-localize="dashboard.WELCOME"></small>
            </div>
            <!-- START widgets box-->
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <!-- START widget-->
                  <div class="panel widget bg-primary">
                     <div class="row row-table">
                        <div class="col-xs-4 text-center bg-primary-dark pv-lg">
                           <em class="icon-cloud-upload fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                           <div class="h2 mt0">1700</div>
                           <div class="text-uppercase">Uploads</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <!-- START widget-->
                  <div class="panel widget bg-purple">
                     <div class="row row-table">
                        <div class="col-xs-4 text-center bg-purple-dark pv-lg">
                           <em class="icon-globe fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                           <div class="h2 mt0">700
                              <small>GB</small>
                           </div>
                           <div class="text-uppercase">Quota</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-12">
                  <!-- START widget-->
                  <div class="panel widget bg-green">
                     <div class="row row-table">
                        <div class="col-xs-4 text-center bg-green-dark pv-lg">
                           <em class="icon-bubbles fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                           <div class="h2 mt0">500</div>
                           <div class="text-uppercase">Reviews</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-12">
                  <!-- START date widget-->
                  <div class="panel widget">
                     <div class="row row-table">
                        <div class="col-xs-4 text-center bg-green pv-lg">
                           <!-- See formats: https://docs.angularjs.org/api/ng/filter/date-->
                           <div data-now="" data-format="MMMM" class="text-sm"></div>
                           <br>
                           <div data-now="" data-format="D" class="h2 mt0"></div>
                        </div>
                        <div class="col-xs-8 pv-lg">
                           <div data-now="" data-format="dddd" class="text-uppercase"></div>
                           <br>
                           <div data-now="" data-format="h:mm" class="h2 mt0"></div>
                           <div data-now="" data-format="a" class="text-muted text-sm"></div>
                        </div>
                     </div>
                  </div>
                  <!-- END date widget    -->
               </div>
            </div>
            <!-- END widgets box-->
            <div class="row">
               <!-- START dashboard main content-->
               <div class="col-lg-9">
                  <!-- START chart-->
                  <div class="row">
                     <div class="col-lg-12">
                        <!-- START widget-->
                        <div id="panelChart9" class="panel panel-default panel-demo">
                           <div class="panel-heading">
                              <a href="#" data-tool="panel-refresh" data-toggle="tooltip" title="Refresh Panel" class="pull-right">
                                 <em class="fa fa-refresh"></em>
                              </a>
                              <a href="#" data-tool="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                                 <em class="fa fa-minus"></em>
                              </a>
                              <div class="panel-title">Inbound visitor statistics</div>
                           </div>
                           <div class="panel-body">
                              <div class="chart-spline flot-chart"></div>
                           </div>
                        </div>
                        <!-- END widget-->
                     </div>
                  </div>
                  <!-- END chart-->
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="panel widget">
                           <div class="row row-table">
                              <div class="col-md-2 col-sm-3 col-xs-6 text-center bg-info pv-xl">
                                 <em class="wi wi-day-sunny fa-4x"></em>
                              </div>
                              <div class="col-md-2 col-sm-3 col-xs-6 pv br">
                                 <div class="h1 m0 text-bold">32&deg;</div>
                                 <div class="text-uppercase">Clear</div>
                              </div>
                              <div class="col-md-2 col-sm-3 hidden-xs pv text-center br">
                                 <div class="text-info text-sm">10 AM</div>
                                 <div class="text-muted text-md">
                                    <em class="wi wi-day-cloudy"></em>
                                 </div>
                                 <div class="text-info">
                                    <em class="wi wi-sprinkles"></em>
                                    <span class="text-muted">20%</span>
                                 </div>
                                 <div class="text-muted">27&deg;</div>
                              </div>
                              <div class="col-md-2 col-sm-3 hidden-xs pv text-center br">
                                 <div class="text-info text-sm">11 AM</div>
                                 <div class="text-muted text-md">
                                    <em class="wi wi-day-cloudy"></em>
                                 </div>
                                 <div class="text-info">
                                    <em class="wi wi-sprinkles"></em>
                                    <span class="text-muted">30%</span>
                                 </div>
                                 <div class="text-muted">28&deg;</div>
                              </div>
                              <div class="col-md-2 hidden-sm hidden-xs pv text-center br">
                                 <div class="text-info text-sm">12 PM</div>
                                 <div class="text-muted text-md">
                                    <em class="wi wi-day-cloudy"></em>
                                 </div>
                                 <div class="text-info">
                                    <em class="wi wi-sprinkles"></em>
                                    <span class="text-muted">20%</span>
                                 </div>
                                 <div class="text-muted">30&deg;</div>
                              </div>
                              <div class="col-md-2 hidden-sm hidden-xs pv text-center">
                                 <div class="text-info text-sm">1 PM</div>
                                 <div class="text-muted text-md">
                                    <em class="wi wi-day-sunny-overcast"></em>
                                 </div>
                                 <div class="text-info">
                                    <em class="wi wi-sprinkles"></em>
                                    <span class="text-muted">0%</span>
                                 </div>
                                 <div class="text-muted">30&deg;</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4">
                        <!-- START widget-->
                        <div class="panel widget">
                           <div class="panel-body">
                              <div class="clearfix">
                                 <h3 class="pull-left text-muted mt0">300</h3>
                                 <em class="pull-right text-muted fa fa-coffee fa-2x"></em>
                              </div>
                              <div data-sparkline="" data-type="line" data-height="80" data-width="100%" data-line-width="2" data-line-color="#7266ba" data-spot-color="#888" data-min-spot-color="#7266ba" data-max-spot-color="#7266ba" data-fill-color=""
                              data-highlight-line-color="#fff" data-spot-radius="3" data-values="1,3,4,7,5,9,4,4,7,5,9,6,4" data-resize="true" class="pv-lg"></div>
                              <p>
                                 <small class="text-muted">Actual progress</small>
                              </p>
                              <div class="progress progress-xs">
                                 <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%" class="progress-bar progress-bar-info progress-bar-striped">
                                    <span class="sr-only">80% Complete</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- END widget-->
                     </div>
                     <div class="col-lg-8">
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <div class="pull-right label label-danger">5</div>
                              <div class="pull-right label label-success">12</div>
                              <div class="panel-title">Team messages</div>
                           </div>
                           <!-- START list group-->
                           <div data-height="180" data-scrollable="" class="list-group">
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media-box">
                                    <div class="pull-left">
                                       <img src="<?= base_url();?>/assets/img/user/02.jpg" alt="Image" class="media-box-object img-circle thumb32">
                                    </div>
                                    <div class="media-box-body clearfix">
                                       <small class="pull-right">2h</small>
                                       <strong class="media-box-heading text-primary">
                                          <span class="circle circle-success circle-lg text-left"></span>Catherine Ellis</strong>
                                       <p class="mb-sm">
                                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla<?= base_url();?>.</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media-box">
                                    <div class="pull-left">
                                       <img src="<?= base_url();?>/assets/img/user/03.jpg" alt="Image" class="media-box-object img-circle thumb32">
                                    </div>
                                    <div class="media-box-body clearfix">
                                       <small class="pull-right">3h</small>
                                       <strong class="media-box-heading text-primary">
                                          <span class="circle circle-success circle-lg text-left"></span>Jessica Silva</strong>
                                       <p class="mb-sm">
                                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla facilisi.</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media-box">
                                    <div class="pull-left">
                                       <img src="<?= base_url();?>/assets/img/user/09.jpg" alt="Image" class="media-box-object img-circle thumb32">
                                    </div>
                                    <div class="media-box-body clearfix">
                                       <small class="pull-right">4h</small>
                                       <strong class="media-box-heading text-primary">
                                          <span class="circle circle-danger circle-lg text-left"></span>Jessie Wells</strong>
                                       <p class="mb-sm">
                                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla<?= base_url();?>.</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media-box">
                                    <div class="pull-left">
                                       <img src="<?= base_url();?>/assets/img/user/12.jpg" alt="Image" class="media-box-object img-circle thumb32">
                                    </div>
                                    <div class="media-box-body clearfix">
                                       <small class="pull-right">1d</small>
                                       <strong class="media-box-heading text-primary">
                                          <span class="circle circle-danger circle-lg text-left"></span>Rosa Burke</strong>
                                       <p class="mb-sm">
                                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla<?= base_url();?>.</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media-box">
                                    <div class="pull-left">
                                       <img src="<?= base_url();?>/assets/img/user/10.jpg" alt="Image" class="media-box-object img-circle thumb32">
                                    </div>
                                    <div class="media-box-body clearfix">
                                       <small class="pull-right">2d</small>
                                       <strong class="media-box-heading text-primary">
                                          <span class="circle circle-danger circle-lg text-left"></span>Michelle Lane</strong>
                                       <p class="mb-sm">
                                          <small>Mauris eleifend, libero nec cursus lacinia<?= base_url();?>.</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                           </div>
                           <!-- END list group-->
                           <!-- START panel footer-->
                           <div class="panel-footer clearfix">
                              <div class="input-group">
                                 <input type="text" placeholder="Search message <?= base_url();?>" class="form-control input-sm">
                                 <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default btn-sm"><i class="fa fa-search"></i>
                                    </button>
                                 </span>
                              </div>
                           </div>
                           <!-- END panel-footer-->
                        </div>
                     </div>
                  </div>
               </div>
               <!-- END dashboard main content-->
               <!-- START dashboard sidebar-->
               <aside class="col-lg-3">
                  <!-- START loader widget-->
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <a href="#" class="text-muted pull-right">
                           <em class="fa fa-arrow-right"></em>
                        </a>
                        <div class="text-info">Average Monthly Uploads</div>
                        <canvas data-classyloader="" data-percentage="70" data-speed="20" data-font-size="40px" data-diameter="70" data-line-color="#23b7e5" data-remaining-line-color="rgba(200,200,200,0.4)" data-line-width="10"
                        data-rounded-line="true" class="center-block"></canvas>
                        <div data-sparkline="" data-bar-color="#23b7e5" data-height="30" data-bar-width="5" data-bar-spacing="2" data-values="5,4,8,7,8,5,4,6,5,5,9,4,6,3,4,7,5,4,7" class="text-center"></div>
                     </div>
                     <div class="panel-footer">
                        <p class="text-muted">
                           <em class="fa fa-upload fa-fw"></em>
                           <span>This Month</span>
                           <span class="text-dark">1000 Gb</span>
                        </p>
                     </div>
                  </div>
                  <!-- END loader widget-->
                  <!-- START messages and activity-->
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <div class="panel-title">Latest activities</div>
                     </div>
                     <!-- START list group-->
                     <div class="list-group">
                        <!-- START list group item-->
                        <div class="list-group-item">
                           <div class="media-box">
                              <div class="pull-left">
                                 <span class="fa-stack">
                                    <em class="fa fa-circle fa-stack-2x text-purple"></em>
                                    <em class="fa fa-cloud-upload fa-stack-1x fa-inverse text-white"></em>
                                 </span>
                              </div>
                              <div class="media-box-body clearfix">
                                 <small class="text-muted pull-right ml">15m</small>
                                 <div class="media-box-heading"><a href="#" class="text-purple m0">NEW FILE</a>
                                 </div>
                                 <p class="m0">
                                    <small><a href="#">Bootstrap.xls</a>
                                    </small>
                                 </p>
                              </div>
                           </div>
                        </div>
                        <!-- END list group item-->
                        <!-- START list group item-->
                        <div class="list-group-item">
                           <div class="media-box">
                              <div class="pull-left">
                                 <span class="fa-stack">
                                    <em class="fa fa-circle fa-stack-2x text-info"></em>
                                    <em class="fa fa-file-text-o fa-stack-1x fa-inverse text-white"></em>
                                 </span>
                              </div>
                              <div class="media-box-body clearfix">
                                 <small class="text-muted pull-right ml">2h</small>
                                 <div class="media-box-heading"><a href="#" class="text-info m0">NEW DOCUMENT</a>
                                 </div>
                                 <p class="m0">
                                    <small><a href="#">Bootstrap.doc</a>
                                    </small>
                                 </p>
                              </div>
                           </div>
                        </div>
                        <!-- END list group item-->
                        <!-- START list group item-->
                        <div class="list-group-item">
                           <div class="media-box">
                              <div class="pull-left">
                                 <span class="fa-stack">
                                    <em class="fa fa-circle fa-stack-2x text-danger"></em>
                                    <em class="fa fa-exclamation fa-stack-1x fa-inverse text-white"></em>
                                 </span>
                              </div>
                              <div class="media-box-body clearfix">
                                 <small class="text-muted pull-right ml">5h</small>
                                 <div class="media-box-heading"><a href="#" class="text-danger m0">BROADCAST</a>
                                 </div>
                                 <p class="m0"><a href="#">Read</a>
                                 </p>
                              </div>
                           </div>
                        </div>
                        <!-- END list group item-->
                        <!-- START list group item-->
                        <div class="list-group-item">
                           <div class="media-box">
                              <div class="pull-left">
                                 <span class="fa-stack">
                                    <em class="fa fa-circle fa-stack-2x text-success"></em>
                                    <em class="fa fa-clock-o fa-stack-1x fa-inverse text-white"></em>
                                 </span>
                              </div>
                              <div class="media-box-body clearfix">
                                 <small class="text-muted pull-right ml">15h</small>
                                 <div class="media-box-heading"><a href="#" class="text-success m0">NEW MEETING</a>
                                 </div>
                                 <p class="m0">
                                    <small>On
                                       <em>10/12/2015 09:00 am</em>
                                    </small>
                                 </p>
                              </div>
                           </div>
                        </div>
                        <!-- END list group item-->
                        <!-- START list group item-->
                        <div class="list-group-item">
                           <div class="media-box">
                              <div class="pull-left">
                                 <span class="fa-stack">
                                    <em class="fa fa-circle fa-stack-2x text-warning"></em>
                                    <em class="fa fa-tasks fa-stack-1x fa-inverse text-white"></em>
                                 </span>
                              </div>
                              <div class="media-box-body clearfix">
                                 <small class="text-muted pull-right ml">1w</small>
                                 <div class="media-box-heading"><a href="#" class="text-warning m0">TASKS COMPLETION</a>
                                 </div>
                                 <div class="progress progress-xs m0">
                                    <div role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%" class="progress-bar progress-bar-warning progress-bar-striped">
                                       <span class="sr-only">22% Complete</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- END list group item-->
                     </div>
                     <!-- END list group-->
                     <!-- START panel footer-->
                     <div class="panel-footer clearfix">
                        <a href="#" class="pull-left">
                           <small>Load more</small>
                        </a>
                     </div>
                     <!-- END panel-footer-->
                  </div>
                  <!-- END messages and activity-->
               </aside>
               <!-- END dashboard sidebar-->
            </div>
         </div>
      </section>
      <!-- Page footer-->
      <footer>
         <span>&copy; 2016 - Angle</span>
      </footer>
   </div>
   <!-- =============== VENDOR SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <script src="<?= base_url();?>/assets/vendor/modernizr/modernizr.custom.js"></script>
   <!-- MATCHMEDIA POLYFILL-->
   <script src="<?= base_url();?>/assets/vendor/matchMedia/matchMedia.js"></script>
   <!-- JQUERY-->
   <script src="<?= base_url();?>/assets/vendor/jquery/dist/jquery.js"></script>
   <!-- BOOTSTRAP-->
   <script src="<?= base_url();?>/assets/vendor/bootstrap/dist/js/bootstrap.js"></script>
   <!-- STORAGE API-->
   <script src="<?= base_url();?>/assets/vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
   <!-- JQUERY EASING-->
   <script src="<?= base_url();?>/assets/vendor/jquery.easing/js/jquery.easing.js"></script>
   <!-- ANIMO-->
   <script src="<?= base_url();?>/assets/vendor/animo.js/animo.js"></script>
   <!-- SLIMSCROLL-->
   <script src="<?= base_url();?>/assets/vendor/slimScroll/jquery.slimscroll.min.js"></script>
   <!-- SCREENFULL-->
   <script src="<?= base_url();?>/assets/vendor/screenfull/dist/screenfull.js"></script>
   <!-- LOCALIZE-->
   <script src="<?= base_url();?>/assets/vendor/jquery-localize-i18n/dist/jquery.localize.js"></script>
   <!-- RTL demo-->
   <script src="<?= base_url();?>/assets/js/demo/demo-rtl.js"></script>
   <!-- =============== PAGE VENDOR SCRIPTS ===============-->
   <!-- SPARKLINE-->
   <script src="<?= base_url();?>/assets/vendor/sparkline/index.js"></script>
   <!-- FLOT CHART-->
   <script src="<?= base_url();?>/assets/vendor/Flot/jquery.flot.js"></script>
   <script src="<?= base_url();?>/assets/vendor/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
   <script src="<?= base_url();?>/assets/vendor/Flot/jquery.flot.resize.js"></script>
   <script src="<?= base_url();?>/assets/vendor/Flot/jquery.flot.pie.js"></script>
   <script src="<?= base_url();?>/assets/vendor/Flot/jquery.flot.time.js"></script>
   <script src="<?= base_url();?>/assets/vendor/Flot/jquery.flot.categories.js"></script>
   <script src="<?= base_url();?>/assets/vendor/flot-spline/js/jquery.flot.spline.min.js"></script>
   <!-- CLASSY LOADER-->
   <script src="<?= base_url();?>/assets/vendor/jquery-classyloader/js/jquery.classyloader.min.js"></script>
   <!-- MOMENT JS-->
   <script src="<?= base_url();?>/assets/vendor/moment/min/moment-with-locales.min.js"></script>
   <!-- DEMO-->
   <script src="<?= base_url();?>/assets/js/demo/demo-flot.js"></script>
   <!-- CHOSEN-->
   <script src="<?= base_url();?>/assets/vendor/chosen_v1.2.0/chosen.jquery.min.js"></script>
   <!-- WYSIWYG-->
   <script src="<?= base_url();?>/assets/vendor/bootstrap-wysiwyg/bootstrap-wysiwyg.js"></script>
   <script src="<?= base_url();?>/assets/vendor/bootstrap-wysiwyg/external/jquery.hotkeys.js"></script>
   <!-- DATATABLES-->
   <script src="<?= base_url();?>/assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
   <script src="<?= base_url();?>/assets/vendor/datatables-colvis/js/dataTables.colVis.js"></script>
   <script src="<?= base_url();?>/assets/vendor/datatables/media/js/dataTables.bootstrap.js"></script>
   <!-- JQCLOUD-->
   <script src="<?= base_url();?>/assets/vendor/jqcloud2/dist/jqcloud.js"></script>
   <!-- Demo-->
   <script src="<?= base_url();?>/assets/js/demo/demo-jqcloud.js"></script>
   <!-- FULLCALENDAR-->
   <script src="<?= base_url();?>/assets/vendor/fullcalendar/dist/fullcalendar.min.js"></script>
   <script src="<?= base_url();?>/assets/vendor/fullcalendar/dist/gcal.js"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="<?= base_url();?>/assets/js/app.js"></script>
</body>

</html>