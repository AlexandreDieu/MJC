<?php

namespace App\DataFixtures;

use App\Entity\User as EntityUser;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class User extends Fixture
{
    private UserPasswordEncoderInterface $encoder;

    public function __construct(UserPasswordEncoderInterface $userPasswordEncoderInterface)
    {
        $this->encoder = $userPasswordEncoderInterface;
    }
    public function load(ObjectManager $manager)
    {
        $user = new EntityUser();
        $user->setEmail("toto@toto.fr");
        $hash = $this->encoder->encodePassword($user, "toto");
        $user->setPassword($hash);
        // $product = new Product();
        $manager->persist($user);

        $manager->flush();
    }
}
