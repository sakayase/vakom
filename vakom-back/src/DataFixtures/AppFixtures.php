<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Article;
use App\Entity\Commentaire;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $this->manager = $manager;
        $this->faker = \Faker\Factory::create('fr_FR');
        // $product = new Product();
        // $manager->persist($product);
        $this->loadAdmin();
        $this->loadArticle(15);
        $this->loadComment(50);
        $manager->flush();
    }

    public function loadAdmin(): void 
    {
        $user = new User();
        $password = $this->encoder->encodePassword($user, 'admin');
        $user->setEmail('admin@gmail.com')
            ->setRoles(["ROLE_ADMIN"])
            ->setPassword($password);

        $this->manager->persist($user);

        $this->manager->flush();
    }

    public function loadArticle(int $nbArticle): void
    {
        for($i = 0; $i < $nbArticle; $i++) {
            $titre = $this->faker->sentence(6, true);
            $contenu = $this->faker->realText(600);
            $resume = $this->faker->realText(100);
            $date = new DateTime();
            $date->setDate(2021, 1, $i);

            $article = new Article();
            $article->setTitre($titre)
                ->setContenu($contenu)
                ->setResume($resume)
                ->setDate($date);
            
            $this->manager->persist($article);
        }
        
        $this->manager->flush();
    }

    public function loadComment(int $count): void 
    {
        $articleRepository = $this->manager->getRepository(Article::class);
        $articles = $articleRepository->findAll();

        for($i = 0; $i < $count; $i++) {
            $articleIndex = rand(0, count($articles)-1);
            $auteur = $this->faker->name;
            $contenu = $this->faker->realText(150);
            
            $commentaire = new Commentaire();
            $commentaire->setAuteur($auteur)
                ->setContenu($contenu);

            $articles[$articleIndex]->addCommentaire($commentaire);

            $this->manager->persist($commentaire);
        }
        $this->manager->flush();
    }
}
