<?php

namespace Thibaultferaux\Like\Tags;

use Statamic\Tags\Tags;

class Like extends Tags
{
    protected $scriptLoaded = false;

    /**
     * The {{ like }} tag.
     *
     * @return string|array
     */
    public function index()
    {

        return view('like::btn', $this->context);
    }

    /**
     * The {{ like:scripts }} tag.
     */
    public function scripts() {
        if ($this->scriptLoaded) {
            return;
        }
        $this->scriptLoaded = true;
        $scriptPath = url('vendor/like/js/app.js');
        return "<script src='$scriptPath'></script>";
    }

    /**
     * The {{ like:example }} tag.
     *
     * @return string|array
     */
    public function example()
    {
        //
    }
}
