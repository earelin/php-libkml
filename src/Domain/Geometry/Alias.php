<?php

namespace LibKML\Domain\Geometry;

use LibKML\Domain\KMLObject;

/**
 * Alias class.
 */
class Alias extends KMLObject {

  private $targetHref;
  private $sourceHref;

  /**
   *
   */
  public function getTargetHref() {
    return $this->targetHref;
  }

  /**
   *
   */
  public function setTargetHref($targetHref) {
    $this->targetHref = $targetHref;
  }

  /**
   *
   */
  public function getSourceHref() {
    return $this->sourceHref;
  }

  /**
   *
   */
  public function setSourceHref($sourceHref) {
    $this->sourceHref = $sourceHref;
  }

}
