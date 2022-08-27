<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="{{url('public/logo', generalSetting()->site_logo)}}" />
    <title>{{generalSetting()->site_title1}}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="{{asset('assets/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <style type="text/css">
        * {
            font-size: 14px;
            line-height: 24px;
            font-family: 'Ubuntu', sans-serif;
            text-transform: capitalize;
        }

        body{
            margin-left: 0px;
        }

        .btn {
            padding: 7px 10px;
            text-decoration: none;
            border: none;
            display: block;
            text-align: center;
            margin: 7px;
            cursor:pointer;
        }

        .btn-info {
            background-color: #999;
            color: #FFF;
        }

        .btn-primary {
            background-color: #6449e7;
            color: #FFF;
            width: 100%;
        }

        td,th,tr,table {
            border-collapse: collapse;
        }
        
        .table-data td, .table-data th, .table-data tr{
            border-bottom-style:hidden !important;
        }

        tr {border-bottom: 1px dotted #ddd;}

        td,th {padding: 7px 0;width: 50%;}

        table {width: 100%;}

        tfoot tr th:first-child {text-align: left;}

        .centered {
            text-align: center;
            align-content: center;
        }

        small{font-size:11px;}

        @media print {
            * {
                font-size:12px;
                line-height: 20px;
            }

            td,th {padding: 5px 0;}
            .hidden-print {
                display: none !important;
            }

            @page { margin: 1.5cm 0.5cm 0.5cm; }
            @page:first { margin-top: 0.5cm; }
            tbody::after {
                content: ''; display: block;
                page-break-after: always;
                page-break-inside: avoid;
                page-break-before: avoid;
            }
        }
    </style>
  </head>
<body>

@php
    \App::setLocale('en');
@endphp

<div style="max-width:400px;margin:0 auto; padding-right: 20px;">
    @if(preg_match('~[0-9]~', url()->previous()))
        @php $url = route('product.todoBarcode'); @endphp
    @else
        @php $url = url()->previous(); @endphp
    @endif

    <div class="hidden-print">
        <table>
            <tr>
                <td><a href="{{$url}}" class="btn btn-info"><i class="fa fa-arrow-left"></i> {{trans('file.Back')}}</a> </td>
                <td><button onclick="window.print();" class="btn btn-primary"><i class="dripicons-print"></i> {{trans('file.Print')}}</button></td>
            </tr>
        </table>
        <br>
    </div>

    <div id="receipt-data">
        @foreach ($barcode['product_id'] as $key => $item)
        <div class="row">
            <p>{{ masterProduct(product($item)->master_product_id)->product_name.' - '. masterVarian(product($item)->master_varian_id)->name }}</p>
            @for ($i = 0; $i < $barcode['qty'][$key]; $i++)
                {{-- <div class="col-md-5">
                </div> --}}
                {!! DNS1D::getBarcodeSVG(product($item)->code, 'C128' ,1.3 ,40, true) !!}
                <span style="margin:5px;"></span>
            @endfor
        </div>
        @endforeach
    </div>
</div>


<script type="text/javascript">
    localStorage.clear();
    function auto_print() {
        window.print()
    }

    setTimeout(auto_print, 1000);
</script>
</body>
</html>