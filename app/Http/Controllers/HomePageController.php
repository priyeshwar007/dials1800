<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Category;

class HomePageController extends Controller
{

    public function index()
    {
        return view('mainTable.index');
    }

    public function table(Request $request)
    {
        $companies = Company::filterByRequest($request)->paginate(9);

        return view('mainTable.search', compact('companies'));
    }

    public function category(Category $category)
    {
        $companies = Company::join('category_company', 'companies.id', '=', 'category_company.company_id')
            ->where('category_id', $category->id)
            ->paginate(9);

        return view('mainTable.category', compact('companies', 'category'));
    }

    public function company(Company $company)
    {
        return view('mainTable.company', compact ('company'));
    }
/*Menus*/
    public function aboutus(Company $aboutus)
    {
        return view('mainTable.aboutus', compact ('aboutus'));
    }
    public function careers(Company $careers)
    {
        return view('mainTable.careers', compact ('careers'));
    }
    public function contactus(Company $contactus)
    {
        return view('mainTable.contact-us', compact ('contactus'));
    }
    public function howitworks(Company $howitworks)
    {
        return view('mainTable.how-it-works', compact ('howitworks'));
    }
    public function ourmission(Company $ourmission)
    {
        return view('mainTable.our-mission', compact ('ourmission'));
    }
    public function postadd(Company $postadd)
    {
        return view('mainTable.post-add', compact ('postadd'));
    }
    public function pricing(Company $pricing)
    {
        return view('mainTable.pricing', compact ('pricing'));
    }
    public function whyChooseUs(Company $whyChooseUs)
    {
        return view('mainTable.whyChooseUs', compact ('whyChooseUs'));
    }
    public function services(Company $services)
    {
        return view('mainTable.services', compact ('services'));
    }
/*End*/

}