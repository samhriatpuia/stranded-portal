<?php

namespace App\Http\Controllers;

use App\State;
use App\Exports\APExport;
use App\Exports\GoaExport;
use App\Exports\TWBExport;
use App\Exports\TGoaExport;
use App\Exports\TJnKExport;
use App\Exports\AssamExport;
use App\Exports\BiharExport;
use App\Exports\DelhiExport;
use App\Exports\MamitExport;
use App\Exports\SiahaExport;
use Illuminate\Http\Request;
use App\Exports\AizawlExport;
use App\Exports\KeralaExport;
use App\Exports\LadakhExport;
use App\Exports\OrissaExport;
use App\Exports\PunjabExport;
use App\Exports\SikkimExport;
use App\Exports\TAssamExport;
use App\Exports\TBiharExport;
use App\Exports\TDadarExport;
use App\Exports\TDamanExport;
use App\Exports\TDelhiExport;
use App\Exports\TMadyaExport;
use App\Exports\TMamitExport;
use App\Exports\TSiahaExport;
use App\Exports\TTamilExport;
use App\Exports\TUttarExport;
use App\Exports\GujaratExport;
use App\Exports\HaryanaExport;
use App\Exports\KolasibExport;
use App\Exports\LungleiExport;
use App\Exports\ManipurExport;
use App\Exports\SaitualExport;
use App\Exports\TAizawlExport;
use App\Exports\TAndhraExport;
use App\Exports\TKeralaExport;
use App\Exports\TLadakhExport;
use App\Exports\TOrissaExport;
use App\Exports\TOthersExport;
use App\Exports\TPunjabExport;
use App\Exports\TripuraExport;
use App\Exports\TSikkimExport;
use App\Exports\ChamphaiExport;
use App\Exports\KhawzawlExport;
use App\Exports\NagalandExport;
use App\Exports\SerchhipExport;
use App\Exports\StrandedExport;
use App\Exports\TAndamanExport;
use App\Exports\TanpuinaExport;
use App\Exports\TelaganaExport;
use App\Exports\TGujaratExport;
use App\Exports\THaryanaExport;
use App\Exports\TKolasibExport;
use App\Exports\TLungleiExport;
use App\Exports\TManipurExport;
use App\Exports\TSaitualExport;
use App\Exports\TTripuraExport;
use App\Exports\HnahthialExport;
use App\Exports\JharkhandExport;
use App\Exports\KarnatakaExport;
use App\Exports\LawngtlaiExport;
use App\Exports\MeghalayaExport;
use App\Exports\RajasthanExport;
use App\Exports\TamilNaduExport;
use App\Exports\TChamphaiExport;
use App\Exports\THimachalExport;
use App\Exports\TKhawzawlExport;
use App\Exports\TNagalandExport;
use App\Exports\TSerchhipExport;
use App\Exports\TTelaganaExport;
use App\Exports\ChandigarhExport;
use App\Exports\LakshadeepExport;
use App\Exports\TArunachalExport;
use App\Exports\THnahthialExport;
use App\Exports\TJharkhandExport;
use App\Exports\TKarnatakaExport;
use App\Exports\TMeghalayaExport;
use App\Exports\TRajasthanExport;
use App\Exports\WestBengalExport;
use App\Exports\DamanAndDiuExport;
use App\Exports\MaharashtraExport;
use App\Exports\PondicherryExport;
use App\Exports\TChandigarhExport;
use App\Exports\TLakshadeepExport;
use App\Exports\UttaranchalExport;
use App\Exports\ChhattisgarhExport;
use App\Exports\IndiaRamPawnExport;
use App\Exports\MadyaPradeshExport;
use App\Exports\TMaharashtraExport;
use App\Exports\TPondicherryExport;
use App\Exports\TUttaranchalExport;
use App\Exports\UttarPradeshExport;
use App\Exports\TChhattisgarhExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\HimachalPradeshExport;
use App\Exports\JammuAndKashmirExport;
use App\Exports\ArunachalPradeshExport;
use App\Exports\DadarAndNagarHaveliExport;
use App\Exports\AndamanAndNicobarIslandsExport;

class DownloadController extends Controller
{
    public function index()
    {
        $states=State::All();
        return view('download/index',compact('states'));
    }

    public function exportAll()
    {
        return Excel::download(new StrandedExport, 'All_India.xlsx');
    }

