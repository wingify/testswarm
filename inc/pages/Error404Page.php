<?php
/**
 * Error page handler for HTTP 404.
 *
 * @author Timo Tijhof
 * @since 1.0.0
 * @package TestSwarm
 */
class Error404Page extends Page {

	protected function initContent() {
		self::httpStatusHeader( 404 );

		$this->setTitle( Page::getHttpStatusMsg( 404 ) );
		$this->setRobots( "noindex,nofollow" );

		return '<div class="alert alert-error">The page you requested could not be found.</div>';
	}
}

