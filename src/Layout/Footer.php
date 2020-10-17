<?php

namespace ModuleBZ\Layout;

use ModuleBZ\Layout\enum\EView;

class Footer extends Layout {
    public function toJSON(): array {
        $res = ['view'=>EView::FOOTER];
        return $res;
    }
}
