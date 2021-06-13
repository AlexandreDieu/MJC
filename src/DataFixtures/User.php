<?php

namespace App\DataFixtures;

use App\Entity\Partenaire;
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
        for ($i = 1; $i <= 10; $i++) {

            $user = new EntityUser();
            $user->setSecuriteSociale("01928372894" . $i);
            $user->setNom("TATO " . $i);
            $user->setPrenom("Toto " . $i);
            $user->setEmail("toto" . $i . "@toto.fr");
            $user->setTelephone("060102030" . $i);
            $user->setIsVerified(true);
            $user->setNewsletter(true);
            $user->setCafNuméro("000011112222");
            $user->setPaiement(true);
            $user->setAdresse("10 boulevard d'Hollywood");
            $user->setBirthday(new \DateTime());
            $hash = $this->encoder->encodePassword($user, "toto");
            $user->setPassword($hash);
            $user->setGenre('M');
            $manager->persist($user);
        }

        $manager->flush();
    }
}
