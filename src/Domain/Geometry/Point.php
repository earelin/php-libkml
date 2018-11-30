<?php

namespace LibKML\Domain\Geometry;

/**
 * Point class.
 */
class Point extends Geometry {

  private $extrude;
  private $altitudeMode;
  private $coordinates;

  /**
   *
   */
  public function getExtrude() {
    return $this->extrude;
  }

  /**
   *
   */
  public function setExtrude($extrude) {
    $this->extrude = $extrude;
  }

  /**
   *
   */
  public function getAltitudeMode() {
    return $this->altitudeMode;
  }

  /**
   *
   */
  public function setAltitudeMode($altitudeMode) {
    $this->altitudeMode = $altitudeMode;
  }

  /**
   *
   */
  public function getCoordinates() {
    return $this->coordinates;
  }

  /**
   *
   */
  public function setCoordinates($coordinates) {
    $this->coordinates = $coordinates;
  }

}