<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

    <h2> La visibilité en PHP</h2>
<p>
  La visibilité en PHP permetde définir les niveaux d'accès aux propiriétés et aux méthodes d'une classe. Il exixte trois niveaux de visibilité en PHP:
  PUBLIC : permet à la propriété ou à la méthoide d'etre accessible depuis n'importe ou dans le code.
  PROTECTED : permet à la propriété ou lma méthode d'etre accessible dans la classe elle-meme et dans les classes dérivées (classes enfants ou héritières).
  PRIVATE: limite l'accès à la propriété ou à la méthode à la classe elle-meme.

  <h2> Role de la visibilité dans l'encapsulation</h2>
  Il est essentiel de comprendre que la porté des p^ro^piétés et des méthodes n'affecte pas leur fonctionnalité. EN d'autre termes , la visibilité ne détérmine pas si une propriété ou une méthode peut etre utilisée ou non. Elle controle simplement l'accès à la propriété ou à la méthode à partir de l'exterieur de ela classe. Ainsi, les propriétés et les méthodes peuvent toujours etre appelées et utilisées par d'autre pparties du code . tant que l'accès est autorisé. La porté des propriétés et des méthodes est utilisée principalemennt pour renforcer l'encapsulation des données et pour mieux organiser son code.

<?php
class Maclasse {
  public $publicProp = 'Propriété publique';
  protected $protectedProp =) 'Propriété protégée';
  private $privateProp = 'Propriété privée';

   public function publicMethod() {
     echo 'Méthode publique';
   }

  protected function protectedMethod() {
    echo 'Méthoide protégée';
  }
  private fuction privateMMethod() {
  echo 'Méthod privée';
  }
}

?> 

  </body>
</html>