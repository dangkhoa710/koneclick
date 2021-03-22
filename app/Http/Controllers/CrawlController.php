<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrawlController extends Controller
{
    function test()
    {
    	include ('simple_html_dom.php');
    	$html = file_get_html("https://vnexpress.net/bong-da-p1"); 
		$element= $html->find('h2[class=title-news] a');

		$html2 = file_get_html($element->href);
		$element2 =$html2->find('div[class=sidebar-1] p');
    	return view('admin.crawl')
    	->with('element',$element)
    	->with('element',$element2);
    }
}
