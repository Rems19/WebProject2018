<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AlbumController extends Controller
{
    /**
     * @Route("/", name="albums")
     */
    public function listAction(Request $request)
    {
        $albumRepo = $this->getDoctrine()->getRepository('AppBundle:Album');


        if ($request->query->has('page'))
            $page = $request->query->getInt('page');
        else $page = 1;



        if ($request->query->has('q')) {
            $albums = $albumRepo->createQueryBuilder('a')
                ->andWhere('a.titreAlbum LIKE :q')
                ->setParameter('q', $request->query->getAlnum('q').'%')
                ->orderBy('a.titreAlbum', 'ASC')
                ->setMaxResults(10)
                ->setFirstResult(10 * ($page - 1))
                ->getQuery()
                ->execute();
            $totalCount = $albumRepo->createQueryBuilder('a')
                ->select('COUNT(a)')
                ->andWhere('a.titreAlbum LIKE :q')
                ->setParameter('q', $request->query->getAlnum('q').'%')
                ->getQuery()
                ->getSingleScalarResult();
//            $albums = $albumRepo->findBy(['titreAlbum' => $request->query->getAlnum('q').'%'], ['titreAlbum' => 'ASC', 10, 10 * ($page - 1)]);
        }
        else
        {
            $albums = $albumRepo->findBy([], ['titreAlbum' => 'ASC'], 10, 10 * ($page - 1));
            $totalCount = $albumRepo->createQueryBuilder('a')->select('COUNT(a)')->getQuery()->getSingleScalarResult();
        }

        $hasNextPage = $totalCount > 10 * $page;

        return $this->render(':albums:list.html.twig', [
            'page_head' => 'Albums',
            'page_head_small' => 'Des centaines d\'albums à votre disposition',
            'box_head' => 'Liste des albums',
            'box_width' => '90%',
            'albums' => $albums,
            'page' => $page,
            'q' => $request->query->getAlnum('q', null),
            'hasNextPage' => $hasNextPage,
            'total' => $totalCount
        ]);
    }

    /**
     * @Route("/{codeAlbum}", name="showAlbum")
     *
     * @param int $codeAlbum
     */
    public function showAction($codeAlbum)
    {

    }
}
