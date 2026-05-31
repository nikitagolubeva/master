<?php
    function get_breadcrumb(array $arr)
    {
        $str = "<a href='#'>Главная</a>";
        foreach ($arr as $a) {
            $str .= "-" . $a;
        }

    ?>
        <nav class="breadcrumb">
            <?php echo $str; ?>
        </nav>
    <?php
    }
?>