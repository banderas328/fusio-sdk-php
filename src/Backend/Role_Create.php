<?php
/**
 * Role_Create generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('categoryId', 'name'))]
class Role_Create extends Role implements \JsonSerializable
{
}
