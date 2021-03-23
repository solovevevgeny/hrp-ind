<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Navigation as Nav;


class Navigation extends Component{
    public $items = [];


    /**
     * Convert plain Array to Tree
     * @param array $array 
     * @return array
     */

    function buildTree(array &$elements, $parentId = 0) {
        $branch = array();

        foreach ($elements as $element) {
            if ($element['parent_id'] == $parentId) {
                $children = $this->buildTree($elements, $element['id']);
                if ($children) {
                    $element['childrens'] = $children;
                }
                $branch[] = $element;
            }
        }
        return $branch;
    }


    public function __construct(){
        $items = Nav::orderBy('order')->get()->toArray();
        $tree = $this->buildTree($items);
        
        $this->items = $tree;
    }

    public function render(){
        return view('components.navigation');
    }
}
