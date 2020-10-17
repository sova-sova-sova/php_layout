<?php

namespace ModuleBZ\Layout;


use ModuleBZ\Layout\enum\EView;

class Column extends AColumn {

    /** @var Layout[] */
    protected $content = [];
    /**
     * @param Row $row Добавление новой строки в столбец
     * @return $this
     */
    public function addRow(Row $row){
        $this->content[] = $row;
        return $this;
    }

    /**
     * @param Sheet $sheet
     * @return $this
     */
    public function addSheet(Sheet $sheet){
        $this->content[] = $sheet;
        return $this;
    }

    /**
     * @param Title $title Добавлеие заголовка в
     * @return $this
     */
    public function addTitle(Title $title){
        $this->content[] = $title;
        return $this;
    }

    public function toJSON(): array {
        $res =  parent::toJSON();
        if($c = $this->content) $res['content'] = array_map(function($v){ return $v->toJSON(); },$c);
        return $res;
    }
}
