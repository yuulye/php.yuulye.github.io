<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Carbon\Carbon;

class Post {
    static function get($path) {
        return new self($path);
    }

    function __construct($path) {
        $storage = Storage::disk('post');
        $this->path = $path;
        $dates = explode("/", $path);
        $this->date = Carbon::createFromDate(
            $dates[0], $dates[1], $dates[2]
        );
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
        $params = [$year, $month, $day, $slug];
        $post = Post::get(implode("/", $params));
        return view('post.'.implode(".", $params), [
            'post' => $post,
        ]);
    }

    function index() {
        $rStorage = Storage::disk('r');
        $rFiles = $rStorage->files();
        foreach ($rFiles as $file) {
            $rs[] = "/r/" . preg_replace('/.blade.php/', '', $file);
        }
        //dd($rs, $rStorage->files(), $rStorage->allFiles());

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
            $post = new Post($item);
            $posts[] = $post;
        }
        $posts = collect($posts)->sortByDesc('path');
        return view('index', [
            'posts' => $posts,
            'rs' => $rs,
        ]);
    }
}
