<?php

namespace ModuleBZ\Layout;

use ModuleBZ\Layout\enum\EView;

class Title extends Layout {
    /**
     * @var string $title текст заголовка
     */
    protected $title = '';
    /**
     * Title constructor.
     * @param string $title новый заголовок
     */
    public function __construct(string $title = '') {
        $this->title = $title;
    }

    /**
     * @param string $title новйы текст заголовка
     * @return Title
     */
    public function setTitle(string $title){
        $this->title = $title;
        return $this;
    }


    public function toJSON():array {
        $res = [ 'view'=>EView::TITLE ];
        if($c = $this->title) $res['title'] = $c;
        return $res;
    }

}
