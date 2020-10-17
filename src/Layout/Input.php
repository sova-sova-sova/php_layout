<?php

namespace ModuleBZ\Layout;

use ModuleBZ\Layout\enum\EView;

class Input extends AColumn {
    public function toJSON(): array {
        $res = parent::toJSON();
        $res['view'] = EView::INPUT;
        return $res;
    }
}
