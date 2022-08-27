@extends('layouts.admin')

@section('title')
    POS
@endsection

@section('content')
<div class="tabs-animation">
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 white-box">
                <div class="card-header">
                    <div class="text-right" style="margin-bottom: 10px;">
                        <a href="{{ url('/pos') }}" class="btn-shadow btn btn-info btn-sm"><i class="icon-refresh"></i> Refresh This Page</a>
                    </div>
                    <ul class="nav nav-justified">
                        {{-- <li class="nav-item"><a data-toggle="tab" href="#tab-transaction" class="active nav-link">Transaction</a></li>
                        <li class="nav-item"><a data-toggle="tab" href="#tab-pending" class="nav-link">Pending List</a></li>
                        <li class="nav-item"><a data-toggle="tab" href="#tab-success" class="nav-link">Success List</a></li> --}}
                    </ul>
                </div>
                <div class="card-body" style="min-height: 500px;">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-transaction" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-7 col-sm-6">
                                    {{-- <input type="text" class="form-control" id="searchfield" name="searchfield" placeholder="Search item(s)..." autocomplete="off" /> --}}
                                    <div class="preloadContent mt-3">
                                        @for($i=0;$i<=4;$i++)
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="ph-row"><div class="ph-col-12 big"></div></div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="ph-row"><div class="ph-col-12 big"></div></div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="ph-row"><div class="ph-col-12 big"></div></div>
                                            </div>
                                        </div>
                                        @endfor
                                    </div>
                                    
                                    @foreach ($products as $key => $product)
                                        <div class='white-box' style="height: 100px;">
                                            <div class='row'>
                                                <form id="pesanan{{$key}}">
                                                    <div class='col-sm-6'>
                                                        @if (masterProduct($product[0]->master_product_id)->avatar)
                                                            <img src="{{ 'storage/'.masterProduct($product[0]->master_product_id)->avatar }}" width="60px" alt="">
                                                        @else
                                                            <img src="{{ asset('assets/img/nf.png') }}" width="60px" alt="">
                                                        @endif
                                                        {{masterProduct($product[0]->master_product_id)->product_name}}
                                                        <input type="hidden" name="master_product_id" value="{{$product[0]->master_product_id}}">
                                                        <input type="hidden" name="qty" value="1">
                                                        <input type="hidden" name="action" value="add">
                                                    </div>
                                                    <div class='col-sm-3'>
                                                        <div class="form-group">
                                                            <label for="" class="col-md-12">Varian</label>
                                                            <select name="varian_id" id="" class="form-control">
                                                                @foreach ($product as $item)
                                                                    <option value="{{$item->master_varian_id}}">{{masterVarian($item->master_varian_id)->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class='col-sm-3 text-right'>
                                                        <button type="button" class="btn btn-primary" onclick="pesanan({{$key}});" style="margin-top: 5px; margin-bottom: 5px;"><i class="icon-plus"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                {{-- POS RIGHT BAR --}}
                                <div class="col-lg-5 col-sm-6">
                                    @include('pos.transaction_list')
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane" id="tab-pending" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-7 col-sm-6">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab-eg12-0" role="tabpanel">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id="searchinvoice" name="searchinvoice" placeholder="Search invoice..." autocomplete="off" />
                                                    <div id="tablePending"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab-eg12-2" role="tabpanel">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id="searchOnline" name="searchOnline" placeholder="Search invoice..." autocomplete="off" />
                                                    <div id="tableOnline"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- POS RIGHT BAR --}}
                                <div class="col-lg-5 col-sm-6">
                                    {{-- @include('pos.transaction_list') --}}
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-success" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-7 col-sm-6">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab-success-0" role="tabpanel">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id="searchinvoice" name="searchinvoice" placeholder="Search invoice..." autocomplete="off" />
                                                    <div id="tableSuccess"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab-success-2" role="tabpanel">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id="searchOnline" name="searchOnline" placeholder="Search invoice..." autocomplete="off" />
                                                    <div id="tableOnline"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- POS RIGHT BAR --}}
                                <div class="col-lg-5 col-sm-6">
                                    {{-- @include('pos.transaction_list') --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- MODALS --}}
