<?php
// src/OC/PlatformBundle/DataFixtures/ORM/LoadAdvert.php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Advert;

class LoadAdvert implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        $advert = new Advert();

        $advert->setContent('Nous recherchons un développeur web sur Toulouse');
        $advert->setAuthor('Benoit');
        $advert->setTitle('Recherche dévelopeur web Symfony');
        $advert->setPublished(true);

        $manager->persist($advert);

        // On déclenche l'enregistrement de toutes les catégories
        $manager->flush();
    }
}
