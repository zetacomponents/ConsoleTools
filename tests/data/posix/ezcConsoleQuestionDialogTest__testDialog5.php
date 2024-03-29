<?php
/**
 * File containing test code for the ConsoleTools component.
 *
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 * @package ConsoleTools
 * @version //autogentag//
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

require_once dirname(__FILE__) . "/../../../vendor/autoload.php";

$out = new ezcConsoleOutput();

$opts = new ezcConsoleQuestionDialogOptions();
$opts->text = "Please enter your email address: ";
$opts->validator = new ezcConsoleQuestionDialogRegexValidator(
    "/[a-z0-9_\.]+@[a-z0-9_\.]+\.[a-z0-9_\.]+/"
);

$dialog = new ezcConsoleQuestionDialog( $out, $opts );

try
{
    echo "The email address is " . ezcConsoleDialogViewer::displayDialog( $dialog ) . ".\n";
}
catch ( ezcConsoleDialogAbortException $e )
{
    echo "User manually aborted\n";
}

?>
