<?php

/**
 * Created by PhpStorm.
 * User: juniper
 * Date: 31/01/16
 * Time: 11:53 PM
 */

namespace AppBundle\DataFixtures\ORM\LoadStoreData;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Store;

class LoadStoreData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $store = new Store();
        $store->setName('storeOne');
        $store->setProduct('Trick');
        $store->setStock(35);


        $store2 = new Store();
        $store2->setName('storeTwo');
        $store2->setProduct('Toe');
        $store2->setStock(35);


        $manager->persist($store);
        $manager->persist($store2);
        $manager->flush();
    }
}