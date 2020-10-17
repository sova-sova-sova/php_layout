<?php

namespace ModuleBZ\Layout;

use ModuleBZ\Layout\enum\EAdaptiveMode;
use ModuleBZ\Layout\enum\EView;

class Row extends Layout {

    /** @var Column[] $columns массив столбцов внутри строки  */
    protected $columns = [];
    /**
     * @var string $id аттрибут id для строки
     */
    protected $id = '';
    /** @var string $class аттрибут class для строки */
    protected $class = '';

    /**
     * @param string $id новый id для строки
     * @return $this
     */
    public function setID(string $id = ''){
        $this->id = $id;
        return $this;
    }
    /**
     * @param string $class новый css class для строки
     * @return $this
     */
    public function setClass(string $class = ''){
        $this->class = $class;
        return $this;
    }
    /**
     * @param AColumn|null $column Добавление новой колонки в строку.
     * @return $this
     */
    public function addColumn(AColumn $column = null){
        $this->columns[] = $column;
        return $this;
    }

    public function toJSON():array {
        $res = ['view'=>EView::ROW];
        if($c = $this->id)      $res['id']        = $c;
        if($c = $this->class)   $res['className'] = $c;
        if($c = $this->columns) $res['cols']      = array_map( function($v){return $v->toJSON();} , $c );
        return $res;
    }
}
