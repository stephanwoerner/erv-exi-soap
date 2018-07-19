<?php

namespace StephanWoerner\ErvExiSoap\Model;

class extensionsType
{

    /**
     * @var extensionType[] $extension
     */
    protected $extension = null;

    /**
     * @param extensionType[] $extension
     */
    public function __construct(array $extension)
    {
      $this->extension = $extension;
    }

    /**
     * @return extensionType[]
     */
    public function getExtension()
    {
      return $this->extension;
    }

    /**
     * @param extensionType[] $extension
     * @return \StephanWoerner\ErvExiSoap\Model\extensionsType
     */
    public function setExtension(array $extension)
    {
      $this->extension = $extension;
      return $this;
    }

}
