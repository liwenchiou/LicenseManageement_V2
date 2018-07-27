<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\lisenceRepository;

class LisenceController extends Controller
{
    protected $lisenceRepo;

    public function __construct(lisenceRepository $lisenceRepo) {
        $this->lisenceRepo = $lisenceRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lisence_posts = $this->lisenceRepo->index();
        return view('lisence.index', ['lisence_posts' => $lisence_posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lisence_post = $this->lisenceRepo->index();

        return view('lisence.create', ['lisence_post' => $lisence_post]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only('lisence_en', 'lisence_cn', 'lisence_code','lisence_num');
        $lisence_post = $this->lisenceRepo->create($data);
        return redirect()->route('lisence.index', $lisence_post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lisence_post = $this->lisenceRepo->find($id);
        return view('lisence.show', ['lisence_post' => $lisence_post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lisence_post = $this->lisenceRepo->find($id);
        return view('lisence.edit', ['lisence_post' => $lisence_post]);
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
        $data = $request->only('lisence_en', 'lisence_cn', 'lisence_code','lisence_num');
        $lisence_post = $this->lisenceRepo->update($id, $data);
        if ($lisence_post) {
            return redirect()->route('lisence.index', $id);
        }
        return redirect()->route('lisence.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->lisenceRepo->delete($id);
        return redirect()->route('lisence.index');
    }
}
