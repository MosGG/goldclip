<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class PagesController extends Controller
{
    public function home(Request $request){
        $text = $this->getTranslate($request->input("language"));
        return view('pages.home')->with('text', $text);
    }

    public function login(Request $request){
        $username = $request->input("username");
        $password = $request->input("password");
        if ($username !== NULL || $password !== NULL) {
            if (!empty($username) && !empty($password)){
                $res = array("success" => "failed", "msg" => "The Username, Password you entered doesn't match our records.");
            } else {
                $res = array("success" => "failed", "msg" => "Please input Username and Password.");
            }
            return json_encode($res);
        } else {
            return view('pages.login');
        }
    }

    public function portfolio(){
        $portfolios = DB::table('portfolios')->where('client', '=', '1')->orderBy('sort')->get();
    	return view('pages.portfolio')->with('portfolios', json_encode($portfolios));
    }

    public function contact(Request $request){
        $text = $this->getTranslate($request->input("language"));
        return view('pages.contact')->with('text', $text);
    }

    public function about(Request $request){
        $text = $this->getTranslate($request->input("language"));
        return view('pages.about')->with('text', $text)->with('action', "about");
    }

    public function process(Request $request){
        $text = $this->getTranslate($request->input("language"));
        return view('pages.process')->with('text', $text)->with('action', "process");
    }

    public function product(Request $request){
        $text = $this->getTranslate($request->input("language"));
        $product = DB::table('portfolios')->orderBy('id','ASC')->get();
        $res = array();
        foreach($product as $p){
            $temp = array();
            if ($text['language'] == 'en') {
                $temp['title'] = $p->title;
                $temp['price'] = $p->content;
                $temp['id'] = $p->searchIndex;
            } else {
                $temp['title'] = $p->title_cn;
                $temp['price'] = $p->content_cn;
                $temp['id'] = $p->id_cn;
            }
            $res[] = $temp;
        }
        return view('pages.product')->with('text', $text)->with('action', "product")->with('product', $res);
    }

    public function portfolioTemplates($index){
    	switch ($index) {
    		case 'home':
    			return view('partial.portfolioHome');
    			break;
    		case 'brand':
    			return view('partial.portfolioBrand');
    			break;
			case 'design':
				return view('partial.portfolioOther');
				break;
			case 'digital':
				return view('partial.portfolioOther');
				break;
			case 'media':
				return view('partial.portfolioOther');
				break;
			case 'interior':
				return view('partial.portfolioOther');
				break;
			case 'work':
				return view('partial.portfolioWork');
				break;
    		default:
    			return view('partial.portfolioHome');
    			break;
    	}
    }

    private function getTranslate($language){
        $lang_key = $language;
        if ($lang_key !== "ch" && $lang_key !== "en") {
            $lang_key = "en";
            $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4);
            if (preg_match("/zh-c/i", $lang) || preg_match("/zh/i", $lang)) {
                $lang_key = 'ch';
            }
        }
        $translate = DB::table('translate')->get(array("tkey",$lang_key));
        $text = array();
        foreach ($translate as $value) {
            $text[$value->tkey] = $value->$lang_key;
        }
        return $text;
    }
}
