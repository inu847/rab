<?php

use App\Models\InventoryStock;
use App\Models\Komponen;
use App\Models\Kro;
use App\Models\Models\GeneralSetting;
use App\Models\Models\MasterProduct;
use App\Models\Models\MasterVarian;
use App\Models\Models\Product;
use App\Models\Ro;
use App\Models\SubKomponen;
use Illuminate\Support\Facades\Auth;

    function generalSetting()
    {
        $generalStetting = Auth::guard('user')->user()->generalSetting;
        
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
        $subKomponen = SubKomponen::where('rspp_id', $id)->get() ?? '';
        
        return $subKomponen;
    }
?>