<?php

namespace SN\AsymfoniaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class IndexController extends Controller{

	/**
	 * [indexAction description]
	 * @param  Request $request Ce service est definit par le controleur pere, pour gerer les requetes
	 * @return [type]           [description]
	 */
    public function indexAction(/*Request $request*/){


    	// recupere le service 'request'
    	// c'est la meme qu'un' $request passé en parametre
 		$request=$this->container->get('request');
 		// var_dump($request);

    	$valeur=$request->query->get("valeur");		//pour recuperer un get
    	$valeur=$request->request->get("valeur");		//pour recuperer un post
    	$valeur2=$request->request->get("valeur2");

    	$tab=$request->request->all();	//recuperer tableau du post


    	$serv1 = $this->container->get('sn_asymfonia.type1.premierservice');
    	var_dump($serv1->getAttrib() );
 		var_dump($serv1->maju("realisation de mon premier service"));   	
		var_dump($serv1->minu("les bdd maintenant ?"));   	

        return $this->render('SNAsymfoniaBundle:Index:index.html.twig', array(
        	'name' => "dfjmqjf",
        	'valeur' => $valeur,
        	'valeur2' => $valeur2,

        	));

    }
}
