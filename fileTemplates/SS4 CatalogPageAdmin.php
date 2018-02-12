<?php

use LittleGiant\CatalogManager\ModelAdmin\CatalogPageAdmin;
/**
* Class ${NAME}
*/
class ${NAME} extends CatalogPageAdmin
{
    /**
     * The current url segment. {@link LeftAndMain::${DS}url_segment}
     *
     * @config
     * @var string
     */
    private static ${DS}url_segment = '$UrlSegment';

    /**
     * The current menu title. {@link LeftAndMain::${DS}menu_title}
     *
     * @config
     * @var string
     */
    private static ${DS}menu_title = '$MenuTitle';

    /**
     * List of all managed {@link DataObject}s in this interface. {@link CatalogPageAdmin::${DS}managed_models}
     *
     * @config
     * @var array|string
     */
    private static ${DS}managed_models = [];
}