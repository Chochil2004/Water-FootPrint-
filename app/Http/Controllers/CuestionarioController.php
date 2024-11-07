namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuestionarioController extends Controller
{
    //Funciones get
    public function usodirecto() {
        return view('pregunta.usodirecto');
    }

    public function alimentos() {
        return view('pregunta.alimentos');
    }

    public function productosybienes() {
        return view('pregunta.productosybienes');
    }

    public function transporte() {
        return view('pregunta.transporte');
    }

    public function electrodomesticos() {
        return view('pregunta.electrodomesticos');
    }

    public function hogar() {
        return view('pregunta.hogar');
    }

    public function energia() {
        return view('pregunta.energia');
    }

    public function jardineria() {
        return view('pregunta.jardineria');
    }

    public function papel() {
        return view('pregunta.papel');
    }

    public function transporte() {
        return view('pregunta.transporte');
    }


    //Funciones submit
    public function submitUsoDirecto(Request $request) {
        session()->push('respuestas', $request->only('pregunta1', 'pregunta2'));
        return redirect()->route('usodirecto');
    }

    public function submitAlimentos(Request $request) {
        session()->push('respuestas', $request->only('pregunta3', 'pregunta4'));
        return redirect()->route('alimentos');
    }

    public function submitProductosyBienes(Request $request) {
        session()->push('respuestas', $request->only('pregunta5', 'pregunta6'));
        return redirect()->route('productosybienes');
    }

    public function submitTransporte(Request $request) {
        session()->push('respuestas', $request->only('pregunta7', ));
        return redirect()->route('transporte');
    }

    public function submitElectrodomesticos(Request $request) {
        session()->push('respuestas', $request->only('pregunta8', 'pregunta9', 'pregunta10'));
        return redirect()->route('electrodomesticos');
    }

    public function submitHogar(Request $request) {
        session()->push('respuestas', $request->only('pregunta11', 'pregunta12'));
        return redirect()->route('hogar');
    }

    public function submitEnergia(Request $request) {
        session()->push('respuestas', $request->only('pregunta13', 'pregunta14'));
        return redirect()->route('energia');
    }

    public function submitJardineria(Request $request) {
        session()->push('respuestas', $request->only('pregunta15', 'pregunta16'));
        return redirect()->route('jardineria');
    }

    public function submitPapel(Request $request) {
        session()->push('respuestas', $request->only('pregunta17', 'pregunta18'));
        return redirect()->route('papel');
    }

    public function submitViajesTransporte(Request $request) {
        session()->push('respuestas', $request->only('pregunta19', 'pregunta20'));
        return redirect()->route('cuestionario.resultado');
    }

    //Resultado final
    public function resultado(Request $request) {
        $respuestas = session('respuestas');
        $puntuacion = 0;

        foreach ($respuestas as $respuesta) {
            $puntuacion += array_sum($respuesta);
        }

        return view('pregunta.resultado', ['puntuacion' => $puntuacion]);
    }
}
