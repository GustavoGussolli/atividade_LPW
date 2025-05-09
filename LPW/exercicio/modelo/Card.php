<?php

class Card
{
    private $nome;
    private $genero;
    private $plataforma;
    private $desenvolvedora;
    private $ano;
    private $classificacao;
    private $capa;

    public function __construct($nome, $genero, $plataforma, $desenvolvedora, $ano, $classificacao, $capa)
    {
        $this->nome = $nome;
        $this->genero = $genero;
        $this->plataforma = $plataforma;
        $this->desenvolvedora = $desenvolvedora;
        $this->ano = $ano;
        $this->classificacao = $classificacao;
        $this->capa = $capa;
    }



    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of plataforma
     */
    public function getPlataforma()
    {
        return $this->plataforma;
    }

    /**
     * Set the value of plataforma
     */
    public function setPlataforma($plataforma): self
    {
        $this->plataforma = $plataforma;

        return $this;
    }

    /**
     * Get the value of desenvolvedora
     */
    public function getDesenvolvedora()
    {
        return $this->desenvolvedora;
    }

    /**
     * Set the value of desenvolvedora
     */
    public function setDesenvolvedora($desenvolvedora): self
    {
        $this->desenvolvedora = $desenvolvedora;

        return $this;
    }

    /**
     * Get the value of ano
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     */
    public function setAno($ano): self
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get the value of classificacao
     */
    public function getClassificacao()
    {
        return $this->classificacao;
    }

    /**
     * Set the value of classificacao
     */
    public function setClassificacao($classificacao): self
    {
        $this->classificacao = $classificacao;

        return $this;
    }

    /**
     * Get the value of capa
     */
    public function getCapa()
    {
        return $this->capa;
    }

    /**
     * Set the value of capa
     */
    public function setCapa($capa): self
    {
        $this->capa = $capa;

        return $this;
    }
}
