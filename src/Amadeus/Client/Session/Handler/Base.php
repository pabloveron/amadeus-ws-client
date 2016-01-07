<?php
/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Session\Handler;

/**
 * Base Session Handler
 *
 * Session handler will manage everything related to the session with the Amadeus Web Services server:
 * - be configurable to handle different versions of authentication mechanisms depending on the WSDL received
 * - decide if a separate authentication message is needed and if so, send it
 * -
 *
 * @package Amadeus\Client\Session\Handler
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class Base implements HandlerInterface
{
    /**
     * @param $messageName
     * @param $messageBody
     * @param $asString
     */
    public function sendMessage($messageName, $messageBody, $asString)
    {
        // TODO: Implement sendMessage() method.
    }

}