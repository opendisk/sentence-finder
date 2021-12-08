<?php

namespace Opendisk\SentenceFinder;

class Ask extends SentenceFinder
{
    public $base_url = "http://ask.com/web?q=";
    public $selector = ".PartialSearchResults-item .PartialSearchResults-item-abstract";
}
