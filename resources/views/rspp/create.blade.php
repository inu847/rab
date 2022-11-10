@extends('layouts.admin')

@section('title')
    Create RSPP
@endsection

@section('content')

<div class="white-box">
    <h4 style="color: #0078bc;">RUH BELANJA</h4>
    <table class="table">
        <tr>
            <th>Tahun Anggaran</th>
            <td>{{ $data->th_anggaran }}</td>
        </tr>
        <tr>
            <th>Code Satker</th>
            <td>{{ $data->code_satker }}</td>
        </tr>
        <tr>
            <th>Name Satker</th>
            <td>{{ $data->name_satker }}</td>
        </tr>
        <tr>
            <th>Code K/L Unit</th>
            <td>{{ $data->code_kl_unit }}</td>
        </tr>
        <tr>
            <th>Name K/L Unit</th>
            <td>{{ $data->name_kl_unit }}</td>
        </tr>
    </table>
</div>

    @if ($data->rspp)
        <div class="white-box">
            <div class='col-sm-6'>
                <h4 class='box-title'>RSPP</h4>
            </div>
            <table class="table table-responsive">
                <tr>
                    <th>Program</th>
                    <th>Kegiatan</th>
                </tr>
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $data->rspp->code_program }}</td>
                        <td>{{ $data->rspp->program }}</td>
                    </tr>
                    <tr>
                        <td>{{ $data->rspp->code_kegiatan }}</td>
                        <td>{{ $data->rspp->kegiatan }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    @else
        @if (can('rspp'))
            <div class='white-box'>
                <div class='row'>
                    <div class='col-sm-12'>
                        <h4 class='box-title'>Add RSPP</h4>
                    </div>
                    <form class="form-horizontal" action='{{ route('rspp.storeRspp', [$data->id]) }}' method='POST' enctype='multipart/form-data'>
                        @csrf
                        <div class="form-group col-md-12">
                            <div class="row m-b-5">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="code_program" placeholder="Code Program">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="program" placeholder="Program">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="code_kegiatan" placeholder="Code Kegiatan">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="kegiatan" placeholder="Kegiatan">
                                </div>
                            </div>
                        </div>

                        <button type='submit' class='btn btn-primary col-md-12'>Submit</button>
                    </form>
                </div>
            </div>
        @endif
    @endif
    
    @if (getKro($data->rspp->id))
        <div class="white-box">
                <div class='row'>
                    <div class='col-sm-6'>
                        <h4 class='box-title'>KRO</h4>
                    </div>
                    <table class="table table-responsive table-bordered table-striped">
                        <thead style="background-color: #a7a7a7;">
                            <tr>
                                <th>Kode KRO</th>
                                <th>KRO</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (getKro($data->rspp->id) as $item)
                                <tr>
                                    <td>{{ $item->full_code }}</td>
                                    <td>{{ $item->kro }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    @endif

    @if (can('kro'))
        <div class="white-box">
            <div class='row'>
                <div class='col-sm-6'>
                    <h4 class='box-title'>Add KRO</h4>
                </div>
                <form action='{{ route('rspp.storeKro') }}' method='POST' enctype='multipart/form-data'>
                    @csrf
                    <table class="table table-responsive table-bordered table-striped">
                        <thead style="background-color: #a7a7a7;">
                            <tr>
                                <th style="width: 40%;">Kegiatan</th>
                                <th>Kode KRO</th>
                                <th style="width: 40%;">KRO</th>
                            </tr>
                        </thead>
                        <tbody id="table-kro"></tbody>
                    </table>
                    <div class="m-t-5 m-b-5">
                        <button type='submit' class='btn btn-primary'>Submit</button>
                        <button type="button" id="addKro" class="btn btn-info"><i class="icon-plus"></i> Tambah KRO</button>
                    </div>
                </form>
            </div>
        </div>
    @endif


    {{-- RO --}}
    <div class="white-box">
        <div class='row'>
            <div class='col-sm-6'>
                <h4 class='box-title'>RO</h4>
            </div>
            <table class="table table-responsive table-bordered table-striped">
                <thead style="background-color: #a7a7a7;">
                    <tr>
                        <th>Kode RO</th>
                        <th>RO</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (getRo($data->rspp->id) as $item)
                        <tr>
                            <td>{{ $item->full_code }}</td>
                            <td>{{ $item->ro }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    @if (can('ro'))
        <div class="white-box">
            <div class='row'>
                <div class='col-sm-6'>
                    <h4 class='box-title'>Add RO</h4>
                </div>
                <form action='{{ route('rspp.storeRo') }}' method='POST' enctype='multipart/form-data'>
                    @csrf
                    <table class="table table-responsive table-bordered table-striped">
                        <thead style="background-color: #a7a7a7;">
                            <tr>
                                <th style="width: 20%;">KRO</th>
                                <th style="width: 20%;">Kode RO</th>
                                <th>RO</th>
                            </tr>
                        </thead>
                        <tbody id="table-ro"></tbody>
                    </table>
                    <div class="m-t-5 m-b-5">
                        <button type='submit' class='btn btn-primary'>Submit</button>
                        <button type="button" id="addRo" class="btn btn-info"><i class="icon-plus"></i> Tambah RO</button>
                    </div>
                </form>
            </div>
        </div>
    @endif


    {{-- KOMPONEN --}}
    <div class="white-box">
        <div class='row'>
            <div class='col-sm-6'>
                <h4 class='box-title'>Komponen</h4>
            </div>
                <table class="table table-responsive table-bordered table-striped">
                    <thead style="background-color: #a7a7a7;">
                        <tr>
                            <th>Kode Komponen</th>
                            <th>Komponen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (getKomponen($data->rspp->id) as $item)
                            <tr>
                                <td>{{ $item->code }}</td>
                                <td>{{ $item->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
            
        @if (can('komponen'))
            <div class="white-box">
                <div class='row'>
                    <div class='col-sm-6'>
                        <h4 class='box-title'>Add Komponen</h4>
                    </div>
                    <form action='{{ route('rspp.storekomponen') }}' method='POST' enctype='multipart/form-data'>
                        @csrf
                        <table class="table table-responsive table-bordered table-striped">
                            <thead style="background-color: #a7a7a7;">
                                <tr>
                                    <th style="width: 20%;">Kode RO</th>
                                    <th style="width: 20%;">Kode Komponen</th>
                                    <th>Komponen</th>
                                </tr>
                            </thead>
                            <tbody id="table-komponen"></tbody>
                        </table>
                        <div class="m-t-5 m-b-5">
                            <button type='submit' class='btn btn-primary'>Submit</button>
                            <button type="button" id="addKomponen" class="btn btn-info"><i class="icon-plus"></i> Tambah Komponen</button>
                        </div>
                    </form>
                </div>
            </div>
        @endif

        {{-- SUB KOMPONEN --}}
        {{-- @if (getSubKomponen($data->rspp->id) != false)
            <div class="white-box">
                <div class='row'>
                    <div class='col-sm-6'>
                        <h4 class='box-title'>Sub Komponen</h4>
                    </div>
                    <table class="table table-responsive table-bordered table-striped">
                        <thead style="background-color: #a7a7a7;">
                            <tr>
                                <th>Komponen</th>
                                <th>Sub Komponen</th>
                                <th>Qty</th>
                                <th>Uom</th>
                                <th>Price</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (getSubKomponen($data->rspp->id) as $item)    
                                <tr>
                                    <td>{{ $item->komponen->code }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->qty }}</td>
                                    <td>{{ $item->uom }}</td>
                                    <td>{{ number_format($item->price) }}</td>
                                    <td>{{ number_format($item->amount) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif

        <div class="white-box">
            <div class='row'>
                <div class='col-sm-6'>
                    <h4 class='box-title'>Add Sub Komponen</h4>
                </div>
                <form action='{{ route('rspp.storeSubKomponen') }}' method='POST' enctype='multipart/form-data'>
                    @csrf
                    <table class="table table-responsive table-bordered table-striped">
                        <thead style="background-color: #a7a7a7;">
                            <tr>
                                <th>Komponen</th>
                                <th>Sub Komponen</th>
                                <th>Qty</th>
                                <th>Uom</th>
                                <th>Price</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody id="table-sub-komponen"></tbody>
                    </table>
                    <div class="m-t-5 m-b-5">
                        <button type='submit' class='btn btn-primary'>Submit</button>
                        <button type="button" id="addSubKomponen" class="btn btn-info"><i class="icon-plus"></i> Tambah Komponen</button>
                    </div>
                </form>
            </div>
        </div> --}}
<script src="{{ asset('assets/plugins/components/jquery/dist/jquery.min.js') }}"></script>
@endsection