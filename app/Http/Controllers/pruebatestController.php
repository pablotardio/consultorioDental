<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepruebatestRequest;
use App\Http\Requests\UpdatepruebatestRequest;
use App\Repositories\pruebatestRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class pruebatestController extends AppBaseController
{
    /** @var  pruebatestRepository */
    private $pruebatestRepository;

    public function __construct(pruebatestRepository $pruebatestRepo)
    {
        $this->pruebatestRepository = $pruebatestRepo;
    }

    /**
     * Display a listing of the pruebatest.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pruebatests = $this->pruebatestRepository->all();

        return view('pruebatests.index')
            ->with('pruebatests', $pruebatests);
    }

    /**
     * Show the form for creating a new pruebatest.
     *
     * @return Response
     */
    public function create()
    {
        return view('pruebatests.create');
    }

    /**
     * Store a newly created pruebatest in storage.
     *
     * @param CreatepruebatestRequest $request
     *
     * @return Response
     */
    public function store(CreatepruebatestRequest $request)
    {
        $input = $request->all();

        $pruebatest = $this->pruebatestRepository->create($input);

        Flash::success('Pruebatest saved successfully.');

        return redirect(route('pruebatests.index'));
    }

    /**
     * Display the specified pruebatest.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pruebatest = $this->pruebatestRepository->find($id);

        if (empty($pruebatest)) {
            Flash::error('Pruebatest not found');

            return redirect(route('pruebatests.index'));
        }

        return view('pruebatests.show')->with('pruebatest', $pruebatest);
    }

    /**
     * Show the form for editing the specified pruebatest.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pruebatest = $this->pruebatestRepository->find($id);

        if (empty($pruebatest)) {
            Flash::error('Pruebatest not found');

            return redirect(route('pruebatests.index'));
        }

        return view('pruebatests.edit')->with('pruebatest', $pruebatest);
    }

    /**
     * Update the specified pruebatest in storage.
     *
     * @param int $id
     * @param UpdatepruebatestRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepruebatestRequest $request)
    {
        $pruebatest = $this->pruebatestRepository->find($id);

        if (empty($pruebatest)) {
            Flash::error('Pruebatest not found');

            return redirect(route('pruebatests.index'));
        }

        $pruebatest = $this->pruebatestRepository->update($request->all(), $id);

        Flash::success('Pruebatest updated successfully.');

        return redirect(route('pruebatests.index'));
    }

    /**
     * Remove the specified pruebatest from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pruebatest = $this->pruebatestRepository->find($id);

        if (empty($pruebatest)) {
            Flash::error('Pruebatest not found');

            return redirect(route('pruebatests.index'));
        }

        $this->pruebatestRepository->delete($id);

        Flash::success('Pruebatest deleted successfully.');

        return redirect(route('pruebatests.index'));
    }
}
