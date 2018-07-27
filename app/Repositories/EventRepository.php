<?php
/**
 * Created by PhpStorm.
 * User: iemis_2
 * Date: 2018/7/17
 * Time: 16:31
 */

namespace App\Repositories;

use App\Entities\Event;

class EventRepository
{
    public function create($data)
    {
        return Event::create($data);
    }
    public function find($id)
    {
        return Event::find($id);
    }
    public function index()
    {
        return Event::get();
    }
    public function update($id, $data)
    {
        $post =  Event::find($id);
        if (!$post) {
            return false;
        }
        return $post->update($data);
    }
    public function delete($id)
    {
        $post = Event::find($id);
        return $post ? $post->delete() : false;
    }
}