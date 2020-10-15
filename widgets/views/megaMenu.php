<?php
/**
 * @var array  $menu
 * @var string $rootLabel
 * @var int    $col
 */
?>
<ul class="navbar-nav mega-nav pr-lg-2 mr-lg-2">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle pl-0" href="#" data-toggle="dropdown"><i class="czi-menu align-middle mt-n1 mr-2"></i><?=$rootLabel?>
        </a>
        <ul class="dropdown-menu">
            <?php
            foreach ($menu as $item) {
                $this->render('_mm_item', [
                    'data' => $item,
                    'col'  => $col,
                ]);
            }
            ?>
        </ul>
    </li>
</ul>
