<?php

namespace App\Http\Controllers\admin;

use App\Models\NewsCatalog;
use Doctrine\DBAL\Schema\AbstractAsset;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Orchestra\Parser\Xml\Document;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserConroller extends Controller
{
    public function index()
    {
        $done = session('done');
        return view('admin.rss.index', compact('done'));
    }

    public function loadNewsFromRss(Request $request)
    {
        /** @var Document $xml */
        $xml = XmlParser::load($request->post('RSS'));

        $data = $xml->parse([
            'title' => ['uses' => 'channel.title'],
            'description' => ['uses' => 'channel.description'],
            'items' => ['uses' => 'channel.item[title,link,description,pubDate]'],
        ]);
        $items = $data['items'];
        foreach ($items as $item) {
            $News = new NewsCatalog();
            $News->fill([
                'id_category' => 1,
                'content' => $item['description'],
                'title' => $item['title'],
            ]);
            $News->save();
        }
       return redirect()->route('admin::parser::parser')->with('done', 'Новости загружены');
    }
}
