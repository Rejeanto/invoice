<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\invoice;
use App\Models\project_information;
use App\Models\table_billing;
use App\Models\table_contracts;
use App\Models\billing_plans;
use App\Models\billing_plans_contoh;

class invoiceController extends Controller
{
    public function create()
    {
        return view('/home');
    }
    public function input(Request $request)
    {
        // dd($request->all());
        invoice::create($request->except(['_token', 'submit']));
        project_information::create($request->except(['_token', 'submit', 'service_type', 'project_name', 'pic', 'project_start_date', 'project_end_date', 'total_project_type', 'billing_scheme', 'contract_type']));
        table_billing::create($request->except(['_token', 'submit', 'service_type', 'project_name', 'pic', 'project_start_date', 'project_end_date', 'total_project_type', 'currency', 'contract_type', 'description', 'biling', 'cummulative_billing', 'billing_value']));
        table_contracts::create($request->except(['_token', 'submit', 'service_type', 'project_name', 'pic', 'project_start_date', 'project_end_date', 'total_project_type', 'currency', 'billing_scheme', 'description', 'biling', 'cummulative_billing', 'billing_value']));
        billing_plans::create($request->except(['_token', 'submit', 'service_type', 'project_name', 'pic', 'project_start_date', 'project_end_date', 'total_project_type', 'currency', 'billing_scheme', 'contract_type', 'description', 'biling', 'cummulative_billing', 'billing_value']));
        return redirect('/home');
    }
    public function list()
    {
        $setup_projects = invoice::all();
        $project_informations = project_information::all();
        // $contoh_project_detail = mode_invoice_1::all();
        return view('project_list', compact(['setup_projects', 'project_informations']));
    }
}
