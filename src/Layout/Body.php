<?php

namespace ModuleBZ\Layout;

use ModuleBZ\Layout\enum\EView;

class Body extends Content {
    public function addContent(Content $content){
        $this->content[] = $content;
        return $this;
    }
    public function toJSON(): array {
        $res =  parent::toJSON();
        $res['view'] = EView::BODY;
        return $res;
    }
}
