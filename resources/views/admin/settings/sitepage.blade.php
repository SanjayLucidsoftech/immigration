<?php
use App\Models\SitePage;?>
@extends('layouts.administrator') @section('content')

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
                                <i class="fa fa-edit"></i>List Site Pages
                            </div>
                            
                        </div>
                        <div class="portlet-body">
                            <div class="table-toolbar">
                                <div class="row">
                                    <div class="col-md-6">
                                      <div class="btn-group">
                                            <a href="{{ route('sitepage_form') }}" class="btn green">Add New<i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        {{--  <div class="btn-group pull-right">
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
                                        </div>  --}}
                                    </div>
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
                            <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                            <thead>
                            <tr>
                                <th>
                                     Page Title
                                </th>
                                <th>
                                     Url
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                     Edit
                                </th>
                                <th>
                                     Delete
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($sitepages as $sitepage)
                            <tr>
                                <td>
                                     {{ $sitepage->title }}
                                </td>
                                <td>
                                   <a href="{{ url('/') }}/{{ $sitepage->alia }}" target="_blank"> {{ url('/') }}/{{ $sitepage->alia }}</a>
                                </td>
                                <td class="center">
                                     {{ $sitepage->status }}
                                </td>
                                <td>
                                    <a class="edit" href="{{ route('editsitepage_form', ['id' => $sitepage->id]) }}">
                                    Edit </a>
                                </td>
                                <td>
                                    <a class="delete" href="{{ route('deletesitepage_form', ['id' => $sitepage->id]) }}">
                                    Delete </a>
                                </td>
                            </tr>
                             @endforeach

                            </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
            </div>
</div>



@endsection

