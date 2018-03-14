<?php
use App\Models\SitePage;?>
@extends('layouts.administrator') 


@section('pages_level_header')
<link href={{ asset('sb_theme/assets/global/plugins/jquery-nestable/jquery.nestable.css') }} rel="stylesheet" type="text/css"/>
<link href={{ asset('sb_theme/assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }} rel="stylesheet" type="text/css"/>
<link href={{ asset('sb_theme/assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css') }} rel="stylesheet" type="text/css"/>
@endsection

@section('content')

<div class="row companysettings">
   @include('elements.administrator.settings_layout')

     <?php $sitepages = SitePage::all();?>
      <div class="col-md-10 col-sm-10 col-xs-10">
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box blue-hoki">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-edit"></i>Manage menues
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-toolbar">
                                <div class="row">
                                    <div class="col-md-6">
                                      <div class="btn-group">
                                            {{--  <a href="{{ route('sitepage_form') }}" class="btn green">Add New<i class="fa fa-plus"></i></a>  --}}

                                            {{--  <a class="btn default" id="ajax-demo" data-toggle="modal">
                                            View Demo</a>  --}}
                                            <a class="btn green" data-toggle="modal" href="#add_menue">
                                                Add New<i class="fa fa-plus"></i> </a>
                                            <div id="ajax-modal" class="modal fade" tabindex="-1">
                                            </div>
                                        </div>
                                    </div>
                                    {{--  <div class="col-md-6">
                                        <div class="btn-group pull-right">
                                            <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="#">
                                                    Print </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                    Save as PDF </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                    Export to Excel </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>  --}}
                                </div>
                            </div>
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                <button class="close" data-close="alert"></button>
                                    {{ Session::get('success') }}
                                    @php
                                    Session::forget('success');
                                    @endphp
                                </div>
                            @endif
                            

                            <!-- responsive -->
							<div id="add_menue" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
									<h4 class="modal-title">Add New Menu</h4>
								</div>
								<div class="modal-body">
                                        <form action="#" class="form-horizontal" role="form">


                                                <div class="form-group">
                                                        <label class="control-label col-md-4">Menu name</label>
                                                        <div class="col-md-8">
                                                                <input name="menue_name" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                            <label class="control-label col-md-4">Parent Menue</label>
                                                            <div class="col-md-8">
                                                                    <select name="parent" class="form-control select2">
                                                                            <option value=""></option>
                                                                            <option value=""></option>
                                                                            <option value=""></option>
                                                                            </select>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <label class="control-label col-md-4">Menu Type</label>
                                                                <div class="col-md-8">
                                                                        <select name="menu_type"  class="form-control select2">
                                                                                <option value="page">Page</option>
                                                                                <option value="link">Link</option>
                                                                                {{--  <option value="content">Content</option>  --}}
                                                                            </select>
                                                                </div>
                                                            </div>         

                                                            <div class="form-group">
                                                                    <label class="control-label col-md-4">Select Page</label>
                                                                    <div class="col-md-8">
                                                                            <select name="pages" class="form-control select2" >
                                                                                    <option value=""></option>
                                                                                    <option value=""></option>
                                                                                    <option value=""></option>
                                                                                </select>
                                                                    </div>
                                                                </div>  
                                            
                                                                <div class="form-group">
                                                                        <label class="control-label col-md-4">Insert Url</label>
                                                                        <div class="col-md-8">
                                                                                <input class="form-control" type="text">
                                                                        </div>
                                                                    </div> 

                                            
                                            

                                        </form>
								</div>
								<div class="modal-footer">
									<button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
									<button type="button" class="btn green">Submit</button>
								</div>
							</div>
                            <!-- stackable -->
                            

                            <div class="portlet-body">
                                <div class="dd" id="nestable_list_3">
                                    <ol class="dd-list">
                                        <li class="dd-item dd3-item" data-id="13">
                                            <div class="dd-handle dd3-handle">
                                            </div>
                                            <div class="dd3-content">
                                                 Item 13
                                            </div>
                                        </li>
                                        <li class="dd-item dd3-item" data-id="14">
                                            <div class="dd-handle dd3-handle">
                                            </div>
                                            <div class="dd3-content">
                                                 Item 14
                                            </div>
                                        </li>
                                        <li class="dd-item dd3-item" data-id="15">
                                            <div class="dd-handle dd3-handle">
                                            </div>
                                            <div class="dd3-content">
                                                 Item 15
                                            </div>
                                            <ol class="dd-list">
                                                <li class="dd-item dd3-item" data-id="16">
                                                    <div class="dd-handle dd3-handle">
                                                    </div>
                                                    <div class="dd3-content">
                                                         Item 16
                                                    </div>
                                                </li>
                                                <li class="dd-item dd3-item" data-id="17">
                                                    <div class="dd-handle dd3-handle">
                                                    </div>
                                                    <div class="dd3-content">
                                                         Item 17
                                                    </div>
                                                </li>
                                                <li class="dd-item dd3-item" data-id="18">
                                                    <div class="dd-handle dd3-handle">
                                                    </div>
                                                    <div class="dd3-content">
                                                         Item 18
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                                    </ol>
                                </div>
                            </div>



                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
            </div>
</div>
@endsection
@section('pages_level_footer')
<script src={{ asset('sb_theme/assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }} type="text/javascript"></script>
<script src={{ asset('sb_theme/assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js') }} type="text/javascript"></script>
<script src={{ asset('sb_theme/assets/admin/pages/scripts/ui-extended-modals.js') }} type="text/javascript"></script>


<script>
    jQuery(document).ready(function() {
        UINestable.init();
    });
    UIExtendedModals.init();
    </script>
@endsection

