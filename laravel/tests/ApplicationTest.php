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
	public function testResponseOk()
	{
		$response = $this->call('GET', route('jobs_path'));

		$this->assertResponseOk();//checks status code is 200
	}
	public function testRoutesStatus()
	{
		$response = $this->call('GET', route('jobs_path'));

		$this->assertResponseOk();//checks status code is 200

		$response = $this->call('GET', route('job_path'));

		$this->assertResponseOk();//checks status code is 200

		$response = $this->call('GET', route('job_edit'));

		$this->assertResponseOk();//checks status code is 200
	}
	public function testRouteJobUpdate()
	{
		$response = $this->call('PUT', route('job_update'));

		$this->assertEquals(500, $response->getStatusCode());//checks status code is 200
	}

}
