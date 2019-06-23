<?php

namespace App\Http\Controllers;

define('CODE_NAME'  , 'x_y_NaN');
define('CODE_EXT'   , 'js');

define('QUOTE'      , 'js_NaN');

use Illuminate\Http\Request;
use Storage;
use Carbon\Carbon;
use KzykHys\Pygments\Pygments;
use Pygmentize\Pygmentize;

class Post {
    static function get($disk, $path) {
        return new self($disk, $path);
    }

    function __construct($disk, $path) {

        $storage = Storage::disk($disk);
        $this->path =
            $path . ($disk=='private'?'/private':'');
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
    function post(
        $year, $month, $day, $slug, $isPrivate = false
    ) {
        $params = [$year, $month, $day, $slug];
        $post = Post::get(
            $isPrivate?'private':'post'
            ,implode("/", $params)
        );
        $preDir = $isPrivate?'private.posts.':'post.';
        $view = $preDir . implode(".", $params);
        return view($view, [
            'post' => $post,
        ]);
    }

    function posts($disk) {
        $storage = Storage::disk($disk);
        $items = $posts = [];
        $years = $storage->directories();
        foreach ($years as $year) {
            $months = $storage->directories($year);
            foreach ($months as $month) {
                $days = $storage->directories($month);
                    foreach ($days as $day) {
                        $paths = $storage->files($day);
                            foreach ($paths as $path) {
                                if (
                                    pathinfo($path)
                                    ['extension']
                                    ==
                                    'swp'
                                ) continue;
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
            $post = new Post($disk, $item);
            $posts[] = $post;
        }
        return collect($posts)->sortByDesc('path');
    }

    function private() {
        return view('private.index', [
            'posts' => $this->posts('private'),
        ]);
    }

    function index() {
        $codeName   = CODE_NAME;
        $codeExt    = CODE_EXT;

        $quote      = QUOTE;

        //--------------------------------

        $rStorage = Storage::disk('r');
        $rFiles = $rStorage->files();
        foreach ($rFiles as $file) {
            $rs[] = "/r/" . preg_replace('/.blade.php/', '', $file);
        }

        $languages = [
            'php' => 'php',
            'js'  => 'javascript',
        ];
        $codeStorage = Storage::disk('codes');
        $filename = "$codeName.$codeExt";
        $code = new \stdclass;

        $file = $codeStorage->get($filename);
        $code->content = Pygmentize::highlight(
            $file
            , $languages[$codeExt]
            , 'utf-8'
            , 'html'
            , 'colorful'
            /*
                ',linenos=1'
                ',noclasses'
            */
        );
        $code->link = "/codes/$codeExt/$codeName";

        return view('index', [
            'posts' => $this->posts('post'),
            'rs' => $rs,
            'code' => $code,
            'quote' => $quote,
        ]);
    }
}
