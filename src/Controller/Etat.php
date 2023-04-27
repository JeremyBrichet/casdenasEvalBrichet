<?php

namespace App\Controller;

class Etat
{
    #[ORM\Column(nullable: true)]
    private ?bool $neuf = null;

    #[ORM\Column(nullable: true)]
    private ?bool $occasion = null;

    #[ORM\Column(nullable: true)]
    private ?bool $neufRepare = null;

    /**
     * @return bool|null
     */
    public function getNeuf(): ?bool
    {
        return $this->neuf;
    }

    /**
     * @param bool|null $neuf
     */
    public function setNeuf(?bool $neuf): void
    {
        $this->neuf = $neuf;
    }

    /**
     * @return bool|null
     */
    public function getOccasion(): ?bool
    {
        return $this->occasion;
    }

    /**
     * @param bool|null $occasion
     */
    public function setOccasion(?bool $occasion): void
    {
        $this->occasion = $occasion;
    }

    /**
     * @return bool|null
     */
    public function getNeufRepare(): ?bool
    {
        return $this->neufRepare;
    }

    /**
     * @param bool|null $neufRepare
     */
    public function setNeufRepare(?bool $neufRepare): void
    {
        $this->neufRepare = $neufRepare;
    }
}