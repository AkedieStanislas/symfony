<?php
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\Framework\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Psr\Log\LoggerInterface;
#To see others services, do this: php bin/console debug:autowiring
#Make CRUS from a doctrrine entity = php bin/console make:crud (name_Crud)
#Install "Symfony Maker" to generate a new controller class = php bin/console make:controller (name_controller)

class LuckyController extends AbstractController
{
    public function number(int $max, LoggerInterface $logger): Response
    {
        $logger -> info('We are logging!');
        #managing erros and 404 pages
        if (!$produit){
            throw $this -> createNotFoundException(`'product doesn't exist'`);
        }
        return $this -> render(...);
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
        return $this -> render(
            'lucky/number.html.twig', [ 'number' => $number ]
        );
    public function index():RedirectResponse
    {
        return $this -> redirectToRoute('homepage');# redirect to 'homepage' route
        return $this -> redirectToRoute('homepage', [], 301); # does permanetn http 301
        #if you prefer, you can use PHP constants insetad of hardcoded number
        return $this -> redirectToRoute( 'homepage', [], Response::HTTP_MOVED_PERMANENTLY);
        #redirect to a route with a parameters
        return $this -> redirectToRoute('app_lucky_number', ['max'=> 10]);
        #redirect to a route and maintains the original query sring parameters
        return $this -> redirectToRoute('blog_show', $request->query->all());
        #redirect to a current route
        return $this -> redirectToRoute('blog_show', $request->attributes->get('route'));
        return $this -> redirect('https://symfony.com');

    }
    }
}
> /**Associate this controller function with a public url so that number() method is called 
when an user browses to it./

/**Install annotations
 composer require annotation
 * Annotation is an alias taht flex resolves to sensio/framework-extra-bundle/
 * Second flex runs a recipe that talk about to integration of an external package
 * debugging tool by ( php bin/console )
 * debugging router by ( php bin/console debug:router )
 * composer require twig install twig and after twig will install
 * automatically
 * if a route exists do this:
 * try { $url = $this- router -generate($routeName, $routeParamers);
 * } catch(RouteNotFoundException $e)