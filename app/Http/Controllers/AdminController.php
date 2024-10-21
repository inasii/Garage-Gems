<?php

namespace App\Http\Controllers;

use App\Http\Requests\SellerRequest;
use App\Models\Register;
use App\Models\Seller;
use App\Models\UserData;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewseller(){
        return view('AdminData.AdminRegister');
    }

    public function register(SellerRequest $request)
    {
        $validated = $request->validated();
        Seller::create([
            // 'user_id' => $validate['user_id'],
            'store_name' => $validated['store_name'],
            'store_description' => $validated['store_description'],
            'store_phone' => $validated['store_phone'],
            'address' => $validated['address'],
        ]);

        return redirect('/admin/AdminDashboard');
    }
}


