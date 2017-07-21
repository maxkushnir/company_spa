<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;
class IndexController extends Controller
{
		protected $header;
		protected $id;
		protected $total_earn;


		public function __construct()
		{
			$this->header = 'Company Tree';
		}


    //
		public function index()
		{
			$companies= Company::all();
			$id = Company::all();
			// dump($companies);

			return view('page') -> with([	'id'=>$id,
																		'header'=>$this->header,
																		'companies' =>$companies

				]);
		}

		public function create()
		{
			$companies= Company::all();
			return view('add-content')-> with(['header'=>$this->header,
																					'companies' =>$companies
				]);
		}
		public function edit()
		{
			$company = Company::all();
			return view('edit-content')-> with(['header'=>$this->header,
																					'company' =>$company
				]);
		}

		public function store(Request $request){
			$this->validate($request, [
				'name' => 'required|max:15',
				'estimate_earn' => 'required|min:2|max:5'
				]);
			
			$data = $request->all();

			$company = new Company;
			$company->fill($data);

			$company->save();

			return redirect('/');
		}

		public function update(Request $request){
			$this->validate($request, [
				'name' => 'required|max:15',
				'estimate_earn' => '',
				'parent' => 'required'
				]);
			
			$data = $request->all();

			$company = new Company;
			$company->fill($data);

			$company->save();

			return redirect('/');
		}
}
