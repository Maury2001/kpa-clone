<?php

namespace App\Controllers;
use App\Models\CountiesModel;
use codeIgniter\Exceptions\PageNotFoundException;


class Menu extends BaseController
{
    public function index(): string
    {
        return view('templates/header')
        .view('Pages/members');
    }

    public function roles(): string{
        return view('templates/header')
        .view('Pages/roles');
    }
    public function branches(): string{
        return view('templates/header')
        .view('Pages/branches');
    }

    public function counties(): string{

        $model = model(CountiesModel::class);
        $data = [
            'counties'=>$model->getCounty(),
        ];
        
        return view('templates/header')
        .view('Pages/counties');
    }
    public function designations(): string{
        return view('templates/header')
        .view('Pages/designations');
    }
    public function invoices(): string{
        return view('templates/header')
        .view('Pages/invoices');
    }
    public function mpesa(): string{
        return view('templates/header')
        .view('Pages/mpesa');
    }
    public function mpouch(): string{
        return view('templates/header')
        .view('Pages/mpouch');
    }
    public function pouch(): string{
        return view('templates/header')
        .view('Pages/pouch');
    }
    public function products(): string{
        return view('templates/header')
        .view('Pages/products');
    }
    public function receipts(): string{
        return view('templates/header')
        .view('Pages/receipts');
    }
    public function specializations(): string{
        return view('templates/header')
        .view('Pages/specializations');
    }
    public function statuses(): string{
        return view('templates/header')
        .view('Pages/statuses');
    }

}