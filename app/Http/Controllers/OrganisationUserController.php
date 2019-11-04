<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrganisationUserRequest;
use App\Http\Requests\UpdateOrganisationUserRequest;
use App\Repositories\OrganisationUserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class OrganisationUserController extends AppBaseController
{
    /** @var  OrganisationUserRepository */
    private $organisationUserRepository;

    public function __construct(OrganisationUserRepository $organisationUserRepo)
    {
        $this->organisationUserRepository = $organisationUserRepo;
    }

    /**
     * Display a listing of the OrganisationUser.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $organisationUsers = $this->organisationUserRepository->all();

        return view('organisation_users.index')
            ->with('organisationUsers', $organisationUsers);
    }

    /**
     * Show the form for creating a new OrganisationUser.
     *
     * @return Response
     */
    public function create()
    {
        return view('organisation_users.create');
    }

    /**
     * Store a newly created OrganisationUser in storage.
     *
     * @param CreateOrganisationUserRequest $request
     *
     * @return Response
     */
    public function store(CreateOrganisationUserRequest $request)
    {
        $input = $request->all();

        $organisationUser = $this->organisationUserRepository->create($input);

        Flash::success('Organisation User saved successfully.');

        return redirect(route('organisationUsers.index'));
    }

    /**
     * Display the specified OrganisationUser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $organisationUser = $this->organisationUserRepository->find($id);

        if (empty($organisationUser)) {
            Flash::error('Organisation User not found');

            return redirect(route('organisationUsers.index'));
        }

        return view('organisation_users.show')->with('organisationUser', $organisationUser);
    }

    /**
     * Show the form for editing the specified OrganisationUser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $organisationUser = $this->organisationUserRepository->find($id);

        if (empty($organisationUser)) {
            Flash::error('Organisation User not found');

            return redirect(route('organisationUsers.index'));
        }

        return view('organisation_users.edit')->with('organisationUser', $organisationUser);
    }

    /**
     * Update the specified OrganisationUser in storage.
     *
     * @param int $id
     * @param UpdateOrganisationUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrganisationUserRequest $request)
    {
        $organisationUser = $this->organisationUserRepository->find($id);

        if (empty($organisationUser)) {
            Flash::error('Organisation User not found');

            return redirect(route('organisationUsers.index'));
        }

        $organisationUser = $this->organisationUserRepository->update($request->all(), $id);

        Flash::success('Organisation User updated successfully.');

        return redirect(route('organisationUsers.index'));
    }

    /**
     * Remove the specified OrganisationUser from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $organisationUser = $this->organisationUserRepository->find($id);

        if (empty($organisationUser)) {
            Flash::error('Organisation User not found');

            return redirect(route('organisationUsers.index'));
        }

        $this->organisationUserRepository->delete($id);

        Flash::success('Organisation User deleted successfully.');

        return redirect(route('organisationUsers.index'));
    }
}
