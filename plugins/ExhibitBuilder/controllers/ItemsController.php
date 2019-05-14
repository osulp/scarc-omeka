<?php
/**
 * @copyright Roy Rosenzweig Center for History and New Media, 2007-2012
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 * @package ExhibitBuilder
 */

class ExhibitBuilder_ItemsController extends Omeka_Controller_AbstractActionController
{
    public function init()
    {
        $this->_helper->db->setDefaultModelName('Item');
        $this->_browseRecordsPerPage = 10;
    }

    public function browseAction()
    {
        if (!$this->_getParam('sort_field')) {
            $this->_setParam('sort_field', 'added');
            $this->_setParam('sort_dir', 'd');
        }

        //Must be logged in to view items specific to certain users
        if ($this->_getParam('user') && !$this->_helper->acl->isAllowed('browse', 'Users')) {
            $this->_helper->flashMessenger('May not browse by specific users.');
            $this->_setParam('user', null);
        }
        
        parent::browseAction();
    }



    public function itemsbrowseAction()
    {

        $request = $this->getRequest();
        $tagsParam = $this->_getParam('tags') ?: $this->_getParam('tag');
        # catch both options since tag_cloud() outputs 'tags=' while tag_string() outputs 'tag='

# $_GET['tags']

        #$exhibit = $this->_findByExhibitSlug();
        #if (!$exhibit) {
#            throw new Omeka_Controller_Exception_404;
#        }

#        $this->_helper->db->setDefaultModelName('Item');

        parent::browseAction();

        if (!$this->_getParam('sort_field')) {
            $this->_setParam('sort_field', 'added');
            $this->_setParam('sort_dir', 'd');
        }

        $this->view->assign(array(compact('itemsbrowse'), 'topic' => $tagsParam));
#        fire_plugin_hook('show_exhibit', array('exhibit' => $exhibit));
#        $this->renderExhibit(compact('exhibit'), 'itemsbrowse');
    }



    public function addAction()
    {
        throw new Omeka_Controller_Exception_404;
    }

    public function editAction()
    {
        throw new Omeka_Controller_Exception_404;
    }

    public function deleteAction()
    {
        throw new Omeka_Controller_Exception_404;
    }
}
