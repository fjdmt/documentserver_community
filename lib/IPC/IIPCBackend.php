<?php declare(strict_types=1);
/**
 * @copyright Copyright (c) 2019 Robin Appelman <robin@icewind.nl>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\DocumentServer\IPC;

interface IIPCBackend {
	/**
	 * Initialize an ipc channel
	 *
	 * @param string $channel
	 */
	public function initChannel(string $channel);

	/**
	 * Cleanup an ipc channel
	 *
	 * @param string $channel
	 */
	public function cleanupChannel(string $channel);

	/**
	 * Push a new message in the channel
	 *
	 * @param string $channel
	 * @param string $message
	 */
	public function pushMessage(string $channel, string $message);

	/**
	 * Get a message from the channel if one is available
	 *
	 * @param string $channel
	 * @param int $timeout
	 * @return string|null
	 */
	public function popMessage(string $channel, int $timeout): ?string;
}
