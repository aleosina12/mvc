<?php
class View
{

    public function generate($content_view, $template_view, $data = null)

    {
include 'C:\dev\Skillfactory\Module_26_MVC_NEW\application\views'.$template_view;
    }
}