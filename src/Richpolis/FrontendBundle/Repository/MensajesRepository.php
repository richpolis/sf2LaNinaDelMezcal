<?php

namespace Richpolis\FrontendBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * MensajesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MensajesRepository extends EntityRepository
{
    public function getQueryMensajesActivas($todas=false){
		$query=$this->createQueryBuilder('p')
                    ->orderBy('p.botella', 'ASC')
                    ->addOrderBy('p.tituloEn','ASC');
        if(!$todas){
            $query->andWhere('p.isActive=:active')
                  ->setParameter('active', true);
        }

        return $query->getQuery();
    }
    
    public function getMensajesActivas($todas=false){
        $query=$this->getQueryMensajesActivas($todas);
        return $query->getResult();
    }
    
    public function getQueryMensajesPorBotellaActivas($botella,$todas=false){
		$query=$this->createQueryBuilder('p')
                    ->where('p.botella=:botella')
                    ->setParameter('botella', $botella)
                    ->addOrderBy('p.tituloEn','ASC');
        if(!$todas){
            $query->andWhere('p.isActive=:active')
                  ->setParameter('active', true);
        }

        return $query->getQuery();
    }
    
    public function getMensajesPorBotellasPorActivas($botella,$todas=false){
        $query=$this->getQueryMensajesPorBotellaActivas($botella,$todas);
        return $query->getResult();
    }
}
