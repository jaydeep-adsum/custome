<?php
namespace jaydeep\Inspire\Controllers;

use Illuminate\Http\Request;
use jaydeep\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}
