<?php
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
         echo "Message" . PHP_EOL;
      } else {
         echo "Other Message" . PHP_EOL;
      }
   }
}