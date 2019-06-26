<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class Code {
    function __construct($path) {
        $this->path = $path;
        $pathinfo = pathinfo($path);
        $this->name = $pathinfo['filename'];
        $this->ext = $pathinfo['extension'];
    }
}

class CodeController extends Controller
{
    function code($ext, $name) {
        $s = Storage::disk('codes');
        $filename = $name.'.'.$ext;
        $f = $s->get($filename);
        $o = $s->exists($filename.'.out')?$s->get($filename.'.out'):'';
        return view('codes.code', [
            'file' => $f,
            'out'  => $o,
        ]);
    }

    function index() {
        $s = Storage::disk('codes');
        $files = [];
        $items = $s->files();
        foreach ($items as $k => $v) {
            $pathinfo = pathinfo($v);
            if (
                !in_array(
                    $pathinfo['extension']
                    , ['js', 'php']
                )
            ) continue;
            $files[] = new Code($v);
        }
        return view('codes.index', [
            'files' => $files,
        ]);
    }
}
