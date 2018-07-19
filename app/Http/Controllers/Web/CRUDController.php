<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CRUDRepository;
use App\Repositories\company2Repository;
use App\Repositories\lisenceRepository;

class CRUDController extends Controller
{
    protected $CRUDRepo,$companyRepo,$lisenceRepo;

    public function __construct(CRUDRepository $CRUDRepo,company2Repository $companyRepo,lisenceRepository $lisenceRepo) {
        $this->CRUDRepo = $CRUDRepo;
        $this->companyRepo = $companyRepo;
        $this->lisenceRepo = $lisenceRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crud_posts = $this->CRUDRepo->index();
        return view('crud.index', ['crud_posts' => $crud_posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company_post = $this->companyRepo->index();
        $lisence_post = $this->lisenceRepo->index();
        return view('crud.create', ['company_post' => $company_post,'lisence_post' => $lisence_post]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only('company', 'company_2', 'name', 'ip', 'type','comm');
        $crud_post = $this->CRUDRepo->create($data);
        return redirect()->route('crud.index', $crud_post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crud_post = $this->CRUDRepo->find($id);
        return view('crud.show', ['crud_post' => $crud_post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crud_post = $this->CRUDRepo->find($id);
        $company_post = $this->companyRepo->index();
        $lisence_post = $this->lisenceRepo->index();
        return view('crud.edit', ['crud_post' => $crud_post,'company_post' => $company_post,'lisence_post' => $lisence_post]);
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
        $data = $request->only('company', 'company_2', 'name', 'ip', 'type','comm');
        $crud_post = $this->CRUDRepo->update($id, $data);
        if ($crud_post) {
            return redirect()->route('crud.index', $id);
        }
        return redirect()->route('crud.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->CRUDRepo->delete($id);
        return redirect()->route('crud.index');
    }
}
