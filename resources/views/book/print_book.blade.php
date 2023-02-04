@extends('layouts.master')
@section('css')
    <style>
        @media print {
            #print_Button {
                display: none;
            }
        }

    </style>
@endsection
@section('title')
    معاينه طباعة الفاتورة
@stop
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الحجوزات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    معاينة طباعة الفاتورة</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row row-sm">
        <div class="col-md-12 col-xl-12">
            <div class=" main-content-body-invoice" id="print">
                <div class="card card-invoice">
                    <div class="card-body">
                        <div class="invoice-header">
                            <h1 class="invoice-title">فاتورة الطلب</h1>

                        </div>
                        <div class="col-md">
                            <label class="tx-gray-600"><b>معلومات الفاتورة</b></label>
                            <p class="invoice-info-row"><span>رقم الفاتورة</span>
                                <span>{{ $find->book_number }}</span></p>
                            <p class="invoice-info-row"><span>تاريخ الاصدار</span>
                                <span>{{ $find->book_Date }}</span></p>
                            <p class="invoice-info-row"><span>نوع الصنف</span>
                                <span>{{ $find->product_type }}</span></p>

                            <p class="invoice-info-row"><span>اسم الصنف</span>
                                <span>{{ $find->product }}</span></p>
                        </div>
                    </div>

                            <tr>


                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr class="mg-b-40">



                    <button class="btn btn-primary  float-left mt-3 mr-2" id="print_Button" onclick="printDiv()"> <i
                            class="mdi mdi-printer ml-1"></i>طباعة</button>
                </div>
            </div>
        </div>
    </div><!-- COL-END -->
    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <!--Internal  Chart.bundle js -->
    <script src="{{ URL::asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>


    <script type="text/javascript">
        function printDiv() {
            var printContents = document.getElementById('print').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        }

    </script>

@endsection
