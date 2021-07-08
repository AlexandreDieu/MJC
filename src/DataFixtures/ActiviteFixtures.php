<?php

namespace App\DataFixtures;

use App\Entity\Activite;
use App\Entity\Categorie;
use App\Entity\Evenement;
use App\Entity\Partenaire;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActiviteFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $bienEtre = new Categorie();
        $bienEtre->setNom("Bien-être");
        $bienEtre->setImg("img.jpg");
        $manager->persist($bienEtre);

        for($i = 1; $i <= 50; $i++){

            $activite = new Activite();
            $activite->setNom("Activite " . $i);
            $activite->setCategorie($bienEtre);
            $activite->setDateHeure(new DateTime());
            $activite->setImg("img{$i}.jpg");
            $activite->setLieu("Lorem ipsum dolor sitae Lorem ipsum dolor sitae Lorem ipsum dolor sitae");
            
            $manager->persist($activite);
        }
        for($i = 1; $i <= 10; $i++){

            $evenement = new Evenement();
            $evenement->setNom("Evenement " . $i);
            $evenement->setDateHeure(new DateTime());
            $evenement->setImg("imgE{$i}.jpg");
            $evenement->setLieu("Lorem ipsum dolor sitae Lorem ipsum dolor sitae Lorem ipsum dolor sitae");
            
            $manager->persist($evenement);
        }
        for($i = 1; $i <= 5; $i++){

            $partenaire = new Partenaire();
            $partenaire->setNomStructure("Strucutre" . $i);
            $partenaire->setStatutJuridique("Statut" . $i);
            $partenaire->setNomResponsable("ResponsableN" . $i);
            $partenaire->setPrenomResponsable("ResponsableP" . $i);
          
            
            $manager->persist($partenaire);
        }
        $manager->flush();
    }
}
