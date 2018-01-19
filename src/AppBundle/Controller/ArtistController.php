<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ArtistController extends Controller
{
    /**
     * @Route("/", name="artists")
     */
    public function listAction(Request $request)
    {
        $artistesRepo = $this->getDoctrine()->getRepository('AppBundle:Musicien');


        if ($request->query->has('page'))
            $page = $request->query->getInt('page');
        else $page = 1;



        if ($request->query->has('q')) {
            $artistes = $artistesRepo->createQueryBuilder('m')
                ->distinct()
                ->join('m.compositions', 'c')
                ->andWhere('m.prenomMusicien LIKE :q OR m.nomMusicien LIKE :q')
                ->setParameter('q', $request->query->getAlnum('q').'%')
                ->orderBy('m.nomMusicien', 'ASC')
                ->setMaxResults(10)
                ->setFirstResult(10 * ($page - 1))
                ->getQuery()
                ->execute();
            $totalCount = $artistesRepo->createQueryBuilder('m')
                ->select('COUNT(DISTINCT m)')
                ->join('m.compositions', 'c')
                ->andWhere('m.prenomMusicien LIKE :q OR m.nomMusicien LIKE :q')
                ->setParameter('q', $request->query->getAlnum('q').'%')
                ->getQuery()
                ->getSingleScalarResult();
        }
        else
        {
            $artistes = $artistesRepo->createQueryBuilder('m')
                ->distinct()
                ->join('m.compositions', 'c')
                ->orderBy('m.nomMusicien', 'ASC')
                ->setMaxResults(10)
                ->setFirstResult(10 * ($page - 1))
                ->getQuery()
                ->execute();
            $totalCount = $artistesRepo->createQueryBuilder('m')
                ->select('COUNT(DISTINCT m)')
                ->join('m.compositions', 'c')
                ->getQuery()
                ->getSingleScalarResult();
        }

        $hasNextPage = $totalCount > 10 * $page;

        return $this->render(':artistes:list.html.twig', [
            'page_head' => 'Artistes',
            'page_head_small' => 'Des centaines d\'artistes à découvrir',
            'box_head' => 'Liste des artistes',
            'box_width' => '90%',
            'artistes' => $artistes,
            'page' => $page,
            'q' => $request->query->getAlnum('q', null),
            'hasNextPage' => $hasNextPage,
            'total' => $totalCount
        ]);
    }

    /**
     * @Route("/{codeArtiste}", name="showArtist")
     *
     * @param int $codeArtiste
     */
    public function showAction($codeArtiste)
    {

    }
}
