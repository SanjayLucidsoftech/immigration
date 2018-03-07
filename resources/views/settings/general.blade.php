@extends('layouts.registered_user') @section('content')


<!-- BEGIN CONTENT -->
<div class="row companysettings">
    <div class="col-md-2 sidebar-content ">
        <ul class="ver-inline-menu tabbable margin-bottom-25">
            <li class="active">
                <a href="#tab_1" data-toggle="tab" aria-expanded="false">



                    <strong>Company Settings</strong>
                    <br/> General info, Legal entities, Locations, Business units and Department settings
                </a>

            </li>
            <li class="">
                <a href="#tab_2" data-toggle="tab" aria-expanded="false">
                    <strong>Payroll</strong>
                    <br> Setup, Leave encashment, Payment and Payslip settings
                </a>
            </li>
            <li class="">
                <a href="#tab_3" data-toggle="tab" aria-expanded="false">
                    <strong>Leave & Holidays</strong>
                    <br/> Leave plans, Initial adjustments, Notify and Holidays

                </a>
            </li>
            <li class="">
                <a href="#tab_1" data-toggle="tab" aria-expanded="false">
                    <strong>Employee</strong>
                    <br/> Job titles, Probation/Notice period and Employee number settings

                </a>
            </li>
            <li class="">
                <a href="#tab_2" data-toggle="tab" aria-expanded="false">
                    <strong>Timesheet</strong>
                    <br/> Approval chain, Billing classification and Invoice settings
                </a>
            </li>
            <li class="">
                <a href="#tab_3" data-toggle="tab" aria-expanded="false">
                    <strong>Expenses</strong>
                    <br/> Expense policies and Expense type settings
                </a>
            </li>
            <li class="">
                <a href="#tab_3" data-toggle="tab" aria-expanded="false">
                    <strong>Time & Attendance</strong>
                    <br/> Weekly offs, Shifts, Tracking policies, Capture scheme and other settings

                </a>
            </li>
            <li class="">
                <a href="#tab_3" data-toggle="tab" aria-expanded="true">
                    <strong>Onboarding & Exit</strong>
                    <br/> Employee onboarding and exit settings
                </a>
            </li>

            <li class="">
                <a href="#tab_3" data-toggle="tab" aria-expanded="true">
                    <strong>Roles & Permissions</strong>
                    <br/> Manage roles and permissions
                </a>
            </li>

            <li class="">
                <a href="#tab_3" data-toggle="tab" aria-expanded="true">
                    <strong>Integrations</strong>
                    <br/> Login Integrations
                </a>
            </li>

        </ul>
    </div>
    <div class="col-md-10 col-sm-10 col-xs-10">
        <div class="page-bar">
            <div class="portlet-title tabbable-line">
                <ul class="nav nav-tabs">
                    <li class="">
                        <a href="#tab_1_1" data-toggle="tab" aria-expanded="false">
                            System </a>
                    </li>
                    <li class="active">
                        <a href="#tab_1_2" data-toggle="tab" aria-expanded="true">
                            Activities </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
