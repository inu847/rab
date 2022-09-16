<?php

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
?>