<?php
/**
 * @var array $data
 * @var int   $col
 */
?>
<li class="dropdown mega-dropdown">
    <a class="dropdown-item dropdown-toggle" href="<?=empty($data['url']) ? '#' : $data['url']?>" data-toggle="dropdown"><i class="<?=! empty($data['icon']) ? 'czi-' . $data['icon'] : ''?> opacity-60 font-size-lg mt-n1 mr-2"></i><?=$data['label']?>
    </a>
    <div class="dropdown-menu p-0">
        <div class="d-flex flex-wrap flex-md-nowrap px-2">
            <?php
            if ( ! empty($data['child'])) {
                $maxRows = round(count($data['child']) / $col) + 1;
                $i       = 0;
                $closed  = false;
                foreach ($data['child'] as $child) {
                    if ($i == 0) echo CHtml::openTag('div', ['class' => 'mega-dropdown-column py-4 px-3']); // колонка

                    echo CHtml::openTag('div', ['class' => 'widget widget-links mb-3']);

                    if ( ! empty($child['child'])) {
                        echo '<h6 class="font-size-base mb-3">' . $child['label'] . '</h6>';
                        $this->render('_mm_item_l2', ['data' => $child['child']]);
                    } else {
                        $this->render('_mm_item_l2', ['data' => [$child]]);
                    }

                    echo CHtml::closeTag('div');

                    $i++;
                    if ($i > $maxRows) {
                        $i = 0;
                        echo CHtml::closeTag('div');
                        $closed = true;
                    }
                }
                if ( ! $closed) echo CHtml::closeTag('div');
            } else {
                $this->render('_mm_item_l2', ['data' => [$data]]);
            }
            ?>
        </div>
    </div>
</li>
