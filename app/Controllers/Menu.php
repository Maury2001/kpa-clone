<?php

namespace App\Controllers;

use App\Models\CountiesModel, SpecializationsModel;
// use App\Models\SpecializationsModel;
use codeIgniter\Exceptions\PageNotFoundException;


class Menu extends BaseController
{
    public function index(): string
    {
        return view('templates/header')
            . view('Pages/members');
    }

    public function roles(): string
    {
        return view('templates/header')
            . view('Pages/roles');
    }
    public function branches(): string
    {
        return view('templates/header')
            . view('Pages/branches');
    }

    public function counties(): string
    {

        $model = model(CountiesModel::class);
        $data = [
            'counties' => $model->getCounty(),
        ];

        return view('templates/header')
            . view('Pages/counties', $data);
    }

    public function new()
    {
        helper('form');

        return view('templates/header')

            . view('Pages/newcounty');

    }
    public function newcounty(): string
    {
        helper('form');

        $data = $this->request->getPost(['county_code', 'county_name']);

        // Checks whether the submitted data passed the validation rules.
        if (
            !$this->validateData($data, [
                'county_code' => 'required|max_length[255]|min_length[3]',
                'county_name' => 'required|max_length[5000]|min_length[3]',
            ])
        ) {
            // The validation fails, so return the form.
            return $this->new();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(CountiesModel::class);

        $model->save([
            'county_code' => $post['county_code'],
            'slug' => url_title($post['county_name'], '-', true),
            'county_name' => $post['county_name'],
        ]);

        return view('templates/header') . view('Pages/success');
    }
    public function designations(): string
    {
        return view('templates/header')
            . view('Pages/designations');
    }
    public function invoices(): string
    {
        return view('templates/header')
            . view('Pages/invoices');
    }
    public function mpesa(): string
    {
        return view('templates/header')
            . view('Pages/mpesa');
    }
    public function mpouch(): string
    {
        return view('templates/header')
            . view('Pages/mpouch');
    }
    public function pouch(): string
    {
        return view('templates/header')
            . view('Pages/pouch');
    }
    public function products(): string
    {
        return view('templates/header')
            . view('Pages/products');
    }
    public function receipts(): string
    {
        return view('templates/header')
            . view('Pages/receipts');
    }
    public function specializations(): string
    {
        $model = model(SpecializationsModel::class);
        try {
            $data = [
                'specializations' => $model->getAllSpecializations(),
            ];
    
            return view('templates/header') . view('Pages/specializations', $data);
        } catch (\Exception $e) {
            // Handle the exception, log it, or display an error message.
            die('Error fetching specializations: ' . $e->getMessage());
        }
    }

    // Controller method for handling new specialization form submission
public function newspecialization()
{
    helper('form');

    $data = $this->request->getPost(['name', 'description']);

    // Validation rules
    $validationRules = [
        'name' => 'required|max_length[100]',
        'description' => 'required',
    ];

    // Check validation
    if (!$this->validate($validationRules)) {
        return $this->newSpecialization(); // Redirect to the form with validation errors
    }

    // Get validated data
    $post = $this->request->getPost();

    // Save to database
    $model = model('SpecializationsModel'); // Assuming your model is named SpecializationsModel
    $model->save([
        'name' => $post['name'],
        'description' => $post['description'],
    ]);

    // Redirect or show success view
    return redirect()->to('/specializations');

    return view('templates/header') . view('Pages/newspecialization');
}

    public function statuses(): string
    {
        return view('templates/header')
            . view('Pages/statuses');
    }

}