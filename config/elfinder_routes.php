<?php
CroogoRouter::connect('/admin/filemanager', array('plugin' => 'elfinder', 'controller' => 'elfinder', 'prefix' => 'admin', 'admin' => true));
CroogoRouter::connect('/admin/filemanager/:action/*', array('plugin' => 'elfinder', 'controller' => 'elfinder', 'prefix' => 'admin', 'admin' => true));
