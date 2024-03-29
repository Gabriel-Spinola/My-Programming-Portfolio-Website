<?php

namespace Controllers;

use Views\MainView;
use Helpers\Router;

abstract class PageController {
    /** Reference to a view class */
    protected object $view;

    
    public function __construct(
        protected string $pageName,
    ) {}

    /** Execution function */
    public function execute(): void {
        $this -> view = new MainView($this -> pageName);
        $this -> view -> render(['css' => $this -> pageName . '.css']);
    }
}