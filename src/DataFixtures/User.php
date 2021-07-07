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
            $user->setIdentifiant("toto" . $i);
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
        $admin = new EntityUser();
        $admin->setIdentifiant("admin");
        $admin->setSecuriteSociale("000");
        $admin->setNom("admin");
        $admin->setPrenom("admin");
        $admin->setEmail("admin@admin.fr");
        $admin->setTelephone("0606060606");
        $admin->setIsVerified(true);
        $admin->setNewsletter(true);
        $admin->setCafNuméro("000011112222");
        $admin->setPaiement(true);
        $admin->setAdresse("1 admin");
        $admin->setBirthday(new \DateTime());
        $hash = $this->encoder->encodePassword($admin, "admin");
        $admin->setPassword($hash);
        $admin->setGenre('M');
        $manager->persist($admin);

        $manager->flush();
    }
}
