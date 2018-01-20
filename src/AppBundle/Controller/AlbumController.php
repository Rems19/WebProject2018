<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Album;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
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
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();
        $ep = $em->getUnitOfWork()->getEntityPersister('AppBundle:Album');
        /** @var EntityRepository $albumRepo */
        $albumRepo = $this->getDoctrine()->getRepository('AppBundle:Album');

        $page = $request->query->getInt('page', 1);

        $criteria = Criteria::create();

        if ($request->query->has('q')) {
            $q = $request->query->getAlnum('q', null);
            $criteria->andWhere(Criteria::expr()->startsWith('titreAlbum', $q));
        }

        $albums = $albumRepo->matching($criteria
            ->orderBy(['titreAlbum' => 'ASC'])
            ->setFirstResult(10 * ($page - 1))
            ->setMaxResults(10)
        );
        $totalCount = $ep->count($criteria);

        $hasNextPage = $totalCount > 10 * $page;

        return $this->render(':albums:list.html.twig', [
            'page_head' => 'Albums',
            'page_head_small' => 'Des centaines d\'albums à votre disposition',
            'box_head' => 'Liste des albums',
            'box_width' => '90%',
            'albums' => $albums,
            'page' => $page,
            'q' => $q,
            'hasNextPage' => $hasNextPage,
            'total' => $totalCount
        ]);
    }

    /**
     * @Route("/{codeAlbum}", name="showAlbum")
     *
     * @param Album $album
     */
    public function showAction(Album $album)
    {
        return $this->render(':albums:show.html.twig', [
            'doctrine' => $this->getDoctrine(),
            'page_head' => 'Albums',
            'page_head_small' => 'Des centaines d\'albums à votre disposition',
            'box_head' => $album->getTitreAlbum(),
            'box_width' => '80%',
            'album' => $album
        ]);
    }
}