<div class="modal fade" id="qrisModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleModal">QRIS Code</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                
            </div>
            <div class="modal-footer">Silahkan buka aplikasi pembayaran, misal LinkAja, dll. Kemudian scan QRCode di atas untuk melakukan pembayaran.</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    {{-- <script src="{{asset('assets/plugins/components/jquery/dist/jquery.min.js')}}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).on('ready', function () {
            $(".select2").select2();

            var postForm = {
                'action'     : 'getData'
            };
            $.ajax({
                url: "{{route('pos.transaction')}}", 
                type: 'GET', 
                data : postForm,
                dataType  : 'json',
            })
            .done(function(data) {
                var elem = ``
                data.forEach((e, i) => {
                    // console.log(e.masterProduct);
                    elem += `<tr>
                                <td>
                                    {{-- <i class="icon-pencil" style="color: blue;"></i> --}}
                                    <i class="icon-trash" onclick="deleteTransaction(`+e.master_product_id+`, `+e.varian_id+`);" style="color: red;"></i>
                                </td>
                                <td>`+e.masterProduct+`</td>
                                <td>`+e.masterVarian+`</td>
                                <td><span class="viewQty">x`+e.qty+`</span><input type="hidden" name="qty[]" style="width: 35px;" value="`+e.qty+`"></td>
                                <td class='price'><span class="viewPrice">`+e.qty*e.hargaJual+`</span> <input type="hidden" name="price[]" style="width: 100px;" value="`+e.qty*e.hargaJual+`"></td>
                                
                                <input type="hidden" class="hargaJual" value="`+e.hargaJual+`">
                                <input type="hidden" name="master_product_id[]" value="`+e.master_product_id+`">
                                <input type="hidden" name="master_varian_id[]" value="`+e.varian_id+`">
                            </tr>`
                });

                var totalAmount = `<td colspan="3"></td>
                                    <td><b>Total</b> :</td>
                                    <td id="amount"></td>
                                    <input type="hidden" id="inputAmount" name="amount" value="">`
                // var btnAction = ``
                $('#cartList').html(elem);
                $('#totalAmount').html(totalAmount);
                // $('#totalAmount').html(totalAmount);
                calc_total()
            })
            .fail(function() {
                console.log('fail');
            });

            // WITH SCANNER
            if($('#status-input-code').is(':checked')) {
                $('#input-code-scanner').show();
                $('.select2').hide();
            }else {
                $('#input-code-scanner').hide();
                $('.select2').show();
            }

            if($('#discount_percent_checkbox').is(':checked')) {
                $('#discount_percent').show();
            }
            if($('#discount_numeric_checkbox').is(':checked')){
                $('#discount_numeric').show();
            }
            if($('#discount_none_checkbox').is(':checked')){
                $('#discount').hide();
            }
        })

        $(document).on('change', '#status-input-code', function () {
            if($(this).is(':checked')) {
                $('#input-code-scanner').show();
                $('.select2').hide();
            }else {
                $('#input-code-scanner').hide();
                $('.select2').show();
            }
        })

        $(document).on('change', '#discount_percent_checkbox', function () {
            if($(this).is(':checked')) {
                $('#discount').show();
                $('#discount_percent').show();
                $('#discount_numeric').hide();
            }
            if($('#discount_percent_checkbox').is(':checked') || $('#discount_numeric_checkbox').is(':checked')){
                $('#discount').show();
            }
        })

        $(document).on('change', '#discount_numeric_checkbox', function () {
            if($(this).is(':checked')) {
                $('#discount').show();
                $('#discount_percent').hide();
                $('#discount_numeric').show();
            }
            if($('#discount_percent_checkbox').is(':checked') || $('#discount_numeric_checkbox').is(':checked')){
                $('#discount').show();
            }
        })

        $(document).on('change', '#discount_none_checkbox', function () {
            if($(this).is(':checked')) {
                $('#discount').hide();
            }
        })

        function delay(callback, ms) {
        var timer = 0;
        return function() {
            var context = this, args = arguments;
            clearTimeout(timer);
                timer = setTimeout(function () {
                callback.apply(context, args);
            }, ms || 0);
        };
        }

        $('#input-code-scanner').keyup(delay(function (e) {
            if ($(this).val() != '') {
                pesananInputCode($(this).val());
                $(this).val('')
            }
        }, 1000));

        $(document).on('change', '#input-code-manual', function () {
            let code = "";
            let reading = false;

            document.addEventListener('keypress', e => {
            if (e.keyCode === 13) {
                    if(code.length > 10) {
                        alert(code);
                        code = "";
                    }
                } else {
                    code += e.key;
                }

                if(!reading) {
                    reading = true;
                    setTimeout(() => {
                        code = "";
                        reading = false;
                    }, 200);
                }
            });
            if ($(this).val() != '') {
                pesananInputCode($(this).val());
                $(this).val('')
            }
        })
        
        function pesananInputCode(code) {
            var postForm = {
                'action'     : 'add',
                'code'       : code
            };
            $.ajax({
                url: "{{route('pos.transaction')}}", 
                type: 'GET', 
                data : postForm,
                dataType  : 'json',
            })
            .done(function(data) {
                if (data.status == false) {
                    alert(data.message)
                }else{
                    var elem = ``
                    data.forEach(e => {
                        // console.log(e.masterProduct);
                        elem += `<tr>
                                    <td>
                                        {{-- <i class="icon-pencil" style="color: blue;"></i> --}}
                                        <i class="icon-trash" onclick="deleteTransaction(`+e.master_product_id+`, `+e.varian_id+`);" style="color: red;"></i>
                                    </td>
                                    <td>`+e.masterProduct+`</td>
                                    <td>`+e.masterVarian+`</td>
                                    <td><span class="viewQty">x`+e.qty+`</span> <input type="hidden" name="qty[]" style="width: 35px;" value="`+e.qty+`"></td>
                                    <td class='price'><span class="viewPrice">`+e.qty*e.hargaJual+`</span> <input type="hidden" name="price[]" style="width: 100px;" value="`+e.qty*e.hargaJual+`"></td>
                                    
                                    <input type="hidden" class="hargaJual" value="`+e.hargaJual+`">
                                    <input type="hidden" name="master_product_id[]" value="`+e.master_product_id+`">
                                    <input type="hidden" name="master_varian_id[]" value="`+e.varian_id+`">
                                </tr>`
                    });
    
                    var totalAmount = `<td colspan="3"></td>
                                        <td><b>Total</b> :</td>
                                        <td id="amount"></td>
                                        <input type="hidden" id="inputAmount" name="amount" value="">`
                    // var btnAction = ``
                    $('#cartList').html(elem);
                    $('#totalAmount').html(totalAmount);
                    // $('#totalAmount').html(totalAmount);
                    calc_total()
                }
            })
            .fail(function() {
                console.log('fail');
            });
        }

        // FUNCTION BUTTON EDIT
        function edit() {
            $('input[name="qty[]"]').attr('type', 'integer');
            $('.viewQty').hide();
            $('input[name="price[]"]').attr('type', 'integer');
            $('.viewPrice').hide();
            $('#edit').attr('class', 'fa fa-check')
            $('#edit').attr('style', 'color: green; line-height: 45px;')
            $('#edit').attr('onclick', 'editHide();');
        }

        function editHide() {
            $('input[name="qty[]"]').attr('type', 'hidden');
            $('.viewQty').show();
            $('input[name="price[]"]').attr('type', 'hidden');
            $('.viewPrice').show();
            $('#edit').attr('class', 'icon-pencil')
            $('#edit').attr('style', 'color: blue; line-height: 45px;')
            $('#edit').attr('onclick', 'edit();');
        }

        // EDIT QTY
        $(document).on('keyup', 'input[name="qty[]"]', function(){
            var parent = $(this).closest('tr');
            var price  = parseFloat($('.hargaJual',parent).val());
            var choose = parseFloat($('input[name="qty[]"]',parent).val());
            if (!choose) {
                choose = 0;
            }
            $(this).prev().text('x'+choose);
            $(this).val(choose);
            $('.price input[name="price[]"]',parent).prev().text(choose*price);
            $('input[name="price[]"]',parent).val(choose*price);

            calc_total();
        });

        // EDIT PRICE
        $(document).on('keyup', '.price input[name="price[]"]', function () {
            var price = $(this).val();
            if (!price) {
                price = 0;
            }
            $(this).prev().text(price)
            calc_total();
        })

        function pesanan(id) {
            $.ajax({
                url: "{{route('pos.transaction')}}", 
                type: 'GET', 
                data : $('#pesanan'+id).serialize(),
                dataType  : 'json',
            })
            .done(function (data) {
                if (data.status == false) {
                    alert(data.message)
                }else{
                    var elem = ``
                    data.forEach(e => {
                        // console.log(e.masterProduct);
                        elem += `<tr>
                                    <td>
                                        {{-- <i class="icon-pencil" style="color: blue;"></i> --}}
                                        <i class="icon-trash" onclick="deleteTransaction(`+e.master_product_id+`, `+e.varian_id+`);" style="color: red;"></i>
                                    </td>
                                    <td>`+e.masterProduct+`</td>
                                    <td>`+e.masterVarian+`</td>
                                    <td><span class="viewQty">x`+e.qty+`</span><input type="hidden" name="qty[]" style="width: 35px;" value="`+e.qty+`"></td>
                                    <td class='price'><span class="viewPrice">`+e.qty*e.hargaJual+`</span> <input type="hidden" name="price[]" style="width: 100px;" value="`+e.qty*e.hargaJual+`"></td>
                                    
                                    <input type="hidden" class="hargaJual" value="`+e.hargaJual+`">
                                    <input type="hidden" name="master_product_id[]" value="`+e.master_product_id+`">
                                    <input type="hidden" name="master_varian_id[]" value="`+e.varian_id+`">
                                </tr>`
                    });
    
                    var totalAmount = `<td colspan="3"></td>
                                        <td><b>Total</b> :</td>
                                        <td id="amount"></td>
                                        <input type="hidden" id="inputAmount" name="amount" value="">`
                    // var btnAction = ``
                    $('#cartList').html(elem);
                    $('#totalAmount').html(totalAmount);
                    // $('#totalAmount').html(totalAmount);
                    calc_total()
                }
            })
            .fail(function (data) {
                console.log('fail');
                // $('#cartList').html(data.responseText);
            });
        }

        // FUNCTION BUTTON DELETE
        function deleteTransaction(master_product_id, master_varian_id) {
            var postForm = {
                'action'     : 'delete',
                'master_product_id' : master_product_id,
                'varian_id' : master_varian_id,
            };
            $.ajax({
                url: "{{route('pos.transaction')}}", 
                type: 'GET', 
                data : postForm,
                dataType  : 'json',
            })
            .done(function (data) {
                if (data.status == false) {
                    alert(data.message)
                }else{
                    var elem = ``
                    data.forEach(e => {
                        // console.log(e.masterProduct);
                        elem += `<tr>
                                    <td>
                                        {{-- <i class="icon-pencil" style="color: blue;"></i> --}}
                                        <i class="icon-trash" onclick="deleteTransaction(`+e.master_product_id+`, `+e.varian_id+`);" style="color: red;"></i>
                                    </td>
                                    <td>`+e.masterProduct+`</td>
                                    <td>`+e.masterVarian+`</td>
                                    <td><span class="viewQty">x`+e.qty+`</span><input type="hidden" name="qty[]" style="width: 35px;" value="`+e.qty+`"></td>
                                    <td class='price'><span class="viewPrice">`+e.qty*e.hargaJual+`</span> <input type="hidden" name="price[]" style="width: 100px;" value="`+e.qty*e.hargaJual+`"></td>
                                    
                                    <input type="hidden" class="hargaJual" value="`+e.hargaJual+`">
                                    <input type="hidden" name="master_product_id[]" value="`+e.master_product_id+`">
                                    <input type="hidden" name="master_varian_id[]" value="`+e.varian_id+`">
                                </tr>`
                    });
    
                    var totalAmount = `<td colspan="3"></td>
                                        <td><b>Total</b> :</td>
                                        <td id="amount"></td>
                                        <input type="hidden" id="inputAmount" name="amount" value="">`
                    // var btnAction = ``
                    $('#cartList').html(elem);
                    $('#totalAmount').html(totalAmount);
                    // $('#totalAmount').html(totalAmount);
                    calc_total()
                }
            })
            .fail(function (data) {
                console.log('fail');
                // $('#cartList').html(data.responseText);
            });
        }

        function cancelPesanan() {
            var postForm = {
                'action'     : 'cancel'
            };
            $.ajax({
                url: "{{route('pos.transaction')}}", 
                type: 'GET', 
                data : postForm,
                dataType  : 'json',
            })
            .done(function(data) {
                $('#cartList').html('');
                $('#totalAmount').html('');
            })
            .fail(function() {
                console.log('fail');
            });
        }

        $(".choose").on('change', function(){
            var parent = $(this).closest('tr');
            var price  = parseFloat($('.price',parent).text());
            var choose = parseFloat($('.choose',parent).val());

            $('.total',parent).text(choose*price);

            calc_total();
        });

        function calc_total(){
            var sum = 0;
            $(".price").each(function(){
                sum += parseFloat($(this).text());
            });
            $('#amount').text(sum);
            $('#inputAmount').val(sum);
        }

        function pressEnter() {
            $('#status').html("Executing function for user!");
        }
    </script>
@endsection