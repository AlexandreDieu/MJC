<?php

namespace App\Entity;

use App\Repository\PartenaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PartenaireRepository::class)
 */
class Partenaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomStructure;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statutJuridique;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomResponsable;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomResponsable;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomContact;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenomContact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statutPartenaire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomStructure(): ?string
    {
        return $this->nomStructure;
    }

    public function setNomStructure(string $nomStructure): self
    {
        $this->nomStructure = $nomStructure;

        return $this;
    }

    public function getStatutJuridique(): ?string
    {
        return $this->statutJuridique;
    }

    public function setStatutJuridique(string $statutJuridique): self
    {
        $this->statutJuridique = $statutJuridique;

        return $this;
    }

    public function getNomResponsable(): ?string
    {
        return $this->nomResponsable;
    }

    public function setNomResponsable(string $nomResponsable): self
    {
        $this->nomResponsable = $nomResponsable;

        return $this;
    }

    public function getPrenomResponsable(): ?string
    {
        return $this->prenomResponsable;
    }

    public function setPrenomResponsable(string $prenomResponsable): self
    {
        $this->prenomResponsable = $prenomResponsable;

        return $this;
    }

    public function getNomContact(): ?string
    {
        return $this->nomContact;
    }

    public function setNomContact(?string $nomContact): self
    {
        $this->nomContact = $nomContact;

        return $this;
    }

    public function getPrenomContact(): ?string
    {
        return $this->prenomContact;
    }

    public function setPrenomContact(?string $prenomContact): self
    {
        $this->prenomContact = $prenomContact;

        return $this;
    }

    public function getStatutPartenaire(): ?string
    {
        return $this->statutPartenaire;
    }

    public function setStatutPartenaire(string $statutPartenaire): self
    {
        $this->statutPartenaire = $statutPartenaire;

        return $this;
    }
}
