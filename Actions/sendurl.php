<?php
/*
 * HTTP redirect
 *
 * @author Anakeen
 * @license http://www.fsf.org/licensing/licenses/agpl-3.0.html GNU Affero General Public License
 * @package URL
*/

include_once ("FDL/Class.Doc.php");
/**
 * Redirect to url
 * @param Action &$action current action
 * @param string $vid identificator for file <vaultid>-<docid>
 */
function sendurl(&$action)
{
    $url = $action->getParam("URL_URL");
    
    if ($url) {
        header("location: $url");
        exit;
    }
    $action->lay->template = _("no URL parameter set");
}
