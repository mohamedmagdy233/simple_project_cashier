@extends('layouts.master')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet
      " xmlns="http://www.w3.org/1999/html"/>
    <link href="
{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <!--Internal   Notify -->
    <link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
    <!--Internal  treeview -->
    <link href="{{URL::asset('assets/plugins/treeview/treeview.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الحجوزات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ قائمه الحجوزات</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">



        </div>
    </div>
@endsection
@section('content')

    @if (session()->has('delete_invoice'))
        <script>
            window.onload = function() {
                notif({
                    msg: "تم حذف الفاتورة بنجاح",
                    type: "success"
                })
            }

        </script>
    @endif


    @if (session()->has('Status_Update'))
        <script>
            window.onload = function() {
                notif({
                    msg: "تم تحديث حالة الدفع بنجاح",
                    type: "success"
                })
            }

        </script>
    @endif

    @if (session()->has('archive_invoice'))
        <script>
            window.onload = function() {
                notif({
                    msg: "تم أرشفة الفاتورة بنجاح",
                    type: "success"
                })
            }

        </script>
    @endif

    @if (session()->has('restore_invoice'))
        <script>
            window.onload = function() {
                notif({
                    msg: "تم استعاده الفاتورة بنجاح",
                    type: "success"
                })
            }

        </script>
    @endif


    @if (session()->has('delete_book'))
        <script>
            window.onload = function() {
                notif({
                    msg: "تم حذف  الطلب بنجاح",
                    type: "btn btn-danger"
                })
            }

        </script>
    @endif


    <div class="container">
        <div class="row row-sm">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <a href="{{ url('add_booking') }}" class="btn btn-primary"  style="color: white">اضافه طلب </a>




                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='50'>                            <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">رقم الطلب</th>
                                    <th class="border-bottom-0">تاريخ الطلب</th>
                                    <th class="border-bottom-0">نوع الصنف</th>
                                    <th class="border-bottom-0">اسم الصنف </th>
                                    <th class="border-bottom-0">العمليات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($books as $book)
                                    @php
                                        $i++
                                    @endphp
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $book->book_number }} </td>
                                        <td>{{ $book->book_Date }}</td>
                                        <td>{{ $book->section->section_type}}</td>
                                        <td>{{ $book->section->section_name}}</td>


                                        <td>
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true"
                                                        class="btn ripple btn-primary btn-sm" data-toggle="dropdown"
                                                        type="button">العمليات<i class="fas fa-caret-down ml-1"></i></button>
                                                <div class="dropdown-menu tx-13">
                                                    <a class="dropdown-item" href="{{url('book/edit',$book->id)}}"   ><i class=" text-success fas fa-money-bill "></i> &nbsp;&nbsp;تعديل الفاتورة</a>




                                                    <a class="dropdown-item" href="" data-invoice_id=""
                                                       data-toggle="modal" data-target="#delete_invoice"><i
                                                            class="text-danger fas fa-trash-alt"></i>&nbsp;&nbsp;حذف الطلب</a>


                                                    <a class="dropdown-item" href="{{url('print/book',$book->id)}}"><i
                                                            class="text-success fas fa-print"></i>&nbsp;&nbsp;طباعة
                                                        الفاتورة
                                                    </a>


                                                </div>
                                        </td>

                                    </tr>

                                    <div class="modal fade" id="delete_invoice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">حذف الفاتورة</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <form action="{{url('delete/book',$book->id)}}" method="post">
                                                     {{ csrf_field() }}
                                                </div>
                                                <div class="modal-body">
                                                    هل انت متاكد من عملية الحذف ؟
                                                    <input type="hidden" name="book_id" id="book_id" value="{{$book->id}}">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                                                    <button type="submit" class="btn btn-danger">تاكيد</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ارشيف الفاتورة -->
                                    <div class="modal fade" id="Transfer_invoice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">ارشفة الفاتورة</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <form action="" method="post">
                                                    {{ method_field('delete') }}
                                                    {{ csrf_field() }}
                                                </div>
                                                <div class="modal-body">
                                                    هل انت متاكد من عملية الارشفة ؟
                                                    <input type="hidden" name="invoice_id" id="invoice_id" value="">
                                                    <input type="hidden" name="id_page" id="id_page" value="2">

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                                                    <button type="submit" class="btn btn-success">تاكيد</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--/div-->
        </div>




    @endsection
    @section('js')
        <!-- Internal Data tables -->
            <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
            <!--Internal  Datatable js -->
            <script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
            <!--Internal  Notify js -->
            <script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>

            <script>
                $('#delete_invoice').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget)
                    var invoice_id = button.data('invoice_id')
                    var modal = $(this)
                    modal.find('.modal-body #invoice_id').val(invoice_id);
                })

            </script>

@endsection
