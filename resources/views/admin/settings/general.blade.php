@extends('layouts.administrator') @section('content')


<!-- BEGIN CONTENT -->
<div class="row companysettings">
    <div class="col-md-2 sidebar-content ">
        <ul class="ver-inline-menu tabbable margin-bottom-25">
            {{--  <li class="active">
                <a href="#tab_1" data-toggle="tab" aria-expanded="false">



                    <strong>Company Settings</strong>
                    <br/> General info, Legal entities, Locations, Business units and Department settings
                </a>

            </li>  --}}
            
            <li class="active">
                <a href="#tab_1" data-toggle="tab" aria-expanded="false">



                    <strong>Website Settings</strong>
                    <br/> Home Page Content, Header Menu, Footer Menu
                </a>

            </li>
            <li class="">
                <a href="#tab_1" data-toggle="tab" aria-expanded="false">



                    <strong>SMS Settings</strong>
                    <br/> SMS Authentication Credential
                </a>

            </li>


            <li class="">
                <a href="#tab_3" data-toggle="tab" aria-expanded="true">
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
                    <li class="active">
                        <a href="#tab_1_1" data-toggle="tab" aria-expanded="false">
                           Home Page Content </a>
                    </li>
                    <li class="">
                        <a href="#tab_1_2" data-toggle="tab" aria-expanded="true">
                            Header menue </a>
                    </li>
                    <li class="">
                        <a href="#tab_1_3" data-toggle="tab" aria-expanded="true">
                            Footer menue </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
