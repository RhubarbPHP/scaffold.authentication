<?php

/*
 *	Copyright 2015 RhubarbPHP
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

namespace Rhubarb\Scaffolds\Authentication\Presenters;

use Rhubarb\Leaf\Presenters\Controls\CheckBoxes\CheckBox;

class LoginView extends \Rhubarb\Patterns\Mvp\BoilerPlates\Login\LoginView
{
    public function createPresenters()
    {
        parent::createPresenters();

        $this->addPresenters(
            new CheckBox("RememberMe")
        );
    }

    protected function printAdditionalBeforeButton()
    {
        ?>
        <div class="band-panels u-marg-top">
            <div class="panel-1">
                <label class="check-label">&nbsp;<?= $this->presenters["RememberMe"] . " Remember Me"; ?></label>
            </div>
            <div class="panel-2 u-align-right">
                <a href="/login/reset/">I've forgotten my password.</a>
            </div>
        </div>
    <?php
    }
}