<?php
namespace App\Controller;
use function Symfony\Component\String\u;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController{
    #[Route('/')]
    public function homepage(){    
    
    return new Response("Title: PB and Jams");
}
#[Route("/browse/{slug}")]
public function browse(string $slug = null): Response{

    if($slug){
    $title = u(str_replace('-', ' ',$slug))->title(true);

    
    }else{
        $title = "PACO PACA";
    }
    return new Response("CHIPI CHIPI CHAPA CHAPA $title");
}
}
?>