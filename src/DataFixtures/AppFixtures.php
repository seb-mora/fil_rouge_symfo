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
        $team->setRoles(['ROLE_ADMIN']);
        $manager->persist($team);

        $manager->flush();
    }

    protected function usersFixtures($manager): void
    {
        for ($i = 1; $i <= 7; $i++) {
            $user[$i] = new User;
            $hashedPassword = $this->passwordHasher->hashPassword(
                $user[$i],
                'password'
            );
            $user[$i]->setEmail('user' . $i . '@users.com');
            $user[$i]->setRoles(['ROLE_VISITOR']);
            $user[$i]->setPassword($hashedPassword);
            $user[$i]->setNom($this->faker->lastName());
            $user[$i]->setPrenom($this->faker->firstName());
            $manager->persist($user[$i]);
        }
        $manager->flush();
    }

    protected function categoriesFixtures($manager): void
    {
        for ($i = 1; $i <= 3; $i++) {
            $categorie[$i] = new Categories;
            $categorie[$i]->setNom($this->faker->firstName());
            $manager->persist($categorie[$i]);
        }
        $manager->flush();
    }

    protected function articleFixtures($manager): void
    {
        for ($i = 1; $i <= 12; $i++) {
            $article[$i] = new Article;
            $article[$i]->setUser($this->getRandomReference('App\Entity\Team', $manager));
            $article[$i]->setCategorie($this->getRandomReference('App\Entity\Categories', $manager));
            $article[$i]->setTitre($this->faker->country());
            $article[$i]->setContenu($this->faker->text());
            $article[$i]->setDate($this->faker->datetime());
            $article[$i]->setLogo('https://loremflickr.com/640/480/lanscape');
            $manager->persist($article[$i]);
        }
        $manager->flush();
    }

    protected function commentairesFixtures($manager): void
    {
        for ($i = 1; $i <= 25; $i++) {
            $commentaire[$i] = new Commentaires;
            $commentaire[$i]->setAuteur($this->getRandomReference('App\Entity\User', $manager));
            $commentaire[$i]->setArticle($this->getRandomReference('App\Entity\Article', $manager));
            $commentaire[$i]->setContenu($this->faker->text());
            $commentaire[$i]->setDate($this->faker->dateTime());
            $commentaire[$i]->setStatus($this->faker->boolean());
            $manager->persist($commentaire[$i]);
        }
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
