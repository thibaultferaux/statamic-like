<?php

namespace Thibaultferaux\Like\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Statamic\Facades\Entry;

class LikeController extends Controller {
    public function store(Request $r) {
        $entryId = $r->entry_id;
        $likeStatus = $r->like_status;
        $entry = Entry::find($entryId);
        $amountOfLikes = $entry->likes ?? 0;

        if ($likeStatus == 0) {
            $amountOfLikes++;
        } else {
            $amountOfLikes--;
        }

        // plus one like
        $entry->set('likes', $amountOfLikes);
        $entry->save();

        return redirect()->back();
    }
}


