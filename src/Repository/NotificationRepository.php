<?php


namespace App\Repository;

use App\Entity\Notification;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use Doctrine\Persistence\ManagerRegistry;


class NotificationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Notification::class);
    }

    function findUnseenByUser(User $user)
    {
        $qb = $this->createQueryBuilder('n');

        try {
            return $qb->select('count(n)')
                ->where('n.user = :user')
                ->andWhere('n.seen = 0')
                ->setParameter('user', $user)
                ->getQuery()
                ->getSingleScalarResult();
        } catch (NoResultException $e) {
        } catch (NonUniqueResultException $e) {
        }

    }

    public function markAllAsReadByUser(User $user)
    {
        $qb = $this->createQueryBuilder('n');
        $qb->update('App\Entity\Notification', 'n')
            ->set('n.seen', true)
            ->where('n.user = :user' )
            ->setParameter('user', $user)
            ->getQuery()
            ->execute();
    }
}