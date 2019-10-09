<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateodontologoRequest;
use App\Http\Requests\UpdateodontologoRequest;
use App\Repositories\odontologoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\especialidad;
use Flash;
use Response;


class odontologoController extends AppBaseController
{
    /** @var  odontologoRepository */
    private $odontologoRepository;

    public function __construct(odontologoRepository $odontologoRepo)
    {
        $this->odontologoRepository = $odontologoRepo;
    }

    /**
     * Display a listing of the odontologo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $odontologos = $this->odontologoRepository->all();

        return view('odontologos.index')
            ->with('odontologos', $odontologos);
    }

    /**
     * Show the form for creating a new odontologo.
     *
     * @return Response
     */
    public function create()
    {
        
        $especialidades = especialidad::orderBy('id')->get();
        return view('odontologos.create',compact('especialidades'));
    }

    /**
     * Store a newly created odontologo in storage.
     *
     * @param CreateodontologoRequest $request
     *
     * @return Response
     */
    public function store(CreateodontologoRequest $request)
    {
        $input = $request->all();

        $odontologo = $this->odontologoRepository->create($input);

        Flash::success('Odontologo saved successfully.');

        return redirect(route('odontologos.index'));
    }

    /**
     * Display the specified odontologo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $odontologo = $this->odontologoRepository->find($id);

        if (empty($odontologo)) {
            Flash::error('Odontologo not found');

            return redirect(route('odontologos.index'));
        }

        return view('odontologos.show')->with('odontologo', $odontologo);
    }

    /**
     * Show the form for editing the specified odontologo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $odontologo = $this->odontologoRepository->find($id);

        if (empty($odontologo)) {
            Flash::error('Odontologo not found');

            return redirect(route('odontologos.index'));
        }

        return view('odontologos.edit')->with('odontologo', $odontologo);
    }

    /**
     * Update the specified odontologo in storage.
     *
     * @param int $id
     * @param UpdateodontologoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateodontologoRequest $request)
    {
        $odontologo = $this->odontologoRepository->find($id);

        if (empty($odontologo)) {
            Flash::error('Odontologo not found');

            return redirect(route('odontologos.index'));
        }

        $odontologo = $this->odontologoRepository->update($request->all(), $id);

        Flash::success('Odontologo updated successfully.');

        return redirect(route('odontologos.index'));
    }

    /**
     * Remove the specified odontologo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $odontologo = $this->odontologoRepository->find($id);

        if (empty($odontologo)) {
            Flash::error('Odontologo not found');

            return redirect(route('odontologos.index'));
        }

        $this->odontologoRepository->delete($id);

        Flash::success('Odontologo deleted successfully.');

        return redirect(route('odontologos.index'));
    }
}
