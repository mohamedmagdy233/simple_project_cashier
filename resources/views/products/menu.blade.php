@extends('layouts.master')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
    <!-- breadcrumb -->


    <!-- breadcrumb -->
@endsection
@section('content')


        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">الفئه / قائمه الطعام</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <p class="tx-12 tx-gray-500 mb-2"></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table key-buttons text-md-nowrap">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">اسم الصنف </th>
                                    <th class="wd-15p border-bottom-0">نوع الصنف </th>
                                    <th class="wd-20p border-bottom-0">الحاله </th>
                                    <th class="wd-15p border-bottom-0">سعر الوجبه  </th>

                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>ارز</td>
                                <td>حبوب</td>
                                <td>متاح</td>
                                <td>20 جنيها</td>

                            </tr>

                            <tr>
                                <td>مكرونه</td>
                                <td>حبوب</td>
                                <td>متاح</td>
                                <td>20 جنيها</td>

                            </tr>

                            <tr>
                                <td>ملوخيه</td>
                                <td>نبات</td>
                                <td>متاح</td>
                                <td>20 جنيها</td>

                            </tr>

                            <tr>
                                <td>لحم</td>
                                <td>لحوم</td>
                                <td>متاح</td>
                                <td>20 جنيها</td>

                            </tr>

                            <tr>
                                <td>فراخ</td>
                                <td>لحوم</td>
                                <td>متاح</td>
                                <td>20 جنيها</td>

                            </tr>

                            <tr>
                                <td>بانيه </td>
                                <td>لحوم</td>
                                <td>متاح</td>
                                <td>20 جنيها</td>

                            </tr>

                            <tr>
                                <td>سمين</td>
                                <td>لحوم</td>
                                <td>متاح</td>
                                <td>20 جنيها</td>

                            </tr>

                            <tr>
                                <td>كبده</td>
                                <td>لحوم</td>
                                <td>متاح</td>
                                <td>20 جنيها</td>

                            </tr>

                            <tr>
                                <td>سحق</td>
                                <td>لحوم</td>
                                <td>متاح</td>
                                <td>20 جنيها</td>

                            </tr>

                            <tr>
                                <td>حواوشي</td>
                                <td>لحوم</td>
                                <td>متاح</td>
                                <td>20 جنيها</td>

                            </tr>

                            <tr>
                                <td>كريب</td>
                                <td>لحوم</td>
                                <td>متاح</td>
                                <td>20 جنيها</td>

                            </tr>

                            <tr>
                                <td>برجر</td>
                                <td>لحوم</td>
                                <td>متاح</td>
                                <td>20 جنيها</td>

                            </tr>

                            <tr>
                                <td>شاورما</td>
                                <td>لحوم</td>
                                <td>متاح</td>
                                <td>20 جنيها</td>

                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->

        <!--div-->

@endsection
@section('js')
    <!-- Internal Data tables -->
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
    <!--Internal  Datatable js -->
    <script src="{{URL::asset('assets/js/table-data.js')}}"></script>
@endsection
