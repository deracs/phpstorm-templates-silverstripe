<?php

use SilverStripe\ORM\DataObject;
/**
* Class ${NAME}
*/
class ${NAME} extends DataObject
{

    /**
     * List of database fields. {@link DataObject::${DS}db}
     *
     * @var array
     */
    private static ${DS}db = [
    ];


    /**
     * @param null ${DS}member
     * @return bool
     */
    public function canView(${DS}member = null)
    {
        return true;
    }

    /**
     * @param null ${DS}member
     * @return bool
     */
    public function canEdit(${DS}member = null)
    {
        return true;
    }

    /**
     * @param null ${DS}member
     * @return bool
     */
    public function canDelete(${DS}member = null)
    {
        return true;
    }
}