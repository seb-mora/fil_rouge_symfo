<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }

    protected function getReferencedObject(string $className, int $id, object $manager)
    {
        return $manager->find($className, $id);
    }

    protected function getRandomReference(string $className, object $manager)
    {
        $list = $manager->getRepository($className)->findAll();
        return $list[array_rand($list)];
    }

    protected function truncate($manager): void
    {
        /** @var Connection db */
        $db = $manager->getConnection();

        //start new transaction
        $db->beginTransaction();

        $sql = '
SET FOREIGN_KEY_CHECKS = 0;
TRUNCATE team;
TRUNCATE user;
TRUNCATE categories;
TRUNCATE article;
TRUNCATE commentaires;
SET FOREIGN_KEY_CHECKS = 1;
';

        $db->prepare($sql);
        $db->executeQuery($sql);

        $db->commit();
        $db->beginTransaction();
    }
}
