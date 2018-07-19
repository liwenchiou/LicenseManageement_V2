<?php
/**
 * Created by PhpStorm.
 * User: iemis_2
 * Date: 2018/7/17
 * Time: 16:31
 */

namespace App\Repositories;

use App\Entities\lisence;

class lisenceRepository
{
    public function create($data)
    {
        return lisence::create($data);
    }
    public function find($id)
    {
        return lisence::find($id);
    }
    public function index()
    {
        return lisence::get();
    }
    public function update($id, $data)
    {
        $post =  lisence::find($id);
        if (!$post) {
            return false;
        }
        return $post->update($data);
    }
    public function delete($id)
    {
        $post = lisence::find($id);
        return $post ? $post->delete() : false;
    }
}