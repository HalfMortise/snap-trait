<?php

/**
 *
 * This is another child class of the parent Guitar: Electric
 *
 */

class Electric extends Guitar {
   use TuningFork;

   protected $type;

   public function __construct(string $newSixString, string $newType) {
      parent::__construct($newSixString);
      $this->setType($newType);
   }

   public function getType(): string {
      return($this->type);
   }

   public function setType(string $newType): void {
      $this->type = $newType;
   }
}