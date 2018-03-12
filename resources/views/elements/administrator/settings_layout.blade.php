<div class="col-md-2 sidebar-content ">
        <ul class="ver-inline-menu tabbable margin-bottom-25">
            {{--  <li class="active">
                <a href="#tab_1" aria-expanded="false">



                    <strong>Company Settings</strong>
                    <br/> General info, Legal entities, Locations, Business units and Department settings
                </a>

            </li>  --}}
            
            <li class="{{{ (General::classActivePath('admin.settings') ? 'active' : '') }}}">
                <a href="{{ route('admin.settings.general') }}" aria-expanded="false">
                    <strong>Website Settings</strong>
                    <br/> Home Page Content, Header Menu, Footer Menu
                </a>
            </li>
            <li class="">
                <a href="{{ route('admin.settings.sms') }}" aria-expanded="false">
                    <strong>SMS Settings</strong>
                    <br/> SMS Authentication Credential
                </a>
            </li>
            <li class="">
                <a href="{{ route('admin.settings.rools') }}" aria-expanded="true">
                    <strong>Roles & Permissions</strong>
                    <br/> Manage roles and permissions
                </a>
            </li>

            {{--  <li class="">
                <a href="#tab_3" data-toggle="tab" aria-expanded="true">
                    <strong>Integrations</strong>
                    <br/> Login Integrations
                </a>
            </li>  --}}

        </ul>
    </div>
    <div class="col-md-10 col-sm-10 col-xs-10">
        <div class="page-bar">
            <div class="portlet-title tabbable-line">
                <ul class="nav nav-tabs">
                    <li class="{{{ (General::classActivePath('admin.settings.web.general') ? 'active' : '') }}}">
                        <a href="{{ route('admin.settings.general') }}" aria-expanded="false">
                           General Settings </a>
                    </li>
                    <li class="{{{ (General::classActivePath('admin.settings.web.site-pages')  ? 'active' : '') }}}">
                        <a href="{{ route('admin.settings.sitepages') }}" aria-expanded="false">
                           Manage Site Pages </a>
                    </li>
                    <li class="{{{ (General::classActivePath('admin.settings.web.site-menues')  ? 'active' : '') }}}">
                        <a href="{{ route('admin.settings.sitemenues') }}" aria-expanded="true">
                            Site Menues </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>