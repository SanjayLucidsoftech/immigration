@extends('layouts.administrator') 
@section('pages_level_header')
<link href={{ asset('sb_theme/assets/global/plugins/bootstrap-summernote/summernote.css') }} rel="stylesheet" type="text/css"/>
@endsection
@section('content')
<!-- BEGIN CONTENT -->

<div class="row companysettings">
   @include('elements.administrator.settings_layout')
    <div class="col-md-10 col-sm-10 col-xs-10">

             <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet box blue-hoki">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Edit Site Pages
                            </div>

                        </div>
                        <div class="portlet-body form">
        
                          @if(Session::has('success'))
                                <div class="alert alert-success">
                                <button class="close" data-close="alert"></button>
                                    {{ Session::get('success') }}
                                    @php
                                    Session::forget('success');
                                    @endphp
                                </div>
                            @endif
                            @if(Session::has('error'))
                                <div class="alert alert-danger">
                                    <button class="close" data-close="alert"></button>
                                    {{ Session::get('error') }}
                                    @php
                                    Session::forget('error');
                                    @endphp
                                </div>
                            @endif

                            <!-- BEGIN FORM-->
                            <form method="POST" action="{{ route('updatesitepage_form', ['id' => $editpage->id]) }}" id="form_sample_3" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="form-body">
                                    <h3 class="form-section">Edit Page<small></small></h3>
                                    <div class="alert alert-danger display-hide">
                                        <button class="close" data-close="alert"></button>
                                        You have some form errors. Please check below.
                                    </div>
                                   
                                    <div class="alert alert-success display-hide">
                                        <button class="close" data-close="alert"></button>
                                        Your form validation is successful!
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Page Title <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" name="title" data-required="1" value="{{$editpage->title}}" class="form-control"/>
                                        </div>
                                        <!--@if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif-->                                  
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">URL <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <a href="{{ url('/') }}/{{$editpage->alia}}" target="_blank"> {{ url('/') }}/{{$editpage->alia}}</a>
                                        </div>
                                         <!--@if ($errors->has('alia'))
                    <span class="text-danger">{{ $errors->first('alia') }}</span>
                @endif-->                        
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Description
                                        </label>
                                        <div class="col-md-9">
                                            {{--  <input type="text" name="description" value="{{$editpage->description}}" data-required="1" class="form-control"/>  --}}
                                            <textarea name="description" id="summernote_1">
                                                    {{$editpage->description}}
											</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Status
                                        </label>
                                        <div class="col-md-">
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
                                            <a class="btn default" href="{{ route('admin.settings.sitepages') }}">Cancel</a>
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

@endsection
@section('pages_level_footer')
<script src={{ asset('sb_theme/assets/admin/pages/scripts/components-editors.js') }} type="text/javascript"></script>
<script>
    jQuery(document).ready(function() {
       ComponentsEditors.init();
    });
    </script>
@endsection