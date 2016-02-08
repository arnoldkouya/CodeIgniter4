<?php namespace CodeIgniter\Config;

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2016, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	  CodeIgniter
 * @author	  CodeIgniter Dev Team
 * @copyright Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	  http://opensource.org/licenses/MIT	MIT License
 * @link	  http://codeigniter.com
 * @since	  Version 4.0.0
 * @filesource
 */

/**
 * Database configuration class.
 *
 * A base class for application-level database configuration. Allows the application
 * to set a list of available connection configurations and the active/default connection
 * configuration to be used when no connection configuration is specified.
 */
class Database extends \CodeIgniter\Config\BaseConfig
{
	/** @var string The name of the active connection. */
	public $activeConnection;

	/** @var array Connection names and the classes those names reference. */
	public $availableConnections = [];

	/**
	 * Allows a Database configuration to be built from a parameter array at run-time.
	 *
	 * @todo consider using something like the \CodeIgniter\Config\Database\Connection
	 * constructor...
	 *
	 * @param array $params Property name/value pairs to set in the database config.
	 */
	public function __construct($params = [])
	{
		parent::__construct();

		// Allow $params to override environment variables.
		if (isset($params['availableConnections']))
		{
			$this->availableConnections = $params['availableConnections'];
		}
		if (isset($params['activeConnection']))
		{
			$this->activeConnection = $params['activeConnection'];
		}
	}
}
