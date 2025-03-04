<?php
/*
 * Fusio
 * A web-application to create dynamically RESTful APIs
 *
 * Copyright (C) 2015-2020 Christoph Kappestein <christoph.kappestein@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Fusio\Sdk\Tests;

use Fusio\Sdk;
use Fusio\Sdk\Client;
use PHPUnit\Framework\TestCase;

/**
 * ClientTest
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.gnu.org/licenses/agpl-3.0
 * @link    http://fusio-project.org
 */
class ClientTest extends TestCase
{
    public function testClient()
    {
        $client = new Client('https://my-fusio.app', 'test', 'test1234', ['foo', 'bar']);

        $this->assertInstanceOf(Sdk\Backend\Client::class, $client->backend());
        $this->assertInstanceOf(Sdk\Consumer\Client::class, $client->consumer());
    }
}
