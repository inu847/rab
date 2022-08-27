<div class="text-black" style="position: relative; width: 100%; border: 1px dashed; background: #f9f9f9; min-height: 300px;">
    <div class="px-3 pt-3 text-center">
        <h3 class="text-uppercase"><b>{{ generalSetting()->site_title1 }}</b></h3>
        <p class="text-black">{{ now()->format('d-F-Y') }}</p>
    </div>
    
    <hr style="border: none;border-bottom: 1px dashed;margin: 0;padding: 0">
    <div class="row">
        <div class="col-md-12" style="padding: 15px 30px !important;">
            <label>Code Product</label>
            <div>
                <input type="checkbox" name="status-input-code" id="status-input-code" data-checkbox="icheckbox_square-red" {{ (generalSetting()->with_scanner == 1)? 'checked':'' }}>
                <label for="status-input-code" class="text-muted">With Scanner</label>
            </div>
            <input type="text" class="form-control" id="input-code-scanner">
            <select id="input-code-manual" class="form-control select2" data-placeholder="Choose">
                <option value=""></option>
                @foreach ($productsNotGroup as $item)
                    <option value="{{ $item->code }}">{{ $item->code .' ('.$item->product->product_name.' - '.$item->varian->name.')' }}</option>
                @endforeach
            </select>
            <small>Masukkan kode product untuk menambahkan ke list pesanan, dengan menggunakan scanner maupun input manual<a id="btn_pay_online" href="javascript:;" class="" target="_blank"></a></small>
        </div>
    </div>

    <form action="{{ route('pos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <hr style="both: clear;border-bottom: 1px dashed;margin:0px;">
    <div class="row">
        <div class="col-md-12" style="padding: 15px 30px !important;">
            <div class="float-left m-l-5">
                <h4>List Order</h4>
            </div>
            <div class="float-right m-r-5">
                <span class="text-right"> <i class="icon-pencil" id="edit" onclick="edit();" style="color: blue; line-height: 45px;"></i></span>
            </div>
                <table class="table">
                    <tbody id="cartList">
                        <tr>
                            <td colspan="4" class="text-center text-muted">Belum Ada Order</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr id="totalAmount"></tr>
                    </tfoot>
                </table>
            </div>
        </div>
        
        <hr style="both: clear;border-bottom: 1px dashed;margin:0px;">
        <table class="table">
            <tbody>
                <tr>
                    <td>Pay</td>
                    <td><input type="number" class="form-control" name="pay" placeholder="Input Pay"></td>
                </tr>
                <!-- <tr>
                    <td>Customer Name</td>
                    <td><input type="text" class="form-control" name="customer_name" placeholder="Input Customer Name"></td>
                </tr> -->
                <!-- <tr>
                    <td class="text-black">Payment Method : </td>
                    <td>
                        <select name="payment_method" id="" class="form-control">
                            <option value="Cash">Cash</option>
                            <option value="QRIS">QRIS</option>
                            <option value="Transfer">Transfer</option>
                        </select>
                    </td>
                </tr> -->
                <tr>
                    <!-- <td class="text-black">PPN : </td>
                    <td>10%</td> -->
                    <input type="hidden" name="tax" value="0.1">
                </tr>
                <tr>
                    <td colspan="2" style="padding-bottom: 0px; border-bottom: 0px;">
                        <input type="radio" name="discount_status" id="discount_percent_checkbox" value="Percent" data-checkbox="icheckbox_square-red">
                        <label for="discount_status" class="text-muted mr-2">Percent</label>
                        <input type="radio" name="discount_status" id="discount_numeric_checkbox" value="Numeric" data-checkbox="icheckbox_square-red">
                        <label for="discount_status" class="text-muted">Numeric</label>
                        <input type="radio" name="discount_status" id="discount_none_checkbox" value="None" data-checkbox="icheckbox_square-red" checked>
                        <label for="discount_status" class="text-muted">None</label>
                    </td>
                </tr>
                <tr id="discount">
                    <td style="border-top: 0px;">
                        Discount
                    </td>
                    <td style="border-top: 0px;">
                        <input type="number" class="form-control" name="discount_numeric" id="discount_numeric" placeholder="Input Discount Numeric">
                        <input type="number" class="form-control" name="discount_percent" id="discount_percent" placeholder="Input Discount Percent">
                    </td>
                </tr>
                {{-- <tr>
                    <td>Code Voucher</td>
                    <td><input type="text" class="form-control" name="voucher_id" placeholder="Input Code Voucher"></td>
                </tr> --}}
                <tr>
                    <td>Note</td>
                    <td><textarea name="note" id="" cols="30" rows="3" class="form-control" placeholder="Input Note Invoice"></textarea></td>
                </tr>
            </tbody>
        </table>
        <div id="btnAction" class="text-right" style="padding: 15px 30px !important;">
            <button class="btn btn-danger" onclick="cancelPesanan();" type="button">Cancel</button>
            {{-- <button class="btn btn-primary" type="button">Draf</button> --}}
            <button class="btn btn-success" type="submit">Pay Now</button>
        </div>
    </form>

    <div id="loadContentPOS"></div>
</div>