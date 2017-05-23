<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Comment;
use AppBundle\Entity\Post;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

/**
 * Defines the sample blog posts to load in the database before running the unit
 * and functional tests. Execute this command to load the data.
 *
 *   $ php bin/console doctrine:fixtures:load
 *
 * See https://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html
 *
 */
class PostFixtures extends AbstractFixture implements DependentFixtureInterface, ContainerAwareInterface
{
    use ContainerAwareTrait;


    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {

        $post = new Post();

        $post->setNaam("HuwelijkS5");
        $post->setSlug($this->container->get('slugger')->slugify($post->getNaam()));
        $post->setKlantId("1");
        $post->setAdressId("2");
        $post->setType("Vliegende pastoors");
        $post->setPlanningDatum(new \DateTime("2017-06-06"));
        $post->setOmschrijving("Huwelijk boven water");
        $post->setPersoneelId("1");
        $post->setStartDatum(new \DateTime("2017-07-08"));
        $post->setEindDatum(new \DateTime("2017-07-10"));
        $post->setVerwachtAantalGasten("100");

        $manager->persist($post);
        $manager->flush();

        $post = new Post();

        $post->setNaam("Afterparty");
        $post->setSlug($this->container->get('slugger')->slugify($post->getNaam()));
        $post->setKlantId("4");
        $post->setAdressId("4");
        $post->setType("ASS hostesses");
        $post->setPlanningDatum(new \DateTime("2017-10-11"));
        $post->setOmschrijving("After party");
        $post->setPersoneelId("2");
        $post->setStartDatum(new \DateTime("2017-10-12"));
        $post->setEindDatum(new \DateTime("2017-10-15"));
        $post->setVerwachtAantalGasten("275");

        $manager->persist($post);
        $manager->flush();
    }

    /**
     * Instead of defining the exact order in which the fixtures files must be loaded,
     * this method defines which other fixtures this file depends on. Then, Doctrine
     * will figure out the best order to fit all the dependencies.
     *
     * @return array
     */
    public function getDependencies()
    {
        return [
            UserFixtures::class,
        ];
    }


}
