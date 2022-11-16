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

    @if ($data->rspp->program)
        <div class="white-box">
            <div class='col-sm-6'>
                <h4 class='box-title'>Program</h4>
            </div>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>Code Program</th>
                        <th>Nama Program</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $data->rspp->program->code ?? null }}</td>
                        <td>{{ $data->rspp->program->code ?? null }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    @else
        @if (can('rspp'))
            <div class='white-box'>
                <div class='row'>
                    <div class='col-sm-12'>
                        <h4 class='box-title'>Add Program</h4>
                    </div>
                    <form class="form-horizontal" action='{{ route('rspp.update', [$data->rspp->id]) }}' method='POST' enctype='multipart/form-data'>
                        @csrf
                        @method('PUT')
                        <div class="form-group col-md-12">
                            <label for="">Pilih Program</label>
                            <select name="program_id" id="" class="form-control">
                                <option value="" selected disabled>Pilih Program</option>
                                @foreach ($program as $item)
                                    <option value="{{ $item->id }}">{{ $item->code." - ".$item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type='submit' class='btn btn-primary col-md-12'>Submit</button>
                    </form>
                </div>
            </div>
        @endif
    @endif

    @if ($data->rspp->kegiatan)
        <div class="white-box">
            <div class='col-sm-6'>
                <h4 class='box-title'>Kegiatan</h4>
            </div>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>Code Kegiatan</th>
                        <th>Nama Kegiatan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $data->rspp->kegiatan->code ?? null }}</td>
                        <td>{{ $data->rspp->kegiatan->code ?? null }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    @else
        @if (can('rspp'))
            <div class='white-box'>
                <div class='row'>
                    <div class='col-sm-12'>
                        <h4 class='box-title'>Add Kegiatan</h4>
                    </div>
                    <form class="form-horizontal" action='{{ route('rspp.update', [$data->rspp->id]) }}' method='POST' enctype='multipart/form-data'>
                        @csrf
                        @method('PUT')
                        <div class="form-group col-md-12">
                            <label for="">Pilih Kegiatan</label>
                            <select name="kegiatan_id" id="" class="form-control">
                                <option value="" selected disabled>Pilih Kegiatan</option>
                                @foreach ($kegiatan as $item)
                                    <option value="{{ $item->id }}">{{ $item->code." - ".$item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type='submit' class='btn btn-primary col-md-12'>Submit</button>
                    </form>
                </div>
            </div>
        @endif
    @endif
    
    @if ($data->rspp->kro)
        <div class="white-box">
            <div class='col-sm-6'>
                <h4 class='box-title'>KRO</h4>
            </div>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>Code KRO</th>
                        <th>Nama KRO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $data->rspp->kro->code ?? null }}</td>
                        <td>{{ $data->rspp->kro->code ?? null }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    @else
        @if (can('rspp'))
            <div class='white-box'>
                <div class='row'>
                    <div class='col-sm-12'>
                        <h4 class='box-title'>Add KRO</h4>
                    </div>
                    <form class="form-horizontal" action='{{ route('rspp.update', [$data->rspp->id]) }}' method='POST' enctype='multipart/form-data'>
                        @csrf
                        @method('PUT')
                        <div class="form-group col-md-12">
                            <label for="">Pilih KRO</label>
                            <select name="kro_id" id="" class="form-control">
                                <option value="" selected disabled>Pilih KRO</option>
                                @foreach ($kro as $item)
                                    <option value="{{ $item->id }}">{{ $item->code." - ".$item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type='submit' class='btn btn-primary col-md-12'>Submit</button>
                    </form>
                </div>
            </div>
        @endif
    @endif

    @if ($data->rspp->ro)
        <div class="white-box">
            <div class='col-sm-6'>
                <h4 class='box-title'>RO</h4>
            </div>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>Code RO</th>
                        <th>Nama RO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $data->rspp->ro->code ?? null }}</td>
                        <td>{{ $data->rspp->ro->code ?? null }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    @else
        @if (can('rspp'))
            <div class='white-box'>
                <div class='row'>
                    <div class='col-sm-12'>
                        <h4 class='box-title'>Add RO</h4>
                    </div>
                    <form class="form-horizontal" action='{{ route('rspp.update', [$data->rspp->id]) }}' method='POST' enctype='multipart/form-data'>
                        @csrf
                        @method('PUT')
                        <div class="form-group col-md-12">
                            <label for="">Pilih RO</label>
                            <select name="ro_id" id="" class="form-control">
                                <option value="" selected disabled>Pilih RO</option>
                                @foreach ($ro as $item)
                                    <option value="{{ $item->id }}">{{ $item->code." - ".$item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type='submit' class='btn btn-primary col-md-12'>Submit</button>
                    </form>
                </div>
            </div>
        @endif
    @endif

    @if ($data->rspp->komponen)
        <div class="white-box">
            <div class='col-sm-6'>
                <h4 class='box-title'>Komponen</h4>
            </div>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>Code Komponen</th>
                        <th>Nama Komponen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $data->rspp->komponen->code ?? null }}</td>
                        <td>{{ $data->rspp->komponen->code ?? null }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    @else
        @if (can('rspp'))
            <div class='white-box'>
                <div class='row'>
                    <div class='col-sm-12'>
                        <h4 class='box-title'>Add Komponen</h4>
                    </div>
                    <form class="form-horizontal" action='{{ route('rspp.update', [$data->rspp->id]) }}' method='POST' enctype='multipart/form-data'>
                        @csrf
                        @method('PUT')
                        <div class="form-group col-md-12">
                            <label for="">Pilih Komponen</label>
                            <select name="komponen_id" id="" class="form-control">
                                <option value="" selected disabled>Pilih Komponen</option>
                                @foreach ($komponen as $item)
                                    <option value="{{ $item->id }}">{{ $item->code." - ".$item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type='submit' class='btn btn-primary col-md-12'>Submit</button>
                    </form>
                </div>
            </div>
        @endif
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