    public function exportAssam()
    {
        return Excel::download(new AssamExport, 'Assam.xlsx');
    }
    public function exportAndhraPradesh()
    {
        return Excel::download(new APExport, 'AndhraPradesh.xlsx');
    }

    public function exportArunachalPradesh()
    {
        return Excel::download(new ArunachalPradeshExport, 'ArunachalPradesh.xlsx');
    }

    public function exportBihar()
    {
        return Excel::download(new BiharExport, 'Bihar.xlsx');
    }

    public function exportChhattisgarh()
    {
        return Excel::download(new ChhattisgarhExport, 'Chhattisgarh.xlsx');
    }

    public function exportGoa()
    {
        return Excel::download(new GoaExport, 'Goa.xlsx');
    }

    public function exportGujarat()
    {
        return Excel::download(new GujaratExport, 'Gujarat.xlsx');
    }

    public function exportHaryana()
    {
        return Excel::download(new HaryanaExport, 'Haryana.xlsx');
    }
    public function exportHimachalPradesh()
    {
        return Excel::download(new HimachalPradeshExport, 'HimachalPradesh.xlsx');
    }


    public function exportJK()
    {
        return Excel::download(new JammuAndKashmirExport, 'JnK.xlsx');
    }
    public function exportJharkhand()
    {
        return Excel::download(new JharkhandExport, 'Jharkhand.xlsx');
    }

    public function exportKarnataka()
    {
        return Excel::download(new KarnatakaExport, 'Karnataka.xlsx');
    }

    public function exportKerala()
    {
        return Excel::download(new KeralaExport, 'Kerala.xlsx');
    }

    public function exportMadyaPradesh()
    {
        return Excel::download(new MadyaPradeshExport, 'MadyaPradesh.xlsx');
    }

    public function exportMaharashtra()
    {
        return Excel::download(new MaharashtraExport, 'Maharashtra.xlsx');
    }

    public function exportManipur()
    {
        return Excel::download(new ManipurExport, 'Manipur.xlsx');
    }
    public function exportMeghalaya()
    {
        return Excel::download(new MeghalayaExport, 'Meghalaya.xlsx');
    }

    public function exportNagaland()
    {
        return Excel::download(new NagalandExport, 'Nagaland.xlsx');
    }

    public function exportOrissa()
    {
        return Excel::download(new OrissaExport, 'Orissa.xlsx');
    }

    public function exportPunjab()
    {
        return Excel::download(new PunjabExport, 'Punjab.xlsx');
    }

    public function exportRajasthan()
    {
        return Excel::download(new RajasthanExport, 'Rajasthan.xlsx');
    }
    public function exportSikkim()
    {
        return Excel::download(new SikkimExport, 'Sikkim.xlsx');
    }


    public function exportTamilNadu()
    {
        return Excel::download(new TamilNaduExport, 'TamilNadu.xlsx');
    }

    public function exportTelagana()
    {
        return Excel::download(new TelaganaExport, 'Telagana.xlsx');
    }

    public function exportTripura()
    {
        return Excel::download(new TripuraExport, 'Tripura.xlsx');
    }

    public function exportUttaranchal()
    {
        return Excel::download(new UttaranchalExport, 'Uttaranchal.xlsx');
    }

    public function exportUttarPradesh()
    {
        return Excel::download(new UttarPradeshExport, 'UttarPradesh.xlsx');
    }

    public function exportWestBengal()
    {
        return Excel::download(new WestBengalExport, 'West Bengal.xlsx');
    }

    public function exportAndamanAndNicobarIslands()
    {
        return Excel::download(new AndamanAndNicobarIslandsExport, 'Andaman And Nicobar Islands.xlsx');
    }
    public function exportChandigarh()
    {
        return Excel::download(new ChandigarhExport, 'Chandigarh.xlsx');
    }

    public function exportDadarAndNagarHaveli()
    {
        return Excel::download(new DadarAndNagarHaveliExport, 'Dadar and Nagar Haveli.xlsx');
    }

    public function exportDamanAndDiu()
    {
        return Excel::download(new DamanAndDiuExport, 'Daman and Diu.xlsx');
    }

    public function exportDelhi()
    {
        return Excel::download(new DelhiExport, 'Delhi.xlsx');
    }

    public function exportLakshadeep()
    {
        return Excel::download(new LakshadeepExport, 'Lakshadweep.xlsx');
    }

    public function exportPondicherry()
    {
        return Excel::download(new PondicherryExport, 'Pondicherry.xlsx');
    }

