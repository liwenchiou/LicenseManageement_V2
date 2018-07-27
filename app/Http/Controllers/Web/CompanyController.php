<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\company2Repository;

class CompanyController extends Controller
{
    protected $companyRepo;

    public function __construct(company2Repository $companyRepo) {
        $this->companyRepo = $companyRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company_posts = $this->companyRepo->index();
        return view('company.index', ['company_posts' => $company_posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company_post = $this->companyRepo->index();

        return view('company.create', ['company_post' => $company_post]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only('company_en', 'company_cn');
        $company_post = $this->companyRepo->create($data);
        return redirect()->route('company.index', $company_post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company_post = $this->companyRepo->find($id);
        return view('company.show', ['company_post' => $company_post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $company_post = $this->companyRepo->find($id);
        return view('company.edit', ['company_post' => $company_post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->only('company_en', 'company_cn');
        $company_post = $this->companyRepo->update($id, $data);
        if ($company_post) {
            return redirect()->route('company.index', $id);
        }
        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->companyRepo->delete($id);
        return redirect()->route('company.index');
    }
}
