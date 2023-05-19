namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{
    public function addNewBarang(Request $request)
    {
        $data = $request->only(['namabarang', 'harga', 'stock']);

        Stock::create($data);

        return redirect('index');
    }
}
