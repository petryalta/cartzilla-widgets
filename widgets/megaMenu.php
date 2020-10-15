<?php

class megaMenu extends CWidget
{
    /**
     * @var array
     *           label - название пункта меню
     *           icon  - иконка, без префикса czi
     *           child - вложенные пункты
     *           url   - URL для перехода
     */
    public $menu = [];
    /**
     * @var string Название меню
     */
    public $rootLabel = '';
    /**
     * @var int кол-во колонок
     */
    public $col = 2;


    public function init()
    {
        parent::init();
    }


    public function run()
    {
        parent::run();
        $this->render('megaMenu', [
            'menu'      => $this->menu,
            'rootLabel' => $this->rootLabel,
            'col'       => $this->col,
        ]);
    }
}