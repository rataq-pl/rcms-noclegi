<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBuilderRequest;
use App\Http\Requests\UpdateBuilderRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\BuilderRepository;
use Illuminate\Http\Request;
use Flash;

class BuilderController extends AppBaseController
{
    /** @var BuilderRepository $builderRepository*/
    private $builderRepository;

    public function __construct(BuilderRepository $builderRepo)
    {
        $this->builderRepository = $builderRepo;
    }

    /**
     * Display a listing of the Builder.
     */
    public function index(Request $request)
    {
        $builders = $this->builderRepository->paginate(10);

        return view('builders.index')
            ->with('builders', $builders);
    }

    /**
     * Show the form for creating a new Builder.
     */
    public function create()
    {
        return view('builders.create');
    }

    /**
     * Store a newly created Builder in storage.
     */
    public function store(CreateBuilderRequest $request)
    {
        $input = $request->all();

        $builder = $this->builderRepository->create($input);

        Flash::success('Builder saved successfully.');

        return redirect(route('builders.index'));
    }

    /**
     * Display the specified Builder.
     */
    public function show($id)
    {
        $builder = $this->builderRepository->find($id);

        if (empty($builder)) {
            Flash::error('Builder not found');

            return redirect(route('builders.index'));
        }

        return view('builders.show')->with('builder', $builder);
    }

    /**
     * Show the form for editing the specified Builder.
     */
    public function edit($id)
    {
        $builder = $this->builderRepository->find($id);

        if (empty($builder)) {
            Flash::error('Builder not found');

            return redirect(route('builders.index'));
        }

        return view('builders.edit')->with('builder', $builder);
    }

    /**
     * Update the specified Builder in storage.
     */
    public function update($id, UpdateBuilderRequest $request)
    {
        $builder = $this->builderRepository->find($id);

        if (empty($builder)) {
            Flash::error('Builder not found');

            return redirect(route('builders.index'));
        }

        $builder = $this->builderRepository->update($request->all(), $id);

        Flash::success('Builder updated successfully.');

        return redirect(route('builders.index'));
    }

    /**
     * Remove the specified Builder from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $builder = $this->builderRepository->find($id);

        if (empty($builder)) {
            Flash::error('Builder not found');

            return redirect(route('builders.index'));
        }

        $this->builderRepository->delete($id);

        Flash::success('Builder deleted successfully.');

        return redirect(route('builders.index'));
    }
}
