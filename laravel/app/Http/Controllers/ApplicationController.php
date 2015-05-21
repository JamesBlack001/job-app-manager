<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateJobRequest;

use Illuminate\Http\Request;
use App\Jobs;

class ApplicationController extends Controller {


	private $job;

	public function __construct(Jobs $job)
	{
		$this->job=$job;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$jobs= $this->job->get();//Jobs::get();

		return view('jobs.index',compact('jobs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('jobs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateJobRequest $request, Jobs $job)
	{
		
		$input = $request->all();
		$input['slug']='title'.$request->get('id');
		$job->create($input);

		return redirect()->route('jobs_path');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Jobs $job)
	{

		//$job = Jobs::find($id);

		return view('jobs.show',compact('job'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Jobs $job)
	{
		return view('jobs.edit', compact('job'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(CreateJobRequest $request, Jobs $job)
	{

		$job->fill($request->input())->save();
		return redirect('jobs');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Jobs $job)
	{
		$job->delete();

		return redirect('jobs');
	}

}
