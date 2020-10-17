<?php

namespace ModuleBZ\Layout;

use ModuleBZ\Layout\enum\EView;

class Card extends Layout {

    /** @var Layout[]  */
    protected $content = [];

    /**
     * @param Title $title добавление нового заголовка
     * @return $this
     */
    public function addTitle(Title $title){
        $this->content[] = $title;
        return $this;
    }

    /**
     * @param Row $row Добавление новой строки в карточку
     * @return $this
     */
    public function addRow(Row $row){
        $this->content[] = $row;
        return $this;
    }

    public function toJSON():array {
        $res = ['view'=>EView::CARD];
        if($c = $this->content) $res['content'] = array_map(function ($v){return $v->toJSON();},$c);
        return $res;
    }
}
