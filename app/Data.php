<?php

namespace App;

use App\Helper\HtmlFormatter;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table='webtadat';

    public function getHtmlBodyAttributs()
    {
        return HtmlFormatter::format($this->body);

    }
}
