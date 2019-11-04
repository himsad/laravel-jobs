<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInvitaionRequest;
use App\Http\Requests\UpdateInvitaionRequest;
use App\Repositories\InvitaionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class InvitaionController extends AppBaseController
{
    /** @var  InvitaionRepository */
    private $invitaionRepository;

    public function __construct(InvitaionRepository $invitaionRepo)
    {
        $this->invitaionRepository = $invitaionRepo;
    }

    /**
     * Display a listing of the Invitaion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $invitaions = $this->invitaionRepository->all();

        return view('invitaions.index')
            ->with('invitaions', $invitaions);
    }

    /**
     * Show the form for creating a new Invitaion.
     *
     * @return Response
     */
    public function create()
    {
        return view('invitaions.create');
    }

    /**
     * Store a newly created Invitaion in storage.
     *
     * @param CreateInvitaionRequest $request
     *
     * @return Response
     */
    public function store(CreateInvitaionRequest $request)
    {
        $input = $request->all();

        $invitaion = $this->invitaionRepository->create($input);

        Flash::success('Invitaion saved successfully.');

        return redirect(route('invitaions.index'));
    }

    /**
     * Display the specified Invitaion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $invitaion = $this->invitaionRepository->find($id);

        if (empty($invitaion)) {
            Flash::error('Invitaion not found');

            return redirect(route('invitaions.index'));
        }

        return view('invitaions.show')->with('invitaion', $invitaion);
    }

    /**
     * Show the form for editing the specified Invitaion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $invitaion = $this->invitaionRepository->find($id);

        if (empty($invitaion)) {
            Flash::error('Invitaion not found');

            return redirect(route('invitaions.index'));
        }

        return view('invitaions.edit')->with('invitaion', $invitaion);
    }

    /**
     * Update the specified Invitaion in storage.
     *
     * @param int $id
     * @param UpdateInvitaionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInvitaionRequest $request)
    {
        $invitaion = $this->invitaionRepository->find($id);

        if (empty($invitaion)) {
            Flash::error('Invitaion not found');

            return redirect(route('invitaions.index'));
        }

        $invitaion = $this->invitaionRepository->update($request->all(), $id);

        Flash::success('Invitaion updated successfully.');

        return redirect(route('invitaions.index'));
    }

    /**
     * Remove the specified Invitaion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $invitaion = $this->invitaionRepository->find($id);

        if (empty($invitaion)) {
            Flash::error('Invitaion not found');

            return redirect(route('invitaions.index'));
        }

        $this->invitaionRepository->delete($id);

        Flash::success('Invitaion deleted successfully.');

        return redirect(route('invitaions.index'));
    }
}
