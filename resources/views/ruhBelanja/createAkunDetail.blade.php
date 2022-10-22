@extends('layouts.admin')

@section('title')
    Create Akun Detail
@endsection

@section('content')

<div class="white-box">
    <div class='row'>
        <div class='col-sm-6'>
            <h4 class='box-title'>Akun Detail</h4>
        </div>
        <table class="table table-responsive table-bordered table-striped">
            <thead style="background-color: #a7a7a7;">
                <thead>
                    <tr>
                        <th>Akun</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>UOM</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </thead>
            <tbody>
                @foreach ($data->akunDetail as $key => $item)
                    <tr>
                        <td>{{ $data->code." - ".$data->name }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ $item->uom }}</td>
                        <td>Rp. {{ number_format($item->price) }}</td>
                        <td>{{ $item->category }}</td>
                        <td>{{ $item->address }}</td>
                        <td>
                            <a href="" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                            <button onclick="$('#delete{{ $key }}').submit()" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            <form id="delete{{ $key }}" action="{{ route('akun-detail.destroy', [$item->id]) }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                @method("DELETE")
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="white-box">
    <div class='row'>
        <div class='col-sm-6'>
            <h4 class='box-title'>Tambah Akun Detail</h4>
        </div>
        <form class="form-horizontal" action='{{ route('akun-detail.store2') }}' method='POST' enctype='multipart/form-data'>
            @csrf
            <table class="table table-responsive table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>UOM</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody id="table-akun"></tbody>
            </table>
            <div class="m-t-5 m-b-5">
                <button type='submit' class='btn btn-primary'>Submit</button>
                <button type="button" id="addAKun" class="btn btn-info"><i class="icon-plus"></i> Tambah Akun Detail</button>
            </div>
        </form>
    </div>
</div>

    <script src="{{ asset('assets/plugins/components/jquery/dist/jquery.min.js') }}"></script>
    <script>
        $(document).on('click', '#addAKun', function () {
            elem = `<tr>
                        <td>
                            <input type="hidden" name="akun_id[]" value="{{ $data->id }}" id="">
                            <input type="text" name="name[]" class="form-control" id="">
                        </td>
                        <td>
                            <input type="integer" name="qty[]" class="form-control" id="">
                        </td>
                        <td>
                            <input type="text" name="uom[]" class="form-control" id="">
                        </td>
                        <td>
                            <input type="integer" name="price[]" class="form-control" id="">
                        </td>
                        <td>
                            <input type="text" name="category[]" class="form-control" id="">
                        </td>
                        <td>
                            <input type="text" name="address[]" class="form-control" id="">
                        </td>
                    </tr>`;
            $('#table-akun').append(elem);
        })
    </script>
@endsection