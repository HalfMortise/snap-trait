<?php
/**
 *
 * This is the parent class, Guitar
 */

class Guitar {
   protected $sixString;

   public function __construct(string $newSixString) {
      $this->setSixString($newSixString);
   }

   public function getSixString(): string {
      return($this->sixString);
   }

   public function setSixString(string $newSixString): void {
      $this->sixString = $newSixString;
   }
}