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

/**
 *
 * This is the tune trait that tunes the string instrument (Guitar),
 * which will be used in one of the child classes
 */

trait TuningFork {
   protected $stringedInstrument;

   public function getStringedInstrument(): bool {
      return($this->stringedInstrument);
   }

   public function setStringedInstrument(bool $newStringedInstrument): void {
      $this->stringedInstrument = $newStringedInstrument;
   }

   public function run(): void {
      if($this->stringedInstrument === true) {
         echo "TEXT" . PHP_EOL;
      } else {
         echo "TEXT" . PHP_EOL;
      }
   }
}



/**
 *
 * This is one child class of the parent Guitar: Acoustic
 *
 */

class Acoustic extends Guitar {
   use TuningFork;

   protected $type;

   public function __construct(string $sixString, string $newType) {
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


/**
 *
 * This is another child class of the parent Guitar: Electric
 *
 */

class Electric extends Guitar {
   use TuningFork;

   protected $type;

   public function __construct(string $sixString, string $newType) {
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