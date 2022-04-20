<?php

namespace App\Http\Controllers;
use App\Models\Tablebasic;
use Illuminate\Http\Request;
use DB;
class TableController extends Controller
{
    private $tablebasic;
    public function __construct(){
        $this->tablebasic=new Tablebasic();
    }
    public function index(){
        $tableList=$this->tablebasic->getAllUser();
        return view('Tables',compact('tableList'));
    }
    // public function home(){
    //     return view('FormLayouts.Tables');
    // }
}
