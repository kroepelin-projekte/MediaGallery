<?php

include_once("./Services/Repository/classes/class.ilRepositoryObjectPlugin.php");
 
/**
* MediaGallery repository object plugin
*
* @author Helmut Schottmüller <ilias@aurealis.de>
* @version $Id$
*
*/
class ilMediaGalleryPlugin extends ilRepositoryObjectPlugin
{
	function getPluginName()
	{
		return "MediaGallery";
	}

	/**
	 * @return \ilFSStorageMediaGallery
	 */
	public function getFileSystem()
	{
		return ilFSStorageMediaGallery::_getInstanceByXmgId($this->getId());
	}
}
?>
