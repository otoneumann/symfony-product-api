<?php

namespace App\DataFixtures;

use App\Entity\Product;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product();
        $product->setName("Product One");
        $product->setSize(100);
        $product->setPublishedOn(new \DateTime('2025-01-01'));

        $manager->persist($product);

        $product = new Product();
        $product->setName("Product Two");
        $product->setSize(200);
        $product->setIsAvailable(false);
        $product->setPublishedOn(new \DateTime('2025-02-01'));

        $manager->persist($product);

        $user = new User();
        $user->setName("User 1");
        $user->setEmail("a@a.a");
        $user->setBirthday(new \DateTime('2025-01-01'));

        $manager->persist($user);

        $manager->flush();
    }
}
