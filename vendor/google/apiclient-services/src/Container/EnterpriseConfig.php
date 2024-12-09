<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Container;

class EnterpriseConfig extends \Google\Model
{
  /**
   * @var string
   */
  public $clusterTier;
  /**
   * @var string
   */
  public $desiredTier;

  /**
   * @param string
   */
  public function setClusterTier($clusterTier)
  {
    $this->clusterTier = $clusterTier;
  }
  /**
   * @return string
   */
  public function getClusterTier()
  {
    return $this->clusterTier;
  }
  /**
   * @param string
   */
  public function setDesiredTier($desiredTier)
  {
    $this->desiredTier = $desiredTier;
  }
  /**
   * @return string
   */
  public function getDesiredTier()
  {
    return $this->desiredTier;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EnterpriseConfig::class, 'Google_Service_Container_EnterpriseConfig');