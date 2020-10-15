<ul class="widget-list">
    <?php
    /**
     * @var array $data
     */
    foreach ($data as $item) :
        ?>
        <li class="widget-list-item pb-1">
            <a class="widget-list-link" href="<?=(empty($item['url'])) ? '#' : $item['url']?>"><?=$item['label']?></a>
        </li>
    <?php endforeach; ?>
</ul>

