<?php
/**
 * Akeeba Engine
 *
 * @package   akeebaengine
 * @copyright Copyright (c)2006-2024 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

namespace Akeeba\S3\Exception;

// Protection against direct access
defined('AKEEBAENGINE') || die();

use Throwable;

/**
 * Invalid Amazon S3 access key
 */
class InvalidAccessKey extends ConfigurationError
{
	public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
	{
		if (empty($message))
		{
			$message = 'The Amazon S3 Access Key provided is invalid';
		}

		parent::__construct($message, $code, $previous);
	}

}
