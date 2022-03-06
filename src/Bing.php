<?php

namespace Opendisk\SentenceFinder;

class Bing extends GetSentence
{
    public $base_url = "https://www.bing.com/search?q=";
    public $selector = "li.b_algo .b_caption p";
}
