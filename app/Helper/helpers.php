<?php

use App\Models\InventoryStock;
use App\Models\Models\GeneralSetting;
use App\Models\Models\MasterProduct;
use App\Models\Models\MasterVarian;
use App\Models\Models\Product;
use Illuminate\Support\Facades\Auth;

    function generalSetting()
    {
        $generalStetting = Auth::guard('user')->user()->generalSetting;
        
        return $generalStetting;
    }

?>