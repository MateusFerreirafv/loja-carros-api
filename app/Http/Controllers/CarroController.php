namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    // Listar todos os carros
    public function index()
    {
        return Carro::all();
    }


    // Cadastrar um novo carro
    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required|string',
            'modelo' => 'required|string',
            'ano' => 'required|integer',
            'preco' => 'required|numeric',
        ]);

        $carro = Carro::create($request->all());
        return response()->json($carro, 201);
    }
}
