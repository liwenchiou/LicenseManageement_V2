<?php
/**
 * Created by PhpStorm.
 * User: iemis_2
 * Date: 2018/7/17
 * Time: 16:31
 */

namespace App\Repositories;

use App\Entities\company2;

class company2Repository
{
    public function create($data)
    {
        return company2::create($data);
    }
    public function find($id)
    {
        return company2::find($id);
    }
    public function index()
    {
        return company2::get();
    }
    public function update($id, $data)
    {
        $post =  company2::find($id);
        if (!$post) {
            return false;
        }
        return $post->update($data);
    }
    public function delete($id)
    {
        $post = company2::find($id);
        return $post ? $post->delete() : false;
    }
}