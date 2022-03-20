<?php
     namespace geekscity\Models;
     Class Post{
          
          private $Id;

          private $Title;

          private $Image;

          private $Slug;

          private $Content;

          private $Date;

          private $CategoryId;


          /**
           * Get the value of Id
           */ 
          public function getId():int 
          {
                    return $this->Id;
          }


          /**
           * Get the value of Title
           */ 
          public function getTitle():string
          {
                    return $this->Title;
          }

          /**
           * Set the value of Title
           *
           * @return  self
           */ 
          public function setTitle(string $Title):self
          {
                    $this->Title = $Title;

                    return $this;
          }

          /**
           * Get the value of Image
           */ 
          public function getImage():string
          {
                    return $this->Image;
          }

          /**
           * Set the value of Image
           *
           * @return  self
           */ 
          public function setImage(string $Image):self
          {
                    $this->Image = $Image;

                    return $this;
          }

          /**
           * Get the value of Slug
           */ 
          public function getSlug():string
          {
                    return $this->Slug;
          }

          /**
           * Set the value of Slug
           *
           * @return  self
           */ 
          public function setSlug(string $Slug):self
          {
                    $this->Slug = $Slug;

                    return $this;
          }

          /**
           * Get the value of Content
           */ 
          public function getContent():string
          {
                    return $this->Content;
          }

          /**
           * Set the value of Content
           *
           * @return  self
           */ 
          public function setContent(string $Content):self
          {
                    $this->Content = $Content;

                    return $this;
          }

          /**
           * Get the value of Date
           */ 
          public function getDate():\datetime
          {
                    return $this->Date;
          }

          /**
           * Set the value of Date
           *
           * @return  self
           */ 
          public function setDate(\datetime $Date):self
          {
                    $this->Date = $Date;

                    return $this;
          }

          /**
           * Get the value of CategoryId
           */ 
          public function getCategoryId():int
          {
                    return $this->CategoryId;
          }
     }