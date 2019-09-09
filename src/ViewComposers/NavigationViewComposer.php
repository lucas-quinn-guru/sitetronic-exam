<?php

namespace LucasQuinnGuru\SitetronicExam\ViewComposers;

class NavigationViewComposer
{
    public function compose($view)
    {
        $view->with('menuItems', [ '/hello'=>"Marcellus Rocks" ] );
    }
}
