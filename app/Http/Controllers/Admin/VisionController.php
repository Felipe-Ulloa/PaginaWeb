<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\VisionStoreRequest;
use App\Http\Requests\VisionUpdateRequest;
use App\Http\Controllers\Controller;
use App\Vision;
class VisionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visions = Vision::orderBy('id', 'DESC')->paginate();
        return view('admin.visions.index', compact('visions'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.visions.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VisionStoreRequest $request)
    {
        $vision = Vision::create($request->all());
        return redirect()->route('visions.index', $vision->id)->with('info', 'Etiqueta creada con éxito');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vision = Vision::find($id);
        return view('admin.visions.show', compact('vision'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vision = Vision::find($id);
        return view('admin.visions.edit', compact('vision'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VisionUpdateRequest $request, $id)
    {
        $vision = Vision::find($id);
        $vision->fill($request->all())->save();
        return redirect()->route('visions.index', $vision->id)->with('info', 'Etiqueta actualizada con éxito');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vision = Vision::find($id)->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}