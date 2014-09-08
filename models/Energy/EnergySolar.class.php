<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EnergySolar
 *
 * @author jaCUBE
 */
class EnergySolar extends EnergyCommon {
  public function __construct($country = 'cz') {
    parent::__construct(9, $country);
  }
}
