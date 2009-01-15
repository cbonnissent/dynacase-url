<?php
/**
 * Get DAV session
 *
 * @author Anakeen 2006
 * @version $Id: sendurl.php,v 1.2 2009/01/15 16:42:39 eric Exp $
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @package FREEDOM
 * @subpackage DAV
 */
 /**
 */



include_once("FDL/Class.Doc.php");

/**
 * Redirect to url
 * @param Action &$action current action
 * @param string $vid identificator for file <vaultid>-<docid>
 */
function sendurl(&$action) {
  $url = $action->getParam("URL_URL");

  if ($url) {
    header("location: $url");
    exit;
  }
  $action->lay->template=_("no URL parameter set");

}