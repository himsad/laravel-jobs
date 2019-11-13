<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Repositories\JobRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Auth;
use Flash;
use Response;
use App\Models\Country;
use App\Models\Organisation;
use App\Models\Job;


class JobController extends AppBaseController
{
    /** @var  JobRepository */
    private $jobRepository;

    public function __construct(JobRepository $jobRepo)
    {
        $this->jobRepository = $jobRepo;
    }

    /**
     * Display a listing of the Job.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request, $job_type = null)
    {

        if($job_type == null){

            $jobs = $this->jobRepository->all();
        }else if($job_type == 'all_jobs'){

             //get all jobs that are active | and are relevant to my field
              //get all jobs that I created
              Flash::info('<span class="lead text-bold">All open job listings.</span>');
                $jobs = Job::where('status', 'active')->get();

        }else if($job_type == 'jobs_i_created'){

            
             //get all jobs that I created
             Flash::info('<span class="lead text-bold">Jobs I created.</span>');
             $jobs = Job::where('user_id', Auth::user()->id)->get();
            
        }

       

        return view('jobs.index')
            ->with('jobs', $jobs);
    }

 


    /**
     * Show the form for creating a new Job.
     *
     * @return Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created Job in storage.
     *
     * @param CreateJobRequest $request
     *
     * @return Response
     */
    public function store(CreateJobRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;



        $job = $this->jobRepository->create($input);

        Flash::success('Job created successfully.');

        return redirect(route('jobs.show',[$job->id]));
    }

    /**
     * Display the specified Job.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $job = $this->jobRepository->find($id);

        if (empty($job)) {
            Flash::error('Job not found');

            return redirect(route('jobs.index'));
        }

        return view('jobs.show')->with('job', $job);
    }

    /**
     * Show the form for editing the specified Job.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $job = $this->jobRepository->find($id);

        if (empty($job)) {
            Flash::error('Job not found');

            return redirect(route('jobs.index'));
        }

        $countries = Country::all(); 
        $organisations = Organisation::where('user_id', Auth::user()->id)->get();

        return view('jobs.edit')
        ->with('job', $job)
        ->with('organisations', $organisations)
        ->with('countries', $countries);
    }

    /**
     * Update the specified Job in storage.
     *
     * @param int $id
     * @param UpdateJobRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJobRequest $request)
    {
        $job = $this->jobRepository->find($id);

        if (empty($job)) {
            Flash::error('Job not found');

            return redirect(route('jobs.index'));
        }

        $job = $this->jobRepository->update($request->all(), $id);

        Flash::success('Job updated successfully.');

        return redirect(route('jobs.index'));
    }

    /**
     * Remove the specified Job from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $job = $this->jobRepository->find($id);

        if (empty($job)) {
            Flash::error('Job not found');

            return redirect(route('jobs.index'));
        }

        $this->jobRepository->delete($id);

        Flash::success('Job deleted successfully.');

        return redirect(route('jobs.index'));
    }
}
