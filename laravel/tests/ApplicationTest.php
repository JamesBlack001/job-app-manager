<?php

class ApplicationTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testApplicationResponse()
	{
		$response = $this->call('GET', route('jobs_path'));

		$this->assertEquals(200, $response->getStatusCode());
	}

}
