<?php

namespace ModuleBZ\Layout;

use ModuleBZ\Layout\enum\EView;

class Header extends Layout {
    /** @var String $title */
    protected $title;

    /**
     * @param String $title
     * @return $this
     */
    public function setTitle(String $title){
        $this->title = $title;
        return $this;
    }

    public function toJSON(): array {
        $res = ['view'=>EView::HEADER];
        if($c = $this->title) $res['title'] = $c;
        return $res;
    }
}
