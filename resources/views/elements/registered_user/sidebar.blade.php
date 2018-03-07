<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
  <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
  <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
  <div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->

    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
      <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
      {{-- <li class="sidebar-search-wrapper">
        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
        <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
        <form class="sidebar-search " action="extra_search.html" method="POST">
          <a href="javascript:;" class="remove">
          <i class="icon-close"></i>
          </a>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
            <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
            </span>
          </div>
        </form>
        <!-- END RESPONSIVE QUICK SEARCH FORM -->
      </li> --}}



      <li class="start {{{ (General::classActivePath('home') ? 'active open' : '') }}}">
        <a href="{{ route('home') }}">
        <i class="icon-home"></i>

          <span class="title">HOME</span>
        @if (General::classActivePath('home'))
          <span class=selected></span>
        @endif
        <span class="{{{ (General::classActivePath('home') ? 'open' : '') }}}"></span>
        </a>

      </li>
      {{--  <li>
        <a href="javascript:;">
        <i class="icon-user"></i>
        <span class="title">ME</span>
        <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
          <li>
            <a href="ecommerce_index.html">
            Leave</a>
          </li>
          <li>
            <a href="ecommerce_orders.html">
            timesheet</a>
          </li>
          <li>
            <a href="ecommerce_orders_view.html">
            Attendance</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="javascript:;">
        <i class="fa fa-group"></i>
        <span class="title">MY TEAM</span>
        <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
          <li>
            <a href="layout_horizontal_sidebar_menu.html">
            Summary</a>
          </li>
          <li>
            <a href="index_horizontal_menu.html">
            Leave</a>
          </li>
          <li>
            <a href="layout_horizontal_menu1.html">
            Attendance</a>
          </li>
          <li>
            <a href="layout_horizontal_menu2.html">
            Expenses</a>
          </li>
          <li>
            <a href="layout_search_on_header1.html">
            Profile Approvals</a>
          </li>
          <li>
            <a href="layout_search_on_header2.html">
            Reports</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="javascript:;">
        <i class="icon-wallet"></i>
        <span class="title">MY FINANCE</span>
        <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
          <li>
            <a href="ui_general.html">
            Summary</a>
          </li>
          <li>
            <a href="ui_buttons.html">
            My Pay</a>
          </li>
          <li>
            <a href="ui_confirmations.html">
            Manage Tax</a>
          </li>
          <li>
            <a href="ui_colors.html">
            Preferences</a>
          </li>
          <li>
            <a href="ui_typography.html">
            Expenses</a>
          </li>
          <li>
            <a href="ui_tabs_accordions_navs.html">
            Loans</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="javascript:;">
        <i class="icon-rocket"></i>
        <span class="title">TO DO</span>
        <span class="arrow "></span>
        </a>
      </li>
      <li>
        <a href="javascript:;">
        <i class="fa fa-group"></i>
        <span class="title">EMPLOYEES</span>
        <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
          <li>
            <a href="components_pickers.html">
            Dashboard</a>
          </li>
          <li>
            <a href="components_context_menu.html">
            Analytics</a>
          </li>
          <li>
            <a href="components_dropdowns.html">
            Documents</a>
          </li>
          <li>
            <a href="components_form_tools.html">
            Expenses</a>
          </li>
          <li>
            <a href="components_editors.html">
            Exits</a>
          </li>
          <li>
            <a href="components_ion_sliders.html">
            Offers</a>
          </li>
          <li>
            <a href="components_noui_sliders.html">
            Directory</a>
          </li>
          <li>
            <a href="components_jqueryui_sliders.html">
            Engage</a>
          </li>
          <li>
            <a href="components_knob_dials.html">
            Assets</a>
          </li>
        </ul>
      </li>

      <li>
        <a href="javascript:;">
        <i class="icon-calendar"></i>
        <span class="title">TIMESHEET</span>
        <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
          <li>
            <a href="components_pickers.html">
            Summary</a>
          </li>
          <li>
            <a href="components_context_menu.html">
            Projects</a>
          </li>
          <li>
            <a href="components_dropdowns.html">
            Clients</a>
          </li>
          <li>
            <a href="components_form_tools.html">
            Invoicing</a>
          </li>
          <li>
            <a href="components_editors.html">
            Reports</a>
          </li>
          <li>
            <a href="components_ion_sliders.html">
            Bulk Import</a>
          </li>
          <li>
            <a href="components_noui_sliders.html">
            Timesheets</a>
          </li>
          <li>
            <a href="components_jqueryui_sliders.html">
            Task Repository</a>
          </li>
        </ul>
      </li>

      <li>
        <a href="javascript:;">
        <i class="icon-handbag"></i>
        <span class="title">TIME ATTENDENCE</span>
        <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
          <li>
            <a href="form_controls.html">
            Dashboard</a>
          </li>
          <li>
            <a href="form_icheck.html">
            Approvals</a>
          </li>
          <li>
            <a href="form_layouts.html">
            Reports</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="javascript:;">
        <i class="icon-briefcase"></i>
        <span class="title">PAYROLL</span>
        <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
          <li>
            <a href="table_basic.html">
            Run Payroll</a>
          </li>
          <li>
            <a href="table_tree.html">
            Payroll Admin</a>
          </li>
          <li>
            <a href="table_responsive.html">
            Loans</a>
          </li>
          <li>
            <a href="table_managed.html">
            Perks</a>
          </li>
          <li>
            <a href="table_editable.html">
            Reports</a>
          </li>
        </ul>
      </li>  --}}
      <li class="{{{ (General::classActivePath('settings.company.general') ? 'active open' : '') }}}">
        <a href="javascript:;">
        <i class="icon-settings"></i>
        <span class="title">SETTINGS</span>
        @if (General::classActivePath('settings.company.general'))
          <span class=selected></span>
        @endif
        <span class="{{{ (General::classActivePath('settings.company.general') ? 'open' : '') }}}"></span>
        </a>
      </li>



    </ul>


    <!-- END SIDEBAR MENU -->
  </div>
</div>
<!-- END SIDEBAR -->
