<?php

namespace AppBundle\Controller;

use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ArtistController extends Controller
{
    /**
     * @Route("/", name="artists")
     * @throws \Doctrine\DBAL\DBALException
     */
    public function listAction(Request $request)
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();
        $ep = $em->getUnitOfWork()->getEntityPersister('AppBundle:Musicien');
        /** @var EntityRepository $musicienRepo */
        $musicienRepo = $this->getDoctrine()->getRepository('AppBundle:Musicien');

        $page = $request->query->getInt('page', 1);

        ($stmt = $em->getConnection()->prepare('SELECT DISTINCT Code_Musicien FROM Composer'))->execute();
        $composersIds = $stmt->fetchAll(\PDO::FETCH_COLUMN);

        $criteria = Criteria::create()->where(Criteria::expr()->in('codeMusicien', $composersIds));

        if ($request->query->has('q')) {
            $q = $request->query->getAlnum('q', null);
            $criteria->andWhere(Criteria::expr()->orX([
                Criteria::expr()->startsWith('nomMusicien', $q),
                Criteria::expr()->startsWith('prenomMusicien', $q)
            ]));
        }

        $artistes = $musicienRepo->matching($criteria
            ->orderBy(['nomMusicien' => 'ASC'])
            ->setFirstResult(10 * ($page - 1))
            ->setMaxResults(10)
        );
        $totalCount = $ep->count($criteria);

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
