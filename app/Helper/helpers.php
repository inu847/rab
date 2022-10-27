<?php

use App\Models\Akun;
use App\Models\AkunDetail;
use App\Models\AkunRuhBelanja;
use App\Models\InventoryStock;
use App\Models\Komponen;
use App\Models\Kro;
use App\Models\ManageAccess;
use App\Models\GeneralSetting;
use App\Models\Models\MasterProduct;
use App\Models\Models\MasterVarian;
use App\Models\Models\Product;
use App\Models\Ro;
use App\Models\SubKomponen;
use Illuminate\Support\Facades\Auth;

    function generalSetting()
    {
        $generalStetting = GeneralSetting::first();
        
        return $generalStetting;
    }


    function getKro($id)
    {
        $kro = Kro::where('rspp_id', $id)->get();
        foreach ($kro as $key => $value) {
            $value['full_code'] = $value->rspp->code_kegiatan.".".$value->code_kro;
        }

        return $kro;
    }

    function getRo($id)
    {
        $ro = Ro::where('rspp_id', $id)->get();
        foreach ($ro as $key => $value) {
            $value['full_code'] = $value->rspp->code_kegiatan.".".$value->kro->code_kro.".".$value->code_ro;
        }
        
        return $ro;
    }

    function getKomponen($id)
    {
        $komponen = Komponen::where('rspp_id', $id)->get();
        
        return $komponen;
    }

    function getSubKomponen($id)
    {
        try {
            $subKomponen = SubKomponen::where('rspp_id', $id)->get();
            
            return $subKomponen;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function can($slug)
    {
        $hasAccess = ManageAccess::where('role_id', Auth::guard('user')->user()->role->id)->where('slug', $slug)->first() ?? null;

        if ($hasAccess) {
            if ($hasAccess->status == 1) {
                return $hasAccess;
            }else {
                return null;
            }
        }else {
            return null;
        }
    }

    function akun($id)
    {
        $akun = AkunRuhBelanja::where('ruh_belanja_id', $id)->get();
        
        return $akun;
    }

    function subAkunDetail($akun_id, $id_header)
    {
        $subAkunDetail = AkunDetail::where('header_id', $id_header)->where('akun_id', $akun_id)->get();

        return $subAkunDetail;
    }

    function sumSubAkunDetail($akun_id, $id_header)
    {
        $sumSubAkunDetail = AkunDetail::where('header_id', $id_header)->where('akun_id', $akun_id)->get();
        $result = 0;
        foreach ($sumSubAkunDetail as $key => $value) {
            $result += $value->qty * $value->qty2 * $value->price;
        }
        return $result;
    }

    function sumAkun($akun_id)
    {
        $akun = AkunDetail::where('akun_id', $akun_id)->get();
        $result = 0;
        foreach ($akun as $key => $value) {
            $qty = $value->qty ?? 1;
            $qty2 = $value->qty2 ?? 1;
            $qty3 = $value->qty3 ?? 1;
            $price = $value->price ?? 1;
            $result += $qty * $qty2 * $qty3 * $price;
        }

        return $result;
    }
?>