<?php

class Livro
{
  private string $titulo;
  private string $autor;
  private int $paginas;

  private function setTitulo(string $titulo): void
  {
    $this->titulo = $titulo;
  }

  private function setAutor(string $autor)
  {
    $this->autor = $autor;
  }

  private function setPaginas(){
    
  }
}