    public function exportLadakh()
    {
        return Excel::download(new LadakhExport, 'Ladakh.xlsx');
    }
    

    public function exportIndiaRamPawn()
    {
        return Excel::download(new IndiaRamPawnExport, 'India ram pawn.xlsx');
    }

    public function exportAizawl()
    {
        return Excel::download(new AizawlExport, 'Aizawl.xlsx');
    }
    public function exportLunglei()
    {
        return Excel::download(new LungleiExport, 'Lunglei.xlsx');
    }


    public function exportMamit()
    {
        return Excel::download(new MamitExport, 'Mamit.xlsx');
    }

    public function exportKolasib()
    {
        return Excel::download(new KolasibExport, 'Kolasib.xlsx');
    }
    public function exportChamphai()
    {
        return Excel::download(new ChamphaiExport, 'Champhai.xlsx');
    }

    public function exportSerchhip()
    {
        return Excel::download(new SerchhipExport, 'Serchhip.xlsx');
    }

    public function exportSiaha()
    {
        return Excel::download(new SiahaExport, 'Siaha.xlsx');
    }

    public function exportLawngtlai()
    {
        return Excel::download(new LawngtlaiExport, 'Lawngtlai.xlsx');
    }

    public function exportSaitual()
    {
        return Excel::download(new SaitualExport, 'Saitual.xlsx');
    }


    public function exportHnahthial()
    {
        return Excel::download(new HnahthialExport, 'Hnahthial.xlsx');
    }

    public function exportKhawzawl()
    {
        return Excel::download(new KhawzawlExport, 'Khawzawl.xlsx');
    }

    public function exportTanpuina()
    {
        return Excel::download(new TanpuinaExport, 'Tanpuina.xlsx');
    }


    public function tanpuinaPage()
    {
        return view('stranded/indexTanpuina');
    }

    public function tanpuinaAndra()
    {
        return Excel::download(new TAndhraExport, 'Tanpuina Andra.xlsx');
    }

    public function tanpuinaArunachal()
    {
        return Excel::download(new TArunachalExport, 'Tanpuina Arunachal.xlsx');
    }

    public function tanpuinaAssam()
    {
        return Excel::download(new TAssamExport, 'Tanpuina Assam.xlsx');
    }

    public function tanpuinaBihar()
    {
        return Excel::download(new TBiharExport, 'Tanpuina Bihar.xlsx');
    }

    public function tanpuinaChhattisgarh()
    {
        return Excel::download(new TChhattisgarhExport, 'Tanpuina Chhattisgarh.xlsx');
    }

    public function tanpuinaGoa()
    {
        return Excel::download(new TGoaExport, 'Tanpuina Goa.xlsx');
    }

    public function tanpuinaGujarat()
    {
        return Excel::download(new TGujaratExport, 'Tanpuina Gujarat.xlsx');
    }

    public function tanpuinaHaryana()
    {
        return Excel::download(new THaryanaExport, 'Tanpuina Haryana.xlsx');
    }

    public function tanpuinaHimachal()
    {
        return Excel::download(new THimachalExport, 'Tanpuina Himachal Haryana.xlsx');
    }

    public function tanpuinaJnK()
    {
        return Excel::download(new TJnKExport, 'Tanpuina J and K.xlsx');
    }


    public function tanpuinaJharkhand()
    {
        return Excel::download(new TJharkhandExport, 'Tanpuina Jharkhand.xlsx');
    }

    public function tanpuinaKerala()
    {
        return Excel::download(new TKeralaExport, 'Tanpuina Kerala.xlsx');
    }

    public function tanpuinaKarnataka()
    {
        return Excel::download(new TKarnatakaExport, 'Tanpuina Karnataka.xlsx');
    }

    public function tanpuinaMadya()
    {
        return Excel::download(new TMadyaExport, 'Tanpuina Madya Pradesh.xlsx');
    }

    public function tanpuinaMaharashtra()
    {
        return Excel::download(new TMaharashtraExport, 'Tanpuina Maharashtra.xlsx');
    }

    public function tanpuinaManipur()
    {
        return Excel::download(new TManipurExport, 'Tanpuina Manipur.xlsx');
    }

    public function tanpuinaMeghalaya()
    {
        return Excel::download(new TMeghalayaExport, 'Tanpuina Meghalaya.xlsx');
    }

