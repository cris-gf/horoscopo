<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HoroscopoController extends Controller
{
    public function index() {
        return view('home');
    }

    public function store(Request $request) {
        $date = (object) $request->all();
        $month = $date->month;
        $day = $date->day;

        $horoscope = (object) [
            "Acuario"     => "Amorosas, cariñosas y muy sensibles suelen ser las personas nacidas bajo este signo. Les gustan las causas nobles y el dar sin esperar algo a cambio.",
            "Piscis"      => "La honestidad puede llegar a ser una de sus mejores cualidades. Manejan un carácter tranquilo, muy alivianado y consolador. Creen en los demás, aunque eso les pueda acarrear alguna dificultad al ser mal pagados.",
            "Aries"       => "Los nacidos bajo el signo de Aries suelen ser personas muy adaptables, que pueden llevarse bien con los demás por su creatividad y espontaneidad. Son detallistas y observadores.",
            "Tauro"       => "Este es un signo amoroso, al que le gusta ser romántico en sus mejores momentos. También es amante de la fuerza y de la resistencia, con una gran voluntad para hacer las cosas y encaminarlas hacia el camino correcto.",
            "Géminis"     => "La inteligencia es una de sus cualidades más conocidas y reconocidas, pero no sólo de mente, también a la hora de actuar. Suelen ser personas equilibradas, adaptables y muy entregadas al amor.",
            "Cáncer"      => "Son personas hogareñas, románticas y muy apasionadas. Les encanta compartir en familia todos los momentos, además de ser entregadas y dedicadas. Suelen ser personas admiradas y muy simpáticas, por lo que le suelen caer bien a todo el mundo.",
            "Leo"         => "Les gusta ser líderes, apoyándose en sus ideas y convicciones. Les encanta llamar la atención y tener la de los demás siempre sobre de ellos, aunque hay veces que les gana la soberbia.",
            "Virgo"       => "Son personas de carácter fuerte, con ideas firmes y claras, pues cuando quieren algo lo consiguen a como dé lugar. Tienen habilidad para convencer a los demás, para ser el centro de atracción y el alma de las fiestas o las reuniones.",
            "Libra"       => "El equilibrio siempre está presente en su vida, al ser amante de la estabilidad y la paridad en todos los sentidos. Es gente tranquila, a la que le gusta la armonía y hasta la soledad en algunos momentos, aunque también puede resultar todo lo contrario, con desorden y ruido.",
            "Escorpión"   => "De mente calculadora, con carácter fuerte, pero bondadoso en el fondo. Hábiles para negociar o alcanzar sus metas. Los obstáculos se convierten en retos que por lo regular superan sin miramientos. También son apasionados.",
            "Sagitario"   => "Suelen ser desordenados, atrabancados o hasta berrinchudos si las cosas no se dan como las pensaron. En contraparte, son capaces de enfocar toda su energía para solucionar dificultades.",
            "Capricornio" => "Prácticas, con una habilidad nata para encontrarle solución a las cosas, aunque parezcan casos perdidos. Son amantes del orden, la estabilidad y de que todo camine conforme lo han planeado.",
        ];

        switch ($month) {
            case "Enero":
                $sign = ($day >= "21" ? "Acuario" : "Capricornio");
                break;
            case "Febrero":
                $sign = ($day >= "19" ? "Piscis" : "Acuario");
                break;
            case "Marzo":
                $sign = ($day >= "21" ? "Aries" : "Piscis");
                break;
            case "Abril":
                $sign = ($day >= "21" ? "Tauro" : "Aries");
                break;
            case "Mayo":
                $sign = ($day >= "22" ? "Géminis" : "Tauro");
                break;
            case "Junio":
                $sign = ($day >= "22" ? "Cáncer" : "Géminis");
                break;
            case "Julio":
                $sign = ($day >= "23" ? "Leo" : "Cáncer");
                break;
            case "Agosto":
                $sign = ($day >= "24" ? "Virgo" : "Leo");
                break;
            case "Septiembre":
                $sign = ($day >= "24" ? "Libra" : "Virgo");
                break;
            case "Octubre":
                $sign = ($day >= "24" ? "Escorpión" : "Libra");
                break;
            case "Noviembre":
                $sign = ($day >= "23" ? "Sagitario" : "Escorpión");
                break;
            default:
                $sign = ($day >= "22" ? "Capricornio" : "Sagitario");
                break;
        }

        return view('zodiac',  compact('sign', 'date', 'horoscope'));
    }
}