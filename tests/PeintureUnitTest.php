<?php

namespace App\Tests;

use App\Entity\Peinture;
use App\Entity\Categorie;
use App\Entity\User;
use DateTime;
use PHPUnit\Framework\TestCase;

class PeintureUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $peinture = new Peinture();
        $datetime = new DateTime();
        $categorie = new Categorie;
        $user = new User;

        $peinture->setNom('nom')
             ->setLargeur(20.20)
             ->setHauteur(20.20)
             ->setEnVente(true)
             ->setPrix(1500.50)
             ->setDateRealisation($datetime)
             ->setDescription('description')
             ->setProtfolio(true)
             ->setSlug('slug')
             ->setFile('file')
             ->addCategorie($categorie)
             ->setUser($user);

        $this->assertTrue($peinture->getNom() === 'nom');
        $this->assertTrue($peinture->getLargeur() === 20.20);
        $this->assertTrue($peinture->getHauteur() === 20.20);
        $this->assertTrue($peinture->isEnVente() === true);
        $this->assertTrue($peinture->getPrix() === 1500.50);
        $this->assertTrue($peinture->getDateRealisation() === $datetime);
        $this->assertTrue($peinture->getDescription() === 'description');
        $this->assertTrue($peinture->isProtfolio() === true);
        $this->assertTrue($peinture->getSlug() === 'slug');
        $this->assertTrue($peinture->getFile() === 'file');
        $this->assertTrue($peinture->getUser() === $user);
        $this->assertTrue($peinture->getCategorie() === $categorie);
    }

    public function testIsFalse()
    {
        $peinture = new Peinture();
        $datetime = new DateTime();
        $categorie = new Categorie;
        $user = new User;

        $peinture->setNom('nom')
             ->setLargeur(20.20)
             ->setHauteur(20.20)
             ->setEnVente(true)
             ->setPrix(1500.50)
             ->setDateRealisation($datetime)
             ->setDescription('description')
             ->setProtfolio(true)
             ->setSlug('slug')
             ->setFile('file')
             ->addCategorie($categorie)
             ->setUser($user);

        $this->assertFalse($peinture->getNom() === 'false');
        $this->assertFalse($peinture->getLargeur() === 10.20);
        $this->assertFalse($peinture->getHauteur() === 20.20);
        $this->assertFalse($peinture->isEnVente() === false);
        $this->assertFalse($peinture->getPrix() === 1500.50);
        $this->assertFalse($peinture->getDateRealisation() !== $datetime);
        $this->assertFalse($peinture->getDescription() === 'false');
        $this->assertFalse($peinture->isProtfolio() === false);
        $this->assertFalse($peinture->getSlug() === 'false');
        $this->assertFalse($peinture->getFile() === 'files');
        $this->assertFalse($peinture->getCreatedAt() === new DateTime());
        $this->assertFalse($peinture->getUser() !== $user);
        $this->assertFalse($peinture->getCategorie() === $categorie);
    }

    public function testIsEmpty()
    {
        $peinture = new Peinture();

        $this->assertEmpty($peinture->getNom());
        $this->assertEmpty($peinture->getLargeur());
        $this->assertEmpty($peinture->getHauteur());
        $this->assertEmpty($peinture->isEnVente());
        $this->assertEmpty($peinture->getPrix());
        $this->assertEmpty($peinture->getDateRealisation());
        $this->assertEmpty($peinture->getDescription());
        $this->assertEmpty($peinture->isProtfolio());
        $this->assertEmpty($peinture->getSlug());
        $this->assertEmpty($peinture->getFile());
        $this->assertEmpty($peinture->getCreatedAt());
        $this->assertEmpty($peinture->getUser());
        $this->assertEmpty($peinture->getCategorie());
    }
}
