<?php
/**
 * Created by PhpStorm.
 * User: juniper
 * Date: 1/02/16
 * Time: 12:50 AM
 */



namespace AppBundle\DataFixtures\ORM\LoadProductData;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Product;


class LoadProductData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $product = new Product();
        $product->setName('ProductOne');
        $product->setPrice(8.55);
        $product->setQuanity(50);


        $product2 = new Product();
        $product2->setName('ProductTwo');
        $product2->setPrice(9.25);
        $product2->setQuanity(8);


        $manager->persist($product);
        $manager->persist($product2);
        $manager->flush();
    }

}