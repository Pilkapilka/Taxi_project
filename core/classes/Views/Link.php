<?php

namespace Core\Views;

use Core\View;

class Link extends View
{
    public function render(string $template_path = ROOT . '/core/templates/link.tpl.php')
    {
        return parent::render($template_path);
    }
}