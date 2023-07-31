<?php

namespace App\DataFixtures;


use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Faker\Factory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use App\Entity\Team;
use App\Entity\Categories;
use App\Entity\Article;
use App\Entity\Commentaires;


class AppFixtures extends Fixture
{

    private $faker;
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
        $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager): void
    {
        $this->truncate($manager);
        $this->teamFixtures($manager);
        $this->usersFixtures($manager);
        $this->categoriesFixtures($manager);
        $this->articleFixtures($manager);
        $this->commentairesFixtures($manager);
    }

    protected function teamFixtures($manager)
    {
        $team = new Team;
        $team->setEmail('admin@admin.com');
        $hashedPassword = $this->passwordHasher->hashPassword(
            $team,
            'password'
        );
        $team->setPassword($hashedPassword);
        $team->setNom('Lenom');
        $team->setPrenom('Leprenom');
        $manager->persist($team);

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
