<?php

namespace ModuleBZ\Layout;

use ModuleBZ\Layout\enum\EView;

class Sheet extends Layout {
    /** @var Header $header */
    protected $header;
    /** @var Footer $footer */
    protected $footer;
    /** @var Layout[] $content */
    protected $content = [];
    /** @var string $id */
    protected $id;
    /** @var string $class  */
    protected $class;

    /**
     * @param Header $header
     * @return $this
     */
    public function setHeader(Header $header){
        $this->header = $header;
        return $this;
    }

    /**
     * @param String $id
     * @return $this
     */
    public function setID(String $id){
        $this->id = $id;
        return $this;
    }

    /**
     * @param String $class
     * @return $this
     */
    public function setClass(String $class){
        $this->class = $class;
        return $this;
    }

    /**
     * @param Footer $footer
     * @return $this
     */
    public function setFooter(Footer $footer){
        $this->footer = $footer;
        return $this;
    }

    /**
     * @param Content $content
     * @return $this
     */
    public function addContent(Content $content){
        $this->content[] = $content;
        return $this;
    }

    /**
     * @param Body $body
     * @return $this
     */
    public function addBody(Body $body){
        $this->content[] = $body;
        return $this;
    }


    public function toJSON(): array {
        $res = ['view'=>EView::SHEET];
        $content = $this->content;
        if($c = $this->id)        $res['id']        = $c;
        if($c = $this->class)     $res['className'] = $c;
        if($c = $this->header)    array_unshift($content,$c);
        if($c = $this->footer)    $content[] = $c;
        if($c = $content)         $res['content']   = array_map(function ($v){return $v->toJSON();},$c);
        return $res;
    }
}















