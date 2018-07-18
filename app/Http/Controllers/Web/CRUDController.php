<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CRUDRepository;
use App\Repositories\company2Repository;

class CRUDController extends Controller
{
    protected $CRUDRepo,$companyRepo;

    public function __construct(CRUDRepository $CRUDRepo,company2Repository $companyRepo) {
        $this->CRUDRepo = $CRUDRepo;
        $this->companyRepo = $companyRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->CRUDRepo->index();
        return view('crud.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company_post = $this->companyRepo->index();
        return view('crud.create', ['company_post' => $company_post]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only('company', 'company_2', 'name', 'ip', 'type');
        $post = $this->CRUDRepo->create($data);
        return redirect()->route('crud.index', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = $this->CRUDRepo->find($id);
        return view('crud.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = $this->CRUDRepo->find($id);
        return view('crud.edit', ['post' => $post]);
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
        $data = $request->only('company', 'company_2', 'name', 'ip', 'type');
        $post = $this->CRUDRepo->update($id, $data);
        if ($post) {
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
