<?php

namespace ModuleBZ\Layout;

use ModuleBZ\Layout\enum\EView;

abstract class AColumn extends Layout {

    /** @var string $all css class */
    protected $all = '';
    /** @var string $fullhd css class */
    protected $fullhd = '';
    /** @var string $mac_air css class */
    protected $mac_air = '';
    /** @var string $laptop css class */
    protected $laptop = '';
    /** @var string $bigpad css class */
    protected $bigpad = '';
    /** @var string $pad css class */
    protected $pad = '';
    /** @var string $smartphone css class */
    protected $smartphone = '';
    /** @var string $mobile css class */
    protected $mobile = '';


    /**
     * @param string $class
     * @return $this
     */
    public function setClassAll(string $class = ''){ $this->all = $class; return $this; }
    /**
     * @param string $class
     * @return $this
     */
    public function setClassFullHD(string $class = ''){ $this->fullhd = $class; return $this; }
    /**
     * @param string $class
     * @return $this
     */
    public function setClassMacAir(string $class = ''){ $this->mac_air = $class; return $this; }
    /**
     * @param string $class
     * @return $this
     */
    public function setClassLaptop(string $class = ''){ $this->laptop = $class; return $this; }
    /**
     * @param string $class
     * @return $this
     */
    public function setClassBigPad(string $class = ''){ $this->bigpad = $class; return $this; }
    /**
     * @param string $class
     * @return $this
     */
    public function setClassPad(string $class = ''){ $this->pad = $class; return $this; }
    /**
     * @param string $class
     * @return $this
     */
    public function setClassSmartphone(string $class = ''){ $this->smartphone = $class; return $this; }
    /**
     * @param string $class
     * @return $this
     */
    public function setClassMobile(string $class = ''){ $this->mobile = $class; return $this; }



    public function toJSON():array {
        $res = ['view'=>EView::COLUMN];
        $classes = [];
        if($c = $this->all)         $classes['all'] = $c;
        if($c = $this->fullhd)      $classes['fullhd'] = $c;
        if($c = $this->mac_air)     $classes['mac_air'] = $c;
        if($c = $this->laptop)      $classes['laptop'] = $c;
        if($c = $this->bigpad)      $classes['bigpad'] = $c;
        if($c = $this->pad)         $classes['pad'] = $c;
        if($c = $this->smartphone)  $classes['smartphone'] = $c;
        if($c = $this->mobile)      $classes['mobile'] = $c;

        if($c = $classes)           $res['col_classes'] = $c;
        return $res;
    }
}
