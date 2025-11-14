<?php
namespace Modules\Shop\Core\Http\Controllers;

use App\Controllers\Controller;
use Ivi\Http\HtmlResponse;

class HomeController extends Controller
{
    public function index(): HtmlResponse
    {
        $title = (string) (cfg(strtolower('Shop') . '.title', 'Softadastra Shop') ?: 'Softadastra Shop');
        $this->setPageTitle($title);

        $message = "Hello from ShopController!";
        $styles  = '<link rel="stylesheet" href="' . asset("assets/css/style.css") . '">';
        $scripts = '<script src="' . asset("assets/js/script.js") . '" defer></script>';

        return $this->view(strtolower('Shop') . '::home', [
            'title'   => $title,
            'message' => $message,
            'styles'  => $styles,
            'scripts' => $scripts,
        ]);
    }
}