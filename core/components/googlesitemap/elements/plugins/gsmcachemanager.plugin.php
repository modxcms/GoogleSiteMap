<?php
/**
 * GSMCacheManager
 *
 * Clears the Google SiteMap cache partition.
 * Version 2+ of GoogleSiteMap uses code by Garry Nutting of the MODX Core Team to deliver sitemaps blazingly fast.
 *
 * @author YJ Tso <yj@modx.com>, Garry Nutting <garry@modx.com>
 *
 *
 * GSMCacheManager is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * GSMCacheManager is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * GSMCacheManager; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package googlesitemap
 */

// In case the wrong event is enabled
if ($modx->event->name !== 'OnSiteRefresh') return;
// Set cache options
// subfolder of core/cache/
$cachePartition = $modx->getoption('cachePartition', $scriptProperties, $modx->getOption('googlesitemap.cache_partition', null, 'googlesitemap'));
$options = array(
  xPDO::OPT_CACHE_KEY => $cachePartition,
);

// Clean cache
$modx->cacheManager->clean($options);
