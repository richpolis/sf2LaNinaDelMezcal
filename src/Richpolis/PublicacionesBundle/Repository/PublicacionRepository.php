<?php

namespace Richpolis\PublicacionesBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * PublicacionesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PublicacionRepository extends EntityRepository
{
    public function getMaxPosicion(){
        $em=$this->getEntityManager();
        $query=$em->createQuery('
            SELECT MAX(p.posicion) as value 
            FROM PublicacionesBundle:Publicacion p 
            ORDER BY p.posicion ASC
            ');
        $max=$query->getResult();
        return $max[0]['value'];
    }
    
    public function getQueryPublicacionActivas($todas=false){
        $query=$this->createQueryBuilder('p')
                    ->orderBy('p.posicion', 'DESC');
        if(!$todas){
            $query->andWhere('p.isActive=:active')
                  ->setParameter('active', true);
        }
        return $query->getQuery();
    }
    
    public function getPublicacionActivas($todas=false){
        $query=$this->getQueryPublicacionActivas($todas);
        return $query->getResult();
    }

    public function getQueryPublicacionPorCategoriaActivas($categoria,$todas=false){
        $query=$this->createQueryBuilder('p')
                    ->where('p.categoria=:categoria')
                    ->setParameter('categoria',$categoria)
                    ->orderBy('p.posicion', 'DESC');
        if(!$todas){
            $query->andWhere('p.isActive=:active')
                  ->setParameter('active', true);
        }
        return $query->getQuery();
    }
    
    public function getPublicacionPorCategoriaActivas($categoria,$todas=false){
        $query=$this->getQueryPublicacionPorCategoriaActivas($categoria,$todas);
        return $query->getResult();
    }
    
    public function getRegistroUpOrDown($posicionRegistro,$up=true){
        // $up = true, $up = false is down
        if($up){
            //up
            $query=$this->createQueryBuilder('p')
                    ->where('p.posicion>:posicion')
                    ->setParameter('posicion', $posicionRegistro)
                    ->orderBy('p.posicion', 'DESC');
        }else{
            //down
            $query=$this->createQueryBuilder('p')
                    ->where('p.posicion<:posicion')
                    ->setParameter('posicion', $posicionRegistro)
                    ->orderBy('p.posicion', 'DESC');
        }
        
        return $query->getQuery()->setMaxResults(1)->getOneOrNullResult();
    }
}