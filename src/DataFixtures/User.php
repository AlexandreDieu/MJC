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
            $hash = $this->encoder->encodePassword($user, "toto");
            $user->setPassword($hash);
            $manager->persist($user);
        }
        for ($i = 1; $i <= 10; $i++) {

            $partenaire = new Partenaire();
            $partenaire->setNomResponsable("TATOR " . $i);
            $partenaire->setPrenomResponsable("TotoR " . $i);
            $partenaire->setNomContact("TATOR " . $i);
            $partenaire->setPrenomContact("TotoR " . $i);
            $partenaire->setPrenomContact("TotoR " . $i);
            $partenaire->setStatutJuridique("Statut");
            $hashP = $this->encoder->encodePassword($partenaire, "toto");
            $partenaire->setPassword($hashP);
            $manager->persist($partenaire);
        }

        $manager->flush();
    }
}
