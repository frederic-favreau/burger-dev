<?php
class RecipeController {
    private function renderView(string $view, array $data = [])
    {
        $loader = new \Twig\Loader\FilesystemLoader('view');
        $twig = new \Twig\Environment($loader, [
            'cache' => false
        ]);

        echo $twig->render($view, $data);
    }

    public function homePage()
    {
        global $router;

        $this->renderView('homePage.html.twig');
    }
}