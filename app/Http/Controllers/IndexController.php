<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class Post {
    function __construct($storage, $path) {
        $this->path = $path;
        $dates = explode("/", $path);
        $time = strtotime(implode(
            "/", [$dates[1],$dates[2],$dates[0]]
        ));
        $this->date = date('Y M d', $time);
        try {
            $string = $storage->get($path.'.json');
        } catch (\Exception $e) {
            dd('ERROR: no data json file for', $path);
        }
        try {
            $this->data = json_decode($string);
        } catch (\Exception $e) {
            dd('ERROR: decoding json', $string);
        }
    }
}

class IndexController extends Controller
{
    function post($year, $month, $day, $slug) {
		$path = implode("/", [
			'post', $year, $month, $day, $slug
		]);
        return view($path);
    }

    function index() {
        $storage = Storage::disk('post');
        $items = $posts = [];
        $years = $storage->directories();
        foreach ($years as $year) {
            $months = $storage->directories($year);
            foreach ($months as $month) {
                $days = $storage->directories($month);
                    foreach ($days as $day) {
                        $paths = $storage->files($day);
                            foreach ($paths as $path) {
                                $items[] = $path;
                            }
                    }
            }
        }
        foreach ($items as $i => $item) {
            $item = preg_replace('/.blade.php/', '', $item);
            $item = preg_replace('/.json/', '', $item);
            $items[$i] = $item;
        }
        $items = array_unique($items);
        foreach ($items as $item) {
            $post = new Post($storage, $item);
            $posts[] = $post;
        }
        $posts = collect($posts)->sortByDesc('path');
        return view('index', ['posts' => $posts]);
    }
}
