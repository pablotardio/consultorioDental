<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatehorarioRequest;
use App\Http\Requests\UpdatehorarioRequest;
use App\Repositories\horarioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class horarioController extends AppBaseController
{
    /** @var  horarioRepository */
    private $horarioRepository;

    public function __construct(horarioRepository $horarioRepo)
    {
        $this->horarioRepository = $horarioRepo;
    }

    /**
     * Display a listing of the horario.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $horarios = $this->horarioRepository->all();

        return view('horarios.index')
            ->with('horarios', $horarios);
    }

    /**
     * Show the form for creating a new horario.
     *
     * @return Response
     */
    public function create()
    {
        return view('horarios.create');
    }

    /**
     * Store a newly created horario in storage.
     *
     * @param CreatehorarioRequest $request
     *
     * @return Response
     */
    public function store(CreatehorarioRequest $request)
    {
        $input = $request->all();

        $horario = $this->horarioRepository->create($input);

        Flash::success('Horario saved successfully.');

        return redirect(route('horarios.index'));
    }

    /**
     * Display the specified horario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $horario = $this->horarioRepository->find($id);

        if (empty($horario)) {
            Flash::error('Horario not found');

            return redirect(route('horarios.index'));
        }

        return view('horarios.show')->with('horario', $horario);
    }

    /**
     * Show the form for editing the specified horario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $horario = $this->horarioRepository->find($id);

        if (empty($horario)) {
            Flash::error('Horario not found');

            return redirect(route('horarios.index'));
        }

        return view('horarios.edit')->with('horario', $horario);
    }

    /**
     * Update the specified horario in storage.
     *
     * @param int $id
     * @param UpdatehorarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatehorarioRequest $request)
    {
        $horario = $this->horarioRepository->find($id);

        if (empty($horario)) {
            Flash::error('Horario not found');

            return redirect(route('horarios.index'));
        }

        $horario = $this->horarioRepository->update($request->all(), $id);

        Flash::success('Horario updated successfully.');

        return redirect(route('horarios.index'));
    }

    /**
     * Remove the specified horario from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $horario = $this->horarioRepository->find($id);

        if (empty($horario)) {
            Flash::error('Horario not found');

            return redirect(route('horarios.index'));
        }

        $this->horarioRepository->delete($id);

        Flash::success('Horario deleted successfully.');

        return redirect(route('horarios.index'));
    }
}
