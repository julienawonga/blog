<?php
     namespace geekscity\Table;
     use Models\Post;
     use PDO;
     use geekscity\Database;

     class PostTable{

          private $pdo;

          private $slug;

          public function __construct( PDO $pdo){
               $this->pdo = $pdo;
               
          }

          function CreatePost(string $Title, string $Image, string $Content, int $CategoryId ){
               
               $this->slug = self::slugify($Title);

               $sql = "INSERT INTO posts (Title, Image, Content, CategoryID, Slug) VALUES (?,?,?,?,?)";
               $stmt= $this->pdo->prepare($sql);
               $result = $stmt->execute([$Title, $Image, $Content, $CategoryId, $this->slug]);
               if($result==TRUE){
                    echo " bien";
                    
               }else{

               }

          }
          public static function slugify($text, string $divider = '-')
          {
               // replace non letter or digits by divider
               $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

               // transliterate
               $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

               // remove unwanted characters
               $text = preg_replace('~[^-\w]+~', '', $text);

               // trim
               $text = trim($text, $divider);

               // remove duplicate divider
               $text = preg_replace('~-+~', $divider, $text);

               // lowercase
               $text = strtolower($text);

               if (empty($text)) {
               return 'n-a';
               }

               return $text;
          }
     }