<?php

namespace HM\Cavalcade\Plugin\Cleanup;

/**
 * Remove jobs for deleted sites.
 *
 * @param int $blog_id The id of the deleted blog.
 */
function delete_blog( $blog_id ) {
	global $wpdb;

	$wpdb->delete( 'cavalcade_jobs', [ 'site' => $blog_id ] );
}
