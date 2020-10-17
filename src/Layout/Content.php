<?php

namespace ModuleBZ\Layout;

use ModuleBZ\Layout\enum\EView;

class Content extends Layout {
    /** @var Layout[] $content  */
    protected $content = [];

    /**
     * @param Title $title
     * @return $this
     */
    public function addTitle(Title $title){
        $this->content[] = $title;
        return $this;
    }

    /**
     * @param Row $row
     * @return $this
     */
    public function addRow(Row $row){
        $this->content[] = $row;
        return $this;
    }


    public function toJSON(): array {
        $res =  ['view'=>EView::CONTENT];
        return $res;
    }
}