    public function tanpuinaNagaland()
    {
        return Excel::download(new TNagalandExport, 'Tanpuina Nagaland.xlsx');
    }

    public function tanpuinaOrissa()
    {
        return Excel::download(new TOrissaExport, 'Tanpuina Orissa.xlsx');
    }

    public function tanpuinaPunjab()
    {
        return Excel::download(new TPunjabExport, 'Tanpuina Punjab.xlsx');
    }

    public function tanpuinaRajasthan()
    {
        return Excel::download(new TRajasthanExport, 'Tanpuina Rajasthan.xlsx');
    }

    public function tanpuinaSikkim()
    {
        return Excel::download(new TSikkimExport, 'Tanpuina Sikkim.xlsx');
    }

    public function tanpuinaTamil()
    {
        return Excel::download(new TTamilExport, 'Tanpuina Tamil Nadu.xlsx');
    }

    public function tanpuinaTelagana()
    {
        return Excel::download(new TTelaganaExport, 'Tanpuina Telagana.xlsx');
    }

    public function tanpuinaTripura()
    {
        return Excel::download(new TTripuraExport, 'Tanpuina Tripura.xlsx');
    }
    public function tanpuinaUttaranchal()
    {
        return Excel::download(new TUttaranchalExport, 'Tanpuina Uttaranchal.xlsx');
    }

    public function tanpuinaUttar()
    {
        return Excel::download(new TUttarExport, 'Tanpuina Uttar Pradesh.xlsx');
    }

    public function tanpuinaWB()
    {
        return Excel::download(new TWBExport, 'Tanpuina West Bengal.xlsx');
    }

    public function tanpuinaAndaman()
    {
        return Excel::download(new TAndamanExport, 'Tanpuina Andaman and Nicobar Islands.xlsx');
    }

    public function tanpuinaChandigarh()
    {
        return Excel::download(new TChandigarhExport, 'Tanpuina Chandigarh.xlsx');
    }

    public function tanpuinaDadar()
    {
        return Excel::download(new TDadarExport, 'Tanpuina Dadar and Nagar Haveli.xlsx');
    }

    public function tanpuinaDaman()
    {
        return Excel::download(new TDamanExport, 'Tanpuina Daman and Diu.xlsx');
    }

    public function tanpuinaDelhi()
    {
        return Excel::download(new TDelhiExport, 'Tanpuina Delhi.xlsx');
    }

    public function tanpuinaLakshadeep()
    {
        return Excel::download(new TLakshadeepExport, 'Tanpuina Lakshadeep.xlsx');
    }

    public function tanpuinaPondicherry()
    {
        return Excel::download(new TPondicherryExport, 'Tanpuina Pondicherry.xlsx');
    }

    public function tanpuinaLadakh()
    {
        return Excel::download(new TLadakhExport, 'Tanpuina Ladakh.xlsx');
    }

    public function tanpuinaOthers()
    {
        return Excel::download(new TOthersExport, 'Tanpuina Inida Ram Pawn.xlsx');
    }

    public function tanpuinaAizawl()
    {
        return Excel::download(new TAizawlExport, 'Tanpuina Aizawl.xlsx');
    }

    public function tanpuinaLunglei()
    {
        return Excel::download(new TLungleiExport, 'Tanpuina Lunglei.xlsx');
    }

    public function tanpuinaMamit()
    {
        return Excel::download(new TMamitExport, 'Tanpuina Mamit.xlsx');
    }

    public function tanpuinaKolasib()
    {
        return Excel::download(new TKolasibExport, 'Tanpuina Kolasib.xlsx');
    }

    public function tanpuinaChamphai()
    {
        return Excel::download(new TChamphaiExport, 'Tanpuina Champhai.xlsx');
    }

    public function tanpuinaSerchhip()
    {
        return Excel::download(new TSerchhipExport, 'Tanpuina Serchhip.xlsx');
    }

    public function tanpuinaSiaha()
    {
        return Excel::download(new TSiahaExport, 'Tanpuina Siaha.xlsx');
    }

    public function tanpuinaSaitual()
    {
        return Excel::download(new TSaitualExport, 'Tanpuina Saitual.xlsx');
    }

    public function tanpuinaHnahthial()
    {
        return Excel::download(new THnahthialExport, 'Tanpuina Hnahthial.xlsx');
    }

    public function tanpuinaKhawzawl()
    {
        return Excel::download(new TKhawzawlExport, 'Tanpuina Khawzawl.xlsx');
    }




}

