<?php
    namespace App\HttpController;

    use Outbrain\Outbrain;
    use EasySwoole\Http\AbstractInterface\AbstractRouter;
    use FastRoute\RouteCollector;
    use EasySwoole\Http\Request;
    use EasySwoole\Http\Response;

class Router extends AbstractRouter
{
    function initialize(RouteCollector $routeCollector)
    {
        $routeCollector->get(
            '/outbrain',
            function (Request $request, Response $response) {
                $outbrain = new OUtbrain();
                $result = $outbrain->hello();

                $response->withHeader('Content-type', 'application/json');
                $response->write($result);
            }
        );

        $routeCollector->addRoute(
            ['DELETE', 'GET', 'PATCH', 'POST', 'PUT'],
            '/[{path:.*}]',
            function (Request $request, Response $response) {
                $response->withStatus(403);
            }
        );
    }
}