<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreaterecepcionistaRequest;
use App\Http\Requests\UpdaterecepcionistaRequest;
use App\Repositories\recepcionistaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class recepcionistaController extends AppBaseController
{
    /** @var  recepcionistaRepository */
    private $recepcionistaRepository;

    public function __construct(recepcionistaRepository $recepcionistaRepo)
    {
        $this->recepcionistaRepository = $recepcionistaRepo;
    }

    /**
     * Display a listing of the recepcionista.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $recepcionistas = $this->recepcionistaRepository->all();

        return view('recepcionistas.index')
            ->with('recepcionistas', $recepcionistas);
    }

    /**
     * Show the form for creating a new recepcionista.
     *
     * @return Response
     */
    public function create()
    {
        return view('recepcionistas.create');
    }

    /**
     * Store a newly created recepcionista in storage.
     *
     * @param CreaterecepcionistaRequest $request
     *
     * @return Response
     */
    public function store(CreaterecepcionistaRequest $request)
    {
        $input = $request->all();

        $recepcionista = $this->recepcionistaRepository->create($input);

        Flash::success('Recepcionista saved successfully.');

        return redirect(route('recepcionistas.index'));
    }

    /**
     * Display the specified recepcionista.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $recepcionista = $this->recepcionistaRepository->find($id);

        if (empty($recepcionista)) {
            Flash::error('Recepcionista not found');

            return redirect(route('recepcionistas.index'));
        }

        return view('recepcionistas.show')->with('recepcionista', $recepcionista);
    }

    /**
     * Show the form for editing the specified recepcionista.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $recepcionista = $this->recepcionistaRepository->find($id);

        if (empty($recepcionista)) {
            Flash::error('Recepcionista not found');

            return redirect(route('recepcionistas.index'));
        }

        return view('recepcionistas.edit')->with('recepcionista', $recepcionista);
    }

    /**
     * Update the specified recepcionista in storage.
     *
     * @param int $id
     * @param UpdaterecepcionistaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterecepcionistaRequest $request)
    {
        $recepcionista = $this->recepcionistaRepository->find($id);

        if (empty($recepcionista)) {
            Flash::error('Recepcionista not found');

            return redirect(route('recepcionistas.index'));
        }

        $recepcionista = $this->recepcionistaRepository->update($request->all(), $id);

        Flash::success('Recepcionista updated successfully.');

        return redirect(route('recepcionistas.index'));
    }

    /**
     * Remove the specified recepcionista from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $recepcionista = $this->recepcionistaRepository->find($id);

        if (empty($recepcionista)) {
            Flash::error('Recepcionista not found');

            return redirect(route('recepcionistas.index'));
        }

        $this->recepcionistaRepository->delete($id);

        Flash::success('Recepcionista deleted successfully.');

        return redirect(route('recepcionistas.index'));
    }
}
