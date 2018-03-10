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
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Advance Validation
                            </div>

                        </div>
                        <div class="portlet-body form">
                            @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
            Session::forget('success');
            @endphp
        </div>
        @endif
         

                            <!-- BEGIN FORM-->
                            <form    method="POST" action="{{url('admin/settings/web/general')}}" id="form_sample_3" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="form-body">
                                    <h3 class="form-section">Home Content Page.<small></small></h3>
                                    <div class="alert alert-danger display-hide">
                                        <button class="close" data-close="alert"></button>
                                        You have some form errors. Please check below.
                                    </div>
                                    @if(Session::has('errors'))
        <div class="alert alert-danger">
            {{ Session::get('errors') }}
            @php
            Session::forget('errors');
            @endphp
        </div>
        @endif
                                    <div class="alert alert-success display-hide">
                                        <button class="close" data-close="alert"></button>
                                        Your form validation is successful!
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Page Title <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" name="title" data-required="1" class="form-control"/>
                                        </div>
                                        @if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Alia <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" name="alia" data-required="1" class="form-control"/>
                                        </div>
                                         @if ($errors->has('alia'))
                    <span class="text-danger">{{ $errors->first('alia') }}</span>
                @endif                        
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Description <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" name="description" data-required="1" class="form-control"/>
                                        </div>
                                         @if ($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif                        
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Status <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="checkbox-list" data-error-container="#form_2_services_error">
                                                <label>
                                                <input type="checkbox" value="1" name="service" checked/>  </label>
                                            </div>
                                            <span class="help-block">
                                            (Please set your Home page status) </span>
                                            <div id="form_2_services_error">
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn green">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                        <!-- END VALIDATION STATES-->
                    <!--</div>-->
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
    </div>

</div>

@endsection
